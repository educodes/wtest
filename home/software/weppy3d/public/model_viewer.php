<?php
$file_dir = WP_CONTENT_DIR . '/uploads/model_3D/';
if(!file_exists($file_dir))wp_mkdir_p($file_dir);
add_action( 'woocommerce_product_after_tabs', 'my_product_after_tabs' );
wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css', false, '5.2.0', 'all' );
wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js',  array(), null, true );
wp_enqueue_script('model_viewer', 'https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js',  array(), null, true );
wp_enqueue_script('model_viewer');

add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
function add_module_to_my_script($tag, $handle, $src)
{
    if ("model_viewer" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}
function load_my_custom_js(){
  ?>
  	<script type="text/javascript">	
	(function($){
    	jQuery(document).ready(function(){
      		$("#wc_file_3d").on('change', function(evt){
					var f = evt.target.files[0]; 
				    const modelViewer = document.querySelector('#wc_model_3d');
				    var url = URL.createObjectURL(evt.target.files[0]);
				    modelViewer.src = url;
                    modelViewer.dismissPoster();
					$("#wc_model_3d").show();
			});
    	});
  	})(jQuery);
  	
  	</script>
  <?php 
}
add_action( 'admin_head', 'load_my_custom_js');
function my_product_after_tabs() {
   
echo'<a class="button primary" href="#">Buy Now</a>';
}


## ---- 1. Backend ---- ##
function registro(){
  register_rest_route(
      "plz","registro",
      array(
          'methods'=>'GET',
          'callback'=>'plz_registro',
          'schema'          => null,
      )
  ); 
}
function plz_registro(){
	WPBMap::addAllMappedShortcodes();
	$url="https://weppydev.com.co/prueba/wp-content/uploads/model_3D/94-3.glb";
   $output['rendered'] = apply_filters( 'the_content',"wwwwwwwww" );
	return $output;

}
add_action("rest_api_init","registro");
function model_3D_upload_dir( $dirs ) {
	    $dirs['subdir'] = '/model_3D';
	    $dirs['path'] = $dirs['basedir'] . '/model_3D';
	    $dirs['url'] = $dirs['baseurl'] . '/model_3D';
	    return $dirs;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);
function my_myme_types($mime_types){
    $mime_types['glb'] = 'application/glb'; 
    return $mime_types;
}

add_action('post_edit_form_tag', 'update_edit_form' );
function update_edit_form() {
    echo ' enctype="multipart/form-data"';
}

add_action( 'add_meta_boxes', 'create_custom_meta_box' );
if ( ! function_exists( 'create_custom_meta_box' ) )
{
    function create_custom_meta_box()
    {
        add_meta_box(
            'custom_product_model_3d',
            __( 'Modelo 3d<em>(optional)</em>', 'woocommerce' ),
            'add_custom_product_model_3d',
            'product',
            'normal',
            'default'
        );
    }
}

//  Custom metabox content in admin product pages
if ( ! function_exists( 'add_custom_product_model_3d' ) ){
    function add_custom_product_model_3d( $post ){
	  $arrayData = get_post_meta($post->ID, 'wc_file_3d', true) ? get_post_meta($post->ID, 'wc_file_3d', true) : '';
	  $url="";
	  if($arrayData!="" ){
		 $url=$arrayData['url'];
	  }
	  echo '<model-viewer id="wc_model_3d" auto-rotate   style="width:100%;height:300px;'.($url==""?' display:none':'').'"  
	        alt="Neil Armstrong'."'s".' Spacesuit from the Smithsonian Digitization Programs Office and National Air and Space Museum"
	        src="'.$url.'" ar ar-modes="webxr scene-viewer quick-look" 
              shadow-intensity="1" camera-controls touch-action="pan-y">
           </model-viewer>';
      echo '<input type="file" id="wc_file_3d" name="wc_file_3d"  accept=".glb" />';
    }
}
add_action( 'save_post', 'save_custom_product_model_3d' );
function save_custom_product_model_3d($post_id ) {

    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( ABSPATH . 'wp-admin/includes/file.php' );
    }

    
	if(!isset($_FILES['wc_file_3d'])){
	  return;
	}
	$files = $_FILES['wc_file_3d'];
    if ($files['name']) {
		$name= explode(".", $files['name']);
		$name=$post_id.".".$name[count($name)-1];
		$upload_overrides = array( 'test_form' => false,'unique_filename_callback'=>$name );
        $uploadedfile = array(
            'name'     => $name,
            'type'     => $files['type'],
            'tmp_name' => $files['tmp_name'],
            'error'    => $files['error'],
            'size'     => $files['size']
        );
		add_filter( 'upload_dir', 'model_3D_upload_dir' );
        $movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		
		remove_filter('upload_dir', 'model_3D_upload_dir');
        if ( $movefile && !isset( $movefile['error'] ) ) {
            $ufiles =  array();
			$uploadedfile['name_file']=$files['name'];
			$movefile['metadata']=$uploadedfile;
            $ufiles = $movefile;
            update_post_meta( $post_id, 'wc_file_3d', $ufiles );

        }
	}
}

## ---- 2. Frontend ---- ##

// Add custom text under single product meta
// 

 add_action('init', 'weppy3d_session_start', 1);
function weppy3d_session_start() {
    if( ! session_id() ) {
        session_start();
    }
}
add_action( 'woocommerce_product_thumbnails', 'add_custom_product_text', 70 );
function add_custom_product_text() {

    global $product;
    $custom_text = get_post_meta( $product->get_id(), 'wc_file_3d', true );
   $attachment_ids = $product->get_gallery_image_ids();
   $Original_image_url = wp_get_attachment_url( $attachment_ids[0] );
    
    if( empty($custom_text) ) return;
	$array=array($product->get_id()."-".bin2hex(random_bytes(10)));
	$key=bin2hex(random_bytes(10));
	$_SESSION['model3d_key']=array($product->get_id()."-".$key);
	
	 echo '<a href="#" class="woocommerce-product-gallery__trigger" id="model_3d_btn_modal" data="'.get_site_url()."/model3d?modelo_id=".$product->get_id()."&modelo_key=".$key.'"><img draggable="false" role="img" class="emoji" alt="🔍" src="https://s.w.org/images/core/emoji/14.0.0/svg/1f50d.svg"></a>';
    echo '<model-viewer id="iframe_model_3d_principal"  image="https://weppydev.com.co/prueba/wp-content/uploads/model_3D/cyclorama_hard_light_1k.hdr"  poster="'.$Original_image_url.'" alt="Neil Armstrong'."'".'s Spacesuit from the Smithsonian Digitization Programs Office and National Air and Space Museum" data="'.get_site_url()."/?model_url=".$product->get_id()."-".$key.'" ar ar-modes="webxr scene-viewer quick-look"   studio_small_09_1k.hdr shadow-intensity="1" camera-controls touch-action="pan-y"></model-viewer>';

}
function modal_iframe() {
?>
<!-- Modal 3d -->
<script>
	var arrayVariante=[];
	(function($){
    	jQuery(document).ready(function(){
      		$(".woocommerce-product-gallery__image").remove();
			$(".woocommerce-product-gallery__image--placeholder").remove();
		    $( "#model_3d_btn_modal" ).click(function() {
				 //var recu=$("#iframe_model_3d_principal")[0].contentWindow.recuperar();
				 //const modelViewer = document.querySelector("#iframe_model_3d");
				 //modelViewer.src = recu;
				 //modelViewer.dismissPoster();
                 $('#modal_3d').modal('show');
			});
			if ($("#iframe_model_3d_principal").length > 0 ){
				    const modelViewer = document.querySelector("#iframe_model_3d_principal");
				    const modelViewer2 = document.querySelector("#iframe_model_3d");
				     var urlt=$("#iframe_model_3d_principal").attr("data");
				     $("#iframe_model_3d_principal").removeAttr( "data" );
					 fetch(urlt).then(function(response) {
					  if(response.ok) {
						response.blob().then(function(miBlob) {
						  var objeto= URL.createObjectURL(miBlob);
						  modelViewer.src =objeto;
						  modelViewer.dismissPoster();
						  modelViewer2.src =objeto;
						  modelViewer2.dismissPoster();
						  modelViewer.addEventListener('load', () => {
							arrayVariante= modelViewer.availableVariants;
							if($("#pa_color" ).val()!=""){
							   if(arrayVariante.indexOf($("#pa_color" ).val())!=-1){
								   modelViewer.variantName =$("#pa_color" ).val();
								   modelViewer2.variantName =$("#pa_color" ).val();
							   }
							}
                         });
						});
					  } else {
						console.log("Respuesta de red OK pero respuesta HTTP no OK");
					  }
					});
				$( "#pa_color" ).change(function() {
				    if(arrayVariante.indexOf($(this).val())!=-1){
						 modelViewer.variantName =$(this).val();
						 modelViewer2.variantName =$(this).val();
					}
				});
				
			}
			});
  	})(jQuery);

</script>
<div class="modal fade bd-example-modal-lg" id="modal_3d" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-xl">
    <div class="modal-content" style="height: calc(88vh - 80px);margin-bottom: 40px;">
      <div class="modal-body">
		    <button type="button" style="float: right;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <model-viewer style="width:100%;height:100%" id="iframe_model_3d" image="https://weppydev.com.co/prueba/wp-content/uploads/model_3D/cyclorama_hard_light_1k.hdr"   alt="Neil Armstrong'."'".'s Spacesuit from the Smithsonian Digitization Programs Office and National Air and Space Museum"  ar ar-modes="webxr scene-viewer quick-look"   studio_small_09_1k.hdr shadow-intensity="1" camera-controls touch-action="pan-y"></model-viewer>
      </div>
      
    </div>
  </div>
</div>
<?php
}
add_action( 'wp_footer', 'modal_iframe' );
add_action( 'init', 'child_theme_init' );
add_action( 'init', 'ulr_temporal_model' );
function ulr_temporal_model() {
   if ( !isset( $_GET['model_url']) ) {
            return;	
   }
   if(!isset($_SESSION['model3d_key'])){
	   //return;
   }
   $keyif= array_search($_GET['model_url'],$_SESSION['model3d_key']);
   if($keyif==false){
	  // return;
   }
   $array=explode("-",$_SESSION['model3d_key'][$keyif]);
   $product = wc_get_product($array[0]);
   $Original_image_url="";
   $model3d_url = get_post_meta( $product->get_id(), 'wc_file_3d', true );
   header('Content-Type: application/glb');
   header('Content-length: ' . filesize($model3d_url['file']));
   readfile($model3d_url['file']);
   //unset($_SESSION['model3d_key'][$keyif]);
   //$_SESSION['model3d_key']=array_values($_SESSION['model3d_key']);
   exit();
}
function child_theme_init() {
  
   if ( !isset( $_GET['modelo_id'] ,$_GET['modelo_key']) ) {
            return;	
   }
	
$clave = array_search($_GET['modelo_id']."-".$_GET['modelo_key'], $_SESSION['model3d_key']);
   //print_r($_SESSION['model3d_key'][$clave]);
   $product = wc_get_product(94);
   $Original_image_url="";
   $model3d_url = get_post_meta( $product->get_id(), 'wc_file_3d', true );
   echo '<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>';
   echo '<script>
   var model="";
   function recuperar(){
     return model;
   }
fetch("'.get_site_url()."/?model_url=".$_GET['modelo_id']."-".$_GET['modelo_key'].'").then(function(response) {
  if(response.ok) {
    response.blob().then(function(miBlob) {
      const modelViewer = document.querySelector("#wc_model_3d");
	  model= URL.createObjectURL(miBlob);
      modelViewer.src = URL.createObjectURL(miBlob);
      modelViewer.dismissPoster();
    });
  } else {
    console.log("Respuesta de red OK pero respuesta HTTP no OK");
  }
})
.catch(function(error) {
  console.log("Respuesta de red OK pero respuesta HTTP no OK" + error.message);
});
</script>';
   echo '<model-viewer style="width:100%;height:100%" id="wc_model_3d" image="https://weppydev.com.co/prueba/wp-content/uploads/model_3D/cyclorama_hard_light_1k.hdr"  poster="'.$Original_image_url.'" alt="Neil Armstrong'."'".'s Spacesuit from the Smithsonian Digitization Programs Office and National Air and Space Museum"  ar ar-modes="webxr scene-viewer quick-look"   studio_small_09_1k.hdr shadow-intensity="1" camera-controls touch-action="pan-y"></model-viewer>';
   exit();
}



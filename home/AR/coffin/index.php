
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    
    <!-- Import the component -->
<link media="all" rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
<script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<link media="all" rel="stylesheet" type="text/css" href="https://pictogrammers.github.io/@mdi/font/6.9.96/css/materialdesignicons.min.css">
<link media="all" rel="stylesheet" type="text/css" href="https://weppydev.com.co/cofres/asset/model.css">
    
    <title>Model 3D</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'PT Sans', sans-serif;
        }


        .header {
            background-color: #2E3092;
            padding: 15px;
            position: fixed;
            top: 0;
            z-index: 2;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        
        .img_logo{
            width: 220px;
            object-fit: cover;
        }
        
         .icon_container{
            display: flex;
            align-items: center ;
        }

        .icon_arrow{
            width: 40px;
        }



        .grid-container {
            display: grid;
            grid-template-columns: 60% 40%;
            background-color: #EFEFF1;
            height: 100vh;
            padding: 20px;
        }

        .viewmodel_3d{
            margin-top: 100px;
        }

        .info_model {
            padding: 10px;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            height: 100%;
            justify-content: center;
        }

        .model_3d {
            width: 100%;
            height: 100%;
        }

        .title_model{
            font-size: 25px;
            color: #2E3092;
        }

        .grid-item{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .grid-item h2{
            font-size: 18px;
            font-weight: bold;
        }
        
        .btn_catalogo{
            background-color: #2E3092;
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 100px;
            font-size: 20px;
        }

        .container_colors{
            display: grid;
            grid-auto-flow: column;
            grid-template-columns: 50px 50px 50px;
            column-gap: 10px;
        }

        .colors{
            width: 50px;
            object-fit: cover;
            border-radius: 100px;
            margin-bottom: 20px;
        }


        @media  (max-width: 1024px) {
            .grid-container {
            display: grid;
            grid-template-columns: 1fr;
          /*  grid-template-rows: 2fr 1fr;*/
          height: 100%;
        }

        .info_model {
            min-width: 280px;
        }
        
        .viewmodel_3d{
            height: 450px;
        }
        }

       
    </style>
</head>

<body>
    <header class="header">
        <figure class="logo">
            <img src="./assests/logo-superior.png" alt="logo organizacion la esperanza" class="img_logo">
        </figure>
        <figure class="icon_container">
            <img class="icon_arrow" src="./assests/icon_arrow.png" alt="">
        </figure>
    </header>
    <div class="row" style="margin-top: 120px !important;min-height: 85vh;padding: 0; margin: 0;">
         <div class="col-lg-8" style="min-height:50vh">
           <model-viewer style="width:100%;height:100%" src="https://weppydev.com.co/cofres/animacion12.glb" animation-name="abrirventana" id="paused-change-demo" camera-controls touch-action="pan-y"  ar ar-modes="webxr scene-viewer" shadow-intensity="1" src="" alt="La Esperansa">
                 <button class="Hotspot" slot="hotspot-1" data-position="-0.04991915450933499m 0.5791469289139369m 0.9873641427538742m" data-normal="-0.06625436154889391m 0.9978027658689606m -2.377673319116579e-8m" data-visibility-attribute="visible"><i class="mdi mdi-eye"></i></button>
                 <button class="Hotspot" slot="hotspot-2" data-position="-0.5022307566229018m 0.17400040062509986m 0.09894002085926479m" data-normal="-0.9992212615762258m -0.039457197239739165m 0m" data-visibility-attribute="visible"><i class="mdi mdi-eye"></i></button>
                 <button class="Hotspot" slot="" style="position: absolute;top:20px;right: 30px;"><i class="mdi mdi-magnify"></i></button>
            </model-viewer>
         </div>
        <div class="col-lg-4">
                 <div class="info_model">
            <div class="grid-item">
                <h1 class="title_model">Cofre Italiano</h1>
            </div>
            <div class="grid-item"> 
                <p>Cofres elaborados madera inmunizada, con acabado cabo en pintura fina y apliques de manijas metálicas y tapizado completo con espuma y satín capitoneado</p>
            </div>
            <div class="grid-item">
                <h2>Medidas</h2>
                <p>Normal, Extra , Super extra</p>
            </div>
            <div class="grid-item">
                <h2>Material</h2>
                <p>Madera inmunizada</p>
            </div>
            <div class="grid-item">
                <h2>Colores</h2>
                <div class="container_colors">
                    <img class="colors" src="./assests/Color Café.jpeg" alt="">
                    <img class="colors" src="./assests/Color Rojo Inglés.jpeg" alt="">
                    <img class="colors" src="./assests/Color Vino Tinto.jpeg" alt="">
                </div>
            </div>
            <div class="grid-item">
                <h2>Tono</h2>
                <div class="container_colors">
                    <img class="colors" style="width: 74px;" src="./assests/roughness2_Mesa de trabajo 1.png" alt="">
                 <img class="colors" style="width: 74px;margin-left:10px" src="./assests/roughness_Mesa de trabajo 1.png" alt="">
                </div>
            </div>

            <div class="catalogo_container">
                <button class="btn_catalogo">Catalogo</button>
            </div>
        </div>
         </div>
    </div>
  
             
<div class="modal fade bd-example-modal-lg" id="modal_3d" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-xl">
    <div class="modal-content" style="height: calc(88vh - 80px);margin-bottom: 40px;">
          <div class="modal-body">
    		    <button type="button" style="float: right;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <model-viewer style="width:100%;height:100%" animation-name="abrirventana" id="model_modal" camera-controls touch-action="pan-y"  ar ar-modes="webxr scene-viewer" shadow-intensity="1" src="" alt="La Esperansa">
                 <button class="Hotspot" slot="hotspot-1" data-position="-0.04991915450933499m 0.5791469289139369m 0.9873641427538742m" data-normal="-0.06625436154889391m 0.9978027658689606m -2.377673319116579e-8m" data-visibility-attribute="visible"><i class="mdi mdi-eye"></i></button>
                 <button class="Hotspot" slot="hotspot-2" data-position="-0.5022307566229018m 0.17400040062509986m 0.09894002085926479m" data-normal="-0.9992212615762258m -0.039457197239739165m 0m" data-visibility-attribute="visible"><i class="mdi mdi-eye"></i></button>
          </model-viewer>
    </div>
  </div>
</div>
    <script  src="https://weppydev.com.co/cofres/asset/model.js"></script>
</body>

</html>
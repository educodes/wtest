 var model="";
   var myModal = new bootstrap.Modal(document.getElementById('modal_3d'), {});
   const modelViewer = document.querySelector('#paused-change-demo');
   const modelViewer2 = document.querySelector('#model_modal');
   fetch("https://weppydev.com.co/cofres/animacion12.glb").then(function(response) {
      if(response.ok) {
        response.blob().then(function(miBlob) {
    	  model= URL.createObjectURL(miBlob);
          modelViewer.src = model;
          modelViewer2.src = model;
          modelViewer2.addEventListener('load', cargar());
        });
      } else {
        console.log("Respuesta de red OK pero respuesta HTTP no OK");
      }
    })
    .catch(function(error) {
      console.log("Respuesta de red OK pero respuesta HTTP no OK" + error.message);
    });
   function recuperar() {
        return model;
   }
   async function play(tipo,refrencia) {
     refrencia.pause();
     if(tipo=="hotspot-1"){
        refrencia.animationName = refrencia.animationName === 'abrirventana' ? 'cerrarventana' : 'abrirventana'; 
     }
     if(tipo=="hotspot-2"){
          refrencia.animationName = refrencia.animationName === 'abrircofre' ? 'cerrarcofre' : 'abrircofre';
     }
     if(tipo=="hotspot-2" || tipo=="hotspot-1"){
         refrencia.animationName=refrencia.animationName;
         await refrencia.updateComplete;
         refrencia.play({repetitions:1});
     }else{
        myModal.show();
     }
   }
  function cargar(tipo) {
       modelViewer.querySelectorAll('button').forEach((hotspot) => {
         hotspot.addEventListener('click', () => play(hotspot.slot,modelViewer));
       });
       modelViewer2.querySelectorAll('button').forEach((hotspot) => {
         hotspot.addEventListener('click', () => play(hotspot.slot,modelViewer2));
       });
  }
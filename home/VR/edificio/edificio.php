<!-- Import the component -->
<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<style>
@font-face {
  font-family: 'Roboto-Regular';
  src: url('fonts/Roboto-Regular.ttf') format('truetype');
  font-style: normal;
  font-weight: normal;
}
.Hotspot {
    background: transparent;
    border-radius: 32px;
    border: 0px;
    //box-shadow: rgb(0 0 0 / 25%) 0px 2px 4px;
   // box-sizing: border-box;
    cursor: pointer;
    height: 24px;
    padding: 8px;
    position: relative;
    transition: opacity 0.3s ease 0s;
    width: 24px;
    
}

.annotation-wrapper ::slotted(*) {
    pointer-events: initial;
}


.annotation-wrapper ::slotted(*) {
    opacity: var(--max-hotspot-opacity, 1);
    transition: opacity 0.3s;
}
.btn-close2 {
    position: absolute;
    right: 0;
    top:0;
    width: 40px;
    height: 40px;
    padding: 0px;
    margin:20px 20px 0 0;
}
.colum-border{
    border-color: #ccc;
   border-left: 1px solid #ececec;
   font-size: 14px;
    word-wrap: break-word;
}
.HotspotAnnotation {
    background: rgb(255, 255, 255);
    border-radius: 4px;
    box-shadow: rgb(0 0 0 / 25%) 0px 2px 4px;
    color: rgba(0, 0, 0, 0.8);
    display: block;
    font-family: Futura, "Helvetica Neue", sans-serif;
    font-size: 18px;
    font-weight: 700;
    left: calc(100% + 1em);
    max-width: 128px;
    overflow-wrap: break-word;
    padding: 0.5em 1em;
    position: absolute;
    top: 50%;
    width: max-content;
}

.Hotspot > * {
    opacity: 1;
    transform: translateY(-50%);
}
* {
  scrollbar-width: 10px;/*thin;*/
  scrollbar-color: #b7b7b7c;
}
*::-webkit-scrollbar {
  width: 10px;
}
*::-webkit-scrollbar-track {
  background: white;     
}

*::-webkit-scrollbar-thumb {
  background-color: #b7b7b7;   
  border-radius: 7px;    
}
.btn-info {
    color: white;
    background-color: #346573;
    border-color: #346573; 
}
.plano_modal_imagen{
    display:none;
    background:white;
    height:100vh;
    padding:0px;
    position:absolute
}
.container2{
    padding:0px;
    margin: 0px;
    overflow: auto;
    max-height: 100vh;
}


</style>

<div style="width:100%;height:100%;background:#f3f0ed;margin:0px;overflow-x:hidden;" class="row" >
        <model-viewer id="hotspot-camera-view-demo"  camera-controls touch-action="pan-y" class="col-6" style="height:100%" src="edificios2.glb"  ar  alt="A 3D transparency test"
         >
            
            
            <button class="Hotspot" slot="hotspot-1" data-position="-0.6366706973420158m 23.015480710684336m 3.504807472229004m" data-normal="0m 0m 1m" data-target="-0.6366706973420158m 23.015480710684336m 3.504807472229004m"></button>
            <button class="Hotspot" slot="hotspot-2" data-position="2.184353407224084m 17.0061044466462m 4.449848413467407m" data-normal="0m 0m 1m" data-target="2.184353407224084m 17.0061044466462m 4.449848413467407m"></button>
            <button class="Hotspot" slot="hotspot-3" data-position="2.212834225789279m 15.262924593480436m 5.647112932396118m" data-normal="0m 0m 1m" data-target="2.212834225789279m 15.262924593480436m 5.647112932396118m"></button>
            <button class="Hotspot" slot="hotspot-5" data-position="-0.6236318945425208m 14.43038721769882m 4.0121989250183105m" data-normal="0m 0m 1m" data-target="-0.6236318945425208m 14.43038721769882m 4.0121989250183105m"></button>
            <button class="Hotspot" slot="hotspot-6" data-position="-0.7106439925918505m 12.628756167339315m 4.0121989250183105m" data-normal="0m 0m 1m" data-target="-0.7106439925918505m 12.628756167339315m 4.0121989250183105m"></button>
            <button class="Hotspot" slot="hotspot-7" data-position="-5.4712086463663185m 16.26965177594616m 2.782190186960337m" data-normal="-0.9999999999999911m 0m -1.3435883843274954e-7m" data-target="-5.4712086463663185m 16.26965177594616m 2.782190186960337m"></button>
            <button class="Hotspot" slot="hotspot-8" data-position="-5.4712086346520366m 14.266213063212303m 2.695003647699712m" data-normal="-0.9999999999999911m 0m -1.3435883843274954e-7m"   data-orbit="53.28236deg 95.91318deg 0.1102844m" data-target="-0.07579391m 0.1393538m -0.00851791m"></button>
        </model-viewer>
        <div class="col-6 row container2" style="overflow-x:hidden;">

            <div class="col-4 col-sm-6 col-md-6 col-lg-4 btnplano" data-index='hotspot-1' style="margin-bottom:30px">
                <img  style="width:100%;height:auto" src="imagen/tipo1.png" alt="Girl in a jacket">
                <div style="width:100%;background: white;padding-left:12px;padding-right:12px">
                     <div style="font-family: Roboto-Regular;font-size: 20px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              TRINITY WEPPY
                     </div> 
                     <div class="row" style="padding-top: 10px;padding-bottom: 17px;">
                             <div class="col-2 colum-border" style="border:0;font-size:8px">
                                 BEDS<br>2
                             </div>
                              <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 BATHS<br>2
                             </div>
                             <div class="col-3 colum-borde" style="border-left: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br>805
                             </div>
                             <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 FLOOR<br>19
                             </div>
                             <div class="col-3 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 EXPOSURE<br>S
                             </div>
                     </div>
                </div>
            </div>

            <div class="col-4 col-sm-6 col-md-6 col-lg-4 btnplano"  data-index='hotspot-2' style="margin-bottom:10px">
                <img  style="width:100%;height:auto" src="imagen/tipo2.png" alt="Girl in a jacket">
                <div style="width:100%;background: white;padding-left:12px;padding-right:12px">
                     <div style="font-family: Roboto-Regular;font-size: 20px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              TRINITY WEPPY
                     </div> 
                     <div class="row" style="padding-top: 10px;padding-bottom: 17px;">
                             <div class="col-2 colum-border" style="border:0;font-size:8px">
                                 BEDS<br>2
                             </div>
                              <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 BATHS<br>2
                             </div>
                             <div class="col-3 colum-borde" style="border-left: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br>805
                             </div>
                             <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 FLOOR<br>19
                             </div>
                             <div class="col-3 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 EXPOSURE<br>S
                             </div>
                     </div>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-md-6 col-lg-4" style="margin-bottom:10px">
                <img  style="width:100%;height:auto" src="imagen/tipo3.png" alt="Girl in a jacket">
                <div style="width:100%;background: white;padding-left:12px;padding-right:12px">
                     <div style="font-family: Roboto-Regular;font-size: 20px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              TRINITY WEPPY
                     </div> 
                     <div class="row" style="padding-top: 10px;padding-bottom: 17px;">
                             <div class="col-2 colum-border" style="border:0;font-size:8px">
                                 BEDS<br>2
                             </div>
                              <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 BATHS<br>2
                             </div>
                             <div class="col-3 colum-borde" style="border-left: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br>805
                             </div>
                             <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 FLOOR<br>19
                             </div>
                             <div class="col-3 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 EXPOSURE<br>S
                             </div>
                     </div>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-md-6 col-lg-4" style="margin-bottom:10px">
                <img  style="width:100%;height:auto" src="imagen/tipo4.png" alt="Girl in a jacket">
                <div style="width:100%;background: white;padding-left:12px;padding-right:12px">
                     <div style="font-family: Roboto-Regular;font-size: 20px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              TRINITY WEPPY
                     </div> 
                     <div class="row" style="padding-top: 10px;padding-bottom: 17px;">
                             <div class="col-2 colum-border" style="border:0;font-size:8px">
                                 BEDS<br>2
                             </div>
                              <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 BATHS<br>2
                             </div>
                             <div class="col-3 colum-borde" style="border-left: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br>805
                             </div>
                             <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 FLOOR<br>19
                             </div>
                             <div class="col-3 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 EXPOSURE<br>S
                             </div>
                     </div>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-md-6 col-lg-4" style="margin-bottom:10px">
                <img  style="width:100%;height:auto" src="imagen/tipo1.png" alt="Girl in a jacket">
                <div style="width:100%;background: white;padding-left:12px;padding-right:12px">
                     <div style="font-family: Roboto-Regular;font-size: 20px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              TRINITY WEPPY
                     </div> 
                     <div class="row" style="padding-top: 10px;padding-bottom: 17px;">
                             <div class="col-2 colum-border" style="border:0;font-size:8px">
                                 BEDS<br>2
                             </div>
                              <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 BATHS<br>2
                             </div>
                             <div class="col-3 colum-borde" style="border-left: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br>805
                             </div>
                             <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 FLOOR<br>19
                             </div>
                             <div class="col-3 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 EXPOSURE<br>S
                             </div>
                     </div>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-md-6 col-lg-4" style="margin-bottom:10px">
                <img  style="width:100%;height:auto" src="imagen/tipo2.png" alt="Girl in a jacket">
                <div style="width:100%;background: white;padding-left:12px;padding-right:12px">
                     <div style="font-family: Roboto-Regular;font-size: 20px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              TRINITY WEPPY
                     </div> 
                     <div class="row" style="padding-top: 10px;padding-bottom: 17px;">
                             <div class="col-2 colum-border" style="border:0;font-size:8px">
                                 BEDS<br>2
                             </div>
                              <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 BATHS<br>2
                             </div>
                             <div class="col-3 colum-borde" style="border-left: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br>805
                             </div>
                             <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 FLOOR<br>19
                             </div>
                             <div class="col-3 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 EXPOSURE<br>S
                             </div>
                     </div>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-md-6 col-lg-4" style="margin-bottom:10px">
                <img  style="width:100%;height:auto" src="imagen/tipo3.png" alt="Girl in a jacket">
                <div style="width:100%;background: white;padding-left:12px;padding-right:12px">
                     <div style="font-family: Roboto-Regular;font-size: 20px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              TRINITY WEPPY
                     </div> 
                     <div class="row" style="padding-top: 10px;padding-bottom: 17px;">
                             <div class="col-2 colum-border" style="border:0;font-size:8px">
                                 BEDS<br>2
                             </div>
                              <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 BATHS<br>2
                             </div>
                             <div class="col-3 colum-borde" style="border-left: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br>805
                             </div>
                             <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 FLOOR<br>19
                             </div>
                             <div class="col-3 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 EXPOSURE<br>S
                             </div>
                     </div>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-md-6 col-lg-4" style="margin-bottom:10px">
                <img  style="width:100%;height:auto" src="imagen/tipo4.png" alt="Girl in a jacket">
                <div style="width:100%;background: white;padding-left:12px;padding-right:12px">
                     <div style="font-family: Roboto-Regular;font-size: 20px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              TRINITY WEPPY
                     </div> 
                     <div class="row" style="padding-top: 10px;padding-bottom: 17px;">
                             <div class="col-2 colum-border" style="border:0;font-size:8px">
                                 BEDS<br>2
                             </div>
                              <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 BATHS<br>2
                             </div>
                             <div class="col-3 colum-borde" style="border-left: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br>805
                             </div>
                             <div class="col-2 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 FLOOR<br>19
                             </div>
                             <div class="col-3 colum-border" style="border-left: 1px solid black;font-size:8px">
                                 EXPOSURE<br>S
                             </div>
                     </div>
                </div>
            </div>
            <div class="col-6 plano_modal_imagen modal_imagen animate__animated animate__fadeInRight" style="overflow-x:hidden;max-width:50%">
                  <button id="cerrarModalImag" type="button" class="btn-close2 btn btn-dark rounded-circle " >
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                 </button>
                  <div style="width:100%;display:flex;justify-content: center;align-items: center; height: calc(76% -55px);margin-top: 40px;position:relative;margin-bottom: 35px;">
                       <img  id="modal-img" style="width:70%;height:height: fit-content;" src="imagen/tipo1.png" alt="Girl in a jacket">
                       <button id="btnAbrirModal2" type="button"  class="btn-close2 btn btn-dark rounded-circle " style="bottom:0;top: auto;margin-right:10px;right:30" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-fullscreen" viewBox="0 0 16 16">
                              <path d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                       </button>
                </div>
                <div style="width:100%;height:24vh;margin:0" class="row">
                     <div class="col-3" style="display:flex;justify-content: center;align-items: center;">
                        <img  src="imagen/bloque.png" style="width:55%">
                     </div>
                     <div class="col-9">
                          <div style="font-family: Roboto-Regular;font-size: 26px;" id="modal-zona">TRINITY </div> 
                          <div style="font-family: Roboto-Regular;font-size: 26px;display: flex;align-items: center;"><span style="font-size: 12px;" >Unit </span>  <span id="modal-unit">1999</span></div>
                          <div class="row">
                             <div class="col-2 colum-border"  style="border:0px">
                                 BEDS <br><span id="modal-beds"></span>
                             </div>
                              <div class="col-2 colum-border">
                                 BATHS <br><span id="modal-bath"></span>
                             </div>
                             <div class="col-3 colum-border">
                                 AREA (SQ.FT.) <br><span id="modal-area"></span>
                             </div>
                             <div class="col-2 colum-border">
                                 FLOOR <br><span id="modal-floor"></span>
                             </div>
                             <div class="col-3 colum-border">
                                 EXPOSURE <br><span id="modal-exposure"></span>
                             </div>
                          </div>
                          <div class="row" style="padding:30px;">
                                <button type="button" class="btn btn-outline-dark col-4">Descargar plano</button>
                                <button type="button" class="btn btn-info col-4" style="margin-left:10px;color:white;background-color: #346573;">Información requerida</button>
                          </div>
                     </div>
               </div>
            </div>
            <div class="col-12 row plano_modal_imagen modal_imagen2" style="background:transparent;left: 0;margin:0">
                 <div class="col-3   animate__animated animate__fadeInLeft" style="background:#f3f0ed;height:100vh;display: flex; align-items: end;padding-left:20px">
                    <div style="height:30vh;width:100%">
                          <div style="font-family: Roboto-Regular;font-size: 26px;">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                              </svg>
                              <span id="modal-zona2">TR</span>
                          </div> 
                          <div style="font-family: Roboto-Regular;font-size: 26px;display: flex;align-items: center;padding-left:32px"><span style="font-size: 12px;">Unit </span>  <span id="modal-unit2"></span></div>
                          <div class="row" style="margin-top:13px">
                             <div class="col-2 colum-border" style="border-right: 1px solid black;font-size:8px">
                                 BEDS<br><span id="modal-beds2"></span>
                             </div>
                              <div class="col-2 colum-border" style="border-right: 1px solid black;font-size:8px">
                                 BATHS<br><span id="modal-bath2"></span>
                             </div>
                             <div class="col-3 colum-borde" style="border-right: 1px solid black;font-size:8px">
                                 AREA (SQ.FT.)<br><span id="modal-area2"></span>
                             </div>
                             <div class="col-2 colum-border" style="border-right: 1px solid black;font-size:8px">
                                 FLOOR<br><span id="modal-floor2"></span>
                             </div>
                             <div class="col-3 colum-border" style="border-right: 1px solid black;font-size:8px">
                                 EXPOSURE<br><span id="modal-exposure2"></span>
                             </div>
                          </div>
                          <div style="width:100%;display: grid; padding: 10px;margin-top:20px">
                               <button type="button" class="btn btn-outline-dark ">Descargar plano</button>
                               <button type="button" class="btn btn-info " style="margin-top:10px">Información requerida</button>
                          </div>
                         
                    </div>

                </div>
                 <div class="col-9 row animate__animated animate__fadeInRight" style="background:white;height:100vh">
                     <button id="btnCerrarModal2" type="button" class="btn-close2 btn btn-dark rounded-circle " >
                     <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                      <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                    </svg>
                 </button>
                     <div class="col-2">
                         
                     </div>
                     <div class="col-10" style="display: flex;justify-content:center;align-items:center;">
                          <img  id="modal-img2" style="width:65%;height:auto" src="imagen/tipo1.png" alt="Girl in a jacket">
                     </div>
                </div>
            </div>
        </div>
</div>
<script type="module">
  var arraydataBoton=[];
  var arraydata=[
      {id:'hotspot-1',img:'imagen/tipo1.png',zona:'TRINITY WEPPY',unit:'100',beds:'2',baths:'1',area:'695',floor:'12',exposure:'A',animacion:'CubeD1out'},
      {id:'hotspot-2',img:'imagen/tipo2.png',zona:'TRINITY WEPPY',unit:'101',beds:'2',baths:'1',area:'697',floor:'12',exposure:'B',animacion:'CubeA1out'},
      {id:'hotspot-3',img:'imagen/tipo2.png',zona:'TRINITY WEPPY',unit:'102',beds:'2',baths:'1',area:'694',floor:'12',exposure:'C',animacion:'CubeA2out'},
      {id:'hotspot-5',img:'imagen/tipo1.png',zona:'TRINITY WEPPY',unit:'100',beds:'2',baths:'1',area:'695',floor:'12',exposure:'A',animacion:'CubeB1out'},
      {id:'hotspot-6',img:'imagen/tipo2.png',zona:'TRINITY WEPPY',unit:'101',beds:'2',baths:'1',area:'697',floor:'12',exposure:'B',animacion:'CubeB2out'},
      {id:'hotspot-7',img:'imagen/tipo2.png',zona:'TRINITY WEPPY',unit:'102',beds:'2',baths:'1',area:'694',floor:'12',exposure:'C',animacion:'CubeC1out'},
      {id:'hotspot-8',img:'imagen/tipo2.png',zona:'TRINITY WEPPY',unit:'103',beds:'2',baths:'1',area:'696',floor:'12',exposure:'D',animacion:'CubeC2out'},
  ];
  const modalPlano =  document.querySelector('.modal_imagen');
  const modalPlano2 =  document.querySelector('.modal_imagen2');
   const btnPlano =  document.querySelectorAll('.btnplano');
  function cerrar(){
       modalPlano.classList.add('animate__fadeOutRight');
       setTimeout(function(){
           modalPlano.style.display = 'none'
       }, 1000);
  }
  function cerrar2(){
      modalPlano2.style.display = 'none';
  }
  function abrirModal2(){
     // cerrar();
      modalPlano2.style.display = 'flex';
  }
  function buscarBoton(id){
     var arraySelet=arraydataBoton.filter(p => p.slot == id);
     annotationClicked(arraySelet[0]);
  }
  const modelViewer1 = document.querySelector("#hotspot-camera-view-demo");
  const modalImg = document.querySelector("#cerrarModalImag");
  const btnAbrirModal2 = document.querySelector("#btnAbrirModal2");
  const btnCerrarModal2 = document.querySelector("#btnCerrarModal2");

  modalImg.addEventListener('click', (event) => cerrar());
  btnAbrirModal2.addEventListener('click', (event) => abrirModal2());
  btnCerrarModal2.addEventListener('click', (event) => cerrar2());
  btnPlano.forEach(boton => boton.addEventListener('click', (event) => buscarBoton(event.currentTarget.dataset.index)));
  var hotspotCounter=0;
  async function modalImage(id) {
        var arraySelet=arraydata.filter(p => p.id == id);
        modelViewer1.pause();
        modelViewer1.animationName=arraySelet[0].animacion;
        await modelViewer1.updateComplete;
        modelViewer1.play({repetitions:1});
        document.querySelector("#modal-img").src=arraySelet[0].img;
        document.querySelector("#modal-zona").innerHTML=arraySelet[0].zona;
        document.querySelector("#modal-unit").innerHTML=arraySelet[0].unit;
        document.querySelector("#modal-beds").innerHTML=arraySelet[0].beds; 
        document.querySelector("#modal-bath").innerHTML=arraySelet[0].baths; 
        document.querySelector("#modal-area").innerHTML=arraySelet[0].area; 
        document.querySelector("#modal-floor").innerHTML=arraySelet[0].floor; 
        document.querySelector("#modal-exposure").innerHTML=arraySelet[0].exposure; 
        
        document.querySelector("#modal-img2").src=arraySelet[0].img;
        document.querySelector("#modal-zona2").innerHTML=arraySelet[0].zona;
        document.querySelector("#modal-unit2").innerHTML=arraySelet[0].unit;
        document.querySelector("#modal-beds2").innerHTML=arraySelet[0].beds;
        document.querySelector("#modal-bath2").innerHTML=arraySelet[0].baths;
        document.querySelector("#modal-area2").innerHTML=arraySelet[0].area; 
        document.querySelector("#modal-floor2").innerHTML=arraySelet[0].floor; 
        document.querySelector("#modal-exposure2").innerHTML=arraySelet[0].exposure; 
        
        
        modalPlano.classList.remove("animate__fadeOutRight");
        modalPlano.classList.add('animate__fadeInRight');
        modalPlano.style.display = 'block';
        
  }
  const annotationClicked2 = (annotation) => {
      const rect = modelViewer1.getBoundingClientRect();
      const x = event.clientX - rect.left;
      const y = event.clientY - rect.top;
      const positionAndNormal = modelViewer1.positionAndNormalFromPoint(x, y);
      
      if (positionAndNormal == null) {
        console.log('no hit result: mouse = ', x, ', ', y);
        return;
      }
      const {position, normal} = positionAndNormal;
      const hotspot = document.createElement('button');
      hotspot.slot = `hotspot-${hotspotCounter++}`;
      hotspot.classList.add('hotspot');
      hotspot.dataset.position = position.toString();
      hotspot.onclick = function(){
          alert('here be dragons');return false;
      };
      if (normal != null) {
        hotspot.dataset.normal = normal.toString();
      }
      modelViewer1.appendChild(hotspot);
  }
  //modelViewer1.addEventListener('click', (event) => annotationClicked(event));
  
  const annotationClicked = (annotation) => {
    modalImage(annotation.slot);
    let dataset = annotation.dataset;
    modelViewer1.cameraTarget = dataset.target;
    modelViewer1.cameraOrbit = dataset.orbit;
    modelViewer1.fieldOfView = '45deg';
    console.log(JSON.stringify(modelViewer1.availableAnimations));
  }
  modelViewer1.querySelectorAll('button').forEach((hotspot) => {
    hotspot.addEventListener('click', () => annotationClicked(hotspot));
    arraydataBoton.push({slot:hotspot.slot,dataset:{}});
  });
</script>
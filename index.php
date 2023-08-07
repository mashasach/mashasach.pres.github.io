<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/flickity.css " media="screen">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="/icons/favicon.png" type="image/x-icon">



    <title>NVKC PRES</title>

    

    
    <style>
        #renderCanvas{
            width   : 100%;
            height  : 100%;
            touch-action: none;
        }
        #renderCanvas2{
            width   : 100%;
            height  : 100%;
            touch-action: none;
        }
        #renderCanvas3{
            width   : 100%;
            height  : 100%;
            touch-action: none;
        }
    </style>
</head>
<body>

  <div class="header">
    <div class="logo">
    <img src="/images/logo.png">   
</div>
<p class="name">ТОВ НВКЦ "ПРЕС" </p>
<div class="menu-desktop">
    <div class="marg-desktop">
    <nav>
        <a href="#" class="hvr-grow">ГОЛОВНА</a>
        <a href="/contact.php" >КОНТАКТИ</a>
        <a href="/about-company.php" >ПРО КОМПАНІЮ</a>
        
        <div class="line"></div>
      </nav>
    </div>
  </div>
<!--menu_hamburger-->
<div class="visible-menu">
  <div class="menu_hamburger">
      <div class="three col_mob">
        <div class="hamburger" id="hamburger-1">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
  </div>
</div>

</div>
<div style="
    position: fixed;
    top: 0;
    height: 120%;
    z-index: 2;">
    <div class="menu_mob">
 
  <ul>
    <a href="/index.php"><li class="mob_li"><div class="mob_item"><p>ГОЛОВНА</p></div></li></a>
    <a a href="/contact.php"><li class="mob_li"><div class="mob_item"><p>КОНТАКТИ</p></div></li></a>
    <a href="/about-company.php"><li class="mob_li"><div class="mob_item"><p>ПРО КОМПАНІЮ</p></div></li></a>
  </ul>
  </div>
</div>


<!--menu_hamburger-->  
  






<div class="background">
    <div class="title">
        <div class="title-pres"> 
        <h1>ТОВ Науково-Виробничий Комерційний Центр "Прес"</h1>
        <p class="title-pres-2">Виробництво конвеєрів  та комплектуючих</p>
          <div class="buttons">
          <a href="#products"><div class="button1"><p>Наша продукція</p></div></a> 
          <a href="#form"><div class="button2"><p>Зв'язатись з нами</p></div></a> 
          </div>
 
        </div>

    </div>

    
</div>
<div class="circles">
  <div class="advantages">
    <div class="circle"><img class="circle-img" src="/icons/hourglass.png"></div>
    <p class="title-advantage">БІЛЬШЕ 20 РОКІВ НА РИНКУ</p>
    <p class="advantage">ТОВ НВКЦ «Прес» виробляє конвеєри та комплектуючі 
      вже більше 20 років. Це дозволяє нам по справжньому
       розуміти потреби споживача</p>
  </div>
  <div class="advantages">
    <div class="circle"><img class="circle-img" src="/icons/fire.png"></div>
    <p class="title-advantage">МЕТОД ГАРЯЧОЇ ВУЛКАНІЗАЦІЇ</p>
    <p class="advantage">Для підвищення якості, ми освоїли технолгію 
      вироблення гумових роликів методом гарячої вулканізації, 
      що забезпечує високу якість продукції</p>
  </div>
  <div class="advantages">
    <div class="circle"><img class="circle-img" src="/icons/ok.png"></div>
    <p class="title-advantage">ЯКІСТЬ ТА БЕЗПЕКА</p>
    <p class="advantage">Наша продукція має всі необхідні дозволи Державного 
      комітету України з промислової безпеки, 
      охорони праці та гірничого нагляду</p>
  </div>
</div> 

<div class="aboutus">
  <p class="aboutus-title"> Про нас</p>
  <p class="aboutus-text">На нашому підприємстві працюють висококваліфіковані спеціалісти, 
    які виготовляють обладнання відповідно до сучасних технологій.
     Ми безперервно покращуємо виробництво, постійно досягаємо професійних 
     успіхів і завойовуємо довіру до нашого бренду і саме це 
    є основним фактором якості нашої продукції</p>
 <!--Slider-->
<div class="slider-block">
  <div class="carousel">
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-1.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-2.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-4.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-6.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-7.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-9.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-10.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-11.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-12.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-13.jpg"></div>
      <div class="carousel-cell"><img  src="/images/slider/TOV NVKC PRES-14.jpg"></div>
  </div>
</div>
</div>
<a name="products"><div class="drum"></a>
 
  <div class="image div-scroll"><div><canvas id="renderCanvas2"></canvas></div></div>
  <div class="text text-margin">
    <h2>Барабаны</h2>
    <p class="definition">Це основний конструктивний елемент стрічкових конвеєрів, призначений для передачі тяги від блоку приводу до стрічки конвеєра.
      Основні функції приводних барабанів: приведення в рух стрічки конвеєра і регулювання її натягу; зміна кута нахилу стрічки і напрямок її руху, забезпечення рівномірності руху і натягу стрічки під час роботи.</p>
     <p class="range">По типу:</p>
     <p>-Приводні<p>
     <p>-Не приводні</p>
  </div> 
</div>
<div class="roller-prop">
       <div class="text text-margin">
   <h2>Роликоопори</h2>
     <p class="definition">Роликоопори — це конструкції, на яких розміщуються і утримуються під час 
       роботи конвеєрні ролики. 
       Роликова опора може поставлятися як з роликами, так і без них.
      Виготовляються опори в залежності від призначення і характеристики вантажу, що транспортується. Форма і глибина жолоба задаються на вимогу 
      безпосереднього замовника обладнання.</p>
      <p class="range">Діапазон моделей</p>
      <p>B 500 — B 1600 </p>
   </div>
   <div class="image div-scroll"><div><canvas id="renderCanvas3"></div></canvas>  
      </div>
  
</div>

<div class="roller">
  <div class="image div-scroll"><div><canvas id="renderCanvas"></div></canvas></div>
  <div class="text text-margin">
    <h2>Ролики</h2>
    <p class="definition">Конвеєрні ролики є елементом конвеєрів, призначеним для транспортування вантажів і сипучих матеріалів в гірничорудній, металургійній, будівельній, залізничній, оборонній та портовій промисловостях, а також в агропромисловому комплексі.
      Ролики в складі роликоопори встановлюються на стрічкові конвеєри і рольганги різної модифікації. Ролики підтримують рух і натяг стрічки роликового конвеєра.</p>
     <p class="range">За діаметром:</p>
  <div>
     <div class="mm1"><p>89 мм </p><p>108 мм</p><p>127 мм</p></div>
     <div class="mm2"><p>159 мм</p><p>194 мм</p></div> 
    </div>    
  </div>  
</div>
<a name="form">
<div class="form-block">
  <div class="send">   
  <?php include("send.php"); ?>
</div>
</div>
      </a>
<div class="footer">
  <div class="sector left-line">
    <div class="footer-content">
        <img width="15%" src=/icons/map.png>
        <p>Чернігівська обл., Носівський р-н, м.Носівка, 
          вул. Мринський шлях 159, індекс 17100
        </p>
    </div>
</div>
<div class="sector left-line">
    <div class="footer-content">
        <img width="15%" src=/icons/envelope.png>
        <p>pres2008@ukr.net
        </p>
    </div>
</div>
<div class="sector left-line">
    <div class="footer-content">
        <img width="15%" src=/icons/phone.png>
        <p>(04642) 2-27-69
        </p>
    </div>
</div>
  <div class="sector color-sector">
    <div class="footer-content">
        <p>©  2019. ТОВ Науково-виробничий комерційний центр "Прес". 
        </p>
    </div>
  </div>
</div>

<script type="text/javascript"  src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript"  src="js/index.js"></script>
<script type="text/javascript"  src="js/flickity.pkgd.min.js"></script>
<script  src="https://cdn.babylonjs.com/babylon.js" ></script>
<script src="https://cdn.babylonjs.com/loaders/babylonjs.loaders.min.js"></script>




        <script src="https://code.jquery.com/pep/0.4.2/pep.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.6.2/dat.gui.min.js"></script>
        <script src="https://preview.babylonjs.com/ammo.js"></script>
        <script src="https://preview.babylonjs.com/cannon.js"></script>
        <script src="https://preview.babylonjs.com/Oimo.js"></script>
        <script src="https://preview.babylonjs.com/libktx.js"></script>
        <script src="https://preview.babylonjs.com/earcut.min.js"></script>

        <script src="https://preview.babylonjs.com/inspector/babylon.inspector.bundle.js"></script>
        <script src="https://preview.babylonjs.com/materialsLibrary/babylonjs.materials.min.js"></script>
        <script src="https://preview.babylonjs.com/proceduralTexturesLibrary/babylonjs.proceduralTextures.min.js"></script>
        <script src="https://preview.babylonjs.com/postProcessesLibrary/babylonjs.postProcess.min.js"></script>

        <script src="https://preview.babylonjs.com/serializers/babylonjs.serializers.min.js"></script>
        <script src="https://preview.babylonjs.com/gui/babylon.gui.min.js"></script>





<script >
$('.carousel').flickity({
  // options
  cellAlign: 'left',
  contain: true,
  wrapAround: true,
  adaptiveHeight: true,
  fullscreen: true,
 
});
</script>



<script >
 // ______delete black screen______
BABYLON.DefaultLoadingScreen.prototype.displayLoadingUI = function () {
    if (document.getElementById("customLoadingScreenDiv")) {
        // Do not add a loading screen if there is already one
        document.getElementById("customLoadingScreenDiv").style.display = "initial";
        return;
    }
    this._loadingDiv = document.createElement("div");
    this._loadingDiv.id = "customLoadingScreenDiv";
    this._loadingDiv.innerHTML = "";
    var customLoadingScreenCss = document.createElement('style');
    customLoadingScreenCss.type = 'text/css';
    customLoadingScreenCss.innerHTML = `
    #customLoadingScreenDiv{
    }`;
    document.getElementsByTagName('head')[0].appendChild(customLoadingScreenCss);
    this._resizeLoadingUI();
    window.addEventListener("resize", this._resizeLoadingUI);
    document.body.appendChild(this._loadingDiv);
};

BABYLON.DefaultLoadingScreen.prototype.hideLoadingUI = function(){
    document.getElementById("customLoadingScreenDiv").style.display = "none";
    console.log("scene is now loaded");
}
//__________________

var canvas1 = document.getElementById("renderCanvas");
var canvas2 = document.getElementById("renderCanvas2");
var canvas3 = document.getElementById("renderCanvas3");

var path = "/textures/environment.env";



var modelPath1 = "/models/barrel/";
var modelPath2 = "/models/rubber_barrel/";
var modelPath3 = "/models/Barrel_holder + barrel/";

var modelName1 = "Barrel.gltf";
var modelName2 = "Unreal Engine 4.gltf";
var modelName3 = "BH+B.gltf";

var engine1 = new BABYLON.Engine(canvas1, true);
var engine2 = new BABYLON.Engine(canvas2, true);
var engine3 = new BABYLON.Engine(canvas3, true);


var scene1 = null;
var scene2 = null;
var scene3 = null;

var sceneToRender = null;

var createDefaultEngine1 = function() { return new BABYLON.Engine(canvas1, true, { preserveDrawingBuffer: true, stencil: true }); };
var createDefaultEngine2 = function() { return new BABYLON.Engine(canvas2, true, { preserveDrawingBuffer: true, stencil: true }); };
var createDefaultEngine3 = function() { return new BABYLON.Engine(canvas3, true, { preserveDrawingBuffer: true, stencil: true }); };



var delayCreateScene1 = function () {
    // Create a scene.
    var scene = new BABYLON.Scene(engine1);
    // camera
 var camera = new BABYLON.ArcRotateCamera("Camera", 0, 0, 0, BABYLON.Vector3.Zero(), scene);
camera.setPosition(new BABYLON.Vector3(10, 20, -14));
camera.attachControl(canvas1, true);

    // create a basic light, aiming 0,1,0 - meaning, to the sky
    var light = new BABYLON.HemisphericLight('light1', new BABYLON.Vector3(0,1,0), scene);
    var hdrTexture = BABYLON.CubeTexture.CreateFromPrefilteredData("textures/environment.env", scene);
    var currentSkybox = scene.createDefaultSkybox(hdrTexture, true, (scene.activeCamera.maxZ - scene.activeCamera.minZ) / 2, 0.3, true);
    // Create a default skybox with an environment.
    // Append glTF model to scene.
  
    var barrels1 = BABYLON.SceneLoader.Append(modelPath1, modelName1, scene,  function (scene) {
        scene.meshes[2].rotation = {x: 0, y: 0, z: 0};
        scene.registerBeforeRender(function () {
            scene.meshes[2].rotation.y += 0.01;
        });
        
        
        
    })
    

    return scene;

    

    
};

var delayCreateScene2 = function () {
    // Create a scene.
    var scene = new BABYLON.Scene(engine2);
    // camera
    var camera = new BABYLON.ArcRotateCamera("camera1", 0, 0, 00, new BABYLON.Vector3(0, 0, 0), scene);
    camera.setPosition(new BABYLON.Vector3(8, 3, -7));
    camera.attachControl(canvas2, true);
    
    
    
    // create a basic light, aiming 0,1,0 - meaning, to the sky
    var light = new BABYLON.HemisphericLight('light1', new BABYLON.Vector3(0,1,0), scene);
    var hdrTexture = BABYLON.CubeTexture.CreateFromPrefilteredData("textures/environment.env", scene);
    var currentSkybox = scene.createDefaultSkybox(hdrTexture, true, (scene.activeCamera.maxZ - scene.activeCamera.minZ) / 2, 0.3, true);
    // Create a default skybox with an environment.
    // Append glTF model to scene.
       var options = {
        width: 1,
        height: 1,
          depth: 1,
     
    };
    var barrels2 = BABYLON.SceneLoader.Append(modelPath2, modelName2, scene, options,true, function (scene) {
         scene.meshes[2].rotation = {x: 0, y: 0, z: 0};
         scene.meshes[3].rotation = {x: 0, y: 0, z: 0};
         scene.meshes[4].rotation = {x: 0, y: 0, z: 0};
        scene.registerBeforeRender(function () {
            scene.meshes[2].rotation.y += 0.0005;
            scene.meshes[3].rotation.y += 0.0005;
            scene.meshes[4].rotation.y += 0.0005;
        });
    });
   


    return scene;
};
var delayCreateScene3 = function () {
    // Create a scene.
    var scene = new BABYLON.Scene(engine3);
    // camera
    var camera = new BABYLON.ArcRotateCamera("camera1", 0, 0, 00, new BABYLON.Vector3(0, 1, 0), scene);
    camera.setPosition(new BABYLON.Vector3(-3, 6, 7));
    camera.attachControl(canvas3, true);
    // create a basic light, aiming 0,1,0 - meaning, to the sky
    var light = new BABYLON.HemisphericLight('light1', new BABYLON.Vector3(0,1,0), scene);
    var hdrTexture = BABYLON.CubeTexture.CreateFromPrefilteredData("textures/environment.env", scene);
    var currentSkybox = scene.createDefaultSkybox(hdrTexture, true, (scene.activeCamera.maxZ - scene.activeCamera.minZ) / 2, 0.3, true);
    // Create a default skybox with an environment.
    // Append glTF model to scene.
    var barrels3 = BABYLON.SceneLoader.Append(modelPath3, modelName3, scene, function (scene) {
        scene.meshes[2].rotation = {x: 0, y: 0, z: 0};
        scene.meshes[3].rotation = {x: 0, y: 0, z: 0};
        scene.meshes[4].rotation = {x: 0, y: 0, z: 0};
        scene.meshes[5].rotation = {x: 0, y: 0, z: 0};
        scene.registerBeforeRender(function () {
            scene.meshes[2].rotation.y += 0.01;
            scene.meshes[3].rotation.y += 0.01;
            scene.meshes[4].rotation.y += 0.01;
            scene.meshes[5].rotation.z -= 0.01;
        });
    });
    
    return scene;
};




function loadSkyboxPathTexture(path, scene) {
    return new BABYLON.HDRCubeTexture(path, scene, 256, false, true, false, true);
}
            // call the createScene function
            var scene1 = delayCreateScene1();
            
            var scene2 = delayCreateScene2();
            
            var scene3 = delayCreateScene3();
            // run the render loop
            
            engine1.runRenderLoop(function(){
                scene1.render();
                           });
            
            engine2.runRenderLoop(function(){
                scene2.render();
            });
            engine3.runRenderLoop(function(){
                scene3.render();

            })
            


    </script> 
<!--
<script>
var canvas = document.getElementById("renderCanvas");
var path = "/textures/environment.env";
var modelPath = "/models/barrel/";
var modelName = "Barrel.gltf";
var engine = new BABYLON.Engine(canvas, true);
var scene = null;
var sceneToRender = null;
var createDefaultEngine = function() { return new BABYLON.Engine(canvas, true, { preserveDrawingBuffer: true, stencil: true }); };

var delayCreateScene = function () {
    // Create a scene.
    var scene = new BABYLON.Scene(engine);

    // camera
    var camera = new BABYLON.ArcRotateCamera("camera1", 0, 0, 00, new BABYLON.Vector3(0, 3, 0), scene);
    camera.setPosition(new BABYLON.Vector3(0, 12, -16));
    camera.attachControl(canvas, true);
    // create a basic light, aiming 0,1,0 - meaning, to the sky
    var light = new BABYLON.HemisphericLight('light1', new BABYLON.Vector3(0,1,0), scene);
    var hdrTexture = BABYLON.CubeTexture.CreateFromPrefilteredData("textures/environment.env", scene);
    var currentSkybox = scene.createDefaultSkybox(hdrTexture, true, (scene.activeCamera.maxZ - scene.activeCamera.minZ) / 2, 0.3, true);
    // Create a default skybox with an environment.
    // Append glTF model to scene.
    var barrels = BABYLON.SceneLoader.Append(modelPath, modelName, scene, function (scene) {
        // Create a default arc rotate camera and light.
// Parameters: alpha, beta, radius, target position, scene
    });
    return scene;
};
function loadSkyboxPathTexture(path, scene) {
    return new BABYLON.HDRCubeTexture(path, scene, 256, false, true, false, true);
}
            // call the createScene function
            var scene = delayCreateScene();
            // run the render loop
            engine.runRenderLoop(function(){
                scene.render();
            });
            
  
    </script> 

-->
<script>
    
    $( '.div-scroll' ).bind( 'keydown mousewheel DOMMouseScroll', function ( e ) {
                var e0 = e.originalEvent,
                delta = e0.wheelDelta || -e0.detail;

                this.scrollTop += ( delta < 0 ? 1 : -1 ) * 30;

                if([32, 37, 38, 39, 40].indexOf(e.keyCode) > -1) {
                    e.preventDefault();
                }
                e.preventDefault();
            });
</script>

</body>
</html>


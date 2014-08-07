<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vote -- 3D website</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('/css/jumbotron.css');?>" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?=base_url('/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=base_url('/js/html5shiv.js');?>"></script>
      <script src="<?=base_url('/js/respond.min.js');?>"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">3D Website</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=base_url('/');?>">Home</a></li>
            <li><a href="<?=base_url('/about');?>">About</a></li>
            <li><a href="<?=base_url('/work');?>">Work</a></li>
            <li class="active"><a href="<?=base_url('/vote');?>">Vote</a></li>
            <li><a href="<?=base_url('/vote');?>">BBS</a></li>
            <li><a href="<?=base_url('/contact');?>">Contact</a></li>
           </ul>
         
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <a class="btn btn-success">Register</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
      
	<div class="container">
	
	<div class="page-header">
	      <h1>The Most Popular 3D Design In 2014</h1>
	</div>
	  
	<div class="row">
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p class="text-danger">Vote: 100</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a> <a class="btn btn-success" role="button">Vote</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p class="text-danger">Vote: 100</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a> <a class="btn btn-success" role="button">Vote</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p class="text-danger">Vote: 100</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a> <a class="btn btn-success" role="button">Vote</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p class="text-danger">Vote: 100</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a> <a class="btn btn-success" role="button">Vote</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p class="text-danger">Vote: 100</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a> <a class="btn btn-success" role="button">Vote</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p class="text-danger">Vote: 100</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a> <a class="btn btn-success" role="button">Vote</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p class="text-danger">Vote: 100</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a> <a class="btn btn-success" role="button">Vote</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p class="text-danger">Vote: 100</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a> <a class="btn btn-success" role="button">Vote</a></p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
	<ul class="pagination pull-right">
		<li><a href="#">&laquo;</a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">&raquo;</a></li>
	</ul>
	</div>
    <hr>

    <footer>
    	<p>Copyright &copy; 3D Website</p>
    </footer>
    </div> <!-- /container -->

    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">&times;</button>
          <h2 class="modal-title">Title</h2>
        </div>
        <div class="modal-body">
          <center>
	      <div id="WebGL-output">
          </div>
          </center>
        </div>  
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/three.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/STLLoader.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/stats.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/dat.gui.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/OrbitControls.js');?>"></script>
    <script type="text/javascript">
    // once everything is loaded, we run our Three.js stuff.
    $(function () {
        var stats = initStats();
        // create a scene, that will hold all our elements such as objects, cameras and lights.
        var scene = new THREE.Scene();
        // create a camera, which defines where we're looking at.
        var camera = new THREE.PerspectiveCamera(40, 500 / 400, 1, 1000);
        // create a render and set the size
        var webGLRenderer = new THREE.WebGLRenderer();
        webGLRenderer.setClearColorHex(0x000, 1.0);
        webGLRenderer.setSize(500, 400);
        webGLRenderer.shadowMapEnabled = true;
        // position and point the camera to the center of the scene
        camera.position.x = 180;
        camera.position.y = 200;
        camera.position.z = 150;
        camera.lookAt(new THREE.Vector3(0, 40, 0));
        var orbitControls = new THREE.OrbitControls(camera);
        orbitControls.autoRotate = true;
        var clock = new THREE.Clock();
        // add spotlight for the shadows
        var spotLight = new THREE.SpotLight(0xffffff);
        spotLight.position.set(180, 200, 150);
        scene.add(spotLight);
        // add the output of the renderer to the html element
        $("#WebGL-output").append(webGLRenderer.domElement);
        // call the render function
        var step = 0;
        var group;
        var gui = new dat.GUI();
        // model from http://www.thingiverse.com/thing:69709
        var loader = new THREE.STLLoader();
        var group = new THREE.Object3D();
        loader.load("<?=base_url('/models/SolidHead.stl');?>", function (geometry) {
            // console.log(geometry);
            var mat = new THREE.MeshLambertMaterial({color: 0x7777ff});
            group = new THREE.Mesh(geometry, mat);
            group.rotation.x = -0.5 * Math.PI;
            group.scale.set(0.6, 0.6, 0.6);
            scene.add(group);
        });
        render();
        function render() {
            stats.update();
            var delta = clock.getDelta();
            orbitControls.update(delta);
            if (group) {
                group.rotation.z += 0.006;
                // group.rotation.x+=0.006;
            }
            // render using requestAnimationFrame
            requestAnimationFrame(render);
            webGLRenderer.render(scene, camera);
        }
        function initStats() {
            var stats = new Stats();
            stats.setMode(0); // 0: fps, 1: ms
            // Align top-left
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            $("#Stats-output").append(stats.domElement);
            return stats;
        }
    });
    </script>
</body>
</html>

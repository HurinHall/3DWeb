<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Work -- 3D website</title>

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
            <li class="active"><a href="<?=base_url('/work');?>">Work</a></li>
           <li><a href="<?=base_url('/vote');?>">Vote</a></li>
           <li><a href="<?=base_url('/bbs');?>">BBS</a></li>
           <li><a href="<?=base_url('/contact');?>">Contact</a></li>
          </ul>
         
          <?=$login;?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
      
	<div class="container">
	
	<div class="page-header">
	      <h1>Which Work Created By You ?</h1>
	</div>
	  
	<div class="row">
		<?php 
        	$imagepath = '';
        	foreach ($result as $row)
            {   
                $imagepath =base_url().'/models/'.$row->publisher.'/'.$row->imagename;
                $obj = '/models/'.$row->publisher.'/'.$row->publisher.'_'.$row->createtime.'/'.$row->publisher.'_'.$row->createtime.'.obj';
                $downloadlink = base_url().'/models/'.$row->publisher.'/'.$row->publisher.'_'.$row->createtime.'.zip';

                echo "
                	<div class=\"col-sm-6 col-md-3\">
						<div class=\"thumbnail\">
                            <img src=\"".$imagepath."\" class=\"carousel-inner img-responsive img-rounded\" style=\"width: 260px; height: 180px;\" >
                            <div class=\"caption\">
                              <h3>Title:".$row->title."</h3>
                              <h4>Publisher:".$row->publisher."</h4>
                              <h5>Description:".$row->description."</h5>
                              <p>
                              	<a data-toggle=\"modal\" href=\"#view\" class=\"btn btn-primary\" role=\"button\" onclick=\"loadModel('".$obj ."') \">View</a>
                                <a href=\"".$downloadlink."\" target=\"_blank\" class=\"btn btn-primary\" role=\"button\" >Download</a>

                              </p>
                            </div>
						</div>
					</div>	
                ";

            }

		?>

		
<!-- 		<div class="col-sm-6 col-md-3">
			<div class="thumbnail">
				<img src="<?=base_url('/images/vote1.jpg');?>" class="carousel-inner img-responsive img-rounded">
				<div class="caption">
					<h3>Thumbnail label</h3>
					<p>...</p>
					<p><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">View</a><a data-toggle="modal" href="#view" class="btn btn-primary" role="button">Download</a></p>
				</div>
			</div>
		</div>-->
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
	        <div style="width:520px; margin:auto; position:relative; font-size: 9pt; color: #777777;">
                <canvas id="cv" style="border: 1px solid;" width="500" height="400" ></canvas>
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
    <script type="text/javascript" src="<?=base_url('/js/libs/jsc3d.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/jsc3d.webgl.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/jsc3d.touch.js');?>"></script>

    <script type="text/javascript">
    // once everything is loaded, we run our Three.js stuff.

        var canvas = document.getElementById('cv');

        var viewer = new JSC3D.Viewer(canvas);
      
        viewer.setParameter('SceneUrl', '');
        viewer.setParameter('InitRotationX', -90);
        viewer.setParameter('InitRotationY', -90);
        viewer.setParameter('InitRotationZ', 0);
        viewer.setParameter('ModelColor', '#CAA618');
        viewer.setParameter('BackgroundColor1', '#FFFFFF');
        viewer.setParameter('BackgroundColor2', '#383840');
        viewer.setParameter('RenderMode', 'texturesmooth');
        viewer.setParameter('MipMapping', 'on');
        viewer.setParameter('Renderer', 'webgl');
        viewer.init();
        viewer.update();

        function loadModel(obj) {
            var objfile = "<?=base_url('"+obj+"');?>"
            viewer.replaceSceneFromUrl(objfile);
            viewer.update();
        }


    </script>
</body>
</html>

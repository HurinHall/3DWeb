<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Race Result</title>

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
        <style type="text/css">
    .container{padding-left: 1px!important;}
    </style>
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
            <li ><a href="<?=base_url('/about');?>">About</a></li>
            <li><a href="<?=base_url('/work');?>">Work</a></li>
           <li><a href="<?=base_url('/vote');?>">Vote</a></li>
           <li><a href="<?=base_url('/bbs');?>">BBS</a></li>
           <li class="active"><a href="<?=base_url('/notice');?>">notice</a></li>
           <li><a href="<?=base_url('/contact');?>">Contact</a></li>
          </ul>
         
          <?=$login;?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
      
	<div class="container">
      <div class="page-header">
	      <h1>Race result</h1>
	  </div>



 <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                    Nterm:

                                    <?php 
                                    foreach ($nterms as $row){
                                     echo "   
                                        <a href=".base_url()."raceresult/index/". $row->nterm." data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"ntermBtn\"   style=\"margin-bottom:5px\" >".$row->nterm."</a>";

                                   
                                   
                                }
                                ?>
                                <br>
                            </div>

                        </div>
                        <div class="block-content collapse in" style="height: 650px;">
                            <div class="span12">
                              <table class="table table-hover table-bordered">
                                  <thead>
                                    <tr></tr>
                                    <tr>
                                      <th>Rank</th>
                                      <th>Title</th>
                                      <th>Racer</th>
                                      <th>Voted</th>
                                      <th>Nterm</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                               <?php 

                               foreach ($result as $row)
                               {   

                                 $obj = $row->objlink;
                                 $downloadlink=base_url().$row->download;

                                 echo "
                                 <tr id=\"tr".$row->id."\" >
                                 <td>".$row->rank."</td>
                                 <td>".$row->title."</td>
                                 <td>".$row->racer."</td>
                                 <td>".$row->voted."</td>
                                 <td>第".$row->nterm."届</td>
                                 <td>
                                 <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"#view\"      onclick=\"loadModel('".$obj ."') \">View</a>



                                 </td>

                                 </tr> 


                                 ";



                             }
                             ?>




                         </tbody>
                     </table>
                 </div>
             </div>
         </div>





  </div>

      <hr>
 <hr>
 <footer>
    <p>Copyright &copy; 3D Website</p>
</footer>
</div>


<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">&times;</button>
          <h2 class="modal-title">3D Show</h2>
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
        $("#view").show();

    }
    $(document).ready(function(){
      $("#view").hide();
  });


 
 </script>


</body>

</html> 
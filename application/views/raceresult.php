<!DOCTYPE html>
<html>

<head>
    <title> Race Result</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap -->
    <link href="<?=base_url()?>dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url()?>dashboard/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?=base_url()?>dashboard/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
    <link href="<?=base_url()?>dashboard/assets/styles.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <script src="<?=base_url()?>dashboard/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        </head>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </a>
                   <a class="brand" href="#">Manage Panel</a>
                   <div class="nav-collapse collapse">
                       <?=$login?>
                       <ul class="nav">
                        <li class="active">
                            <a href="<?=base_url('manage')?>">Dashboard</a>
                        </li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3" id="sidebar">
                <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">

                    <?php 
                    if($this->session->userdata('role') !='admin'){ ?>
                    <li>
                        <a href="<?=base_url()?>"><i class="icon-chevron-right"></i> 3D Homepage</a>
                    </li>

                    <li>
                        <a href="<?=base_url('manage')?>"><i class="icon-chevron-right"></i> Work List</a>
                    </li>

                    <li>
                        <a href="<?=base_url('manage/upload')?>"><i class="icon-chevron-right"></i> Upload</a>
                    </li>

                    <li>
                        <a href="<?=base_url('manage/profile')?>"><i class="icon-chevron-right"></i> Profile</a>
                    </li>
                                <li>
                                    <a href="<?=base_url('raceresult')?>"><i class="icon-chevron-right"></i> Race Result</a>
                                </li>

                    <?php }else{   ?>

                    <li>
                        <a href="<?=base_url()?>"><i class="icon-chevron-right"></i> 3D Homepage</a>
                    </li>

                    <li>
                        <a href="<?=base_url('manage')?>"><i class="icon-chevron-right"></i> Work List</a>
                    </li>

                    <li>
                        <a href="<?=base_url('manage/race')?>"><i class="icon-chevron-right"></i> Publish Race</a>
                    </li>

                    <li>
                        <a href="<?=base_url('manage/editrace')?>"><i class="icon-chevron-right"></i> Edit Race</a>
                    </li>
                    <li>
                        <a href="<?=base_url('manage/profile')?>"><i class="icon-chevron-right"></i> Profile</a>
                    </li>
                                <li>
                                    <a href="<?=base_url('raceresult')?>"><i class="icon-chevron-right"></i> Race Result</a>
                                </li>                    <?php }?>
                </ul>
            </div>

            <!--/span-->   

            <body>

                <div class="span9" id="content">


                    <div class="row-fluid">
                        <!-- block -->

                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">
                                    <!-- <a href="<?=base_url('manage/edit')?>">Work List </a>  -->
                                    Race Result -> nterm:
                                                                             <!-- <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"ntermBtn\"   onclick=\"tonterm(".$row->nterm.");\" style=\"margin-bottom:5px\" >".$row->nterm."</a>"; -->

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
                                 <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"#view\"      onclick=\"loadModel('".$obj ."') \">View</a>";

                                if($this->session->userdata('role')=="admin"){
                                    echo"
                                 <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"".$downloadlink."\" >Download</a>";
                                 }
                                 echo "
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
         <!-- /block -->
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
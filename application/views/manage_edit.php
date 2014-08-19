<!DOCTYPE html>
<html>
    
    <head>
        <title>Uplaod 3D Model</title>
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
                            <!-- <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Settings <b class="caret"></b>

                                </a>
                                <ul class="dropdown-menu" id="menu1">
                                    <li>
                                        <a href="#">Tools <i class="icon-arrow-right"></i>

                                        </a>
                                        <ul class="dropdown-menu sub-menu">
                                            <li>
                                                <a href="#">Reports</a>
                                            </li>
                                            <li>
                                                <a href="#">Logs</a>
                                            </li>
                                            <li>
                                                <a href="#">Errors</a>
                                            </li>
                                        </ul>
                                    </li>
                                     <li>
                                        <a href="#">SEO Settings</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Other Link</a>
                                    </li> 
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Content <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Blog</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">News</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Custom Pages</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Calendar</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="#">FAQ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Users <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">User List</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Search</a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="#">Permissions</a>
                                    </li>
                                </ul>
                            </li> -->
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
                        <li>
                            <a href="<?=base_url()?>"><i class="icon-chevron-right"></i> 3D Homepage</a>
                        </li>
                        <li>
                            <a href="<?=base_url('manage')?>"><i class="icon-chevron-right"></i> My Work</a>
                        </li>
                        
                        <li>
                            <a href="<?=base_url('manage/upload')?>"><i class="icon-chevron-right"></i> Upload</a>
                        </li>
                        <li>
                            <a href="<?=base_url('manage/profile')?>"><i class="icon-chevron-right"></i> Profile</a>
                        </li>
                        <li>
                            <a href="<?=base_url('manage/edit')?>"><i class="icon-chevron-right"></i> Edit</a>
                        </li> 
                    </ul>
                </div>
                
                <!--/span-->    <body>

                <div class="span9" id="content">


                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">My List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Title</th>
                                          <th>Publisher</th>
                                          <th>Create Time</th>
                                          <th>Voted</th>
                                          <th>Status</th>
                                          <th>Watch</th>
                                          <th>Operation</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                             <?php 
                                $num =count($result);
                                $i = 0;
                                $imagepath = '';
                                
                                echo "<form name=\"updateForm\"  action='' style=\"margin: 0 0 0px;\" method=\"post\">";

                                foreach ($result as $row)
                                {   
                                    $status="";
                                    if($row->status == "1"){
                                        $status = "Public";
                                    }elseif ($row->status == "2") {
                                        $status = "Hide";
                                    }

                                    $obj = '/models/'.$row->publisher.'/'.$row->publisher.'_'.$row->createtime.'/'.$row->publisher.'_'.$row->createtime.'.obj';
                                    $downloadlink = base_url().'/models/'.$row->publisher.'/'.$row->publisher.'_'.$row->createtime.'.zip';
                                    echo "
                                    <tr class=\"success\">
                                          <td>".$row->id."</td>
                                          <td>".$row->title."</td>
                                          <td>".$row->publisher."</td>
                                          <td>".$row->createtime."</td>
                                          <td>".$row->voted."</td>
                                          <td>".$status."</td>
                                          <td>
                                            <a data-toggle=\"modal\" href=\"#view\" class=\"btn btn-primary\" role=\"button\" onclick=\"loadModel('".$obj ."') \">View</a>
                                          </td>
                                          
                                          <td>
                                                <input name=\"workid_".$row->id."\" value=\"".$row->id."\" type=\"hidden\">
                                                <button type\"button\" class=\"btn btn-danger\" name=\"delBtn\" onclick=\"submitFun('del',".$row->id.",0);\">Delete</button>
                                                <button type=\"button\" class=\"btn btn-success\" name=\"hidBtn\"  onclick=\"submitFun('hide',".$row->id.",2);\"> Hide</button>
                                                <button type=\"button\" class=\"btn btn-info\" name=\"pubBtn\"  onclick=\"submitFun('public',".$row->id.",1);\">Public</button>
                                                <a data-toggle=\"modal\" href=\"".$downloadlink."\" class=\"btn btn-primary\" role=\"button\" >Download</a>


                                          </td>
                                        </tr> 


                                    ";
                                   

                                    
                                }
                                echo " </form>";
                            ?>


                                        
<!-- 
                                        <tr class="error">
                                          <td>1</td>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                          <td>100</td>
                                          <td >

                                            <form name="updateForm" action="<?=base_url('/manage/deletemywork');?>" stype="float:left; margin: 0;width:50px"  method="post">
                                                <input name="workid" value="1" type="hidden">
                                                <input type="submit" class="btn btn-danger" name="delBtn" value="Delete" >
                                            </form> 
                                            <form name="updateForm" action="<?=base_url('/manage/hidemywork');?>"  method="post">
                                                <input name="workid" value="1" type="hidden">
                                                <input type="button" class="btn btn-danger" name="hideBtn" value="Hide" >

                                            </form>  
                                            <form name="updateForm" action="<?=base_url('/manage/showmywork');?>" style="margin: 0 0 0px;" method="post">
                                                <input name="workid" value="1" type="hidden">
                                                <input type="button" class="btn btn-info" name="showBtn" value="Show" >
                                            </form>
                                          </td>
                                        </tr>    -->                                       

                              <!--           <tr class="info">
                                          <td>1</td>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>@mdo</td>
                                          <td>100</td>
                                          <td>

                                            
                                            <button type="button" class="btn btn-danger">Delete</button>
                                            <button type="button" class="btn btn-success">Hide </button>
                                            <button type="button" class="btn btn-info">Un-hide</button>

                                          </td>
                                        </tr>                                        

                                        -->
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


        <!-- show 3D design -->
        <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">&times;</button>
              <h2 class="modal-title">3D Model</h2>
            </div>
            <div class="modal-body">
              <center>
                <div style="width:520px; margin:auto; position:relative; font-size: 9pt; color: #777777;">
                    <canvas id="cv" style="border: 1px solid;" width="520" height="400" ></canvas>
                </div>
              </center>
            </div>  
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



        <!--/.fluid-container-->
        <script src="<?=base_url()?>dashboard/vendors/jquery-1.9.1.min.js"></script>
        <script src="<?=base_url()?>dashboard/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>dashboard/vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?=base_url()?>dashboard/assets/scripts.js"></script>
        <script src="<?=base_url()?>dashboard/assets/DT_bootstrap.js"></script>
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
            }

            function submitFun(act,id,status)
            {   
                
                var acitonvalue = "<?=base_url()?>manage/updatemywork/"+id+"/"+status;
                document.updateForm.attributes["action"].value  = acitonvalue;
                updateForm.submit();
            }
        </script>

        
    </body>

</html> 
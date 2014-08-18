<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Dashboard</title>
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
    
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Manage Panel</a>
                    <div class="nav-collapse collapse">
                        <!-- <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Vincent Gabriel <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul> -->
                         <?=$login?>
                        <ul class="nav">
                            <li class="active">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="dropdown">
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
                                   <!--  <li>
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
                                    </li> -->
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
                        <li>
                            <a href="<?=base_url()?>"><i class="icon-chevron-right"></i> 3D Homepage</a>
                        </li>
                        <li>
                            <a href="<?=base_url('manage')?>"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="<?=base_url('manage/upload')?>"><i class="icon-chevron-right"></i> Upload</a>
                        </li>
                        <li>
                            <a href="<?=base_url('manage/profile')?>"><i class="icon-chevron-right"></i> Profile</a>
                        </li>
                       
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
                            <h4>Welcome to Use Dashboard</h4>
                        	</div>
                        	<div class="navbar">
                            	<div class="navbar-inner">
	                                <ul class="breadcrumb">
	                                    <i class="icon-chevron-left hide-sidebar"><a href='#' title="Hide Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <i class="icon-chevron-right show-sidebar" style="display:none;"><a href='#' title="Show Sidebar" rel='tooltip'>&nbsp;</a></i>
	                                    <li>
	                                        <a href="#">Dashboard</a> <span class="divider">/</span>	
	                                    </li>
	                                    <li>
	                                        <a href="#">Settings</a> <span class="divider">/</span>	
	                                    </li>
	                                    <li class="active">Tools</li>
	                                </ul>
                            	</div>
                        	</div>
                    	</div>
                  
                  
                       
                       
                    
                    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">My Work</div>

                                </div>
                        </div>


                        
                        <div class="block-content collapse in">
                            <!-- here to load the data -->
                            <?php 
                                $num =count($result);
                                $i = 0;
                                $imagepath = '';
                                foreach ($result as $row)
                                {   
                                    $imagepath =base_url().'/models/'.$this->session->userdata('name').'/'.$row->imagename;
                                    $obj = '/models/'.$this->session->userdata('name').'/'.$row->publisher.'_'.$row->createtime.'/'.$row->publisher.'_'.$row->createtime.'.obj';
                                    //var_dump($obj);
                                    if( $i%4 == 0){
                                        echo " <div class=\"row-fluid padd-bottom\">
                                                  <div class=\"span3\">
                                                      <div class=\"thumbnail\">
                                                        <img data-src=\"holder.js/230x320\"  src=\"".$imagepath."\" class=\"carousel-inner img-responsive img-rounded\" style=\"width: 260px; height: 180px;\" >
                                                        <div class=\"caption\">
                                                          <h3>".$row->title."</h3>
                                                          <p>".$row->description."</p>
                                                          <p><a data-toggle=\"modal\" href=\"#view\" class=\"btn btn-primary\" role=\"button\" onclick=\"loadModel('".$obj ."') \">View</a></p>
                                                        </div>
                                                      </div>
                                                  </div>";
                                    }elseif(($i+1)%4 == 0){
                                        echo "  
                                                  <div class=\"span3\">
                                                      <div class=\"thumbnail\">
                                                        <img data-src=\"holder.js/230x320\"  src=\"".$imagepath."\" class=\"carousel-inner img-responsive img-rounded\" style=\"width: 260px; height: 180px;\" >
                                                        <div class=\"caption\">
                                                          <h3>".$row->title."</h3>
                                                          <p>".$row->description."</p>
                                                          <p><a data-toggle=\"modal\" href=\"#view\" class=\"btn btn-primary\" role=\"button\" onclick=\"loadModel('".$obj ."') \">View</a></p>
                                                        </div>
                                                      </div>
                                                  </div>
                                                </div>";
                                    }else{
                                        echo "  
                                                  <div class=\"span3\">
                                                      <div class=\"thumbnail\">
                                                        <img data-src=\"holder.js/230x320\"  src=\"".$imagepath."\" class=\"carousel-inner img-responsive img-rounded\" style=\"width: 260px; height: 180px;\" >
                                                        <div class=\"caption\">
                                                          <h3>".$row->title."</h3>
                                                          <p>".$row->description."</p>
                                                          <p><a data-toggle=\"modal\" href=\"#view\" class=\"btn btn-primary\" role=\"button\" onclick=\"loadModel('".$obj ."') \">View</a></p>
                                                        </div>
                                                      </div>
                                                  </div>";
                                    }

                                    $i++;
                                  
                                }
                            ?>                            



                                </div>

                              
                        </div>
                    </div>
                        
                        <!-- /block -->
                </div>
            </div>
        </div>
   
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

    </script>
    </body>

</html>
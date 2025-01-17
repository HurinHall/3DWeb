<!DOCTYPE html>
<html>
    
    <head>
        <title>Edit Work</title>
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
                                </li>                            <?php }?>
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
                                    <a href="<?=base_url('manage/edit')?>">Work List </a> 
                                    / 
                                    <a href="<?=base_url('manage/editrace')?>">Race List </a> 

                                </div>

                            </div>
                            <div class="block-content collapse in" style="height: 650px;">
                                <div class="span12">
                                    <table class="table table-hover table-bordered">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Racer</th>
                                          <th>Title</th>
                                          <th>Rank</th>
                                          <th>Work Id</th>
                                          <th>Race Id</th>
                                          <th>N-term</th>
                                          <th>Voted</th>
                                          <th>Action</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                             <?php 

                                foreach ($result as $row)
                                {   

       
                                   

                                    $obj = '/models/'.$row->publisher.'/'.$row->publisher.'_'.$row->createtime.'/'.$row->publisher.'_'.$row->createtime.'.obj';
                                    $downloadlink = base_url().'/models/'.$row->publisher.'/'.$row->publisher.'_'.$row->createtime.'.zip';
                                    echo "
                                    <tr id=\"tr".$row->id."\" >
                                          <td>".$row->id."</td>
                                          <td>".$row->title."</td>
                                          <td>".$row->publisher."</td>
                                          <td>".$row->createtime."</td>
                                          <td id=\"race".$row->id."\">".$row->race."</td>
                                          <td id=\"nterm".$row->id."\">".$row->nterm."</td>
                                          <td>".$row->voted."</td>
                                          <td id=\"status".$row->id."\">".$status."</td>
                                       
                                          <td>
                        <li class=\"dropdown\" style=\"list-style-type:none\">
                                <a href=\"#\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">TO-DO <i class=\"caret\"></i>

                                </a>
                                <ul class=\"dropdown-menu\" style=\"min-width: 110px;\">
                                    <li>
                                                     <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-danger .btn-xs\"   name=\"delBtn\"     onclick=\"changestatus(".$row->id.",0);\">Delete</a>
                                    </li>
                                    <li>
                                                <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-success\"  name=\"hidBtn\"     onclick=\"changestatus(".$row->id.",2);\"> Hide</a>
                                    </li>
                                    <li>
                                                <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-info\"     name=\"pubBtn\"     onclick=\"changestatus(".$row->id.",1);\">Public</a>
                                    </li>

                                      ";
                            if(strlen($raceid)>0){
                                echo "

                                    <li>
                                                <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"raceBtn\"   onclick=\"racegame(".$row->id.",".$raceid.",'YES','".$nterm."');\"  >Race</a>
                                    </li>
                                  
                                    <li>
                                                <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"quitBtn\"   onclick=\"quitgame(".$row->id.",".$raceid.",'NO','".$nterm."');\"  >Quit</a>
                                    </li>
                                      ";

                            }
                                

                                echo "      
                                        <li>
                                                <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"".$downloadlink."\" >Download</a>
                                    </li>
                                  
                                    <li>
                                                <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"#view\"      onclick=\"loadModel('".$obj ."') \">View</a>
                                    </li>


                                </ul>
                            </li>
                                          </td>
                                        </tr> 


                                    ";
                                   

                                    
                                }
                            ?>
                               

                                      </tbody>
                                    </table>
                                    <div> <?php echo $this->pagination->create_links(); ?> </div>
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
        <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="left: 600px;">
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
                $("#view").show();

            }
            $(document).ready(function(){
              $("#view").hide();
            });

          

            function racegame(workid,raceid,race,nterm){
                 $.ajax({
                        url: "<?=base_url('/manage/in_game')?>",
                        type: "POST",
                        data: { "workid": workid},
                        success:function(data){
                           // alert(data);
                                if(data == "NO"){
                                    $.ajax({
                                    url: "<?=base_url('/manage/racer_changeracestatus')?>",
                                    type: "POST",
                                    data: { "workid": workid,"raceid":raceid, "race": race ,"nterm":nterm},
                                    success:function(data){
                                            if(data){
                                                $('td#race'+workid).html(data);   
                                                $('td#nterm'+workid).html(nterm); 
                                            }
                                    },
                                    error: function(){
                                            alert(arguments[1]);
                                        }
                                });
                                }else{
                                    alert("You have joined this game.");
                                }
                                                
                        },
                        error: function(){
                                alert(arguments[1]);
                        }
                    });
  
            }


            function quitgame(workid,raceid,race,nterm){
                 $.ajax({
                        url: "<?=base_url('/manage/in_game')?>",
                        type: "POST",
                        data: { "workid": workid},
                        success:function(data){
                           //alert(data);
                                if(data == "YES"){
                                    $.ajax({
                                    url: "<?=base_url('/manage/racer_changeracestatus')?>",
                                    type: "POST",
                                    data: { "workid": workid,"raceid":raceid, "race": race ,"nterm":nterm},
                                    success:function(data){
                                            if(data){
                                                $('td#race'+workid).html(data);   
                                                $('td#nterm'+workid).html(nterm); 
                                            }
                                    },
                                    error: function(){
                                            alert(arguments[1]);
                                        }
                                });
                                }else{
                                    alert("You have NOT joined this game yet !");
                                }
                                                
                        },
                        error: function(){
                                alert(arguments[1]);
                        }
                    });
  
            }

            function changestatus(workid,status)
            {   
                var role = '<?=$this->session->userdata('name')?>';
                if(role != "admin"){
                    if(status == "0"){
                        if(confirm("Are you sure to delete this work?")){ 
                           $("#tr"+workid).hide('slow');
                           user_changestatus(workid,status); 
                        }
                    }else{
                        
                        user_changestatus(workid,status);
                    }

                }else{
                    if(status == "0"){
                        if(confirm("Are you sure to delete this work?")){ 
                           admin_changestatus(workid,status); 
                        }
                    }else{
                        admin_changestatus(workid,status);
                    }

                }                  
            }

            function admin_changestatus(workid,status){
                var _json = jQuery.param({ "workid": workid, "status": status });
                var _status = "";
                    $.ajax({
                        url: "<?=base_url('/manage/changestatus')?>",
                        type: "POST",
                        data: _json,
                        dataType:"json",
                        success:function(data){

                                if(data == 0){
                                    _status = "Deleted";
                                }else if(data == 1){
                                    _status = "Public";
                                }else if(data ==2){
                                    _status = "Hidden";
                                }
                               $('td#status'+workid).html(_status);      

                        },
                        error: function(){
                                alert(arguments[1]);
                            }
                    });
            }

            function user_changestatus(workid,status){
                var _json = jQuery.param({ "workid": workid, "status": status });
                var _status = "";
                    $.ajax({
                        url: "<?=base_url('/manage/changestatus')?>",
                        type: "POST",
                        data: _json,
                        dataType:"json",
                        success:function(data){
                               if(data == 1){
                                    _status = "Public";
                                }else if(data ==2){
                                    _status = "Hidden";
                                }
                               $('td#status'+workid).html(_status);      
                                
                        },
                        error: function(){
                                alert(arguments[1]);
                            }
                    });
            }

            

 
        </script>

        
    </body>

</html> 
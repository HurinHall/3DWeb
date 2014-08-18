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
                
                <!--/span-->    <body>

                <div class="span9" id="content">
                     

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Upload 3D Model</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form class="form-horizontal" method="post" action="<?=base_url()?>manage/uploadfile/" enctype="multipart/form-data"  onsubmit="return check()"/>
                                      <fieldset>
                                        <legend>3D Model Information</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                          <div class="controls">
                                            <input type="text" class="span6" name="title" id="Title"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' onblur="checktitle();">
                                          </div>
                                        </div>
                                          
                                        
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="select01">Category</label>
                                          <div class="controls">
                                            <select id="Category" name="category" class="chzn-select" onblur="checkcategory();">
                                              <option>something</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>
                                        </div>
                                       
                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">Image Cover File </label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" name="imagefile" id="Imagefile" type="file" onblur="checkimagefile();"><span style="color:red"> jpg file only</span>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="fileInput">3D ZIP File </label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" name="threedfile" id="Threedfile" type="file" onblur="checkzipfile();"> <span style="color:red"> zip file only</span>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" name="description" id="Description" placeholder="Enter text ..." style="width: 740px; height: 200px" onblur="checkcontent();"></textarea>
                                          </div>
                                        </div>

                                          <input type="hidden" class="input-xlarge datepicker" name="date" id="Date" value="<?=date('YmdHis',time())?>">
                                        
                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                      </fieldset>
                                    </form>

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
            <!--/.fluid-container-->
        <link href="<?=base_url()?>dashboard/vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?=base_url()?>dashboard/vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?=base_url()?>dashboard/vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="<?=base_url()?>dashboard/vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="<?=base_url()?>dashboard/vendors/jquery-1.9.1.js"></script>
        <script src="<?=base_url()?>dashboard/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>dashboard/vendors/jquery.uniform.min.js"></script>
        <script src="<?=base_url()?>dashboard/vendors/chosen.jquery.min.js"></script>
        <script src="<?=base_url()?>dashboard/vendors/bootstrap-datepicker.js"></script>

        <script src="<?=base_url()?>dashboard/vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?=base_url()?>dashboard/vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="<?=base_url()?>dashboard/vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

        <script type="text/javascript" src="<?=base_url()?>dashboard/vendors/jquery-validation/dist/jquery.validate.min.js"></script>
        <script src="<?=base_url()?>dashboard/assets/form-validation.js"></script>
            
        <script src="<?=base_url()?>dashboard/assets/scripts.js"></script>
         <script type="text/javascript">
            var error1=1;
            var error2=1;
            var error3=1;
            var error4=1;
           
         
            function check(){
              
              if($('input#Title').val().length==0||$('select#Category').val().length==0||$('#Description').val().length==0||error1==1||error2==1||error3==1||error4==1){
                return false;
              }else{
                return true;
              }
            }


            function checktitle(){
                if($('input#Title').val().length==0){
                  alert('Please input Title  !');
                  $('input#Title').css(
                    {
                      "border-color": "#a94442",
                      "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                      "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
                    }
                  );
                  error1=1;

                }else{
                    $('input#Title').css(
                      {
                        "border-color": "#3c763d",
                        "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                        "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
                      }
                    );
                    error1=0;
                }
          }



            function checkcategory(){
                if($('#Category').val().length==0){

                  $('#Category').css(
                    {
                      "border-color": "#a94442",
                      "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                      "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"

                    }
                  )
                  
                }else{
                    $('#Category').css(
                      {
                        "border-color": "#3c763d",
                        "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                        "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
                      }
                    )
                }
                
            }

            function checkcontent(){
                if($('#Description').val().length==0){
                  alert('Please input Description  !');

                  $('#Description').css(
                    {
                      "border-color": "#a94442",
                      "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                      "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"

                    }
                  );
                  error2=1;
                  
                }else{
                    $('#Description').css(
                      {
                        "border-color": "#3c763d",
                        "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                        "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
                      }
                    );
                    error2=0;
                }
                
            }


            function checkimagefile(){
                
                  
                var filepath=$("#Imagefile").val(); 
                var extStart=filepath.lastIndexOf("."); 

                var ext=filepath.substring(extStart,filepath.length).toUpperCase(); 
                if(ext!=".JPG"){ 
                    //alert('Please select an image file  !');
                    $('#Imagefile').css(
                        {
                            "background-color": "#a94442"
                        }
                  );
                  error3=1;
                    
                }else{
                    $('#Imagefile').css(
                        {
                             "background-color": "rgb(182, 236, 183)"
                        }
                    );
                    error3=0;

                }
                    
                
            }

            function checkzipfile(){
               
                 
                var filepath=$("#Threedfile").val(); 
                var extStart=filepath.lastIndexOf("."); 
                var ext=filepath.substring(extStart,filepath.length).toUpperCase(); 
                if(ext!=".ZIP"){ 
                    //alert('Please select a 3D ZIP file  !');

                    $('#Threedfile').css(
                        {
                            "background-color": "#a94442"
                        }
                    );
                    error4=1;
                   
                }else{
                    $('#Threedfile').css(
                        {
                             "background-color": "rgb(182, 236, 183)"
                        }
                    );
                    error4=0;
                }
   
                
            }

           
                
       
     

    
  </script>

        
    </body>

</html>
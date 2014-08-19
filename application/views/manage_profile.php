<!DOCTYPE html>
<html>
    
    <head>
        <title>User Profile</title>
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
                            <a href="<?=base_url('manage')?>"><i class="icon-chevron-right"></i> Dashboard</a>
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
                
                <!--/span-->    
                <body>

                <div class="span9" id="content">
                     
                    
                

                     <!-- validation -->
                    <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">User Profile</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                    <!-- BEGIN FORM-->
                    <form action="<?=base_url('/manage/changepwd');?>" method="post" id="updateprofile" class="form-horizontal">
                        <fieldset>
                            <div class="alert alert-error hide">
                                <button class="close" data-dismiss="alert"></button>
                                You have some form errors. Please check below.
                            </div>
                            <div class="alert alert-success hide">
                                <button class="close" data-dismiss="alert"></button>
                                Your form validation is successful!
                            </div>
                            <div class="control-group">
                                <label class="control-label">Name<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="name" data-required="1" class="span6 m-wrap" value="<?=$result->name?>" disabled/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="email" type="email" class="span6 m-wrap" value="<?=$result->email?>" disabled/>
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Old Password<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="oldpassword" id="Oldpassword" type="password" class="span6 m-wrap" onblur="checkoldpw();" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">New Password<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="password" id="Password" type="password" class="span6 m-wrap" onblur="checkpw();"/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Confirm Password<span class="required">*</span></label>
                                <div class="controls">
                                    <input name="re-password" id="Re-Password" type="password" class="span6 m-wrap" onblur="checkrpw()"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Student ID<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="studentid" data-required="1" class="span6 m-wrap" value="<?=$result->studentid?>" disabled/>
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label class="control-label">Major<span class="required">*</span></label>
                                <div class="controls">
                                    <input type="text" name="major" data-required="1" class="span6 m-wrap" value="<?=$result->major?>" disabled/>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="controls">
                                    <input type="hidden" name="uid" data-required="1" class="span6 m-wrap" value="<?=$result->id?>" />
                                </div>
                            </div>

                            
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <!-- <button type="button" class="btn">Cancel</button> -->
                            </div>
                        </fieldset>
                    </form>
                    <!-- END FORM-->
                </div>
                </div>
            </div>
                        <!-- /block -->
            </div>
                     <!-- /validation -->


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

    function checkoldpw(){
              $.ajax({ 
                        url: "<?=base_url('/manage/checkoldpw')?>", 
                        type: "POST",
                        data: { opwd: $('input#Oldpassword').val()},
                        success: function(data){
                            if(data==1){      
                                $('input#Oldpassword').css(
                                      {
                                        "border-color": "#3c763d",
                                        "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                                        "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
                                      }
                                    ); 
                                error2=0;
                            }else{   
                                error2=1;
                                alert("Please check old password again !");
                                $('input#Oldpassword').val('');
                                $('input#Oldpassword').css(
                                  {
                                    "border-color": "#a94442",
                                    "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                                    "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
                                  }
                                );
                            }
                        }
              });
              
        }

     function checkpw(){
          if($('input#Password').val().length<6){
            alert("Please check the length of  password less than 6 characters !");
             $('input#Password').css(
              {
                "border-color": "#a94442",
                "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
              }
            );
          }else{
             $('input#Password').css(
              {
                "border-color": "#3c763d",
                "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
              }
            );
          }
    }
    function checkrpw(){
          if($('input#Password').val()!=$('input#Re-Password').val()){
            alert("Please check confirm password !");

              $('input#Re-Password').css(
              {
                "border-color": "#a94442",
                "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
              }
            );
          }else{
             $('input#Password').css(
              {
                "border-color": "#3c763d",
                "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
              }
            );
          }
    }
     </script>
    </body>

</html>
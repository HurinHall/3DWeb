<!DOCTYPE html>
<html>
    
    <head>
        <title>Uplaod 3D Model</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- Bootstrap -->
        <link href="<?=base_url()?>dashboard/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?=base_url()?>dashboard/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
                        
                        <?php 
                            if($this->session->userdata('name') !='admin'){ ?>
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
                                    <a href="<?=base_url('manage/edit')?>"><i class="icon-chevron-right"></i> Edit</a>
                                </li> 


                           <?php }else{   ?>

                                    <li>
                                    <a href="<?=base_url()?>"><i class="icon-chevron-right"></i> 3D Homepage</a>
                                </li>

                                <li>
                                    <a href="<?=base_url('manage')?>"><i class="icon-chevron-right"></i> Work List</a>
                                </li>

                                <li>
                                    <a href="<?=base_url('manage/race')?>"><i class="icon-chevron-right"></i> Public Race</a>
                                </li>

                                <li>
                                    <a href="<?=base_url('manage/profile')?>"><i class="icon-chevron-right"></i> Profile</a>
                                </li>
                                <li>
                                    <a href="<?=base_url('manage/edit')?>"><i class="icon-chevron-right"></i> Edit</a>
                            <?php }?>
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
                                    <form class="form-horizontal" method="post" action="<?=base_url()?>manage/publicrace/" enctype="multipart/form-data"  onsubmit="return check()"/>
                                      <fieldset>
                                        <legend>Publish a New Race</legend>
                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">Title </label>
                                          <div class="controls">
                                            <input type="text" class="span6" name="title" id="Title"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' onblur="checktitle();">
                                          </div>
                                        </div> 

                                        <div class="control-group">
                                          <label class="control-label" for="typeahead">N-Term </label>
                                          <div class="controls">
                                            <input type="text" class="span6" name="nterm" id="Nterm"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]' onblur="checkterm();">
                                          </div>
                                        </div>


                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Description</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" name="description" id="Description" placeholder="There is a New Race ..." style="width: 740px; height: 200px" onblur="checkcontent();"></textarea>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Publish Work Starting Time</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge datepicker" name="ps_date" id="PS_date" readonly value="<?=date('Y-m-d H:i:s',time())?>">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Publish Work Ending Time</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge datepicker" name="pe_date" id="PE_date" readonly value="<?=date('Y-m-d H:i:s',time())?>" >
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Vote Starting Time</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge datepicker" name="vs_date" id="VS_date" readonly value="<?=date('Y-m-d H:i:s',time())?>">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <label class="control-label" for="textarea2">Vote Ending Time</label>
                                          <div class="controls">
                                            <input type="text" class="input-xlarge datepicker" name="ve_date" id="VE_date" readonly value="<?=date('Y-m-d H:i:s',time())?>">
                                          </div>
                                        </div>

                                        
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


        <script src="<?=base_url()?>dashboard/vendors/jquery-1.9.1.js"></script>
        <script src="<?=base_url()?>dashboard/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>dashboard/vendors/bootstrap-datetimepicker.min.js"></script>



            
        <script src="<?=base_url()?>dashboard/assets/scripts.js"></script>
         <script type="text/javascript">


            $('#PS_date,#PE_date,#VS_date,#VE_date').datetimepicker({
                format: "yyyy-mm-dd hh:ii:ss",
                autoclose: true,
                todayBtn: true,
                pickerPosition: "bottom-left"
            });



            var error1=1;
            var error2=1;
            var error3=1;
            var error4=1;
            var error5=1;
            var error6=1;

            function check(){
                checktitle();
                checkcontent();
                checkPPTime();
                checkPVTime();
                checkVVTime();

            if(error1==1||error2==1||error3==1||error4==1||error5==1){
                return false;
            }else{
                return true;
            }
        }

        function checkPPTime(){  
            var startTime=$("#PS_date").val();  
            var start=new Date(startTime.replace("-", "/").replace("-", "/"));  
            var endTime=$("#PE_date").val();  
            var end=new Date(endTime.replace("-", "/").replace("-", "/"));  
            if(end<start){  
                alert("发布作品开始时间必须晚于发布作品结束时间！");
                error3=1; 
                return false;
            }  
            error3=0;
        } 

        function checkPVTime(){  
            var startTime=$("#PE_date").val();  
            var start=new Date(startTime.replace("-", "/").replace("-", "/"));  
            var endTime=$("#VS_date").val();  
            var end=new Date(endTime.replace("-", "/").replace("-", "/"));  
            if(end<start){  
                alert("投票开始时间必须晚于发布作品结束时间！");
                error4=1; 
                return false;
            }  
            error4=0;
        } 
               
        function checkVVTime(){  
            var startTime=$("#VS_date").val();  
            var start=new Date(startTime.replace("-", "/").replace("-", "/"));  
            var endTime=$("#VE_date").val();  
            var end=new Date(endTime.replace("-", "/").replace("-", "/"));  
            if(end<start){  
                alert("结投票结束时间必须晚于投票开始时间！");
                error5=1; 
                return false;
            }  
            error5=0;
        } 

        


/*           
         
            function check(){
              checktitle();
              checkcontent();

              if($('input#Title').val().length==0||$('select#Category').val().length==0||$('#Description').val().length==0||error1==1||error2==1||error3==1||error4==1){
                return false;
              }else{
                return true;
              }
            }*/


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
                   return false;

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

         function checkterm(){
                if($('input#Nterm').val().length==0){
                  alert('Please input Title  !');
                  $('input#Nterm').css(
                    {
                      "border-color": "#a94442",
                      "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                      "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
                    }
                  );
                  error6=1;
                   return false;

                }else{
                    $('input#Nterm').css(
                      {
                        "border-color": "#3c763d",
                        "-webkit-box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)",
                        "box-shadow": "inset 0 1px 1px rgba(0,0,0,.075)"
                      }
                    );
                    error6=0;
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
                   return false;
                  
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


           
                
       
     

    
  </script>

        
    </body>

</html>
<?php   
    $baseurl=base_url();   
    $public =$baseurl.'public/'; 
?>

<!DOCTYPE html>
<html>
<head>
<title>3D website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?php echo $public?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $public?>css/style.css" rel="stylesheet" type="text/css" />







</head>

<body>
<!-- header -->
 <?php 

  $this->load->view('menupart.php');
?>
  
<!-- content -->
    <div id="content">
        <div class="container">
            <div class="wrapper">
               <div class="register">
                  <h2>Register</h2>

                  <div class="registerinfo">
                    
                     <form class="form-horizontal" role="form">

                        <div class="form-group">
                          <label for="inputName" class="col-sm-2 control-label">Username</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="username" placeholder="Username">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="vdrifycode" class="col-sm-2 control-label">Type Verify Code</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="verifycode" placeholder="Text">
                            <div clear="both"></div>

                          </div>

                       
                        </div>


                        <div class="form-group">
                          <label for="verifycodeimg" class="col-sm-2 control-label">Verify Code</label>
                          <div class="col-sm-10">

                            <img id="verifycodeImg"  src="https://passport.baidu.com/cgi-bin/genimage?captchaservice39396137386a766743792f6a693443616e5030625068525a34586d69655779593959507454305145377a6572744463463034377249363835674a5658456953727663664165415a477147466d324d4575584f366d6f497a4b53546162662f774f316d334f454e4e31565761784a4f5533443035664d566b6a5a42475156397a7270796149544a553953704a6472597844586763742b4c752f45375466304f6e333947525132744e635a4c35724169304677594d69704b6a4b5a355275526243694b313766413255437530307a50575937645872755366656a645954656e45414f7a745551595864647830334a524e634653706d2f645168782f553341487a567559465a43684449384345414b4b62376f566550446e42467043573032445661685578555250624d35">

                          </div>

                       
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> 我已阅读并接受《xx用户协议》
                              </label>
                            </div>
                          </div>
                        </div>

                      
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign up</button>
                          </div>
                        </div>
                      </form>

                      <hr>




               </div>

               
               <div class="logininfo">
                
                      <form class="form-horizontal" role="form">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                          <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember me
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign in</button>
                          </div>
                        </div>
                      </form>

               </div>

        </div>
    </div>
    <div clear="both"></div>
<!-- footer -->
<?php 
  $this->load->view('footpart.php');
?>
    
   
</body> 
<html>

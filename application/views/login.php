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
               <div class="login">
                  <h2>Login</h2>
               
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
    
   
</body> 
<html>

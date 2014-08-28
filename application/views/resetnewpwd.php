<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reset Password -- 3D website</title>

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
            <li><a href="<?=base_url('/about');?>">About</a></li>
            <li><a href="<?=base_url('/work');?>">Work</a></li>
           <li><a href="<?=base_url('/vote');?>">Vote</a></li>
           <li><a href="<?=base_url('/bbs');?>">BBS</a></li>
           <li><a href="<?=base_url('/announcement');?>">Announcement</a></li>
           <li><a href="<?=base_url('/contact');?>">Contact</a></li>
          </ul>
         
          <?=$login;?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
      
	<div class="container">
      <div class="page-header">
	      <h1>Reset Password</h1>
	  </div>
      <div class="well well-lg">
      	<br />
      	<br />
      	<center>
	      <div class="row" style="max-width:340px;">
	      	<form class="form-horizontal" role="form" action="<?=base_url('/account/updatepwd');?>" method="post" onsubmit="return check();">
            <div class="form-group">
              <label for="Password" class="col-sm-4 control-label">Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" name="password" id="Password" placeholder="Password" onblur="checkpw();">
              </div>
            </div>
            <div class="form-group">
              <label for="Re-Password" class="col-sm-4 control-label">Re-Password</label>
              <div class="col-sm-8">
                <input type="password" class="form-control" id="Re-Password" placeholder="Password" onblur="checkrpw();">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-8">
                <input type="hidden" class="form-control" name="uid" value="<?=$result->id?>"  >
              </div>
            </div>
			     
			      <div class="form-group">
				      <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default">RESET</button>
                

					  </div>
				</div>
	      	</form>
	      </div>
      	</center>
      	<br />
      	<br />
      </div>
      <hr>

      <footer>
        <p>Copyright &copy; 3D Website</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript">


    function check(){
               
          if($('input#Password').val().length==0||$('input#Re-Password').val()==0){
            return false;
          }else{
            return true;
          }


      
    }

    function checkpw(){
        if($('input#Password').val().length<6){
          alert("The length of password can't less than 6 !");
          //$('input#Password').focus();
        }
    }
    function checkrpw(){
        if($('input#Re-Password').val().length<6){
          alert("The length of password can't less than 6 !");
          //$('input#Re-Password').focus();
        }else if($('input#Password').val()!=$('input#Re-Password').val()){
          alert("Password is not match !");
          //$('input#Re-Password').focus();
        }
    }

   


    </script>
  </body>
</html>

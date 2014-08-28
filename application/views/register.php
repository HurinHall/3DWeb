<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register -- 3D website</title>

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
	      <h1>Register</h1>
	  </div>
      <div class="well well-lg">
      	<br />
      	<br />
      	<center>
	      <div class="row" style="max-width:480px;">
	      	<form class="form-horizontal" role="form" action="<?=base_url('/register/send');?>" method="post" onsubmit="return check();">
	      		<div class="form-group">
		      		<label for="Name" class="col-sm-4 control-label">Name</label>
		      		<div class="col-sm-8">
			      		<input type="text" class="form-control" name="name" id="Name" placeholder="Name" onblur="checkname();">
			      	</div>
			      </div>
	      		<div class="form-group">
		      		<label for="inputEmail" class="col-sm-4 control-label">Email</label>
		      		<div class="col-sm-8">
			      		<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" onblur="checkemail();">
			      	</div>
			      </div>
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
		      		<label for="ID" class="col-sm-4 control-label">Student&nbsp;ID</label>
		      		<div class="col-sm-8">
			      		<input type="text" class="form-control" name="id" id="ID" placeholder="Student ID" onblur="checkid();">
			      	</div>
			      </div>
			      <div class="form-group">
		      		<label for="major" class="col-sm-4 control-label">Major</label>
		      		<div class="col-sm-8">
			      		<input type="text" class="form-control" name="major" id="major" placeholder="Major" onblur="checkmajor();">
			      	</div>
			      </div>
			      <div class="form-group">
				      <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-default">Register</button>
                /
                <a href="<?=base_url('/account/forgetpwd');?>" data-toggle="modal" role="button" class="btn btn-default" > Forget Password</a>

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
    var error=0;
    var error1=0;
    var error2=0;
    function check(){
	    if($('input#Name').val().length==0||$('input#inputEmail').val().length==0||$('input#Password').val().length==0||$('input#Re-Password').val().length==0||$('input#ID').val().length==0||$('input#major').val().length==0||error==1||error1==1||error2==1){
		    return false;
	    }else{
		    return true;
	    }
    }
    function checkname(){
	    $.ajax({ 
                	url: "<?=base_url('/register/checkname')?>", 
                	type: "POST",
                	data: { name: $('input#Name').val()},
                	success: function(data){
                		if(data==1){	  
                			alert("This name has been registered !");  
                      $('input#Name').val('');  
                			//$('input#Name').focus();          		
	                		error=1;
                		}else{
	                		error=0;
                		}
	                }
	      });
	      if($('input#Name').val().length==0){
		      alert("Please input name !");
	      }
    }
    function checkemail(){
	    $.ajax({ 
                	url: "<?=base_url('/register/checkemail')?>", 
                	type: "POST",
                	data: { email: $('input#inputEmail').val()},
                	success: function(data){
                		if(data==1){
	                		alert("This email has been registered !");
                      $('input#inputEmail').val('');
	                		$('input#inputEmail').focus();
	                		error1=1;
                		}else{
	                		error1=0;
                		}
	                }
	    });
	    var reg =  /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	    if($('input#inputEmail').val().length==0){
		      alert("Please input email !");
		      //$('input#inputEmail').focus();
	     }else if(!reg.test($('input#inputEmail').val())){
		     alert("Wrong email format !");
		     //$('input#inputEmail').focus();
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
    function checkid(){
    	  $.ajax({ 
                	url: "<?=base_url('/register/checkid')?>", 
                	type: "POST",
                	data: { id: $('input#ID').val()},
                	success: function(data){
                		if(data==1){	  
                			alert("This student ID has been registered !");   
                       $('input#ID').val(''); 

                			$('input#ID').focus();          		
	                		error2=1;
                		}else{
	                		error2=0;
                		}
	                }
	      });
	      if($('input#ID').val().length!=10){
		      alert("Please check student ID again !");
		      //$('input#ID').focus();
	      }
    }
    function checkmajor(){
	      if($('input#major').val().length==0){
		      alert("Please input major !");
		      //$('input#major').focus();
	      }
    }
    </script>
  </body>
</html>

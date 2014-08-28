<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forget Password -- 3D website</title>

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
	      <h1>Forget Password</h1>
	  </div>
      <div class="well well-lg">
      	<br />
      	<br />
      	<center>
	      <div class="row" style="max-width:340px;">
	      	<form class="form-horizontal" role="form" action="<?=base_url('/account/resetpwd');?>" method="post" onsubmit="return check();">
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
    var error=1;
    var error1=1;

    function check(){
               
          if($('input#Name').val().length==0||$('input#inputEmail').val()==0|| error==1||error1==1){
            return false;
          }else{
            return true;
          }
      


      
    }

    function checkname(){
        if($('input#Name').val().length==0){
          alert("Please input name !");
          error=1;
        }else{
              $.ajax({ 
                      url: "<?=base_url('/register/checkname')?>", 
                      type: "POST",
                      data: { name: $('input#Name').val()},
                      success: function(data){
                        if(data==1){    
                          error=0;
                        }else{
                          alert("This name cannot be found !");  
                          $('input#Name').val('');  
                          error=1;
                        }
                      }
            });
        }

    }

  function checkemail(){
	    $.ajax({ 
                	url: "<?=base_url('/register/checkemail')?>", 
                	type: "POST",
                	data: { email: $('input#inputEmail').val()},
                	success: function(data){
                		if(data==1){
	                			error1=0;
                		}else{
                      alert("This email cannot  be found !");
                      $('input#inputEmail').val('');
	                		error1=1;
                		}
	                }
	    });
        if($('input#inputEmail').val().length==0){
          alert("Please input Email !");
          error1=1;
        }else{
          var reg =  /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
          if(!reg.test($('input#inputEmail').val())){
            alert("Wrong email format !");
            error1=1;
          }else{
            error1=0;
          }
        }
	    
    }

   


    </script>
  </body>
</html>

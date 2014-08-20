<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>3D website</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url('/css/jumbotron.css');?>" rel="stylesheet">
    <link href="<?=base_url('/css/jquery.fancybox.css');?>" rel="stylesheet">
    
    <script src="<?=base_url('/js/jquery-1.3.2.min.js');?>"></script>
     <script src="<?=base_url('/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('/js/jqFancyTransitions.js');?>" type="text/javascript" ></script>
    <script src="<?=base_url('/js/jquery.easing.1.3.js');?>" type="text/javascript"></script>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?=base_url('/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?=base_url('/js/html5shiv.js');?>"></script>
      <script src="<?=base_url('/js/respond.min.js');?>"></script>
    <![endif]-->
    <script type="text/javascript">
    	function set(url){
	    	$('div#showpic').html("<img src='"+url+"' width='500' />");
    	}
    </script>
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
            <li class="active"><a href="<?=base_url('/');?>">Home</a></li>
            <li><a href="<?=base_url('/about');?>">About</a></li>
            <li><a href="<?=base_url('/work');?>">Work</a></li>
           <li><a href="<?=base_url('/vote');?>">Vote</a></li>
           <li><a href="<?=base_url('/bbs');?>">BBS</a></li>
           <li><a href="<?=base_url('/contact');?>">Contact</a></li>
          </ul>
         
          <?=$login;?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
    <!-- Animation -->
    <div id="loadingAnimation">                   
    	<img src="<?=base_url('/images/peacock.jpg');?>" />
    	<img src="<?=base_url('/images/koi.jpg');?>" />
    	<img src="<?=base_url('/images/life.jpg');?>" />                 
    </div>
    <script>$('#loadingAnimation').jqFancyTransitions({ navigation: false, links : false });</script> 
    
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <blockquote class="blockquote-reverse">
	        <h2 class="text-info">SHORT INTRODUCTION HERE</h2>
	        <h2 class="text-info">SHORT INTRODUCTION HERE</h2>
	        <h2 class="text-info">SHORT INTRODUCTION HERE</h2>
   		</blockquote>
      </div>
    </div>
    
    
    
      
	<div class="container">
      <div class="row photos">
        <div class="col-md-4">
        	<a data-toggle="modal" rel="group" href="#view" onclick="set('<?=base_url('/images/3_b.jpg');?>');"> 
		    	<img src="<?=base_url('/images/3_b.jpg');?>"   class="carousel-inner img-responsive img-rounded" /> 
            </a>
        </div>
        <div class="col-md-4">
          <a data-toggle="modal" rel="group" href="#view" onclick="set('<?=base_url('/images/3_b.jpg');?>')"> 
		    	<img src="<?=base_url('/images/3_b.jpg');?>"   class="carousel-inner img-responsive img-rounded" /> 
            </a>
       </div>
        <div class="col-md-4">
          <a data-toggle="modal" rel="group" href="#view" onclick="set('<?=base_url('/images/3_b.jpg');?>')"> 
		    	<img src="<?=base_url('/images/3_b.jpg');?>"  class="carousel-inner img-responsive img-rounded"  /> 
            </a>
        </div>
        <div class="col-md-4">
        	<a data-toggle="modal" rel="group" href="#view" onclick="set('<?=base_url('/images/3_b.jpg');?>')"> 
		    	<img src="<?=base_url('/images/3_b.jpg');?>"   class="carousel-inner img-responsive img-rounded" /> 
            </a>
        </div>
        <div class="col-md-4">
          <a data-toggle="modal" rel="group" href="#view" onclick="set('<?=base_url('/images/3_b.jpg');?>')"> 
		    	<img src="<?=base_url('/images/3_b.jpg');?>"   class="carousel-inner img-responsive img-rounded" /> 
            </a>
       </div>
        <div class="col-md-4">
          <a data-toggle="modal" rel="group" href="#view" onclick="set('<?=base_url('/images/3_b.jpg');?>')"> 
		    	<img src="<?=base_url('/images/3_b.jpg');?>"  class="carousel-inner img-responsive img-rounded"  /> 
            </a>
        </div>
      </div>
      
      <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">&times;</button>
        </div>
        <div class="modal-body">
          <center>
	        <div style="width:520px; margin:auto; position:relative; font-size: 9pt; color: #777777;" id="showpic">
                
            </div>
          </center>
        </div>  
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
      
      <hr>

      <footer>
        <p>Copyright &copy; 3D Website</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>
</html>

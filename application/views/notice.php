<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notice-- 3D website</title>

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
            <li ><a href="<?=base_url('/about');?>">About</a></li>
            <li><a href="<?=base_url('/work');?>">Work</a></li>
           <li><a href="<?=base_url('/vote');?>">Vote</a></li>
           <li><a href="<?=base_url('/bbs');?>">BBS</a></li>
           <li><a href="<?=base_url('/notice');?>">notice</a></li>
           <li><a href="<?=base_url('/contact');?>">Contact</a></li>
          </ul>
         
          <?=$login;?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
      
	<div class="container">
      <div class="page-header">
	      <h1>Announcement</h1>
	  </div>
      <p class="lead text-muted"></p>
          <?php 

          //var_dump($result);

          if (count($result)>0) {
            foreach ($result as $row){
              echo "
                    <div class=\"jumbotron\">
                    <h2>".$row->title."</h2>
                    <p> ".$row->description."</p>
                    <p> Publish  Date: From ".$row->ps_datetime." to ".$row->ps_datetime."</p>
                    <p> Vote  Date: From ".$row->vs_datetime." to ".$row->vs_datetime."</p>

              ";

            }
          }else{
            echo "
             <div class=\"jumbotron\">
                    <h2>Hi, this is the first term to race 3D design competition!</h2>
                    <p> This is a war story about 3D design! Description here!</p>
                    <p> Publish  Date: From 2014-08-18 to 2014-09-11</p>
                    <p> Vote  Date: From 2014-9-12 to 2014-09-30</p>";

          }

          ?>
                       
                   

                    <p> 意见投放：admin@gmail.com</p>


                    <p><a href="<?=base_url();?>about" class="btn btn-primary btn-lg" role="button">Know more about 3D</a></p>
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
  </body>
</html>

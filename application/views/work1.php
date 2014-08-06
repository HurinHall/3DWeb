<?php   
    $baseurl=base_url();   
    $public =$baseurl.'public/'; 
    $basesite=site_url()."/";

?>

<!DOCTYPE html>
<html>
<head>
<title>3D website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?php echo $public?>css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $public?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" ssrc="<?php echo $public?>js/jquery.js"></script>
                  <script type="text/javascript" ssrc="<?php echo $public?>js/bootstrap.min.js"></script>
</head>

<body>

    <div id="content">
        <div class="container">
            <div class="wrapper">
               <div class="workdetail">
                  <h1>What work created by you?</h1>
                  <div class="worklist">
                 
                    <div class="img">
                     <a data-toggle="modal" href="#contact"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                    <br />
                    title
                  </div>      
                  

               
            </div>
        </div>
    </div>

    		<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">&times;</button>
          <h2 class="modal-title">Contact</h2>
        </div>
        <div class="modal-body">
        <br />

      	<br />
        </div> 
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

                  </div>
                  
    
   
</body> 
<html>

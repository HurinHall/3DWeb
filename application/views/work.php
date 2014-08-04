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
<link rel="stylesheet" type="text/css" href="<?php echo $public?>css/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="<?php echo $public?>js/jquery-1.3.2.min.js"></script>

<!-- <script src="js/jquery-1.11.1.min.js" type="text/javascript" charset="utf-8"></script>
 -->
<script src="<?php echo $public?>js/jqFancyTransitions.js" type="text/javascript" ></script>
<script type="text/javascript" src="<?php echo $public?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo $public?>js/jquery.fancybox-1.2.1.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $("div.model-thumbnail a").fancybox();
        });
    </script>


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
               <div class="workdetail">
                  <h2>What work created by you?</h2>

                 
                    <!--<ul class="thumbnails">


                         <li class="thumbnail">
                          <div class="model-thumbnail">
                            <a  rel="group" title="Here is a short caption." href="<?php echo $basesite.'select/getVeiw/123'?>">
                              <img class="scrollloading" data-url="<?php echo $public?>images/koi.jpg" src="<?php echo $public?>images/koi.jpg"  width="180" height="200" style="background:url(<?php echo $public?>images/loading2.gif) no-repeat center;"   >
                              <hr>
                              <span class="model-meta">EXAMPLE</span>      
                            </a> 
                          </div>
                        </li> 

                         <div> 

                        </ul>
                      -->
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>       
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      
                  <div class="worklist">
                 
                    <div class="img">
                     <a href="<?php echo $basesite.'select/getVeiw/123'?>"> <img src="<?php echo $public?>images/vote1.jpg"   /></a>
                    </div>
                  </div>      


                        



                       
                        






                  




                  </div>
                  <script type="text/javascript" ssrc="<?php echo $public?>js/jquery-1.3.2.min.js"></script>

                  <script type="text/javascript" ssrc="<?php echo $public?>js/jquery.scrollloading2.js"></script>
                  <script>
                  $(function() {
                    $(".scrollloading2").scrollloading2();  
                  });
                  </script>

               
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

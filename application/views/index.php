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
            $("div.photos a").fancybox();
        });
    </script>

</head>

<body>
<?php 

  $this->load->view('menupart.php');
?>

  
<!-- content -->
    <div id="content">
        <div class="container">
            <div class="wrapper">
               
                    <div id="loadingAnimation">
                           
                        <img src="<?php echo $public?>images/peacock.jpg"  />
                        <img src="<?php echo $public?>images/koi.jpg"  />
                        <img src="<?php echo $public?>images/life.jpg"  />
                    
                    </div>

                    <script>$('#loadingAnimation').jqFancyTransitions({ navigation: false, links : false });</script>


                    <div class="inlinewords">
                        <div class="words">
                                ﻿​﻿<h3 class="rightside">"THE DETAILS ARE﻿﻿  </h3><div style="clear:both"></div>
                                <h3 class="rightside">NOT THE DETAILS.</h3><div style="clear:both"></div>
                                <h3 class="rightside">THEY MAKE </h3><div style="clear:both"></div>
                                <h3 class="rightside">THE DESIGN."</h3><div style="clear:both"></div>
                                <h3 class="rightside">CHARLES EAMES</h3> 
                        </div>

                        <div class="mywork">
                                 <h2>MY WORK</h2> 
                        </div>                    
                    </div>
                
                    <div class="photos">

                        <a rel="group" title="Here is a short caption." href="<?php echo $public?>images/koi.jpg"> 
                            <img src="<?php echo $public?>images/koi.jpg"   />
                        </a>
                        <a rel="group" title="This is a caption that is longer than a short caption, but not incredibly long." href="<?php echo $public?>images/2_b.jpg"> 
                            <img src="<?php echo $public?>images/koi.jpg"     />
                        </a>
                                <br /> <br />
                        <a rel="group" title="This is an exceptionally long caption that should technically never really ever be this long, but in case it is FancyBox should be able to handle it without any problems whatsoever. That's right, the caption is still going on even now." href="<?php echo $public?>images/1_b.jpg"> 
                            <img src="<?php echo $public?>images/life.jpg"    /> 
                        </a>
                        <a rel="group" title="This is an exceptionally long caption that should technically never really ever be this long, but in case it is FancyBox should be able to handle it without any problems whatsoever. That's right, the caption is still going on even now. This is an exceptionally long caption that should technically never really ever be this long, but in case it is FancyBox should be able to handle it without any problems whatsoever. That's right, the caption is still going on even now." href="<?php echo $public?>images/3_b.jpg"> 
                            <img src="<?php echo $public?>images/life.jpg"    /> 
                        </a>
                        
                    </div> 

                   

                


                


               
            </div>
        </div>
    </div>
    <div clear="both"></div>
<!-- footer -->
<?php 
  $this->load->view('footpart.php');
?>
    
   
</body>
</html>
<?php   
    $baseurl=base_url();   
    $public =$baseurl.'public/'; 
    $basesite=site_url()."/";
?>

<!-- header -->
    <div id="header">
        <div class="bg">
            <div class="container">

                <div class="row-1">
                   <p>hello world</p>
                </div>
              
                <div class="row-2">
                    <!-- .nav -->
                    <ul class="nav">
                        <li><a href="<?php echo $basesite.'select/menu/home'?>" >Home</a></li>
                        <li><a href="<?php echo $basesite.'select/menu/about'?>">About</a></li>
                        <li><a href="<?php echo $basesite.'select/menu/work'?>">Work</a></li>
                        <li><a href="<?php echo $basesite.'select/menu/vote'?>">Vote</a></li>
                        <li><a href="<?php echo $basesite.'select/menu/about'?>">contacts</a></li>       
                    </ul>
                    <!-- /.nav -->
                </div>
             
            </div>
        </div>
    </div>
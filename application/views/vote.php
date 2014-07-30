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
               <div class="votedetail">
                  <h2>In 2014 the most popular 3D design</h2>

                  <div class="votelist">
                    <div class="img">
                      <img src="<?php echo $public?>images/vote1.jpg"   />
                    </div>

                    <div class="info">
                      <h4>Flappy Bird</h4>
                      <p> Range: 10</p>
                      <p> Vote : 100000</p>
                    </div>  
                    
                   

                    <div class="voteit">
                      <input type="submit" value="  VOTE ME  "/>
                    </div> 


                  </div>                


                  <div class="votelist">
                    <div class="img">
                      <img src="<?php echo $public?>images/vote2.jpg"   />
                    </div>

                    <div class="info">
                      <h4>Flappy Bird</h4>
                      <p> Range: 10</p>
                      <p> Vote : 100000</p>
                    </div>  
                    
                   

                    <div class="voteit">
                      <input type="submit" value="  VOTE ME  "/>
                    </div> 


                  </div>                

                  <div class="votelist">
                    <div class="img">
                      <img src="<?php echo $public?>images/vote3.jpg"   />
                    </div>

                    <div class="info">
                      <h4>Flappy Bird</h4>
                      <p> Range: 10</p>
                      <p> Vote : 100000</p>
                    </div>  
                    
                   

                    <div class="voteit">
                      <input type="submit" value="  VOTE ME  "/>
                    </div> 


                  </div>
                                  


                  <div class="votelist">
                    <div class="img">
                      <img src="<?php echo $public?>images/vote4.jpg"   />
                    </div>

                    <div class="info">
                      <h4>Flappy Bird</h4>
                      <p> Range: 10</p>
                      <p> Vote : 100000</p>
                    </div>  
                    
                   

                    <div class="voteit">
                      <input type="submit" value="  VOTE ME  "/>
                    </div> 


                  </div>                

                  <div class="votelist">
                    <div class="img">
                      <img src="<?php echo $public?>images/vote1.jpg"   />
                    </div>

                    <div class="info">
                      <h4>Flappy Bird</h4>
                      <p> Range: 10</p>
                      <p> Vote : 100000</p>
                    </div>  
                    
                   

                    <div class="voteit">
                      <input type="submit" value="  VOTE ME  "/>
                    </div> 


                  </div>                

                  <div class="votelist">
                    <div class="img">
                      <img src="<?php echo $public?>images/vote3.jpg"   />
                    </div>

                    <div class="info">
                      <h4>Flappy Bird</h4>
                      <p> Range: 10</p>
                      <p> Vote : 100000</p>
                    </div>  
                    
                   

                    <div class="voteit">
                      <input type="submit" value="  VOTE ME  "/>
                    </div> 


                  </div>                

                  <div class="votelist">
                    <div class="img">
                      <img src="<?php echo $public?>images/4_s.jpg"   />
                    </div>

                    <div class="info">
                      <h4>Flappy Bird</h4>
                      <p> Range: 10</p>
                      <p> Vote : 100000</p>
                    </div>  
                    
                   

                    <div class="voteit">
                      <input type="submit" value="  VOTE ME  "/>
                    </div> 


                  </div>
                  <div class="votelist">
                    <div class="img">
                      <img src="<?php echo $public?>images/3_s.jpg"   />
                    </div>

                    <div class="info">
                      <h4>Flappy Bird</h4>
                      <p> Range: 10</p>
                      <p> Vote : 100000</p>
                    </div>  
                    
                   

                    <div class="voteit">
                      <input type="submit" value="  VOTE ME  "/>
                    </div> 


                  </div>
                  


                  
           </div> 
            <div clear="both"></div>
           <div class="dislist">
                 
                    <p>      Previous  1 2 3 4 5 6 7  Next             </p>

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
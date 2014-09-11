<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vote -- 3D website</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?=base_url('/css/media.css');?>" rel="stylesheet">

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
            <li class="active"><a href="<?=base_url('/vote');?>">Vote</a></li>
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
	      <h1><?=$racetitle?></h1>
	</div>
    <div class="row">
          <div class="countdown callback"></div>
          <div class="checkreceresult"></div>
    </div>
	  
	<div class="row">
        <?php 

            $imagepath = '';
            $endDate=$ve_datetime;
            //$endDate=str_replace('-',',',$endDate);
            $endDate=date("M j, Y H:i:s",strtotime($ve_datetime));
            foreach ($result as $row)
            {     
                //$vs_datetime=$row->vs_datetime;
                //$ve_datetime=$row->ve_datetime;
              //echo $endDate;
                $imagepath =base_url().'/models/'.$row->publisher.'/'.$row->imagename;
                $obj = '/models/'.$row->publisher.'/'.$row->publisher.'_'.$row->createtime.'/'.$row->publisher.'_'.$row->createtime.'.obj';
               // $downloadlink = base_url().'/models/'.$row->publisher.'/'.$row->publisher.'_'.$row->createtime.'.zip';

                echo "
                    <div class=\"col-sm-6 col-md-3\">
                        <div class=\"thumbnail\">
                            <img src=\"".$imagepath."\" class=\"carousel-inner img-responsive img-rounded\" style=\"width: 260px; height: 180px;\" >
                            <div class=\"caption\">
                              <h3>Title:".$row->title."</h3>
                              <h4>Publisher:".$row->publisher."</h4>
                              <h5>Description:".$row->description."</h5>
                              <p class=\"text-danger\" id=\"vote".$row->id."\">Vote: ".$row->voted."</p>
                              <p>
                                <a data-toggle=\"modal\" href=\"#view\" class=\"btn btn-primary\" role=\"button\" onclick=\"loadModel('".$obj ."') \">View</a>
                                <a class=\"btn btn-success votebtn\" role=\"button\" onclick=\"check_vote(".$row->id.")\" >Vote</a>
                               
                              </p>
                            </div>
                        </div>
                    </div>  
                ";

            }

        ?>
          
		
	</div>
	
	<div class="row">

    <?php  if(count($result) != 0 ) {echo $this->pagination->create_links(); }?> 
	</div>
    <hr>

    <footer>
    	<p>Copyright &copy; 3D Website</p>
    </footer>
    </div> <!-- /container -->

    <div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="close">&times;</button>
          <h2 class="modal-title">3D Show</h2>
        </div>
        <div class="modal-body">
          <center>
          <div style="width:520px; margin:auto; position:relative; font-size: 9pt; color: #777777;">
                <canvas id="cv" style="border: 1px solid;" width="500" height="400" ></canvas>
          </div>
          </center>
        </div>  
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url('/js/jquery.min.js');?>"></script>
    <script src="<?=base_url('/js/bootstrap.min.js');?>"></script>
    <script src="<?=base_url('/js/jquery.countdown.js');?>"></script>

    <script type="text/javascript" src="<?=base_url('/js/libs/three.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/STLLoader.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/stats.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/dat.gui.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/OrbitControls.js');?>"></script>

    <script type="text/javascript" src="<?=base_url('/js/libs/jsc3d.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/jsc3d.webgl.js');?>"></script>
    <script type="text/javascript" src="<?=base_url('/js/libs/jsc3d.touch.js');?>"></script>

    <script type="text/javascript">
    // once everything is loaded, we run our Three.js stuff.

        var canvas = document.getElementById('cv');

        var viewer = new JSC3D.Viewer(canvas);
      
        viewer.setParameter('SceneUrl', '');
        viewer.setParameter('InitRotationX', -90);
        viewer.setParameter('InitRotationY', -90);
        viewer.setParameter('InitRotationZ', 0);
        viewer.setParameter('ModelColor', '#CAA618');
        viewer.setParameter('BackgroundColor1', '#FFFFFF');
        viewer.setParameter('BackgroundColor2', '#383840');
        viewer.setParameter('RenderMode', 'texturesmooth');
        viewer.setParameter('MipMapping', 'on');
        viewer.setParameter('Renderer', 'webgl');
        viewer.init();
        viewer.update();

        function loadModel(obj) {
            var objfile = "<?=base_url('"+obj+"');?>"
            viewer.replaceSceneFromUrl(objfile);
            viewer.update();
        }



      $(function() {
          var endDate = "<?=$endDate?>";
          //alert(endDate+endDate.length );
          $(".checkreceresult").hide();
          if(endDate.length >0){
            $('.countdown.callback').countdown({
              date: endDate,
              render: function(data) {
                $(this.el).text("Left Time for Voting: "+this.leadingZeros(data.days, 2)+" Days "+this.leadingZeros(data.hours, 2)+":"+this.leadingZeros(data.min, 2)+":"+this.leadingZeros(data.sec, 2));
              },
              onEnd: function() {
                $(this.el).addClass('ended');
                $(".votebtn").remove();
                $(".countdown.callback").remove();
                $('.checkreceresult').show().html("<a href=<?=base_url('raceresult')?>>Please Click here to Check the result!</a>");
                record_result();
              }
            });          
          }
            
            

      });
            


      //to close the current race game status = 3
      function close_race(){
        $.ajax({
          url: "<?=base_url('/manage/close_race')?>",
          type:"POST",
          data:{"raceid":"<?= $raceid?>"},
          success:function(data){
            if(data == "3"){
                alert("The Current Race Game is closed!");
            }
          }
          
        });
      }

      //insert the result to raceresult and ranking
      function record_result(){
        $.ajax({
          url: "<?=base_url('/manage/record_result')?>",
          type:"POST",
          data:{"raceid":"<?= $raceid?>","nterm":"<?= $nterm?>"},
          success:function(data){
            //alert(data);
          }
         
          
        });

      }



       

        function check_vote(workid){
          var name = "<?=$this->session->userdata('name');?>";
          var voterid = "<?=$this->session->userdata('userid');?>";
          if(name.length<=0){
             alert("Please login first!");
          }else{
              had_voted(voterid,workid);
          }
      }


        //check if user had vote
        function had_voted(voterid,workid){
          var _json = jQuery.param({ "userid": voterid});
          var result=0;
          $.ajax({ 
                    url: "<?=base_url('/vote/had_voted')?>", 
                    type: "POST",
                    data: _json,
                    dataType:"json",
                    success: function(data){
                      if(data!=0){
                      	alert("You can just vote for one time  !");
                      }else{
	                      do_vote(voterid,workid);
                      }
                    }            
              });   
        }
        
        function do_vote(voterid,workid){
          var _json = jQuery.param({ "voterid": voterid, "workid": workid });
           $.ajax({ 
              url: "<?=base_url('/vote/do_vote')?>",
              type: "POST",
              data: _json,
              dataType:"json",
              success: function(data){
              if(data){
              alert("Thank you for your vote !");
              $('p#vote'+workid).html("Vote: "+data);
            }
          }
           });
        }


     


        
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About -- 3D website</title>

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
            <li class="active"><a href="<?=base_url('/about');?>">About</a></li>
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
	      <h1>技术原理</h1>
	  </div>
      <p class="lead text-muted">3D打印技术出现在20世纪90年代中期，实际上是利用光固化和纸层叠等技术的最新快速成型装置。它与普通打印工作原理基本相同，打印机内装有液体或粉末等“打印材料”，与电脑连接后，通过电脑控制把“打印材料”一层层叠加起来，最终把计算机上的蓝图变成实物。这打印技术称为 3D立体打印技术。</p>
      
      <p class="lead text-muted">3D打印并非是新鲜的技术，这个思想起源于19世纪末的美国，并在20世纪80年代得以发展和推广。中国物联网校企联盟把它称作“上上个世纪的思想，上个世纪的技术，这个世纪的市场”。三维打印通常是采用数字技术材料 打印机来实现。</p>
      
      <p class="lead text-muted">这种打印机的产量以及销量在二十一世纪以来就已经得到了极大的增长，其价格也正逐年下降。 使用打印机就像打印一封信：轻点电脑屏幕上的“打印”按钮，一份数字文件便被传送到一台喷墨打印机上，它将一层墨水喷到纸的表面以形成一副二维图像。 而在3D打印时，软件通过电脑辅助设计技术（CAD）完成一系列数字切片，并将这些切片的信息传送到3D打印机上，后者会将连续的薄型层面堆叠起来， 直到一个固态物体成型。</p>
      
      <p class="lead text-muted">3D打印机与传统打印机最大的区别在于它使用的“墨水”是实实在在的原材料。 堆叠薄层的形式有多种多样。有些3D打印机使用“喷墨”的方式。 例如，一家名为Objet的以色列3D打印机公司使用打印机喷头将一层极薄的液态塑料物质 喷涂在铸模托盘上，此涂层然后被置于紫外线下进行处理。之后铸模托盘下降极小的距离， 以供下一层堆叠上来。另外一家总部位于美国明尼阿波利斯市的公司Stratasys使用一种叫做“熔积成型”的技术，整个流程是在喷头内熔化塑料，然后通过沉积塑料纤维的方式才形成薄层。</p>
      
      <p class="lead text-muted">还有一些系统使用粉末微粒作为打印介质。粉末微粒被喷撒在铸模托盘上形成一层极薄的粉末层，然后由喷出的液态粘合剂进行固化。它也可以使用一种叫做“激光烧结”的技术熔铸成指定形状。 这也正是德国EOS公司在其叠加工艺制造机上使用的技术。而瑞士的Arcam公司则是利用真空中的电子流熔化粉末微粒。以上提到的这些仅仅是许多成型方式中的一部分。当遇到包含孔洞及悬臂这样的复杂结构时， 介质中就需要加入凝胶剂或其他物质以提供支撑或用来占据空间。这部分粉末不会被熔铸，最后只需用水或气流冲洗掉支 撑物便可形成孔隙。如今可用于打印的介质种类多样，从繁多的塑料到金属、陶瓷以及橡胶类物质。 有些打印机还能结合不同介质，令打印出来的物体一头坚硬而另 一头柔软。</p>
      
      <p class="lead text-muted">还有一些系统使用粉末微粒作为打印介质。粉末微粒被喷撒在铸模托盘上形成一层极薄的粉末层，然后由喷出的液态粘合剂进行固化。它也可以使用一种叫做“激光烧结”的技术熔铸成指定形状。 这也正是德国EOS公司在其叠加工艺制造机上使用的技术。而瑞士的Arcam公司则是利用真空中的电子流熔化粉末微粒。以上提到的这些仅仅是许多成型方式中的一部分。当遇到包含孔洞及悬臂这样的复杂结构时， 介质中就需要加入凝胶剂或其他物质以提供支撑或用来占据空间。这部分粉末不会被熔铸，最后只需用水或气流冲洗掉支 撑物便可形成孔隙。如今可用于打印的介质种类多样，从繁多的塑料到金属、陶瓷以及橡胶类物质。 有些打印机还能结合不同介质，令打印出来的物体一头坚硬而另 一头柔软。</p>
      
      <p class="lead text-muted">还有一些系统使用粉末微粒作为打印介质。粉末微粒被喷撒在铸模托盘上形成一层极薄的粉末层，然后由喷出的液态粘合剂进行固化。它也可以使用一种叫做“激光烧结”的技术熔铸成指定形状。 这也正是德国EOS公司在其叠加工艺制造机上使用的技术。而瑞士的Arcam公司则是利用真空中的电子流熔化粉末微粒。以上提到的这些仅仅是许多成型方式中的一部分。当遇到包含孔洞及悬臂这样的复杂结构时， 介质中就需要加入凝胶剂或其他物质以提供支撑或用来占据空间。这部分粉末不会被熔铸，最后只需用水或气流冲洗掉支 撑物便可形成孔隙。如今可用于打印的介质种类多样，从繁多的塑料到金属、陶瓷以及橡胶类物质。 有些打印机还能结合不同介质，令打印出来的物体一头坚硬而另 一头柔软。</p>
      
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

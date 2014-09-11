                             //var_dump($obj);
                                    if( $i%4 == 0){
                                        echo " <div class=\"row-fluid padd-bottom\">
                                        <div class=\"span3\">
                                        <div class=\"thumbnail\">
                                        <img data-src=\"holder.js/230x320\"  src=\"".$imagepath."\" class=\"carousel-inner img-responsive img-rounded\" style=\"width: 260px; height: 180px;\" >
                                        <div class=\"caption\">
                                        <h3>".$row->title."</h3>
                                        <p>".$row->description."</p>
                                        <p>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-danger .btn-xs\"   name=\"delBtn\"     onclick=\"changestatus(".$row->id.",0);\">Del</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-success\"  name=\"hidBtn\"     onclick=\"changestatus(".$row->id.",2);\"> Hide</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-info\"     name=\"pubBtn\"     onclick=\"changestatus(".$row->id.",1);\">Public</a> </p>";
                                        
                                        echo 
                                        "<p>
                                        <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"".$downloadlink."\" >Download</a>
                                        <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"#view\"      onclick=\"loadModel('".$obj ."') \">View</a>


                                        </p>";

                                        if(strlen($raceid)>0){
                                            echo "<p>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"raceBtn\"   onclick=\"racegame(".$row->id.",".$raceid.",'YES','".$nterm."');\"  >Race</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"quitBtn\"   onclick=\"quitgame(".$row->id.",".$raceid.",'NO','".$nterm."');\"  >Quit</a>
                                            </p>";

                                        }

                                        


                                        echo "
                                        </div>
                                        </div>
                                        </div>";

                                    }elseif(($i+1)%4 == 0){
                                        echo "  
                                        <div class=\"span3\">
                                        <div class=\"thumbnail\">
                                        <img data-src=\"holder.js/230x320\"  src=\"".$imagepath."\" class=\"carousel-inner img-responsive img-rounded\" style=\"width: 260px; height: 180px;\" >
                                        <div class=\"caption\">
                                        <h3>".$row->title."</h3>
                                        <p>".$row->description."</p>
                                       <p>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-danger .btn-xs\"   name=\"delBtn\"     onclick=\"changestatus(".$row->id.",0);\">Del</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-success\"  name=\"hidBtn\"     onclick=\"changestatus(".$row->id.",2);\"> Hide</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-info\"     name=\"pubBtn\"     onclick=\"changestatus(".$row->id.",1);\">Public</a> </p>";
                                        
                                        echo 
                                        "<p>
                                        <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"".$downloadlink."\" >Download</a>
                                        <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"#view\"      onclick=\"loadModel('".$obj ."') \">View</a>


                                        </p>";

                                        if(strlen($raceid)>0){
                                            echo "<p>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"raceBtn\"   onclick=\"racegame(".$row->id.",".$raceid.",'YES','".$nterm."');\"  >Race</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"quitBtn\"   onclick=\"quitgame(".$row->id.",".$raceid.",'NO','".$nterm."');\"  >Quit</a>
                                            </p>";

                                        }



                                        echo "

                                        
                                        </div>
                                        </div>
                                        </div> <br><br>";
                                    }else{
                                        echo "  
                                        <div class=\"span3\">
                                        <div class=\"thumbnail\">
                                        <img data-src=\"holder.js/230x320\"  src=\"".$imagepath."\" class=\"carousel-inner img-responsive img-rounded\" style=\"width: 260px; height: 180px;\" >
                                        <div class=\"caption\">
                                        <h3>".$row->title."</h3>
                                        <p>".$row->description."</p>
                                        <p>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-danger .btn-xs\"   name=\"delBtn\"     onclick=\"changestatus(".$row->id.",0);\">Del</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-success\"  name=\"hidBtn\"     onclick=\"changestatus(".$row->id.",2);\"> Hide</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-info\"     name=\"pubBtn\"     onclick=\"changestatus(".$row->id.",1);\">Public</a> </p>";
                                        
                                        echo 
                                        "<p>
                                        <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"".$downloadlink."\" >Download</a>
                                        <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-primary\"  href=\"#view\"      onclick=\"loadModel('".$obj ."') \">View</a>


                                        </p>";

                                        if(strlen($raceid)>0){
                                            echo "<p>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"raceBtn\"   onclick=\"racegame(".$row->id.",".$raceid.",'YES','".$nterm."');\"  >Race</a>
                                            <a data-toggle=\"modal\" role=\"button\" class=\"btn btn-warning\"  name=\"quitBtn\"   onclick=\"quitgame(".$row->id.",".$raceid.",'NO','".$nterm."');\"  >Quit</a>
                                            </p>";

                                        }



                                        echo "
                                        </div>
                                        </div>
                                        </div>";
                                    }

                                    $i++;
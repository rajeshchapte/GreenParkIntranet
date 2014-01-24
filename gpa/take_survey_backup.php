                        <?php
						if($sur_expired!=''){
							echo "<p style='padding:40px 0px;'><center>".$sur_expired."</center></p>";
						}elseif($attemted_msg!=''){
								echo "<p style='padding:40px 0px;'><center>".$attemted_msg."</center></p>";							
							}else{
						
						
							if($survey_success!=''){
								echo "<p style='padding:40px 0px;'><center>".$survey_success."</center></p>";							
							}else{
						?>
                        
                        
                                <form action="" method="post" enctype="multipart/form-data" name="survey_form" id="survey_form">
                                <?php
								$j = 1;
                                $select_survey_qs = mysql_query("SELECT * FROM survey_questions WHERE survey_id = '$sid'");
                                while($get_surveys_qs = mysql_fetch_array($select_survey_qs)){
                                    
                                    echo "<div class='survey_q_div'><b>".$j.". ".$get_surveys_qs[survey_question_text]."</b><input type='hidden' name='survey_qs[]' value='$get_surveys_qs[id]' /> <br>";
                                    $select_survey_as = mysql_query("SELECT * FROM survey_answers WHERE survey_id = '$sid'");
                                    $i = 1;
                                    while($get_surveys_as = mysql_fetch_array($select_survey_as)){
                                ?>
                                    <span style="padding:0px 10px 0px 10px;"><input type="radio" name="ansid<?=$get_surveys_qs[id];?>" id="ans_id<?=$get_surveys_qs[id].$i;?>" value="<?=$get_surveys_as[id];?>" class="req_question" /> <label for="ans_id<?=$get_surveys_qs[id].$i;?>"><?=$get_surveys_as[answer_text];?></label></span><br>

                                <?php
                                    $i++; }
                                echo "</div>";
								?>
								                                    
                                   

								<?php
                                 $j++; }
                               
                                    
                                ?>
                                <input type="submit" name="submit_survey" value="Submit" class="ubutton" />
                                <input type="submit" name="cancel_survey" value="Cancel" class="ubutton" />
                                </form>
                        
                        
                        
                        
                        <?php
								}
								
							}
						?>

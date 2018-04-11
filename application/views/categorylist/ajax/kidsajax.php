<?php foreach ($results as $interview) {  ?>
							<div class="feedbackbox">
							 
								<div class="fbbox1">
									<div class="fbimg"><a href="/studentinterview/detail/<?php echo $interview->id; ?>/">
									<img src="http://main.kuaikuenglish.com/<?php echo $interview->profile_img;?>" border="0"></a></div>
									<div class="fbtxt">
									所在城市：<?php echo $interview->province_name; ?>(<?php echo $interview->type_name; ?>)<br>
									开始日期：<?php echo date("Y-m", strtotime($interview->study_date));?><br>
									学习心得：<span><b><?php echo $interview->title; ?></b>...... <a href="/studentinterview/detail/<?php echo $interview->id; ?>/">详细 &gt;&gt;</a></span>					
									</div>
		    							<?php 
		                                    $orgStudyDate  = new DateTime($interview->study_date);
		                                    $orgInterviewDate = new DateTime($interview->interview_date);
		                                    $interval = $orgStudyDate->diff($orgInterviewDate);
		    							?>
									<div class="fbdays"><span><?php echo $interval->days;?></span>&nbsp;天<br>快酷学龄</div>	
						
								</div>

								<div class="fbbox2">
									<div class="fbname"><?php echo $interview->student_name; ?></div>
									<div class="fbclass"><?php echo $interview->course_name; ?></div>
									<div class="fbdate">访谈日期：
		                                <span><?php echo date("Y-m", strtotime($interview->interview_date)); ?></span>
		                            </div>
								</div>
	
							</div>
							<?php } ?>
							<!-- Result End -->

							<!-- ================================翻页 Start================================-->

						 	<div class="pageaction">
								<div class="paging">
									<ul>
										<?php
						                if (strlen($links)) { ?>
						                	<li class="numbers" id="ajax_pagingsearc">
											  <span><?php echo $links; ?></span>
											</li>
						                    <?php 
						                	}
						                ?>
									</ul>
								</div>
							</div>
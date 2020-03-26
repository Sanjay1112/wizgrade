<?php

/*  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 	
	wizGrade V 1.2 (Formerly SDOSMS) is Designed & Developed by Igweze Ebele Mark | https://www.iem.wizgrade.com
	https://www.wizgrade.com
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 	
	Copyright 2014 - 2020 c wizGrade | IGWEZE EBELE MARK 
	
	Licensed under the Apache License, Version 2.0 (the "License");
	you may not use this file except in compliance with the License.
	You may obtain a copy of the License at

		http://www.apache.org/licenses/LICENSE-2.0

	Unless required by applicable law or agreed to in writing, software
	distributed under the License is distributed on an "AS IS" BASIS,
	WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
	See the License for the specific language governing permissions and
	limitations under the License	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 
	wizGrade School App is Dedicated To Almighty God, My Amazing Parents ENGR Mr & Mrs Igweze Okwudili Godwin, 
	To My Fabulous and Supporting Wife Mrs Igweze Nkiruka Jennifer
	and To My Inestimable Sons Osinachi Michael, Ifechukwu Othniel and Naetochukwu Ryan.  
	
	WEBSITE 					PHONES												EMAILS
	https://www.wizgrade.com	+234 - 80 - 30 716 751, +234 - 80 - 22 000 490 		info@wizgrade.com	
	
	
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Page/Code Explanation~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
	This page enroll new staff to school database
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */ 


		if (!defined('wizGrade')) /* This checks if this page was wrongly access by users */

		die('Hahahaha, Hacking attempt . . . . Be Careful . . . . You Are Been Warned !!!!');
				
		require_once $wizGradeIconPage; /* This include top middle global icon page eg go back, print buttons etcs */

?>
                 	  <!-- row -->	
					<div class="row">  
     				  <div class="col-lg-7">
                      <section class="panel wizgrade-section-div">
                          <header class="panel-heading">
                             <i class="fa fa-user-plus fa-lg"></i> Enroll New Staff
								<span class="tools pull-right">
									<a href="javascript:;" class="fa fa-chevron-down"></a>
									<a href="javascript:;" class="fa fa-times"></a>
								</span>  
                          </header>
                          <div class="panel-body wizGrade-line">

				
						   <!-- form --><form class="form-horizontal" id="frmsaveNewStaff" role="form">
                              
                              	<div class="form-group">
                                      <label for="title" class="col-lg-4 col-sm-4 control-label"> Title</label>
                                     
                                  <div class="col-lg-8">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              
                                              <select class="form-control" id="title" name="title">
                                              
                                				<option value = "">Please Select One</option>

												<?php

													foreach($title_list as $title => $titleValue){

														echo '<option value="'.$title.'"'.$selected.'>'.$titleValue.'</option>' ."\r\n";

													}

												?>
                                              </select>

                                          </div>
                                      </div>
                                  </div>
								  
								<!--  

                              	<div class="form-group">
                                      <label for="ranking" class="col-lg-4 col-sm-4 control-label"> Ranking</label>
                                     
                                  <div class="col-lg-8">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              
                                              <select class="form-control" id="ranking" name="ranking">
                                              
                                				<option value = "">Please Select One</option>

												<?php
												
													try{

														$rankingArray = staffRankingArrays($conn);	
														$rankingCount = count($rankingArray);
														
													}catch(PDOException $e) {
							
														wizGradeDie( 'Ooops Database Error: ' . $e->getMessage());
							 
														}
								
														for($i = $fiVal; $i <= $rankingCount; $i++){	
												
														$rankingValue = $rankingArray[$i]["name"];
														$ranking = $rankingArray[$i]["id"];
															

															echo '<option value="'.$ranking.'"'.$selected.'>'.$rankingValue.'</option>' ."\r\n";
					
														 }
														 

												?>
                                              </select>

                                          </div>
                                      </div>
                                  </div>
								  
								  -->

                                  <div class="form-group">
                                      <label for="lname" class="col-lg-4 col-sm-4 control-label">* Last Name:</label>

                                      <div class="col-lg-8">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              <input type="text" class="form-control capWords"  id="lname" 
                                              name="lname"  required />
                                              
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="fname" class="col-lg-4 col-sm-4 control-label">* First Name:</label>

                                      <div class="col-lg-8">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              <input type="text" class="form-control capWords"  id="fname" 
                                              name="fname"  required />
                                              
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label for="mname" class="col-lg-4 col-sm-4 control-label"> Middle Name:</label>

                                      <div class="col-lg-8">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              <input type="text" class="form-control capWords"  id="mname" 
                                              name="mname" />
                                              
                                          </div>
                                      </div>
                                  </div>

                                  
                                 <div class="form-group">
                                          <input type="hidden" name="bioData" value="newStaff" />
                                          <center><button type="submit" class="btn btn-danger buttonMargin" id="saveNewStaff">
                                          <i class="fa fa-search-plus"></i> Save </button></center>
                                          
                                  </div>
  

                              </form><!-- / form -->
                          
                          </div>
						</section>
                      
					</div>
				
				</div>
				<!-- / row -->
                    
                		
				<!-- row -->	
				<div class="row">  
					<div class="col-lg-12">						  
					  
						<div id="wizgrade-page-div"> </div> <!-- This a div where jquery loads its contents -->					 
					 
					</div>
				</div>
				<!-- / row -->	
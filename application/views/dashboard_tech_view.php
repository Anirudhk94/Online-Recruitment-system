<div class="container">
 <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Interview ID</th>
                  <th>Interview Name</th>
                  <th>Candidate Email</th>
                  <th>Assigned From</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              foreach($result as $tuple){
              echo'
              <tbody>
                <tr>
                  <td>'.$tuple['interview_id'].'</td>
                  <td>'.$tuple['interview_name'].'</td>
                  <td>'.$tuple['candidate_email'].'</td>
                  <td>'.$tuple['assigned_from'].'</td>
                  <td>'.$tuple['status'].'</td>
                  <td>
                  	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal'.$tuple['interview_id'].'">Add Question
                  	</button>
                  	  <div class="modal fade" id="myModal'.$tuple['interview_id'].'" role="dialog">
              					<div class="modal-dialog modal-lg">
                					<div class="modal-content">
               					
                  					<div class="modal-header">
              		    			  <button type="button" class="close" data-dismiss="modal">&times;</button>
              				    	  <h4 class="modal-title">Enter the following details</h4>
              					    </div>
                					   <div class="modal-body">
  					 
					  
                            <div class="container">
                              <h2>Create Interview</h2>
                              <form class="form-horizontal" role="form" action="http://localhost:8888/work/index.php/interview_q/insert_q" method="post">
                                <div class="form-group">
                                  <div class="col-sm-10">
                                <select name="qid" style="width: 450px;font-size: 1120px;">';
                                 foreach($questions as $row){ 
                                  echo '<option value="'.$row['q_id'].'">'.$row['question'].'</option>';
                            		}
                                echo '
                            		</select>
                                  </div>
                                </div>
                                <input type="hidden" name="int_id" value="'.$tuple['interview_id'].'">
                                <div class="form-group">        
                                  <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Add Question</button>
                                  </div>
                                </div>
                              </form>
                            </div>

            			</div>
            			<div class="modal-footer">
            			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            			</div>
            			</div>
            			</div>
            			</div>
            			</div>	
                </td>
                <td>
                  <button class="btn btn-default"><a href="http://localhost:8888/work/index.php/interview_q/get_qa/'.$tuple['interview_id'].'">Feedback</a>
                  </button>
                </td>

              </tr>
              </tbody>';
          		}
              ?>
            </table>
  </div>
</div>
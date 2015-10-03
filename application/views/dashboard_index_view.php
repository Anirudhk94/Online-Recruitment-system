
<div class="container">
 <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Applicant Name</th>
                  <th>Email Id</th>
                  <th>Phone Number</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php
              foreach($result as $tuple){
              echo'
              <tbody>
                <tr>
                  <td>'.$tuple['id'].'</td>
                  <td>'.$tuple['name'].'</td>
                  <td>'.$tuple['email'].'</td>
                  <td>'.$tuple['pno'].'</td>
                  <td>
                  	<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal'.$tuple['id'].'">Process
                  	</button>
                  	  <div class="modal fade" id="myModal'.$tuple['id'].'" role="dialog">
					<div class="modal-dialog modal-lg">
					<div class="modal-content">
					
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">Enter the following details</h4>
					</div>
					
					<div class="modal-body">
					 
					  
<div class="container">
  <h2>Create Interview</h2>
  <form class="form-horizontal" role="form" action="http://localhost:8888/work/index.php/dashboard/get_details" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Interviewer Email:</label>
      <div class="col-sm-10">
        <select name="email" style="width: 450px;font-size: 1120px;">
		  <option value="mark@gmail.com">Mark - mark@gmail.com</option>
		  <option value="steve@gmail.com">Steve - steve@gmail.com</option>
		</select>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Interview Name</label>
      <div class="col-sm-5">          
        <input type="name" name="int_name" class="form-control" id="name" placeholder="Interview Name">
      </div>
    </div>
    <input type="hidden" name="cand_email" value="'.$tuple['email'].'">
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Create Interview</button>
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
                </tr>
              </tbody>';
          		}
              ?>
            </table>
  </div>
</div>
	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Click Here To Add</a>
	<br>
	<br>
	<div class="logout">
    <p><a class="btn btn-danger" href="logout.php">Log out</a></p>
  	</div>

    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Student ID</label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" placeholder="Student ID" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Student Name</label></td>
							<td width="30"></td>
							<td><input type="text" name="mname" placeholder="Student Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Year</label></td>
							<td width="30"></td>
							<td><input type="text" name="lname" placeholder="Year" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Course/Section</label></td>
							<td width="30"></td>
							<td><input type="text" name="address" placeholder="Course/Section" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
							<td width="30"></td>
							<td><input type="email" name="email" placeholder="Email" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			
<div class="row" id="emp_form" style="display: none;">

	<form method="post" id="form_employee">
	  <div class="form-group row">
	    <label for="emp_id" class="col-sm-2 col-form-label">Emp ID</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="emp_id"  name="emp_id">
	    </div>
	  </div>

	  <div class="form-group row">
	    <label for="emp_name" class="col-sm-2 col-form-label">Emp. Name</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" id="emp_name"  name="emp_name">
	    </div>
	  </div>


	  <div class="form-group row">
	    <div class="col-sm-10">
	      <button type="submit" class="btn btn-primary">SAVE</button>
	    </div>
	  </div>
	</form>
</div>

<div class="row d-flex justify-content-left mb-0" id="data_table">
	<div class="col-12 card border border-primary">
		<div class="row card-body pt-1 pb-0" id="holiday_data">

			<div class="col-md-12">
				<div class="card-box">
					<div class="table-responsive dataTables_wrapper">
					<table class="table table-hover display compact nowrap" id="data_list">
						<thead>
							<tr>
								<th scope="col" width="20">No</th>
								<th scope="col" width="40">ID</th>
								<th scope="col" width="120">Full Name</th>
								<!-- <th scope="col" width="70">Sch In</th> -->
								<th scope="col" width="70">ACT</th>
								
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
				</div>
			</div>


		</div>
	</div>
</div>



<div id="test_data">
	

</div>







<script src="<?php echo base_url('/assets/js/hris/employee_list_dt.js?r='.rand());?>"></script>
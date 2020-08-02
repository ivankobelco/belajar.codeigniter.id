<div class="col-12 p-3" id="emp_form" style="background-color: #E6EE9C; display: none;">
  <form method="post" id="form_employee">

    <div class="form-group row">
      <label for="emp_id" class="col-md-2 col-form-label">Emp ID</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="emp_id"  name="emp_id">
      </div>
    </div>

    <div class="form-group row">
      <label for="emp_name" class="col-md-2 col-form-label">Emp. Name</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="emp_name"  name="emp_name">
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-2">
        <span class="btn btn-primary" id="btn_save">SAVE</span>
      </div>
      <div class="col-md-2">
        <span class="btn btn-warning" id="btn_cancel">CANCEL</span>
      </div>      
    </div>

  </form> 

</div>

<div class="col-12 p-3" id="form_emp" style="background-color: #E0E0E0; display: none;">

</div>

<div id="data_table">
  <div class="row">
    <div class="col-sm-3 col-md-3">
     <h2><?php echo $sub_title; ?></h2>
   </div>
   <div class="col-sm-3 col-md-3">
    <span class="btn btn-sm btn-primary waves-effect" onclick="add_emp()"><i class="fas fa-save"></i>ADD</span>
    </div>
  </div>

<div class="table-responsive">
  <table class="table table-striped table-sm" width="100%" id="data_list">
    <thead>
      <tr>
        <th scope="col" width="20">No</th>
        <th scope="col" width="40">Img</th>
        <th scope="col" width="40">ID</th>
        <th scope="col" width="120">Full Name</th>
        <th scope="col" width="200">Address</th>
        <th scope="col">ACT</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
</div>





<script src="<?php echo base_url('/assets/js/hris/master_emp.js?r='.rand());?>"></script>
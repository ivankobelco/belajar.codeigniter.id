<div class="row" style="margin-top: 50px">
	<div class="col-12" align="center"><b><?php echo $title; ?></b></div>
	<div class="col-12" align="center"><?php echo $sub_title .' 25-Jul-2020'; ?><hr></div>	
</div>



<form method="post" id="form_employee" action="<?php echo base_url('index.php/hris/employee/save_master')?>">
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
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">SAVE</button>
    </div>
  </div>
</form>




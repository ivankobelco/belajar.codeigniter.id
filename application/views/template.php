<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="noindex" />
    <meta name="googlebot" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="<?php echo base_url('/assets/vendor/bootstrap-4.5.0/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('/assets/css/mycss.css'); ?>">

    <script> const url = "<?php echo base_url() ?>"</script>
    <script src="<?= base_url('/assets/js/jquery-3.4.1.min.js'); ?>"></script>  

        <script src="<?php echo base_url('assets/vendor/libs/datatables/jquery.dataTables.min.js?').rand(); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/libs/datatables/dataTables.bootstrap4.js?').rand(); ?>"></script>     
</head>
<body>

<?php $this->load->view('layout/nav_bar'); ?>
<div class="container">

<?php $this->load->view($page); ?>
	
</div>
<?php $this->load->view('layout/left_menu'); ?>



<div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_body" >
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



</body>
</html>
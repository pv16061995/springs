<!DOCTYPE html>
<html lang="en">
   <head>
      <?php $this->load->view('layout/head'); ?>
      <!-- Font Awesome-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/fontawesome.css">
      <!-- ico-font-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/icofont.css">
      <!-- Themify icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/themify.css">
      <!-- Flag icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/flag-icon.css">
      <!-- Feather icon-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/feather-icon.css">
      <!-- Bootstrap css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
      <!-- App css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
      <link id="color" rel="stylesheet" href="<?php echo base_url();?>assets/css/color-1.css" media="screen">
      <!-- Responsive css-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">
      <!-- Plugins css start-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/dropzone.css">
      <!-- Plugins css Ends-->
   </head>
   <body>
      <!-- Loader starts-->
      <?php $this->load->view('layout/preloader'); ?>
      <!-- Loader ends-->
      <!-- page-wrapper Start-->
      <div class="page-wrapper" id="pageWrapper">
         <!-- Page Header Start-->
         <?php $this->load->view('layout/header'); ?>
         <!-- Page Header Ends-->
         <!-- Page Body Start-->
         <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            <?php $this->load->view('layout/menu'); ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
               <!-- Container-fluid starts-->
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card">
                           <div class="card-header pb-0">
                              <h5>Settings</h5>
                           </div>
                           <div class="card-body add-post">
                             <form class="row needs-validation" method="post" action="<?php echo base_url(); ?>setting/save" enctype="multipart/form-data">
                                <?php foreach ($settings as $setting): ?>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><?php echo ucfirst(str_replace('_', ' ', $setting['keys'])); ?>:</label>

                                            <input type="text"
                                                class="form-control"
                                                name="<?php echo $setting['keys']; ?>"
                                                id="<?php echo $setting['keys']; ?>"
                                                value="<?php echo htmlspecialchars($setting['value']); ?>">
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <button class="btn btn-light" type="reset">Reset</button>
                                </div>

                            </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Container-fluid Ends-->
            </div>
         </div>
         <!-- footer start-->
         <?php $this->load->view('layout/footer'); ?>
      </div>
      </div>
      <!-- latest jquery-->
      <script src="<?php echo base_url();?>assets/js/jquery-3.5.1.min.js"></script>
      <!-- feather icon js-->
      <script src="<?php echo base_url();?>assets/js/icons/feather-icon/feather.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/icons/feather-icon/feather-icon.js"></script>
      <!-- Sidebar jquery-->
      <script src="<?php echo base_url();?>assets/js/sidebar-menu.js"></script>
      <script src="<?php echo base_url();?>assets/js/config.js"></script>
      <!-- Bootstrap js-->
      <script src="<?php echo base_url();?>assets/js/bootstrap/popper.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
      <!-- Plugins JS start-->
      <script src="<?php echo base_url();?>assets/js/editor/ckeditor/ckeditor.js"></script>
      <script src="<?php echo base_url();?>assets/js/editor/ckeditor/adapters/jquery.js"></script>
      <script src="<?php echo base_url();?>assets/js/dropzone/dropzone.js"></script>
      <script src="<?php echo base_url();?>assets/js/dropzone/dropzone-script.js"></script>
      <script src="<?php echo base_url();?>assets/js/select2/select2.full.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/select2/select2-custom.js"></script>
      <script src="<?php echo base_url();?>assets/js/email-app.js"></script>
      <script src="<?php echo base_url();?>assets/js/form-validation-custom.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="<?php echo base_url();?>assets/js/script.js"></script>
      <script src="<?php echo base_url();?>assets/js/theme-customizer/customizer.js"></script>
      <!-- login js-->
      <!-- Plugin used-->
   </body>
</html>
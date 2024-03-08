<!doctype html>
<html class="no-js" lang="en">

<?php include('metatag.php'); ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php include('sidebar.php'); ?>
    <!-- Start Welcome area -->
    <?php include('header.php'); ?>
            <!-- Mobile Menu start -->
             <!-- Mobile Menu start -->
            <?php include('mobile_menu.php'); ?>
            <!-- Mobile Menu end -->
           <?php include('top_menu.php'); ?>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
               
                <div class="row">
                   
                 
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Change Password</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<?php include('val.php');?>
						
					<form name="form2" method="post" action="changepin.php">
<p>Old Password </p>
  <label>
  <input type="text" name="old_pwd">
  </label>
  <p>New password </p>
  <p>
    <label>
      <input type="text" name="new_pwd">
      </label>
	  <p>Confirm password </p>
  <p>
    <label>
      <input type="text" name="conf_pwd">
      </label>
  </p>


  <label>
  <input type="submit" name="Submit" value="Change" class="btn btn-primary" />
  </label>
</form>
</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
        <!-- Basic Form End-->
        <?php include('footer.php'); ?>
</body>
<?php
include('val.php');
?>

</html>
</body>
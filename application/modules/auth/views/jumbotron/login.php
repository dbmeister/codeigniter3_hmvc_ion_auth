<section class='module_login'>
  <h1><?php echo lang('login_heading');?></h1>
  <p><?php echo lang('login_subheading');?></p>

  <div id="infoMessage"><?php echo $message;?></div>

  <?php echo form_open("auth/login");?>

    <div class='form-group'>
      <?php echo lang('login_identity_label', 'identity');?>
      <?php echo form_input($identity);?>
    </div>

    <div class='form-group'>
      <?php echo lang('login_password_label', 'password');?>
      <?php echo form_input($password);?>
    </div>

    <div>
      <label for="remember" id="remember-label">
        <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?><?php echo lang('login_remember_label'); ?>
      </label>
    </div>

    <div>
      <label for="submit"> </label>
      <?php echo form_submit(array('name'=>'submit','id'=>'submit','class'=>'submit'), lang('login_submit_btn'));?>
    </div>
  
    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

  <?php echo form_close();?>

</section>
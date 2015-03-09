<section class='module_login'>
  <h1><?php echo lang('change_password_heading');?></h1>

  <div id="infoMessage"><?php echo $message;?></div>

  <?php echo form_open("auth/change_password", array('id'=>'change-password'));?>

        <div class='form-group'>
              <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
              <?php echo form_input($old_password);?>
        </div>

        <div class='form-group'>
              <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
              <?php echo form_input($new_password);?>
        </div>

        <div class='form-group'>
              <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
              <?php echo form_input($new_password_confirm);?>
        </div>

        <?php echo form_input($user_id);?>
        <p><?php echo form_submit(array('name'=>'submit', 'id'=>'submit', 'class'=>'submit'), lang('change_password_submit_btn'));?></p>

  <?php echo form_close();?>
</section>

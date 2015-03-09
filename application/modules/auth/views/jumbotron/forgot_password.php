<section class='module_login'>
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>

      <div class='form-group'>
      	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> <br />
      	<?php echo form_input($email);?>
      </div>

      <div>
      <label for="submit"> </label>
        <?php echo form_submit(array('name'=>'submit','id'=>'submit','class'=>'submit'), lang('forgot_password_submit_btn'));?>
      </div>

<?php echo form_close();?>
</section>
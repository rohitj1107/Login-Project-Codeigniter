<?php if($this->session->userdata('logged_in')){
  echo '<h1>Logout</h1>';
  echo form_open('users/logout');
  if ($this->session->userdata('logged_in')) {
      echo '<p>You\'r logged in as '.$this->session->userdata('username').'</p>';
  }

  $data = array('class' => 'btn btn-primary','name'=>'submit','value'=>'logout' );
  echo form_submit($data);
  echo form_close();
} else { ?>
<h2>Login Form</h2>

<?php $attributes = ['id'=>'login_form','class'=>'form_horizontal']; ?>

<?php if ($this->session->flashdata('errors')) {
    echo $this->session->flashdata('errors');
} ?>

<?php echo form_open('Users/login',$attributes); ?>

<div class="form-group">

<?php echo form_label('Username : '); ?>

<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Enter Username']); ?>

</div>
<div class="form-group">

<?php echo form_label('Password : '); ?>

<?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Enter Password']); ?>
</div>

<div class="form-group">

<?php echo form_label('Comfirm Password : '); ?>

<?php echo form_password(['name'=>'confirm_password','class'=>'form-control','placeholder'=>'Enter Comfirm Password']); ?>
</div>

<div class="form-group">

<?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Submit']); ?>

</div>

<?php echo form_close(); ?>
<?php } ?>

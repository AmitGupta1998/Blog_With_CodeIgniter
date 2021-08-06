<?php include('header.php') ?>
<div class="container" style="margin-top: 30px;">

<?php echo form_open('admin/sendemail') ?>
<h1>Register Form</h1>
<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
        <label for="Username">Username</label>
       <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>   set_value('uname')]); ?> 
    </div>
    </div>
    <div class="col-md-6" style="margin-top: 30px;"><?php echo form_error('uname') ?></div>
    </div>
 <div class="row">    
    <div class="col-md-6">
    <div class="form-group">
        <label for="pwd">Password</label>
        <?php echo form_input(['type'=>'password','class'=>'form-control','placeholder'=>'Enter Password','name'=>'pass','value'=>set_value('pass')]); ?>
    </div>
    </div>
    <div class="col-md-6" style="margin-top: 30px;"><?php echo form_error('pass') ?></div>
 </div>
 <div class="row">    
    <div class="col-md-6">
    <div class="form-group">
        <label for="fname">First Name</label>
        <?php echo form_input(['type'=>'text','class'=>'form-control','placeholder'=>'Enter First Name','name'=>'fname','value'=>set_value('fname')]); ?>
    </div>
    </div>
    <div class="col-md-6" style="margin-top: 30px;"><?php echo form_error('fname') ?></div>
 </div>
 <div class="row">    
    <div class="col-md-6">
    <div class="form-group">
        <label for="lname">Last Name</label>
        <?php echo form_input(['type'=>'text','class'=>'form-control','placeholder'=>'Enter Last name','name'=>'lname','value'=>set_value('lname')]); ?>
    </div>
    </div>
    <div class="col-md-6" style="margin-top: 30px;"><?php echo form_error('lname') ?></div>
 </div>
 <div class="row">    
    <div class="col-md-6">
    <div class="form-group">
        <label for="email">Email</label>
        <?php echo form_input(['type'=>'email','class'=>'form-control','placeholder'=>'Enter Email','name'=>'email','value'=>set_value('email')]); ?>
    </div>
    </div>
    <div class="col-md-6" style="margin-top: 30px;"><?php echo form_error('email') ?></div>
 </div>

    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit'])?>
    <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset'])?>
</div>
<?php include('footer.php') ?>
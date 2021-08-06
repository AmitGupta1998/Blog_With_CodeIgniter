<?php include('header.php') ?>
<div class="container" style="margin-top: 30px;">

<?php echo form_open('admin/index') ?>
<h1>Admin form</h1>
<?php if( $err=$this->session->flashdata('failed')):?>
<div class="row">
    <div class="col-lg-6">
        <div class="alert alert-danger">
            <?= $err; ?>
        </div>
    </div>
</div>
   <?php endif;?> 
<div class="row">
    <div class="col-lg-6">
    <div class="form-group">
        <label for="Username">Username</label>
       <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?> 
    </div>
    </div>
    <div class="col-md-6" style="margin-top: 30px;"><?php echo form_error('uname') ?></div>
    </div>
 <div class="row">    
    <div class="col-md-6">
    <div class="form-group">
        <label for="pwd">Password</label>
        <?php echo form_input(['type'=>'password','class'=>'form-control','placeholder'=>'Enter Password','name'=>'pass']); ?>
    </div>
    </div>
    <div class="col-md-6" style="margin-top: 30px;"><?php echo form_error('pass') ?></div>
 </div>
    <?php echo form_submit(['type'=>'submit','class'=>'btn btn-default','value'=>'Submit'])?>
    <?php echo form_reset(['type'=>'reset','class'=>'btn btn-default','value'=>'Reset'])?>
    <?php echo anchor('admin/register/','Sign Up?','class="link-class"') ?>
</div>
<?php include('footer.php') ?>

    <body>
        <div class="container">
        <?php echo form_open('/Proiect_test/index.php/users/insert_users'); ?>
		<h1>Simple User Management - Adriana Titiu</h1>
		<h2>Insert Data Into Database Using CodeIgniter</h2><hr/> 
        
        <?php echo form_label('Username :'); ?> <?php echo form_error('dname'); ?><br />
        <?php echo form_input(array('id' => 'dname', 'name' => 'dname', 'class'=>'form-control'));?><br />
		
		<?php echo form_label('Name : ');?><?php echo form_error('dnname');?> <br/>
		<?php echo form_input(array('id' => 'dnname' , 'name' => 'dnname', 'class'=>'form_control'));?> <br/>

        <?php echo form_label('Email :'); ?> <?php echo form_error('demail'); ?> <br />
        <?php echo form_input(array('id' => 'demail', 'name' => 'demail', 'placeholder'=>'example@yahoo.com','class'=>'form-control'));?> <br />
		
		<?php echo form_label('Password : ');?> <?php echo form_error('dpass');?> <br/>
		<?php echo form_input(array('id' => 'dpass' , 'type'=>'password' ,'name' =>'dpass' , 'class' =>'form_control'));?> <br/>

        <?php echo form_label('Phone No. :'); ?> <?php echo form_error('dphone'); ?><br />
        <?php echo form_input(array('id' => 'dphone', 'name' => 'dphone','placeholder'=>'10 Digit Mobile No.', 'class'=>'form-control')); ?><br />

        <?php echo form_label('Description :'); ?> <?php echo form_error('ddescription'); ?><br />
        <?php echo form_input(array('id' => 'ddescription', 'name' => 'ddescription', 'class'=>'form-control')); ?><br />

        <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit'));?>
        
        <?php echo form_close(); ?><br/>
        
       </div>  
	  
    </body>
</html>

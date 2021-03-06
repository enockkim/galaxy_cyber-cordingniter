<?php
$id		 =	$this->session->userdata('id');
?>
<div class="row">


	<!-- <div class="col-md-8"> -->
		<div class="col-md-7">

			<!-- <h4>Tabs</h4> -->

			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa fa-bars"></i> Manage Profile</a></li>
				<!-- <li><a href="#tab2" role="tab" data-toggle="tab"><i class="fa fa-unlock-alt"></i> Change Password</a></li> -->
			</ul>

			<!-- Tab panes -->
			<div class="tab-content tab-custom top-color-border">
				<div class="tab-pane fade in active" id="tab1">
					<?php $setting_id=$this->db->get_where('login', array('login_id' => $id)); ?>
									 
					<?php foreach($setting_id->result() as $row):
                        $id=$row->login_id;
                        $pass=$row->password;
                        $names=$row->name;
                        $role=$row->role;
                        $em=$row->email;
                        
                        endforeach
                    
                    ?>
					<?php $attributes = array("name" => "form", 'id'=>'nameForm');
            echo form_open("admin/validate_profile", $attributes);?> 
            
					<div id="nameMessage"></div>
                        <div class="form-group">
                            <input type="hidden" id="base_url" value="<?php echo base_url(); ?>">
                            <label><b>Name:</b></label>
                            <input type="text" name="name" class="form-control" value="<?php echo $names?>" id="name" placeholder="Enter your full names">
                        </div>

                        <div class="form-group">
                            <label><b>Email:</b></label>
                            <input type="text" name="email" value="<?php echo $em?>" class="form-control" readonly="readonly" disabled id="username">
                        </div>

                        <div class="form-group">
                            <label><b>Role:</b></label>
                            <input type="text" name="role" class="form-control" id="role" readonly="readonly" disabled value="<?php echo $role?>">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="theme_button inverse">Update Profile</button>
                            <!-- <button type="button" onclick="resetForm()" class="btn btn-warning">Reset</button> -->
                            </div>

                    </form>
                    <!--manage profile form end-->
				</div>
				<div class="tab-pane fade" id="tab2">
					<?php $attributes = array("name" => "form", 'id' => 'passwordForm');
            echo form_open("admin/validate_password", $attributes);?>
            
                    <div id="passwordMessage"></div>
                    <div class="form-group">
                        <label><b>Current Password:</b></label>
						<?php 
							$data=array(
							'name'=> 'oldpass',
							'type'=>'password',
							'placeholder'=>'current password',
							'class'=>'form-control',
							'id'=>'oldpass',
							'value'=>set_value('oldpass'),
							);
							echo form_input($data);
						?>

                    </div>
                    <div class="form-group">
                    	<label><b>New Password:</b></label>
						<?php 
							$data=array(
							'name'=> 'newpass',
							'type'=>'password',
							'placeholder'=>'new password',
							'class'=>'form-control',
							'id'=>'newpass',
							'value'=>set_value('newpass'),
							
							);
							echo form_input($data);
						?>
					</div>
					<div class="form-group">
						<label><b>Confirm Password:</b></label>
						 <?php 
                            $data=array(
                            'name'=> 'confpass',
                            'type'=>'password',
                            'placeholder'=>'confirm password',
                            'class'=>'form-control',
                            'id'=>'confpass',
                            'value'=>set_value('confpass'),
                            
                            );
                            echo form_input($data);
                        ?>
                    </div>
	                    <?php
						   $data=array(
						   'type'=>'hidden',
						   'name'=>'email',
						   'value'=>$em,
						   );
						   echo form_input($data);
					    ?>
					    <?php 
							$data=array(
							'type'=>'submit',
							'class'=>'theme_button inverse',
							'value'=>'Change Password',
							
							);
							echo form_submit($data);
						?>
						<?php echo form_close() ?>
				</div>
			</div>

		</div>
		<!-- .with_border -->

	<!-- </div> -->


	</div>
	<!-- .col-* -->

</div>
<!-- .row -->
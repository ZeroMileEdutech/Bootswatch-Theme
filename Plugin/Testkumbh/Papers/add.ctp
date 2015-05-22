<div class="users form">
	<h2>Register as Student</h2>

	<fieldset>
		<?php
			echo $this->Form->create('User');

			$this->Form->inputDefaults(array(
				'label' => false,
				'class' => 'form-control',
				'div' => array('class' => 'form-group'),
			));

			echo $this->Form->input('username', array('placeholder' => __('Username')));
			echo $this->Form->input('password', array('value' => '', 'placeholder' => __('Password')));
			echo $this->Form->input('verify_password', array('type' => 'password', 'value' => '', 'placeholder' => __('Verify Password')));
			echo $this->Form->input('name', array('placeholder' => __('Name')));
			echo $this->Form->input('email', array('placeholder' => __('Email')));

			echo $this->Form->button(__('Register'), array('class' => 'btn btn-info'));
			echo $this->Form->end();
		?>

	</fieldset>
</div>
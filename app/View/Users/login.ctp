<h2 align=center><?php echo $this->Html->image('camera.jpg', array('width' => '100', 'height' => '100')) ?>&nbsp;MyImages</h2>

<div class="users form">
<?php //echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array('type' => 'file' ,'action' => 'upload')); ?>
    <fieldset>
        <legend><?php echo __('Upload your image here'); ?></legend>
        <?php echo $this->Form->input('email', array('label' => 'Username / Email' , array('style' => 'font-weight:bold')));
        echo $this->Form->input('firstname', array('label' => 'First Name'));
        echo $this->Form->input('lastname', array('label' => 'Last Name'));
        echo $this->Form->input('image', array('type' => 'file'));
        echo $this->Form->input('password', array('label' => 'Password' , array('style' => 'font-weight:bold')));
        echo $this->Form->input('password_confirm', array('label' => 'Confirm Password'));

	
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Save Image')); ?>
</div>
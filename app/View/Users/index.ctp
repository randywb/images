<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User', array('action' => 'register')); ?>
    <fieldset>
        <legend><?php echo __('Register'); ?></legend>
        <?php echo $this->Form->input('name');
		echo $this->Form->input('username / email*');
        echo $this->Form->input('password');
	echo $this->Form->input('image');


    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
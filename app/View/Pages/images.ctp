<?php 
/**
 *
 * PHP 5
 *
 * @link          Images Application
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<h2 align=center><?php echo $this->Html->image('camera.jpg', array('width' => '100', 'height' => '100')) ?>&nbsp;Welcome to MyImages</h2>

<br ><span  style="margin-left:700px; color:red; font-weight:bold;">At MyImages we provide the ability to upload images to the Cloud!</span></br>
<p>
<div class="users form" style='font-weight:bold; color:red'>
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('action' => 'register')); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password to register'); ?></legend>
        <?php echo $this->Form->input('email', array('label' => 'Username / Email', 'div' => array('style' => 'font-weight:bold'), 'div' => array('style' => 'color:red')));
        echo $this->Form->input('password', array('label' => 'Password', 'div' => array('style' => 'color:red')));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>


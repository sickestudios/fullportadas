<div class="categorytypes form">
<?php echo $this->Form->create('Categorytype'); ?>
	<fieldset>
		<legend><?php echo __('Add Categorytype'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('url');
		echo $this->Form->input('description');
		echo $this->Form->input('keywords');
		echo $this->Form->input('Cover');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categorytypes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Covers'), array('controller' => 'covers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cover'), array('controller' => 'covers', 'action' => 'add')); ?> </li>
	</ul>
</div>

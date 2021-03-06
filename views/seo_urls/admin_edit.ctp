<div class="seo_plugin">
	<?php echo $this->element('seo_view_head', array('plugin' => 'seo')); ?>
	<div class="seoUrls form">
	<?php echo $this->Form->create('SeoUrl');?>
		<fieldset>
			<legend><?php __('Admin Edit Seo Url'); ?></legend>
			<?php
				echo $this->Form->input('SeoUrl.id');
				echo $this->Form->input('SeoUrl.url');
				echo $this->Form->input('SeoUrl.priority');
			?>
		</fieldset>
	<?php echo $this->Form->end(__('Save All', true));?>
	</div>
	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SeoUrl.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SeoUrl.id'))); ?></li>
		</ul>
	</div>
</div>
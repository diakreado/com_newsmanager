<?php
/** @var $this NewsmanagerViewNewsmanager */
defined( '_JEXEC' ) or die; // No direct access
?>
<?php if ($this->item) : ?>
	<div>
		<h2>
			<a href="<?php echo JRoute::_('index.php?option=com_newsmanager&view=item&id='.$this->item->id) ?>" > <?php echo $this->item->title; ?> </a>
		</h2>
		<span> <?php echo $this->item->published_up; ?> </span>
		<?php if (!empty($this->item->media)) : ?>
			<div>
				<img style="width:100%" src="<?php echo $this->item->media->media; ?>" />
			</div>
		<?php endif; ?>
		<p><?php echo $this->item->text; ?></p>
	</div>
<?php endif; ?>
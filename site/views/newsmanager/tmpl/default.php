<?php
/** @var $this NewsmanagerViewNewsmanager */
defined( '_JEXEC' ) or die; // No direct access
?>
<?php if (!empty($this->items) && is_array($this->items)) : ?>
	<?php foreach ($this->items as $item) : ?>
		<div>
			<h2>
				<a href="<?php echo JRoute::_('index.php?option=com_newsmanager&view=item&id='.$item->id) ?>" > <?php echo $item->title; ?> </a>
			</h2>
			<span> <?php echo $item->published_up; ?> </span>
			<?php if (!empty($item->media)) : ?>
				<div>
					<img style="width:100%" src="<?php echo $item->media->media; ?>" />
				</div>
			<?php endif; ?>
			<p><?php echo $item->text; ?></p>
		</div>
	<?php endforeach; ?>
	<div class="pagination">
		<p class="counter pull-rigth">
			<?php echo $this->pagination->getPagesCounter(); ?>
		</p>
		<?php echo $this->pagination->getPagesLinks(); ?>
	</div>
<?php endif; ?>
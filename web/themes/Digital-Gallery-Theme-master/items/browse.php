<?php
	$pagination = pagination_links(array('class' => 'navigation'));
	$page_title = isset($_GET['search']) && ! empty($_GET['search']) ? "Search - {$_GET['search']}" : "Browse Items";
?>
<?php echo head(array('title' => $page_title)); ?>

<div id="primary">
	<div class="row">
		<div class="span8">
			<h1 class="page-heading"><?php echo __($page_title) ?> <small><?php echo __('%s total items', $total_results); ?></small></h1>
		</div>
		<div class="span4">
			<div class="pagination right"><?php echo $pagination; ?></div>
		</div>
	</div>

	<div class="browse items">
	<?php foreach(loop('items') as $item): ?>
		<div class="item row">
			<?php if (metadata('item', 'has thumbnail')): ?>
			<div class="item-thumbnail span5">
				<?php echo link_to_item(item_image('square_thumbnail', array('class' => 'half'))); ?>
			</div>
			<?php endif; ?>

			<div class="item-metadata span7">
				<?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?>

				<?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250))): ?>
				<div class="item-description">
					<?php echo $description; ?>
				</div>
				<?php endif; ?>

				<?php if (metadata('item', 'has tags')): ?>
				<div class="tags"><p><strong><?php echo __('Tags'); ?>:</strong>
					<?php echo tag_string('item'); ?></p>
				</div>
				<?php endif; ?>

				<?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
			</div>
		</div>
	<?php endforeach; ?>
	</div>

	<div class="pagination right"><?php echo $pagination; ?></div>

	<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

</div>

<?php echo foot(); ?>
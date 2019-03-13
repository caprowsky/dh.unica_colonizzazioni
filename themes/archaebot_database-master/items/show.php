

<?php echo head(array('title' => metadata($item,array('Item Type Metadata','Common Name')),'bodyclass' => 'items show')); ?>



<!-- <h1> --> <?php // echo metadata('item', array('Dublin Core', 'Title')); ?> <!-- </h1> -->  <!-- Commented this out because the viewer says the title so it seems redundant -->

<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

<div id="primary">
<?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); //here ?> 
    <?php  echo all_element_texts('item'); ?>
<aside id="sidebar">

    <!-- The following returns all of the files associated with an item. -->
    <?php if ((get_theme_option('Item FileGallery') == 1) && metadata('item', 'has files')): ?>
    <div id="itemfiles" class="element">
        <h2><?php echo __('Files'); ?></h2>
        <?php echo item_image_gallery(); ?>
    </div>
    <?php endif; ?>
    
  <!-- <hr style="color: black; border: 0; border-top: 3px double #8c8c8c;"> -->

    <!-- If the item belongs to a collection, the following creates a link to that collection. -->
    <?php if (metadata('item', 'Collection Name')): ?>
    <div id="collection" class="element">
        <h3><?php echo __('Collection'); ?></h3>
        <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></div>
    </div>
    <?php endif; ?>

    <!-- The following prints a list of all tags associated with the item -->
    <?php if (metadata('item', 'has tags')): ?>
    <div id="item-tags" class="element">
        <h3><?php echo __('Tags'); ?></h3>
        <div class="element-text"><?php echo tag_string('item'); ?></div>
    </div>
    <?php endif;?>

    <!-- The following prints a citation for this item. -->
    <div id="item-citation" class="element">
        <h3><?php echo __('Citation'); ?></h3>
        <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
    </div>
</aside>
</div><!-- end primary -->



<ul class="item-pagination navigation">
    <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
    <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
</ul>

<hr style="color:#e2e5ce;">
<?php echo foot(); ?>

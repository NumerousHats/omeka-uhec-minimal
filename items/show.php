<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')), 'bodyclass' => 'items show')); ?>

<h2><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h2>

<?php if ((get_theme_option('Item FileGallery') == 0) && metadata('item', 'has files')): ?>
<?php echo files_for_item(array('imageSize' => 'fullsize')); ?>
<?php endif; ?>

<?php echo all_element_texts('item'); ?>

<!-- The following returns all of the files associated with an item. -->
<?php if ((get_theme_option('Item FileGallery') == 1) && metadata('item', 'has files')): ?>
<div id="itemfiles" class="element">
    <h3><?php echo __('Files'); ?></h3>
    <div class="element-text"><?php echo files_for_item(); ?></div>
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

<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>


<?php echo foot(); ?>

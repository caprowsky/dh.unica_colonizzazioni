<?php
    $pageTitle = __('Search Items');
    echo head(['title' => $pageTitle, 'bodyclass' => 'items advanced-search']);
?>

    <h1><?php echo $pageTitle; ?></h1>
    <?php $subnav = public_nav_items(); echo $subnav->setUlClass('nav nav-pills'); ?>
    <hr>

    <?php echo $this->partial('items/search-form.php', ['formAttributes' => ['id' =>'advanced-search-form']]); ?>

<?php echo foot(); ?>

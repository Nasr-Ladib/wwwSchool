<?php foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<div class="product-desc">
    <div style="padding: 10px">
        <?php print_r($output); ?>
    </div>
</div>


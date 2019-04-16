<?php echo head(); ?>

<div class="row hero">
	<?php $i = 5; while($i > 0): ?>
	<div class="home-slice">
		<div class="closed-caption padded">Here is some text you should read</div>
	</div>
	<?php $i--; endwhile; ?>
</div>

<?php echo foot(); ?>

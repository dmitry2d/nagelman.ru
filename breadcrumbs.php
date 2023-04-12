<div style="font-size: 24px">
	<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="<?php echo get_option('home'); ?>" itemprop="url">Главная</a> 
	</span>
	<?php if(!empty(get_the_category())) : ?>
		/ <?php the_category(' / ', 'multiple'); ?>
	<? endif; ?>
  	<?php if(!is_category( )) {echo '/ '; }?>

 </div><hr>
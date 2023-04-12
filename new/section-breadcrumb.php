

<?php
/**
 * Section Breadcrump
 */

?>


<div class="section__breadcrumb">

	<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
		<a href="<?php echo get_option('home'); ?>" itemprop="url">Главная</a> 
	</span>
	<?php if(!empty(get_the_category())) : ?>
		<span>&larr;</span><?php the_category(' <span>&larr;</span> ', 'multiple'); ?>
	<?php endif; ?>
  	<?php if(!is_category( )) {echo '<span>&larr;</span><span>' . get_the_title() . '</span>'; }?>


</div>

<style>

    .section__breadcrumb {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 0 20px 0;
        display: flex;
    }
    .section__breadcrumb > span {
        color: rgba(var(--color-heading),0.6);
        margin-right: 6px;
    }
    .section__breadcrumb > span * {
        color: inherit!important;
        font-weight: inherit;
    }
    .section__breadcrumb > span:last-child {
        color: rgba(var(--color-heading),1);
        font-weight: 500;
    }
    @media screen and (max-width: 800px) {
        .section__breadcrumb {
            display: none;
        }
    }

</style>

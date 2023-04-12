



<?php
/*
* Section Welcome part 2
*/
?>

<section class="section__welcome">
    
    <div class="section__welcome__container">
            
        <div class="section__welcome__problems">
            <ul class="slides">
            <?php;
            $rows = get_field('welcome_section__problems');
                if( $rows ) {
                    foreach( $rows as $row ) {
                        echo '<li><div>' . $row['text'] . '</div></li>';
                    }
                }
            ?>
            </ul>
        </div>
        
        <div class="section__welcome__solution">
            <?= the_field('welcome_section__solution'); ?>
        </div>
        
        
        <div class="section__welcome__warnings__title">
            <?= the_field('welcome_section__warnings__description'); ?>
        </div>

        <div class="section__welcome__warnings__text">
            <?php
                $rows = get_field('welcome_section__warnings');
                if( $rows ) {
                    foreach( $rows as $row ) {
                        echo '<div>';
                        echo '<img src="' . $row['icon'] . '">';
                        echo '<div>' . $row['text'] . '</div>';
                        echo '</div>';
                    }
                }
            ?>
        </div>

        <!-- Consult Form -->
        <div class="section__footer_consult-link header-form section__welcome__counsult-button__wrapper" >
            <p class="form-hidden popmake-539 section__welcome__counsult-button">Записаться онлайн</p>
            <div class="form-visible" style="display: none;">
                <?php echo do_shortcode( '[contact-form-7 id="478" title="Форма в шапке"]' );?>
            </div>
        </div>

    </div>

</section>

<!--  Styles and scripts are in Welcome Part 1 Section File -->
<style></style>
<script></script>
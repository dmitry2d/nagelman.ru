      <footer>
          <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <div class="menu-container">
                          <?php wp_nav_menu(array(
                              'theme_location' => 'footer_menu',
                              'container' => '',
                              'menu_class' => 'footer-menu'
                          )); ?>
                    </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-xs-7 copyright">
                      <p>©<?php echo date('Y');?>. <?php bloginfo('name') ?></p>
                  </div>
                  <div class="col-xs-5 text-right">
              <ul class="list-inline social-buttons">
                <li>
                  <a class="social__link" onclick="ym('47499343', 'reachGoal', 'click-on-vk-top');" target="_blank" rel="nofollow" href="<?php echo get_theme_mod('link_vk'); ?>">
                    <svg class="social__icon" width="36" height="36" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-vk"></use>
                    </svg>
                  </a>
                </li>
                <?php /* ?><li>
                  <a class="social__link" onclick="ym('47499343', 'reachGoal', 'click-on-instagram-top');" target="_blank" rel="nofollow" href="<?php echo get_theme_mod('link_inst'); ?>">
                    <svg class="social__icon" width="36" height="36" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-instagram"></use>
                    </svg>
                  </a>
                </li>
                <li>
                  <a class="social__link" onclick="ym('47499343', 'reachGoal', 'click-on-facebook-top');" target="_blank" rel="nofollow" href="<?php echo get_theme_mod('link_fb'); ?>">
                    <svg class="social__icon" width="36" height="36" aria-hidden="true">
                      <use xlink:href="<?php echo get_stylesheet_directory_uri() ?>/img/sprite.svg#icon-facebook"></use>
                    </svg>
                  </a>
                </li><?php */ ?>
              </ul>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-12 text-center">
                  <?php if(!empty(get_theme_mod('copyright'))) : ?>
                          <p><?php echo get_theme_mod('copyright'); ?></p>
                      <?php endif; ?>
                  </div>
              </div>
          </div>

      </footer>
      <?php wp_footer();?>
      <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/main.js"></script>
      <div class="btntoTop"></div>
      <!-- Модальное окно -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body row text-center">

            </div>
          </div>
        </div>
      </div><!-- Модальное окно -->
       <!-- Модальное окно2 -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <div class="modal-body row text-center">
                <?php echo do_shortcode( '[contact-form-7 id="382" title="Напишите мне"]')?>
            </div>
          </div>
        </div>
      </div><!-- Модальное окно2 -->


    <script>
 $(document).ready(function(){
	$(".form-hidden").click(function(){
		$(".form-visible").toggleClass("pokaz"); return false;
	});
});
</script>


      <script type="text/javascript">
        $(window).load(function() {
          $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: true,
            animationSpeed: 2000,
            minItems: 2,
            maxItems: 16,
            slideshow: true, //Boolean: Включение автослайдшоу
          slideshowSpeed: 4000,
          prevText: '',
          nextText: ''
          });
        });
        $(function(){
            $( "#accordion" ).accordion();
          });
      </script>


      <script type="text/javascript">


      </script>


  </body>
</html>

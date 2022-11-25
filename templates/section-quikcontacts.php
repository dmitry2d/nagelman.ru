<?php $email = esc_attr(get_theme_mod('email_quick'));
    $skype_quik = esc_attr(get_theme_mod('skype_quik'));
    $phone = esc_attr(get_theme_mod('main_phone'));
    ?>
    <?php if(!empty(get_theme_mod('header_quikcontact_section',''))) : ?>
        <h3 style="font-size: 36px; color: #765432;" class="hnc">
            <span><?php echo esc_attr(get_theme_mod('header_quikcontact_section','Последние записи'))?></span>
        </h3>
    <?php endif; ?>
    <div class="col-md-4 fg-email">
        <a onclick="yaCounter47499343.reachGoal('click-on-mail-fast');" href="mailto:<?php echo $email; ?>">
            <div class="email-address">
                <i class="fa fa-envelope"></i>
                 <p><?php echo $email; ?></p>
            </div>
        </a>
    </div>

    <div class="col-md-4 fg-soc">
        <a onclick="yaCounter47499343.reachGoal('click-on-skype-fast');" href="skype:<?php echo $skype_quik; ?>?call">
            <div class="soc-address">
                <i class="fa fa-skype"></i> 
                <p><?php echo $skype_quik; ?></p>
            </div>
        </a>
    </div>

    <div class="col-md-4 fg-phone">
        <a onclick="yaCounter47499343.reachGoal('click-on-phone-fast');" href="callto:<?php echo $phone; ?>">
            <div class="phone-number">
                <i class="fa fa-phone fa-2x"></i> 
                <p><?php echo $phone; ?></p>
            </div>
        </a>
    </div>
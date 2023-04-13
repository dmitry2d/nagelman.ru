

<?php
/*
* Quick Contacts Section
*/
?>


<section id="section__quick-contacts">

	<div class="section__quick-contacts__container">

		<?php if (esc_attr(get_theme_mod('disp_quikcontact_section','yes')) == 'yes') :
            $email = esc_attr(get_theme_mod('email_quick'));
            $skype_quik = esc_attr(get_theme_mod('skype_quik'));
            $phone = esc_attr(get_theme_mod('main_phone'));
        ?>

            <div>
                <img src="<?= get_template_directory_uri(); ?>/new/images/email.svg">
                <a onclick="yaCounter47499343.reachGoal('click-on-mail-fast');" href="mailto:<?php echo $email; ?>">
                    <?php echo $email; ?>
                </a>
            </div>
            <div>
                <img src="<?= get_template_directory_uri(); ?>/new/images/skype.svg">
                <a onclick="yaCounter47499343.reachGoal('click-on-skype-fast');" href="skype:<?php echo $skype_quik; ?>?call">
                    <?php echo $skype_quik; ?>
                </a>
            </div>
            <div>
                <img src="<?= get_template_directory_uri(); ?>/new/images/phone.svg">
                <a onclick="yaCounter47499343.reachGoal('click-on-phone-fast');" href="callto:<?php echo $phone; ?>">
                    <?php echo $phone; ?>
                </a>
            </div>
            
		<?php endif; ?>

	</div>

</section>

<style>

    .section__quick-contacts__container {
        display: flex;
        margin: -20px;
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 10px 20px 0;
        clear: both;
    }
    .section__quick-contacts__container > * {
        flex-basis: 30%;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 70px 0;
        border: 1px solid black;
        border-color: rgba(var(--color-heading),0.21);
        border-radius: 20px;
        margin: 20px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: rgba(var(--color-highlight),1);
    }
    .section__quick-contacts__container * {
        color: rgba(var(--color-highlight),1);
        text-decoration: none;
    }
    @media screen and (max-width: 800px) {
        .section__quick-contacts__container {
            flex-direction: column;
        }
        .section__quick-contacts__container > div {
            margin: 0;
            padding: 40px 0;
        }
        .section__quick-contacts__container > div + div {
        	margin-top: 20px;
        }
    }

</style>
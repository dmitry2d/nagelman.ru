



<?php
/*
* Template Name: Шаблон главной страницы
*/

?>
    
<?php 
    get_template_part ('new/section', 'header');
?>

<?php 
if ($_POST['DEV_MODE']) {

    get_template_part ('new/section', 'welcome__part1');

    get_template_part ('new/section', 'youtube');

    get_template_part ('new/section', 'welcome__part2');
 
} else {
    get_template_part ('new/section', 'welcome');
}
?>
<?php 
    get_template_part ('new/section', 'feedback');
?>

<?php 
    get_template_part ('new/section', 'recent');
?>

<?php 
    get_template_part ('new/section', 'quick-contacts');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>



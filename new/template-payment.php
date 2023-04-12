<<<<<<< HEAD
<?php
/*
* Template Name: Оплата
*/
?>
<?php
    // API Keys
    $SberAPILogin = get_field('SberAPILogin', 1010);
    $SberAPIPassword = get_field('SberAPIPassword', 1010);
    
    $orderId = $_GET['orderId'];

    /* If orderId id specified 
    * Show order info from bank
    */
    if ($orderId) {
        $urlString = "https://securepayments.sberbank.ru/payment/rest/getOrderStatusExtended.do";
        $urlString .= "?userName=".$SberAPILogin;
        $urlString .= "&password=".$SberAPIPassword;
        $urlString .= "&orderId=".$orderId;

        $content = file_get_contents($urlString);
        $data = json_decode($content);
        $serviceId = $_GET['serviceID'];
        if ($serviceId) {
            $serviceTitle = get_the_title ($serviceId);
            $servicePrice = get_field ('service__price', $serviceId);
        }
    }
    
    // var_dump($data);
    // $data -> orderStatus
    // 0 - заказ зарегистрирован, но не оплачен;
    // 1 - предавторизованная сумма удержана (для двухстадийных платежей);
    // 2 - проведена полная авторизация суммы заказа;
    // 3 - авторизация отменена;
    // 4 - по транзакции была проведена операция возврата;
    // 5 - инициирована авторизация через сервер контроля доступа банка-эмитента;
    // 6 - авторизация отклонена.

    /* 
    * If "serviceID", "customerName", "customerEmail" parameters are specified
    * Need to initiate payment process
    */

    // Get details from user filled form
    $serviceID = $_POST['serviceID'];
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];

    // If form is ok
    if ($serviceID && $customerName && $customerEmail) {
        // Get price from service post
        $servicePrice = get_field ('service__price', $serviceID);
        $uid = uniqid();
        // Register new order
        $urlString = "https://securepayments.sberbank.ru/payment/rest/register.do";
        $urlString .= "?userName=".$SberAPILogin;
        $urlString .= "&password=".$SberAPIPassword;
        $urlString .= "&orderNumber=".$uid;
        $urlString .= "&amount=". (100 * $servicePrice);
        $urlString .= "&description=".urlencode($customerName);
        $urlString .= "&email=".$customerEmail;
        $urlString .= "&returnUrl=http://elenanagelman.ru/payment?serviceID=".$serviceID;

        $content = file_get_contents($urlString);

        $data = json_decode($content);
                
        // Relocate to URL from API response to continue payout
        if ($data -> formUrl) {
            wp_redirect($data -> formUrl);
            exit;
            // header("Location: " . $data -> formUrl);
            // exit ();
        } else {
            $error = "Ошибка системы оплаты";
        }
    }
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
    
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>

<div class="template__payment">

    <div class="template__payment__title"><?= the_title()?></div>

    <div class="template__payment__container">

        <div class="template__payment__data">
            <?php
                if ($error) {
                    echo $error . '<br>';
                }
                if ($data && $data -> errorMessage) {
                    echo $data -> errorMessage . '<br>';
                }
                if ($serviceTitle) {
                    echo $serviceTitle . ', ';
                    if ($servicePrice) {
                        echo $servicePrice . '₽<br>';
                    }
                }
            ?>
        </div>
        <div class="template__payment__sidebar">
            <?php
                get_template_part('new/section', 'sidebar');
            ?>
        </div>
    </div>

</div>

<?php 
    get_template_part ('new/section', 'side-bar-widget');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>

<style>
    .template__payment__title {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        color: rgba(var(--color-basetext),1);
        font-size: 32px;
    }
    .template__payment__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        display: flex;
    }
    .template__payment__data {
        flex-grow: 1;
    }
    .template__payment__sidebar {
        min-width: 350px;
        padding-left: 50px;
    }
    
    @media screen and (max-width: 800px) {
        .template__payment__container {
            flex-wrap: wrap;
        }
        .template__payment__container > * {
            padding-left: 0;
            min-width: 100%;
            
        }
    }
=======
<?php
/*
* Template Name: Оплата
*/
?>
<?php
    // API Keys
    $SberAPILogin = get_field('SberAPILogin', 1010);
    $SberAPIPassword = get_field('SberAPIPassword', 1010);
    
    $orderId = $_GET['orderId'];

    /* If orderId id specified 
    * Show order info from bank
    */
    if ($orderId) {
        $urlString = "https://securepayments.sberbank.ru/payment/rest/getOrderStatusExtended.do";
        $urlString .= "?userName=".$SberAPILogin;
        $urlString .= "&password=".$SberAPIPassword;
        $urlString .= "&orderId=".$orderId;

        $content = file_get_contents($urlString);
        $data = json_decode($content);
        $serviceId = $_GET['serviceID'];
        if ($serviceId) {
            $serviceTitle = get_the_title ($serviceId);
            $servicePrice = get_field ('service__price', $serviceId);
        }
    }
    
    // var_dump($data);
    // $data -> orderStatus
    // 0 - заказ зарегистрирован, но не оплачен;
    // 1 - предавторизованная сумма удержана (для двухстадийных платежей);
    // 2 - проведена полная авторизация суммы заказа;
    // 3 - авторизация отменена;
    // 4 - по транзакции была проведена операция возврата;
    // 5 - инициирована авторизация через сервер контроля доступа банка-эмитента;
    // 6 - авторизация отклонена.

    /* 
    * If "serviceID", "customerName", "customerEmail" parameters are specified
    * Need to initiate payment process
    */

    // Get details from user filled form
    $serviceID = $_POST['serviceID'];
    $customerName = $_POST['customerName'];
    $customerEmail = $_POST['customerEmail'];

    // If form is ok
    if ($serviceID && $customerName && $customerEmail) {
        // Get price from service post
        $servicePrice = get_field ('service__price', $serviceID);
        $uid = uniqid();
        // Register new order
        $urlString = "https://securepayments.sberbank.ru/payment/rest/register.do";
        $urlString .= "?userName=".$SberAPILogin;
        $urlString .= "&password=".$SberAPIPassword;
        $urlString .= "&orderNumber=".$uid;
        $urlString .= "&amount=". (100 * $servicePrice);
        $urlString .= "&description=".urlencode($customerName);
        $urlString .= "&email=".$customerEmail;
        $urlString .= "&returnUrl=http://elenanagelman.ru/payment?serviceID=".$serviceID;

        $content = file_get_contents($urlString);

        $data = json_decode($content);
                
        // Relocate to URL from API response to continue payout
        if ($data -> formUrl) {
            wp_redirect($data -> formUrl);
            exit;
            // header("Location: " . $data -> formUrl);
            // exit ();
        } else {
            $error = "Ошибка системы оплаты";
        }
    }
?>
    
<?php 
    get_template_part ('new/section', 'header');
?>
    
<?php 
    get_template_part ('new/section', 'breadcrumb');
?>

<div class="template__payment">

    <div class="template__payment__title"><?= the_title()?></div>

    <div class="template__payment__container">

        <div class="template__payment__data">
            <?php
                if ($error) {
                    echo $error . '<br>';
                }
                if ($data && $data -> errorMessage) {
                    echo $data -> errorMessage . '<br>';
                }
                if ($serviceTitle) {
                    echo $serviceTitle . ', ';
                    if ($servicePrice) {
                        echo $servicePrice . '₽<br>';
                    }
                }
            ?>
        </div>
        <div class="template__payment__sidebar">
            <?php
                get_template_part('new/section', 'sidebar');
            ?>
        </div>
    </div>

</div>

<?php 
    get_template_part ('new/section', 'side-bar-widget');
?>

<?php 
    get_template_part ('new/section', 'footer');
?>

<style>
    .template__payment__title {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        color: rgba(var(--color-basetext),1);
        font-size: 32px;
    }
    .template__payment__container {
        width: 100%;
        max-width: var(--desktop-max-width);
        margin: 0 auto;
        padding: 40px 20px 0;
        display: flex;
    }
    .template__payment__data {
        flex-grow: 1;
    }
    .template__payment__sidebar {
        min-width: 350px;
        padding-left: 50px;
    }
    
    @media screen and (max-width: 800px) {
        .template__payment__container {
            flex-wrap: wrap;
        }
        .template__payment__container > * {
            padding-left: 0;
            min-width: 100%;
            
        }
    }
>>>>>>> fba873ff578ca6ec8a008405b207f60dd08f36de
</style>
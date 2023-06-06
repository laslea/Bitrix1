<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>

        <div class="main-content">
            <div class="container clearfix">
                <div class="main-about">
                    <h2 class="main-title">О компании</h2>
                    <p class="main-desc">
Сайт 
                    </p>
                    <a href="about.html" class="main-detail d-flex align-items-center">
                        <span>Узнать больше</span>
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/arrow.svg" alt="arrow">
                    </a>
                </div>
                <div class="main-services">
                    <h2 class="main-title">Смысл сайта</h2>
                    <p class="main-desc">Сайт .</p>
                    <a href="services.html" class="main-detail d-flex align-items-center">
                        <span>Узнать больше</span>
                        <img src="<?=SITE_TEMPLATE_PATH;?>/img/arrow.svg" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
    </main>
    <section class="advantages" id="advantages">
        <div class="container">
            <h2 class="advantages__title">МС-ТЕХ - это</h2>
            <ul class="advantages__list d-flex justify-content-between">
                <li class="advantages__item advantages__item_photo1">
                    <span>Преимущество 1</span>
                </li>
                <li class="advantages__item advantages__item_photo2">
                    <span>Преимущество 2: его короткое описание</span>
                </li>
                <li class="advantages__item advantages__item_photo3">
                    <span>Преимущество 3: его короткое описание</span>
                </li>
                <li class="advantages__item advantages__item_photo4">
                    <span>Преимущество 4:его короткое описание</span>
                </li>
                <li class="advantages__item advantages__item_photo5">
                    <span>Преимущество 5:его короткое описание</span>
                </li>
                <li class="advantages__item advantages__item_photo6">
                    <span>Преимущество 6:его короткое описание</span>
                </li>
            </ul>
        </div>
    </section>
    <section class="clients">
        <div class="container">
            <h2 class="clients__title">логотипы клиентов</h2>
            <div class="owl-carousel owl-theme clients__list">
                <div class="clients__item"><img src="<?=SITE_TEMPLATE_PATH;?>/img/rostelecom.png" alt="rostelecom"></div>
                <div class="clients__item"><img src="<?=SITE_TEMPLATE_PATH;?>/img/rosseti.png" alt="rosseti"></div>
                <div class="clients__item"><img src="<?=SITE_TEMPLATE_PATH;?>/img/rost.jpg" alt="rost"></div>
                <div class="clients__item"><img src="<?=SITE_TEMPLATE_PATH;?>/img/huawei.jpg" alt="huawei"></div>
                <div class="clients__item"><img src="<?=SITE_TEMPLATE_PATH;?>/img/transpi.png" alt="transpi"></div>
                <div class="clients__item clients__item_tsm"><img src="<?=SITE_TEMPLATE_PATH;?>/img/tsm.png" alt="tsm"></div>
                <div class="clients__item"><img src="<?=SITE_TEMPLATE_PATH;?>/img/mostotrest.jpg" alt="mostotrest"></div>
            </div>
        </div>
    </section>
    

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?
/** @global CMain $APPLICATION */
/** @global CUser $USER */

use \Bitrix\Main\Page\AssetLocation;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

$asset = \Bitrix\Main\Page\Asset::getInstance();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?
    $asset->addString(
        '<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />',
        false,
        AssetLocation::BEFORE_CSS
    );
    $asset->addString(
        '<meta http-equiv="X-UA-Compatible" content="IE=edge" />',
        false,
        AssetLocation::BEFORE_CSS
    );

    $APPLICATION->ShowHead(false);
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/flickity.css', true);
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap.min.css', true);
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/style.css', true);
    ?>

    <title><? $APPLICATION->ShowTitle(); ?></title>
</head>
<body>
    <? $APPLICATION->ShowPanel(); ?>

    <header>
        <div class="header-inner">
            <div class="header-logo">
                <a href="/">
                    <img src="/bitrix/templates/gtu/img/logo-w.svg" alt="Газпром трансгаз Уфа">
                </a>
            </div>
            <div class="header-date">
                <strong>12:00</strong>
                Вт, 01.01.2022
            </div>
            <div class="header-weather">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-drizzle-fill" viewBox="0 0 16 16">
                        <path d="M4.158 12.025a.5.5 0 0 1 .316.633l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.317zm6 0a.5.5 0 0 1 .316.633l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.317zm-3.5 1.5a.5.5 0 0 1 .316.633l-.5 1.5a.5.5 0 0 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.317zm6 0a.5.5 0 0 1 .316.633l-.5 1.5a.5.5 0 1 1-.948-.316l.5-1.5a.5.5 0 0 1 .632-.317zm.747-8.498a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 11H13a3 3 0 0 0 .405-5.973z"/>
                    </svg>
                    +15 ° C
                </a>
            </div>
            <div class="header-account">
                <a href="#">
                    <? if($USER->GetFirstName() && $USER->GetLastName()) {
                        echo $USER->GetFirstName() . ' ' . $USER->GetLastName();
                    } else {
                        echo $USER->GetLogin();
                    } ?>
                </a>
            </div>
        </div>
    </header>

    <main>
        <div class="sidebar">
            <div class="sidebar-block">
                <div class="sidebar-header">Об обществе</div>

                <ul>
                    <li><a href="/filialy">Филиалы</a></li>
                    <li><a href="/obs">Общие сведения</a></li>
                    <li><a href="/history">История</a></li>
                    <li><a href="/news">Новости</a></li>
                </ul>
            </div>
            
            <div class="sidebar-block sidebar-block-special">
                <a href="/rukdoc">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    Руководящие документы
                </a>
            </div>

            <div class="sidebar-block sidebar-block-special">
                <a href="/telsp">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Телефонный справочник
                </a>
            </div>
            
            <div class="sidebar-block">
                <ul>
                    <li>
                        <a onclick="dropdownMenu('proizvodstvo-menu')" class="li-plus">Производство</a>
                        <ul id="proizvodstvo-menu" style="display: none;">
                            <li><a href="/maggaz">Магистральные газопроводы</a></li>
                            <li><a href="/komp">Компрессорные станции</a></li>
                            <li><a href="/ratd">Рационализаторская деятельность</a></li>
                            <li><a href="/prbez">Производственная безопасность</a></li>
                            <li><a href="#">Безопасность дорожного движения</a></li>
                            <li><a href="#">Экология</a></li>
                            <li><a href="#">Система управления рисками и внутреннего контроля</a></li>
                            <li><a href="#">Гражданская защита</a></li>
                            <li><a href="#">Технологические схемы</a></li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="dropdownMenu('socpolitika-menu')" class="li-plus">Социальная политика</a>
                        <ul id="socpolitika-menu" style="display: none;">
                            <li><a href="#">Кадровая политика</a></li>
                            <li><a href="#">Жилищная политика</a></li>
                            <li><a href="#">Оздоровление работников</a></li>
                            <li><a href="#">Работа с молодежью</a></li>
                            <li><a href="#">Организация отдыха</a></li>
                            <li><a href="#">Спортивная жизнь Общества</a></li>
                            <li><a href="#">Культурная жизнь Общества</a></li>
                            <li><a href="#">Психологическое сопровождение кадровой работы</a></li>
                            <li><a href="#">Газфонд</a></li>
                            <li><a href="#">Учебно-производственный центр</a></li>
                            <li><a href="#">Вакансии предприятия</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Информационная безопасность</a></li>
                    <li><a href="#">Интранет-программы</a></li>
                    <li><a href="#">Финансовый калейдоскоп</a></li>
                    <li><a href="#">Фотогалерея</a></li>
                    <li><a href="#">Погода</a></li>
                    <li><a href="#">Опросы</a></li>
                    <li><a href="#">Коллективный договор</a></li>
                    <li><a href="#">Корпоративная этика</a></li>
                    <li><a href="#">Вакансии</a></li>
                    <!-- <li><a href="#">Газета</a></li> -->
                </ul>
            </div>

            <div class="sidebar-block sidebar-block-special">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-pulse" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm-2 0h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Zm6.979 3.856a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.895-.133L4.232 10H3.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 .416-.223l1.41-2.115 1.195 3.982a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h1.5a.5.5 0 0 0 0-1h-1.128L9.979 5.356Z"/>
                    </svg>
                    Запись в лечебно-диагностический центр
                </a>
            </div>

            <div class="sidebar-block sidebar-block-gazeta">
                <a href="/gazeta">
                    <img src="/img/gazeta.jpg" alt="">
                    «ГАЗета» № 9 (209) 2022 г
                </a>
            </div>

            <div class="sidebar-block">
                <ul>
                    <li><a href="#">Газпром в Башкортостане</a></li>
                    <li><a href="#">СОГАЗ</a></li>
                    <li><a href="#">Газпромбанк</a></li>
                </ul>
            </div>
        </div>

        <div class="content">
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
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/style.css', true);
    ?>

    <title><? $APPLICATION->ShowTitle(); ?></title>
</head>
<body>
    <? $APPLICATION->ShowPanel(); ?>

    <header>
        header
    </header>
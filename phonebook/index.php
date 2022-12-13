<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<h5 class="title-head mt-0">Телефонный справочник</h5>
    <div class="telsp">
        <ul class="telsp-nav">
            <li class="active">
                <a href="#">Работники</a>
            </li>
            <li>
                <a href="#">Подразделения</a>
            </li>
            <li>
                <a href="#">Телефон</a>
            </li>
            <li>
                <a href="#">Совет директоров</a>
            </li>
        </ul>
        <div class="search-form">
            <input type="text" placeholder="Иван Петров">
            <button class="btn-standard">Найти</button>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
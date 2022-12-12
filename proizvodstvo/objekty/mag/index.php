<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<h5 class="title-head mt-0">Магистральные газопроводы</h5>
    <div class="history">
        <div class="page-sliders">
            <div class="page-sliders-main">
                <div class="carousel carousel-main" data-flickity='{ "contain": true, "pageDots": false }'>
                    <div class="carousel-cell">
                        <img src="/bitrix/templates/gtu/img/maggaz/1.jpg" alt="">
                    </div>
                    <div class="carousel-cell">
                        <img src="/bitrix/templates/gtu/img/maggaz/2.jpg" alt="">
                    </div>
                    <div class="carousel-cell">
                        <img src="/bitrix/templates/gtu/img/maggaz/3.jpg" alt="">
                    </div>
                    <div class="carousel-cell">
                        <img src="/bitrix/templates/gtu/img/maggaz/4.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="page-sliders-nav">
                <div class="carousel carousel-nav" data-flickity='{ "asNavFor": ".carousel-main", "percentPosition": false, "groupCells": "100%", "pageDots": false }'>
                    <div class="carousel-cell">
                        <div class="carousel-cell-inner" style="background-image: url(/bitrix/templates/gtu/img/maggaz/1.jpg)"></div>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-cell-inner" style="background-image: url(/bitrix/templates/gtu/img/maggaz/2.jpg)"></div>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-cell-inner" style="background-image: url(/bitrix/templates/gtu/img/maggaz/3.jpg)"></div>
                    </div>
                    <div class="carousel-cell">
                        <div class="carousel-cell-inner" style="background-image: url(/bitrix/templates/gtu/img/maggaz/4.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="oglav">
            <li>
                <a href="#">Общие сведения</a>
            </li>
            <li>
                <a href="#">Газопроводы Новопсковского коридора ЕСГ</a>
            </li>
            <li>
                <a href="#">Региональные газопроводы</a>
            </li>
            <li>
                <a href="#">Повышение надежности</a>
            </li>
        </ul>

        <h2 class="title-head title-head-blue mt-0">Общие сведения</h2>
        <p>ООО «Газпром трансгаз Уфа» эксплуатирует 4725 км магистральных газопроводов, в том числе 1877 км газопроводов-отводов. На объектах линейной части магистральных газопроводов эксплуатируется более 4 тысяч единиц трубопроводной арматуры, 36 подводных переходов. Средний годовой объем перекачиваемого газа составляет 100 млрд м3.</p>

        <h2 class="title-head title-head-blue mt-0">Газопроводы Новопсковского коридора ЕСГ</h2>
        
        <ul class="ul-list">
            <li>Челябинск-Петровск, DN 1400, протяженность 436,77 км;</li>
            <li>Уренгой-Петровск, DN 1400, протяженность 311 км;</li>
            <li>Уренгой-Новопсков, DN 1400, протяженность 311 км;</li>
            <li>СРТО-Урал, DN 1400, протяженность 91,8 км;</li>
            <li>Ямбург-Поволжье, DN 1400, протяженность 89,6 км.</li>
        </ul>

        <h2 class="title-head title-head-blue mt-0">Региональные газопроводы</h2>
        <ul class="ul-list">
            <li>Поляна-КСПХГ, DN 1200, протяженность 310,3 км;</li>
            <li>Магнитогорск-Стерлитамак, DN 800, протяженность 216 км;</li>
            <li>Поляна-Уфа, DN 800, протяженность 22,4 км;</li>
            <li>Ишимбай-Уфа, DN 700, протяженность 190,5 км;</li>
            <li>Кумертау-Ишимбай, DN 700, протяженность 77,85 км;</li>
            <li>Канчуринское СПХГ-Совхозное СПХГ, DN 700, протяженность 57,9 км;</li>
            <li>Магнитогорск-Ишимбай, DN 500, протяженность 216 км;</li>
            <li>Шкапово-Ишимбай, DN 500, протяженность 159,181 км;</li>
            <li>Туймазы-Уфа, DN 300, протяженность 146,59 км;</li>
            <li>Шкапово-Тубанкуль, DN 300, протяженность 83,8 км.</li>
        </ul>

        <h2 class="title-head title-head-blue mt-0">
            Повышение надежности
        </h2>
        <p>ООО «Газпром трансгаз Уфа» последовательно проводит системную работу, направленную на повышение надежности, обеспечение безопасности эксплуатируемых объектов. Начиная с 2004 года Обществом отремонтировано более 1450 км газопроводов, в том числе 530 км транзитных газопроводов.</p>
        <p>В 2020 году отремонтировано 38,06 км магистральных газопроводов, в том числе методом сплошной замены – 34,9 км. Ремонтные работы выполняются в соответствии с Программой капитального ремонта линейной части магистральных газопроводов на 2021–2023 годы, разработанной с учетом методологии Системы управления техническим состоянием и целостностью ГТС и на основе показателей надежности участков и техногенных рисков их эксплуатации.</p>
        <p>Значительный вклад в повышение надежности вносит Информационно-управляющая система транспортировкой газа и газового конденсата (ИУС Т), позволяющая производить многофакторный анализ технического состояния объектов линейной части на основании внесенных диагностических и геоинформационных данных.</p>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
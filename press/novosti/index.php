<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?>

<div class="row">
    <div class="col-12 col-lg-6">
        <h5 class="title-head mt-0">Новости</h5>
    </div>
    <div class="col-12 col-lg-6">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Поиск по новостям">
            <div class="input-group-append">
                <button class="btn btn-outline-primary" type="button">Найти</button>
            </div>
        </div>
    </div>
</div>
    <div class="news">
        <div class="news-list-item">
            <a href="#">
                <div class="news-list-item-image" style="background-image: url(/bitrix/templates/gtu/img/news/1.jpg)"></div>
                <div class="news-list-item-desc">
                    <span>24.08.2022 07:22</span>
                    <h2 class="title-head title-head-blue">ООО «Газпром трансгаз УФА» – в числе лучших обучающих организаций по охране труда</h2>
                    <p>В Уфе наградили победителей республиканского конкурса на звание «Лучшая ...</p>
                </div>
            </a>
        </div>

        <div class="news-list-item">
            <a href="#">
                <div class="news-list-item-image" style="background-image: url(/bitrix/templates/gtu/img/news/2.jpg)"></div>
                <div class="news-list-item-desc">
                    <span>24.08.2022 06:58</span>
                    <h2 class="title-head title-head-blue">В Полянском лпумг проводятся масштабные ремонтные работы НА КС-17</h2>
                    <p>На площадке КС-17 кипит жизнь. С апреля здесь осуществляется заключительный этап ...</p>
                </div>
            </a>
        </div>

        <div class="news-list-item">
            <a href="#">
                <div class="news-list-item-image" style="background-image: url(/bitrix/templates/gtu/img/news/3.jpg)"></div>
                <div class="news-list-item-desc">
                    <span>24.08.2022 06:00</span>
                    <h2 class="title-head title-head-blue">Осторожно, «мышиная лихорадка»!</h2>
                    <p>Геморрагическая лихорадка с почечным синдромом (в народе «мышиная лихорадка» ...</p>
                </div>
            </a>
        </div>

        <div class="news-list-item">
            <a href="#">
                <div class="news-list-item-image" style="background-image: url(/bitrix/templates/gtu/img/news/1.jpg)"></div>
                <div class="news-list-item-desc">
                    <span>23.08.2022 06:40</span>
                    <h2 class="title-head title-head-blue">Финансовый калейдоскоп: возврат 20 % от трат на путешествия по России. Как это работает?</h2>
                    <p>25 августа начнется очередная часть программы кешбэка за путешествия по России ...</p>
                </div>
            </a>
        </div>

        <div class="news-list-item">
            <a href="#">
                <div class="news-list-item-image" style="background-image: url(/bitrix/templates/gtu/img/news/4.jpg)"></div> 
                <div class="news-list-item-desc">
                    <span>22.08.2022 13:20</span>
                    <h2 class="title-head title-head-blue">Работники общества – лидеры физкультурно-спортивного фестиваля</h2>
                    <p>20 августа на площадке крупнейшего спортивного объекта республики – Центра ...</p>
                </div>
            </a>
        </div>

        <div class="news-list-item">
            <a href="#">
                <div class="news-list-item-image" style="background-image: url(/bitrix/templates/gtu/img/news/5.jpg)"></div>
                <div class="news-list-item-desc">
                    <span>22.08.2022 13:16</span>
                    <h2 class="title-head title-head-blue">Отдыхающие АХРК Нугуш наслаждаются концертами представителей башкирской эстрады</h2>
                    <p>В минувшие выходные еще один концерт для работников Общества и их семей прошел на ...</p>
                </div>
            </a>
        </div>

        <div class="pager">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                </svg>
            </a>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>


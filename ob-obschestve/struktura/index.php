<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Структура предприятия");
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Главная страница</a></li>
    <li class="breadcrumb-item active">Об обществе</li>
    <li class="breadcrumb-item active">Структура предприятия</li>
  </ol>
</nav>

<h5 class="title-head">Структура предприятия</h5>
    <div class="filialy">
        <div class="filialy-map">
            <img src="/bitrix/templates/gtu/img/filialy.png" alt="">
    
            <div id="1" onmouseover="selectPoint(1)" onclick="toggleUfa()" class="filial-map-item filial-map-item-big" style="top: 230px; left: 215px">
                <!-- <span>Уфа</span> -->
            </div>
    
            <div id="2" onmouseover="selectPoint(2)" class="filial-map-item" style="top: 155px; left: 135px">
                <!-- <span>Дюртюлинское ЛПУМГ</span> -->
            </div>
    
            <div id="3" onmouseover="selectPoint(3)" class="filial-map-item" style="top: 165px; left: 270px">
                <!-- <span>Полянское ЛПУМГ</span> -->
            </div>

            <div id="4" onmouseover="selectPoint(4)" class="filial-map-item" style="top: 150px; left: 360px">
                <!-- <span>Аркауловское ЛПУМГ</span> -->
            </div>

            <div id="5" onmouseover="selectPoint(5)" class="filial-map-item" style="top: 145px; left: 470px">
                <!-- <span>Ургалинское ЛПУМГ</span> -->
            </div>

            <div id="6" onmouseover="selectPoint(6)" class="filial-map-item" style="top: 240px; left: 65px">
                <!-- <span>Шаранское ЛПУМГ</span> -->
            </div>

            <div id="7" onmouseover="selectPoint(7)" class="filial-map-item" style="top: 285px; left: 210px">
                <!-- <span>Кармаскалинское ЛПУМГ</span> -->
            </div>

            <div id="8" onmouseover="selectPoint(8)" class="filial-map-item" style="top: 340px; left: 70px">
                <!-- <span>Приютовское ЛПУМГ</span> -->
            </div>

            <div id="9" onmouseover="selectPoint(9)" class="filial-map-item" style="top: 400px; left: 210px">
                <!-- <span>Стерлитамакское ЛПУМГ</span> -->
            </div>
            <div id="10" onmouseover="selectPoint(10)" class="filial-map-item" style="top: 520px; left: 420px">
                <!-- <span>Сибайское ЛПУМГ</span> -->
            </div>
        </div>
        <div class="filialy-list">
            <p id="list_1"><a onclick="toggleUfa()">Уфа</a></p>
            <ul id="list_1_ul" style="display:none;">
                <li><a href="/ob-obschestve/struktura/ufa1">Управление аварийно-восстановительных работ</a></li>
                <li><a href="/ob-obschestve/struktura/ufa2">Управление технологического транспорта и специальной техники</a></li>
                <li><a href="/ob-obschestve/struktura/ufa3">Медико-санитарная часть</a></li>
                <li><a href="/ob-obschestve/struktura/ufa4">УМТСиК</a></li>
                <li><a href="/ob-obschestve/struktura/ufa5">Управление связи</a></li>
                <li><a href="/ob-obschestve/struktura/ufa6">Инженерно-технический центр</a></li>
                <li><a href="/ob-obschestve/struktura/ufa7">Служба корпоративной защиты</a></li>
            </ul>

            <p id="list_2"><a href="/ob-obschestve/struktura/arkaul">Аркауловское ЛПУМГ</a></p>
            <p id="list_3"><a href="/ob-obschestve/struktura/durtul">Дюртюлинское ЛПУМГ</a></p>
            <p id="list_4"><a href="/ob-obschestve/struktura/polan">Полянское ЛПУМГ</a></p>
            <p id="list_5"><a href="/ob-obschestve/struktura/urgal">Ургалинское ЛПУМГ</a></p>
            <p id="list_6"><a href="/ob-obschestve/struktura/sharan">Шаранское ЛПУМГ</a></p>
            <p id="list_7"><a href="/ob-obschestve/struktura/karmas">Кармаскалинское ЛПУМГ</a></p>
            <p id="list_8"><a href="/ob-obschestve/struktura/priut">Приютовское ЛПУМГ</a></p>
            <p id="list_9"><a href="/ob-obschestve/struktura/sterl">Стерлитамакское ЛПУМГ</a></p>
            <p id="list_10"><a href="/ob-obschestve/struktura/sibai">Сибайское ЛПУМГ</a></p>
        </div>
    </div>
	
	<script>
		function selectPoint(pointID) {
			let divs = document.querySelectorAll('.filialy-list p'), i

			for (i = 0; i < divs.length; ++i) {
			  divs[i].classList.remove('selected')
			}
		
		  document.getElementById("list_" + pointID).classList.add('selected')
		  
		  settimeout()
		}
		
		function toggleUfa() {
			let ufaDiv = document.getElementById("list_1_ul")
			
			if(ufaDiv.style.display == 'none') {
				ufaDiv.style.display = 'block'
			} else {
				ufaDiv.style.display = 'none'
			}
		}
	</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
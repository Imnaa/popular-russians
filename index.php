<?php
	error_reporting(E_ALL);
	// Определяем язык -->
	$isLang = isset($_GET["lang"])? $_GET["lang"]: "en"; //Берём значение GET-параметра, либо, если его нет, то устанавливаем русский

	include_once("langs/".$isLang.".php");

	if ($isLang == "en") {
  		$LANG = $en;
 	} else if ($isLang == "ru") {
		$LANG = $ru;
	}

	$GLOBALS['title'] = $LANG['titlePage'];
	$GLOBALS['desc'] = $LANG['descript'];
	$GLOBALS['keywords'] = $LANG['keys'];

	include("header.php");
?>		

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

	<!-- Меню -->
		<ul class="navbar cf">
			<li><a href="#" data-target="#modalAboutSite" data-toggle="modal"><?php echo $LANG['aboutSite'];?></a></li>
			<li><a href="index.php?lang=ru">Русскоязычная версия сайта</a></li>
			<li><a href="index.php?lang=en">English version of the site</a></li>
		</ul>
	
	<div class="modal fade" id="modalAboutSite" tabindex="-1" role="dialog" aria-labelledby="modalLabelAboutSite" style="display: none;" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="modalLabelAboutSite"><?php echo $LANG['modalLabelAboutSite']?></h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">×</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	      			<?php echo $LANG['modalAboutSite']?>
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
	      		</div>
	    	</div>
	  	</div>
	</div>
	<!-- Конец Меню -->

<!-- НАЧАЛО ФРАГМЕНТОВ -->
	<!-- Левое крыло, фрагмент 1 -->
		<!-- верхний ряд -->
			<!-- Ломоносов Михаил Васильевич-->
			<a href="#" data-target="#modalLomonosov" data-toggle="modal">
				<div class="img-lomonosov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalLomonosov" tabindex="-1" role="dialog" aria-labelledby="modalLabelLomonosov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelLomonosov"><?php echo $LANG['modalLabelLomonosov']?></h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Mikhail_Lomonosov_(1757).jpg" alt="" class="modal-portraits-img">
			      			<?php echo $LANG['modalLomonosov']?>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Ломоносов Михаил Васильевич-->

			<!-- Ермак Тимофеевич-->
			<a href="#" data-target="#modalErmak" data-toggle="modal">
				<div class="img-Ermak"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalErmak" tabindex="-1" role="dialog" aria-labelledby="modalLabelErmak" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelErmak">Ермак Тимофеевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/ermak.jpg" alt="" class="modal-portraits-img">
							<p><strong>Ерма́к Тимофе́евич</strong> (1532 — 6 (16) августа 1585, Сибирское царство) — казачий атаман, исторический завоеватель Сибири для Русского государства.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Ермак Тимофеевич-->

			<!-- Баранов, Александр Андреевич-->
			<a href="#" data-target="#modalBaranov" data-toggle="modal">
				<div class="img-Baranov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalBaranov" tabindex="-1" role="dialog" aria-labelledby="modalLabelBaranov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelBaranov">Баранов, Александр Андреевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/baranov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Алекса́ндр Андре́евич Бара́нов</strong> (3 февраля 1746, Каргополь — 16 апреля 1819, около острова Ява) — русский государственный деятель, предприниматель, первый Главный правитель русских поселений в Северной Америке (1790—1818).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Баранов, Александр Андреевич-->

			<!-- Орловский, Борис Иванович-->
			<a href="#" data-target="#modalOrlovskiy" data-toggle="modal">
				<div class="img-Orlovskiy"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalOrlovskiy" tabindex="-1" role="dialog" aria-labelledby="modalLabelOrlovskiy" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelOrlovskiy">Орловский, Борис Иванович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Orlovskiy.jpg" alt="" class="modal-portraits-img">
							<p><strong>Бори́с Ива́нович Орло́вский</strong> (фамилия при рождении — Смирнов; 1791 (в других источниках 1793), село Столбецкое (Большое Столбецкое), Малоархангельский уезд (позднее село входило в состав Мценского уезда), Орловское наместничество (ныне Покровский район Орловской области) — 16 (28) декабря 1837, Санкт-Петербург) — русский скульптор эпохи ампира, ученик и последователь Бертеля Торвальдсена.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Орловский, Борис Иванович-->

			<!-- Кутузов, Михаил Илларионович-->
			<a href="#" data-target="#modalKutuzov" data-toggle="modal">
				<div class="img-Kutuzov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKutuzov" tabindex="-1" role="dialog" aria-labelledby="modalLabelKutuzov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKutuzov">Кутузов, Михаил Илларионович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Kutuzov1.jpg" alt="" class="modal-portraits-img">
							<p>Граф (1811), Светлейший князь (1812) <strong>Михаи́л Илларио́нович Голени́щев-Куту́зов</strong> (5 [16] сентября 1745, Санкт-Петербург — 16 [28] апреля 1813, Бунцлау) — русский полководец, государственный деятель и дипломат, генерал-фельдмаршал из рода Голенищевых-Кутузовых, участник русско-турецких войн, главнокомандующий русской армией во время Отечественной войны 1812 года. Казанский, Вятский и Литовский генерал-губернатор, Санкт-Петербургский и Киевский военный губернатор. Полномочный посол в Турции. Первый полный кавалер ордена Святого Георгия. С 1812 года именовался светле́йшим князем Голенищевым-Кутузовым-Смоле́нским.
							</p>
							<p>Ученик и соратник А. В. Суворова.</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Кутузов, Михаил Илларионович-->

			<!-- Ушаков, Фёдор Фёдорович-->
			<a href="#" data-target="#modalUshakov" data-toggle="modal">
				<div class="img-Ushakov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalUshakov" tabindex="-1" role="dialog" aria-labelledby="modalLabelUshakov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelUshakov">Ушаков, Фёдор Фёдорович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Ushakov_FF.jpg" alt="" class="modal-portraits-img">
							<p><strong>Фёдор Фёдорович Ушако́в</strong> (13 февраля 1745 — 2 октября 1817) — русский флотоводец, командующий Черноморским флотом (1790—1798); командующий русско-турецкой эскадрой в Средиземном море (1798—1800), адмирал (1799).
							</p>
							<p>Не потерял в боях ни одного корабля, ни один его подчинённый не попал в плен. Ушаков одержал победу в 43 морских сражениях и ни одного поражения не потерпел.</p>
							<p>В 2001 году Русской православной церковью причислен к лику святых как праведный воин Феодор Ушаков.</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Ушаков, Фёдор Фёдорович-->
		<!-- Конец верхний ряд -->
		<!-- нижний ряд -->
			<!-- Платов, Матвей Иванович-->
			<a href="#" data-target="#modalPlatonov" data-toggle="modal">
				<div class="img-Platov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalPlatonov" tabindex="-1" role="dialog" aria-labelledby="modalLabelPlatonov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelPlatonov">Платов, Матвей Иванович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Platov.jpg" alt="" class="modal-portraits-img">
							<p>Граф (1812) <strong>Матве́й Ива́нович Пла́тов</strong> (1753—1818) — атаман Донского казачьего войска (с 1801), генерал от кавалерии (1809), который принимал участие во всех войнах Российской империи конца XVIII — начала XIX века. В 1805 году основал Новочеркасск, куда перенёс столицу Донского казачьего войска.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Платов, Матвей Иванович-->

			<!-- Пушкин Александр Сергеевич-->
			<a href="#" data-target="#modalPushkin" data-toggle="modal">
				<div class="img-Pushkin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalPushkin" tabindex="-1" role="dialog" aria-labelledby="modalLabelPushkin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelPushkin">Пушкин, Александр Сергеевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Pushkin_AS.jpg" alt="" class="modal-portraits-img">
							<p><strong>Алекса́ндр Серге́евич Пу́шкин</strong> (26 мая [6 июня] 1799, Москва — 29 января [10 февраля] 1837, Санкт-Петербург) — русский поэт, драматург и прозаик, заложивший основы русского реалистического направления, критик и теоретик литературы, историк, публицист; один из самых авторитетных литературных деятелей первой трети XIX века.
							</p>
							<p>Ещё при жизни Пушкина сложилась его репутация величайшего национального русского поэта. Пушкин рассматривается как основоположник современного русского литературного языка.</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Пушкин Александр Сергеевич -->

			<!-- Ермолов, Алексей Петрович -->
			<a href="#" data-target="#modalErmolov" data-toggle="modal">
				<div class="img-Ermolov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalErmolov" tabindex="-1" role="dialog" aria-labelledby="modalLabelErmolov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelErmolov">Ермолов, Алексей Петрович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Alexei-jermolov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Алексе́й Петро́вич Ермо́лов</strong> (24 мая [4 июня] 1777[2][3], Москва — 11 [23] апреля 1861, Москва) — российский военачальник, государственный деятель и дипломат, участник многих крупных войн, которые Российская империя вела с 1790-х по 1820-е. Генерал от инфантерии (1818), генерал от артиллерии (1837)[4]. Глав­но­управ­ляю­щий гражданской ча­стью и пограничными делами в Гру­зии, Ас­т­ра­хан­ской и Кав­каз­ской гу­бер­ни­ях; командующий Отдельным Грузинским корпусом (1816—1827). Автор мемуаров.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Ермолов, Алексей Петрович -->

			<!-- Лермонтов, Михаил Юрьевич -->
			<a href="#" data-target="#modalLermantov" data-toggle="modal">
				<div class="img-Lermantov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalLermantov" tabindex="-1" role="dialog" aria-labelledby="modalLabelLermantov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelLermantov">Лермонтов, Михаил Юрьевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Mikhail_lermontov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Михаи́л Ю́рьевич Ле́рмонтов</strong> (3 октября 1814, Москва — 15 июля 1841, Пятигорск) — русский поэт, прозаик, драматург, художник. Творчество Лермонтова, в котором сочетаются гражданские, философские и личные мотивы, отвечавшие насущным потребностям духовной жизни русского общества, ознаменовало собой новый расцвет русской литературы и оказало большое влияние на виднейших русских писателей и поэтов XIX и XX веков. Произведения Лермонтова получили большой отклик в живописи, театре, кинематографе. Его стихи стали подлинным кладезем для оперного, симфонического и романсового творчества. Многие из них стали народными песнями.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Лермонтов, Михаил Юрьевич -->

			<!-- Кошка, Пётр Маркович -->
			<a href="#" data-target="#modalKoshka" data-toggle="modal">
				<div class="img-Koshka"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKoshka" tabindex="-1" role="dialog" aria-labelledby="modalLabelKoshka" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKoshka">Кошка, Пётр Маркович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Koshka.jpg" alt="" class="modal-portraits-img">
							<p><strong>Пётр Ма́ркович Ко́шка</strong> (1828—1882) — матрос Черноморского флота, герой Севастопольской обороны 1854—1855 годов, участник Синопского сражения.
							</p>
							<p>Один из самых известных героев Обороны Севастополя. Образ матроса Кошки выведен практически во всех отечественных художественных произведениях, повествующих о Крымской войне.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Кошка, Пётр Маркович -->

			<!-- Муравьёв-Карский, Николай Николаевич -->
			<a href="#" data-target="#modalMuravev" data-toggle="modal">
				<div class="img-Muravev"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalMuravev" tabindex="-1" role="dialog" aria-labelledby="modalLabelMuravev" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelMuravev">Муравьёв-Карский, Николай Николаевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Muravev.jpeg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Никола́евич Муравьёв-Ка́рский</strong> (1794—1866) — русский военачальник, дипломат и путешественник из рода Муравьёвых. Кавказский наместник (1854—1856). За взятие Карса во время Крымской войны получил почётное прозвище «Карсский» (в советских и современных публикациях чаще встречается написание «Карский»). По окончании войны вышел в отставку в чине генерала от инфантерии.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Муравьёв-Карский, Николай Николаевич -->
		<!-- Конец нижний ряд -->
		<!-- сидит -->
			<!-- Давыдов, Денис Васильевич-->
			<a href="#" data-target="#modalDavidov" data-toggle="modal">
				<div class="img-Davidov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalDavidov" tabindex="-1" role="dialog" aria-labelledby="modalLabelDavidov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelDavidov">Давыдов, Денис Васильевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Denisdavydov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Дени́с Васи́льевич Давы́дов</strong> (дореф. Денисъ Васильевичъ Давыдовъ 16 (27) июля 1784, Москва — 22 апреля (4 мая) 1839, село Верхняя Маза, Сызранский уезд, Симбирская губерния) — русский поэт, наиболее яркий представитель «гусарской поэзии», мемуарист, генерал-лейтенант. Один из командиров партизанского движения во время Отечественной войны 1812 года.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Давыдов, Денис Васильевич-->
		<!-- Конец сидит -->
	<!-- Конец Левое крыло, фрагмент 1 -->
	<!-- Левое крыло, фрагмент 2 -->
		<!-- верхний ряд -->
			<!-- Суворов, Александр Васильевич -->
			<a href="#" data-target="#modalSuvorov" data-toggle="modal">
				<div class="img-Suvorov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalSuvorov" tabindex="-1" role="dialog" aria-labelledby="modalLabelSuvorov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelSuvorov">Суворов, Александр Васильевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Suvorov.jpg" alt="" class="modal-portraits-img">
							<p>Граф (1789), Князь (с 1799) <strong>Алекса́ндр Васи́льевич Суво́ров</strong> (13 [24] ноября 1730 — 6 [18] мая 1800) — русский полководец, основоположник отечественной военной теории, национальный герой России. Генералиссимус (1799), генерал-фельдмаршал (1794), генерал-фельдмаршал Священной Римской империи (1799), великий маршал войск пьемонтских, кавалер всех российских орденов своего времени, вручавшихся мужчинам, а также семи иностранных.
							</p>
							<p>С 1789 года носил почётное прозвание граф Суворов-Рымникский, а с 1799 года — князь Италийский граф Суворов-Рымникский.
							</p>
							<p>За всю свою карьеру полководца не проиграл ни одного сражения, неоднократно наголову разбивал значительно превосходящие по численности силы противника. Всего дал более 60 крупных сражений. Известен своей заботой о солдатах, в том числе участием в разработке новой практичной полевой униформы, на смену униформе «на прусский манер».
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Суворов, Александр Васильевич -->

			<!-- Нахимов, Павел Степанович -->
			<a href="#" data-target="#modalNakhimov" data-toggle="modal">
				<div class="img-Nakhimov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalNakhimov" tabindex="-1" role="dialog" aria-labelledby="modalLabelNakhimov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelNakhimov">Нахимов, Павел Степанович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Nakhimov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Па́вел Степа́нович Нахи́мов</strong> (23 июня [5 июля] 1802, сельцо Городок, Вяземский уезд, Смоленская губерния — 30 июня [12 июля] 1855, Севастополь) — российский флотоводец, адмирал (1855).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Нахимов, Павел Степанович -->

			<!-- Толстой, Алексей Константинович -->
			<a href="#" data-target="#modalTolstoiAK" data-toggle="modal">
				<div class="img-TolstoiAK"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalTolstoiAK" tabindex="-1" role="dialog" aria-labelledby="modalLabelTolstoiAK" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelTolstoiAK">Толстой, Алексей Константинович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/AKTolstoy.jpg" alt="" class="modal-portraits-img">
							<p>Граф <strong>Алексе́й Константи́нович Толсто́й</strong> (24 августа [5 сентября] 1817, Санкт-Петербург — 28 сентября [10 октября] 1875, село Красный Рог, Черниговская губерния) — русский писатель, поэт и драматург, переводчик, сатирик из рода Толстых. Член-корреспондент Петербургской АН.
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Толстой, Алексей Константинович -->

			<!-- Пржевальский, Николай Михайлович -->
			<a href="#" data-target="#modalPrjevalski" data-toggle="modal">
				<div class="img-Prjevalski"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalPrjevalski" tabindex="-1" role="dialog" aria-labelledby="modalLabelPrjevalski" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelPrjevalski">Пржевальский, Николай Михайлович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Prjevalski.jpg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Миха́йлович Пржева́льский</strong> (31 марта [12 апреля] 1839, дер. Кимборово, Смоленская губерния — 20 октября [1 ноября] 1888, Каракол) — русский путешественник и натуралист. Предпринял несколько экспедиций в Центральную Азию. В 1878 году избран почётным членом Академии наук. Генерал-майор (1886).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Пржевальский, Николай Михайлович -->

			<!-- Пирогов, Николай Иванович -->
			<a href="#" data-target="#modalPirogov" data-toggle="modal">
				<div class="img-Pirogov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalPirogov" tabindex="-1" role="dialog" aria-labelledby="modalLabelPirogov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelPirogov">Пирогов, Николай Иванович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Pirogov_1881.jpg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Ива́нович Пирого́в</strong> (13 [25] ноября 1810, Москва — 23 ноября [5 декабря] 1881, с. Вишня (ныне в черте Винницы), Подольская губерния) — русский хирург и учёный-анатом, естествоиспытатель и педагог, профессор, создатель первого атласа топографической анатомии, основоположник русской военно-полевой хирургии, основатель русской школы анестезии. Тайный советник.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Пирогов, Николай Иванович -->

			<!-- Тютчев, Фёдор Иванович -->
			<a href="#" data-target="#modalTutchev" data-toggle="modal">
				<div class="img-Tutchev"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalTutchev" tabindex="-1" role="dialog" aria-labelledby="modalLabelTutchev" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelTutchev">Тютчев, Фёдор Иванович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/tutchev.jpg" alt="" class="modal-portraits-img">
							<p><strong>Фёдор Ива́нович Тю́тчев</strong> (23 ноября [5 декабря] 1803, Овстуг, Орловская губерния — 15 [27] июля 1873, Царское Село) — русский лирик, поэт-мыслитель, дипломат, консервативный публицист, член-корреспондент Петербургской Академии Наук с 1857 года, тайный советник.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Тютчев, Фёдор Иванович-->
		<!-- Конец верхний ряд -->
		<!-- нижний ряд -->
			<!-- Даша Севастопольская -->
			<a href="#" data-target="#modalSevastopolskaya" data-toggle="modal">
				<div class="img-Sevastopolskaya"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalSevastopolskaya" tabindex="-1" role="dialog" aria-labelledby="modalLabelSevastopolskaya" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelSevastopolskaya">Даша Севастопольская</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Sevastopolskaya.jpg" alt="" class="modal-portraits-img">
							<p><strong>Да́ша Севасто́польская</strong> (настоящее имя Да́рья Лавре́нтьевна Миха́йлова, по мужу Хво́ростова; ноябрь 1836 — 1892) — одна из первых военных сестёр милосердия, героиня обороны Севастополя в Крымскую войну 1853—1856 гг. Как и Крестовоздвиженская община сестёр милосердия, Дарья Михайлова стоит в ряду всемирно знаменитых подвижниц.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Даша Севастопольская -->

			<!-- Гоголь Николай Васильевич -->
			<a href="#" data-target="#modalGogol" data-toggle="modal">
				<div class="img-Gogol"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalGogol" tabindex="-1" role="dialog" aria-labelledby="modalLabelGogol" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelGogol">Гоголь, Николай Васильевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/N.Gogol.jpg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Васи́льевич Го́голь</strong> (фамилия при рождении Яно́вский, с 1821 — Го́голь-Яно́вский; 20 марта [1 апреля] 1809, Сорочинцы, Миргородский уезд, Полтавская губерния — 21 февраля [4 марта] 1852, Москва) — русский прозаик, драматург, поэт, критик, публицист, признанный одним из классиков русской литературы. Происходил из старинного дворянского рода Гоголей-Яновских.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Гоголь Николай Васильевич -->

			<!-- Толстой, Лев Николаевич -->
			<a href="#" data-target="#modalTolstoiLN" data-toggle="modal">
				<div class="img-TolstoiLN"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalTolstoiLN" tabindex="-1" role="dialog" aria-labelledby="modalLabelTolstoiLN" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelTolstoiLN">Толстой, Лев Николаевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Leo_Tolstoy,_portrait.jpg" alt="" class="modal-portraits-img">
							<p><strong>Граф Лев Николаевич Толсто́й</strong> (28 августа [9 сентября] 1828, Ясная Поляна, Тульская губерния, Российская империя — 7 [20] ноября 1910, станция Астапово, Рязанская губерния, Российская империя) — один из наиболее известных русских писателей и мыслителей, один из величайших писателей-романистов мира. Участник обороны Севастополя. Просветитель, публицист, религиозный мыслитель, его авторитетное мнение послужило причиной возникновения нового религиозно-нравственного течения — толстовства. Член-корреспондент Императорской Академии наук (1873), почётный академик по разряду изящной словесности (1900). Был номинирован на Нобелевскую премию по литературе (1902, 1903, 1904, 1905). Впоследствии отказался от дальнейшей номинации.
							</p>
							<p>Писатель, ещё при жизни признанный главой русской литературы. Творчество Льва Толстого ознаменовало новый этап в русском и мировом реализме, выступив мостом между классическим романом XIX века и литературой XX века. Лев Толстой оказал сильное влияние на эволюцию европейского гуманизма, а также на развитие реалистических традиций в мировой литературе. Произведения Льва Толстого многократно экранизировались и инсценировались в СССР и за рубежом; его пьесы ставились на сценах всего мира. Лев Толстой был самым издаваемым в СССР писателем за 1918—1986 годы: общий тираж 3199 изданий составил 436,261 млн экземпляров.
							</p>
							<p>Наиболее известны такие произведения Толстого, как романы «Война и мир», «Анна Каренина», «Воскресение», автобиографическая трилогия «Детство», «Отрочество», «Юность», повести «Казаки», «Смерть Ивана Ильича», «Крейцерова соната», «Отец Сергий», «Хаджи-Мурат», цикл очерков «Севастопольские рассказы», драмы «Живой труп», «Плоды просвещения» и «Власть тьмы», автобиографические религиозно-философские произведения «Исповедь» и «В чём моя вера?» и др.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Толстой, Лев Николаевич -->

			<!-- Фет, Афанасий Афанасьевич -->
			<a href="#" data-target="#modalFet" data-toggle="modal">
				<div class="img-Fet"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalFet" tabindex="-1" role="dialog" aria-labelledby="modalLabelFet" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelFet">Фет, Афанасий Афанасьевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Fet_by_Repin.jpg" alt="" class="modal-portraits-img">
							<p><strong>Афана́сий Афана́сьевич Фет</strong> (23 ноября [5 декабря] 1820, усадьба Новосёлки, Мценский уезд, Орловской губернии — 21 ноября [3 декабря] 1892, Москва) — русский поэт-лирик и переводчик, мемуарист, член-корреспондент Петербургской АН (1886).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Фет, Афанасий Афанасьевич -->

			<!-- Тургенев, Иван Сергеевич-->
			<a href="#" data-target="#modalTurgenev" data-toggle="modal">
				<div class="img-Turgenev"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalTurgenev" tabindex="-1" role="dialog" aria-labelledby="modalLabelTurgenev" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelTurgenev">Тургенев, Иван Сергеевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Turgenev_by_Repin.jpg" alt="" class="modal-portraits-img">
							<p><strong>Ива́н Серге́евич Турге́нев</strong> (28 октября [9 ноября] 1818, Орёл, Российская империя — 22 августа [3 сентября] 1883, Буживаль, Франция) — русский писатель-реалист, поэт, публицист, драматург, переводчик. Один из классиков русской литературы, внёсших наиболее значительный вклад в её развитие во второй половине XIX века. Член-корреспондент императорской Академии наук по разряду русского языка и словесности (1860), почётный доктор Оксфордского университета (1879), почётный член Московского университета (1880).
							</p>
							<p>Созданная им художественная система оказала влияние на поэтику не только русского, но и западноевропейского романа второй половины XIX века. Иван Тургенев первым в русской литературе начал изучать личность «нового человека» — шестидесятника, его нравственные качества и психологические особенности, благодаря ему в русском языке стал широко использоваться термин «нигилист». Пропагандист русской литературы и драматургии на Западе.</p>
							<p>Изучение произведений И. С. Тургенева — обязательная часть общеобразовательных школьных программ России. Наиболее известные произведения: цикл рассказов «Записки охотника», рассказ «Муму», повесть «Ася», романы «Дворянское гнездо», «Отцы и дети».</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Тургенев, Иван Сергеевич-->
		<!-- Конец нижний ряд -->
		<!-- сидят -->
			<!-- Сеславин, Александр Никитич-->
			<a href="#" data-target="#modalSeslavin" data-toggle="modal">
				<div class="img-Seslavin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalSeslavin" tabindex="-1" role="dialog" aria-labelledby="modalLabelSeslavin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelSeslavin">Сеславин, Александр Никитич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Seslavin1812.jpg" alt="" class="modal-portraits-img">
							<p><strong>Александр Никитич Сеславин</strong> (1780 — 25 апреля [7 мая] 1857) — русский военачальник, генерал-лейтенант. Знаменит своими боевыми заслугами и партизанскими действиями в период Отечественной войны 1812 года и Заграничного похода русской армии 1813—1814 годов, один из руководителей партизанского движения. Талантливый военный стратег и разведчик, автор предложений по совершенствованию ведения боевых действий и плана русской военной экспедиции по освобождению Индии от британского колониального гнёта. Происходит из древнего русского аристократического рода Сеславиных.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Сеславин, Александр Никитич-->

			<!-- Кульнев, Яков Петрович-->
			<a href="#" data-target="#modalKulnev" data-toggle="modal">
				<div class="img-Kulnev"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKulnev" tabindex="-1" role="dialog" aria-labelledby="modalLabelKulnev" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKulnev">Кульнев, Яков Петрович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Kulnev.jpg" alt="" class="modal-portraits-img">
							<p><strong>Я́ков Петро́вич Ку́льнев</strong> (25 июля [5 августа] 1763, Люцин, Инфлянтское воеводство, Речь Посполитая — 20 июля [1 августа] 1812, около деревни Клястицы) — русский полководец, герой Отечественной войны 1812 года. Гусар. Генерал-майор. Кавалер ордена Святого Георгия III степени и Золотого оружия «За храбрость».
							</p>
							<p>Первым из русских генералов Отечественной войны 1812 года пал в бою.</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Кульнев, Яков Петрович-->
		<!-- Конец сидят -->
	<!-- Конец Левое крыло, фрагмент 2 -->
	<!-- Центр, фрагмент 3 -->
		<!-- Блок людей-->
			<!-- Лесков, Николай Семёнович -->
			<a href="#" data-target="#modalLeskov" data-toggle="modal">
				<div class="img-Leskov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalLeskov" tabindex="-1" role="dialog" aria-labelledby="modalLabelLeskov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelLeskov">Лесков, Николай Семёнович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Leskov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Семёнович Леско́в</strong> (4 [16] февраля 1831, село Горохово, Орловская губерния — 21 февраля [5 марта] 1895, Санкт-Петербург) — русский писатель и публицист, мемуарист.
							</p>
							<p>«Лескова русские люди признают самым русским из русских писателей и который всех глубже и шире знал русский народ таким, каков он есть», — писал Д. П. Святополк-Мирский (1926).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Лесков, Николай Семёнович -->

			<!-- Достоевский, Фёдор Михайлович -->
			<a href="#" data-target="#modalDostoevski" data-toggle="modal">
				<div class="img-Dostoevski"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalDostoevski" tabindex="-1" role="dialog" aria-labelledby="modalLabelDostoevski" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelDostoevski">Достоевский, Фёдор Михайлович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Dostoevski.jpg" alt="" class="modal-portraits-img">
							<p><strong>Фёдор Миха́йлович Достое́вский</strong> (рус. дореф. Ѳедоръ Михайловичъ Достоевскій; 30 октября [11 ноября] 1821, Москва, Российская империя — 28 января [9 февраля] 1881, Санкт-Петербург, Российская империя) — русский писатель, мыслитель, философ и публицист. Член-корреспондент Петербургской АН с 1877 года.
							</p>
							<p>Как в начале, так и в продолжении своего литературного творчества, после четырёх лет каторги и ссылки за участие в кружке Петрашевского, Достоевский выступал в качестве новатора в русле традиций русского реализма, что не получило должной оценки современников при жизни писателя.
							</p>
							<p>После смерти Достоевский был признан классиком русской литературы и одним из лучших романистов мирового значения, считается первым представителем персонализма в России. Творчество русского писателя оказало воздействие на мировую литературу, в частности, на творчество ряда лауреатов Нобелевской премии по литературе, на становление экзистенциализма и фрейдизма.
							</p>
							<p>К наиболее значительным произведениям писателя относятся романы «великого пятикнижия». Романы «Преступление и наказание», «Идиот», «Бесы» и «Братья Карамазовы» включены в список 100 лучших книг Норвежского книжного клуба 2002 года. Многие известные произведения Достоевского многократно экранизировались и инсценировались в театре, ставились балетные и оперные постановки.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Достоевский, Фёдор Михайлович -->

			<!-- Иоанн Кронштадтский -->
			<a href="#" data-target="#modalKronshtadtski" data-toggle="modal">
				<div class="img-Kronshtadtski"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKronshtadtski" tabindex="-1" role="dialog" aria-labelledby="modalLabelKronshtadtski" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKronshtadtski">Иоанн Кронштадтский</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Kronshtadtski.jpg" alt="" class="modal-portraits-img">
							<p><strong>Иоа́нн Кроншта́дтский</strong> (настоящее имя — Иоа́нн Ильи́ч Се́ргиев; 19 (31) октября 1829, село Сура, Пинежский уезд, Архангельская губерния — 20 декабря 1908 (2 января 1909), Кронштадт, Санкт-Петербургская губерния) — священник Русской православной церкви, митрофорный протоиерей; настоятель Андреевского собора в Кронштадте; член Святейшего правительствующего синода с 1906 года (от участия в заседаниях уклонился); «вдохновитель создания и почётный член» Союза русского народа. Проповедник, духовный писатель, церковно-общественный деятель правоконсервативных и монархических взглядов. Почётный член Императорского православного палестинского общества. Крайне негативно оценивался официальной пропагандой в СССР
							</p>
							<p>Тезоименитство — 19 октября (по юлианскому календарю) — перенесение мощей Иоанна Рыльского.
							</p>
							<p>Погребён в основанном им Иоанновском монастыре на Карповке (Санкт-Петербург).
							</p>
							<p>Канонизирован в лике праведных Русской православной церковью заграницей 19 октября (1 ноября) 1964 года; впоследствии, 8 июня 1990 года, — Русской православной церковью (святой праведный Иоанн Кронштадтский).
							</p>
							<p>Память совершается 20 декабря и 1 июня по юлианскому календарю (в Русской православной церкви заграницей — также 19 октября).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Иоанн Кронштадтский -->

			<!-- Гермоген (патриарх Московский) -->
			<a href="#" data-target="#modalGermogen" data-toggle="modal">
				<div class="img-Germogen"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalGermogen" tabindex="-1" role="dialog" aria-labelledby="modalLabelGermogen" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelGermogen">Гермоген (патриарх Московский)</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Germogen.jpg" alt="" class="modal-portraits-img">
							<p><strong>Патриа́рх Гермоге́н</strong> (Ермоге́н[1], в миру Ермолай; ок. 1530 — 17 (27) февраля 1612) — патриарх Московский и всея Руси (1606—1612, в заточении с 1 (11) мая 1611), известный церковный общественный деятель эпохи Смутного времени. Канонизирован Русской православной церковью.
							</p>
							<p>Дни празднования священномученику Ермогену: 17 февраля (1 марта) в високосный год или 17 февраля (2 марта) в невисокосные годы — преставление, а также 12 (25) мая — прославление в лике святителей.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Гермоген (патриарх Московский) -->

			<!-- Родионов, Евгений Александрович -->
			<a href="#" data-target="#modalRodionov" data-toggle="modal">
				<div class="img-Rodionov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalRodionov" tabindex="-1" role="dialog" aria-labelledby="modalLabelRodionov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelRodionov">Родионов, Евгений Александрович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Rodionov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Евге́ний Алекса́ндрович Родио́нов</strong> (23 мая 1977, село Чибирлей, Пензенская область — 23 мая 1996, близ села Бамут, Чечня) — российский военнослужащий, рядовой Пограничных войск РФ. На Первой чеченской войне вместе с группой сослуживцев долгое время провёл в плену, подвергаясь жестоким пыткам. Для многих Евгений стал символом мужества, чести и верности. Посмертно награждён орденом Мужества.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Родионов, Евгений Александрович -->

			<!-- Иоанн (Снычёв) -->
			<a href="#" data-target="#modalIoann" data-toggle="modal">
				<div class="img-Ioann"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalIoann" tabindex="-1" role="dialog" aria-labelledby="modalLabelIoann" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelIoann">Иоанн (Снычёв)</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Ioann.jpg" alt="" class="modal-portraits-img">
							<p><strong>Митрополи́т Иоа́нн</strong> (в миру Ива́н Матве́евич Снычёв; 9 октября 1927, село Новая Маячка, Николаевская область, теперь Алёшковский район, Херсонская область — 2 ноября 1995, Санкт-Петербург) — епископ Русской Православной Церкви, с 20 июля 1990 года митрополит Санкт-Петербургский и Ладожский, постоянный член Священного Синода, публицист, один из основателей Петровской академии наук и искусств и историк церкви.
							</p>
							<p>Магистр богословия («Церковные расколы в Русской Церкви 20-х и 30-х годов XX столетия – григорианский, ярославский, иосифлянский, викторианский и другие, их особенности и история» 1966), автор ряда трудов на богословские и исторические темы. В либеральных кругах критикуется за традиционализм, антисемитизм, монархизм, национализм и анти-западничество.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Иоанн (Снычёв) -->

			<!-- Илий (Ноздрин) -->
			<a href="#" data-target="#modalIlii" data-toggle="modal">
				<div class="img-Ilii"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalIlii" tabindex="-1" role="dialog" aria-labelledby="modalLabelIlii" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelIlii">Илий (Ноздрин)</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Ilii.jpg" alt="" class="modal-portraits-img">
							<p><strong>Схиархимандрит Илий</strong> (в миру Алексей Афанасьевич Ноздрин; 8 марта 1932, село Становой Колодезь, Орловский район, Центрально-Чернозёмная область) — священнослужитель Русской православной церкви, духовник братии Оптиной пустыни, личный духовник патриарха Московского Кирилла.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Илий (Ноздрин)-->

			<!-- Булгаков, Сергей Николаевич -->
			<a href="#" data-target="#modalBulgakov" data-toggle="modal">
				<div class="img-Bulgakov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalBulgakov" tabindex="-1" role="dialog" aria-labelledby="modalLabelBulgakov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelBulgakov">Булгаков, Сергей Николаевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Bulgakov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Серге́й (Сергий) Никола́евич Булга́ков</strong> (16 [28] июля 1871, Ливны, Орловская губерния — 13 июля 1944, Париж) — русский философ, богослов, православный священник, экономист. Создатель учения о Софии Премудрости Божьей, осуждённого Московской Патриархией в 1935 г., но без обвинения его в ереси.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Булгаков, Сергей Николаевич-->
		<!-- Конец блок людей -->	
		<!-- Образы-символы -->
			<!-- Мать -->
			<a href="#" data-target="#modalMather" data-toggle="modal">
				<div class="img-Mather"></div>
			</a>
			<div class="modal fade" id="modalMather" tabindex="-1" role="dialog" aria-labelledby="modalLabelMather" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelMather">Мать</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<p><strong>Образ Матерей России</strong>.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Мать -->

			<!-- Дедушка -->
			<a href="#" data-target="#modalGrandfather" data-toggle="modal">
				<div class="img-Grandfather"></div>
			</a>
			<div class="modal fade" id="modalGrandfather" tabindex="-1" role="dialog" aria-labelledby="modalLabelGrandfather" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelGrandfather">Дедушка</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<p><strong>Oснова Рода</strong>.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Дедушка -->

			<!-- Мальчик -->
			<a href="#" data-target="#modalBoy" data-toggle="modal">
				<div class="img-Boy"></div>
			</a>
			<div class="modal fade" id="modalBoy" tabindex="-1" role="dialog" aria-labelledby="modalLabelBoy" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelBoy">Мальчик</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<p><strong>Oлицетворение будущих Защитников, Государственных Умов, Созидателей, Наследников Великих Традиций Земли Русской</strong>!
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Мальчик -->
		<!-- Конец Образы-символы -->
	<!-- Конец Центр, фрагмент 3 -->
	<!-- Правое крыло, фрагмент 4 -->
		<!-- верхний ряд-->
			<!-- Шаляпин, Фёдор Иванович -->
			<a href="#" data-target="#modalShalyapin" data-toggle="modal">
				<div class="img-Shalyapin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalShalyapin" tabindex="-1" role="dialog" aria-labelledby="modalLabelShalyapin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelShalyapin">Шаляпин, Фёдор Иванович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Feodor_Chaliapin_signed.jpg" alt="" class="modal-portraits-img">
							<p><strong>Фёдор Ива́нович Шаля́пин</strong> (1 [13] февраля 1873, Казань — 12 апреля 1938, Париж) — русский оперный и камерный певец (высокий бас), в разное время солист Большого и Мариинского театров, а также театра Метрополитен Опера, первый народный артист Республики (1918—1927, звание возвращено в 1991), в 1918—1921 годах — художественный руководитель Мариинского театра. Получил репутацию артиста, который соединил в своём творчестве «прирождённую музыкальность, яркие вокальные данные, необыкновенное актёрское мастерство». Занимался в разное время живописью, графикой, скульптурой и снимался в кино. Оказал большое влияние на мировое оперное искусство.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Шаляпин, Фёдор Иванович -->

			<!-- Вяльцева, Анастасия Дмитриевна -->
			<a href="#" data-target="#modalValiceva" data-toggle="modal">
				<div class="img-Valiceva"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalValiceva" tabindex="-1" role="dialog" aria-labelledby="modalLabelValiceva" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelValiceva">Вяльцева, Анастасия Дмитриевна</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Valiceva.jpg" alt="" class="modal-portraits-img">
							<p><strong>Анастаси́я Дми́триевна Вя́льцева</strong> (по мужу — Бискупская; 1 [13] марта 1871, слобода Алтухово, Севский уезд, Орловская губерния — 4 [17] февраля 1913, Санкт-Петербург) — русская эстрадная певица (меццо-сопрано), исполнительница русских и «цыганских» романсов, артистка оперетты.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Вяльцева, Анастасия Дмитриевна -->

			<!-- Тальков, Игорь Владимирович -->
			<a href="#" data-target="#modalTalkov" data-toggle="modal">
				<div class="img-Talkov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalTalkov" tabindex="-1" role="dialog" aria-labelledby="modalLabelTalkov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelTalkov">Тальков, Игорь Владимирович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Talkov.jpg" alt="" class="modal-portraits-img">
							<p><strong>И́горь Влади́мирович Талько́в</strong> (4 ноября 1956, Грецовка, Щёкинский район, Тульская область — 6 октября 1991, Санкт-Петербург) — советский рок-музыкант, певец, автор песен, поэт, киноактёр.
							</p>
							<p>В начале творческого пути сотрудничал с группами «Апрель», «Калейдоскоп» и «Электроклуб». В это время Игорем было написано много песен, но он не имел возможности исполнять их.
							</p>
							<p>Впервые стал известен широкой публике после выступления в 1987 году на фестивале «Песня года» с композицией «Чистые пруды». После этого, чтобы поделиться с аудиторией собственными песнями, многие из которых по музыкальному стилю и тексту отличались от произведений, исполнявшихся им раньше, Тальков создаёт группу «Спасательный круг» и вскоре едет с нею на гастроли с программой, состоявшей из двух частей: песни гражданского содержания и лирика. К 1989 году Тальковым было написано более двухсот песен. Творчество Талькова трудно отнести к какому-либо определённому жанру; оно находится примерно на стыке поп-музыки, рок-музыки и авторской песни.
							</p>
							<p>Убит 6 октября 1991 года в Санкт-Петербурге во Дворце спорта «Юбилейный» при невыясненных до сих пор обстоятельствах.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Тальков, Игорь Владимирович -->

			<!-- Бурляев, Николай Петрович -->
			<a href="#" data-target="#modalByrlyaev" data-toggle="modal">
				<div class="img-Byrlyaev"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalByrlyaev" tabindex="-1" role="dialog" aria-labelledby="modalLabelByrlyaev" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelByrlyaev">Бурляев, Николай Петрович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Byrlyaev.jpg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Петро́вич Бурля́ев</strong> (род. 3 августа 1946, Москва) — советский и российский актёр театра и кино, кинорежиссёр. Народный артист Российской Федерации (1996). Член Союза писателей России. Один из учредителей «Фонда православной культуры священника Павла Флоренского».
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Бурляев, Николай Петрович -->

			<!-- Белов, Василий Иванович -->
			<a href="#" data-target="#modalBelov" data-toggle="modal">
				<div class="img-Belov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalBelov" tabindex="-1" role="dialog" aria-labelledby="modalLabelBelov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelBelov">Белов, Василий Иванович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Belov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Васи́лий Ива́нович Бело́в</strong> (23 октября 1932, Тимониха, ныне Вологодская область — 4 декабря 2012, Вологда) — русский писатель и поэт, один из крупнейших представителей «деревенской прозы». Член Союза писателей СССР.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Белов, Василий Иванович -->

			<!-- Ганичев, Валерий Николаевич -->
			<a href="#" data-target="#modalGanichev" data-toggle="modal">
				<div class="img-Ganichev"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalGanichev" tabindex="-1" role="dialog" aria-labelledby="modalLabelGanichev" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelGanichev">Ганичев, Валерий Николаевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Ganichev.jpg" alt="" class="modal-portraits-img">
							<p><strong>Вале́рий Никола́евич Га́ничев</strong> (3 августа 1933 — 8 июля 2018) — советский и российский писатель, журналист, общественный деятель, доктор исторических наук (1978), председатель Союза писателей России с 1994 по 2018 год.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Ганичев, Валерий Николаевич -->

			<!-- Захарченко, Виктор Гаврилович -->
			<a href="#" data-target="#modalZaharchenko" data-toggle="modal">
				<div class="img-Zaharchenko"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalZaharchenko" tabindex="-1" role="dialog" aria-labelledby="modalLabelZaharchenko" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelZaharchenko">Захарченко, Виктор Гаврилович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Zaharchenko.jpg" alt="" class="modal-portraits-img">
							<p><strong>Ви́ктор Гаври́лович Заха́рченко</strong> (род. 22 марта 1938 года, станица Дядьковская, Краснодарский край) — советский и российский фольклорист и общественный деятель, исследователь народной песни, хоровой дирижёр, профессор, композитор. Художественный руководитель Государственного академического ордена Дружбы народов и ордена Русской Православной Церкви святого благоверного великого князя Димитрия Донского I степени Кубанского казачьего хора. Член Совета по государственной политике при Председателе Совета Федерации Федерального Собрания Российской Федерации, член Патриаршего Совета по культуре. Народный артист РСФСР (1984), Народный артист Украины (1994). Лауреат Государственной премии Российской Федерации (2016), Государственной премии РСФСР имени М. И. Глинки (1991).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Захарченко, Виктор Гаврилович -->
		<!-- Конец верхний ряд -->	
		<!-- средний ряд -->
			<!-- Шухов, Владимир Григорьевич -->
			<a href="#" data-target="#modalShuhov" data-toggle="modal">
				<div class="img-Shuhov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalShuhov" tabindex="-1" role="dialog" aria-labelledby="modalLabelShuhov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelShuhov">Шухов, Владимир Григорьевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Shukhov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Влади́мир Григо́рьевич Шу́хов</strong> (16 [28] августа 1853 — 2 февраля 1939) — русский, советский инженер, архитектор, изобретатель, учёный; член-корреспондент (1928) и почётный член (1929) Академии наук СССР, лауреат премии имени В. И. Ленина (1929), Герой Труда (23 апреля 1928). Является автором проектов и техническим руководителем строительства первых российских нефтепроводов (1878) и нефтеперерабатывающего завода с первыми российскими установками крекинга нефти (1931). Внёс выдающийся вклад в технологии нефтяной промышленности и трубопроводного транспорта.
							</p>
							<p>В. Г. Шухов первым в мире применил для строительства зданий и башен стальные сетчатые оболочки. Впоследствии архитекторы хай-тека, знаменитые Бакминстер Фуллер и Норман Фостер, — окончательно внедрили сетчатые оболочки в современную практику строительства, и в XXI веке оболочки стали одним из главных средств формообразования авангардных зданий. Шухов ввёл в архитектуру форму однополостного гиперболоида вращения, создав первые в мире гиперболоидные конструкции.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Чехов Антон Павлович -->

			<!-- Суриков, Василий Иванович -->
			<a href="#" data-target="#modalSurikov" data-toggle="modal">
				<div class="img-Surikov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalSurikov" tabindex="-1" role="dialog" aria-labelledby="modalLabelSurikov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelSurikov">Суриков, Василий Иванович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Surikov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Васи́лий Ива́нович Су́риков</strong> (12 (24) января 1848, Красноярск — 6 (19) марта 1916, Москва) — русский живописец, мастер масштабных исторических полотен, академик и действительный член Императорской Академии художеств.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Суриков, Василий Иванович -->

			<!-- Есенин Сергей Александрович -->
			<a href="#" data-target="#modalEsenin" data-toggle="modal">
				<div class="img-Esenin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalEsenin" tabindex="-1" role="dialog" aria-labelledby="modalLabelEsenin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelEsenin">Есенин, Сергей Александрович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Sergey_Yesenin.jpg" alt="" class="modal-portraits-img">
							<p><strong>Серге́й Алекса́ндрович Есе́нин</strong> (21 сентября (3 октября) 1895, Константиново, Кузьминская волость, Рязанский уезд, Рязанская губерния, Российская империя — 28 декабря 1925, Ленинград, СССР) — русский поэт, представитель новокрестьянской поэзии и лирики, а в более позднем периоде творчества — имажинизма.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Есенин Сергей Александрович -->

			<!-- Распутин, Валентин Григорьевич -->
			<a href="#" data-target="#modalRasputin" data-toggle="modal">
				<div class="img-Rasputin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalRasputin" tabindex="-1" role="dialog" aria-labelledby="modalLabelRasputin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelRasputin">Распутин, Валентин Григорьевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Rasputin.jpg" alt="" class="modal-portraits-img">
							<p><strong>Валенти́н Григо́рьевич Распу́тин</strong> (15 марта 1937, село Усть-Уда, Восточно-Сибирская область — 14 марта 2015, Москва) — русский советский писатель и публицист, общественный деятель. Один из наиболее значительных представителей «деревенской прозы».
							</p>
							<p>Герой Социалистического Труда (1987). Лауреат двух Государственных премий СССР (1977, 1987), Государственной премии России (2012) и Премии Правительства РФ (2010). Член Союза писателей СССР с 1967 года.
							</p>
							<p>В 1994 году выступил инициатором создания Всероссийского фестиваля «Дни русской духовности и культуры „Сияние России“» (Иркутск).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Распутин, Валентин Григорьевич -->

			<!-- Михайлов, Александр Яковлевич -->
			<a href="#" data-target="#modalMihaylov" data-toggle="modal">
				<div class="img-Mihaylov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalMihaylov" tabindex="-1" role="dialog" aria-labelledby="modalLabelMihaylov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelMihaylov">Михайлов, Александр Яковлевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Mihaylov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Алекса́ндр Я́ковлевич Миха́йлов</strong> (род. 5 октября 1944, пгт Оловянная, Читинская область, СССР) — советский и российский актёр театра и кино, кинорежиссёр и педагог. Народный артист РСФСР (1992), Народный артист Приднестровской Молдавской Республики (2014).
							</p>
							<p>Всего исполнил более 75 ролей в кино и около 50 ролей в театре. Среди наиболее известных работ артиста — главные роли царя Ивана Грозного в Малом театре, князя Мышкина и Родиона Раскольникова в Приморском драматическом театре, главные роли в фильмах «Любовь и голуби», «Мужики!», «Отряд специального назначения», «Белый снег России», «Милый друг давно забытых лет…», «Очарованный странник» и других. Известен также как исполнитель песен, романсов, стихотворений, с творческими вечерами выступал в разных регионах России (преимущественно в Москве, Сибири и на Дальнем Востоке) и в ближнем зарубежье. Занимался общественно-политической деятельностью, баллотировался в Госдуму РФ. Активный участник «русских маршей» и патриотических митингов, где выступал с зажигательными речами, идеологически близкими к русскому национализму.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Михайлов, Александр Яковлевич -->

			<!-- Клыков, Вячеслав Михайлович -->
			<a href="#" data-target="#modalKlykov" data-toggle="modal">
				<div class="img-Klykov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKlykov" tabindex="-1" role="dialog" aria-labelledby="modalLabelKlykov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKlykov">Клыков, Вячеслав Михайлович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Klykov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Вячесла́в Миха́йлович Клы́ков</strong> (19 октября 1939, Мармыжи, Курская область — 2 июня 2006, Москва) — советский и российский скульптор, президент Международного фонда славянской письменности и культуры. Лауреат Государственной премии СССР (1982). Председатель возрождённого Союза русского народа (2005—2006).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Клыков Вячеслав Михайлович -->

			<!-- Михалков, Никита Сергеевич -->
			<a href="#" data-target="#modalMihalkov" data-toggle="modal">
				<div class="img-Mihalkov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalMihalkov" tabindex="-1" role="dialog" aria-labelledby="modalLabelMihalkov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelMihalkov">Михалков, Никита Сергеевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Mihalkov.jpeg" alt="" class="modal-portraits-img">
							<p><strong>Ники́та Серге́евич Михалко́в</strong> (род. 21 октября 1945, Москва, СССР) — советский и российский кинорежиссёр, актёр, сценарист и продюсер. Народный артист РСФСР (1984). Полный кавалер ордена «За заслуги перед Отечеством». Председатель Союза кинематографистов России с 1998 года. Трижды лауреат Государственной премии Российской Федерации (1993, 1995, 1999).
							</p>
							<p>Обладатель «Золотого льва» Венецианского кинофестиваля (1991) и номинант на премию «Оскар» (1993) в категории «Лучший фильм на иностранном языке» за фильм «Урга — территория любви». Лауреат премии «Оскар» (1995) в категории «Лучший фильм на иностранном языке» и Гран-при Каннского кинофестиваля (1994) за фильм «Утомлённые солнцем». Обладатель «Специального льва» Венецианского кинофестиваля (2007) за вклад в киноискусство и номинант на премию «Оскар» (2008) в категории «Лучший фильм на иностранном языке» за фильм «12».
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Михалков, Никита Сергеевич -->
		<!-- Конец средний ряд -->
		<!-- нижний ряд -->
			<!-- Столыпин, Пётр Аркадьевич -->
			<a href="#" data-target="#modalStolypin" data-toggle="modal">
				<div class="img-Stolypin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalStolypin" tabindex="-1" role="dialog" aria-labelledby="modalLabelStolypin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelStolypin">Столыпин, Пётр Аркадьевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Stolypin.jpg" alt="" class="modal-portraits-img">
							<p><strong>Пётр Арка́дьевич Столы́пин</strong> (2 [14] апреля 1862, Дрезден, Саксония — 5 [18] сентября 1911, Киев) — государственный деятель Российской империи, статс-секретарь Его Императорского Величества (1908), действительный статский советник (1904), гофмейстер (1906). Гродненский (1902—1903) и саратовский (1903—1906) губернатор, министр внутренних дел и председатель Совета министров (1906—1911), член Государственного совета (1907—1911).
							</p>
							<p>В российской истории начала XX века известен в первую очередь как реформатор и государственный деятель, сыгравший значительную роль в подавлении революции 1905—1907 годов. В апреле 1906 года император Николай II предложил Столыпину пост министра внутренних дел России. Вскоре после этого правительство было распущено вместе с Государственной думой I созыва, а Столыпин был назначен председателем Совета министров.
							</p>
							<p>На новой должности, которую он занимал вплоть до своей гибели, Столыпин провёл целый ряд законопроектов, которые вошли в историю как столыпинская аграрная реформа, главным содержанием которой было введение частной крестьянской земельной собственности. Принятый правительством закон о военно-полевых судах ужесточал наказание за совершение тяжких преступлений. Впоследствии Столыпина резко критиковали за жёсткость проводимых мер. Среди других мероприятий Столыпина на посту председателя Совета министров особое значение имели введение земства в западных губерниях, ограничение автономии Великого княжества Финляндского, изменение избирательного законодательства и роспуск II Думы, положившие конец революции 1905—1907 годов.
							</p>
							<p>Во время выступлений перед депутатами Государственной думы проявились ораторские способности Столыпина. Его фразы «Не запугаете!», «Сначала успокоение, потом реформы» и «Им нужны великие потрясения, нам нужна великая Россия» стали крылатыми.
							</p>
							<p>Из личных черт характера современниками особенно выделялось его бесстрашие. На Столыпина планировалось и было совершено 11 покушений. Во время последнего, совершённого в Киеве Дмитрием Богровым, Столыпин получил ранение, от которого через несколько дней умер.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Столыпин, Пётр Аркадьевич -->

			<!-- Скобелев, Михаил Дмитриевич -->
			<a href="#" data-target="#modalSkobelev" data-toggle="modal">
				<div class="img-Skobelev"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalSkobelev" tabindex="-1" role="dialog" aria-labelledby="modalLabelSkobelev" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelSkobelev">Скобелев, Михаил Дмитриевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Skobelev.jpg" alt="" class="modal-portraits-img">
							<p><strong>Михаи́л Дми́триевич Ско́белев</strong> (17 [29] сентября 1843 — 25 июня [7 июля] 1882) — российский военачальник и стратег, генерал от инфантерии (1881), генерал-адъютант (1878).
							</p>
							<p>Участник Среднеазиатских завоеваний Российской империи и Русско-турецкой войны 1877—1878 годов, освободитель Болгарии. В историю вошёл с прозванием «Белый генерал» (тур. Ak-paşa, Ак-Паша) — так его называли в войсках за появление в сражениях в белом мундире и на белом коне. Болгарский народ считает его национальным героем.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Скобелев, Михаил Дмитриевич -->
			
			<!-- Бунин, Иван Алексеевич -->
			<a href="#" data-target="#modalBunin" data-toggle="modal">
				<div class="img-Bunin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalBunin" tabindex="-1" role="dialog" aria-labelledby="modalLabelBunin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelBunin">Бунин, Иван Алексеевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Ivan_Bunin_(sepia).jpg" alt="" class="modal-portraits-img">
							<p><strong>Ива́н Алексе́евич Бу́нин</strong> (10 [22] октября 1870, Воронеж — 8 ноября 1953, Париж) — русский писатель и поэт, лауреат Нобелевской премии по литературе. Будучи представителем обедневшей дворянской семьи, Бунин рано начал самостоятельную жизнь. В юношеские годы работал в газетах, канцеляриях, много странствовал. Первым из опубликованных произведений Бунина стало стихотворение «Над могилой С. Я. Надсона» (1887); первый стихотворный сборник вышел в свет в 1891 году в Орле. В 1903 году получил Пушкинскую премию за книгу «Листопад» и перевод «Песни о Гайавате»; в 1909 году был повторно удостоен этой награды за 3-й и 4-й тома Собрания сочинений. В 1909 году избран почётным академиком по разряду изящной словесности Императорской Санкт-Петербургской академии наук. С 1920 года жил во Франции. Автор романа «Жизнь Арсеньева», повестей «Суходол», «Деревня», «Митина любовь», рассказов «Господин из Сан-Франциско», «Лёгкое дыхание», «Антоновские яблоки», дневниковых записей «Окаянные дни» и других произведений. В 1933 году Иван Бунин стал лауреатом Нобелевской премии по литературе за «строгое мастерство, с которым он развивает традиции русской классической прозы». Скончался в 1953 году, похоронен на кладбище Сент-Женевьев-де-Буа. Произведения Бунина были неоднократно экранизированы. Образ писателя воплощён в фильме Алексея Учителя «Дневник его жены».
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Бунин, Иван Алексеевич -->
			
			<!-- Шолохов, Михаил Александрович -->
			<a href="#" data-target="#modalSholokhov" data-toggle="modal">
				<div class="img-Sholokhov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalSholokhov" tabindex="-1" role="dialog" aria-labelledby="modalLabelSholokhov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelSholokhov">Шолохов, Михаил Александрович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Sholokhov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Михаи́л Алекса́ндрович Шо́лохов</strong> (11 [24] мая 1905, хутор Кружилинский, станица Вёшенская, Донецкий округ, область Войска Донского — 21 февраля 1984, станица Вёшенская, Шолоховский район, Ростовская область) — русский советский писатель и киносценарист, журналист. Лауреат Нобелевской премии по литературе (1965 год — «за художественную силу и цельность эпоса о донском казачестве в переломное для России время»), Сталинской премии (1941), Ленинской премии (1960). Действительный член АН СССР (1939). Дважды Герой Социалистического Труда (1967, 1980). Полковник (1943).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Шолохов, Михаил Александрович -->
			
			<!-- Бондарчук, Сергей Фёдорович -->
			<a href="#" data-target="#modalBondarchuk" data-toggle="modal">
				<div class="img-Bondarchuk"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalBondarchuk" tabindex="-1" role="dialog" aria-labelledby="modalLabelBondarchuk" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelBondarchuk">Бондарчук, Сергей Фёдорович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Bondarchuk.JPG" alt="" class="modal-portraits-img">
							<p><strong>Серге́й Фёдорович Бондарчу́к</strong> (25 сентября 1920, с. Белозёрка, Херсонский уезд, Херсонская губерния, УССР — 20 октября 1994, Москва, Россия) — советский и российский актёр театра и кино, кинорежиссёр, сценарист, педагог. Герой Социалистического Труда (1980). Народный артист СССР (1952). Лауреат Ленинской премии (1960), Сталинской премии первой степени (1952), Государственной премии СССР (1984), Государственной премии РСФСР имени братьев Васильевых (1977). Лауреат премии Американской киноакадемии «Оскар» (1969).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Бондарчук, Сергей Фёдорович -->
			
			<!-- Поликарпов, Николай Николаевич -->
			<a href="#" data-target="#modalPolikarpov" data-toggle="modal">
				<div class="img-Polikarpov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalPolikarpov" tabindex="-1" role="dialog" aria-labelledby="modalLabelPolikarpov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelPolikarpov">Поликарпов, Николай Николаевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Polikarpov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Никола́евич Полика́рпов</strong> (1892—1944) — русский и советский авиаконструктор, глава ОКБ-51 (впоследствии — ОКБ Сухого). Дважды лауреат Сталинской премии, Герой Социалистического Труда, Поликарпов является одним из основоположников советской школы русского самолётостроения. Созданные под его руководством многоцелевые самолёты У-2 (По-2) и Р-5 стали одними из лучших в своём классе, а И-15 бис, И-153 «Чайка», И-16 составили основу парка истребительной авиации СССР 1934—1940 годов, за что конструктор заслужил репутацию «короля истребителей».
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Поликарпов, Николай Николаевич -->
			
			<!-- Чечнева, Марина Павловна -->
			<a href="#" data-target="#modalChechneva" data-toggle="modal">
				<div class="img-Chechneva"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalChechneva" tabindex="-1" role="dialog" aria-labelledby="modalLabelChechneva" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelChechneva">Чечнева, Марина Павловна</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Chechneva.jpg" alt="" class="modal-portraits-img">
							<p><strong>Марина Павловна Чечнева</strong> (15 августа 1922 года — 12 января 1984 года) — лётчица, Герой Советского Союза, во время Великой Отечественной войны командовала эскадрильей 46-го Таманского гвардейского ночного легкобомбардировочного полка, гвардии майор.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Чечнева, Марина Павловна -->
			
			<!-- Хренников, Тихон Николаевич -->
			<a href="#" data-target="#modalKhrennikov" data-toggle="modal">
				<div class="img-Khrennikov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKhrennikov" tabindex="-1" role="dialog" aria-labelledby="modalLabelKhrennikov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKhrennikov">Хренников, Тихон Николаевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Khrennikov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Ти́хон Никола́евич Хре́нников</strong> (28 мая (10 июня) 1913, Елец, Орловская губерния — 14 августа 2007, Москва) — советский и российский композитор, пианист, музыкально-общественный деятель, педагог, профессор. Председатель Правления Союза композиторов СССР в 1948—1991 гг.
							</p>
							<p>Народный артист СССР (1963). Герой Социалистического Труда (1973). Лауреат Ленинской премии (1974), трёх Сталинских премий второй степени (1942, 1946, 1952) и Государственной премии СССР (1967). Член ВКП(б) с 1947 года.
							</p>
							<p>Автор 8 опер, 5 балетов, 3 симфоний, 9 инструментальных концертов, музыки для 30 кинофильмов, многочисленных произведений камерной, вокальной и программной музыки и музыки для театральных постановок.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Хренников, Тихон Николаевич -->
			
			<!-- Кожедуб, Иван Никитович -->
			<a href="#" data-target="#modalKozhedub" data-toggle="modal">
				<div class="img-Kozhedub"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKozhedub" tabindex="-1" role="dialog" aria-labelledby="modalLabelKozhedub" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKozhedub">Кожедуб, Иван Никитович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Kozhedub.jpg" alt="" class="modal-portraits-img">
							<p><strong>Ива́н Ники́тович Кожеду́б</strong> (укр. Іван Микитович Кожедуб; 8 июня 1920, Ображиевка, Глуховский уезд, Черниговская губерния, УССР — 8 августа 1991, Москва, СССР) — советский военачальник, Маршал авиации (1985), лётчик-ас. Трижды Герой Советского Союза (1944, 1944, 1945). Депутат Верховного Совета СССР (1946—1961). Народный депутат СССР (1989—1991)
							</p>
							<p>Лётчик-ас времён Великой Отечественной войны, наиболее результативный лётчик-истребитель в авиации союзников (64 победы). Псевдоним во время боевых действий в составе Группы советских военных специалистов в Корее — «Крылов».
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Кожедуб, Иван Никитович -->
		<!-- Конец нижний ряд -->
		<!-- сидят -->
			<!-- Андреев, Леонид Николаевич -->
			<a href="#" data-target="#modalAndreev" data-toggle="modal">
				<div class="img-Andreev"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalAndreev" tabindex="-1" role="dialog" aria-labelledby="modalLabelAndreev" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelAndreev">Андреев, Леонид Николаевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Andreev.JPG" alt="" class="modal-portraits-img">
							<p><strong>Леони́д Никола́евич Андре́ев</strong> (9 [21] августа 1871, Орёл, Российская империя — 12 сентября 1919, Нейвола, Финляндия) — русский писатель. Представитель Серебряного века русской литературы.
							</p>
							<p>Андреев считается родоначальником русского экспрессионизма. Его творческий стиль своеобразен и представляет собой сочетание различных литературных направлений.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Андреев, Леонид Николаевич -->

			<!-- Тюленин, Сергей Гаврилович -->
			<a href="#" data-target="#modalTulenin" data-toggle="modal">
				<div class="img-Tulenin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalTulenin" tabindex="-1" role="dialog" aria-labelledby="modalLabelTulenin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelTulenin">Тюленин, Сергей Гаврилович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Tulenin.jpg" alt="" class="modal-portraits-img">
							<p><strong>Серге́й Гаври́лович Тюле́нин</strong> (1925—1943) — член штаба организации «Молодая гвардия», Герой Советского Союза.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Тюленин, Сергей Гаврилович -->
		<!-- Конец сидят -->
	<!-- Конец Правое крыло, фрагмент 4 -->
	<!-- Правое крыло, фрагмент 5 -->
		<!-- верхний ряд-->
			<!-- Рубцов, Николай Михайлович -->
			<a href="#" data-target="#modalRubcov" data-toggle="modal">
				<div class="img-Rubcov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalRubcov" tabindex="-1" role="dialog" aria-labelledby="modalLabelRubcov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelRubcov">Рубцов, Николай Михайлович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Rubcov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Миха́йлович Рубцо́в</strong> (3 января 1936, село Емецк, Северный край — 19 января 1971, Вологда) — русский лирический поэт.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Рубцов, Николай Михайлович -->
			
			<!-- Свиридов, Георгий Васильевич -->
			<a href="#" data-target="#modalSviridov" data-toggle="modal">
				<div class="img-Sviridov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalSviridov" tabindex="-1" role="dialog" aria-labelledby="modalLabelSviridov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelSviridov">Свиридов, Георгий Васильевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Sviridov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Гео́ргий Васи́льевич Свири́дов</strong> (3 [16] декабря 1915, Фатеж, Курская губерния — 6 января 1998, Москва) — советский российский композитор, пианист, общественный деятель. Народный артист СССР (1970). Герой Социалистического Труда (1975). Лауреат Ленинской премии (1960), Сталинской премии первой степени (1946), двух Государственных премий СССР (1968, 1980) и Государственной премии РФ (1994).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Свиридов, Георгий Васильевич -->
			
			<!-- Вернадский, Владимир Иванович -->
			<a href="#" data-target="#modalVernadsky" data-toggle="modal">
				<div class="img-Vernadsky"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalVernadsky" tabindex="-1" role="dialog" aria-labelledby="modalLabelVernadsky" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelVernadsky">Вернадский, Владимир Иванович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Vernadsky.jpg" alt="" class="modal-portraits-img">
							<p><strong>Влади́мир Ива́нович Верна́дский</strong> (28 февраля (12 марта) 1863, Санкт-Петербург, Российская империя — 6 января 1945, Москва, СССР) — российский и советский учёный-естествоиспытатель, мыслитель и общественный деятель конца XIX века и первой половины XX века. Академик Императорской Санкт-Петербургской академии наук (1908) (в дальнейшем переименована в РАН (1917), АН СССР (1925)); один из основателей и первый президент Украинской академии наук (1918—1921). Создатель научных школ и науки биогеохимии. Один из представителей русского космизма. Лауреат Сталинской премии I степени (1943).
							</p>
							<p>В круг его научных интересов входили: минералогия, кристаллография, геохимия, геология, почвоведение, радиогеология, биология, палеонтология, биогеохимия, метеоритика, философия и история науки. Кроме того, занимался организаторской и общественной деятельностью.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Вернадский, Владимир Иванович -->
			
			<!-- Гагарин, Юрий Алексеевич -->
			<a href="#" data-target="#modalGagarin" data-toggle="modal">
				<div class="img-Gagarin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalGagarin" tabindex="-1" role="dialog" aria-labelledby="modalLabelGagarin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelGagarin">Гагарин, Юрий Алексеевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Gagarin.jpg" alt="" class="modal-portraits-img">
							<p><strong>Ю́рий Алексе́евич Гага́рин</strong> (9 марта 1934, Клушино, Гжатский (ныне Гагаринский) район, Западная область, СССР — 27 марта 1968, возле села Новосёлово, Киржачский район, Владимирская область, СССР) — лётчик-космонавт СССР, Герой Советского Союза, кавалер высших знаков отличия ряда государств, почётный гражданин многих российских и зарубежных городов.
							</p>
							<p>Полковник ВВС СССР (1963), военный лётчик 1-го класса, заслуженный мастер спорта СССР (1961), член ЦК ВЛКСМ, депутат Верховного Совета СССР 7-го и 8-го созывов.
							</p>
							<p>12 апреля 1961 года Юрий Гагарин стал первым человеком в мировой истории, совершившим полёт в космическое пространство. Ракета-носитель «Восток» с кораблём «Восток-1», на борту которого находился Гагарин, была запущена с космодрома Байконур. После 108 минут полёта Гагарин успешно приземлился в Саратовской области, неподалёку от Энгельса. Начиная с 12 апреля 1962 года, день полёта Гагарина в космос был объявлен праздником — Днём космонавтики.
							</p>
							<p>Первый космический полёт вызвал большой интерес во всём мире, а сам Юрий Гагарин превратился в мировую знаменитость. По приглашениям зарубежных правительств и общественных организаций он посетил около 30 стран. Много у первого космонавта было поездок и внутри Советского Союза. В последующие годы Гагарин вёл большую общественно-политическую работу, окончил Военно-воздушную инженерную академию имени профессора Н. Е. Жуковского, работал в Центре подготовки космонавтов и готовился к новому полёту в космос.
							</p>
							<p>27 марта 1968 года Юрий Гагарин погиб в авиационной катастрофе вблизи деревни Новосёлово Киржачского района Владимирской области, выполняя учебный полёт на самолёте МиГ-15УТИ под руководством опытного инструктора В. С. Серёгина. Причины и обстоятельства авиакатастрофы остаются не вполне выясненными до сегодняшнего дня.
							</p>
							<p>В связи с гибелью Гагарина в Советском Союзе был объявлен общенациональный траур (впервые в истории СССР в память о человеке, не являвшемся главой государства). В честь первого космонавта Земли был переименован ряд населённых пунктов (включая его родной город — Гжатск), названы улицы и проспекты. В разных городах мира было установлено множество памятников Гагарину.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Гагарин, Юрий Алексеевич -->
			
			<!-- Курчатов, Игорь Васильевич -->
			<a href="#" data-target="#modalKurchatov" data-toggle="modal">
				<div class="img-Kurchatov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKurchatov" tabindex="-1" role="dialog" aria-labelledby="modalLabelKurchatov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKurchatov">Курчатов, Игорь Васильевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Kurchatov.jpg" alt="" class="modal-portraits-img">
							<p><strong>И́горь Васи́льевич Курча́тов</strong> (8 (21) января 1903, Симский Завод, Уфимская губерния, Российская империя — 7 февраля 1960, Москва, СССР) — советский физик, «отец» советской атомной бомбы. Трижды Герой Социалистического Труда (1949, 1951, 1954). Академик АН СССР (1943) и АН Узб. ССР (1959), доктор физико-математических наук (1933), профессор (1935). Основатель и первый директор Института атомной энергии (1943—1960). Главный научный руководитель атомной проблемы в СССР, один из основоположников использования ядерной энергии в мирных целях. Лауреат Ленинской премии и четырёх Сталинских премий. Почётный гражданин СССР.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Курчатов, Игорь Васильевич -->
		<!-- Конец верхний ряд -->	
		<!-- средний ряд -->
			<!-- Глазунов, Илья Сергеевич -->
			<a href="#" data-target="#modalGlazunov" data-toggle="modal">
				<div class="img-Glazunov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalGlazunov" tabindex="-1" role="dialog" aria-labelledby="modalLabelGlazunov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelGlazunov">Глазунов, Илья Сергеевич</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Glazunov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Илья́ Серге́евич Глазуно́в</strong> (10 июня 1930, Ленинград — 9 июля 2017, Москва) — советский и российский художник-живописец, педагог. Основатель и ректор Российской академии живописи, ваяния и зодчества И. С. Глазунова. Академик РАХ (2001). Народный художник СССР (1980). Лауреат Государственной премии Российской Федерации (1997). Полный кавалер ордена «За заслуги перед Отечеством».
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Глазунов, Илья Сергеевич -->
			
			<!-- Королёв, Сергей Павлович -->
			<a href="#" data-target="#modalKorolow" data-toggle="modal">
				<div class="img-Korolow"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKorolow" tabindex="-1" role="dialog" aria-labelledby="modalLabelKorolow" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKorolow">Королёв, Сергей Павлович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Korolow.jpg" alt="" class="modal-portraits-img">
							<p><strong>Серге́й Па́влович Королёв</strong> (30 декабря 1906 [12 января 1907], Житомир — 14 января 1966, Москва) — советский ученый, конструктор ракетно-космических систем, председатель Совета главных конструкторов СССР (1950—1966). Академик АН СССР (1958).
							</p>
							<p>Сергей Королёв является одним из основных создателей советской ракетно-космической техники, обеспечившей стратегический паритет и сделавшей СССР передовой ракетно-космической державой, и ключевой фигурой в освоении человеком космоса, создателем практической космонавтики. Под его руководством был осуществлён запуск первого искусственного спутника Земли и первого космонавта планеты Юрия Гагарина.
							</p>
							<p>Дважды Герой Социалистического Труда, лауреат Ленинской премии. Член КПСС с июля 1953 года.
							</p>
							<p>Скончался 14 января 1966 года в Москве, похоронен в некрополе у Кремлёвской стены.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Королёв, Сергей Павлович -->
			
			<!-- Келдыш, Мстислав Всеволодович -->
			<a href="#" data-target="#modalKeldish" data-toggle="modal">
				<div class="img-Keldish"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKeldish" tabindex="-1" role="dialog" aria-labelledby="modalLabelKeldish" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKeldish">Келдыш, Мстислав Всеволодович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Keldish.jpg" alt="" class="modal-portraits-img">
							<p><strong>Мстисла́в Все́володович Ке́лдыш</strong> (28 января (10 февраля) 1911 года, Рига — 24 июня 1978 года, Москва) — советский учёный в области прикладной математики и механики, крупный организатор советской науки, один из идеологов советской космической программы. Президент Академии наук СССР (1961—1975).
							</p>
							<p>Академик АН СССР (1946; член-корреспондент 1943). Трижды Герой Социалистического Труда (1956, 1961, 1971). Лауреат Ленинской премии (1957) и двух Сталинских премий (1942, 1946). Член КПСС с 1949. Член ЦК КПСС (1961—1978).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Келдыш, Мстислав Всеволодович -->
			
			<!-- Шойгу, Сергей Кужугетович -->
			<a href="#" data-target="#modalShoigu" data-toggle="modal">
				<div class="img-Shoigu"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalShoigu" tabindex="-1" role="dialog" aria-labelledby="modalLabelShoigu" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelShoigu">Шойгу, Сергей Кужугетович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Shoigu.jpg" alt="" class="modal-portraits-img">
							<p><strong>Серге́й Кужуге́тович Шойгу́</strong> (тув. Сергей Күжүгет оглу Шойгу; род. 21 мая 1955, Чадан, Тувинская АО, РСФСР, СССР) — российский военный и государственный деятель. Министр обороны Российской Федерации с 6 ноября 2012 года. Генерал армии (2003). Герой Российской Федерации (1999). Заслуженный спасатель Российской Федерации (2000).
							</p>
							<p>Председатель Государственного комитета РСФСР и Российской Федерации по делам гражданской обороны, чрезвычайным ситуациям и ликвидации последствий стихийных бедствий (1991—1994), глава МЧС России (1994—2012), губернатор Московской области (2012).
							</p>
							Глава межрегионального движения «Единство» (1999—2001), сопредседатель партии «Единая Россия» (2001—2002, вместе с Ю. М. Лужковым и М. Ш. Шаймиевым), член высшего совета «Единой России»; основатель партии «Единая Россия».
							</p>
							<p>Президент Русского географического общества (с 2009).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Шойгу, Сергей Кужугетович -->
		<!-- Конец средний ряд -->
		<!-- нижний ряд -->
			<!-- Рокоссовский, Константин Константинович -->
			<a href="#" data-target="#modalRokossowski" data-toggle="modal">
				<div class="img-Rokossowski"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalRokossowski" tabindex="-1" role="dialog" aria-labelledby="modalLabelRokossowski" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelRokossowski">Рокоссовский, Константин Константинович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Rokossowski.jpg" alt="" class="modal-portraits-img">
							<p><strong>Константи́н Константи́нович (Ксаве́рьевич) Рокоссо́вский</strong> (польск. Konstanty Rokossowski; 9 [21] декабря 1896, Варшава, Царство Польское, Российская империя — 3 августа 1968, Москва, РСФСР, СССР) — советский и польский военачальник, дважды Герой Советского Союза (1944, 1945). Кавалер Ордена «Победа» (1945). Единственный в истории СССР маршал двух стран: Маршал Советского Союза (1944) и маршал Польши (1949). Командовал Парадом Победы 24 июня 1945 года на Красной площади в Москве. Один из крупнейших полководцев Второй мировой войны.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Рокоссовский, Константин Константинович -->
			
			<!-- Кузнецов, Николай Герасимович -->
			<a href="#" data-target="#modalKuznetsov" data-toggle="modal">
				<div class="img-Kuznetsov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalKuznetsov" tabindex="-1" role="dialog" aria-labelledby="modalLabelKuznetsov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelKuznetsov">Кузнецов, Николай Герасимович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Kuznetsov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Никола́й Гера́симович Кузнецо́в</strong> (11 (24) июля 1904, Медведки (ныне Котласского района Архангельской области) — 6 декабря 1974, Москва, РСФСР, СССР) — советский военно-морской деятель, Адмирал Флота Советского Союза (3 марта 1955). В 1939—1947 и 1951—1955 годах возглавлял советский Военно-морской флот (как Народный комиссар Военно-морского флота (1939—1946), Военно-морской Министр (1951—1953) и Главнокомандующий). Герой Советского Союза (1945). Член ЦК ВКП (б) в 1939—1956 годах, депутат Верховного Совета СССР 2-го и 4-го созывов. Его выдающаяся роль в Великой Отечественной войне стала достоянием общественности только в 1950—1980-е годы.
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Кузнецов, Николай Герасимович -->
			
			<!-- Жуков, Георгий Константинович -->
			<a href="#" data-target="#modalZhukov" data-toggle="modal">
				<div class="img-Zhukov"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalZhukov" tabindex="-1" role="dialog" aria-labelledby="modalLabelZhukov" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelZhukov">Жуков, Георгий Константинович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Zhukov.jpg" alt="" class="modal-portraits-img">
							<p><strong>Гео́ргий Константи́нович Жу́ков</strong> (19 ноября (1 декабря) 1896; Стрелковка, Малоярославецкий уезд, Калужская губерния, Российская империя — 18 июня 1974, Москва, РСФСР, СССР) — советский полководец. Маршал Советского Союза (1943), четырежды Герой Советского Союза (1939, 1944, 1945, 1956), кавалер двух орденов «Победа» (1944, 1945), множества других советских и иностранных орденов и медалей.
							</p>
							<p>В послевоенные годы получил народное прозвище «Маршал Победы». Министр обороны СССР (1955—1957). Член Президиума ЦК КПСС (29 июня—29 октября 1957)
							</p>
							<p>В ходе Великой Отечественной войны последовательно занимал должности начальника Генерального штаба, командующего фронтом, члена Ставки Верховного Главнокомандования, Заместителя Верховного Главнокомандующего Вооружёнными Силами СССР. В послевоенное время занимал пост Главкома Сухопутных войск, командовал Одесским, затем Уральским военными округами.
							</p>
							<p>После смерти Иосифа Сталина стал первым заместителем Министра обороны СССР, с 1955 года по 1957 год — Министром обороны СССР. В 1957 году исключён из состава ЦК КПСС, снят со всех постов в армии и в 1958 году отправлен в отставку.
						</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Жуков, Георгий Константинович -->
			
			<!-- Зыкина, Людмила Георгиевна -->
			<a href="#" data-target="#modalZikina" data-toggle="modal">
				<div class="img-Zikina"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalZikina" tabindex="-1" role="dialog" aria-labelledby="modalLabelZikina" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelZikina">Зыкина, Людмила Георгиевна</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Zikina.jpg" alt="" class="modal-portraits-img">
							<p><strong>Людми́ла Гео́ргиевна Зы́кина</strong> (10 июня 1929, Москва — 1 июля 2009, там же) — советская и российская певица, исполнительница русских народных песен, романсов, эстрадных песен. Герой Социалистического Труда (1987), народная артистка СССР (1973). Лауреат Ленинской (1970) и Государственной премии РСФСР имени М. И. Глинки (1983). Художественный руководитель и солистка Государственного академического русского народного ансамбля «Россия» (1977—2009).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Зыкина, Людмила Георгиевна -->
		<!-- Конец нижний ряд -->
		<!-- сидит -->
			<!-- Шукшин, Василий Макарович-->
			<a href="#" data-target="#modalShukshin" data-toggle="modal">
				<div class="img-Shukshin"></div>
			</a>
			<div class="modal fade bd-example-modal-lg" id="modalShukshin" tabindex="-1" role="dialog" aria-labelledby="modalLabelShukshin" style="display: none;" aria-hidden="true">
			  	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			    	<div class="modal-content">
			      		<div class="modal-header">
			        		<h5 class="modal-title" id="modalLabelShukshin">Шукшин, Василий Макарович</h5>
			        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          			<span aria-hidden="true">×</span>
			        		</button>
			      		</div>
			      		<div class="modal-body">
							<img src="images/portraits/Shukshin.jpg" alt="" class="modal-portraits-img">
							<p><strong>Васи́лий Мака́рович Шукши́н</strong> (25 июля 1929, село Сростки, Бийский район, Сибирский край — 2 октября 1974, станица Клетская, Волгоградская область) — советский кинорежиссёр, актёр, сценарист и писатель.
							</p>
							<p>Заслуженный деятель искусств РСФСР (1969). Лауреат Ленинской премии (1976 — посмертно), Государственной премии СССР (1971) и Государственной премии РСФСР им. братьев Васильевых (1967).
							</p>
			      		</div>
			      		<div class="modal-footer">
			        		<button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
			      		</div>
			    	</div>
			  	</div>
			</div>
			<!-- Конец Шукшин, Василий Макарович-->
		<!-- Конец сидит -->
	<!-- Конец Правое крыло, фрагмент 5 -->
<!-- КОНЕЦ ФРАГМЕНТОВ -->
	</body>
</html>
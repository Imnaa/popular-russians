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
								<h5 class="modal-title" id="modalLabelErmak"><?php echo $LANG['modalLabelErmak']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/ermak.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalErmak']?>
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
								<h5 class="modal-title" id="modalLabelBaranov"><?php echo $LANG['modalLabelBaranov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/baranov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalBaranov']?>
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
								<h5 class="modal-title" id="modalLabelOrlovskiy"><?php echo $LANG['modalLabelOrlovskiy']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Orlovskiy.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalOrlovskiy']?>
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
								<h5 class="modal-title" id="modalLabelKutuzov"><?php echo $LANG['modalLabelKutuzov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Kutuzov1.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKutuzov']?>
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
								<h5 class="modal-title" id="modalLabelUshakov"><?php echo $LANG['modalLabelUshakov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Ushakov_FF.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalUshakov']?>
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
								<h5 class="modal-title" id="modalLabelPlatonov"><?php echo $LANG['modalLabelPlatonov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Platov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalPlatonov']?>
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
								<h5 class="modal-title" id="modalLabelPushkin"><?php echo $LANG['modalLabelPushkin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Pushkin_AS.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalPushkin']?>
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
								<h5 class="modal-title" id="modalLabelErmolov"><?php echo $LANG['modalLabelErmolov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Alexei-jermolov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalErmolov']?>
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
								<h5 class="modal-title" id="modalLabelLermantov"><?php echo $LANG['modalLabelLermantov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Mikhail_lermontov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalLermantov']?>
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
								<h5 class="modal-title" id="modalLabelKoshka"><?php echo $LANG['modalLabelKoshka']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Koshka.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKoshka']?>
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
								<h5 class="modal-title" id="modalLabelMuravev"><?php echo $LANG['modalLabelMuravev']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Muravev.jpeg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalMuravev']?>
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
								<h5 class="modal-title" id="modalLabelDavidov"><?php echo $LANG['modalLabelDavidov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Denisdavydov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalDavidov']?>
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
								<h5 class="modal-title" id="modalLabelSuvorov"><?php echo $LANG['modalLabelSuvorov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Suvorov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalSuvorov']?>
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
								<h5 class="modal-title" id="modalLabelNakhimov"><?php echo $LANG['modalLabelNakhimov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Nakhimov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalNakhimov']?>
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
								<h5 class="modal-title" id="modalLabelTolstoiAK"><?php echo $LANG['modalLabelTolstoiAK']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/AKTolstoy.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalTolstoiAK']?>
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
								<h5 class="modal-title" id="modalLabelPrjevalski"><?php echo $LANG['modalLabelPrjevalski']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Prjevalski.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalPrjevalski']?>
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
								<h5 class="modal-title" id="modalLabelPirogov"><?php echo $LANG['modalLabelPirogov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Pirogov_1881.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalPirogov']?>
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
								<h5 class="modal-title" id="modalLabelTutchev"><?php echo $LANG['modalLabelTutchev']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/tutchev.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalTutchev']?>
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
								<h5 class="modal-title" id="modalLabelSevastopolskaya"><?php echo $LANG['modalLabelSevastopolskaya']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Sevastopolskaya.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalSevastopolskaya']?>
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
								<h5 class="modal-title" id="modalLabelGogol"><?php echo $LANG['modalLabelGogol']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/N.Gogol.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalGogol']?>
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
								<h5 class="modal-title" id="modalLabelTolstoiLN"><?php echo $LANG['modalLabelTolstoiLN']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Leo_Tolstoy,_portrait.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalTolstoiLN']?>
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
								<h5 class="modal-title" id="modalLabelFet"><?php echo $LANG['modalLabelFet']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Fet_by_Repin.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalFet']?>
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
								<h5 class="modal-title" id="modalLabelTurgenev"><?php echo $LANG['modalLabelTurgenev']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Turgenev_by_Repin.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalTurgenev']?>
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
								<h5 class="modal-title" id="modalLabelSeslavin"><?php echo $LANG['modalLabelSeslavin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Seslavin1812.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalSeslavin']?>
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
								<h5 class="modal-title" id="modalLabelKulnev"><?php echo $LANG['modalLabelKulnev']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Kulnev.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKulnev']?>
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
								<h5 class="modal-title" id="modalLabelLeskov"><?php echo $LANG['modalLabelLeskov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Leskov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalLeskov']?>
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
								<h5 class="modal-title" id="modalLabelDostoevski"><?php echo $LANG['modalLabelDostoevski']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Dostoevski.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalDostoevski']?>
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
								<h5 class="modal-title" id="modalLabelKronshtadtski"><?php echo $LANG['modalLabelKronshtadtski']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Kronshtadtski.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKronshtadtski']?>
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
								<h5 class="modal-title" id="modalLabelGermogen"><?php echo $LANG['modalLabelGermogen']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Germogen.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalGermogen']?>
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
								<h5 class="modal-title" id="modalLabelRodionov"><?php echo $LANG['modalLabelRodionov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Rodionov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalRodionov']?>
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
								<h5 class="modal-title" id="modalLabelIoann"><?php echo $LANG['modalLabelIoann']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Ioann.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalIoann']?>
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
								<h5 class="modal-title" id="modalLabelIlii"><?php echo $LANG['modalLabelIlii']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Ilii.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalIlii']?>
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
								<h5 class="modal-title" id="modalLabelBulgakov"><?php echo $LANG['modalLabelBulgakov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Bulgakov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalBulgakov']?>
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
								<h5 class="modal-title" id="modalLabelMather"><?php echo $LANG['modalLabelMather']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<?php echo $LANG['modalMather']?>
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
								<h5 class="modal-title" id="modalLabelGrandfather"><?php echo $LANG['modalLabelGrandfather']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<?php echo $LANG['modalGrandfather']?>
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
								<h5 class="modal-title" id="modalLabelBoy"><?php echo $LANG['modalLabelBoy']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<?php echo $LANG['modalBoy']?>
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
								<h5 class="modal-title" id="modalLabelShalyapin"><?php echo $LANG['modalLabelShalyapin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Feodor_Chaliapin_signed.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalShalyapin']?>
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
								<h5 class="modal-title" id="modalLabelValiceva"><?php echo $LANG['modalLabelValiceva']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Valiceva.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalValiceva']?>
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
								<h5 class="modal-title" id="modalLabelTalkov"><?php echo $LANG['modalLabelTalkov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Talkov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalTalkov']?>
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
								<h5 class="modal-title" id="modalLabelByrlyaev"><?php echo $LANG['modalLabelByrlyaev']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Byrlyaev.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalByrlyaev']?>
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
								<h5 class="modal-title" id="modalLabelBelov"><?php echo $LANG['modalLabelBelov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Belov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalBelov']?>
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
								<h5 class="modal-title" id="modalLabelGanichev"><?php echo $LANG['modalLabelGanichev']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Ganichev.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalGanichev']?>
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
								<h5 class="modal-title" id="modalLabelZaharchenko"><?php echo $LANG['modalLabelZaharchenko']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Zaharchenko.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalZaharchenko']?>
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
								<h5 class="modal-title" id="modalLabelShuhov"><?php echo $LANG['modalLabelShuhov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Shukhov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalShuhov']?>
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
								<h5 class="modal-title" id="modalLabelSurikov"><?php echo $LANG['modalLabelSurikov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Surikov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalSurikov']?>
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
								<h5 class="modal-title" id="modalLabelEsenin"><?php echo $LANG['modalLabelEsenin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Sergey_Yesenin.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalEsenin']?>
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
								<h5 class="modal-title" id="modalLabelRasputin"><?php echo $LANG['modalLabelRasputin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Rasputin.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalRasputin']?>
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
								<h5 class="modal-title" id="modalLabelMihaylov"><?php echo $LANG['modalLabelMihaylov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Mihaylov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalMihaylov']?>
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
								<h5 class="modal-title" id="modalLabelKlykov"><?php echo $LANG['modalLabelKlykov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Klykov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKlykov']?>
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
								<h5 class="modal-title" id="modalLabelMihalkov"><?php echo $LANG['modalLabelMihalkov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Mihalkov.jpeg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalMihalkov']?>
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
								<h5 class="modal-title" id="modalLabelStolypin"><?php echo $LANG['modalLabelStolypin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Stolypin.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalStolypin']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
							<?php echo $LANG['modalUshakov']?>
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
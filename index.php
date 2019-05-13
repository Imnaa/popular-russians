<?php
	error_reporting(E_ALL);
	// Определяем язык -->
	$isLang = isset($_GET["lang"])? $_GET["lang"]: "ru"; //Берём значение GET-параметра, либо, если его нет, то устанавливаем русский

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

<!-- <body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0"> -->
<body>

<!-- Меню -->
	<ul class="navbar cf">
		<li><a href="#" data-target="#modalAboutSite" data-toggle="modal"><img src="./images/info_ico.png"><?php echo $LANG['btnAboutSite'];?></a></li>
		<?php 
			if ($isLang == "en") { ?>
				<li><a href="index.php?lang=ru"><img src="./images/rus_ico.png">Русскоязычная версия</a></li>
			<?php } else {?>
			<li><a href="index.php?lang=en"><img src="./images/eng_ico.png">English version</a></li>
		<?php } ?>
		<li><a href="#" data-target="#modalContact" data-toggle="modal"><img src="./images/contact_ico.png"><?php echo $LANG['btnContact'];?></a></li>
	</ul>
	<!-- Мобальное окно About -->
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
	<!-- Модальное окно ОБРАТНАЯ СВЯЗЬ -->
	<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="modalLabelContact" style="display: none;" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="modalLabelContact"><?php echo $LANG['modalLabelContact']?></h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">×</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	      			<!-- ТУТ ОБРАТНАЯ СВЯЗЬ -->
					  <form action="mail.php" method="post">
					  <fieldset>
							<div class="form-group">
							<label for="name"><?php echo $LANG['feedbackName']?></label>
							<input type="name" name="name" class="form-control" id="name" placeholder="<?php echo $LANG['feedbackHitName']?>">
							</div>
							<div class="form-group">
							<label for="email1"><?php echo $LANG['feedbackEmail']?></label>
							<input type="email" name="email" class="form-control" id="email1" placeholder="<?php echo $LANG['feedbackHitEmail']?>">
							</div>
							<div class="form-group">
							<label for="phone"><?php echo $LANG['feedbackPhone']?></label>
							<input type="phone" name="phone" class="form-control" id="phone" placeholder="<?php echo $LANG['feedbackHitPhone']?>">
							</div>
							<div class="form-group">
							<label for="message"><?php echo $LANG['feedbackMessage']?></label>
							<textarea class="form-control" name="message" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-info"><?php echo $LANG['feedbackSendMessage']?></button>
					  </fieldset>
					  </form>


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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelSkobelev"><?php echo $LANG['modalLabelSkobelev']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Skobelev.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalSkobelev']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelBunin"><?php echo $LANG['modalLabelBunin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Ivan_Bunin_(sepia).jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalBunin']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelSholokhov"><?php echo $LANG['modalLabelSholokhov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Sholokhov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalSholokhov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelBondarchuk"><?php echo $LANG['modalLabelBondarchuk']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Bondarchuk.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalBondarchuk']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelPolikarpov"><?php echo $LANG['modalLabelPolikarpov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Polikarpov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalPolikarpov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelChechneva"><?php echo $LANG['modalLabelChechneva']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Chechneva.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalChechneva']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelKhrennikov"><?php echo $LANG['modalLabelKhrennikov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Khrennikov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKhrennikov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelKozhedub"><?php echo $LANG['modalLabelKozhedub']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Kozhedub.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKozhedub']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelAndreev"><?php echo $LANG['modalLabelAndreev']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Andreev.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalAndreev']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelTulenin"><?php echo $LANG['modalLabelTulenin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Tulenin.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalTulenin']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelRubcov"><?php echo $LANG['modalLabelRubcov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Rubcov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalRubcov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelSviridov"><?php echo $LANG['modalLabelSviridov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Sviridov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalSviridov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelVernadsky"><?php echo $LANG['modalLabelVernadsky']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Vernadsky.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalVernadsky']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelGagarin"><?php echo $LANG['modalLabelGagarin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Gagarin.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalGagarin']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelKurchatov"><?php echo $LANG['modalLabelKurchatov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Kurchatov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKurchatov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelGlazunov"><?php echo $LANG['modalLabelGlazunov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Glazunov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalGlazunov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelKorolow"><?php echo $LANG['modalLabelKorolow']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Korolow.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKorolow']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelKeldish"><?php echo $LANG['modalLabelKeldish']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Keldish.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKeldish']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelShoigu"><?php echo $LANG['modalLabelShoigu']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Shoigu.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalShoigu']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelRokossowski"><?php echo $LANG['modalLabelRokossowski']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Rokossowski.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalRokossowski']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelKuznetsov"><?php echo $LANG['modalLabelKuznetsov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Kuznetsov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalKuznetsov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelZhukov"><?php echo $LANG['modalLabelZhukov']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Zhukov.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalZhukov']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelZikina"><?php echo $LANG['modalLabelZikina']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Zikina.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalZikina']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
								<h5 class="modal-title" id="modalLabelShukshin"><?php echo $LANG['modalLabelShukshin']?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="images/portraits/Shukshin.jpg" alt="" class="modal-portraits-img">
								<?php echo $LANG['modalShukshin']?>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $LANG['close']?></button>
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
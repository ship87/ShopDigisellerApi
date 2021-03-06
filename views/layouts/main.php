<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<header>
	<nav class="navbar navbar-default navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?= Yii::$app->homeUrl ?>">Главная</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>garanty">Гарантии</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>feedbacks">Отзывы</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>discount">Скидка</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>howbuy">Как покупать?</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>help">Помощь</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="hidden-xs">
						<a href="<?= Yii::$app->homeUrl ?>basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
							Корзина
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							Валюта
							<i class="fa fa-<?= empty($_SESSION['active_currency']) ? 'rub' : strtolower($_SESSION['active_currency']) ?> del" aria-hidden="true"></i>
							<span id="currency" class="caret"></span></a>
						<ul class="dropdown-menu">
							<li id="rub">
								<a href="<?= insertValueInUrl('active_currency', 'rub') ?>"><i class="fa fa-rub" aria-hidden="true"></i>
									Рубли </a></li>
							<li id="usd">
								<a href="<?= insertValueInUrl('active_currency', 'usd') ?>"><i class="fa fa-usd" aria-hidden="true"></i>
									Доллары </a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container -->
	</nav>
	<div class="container main row">
		<div class="col-sm-3 col-md-3 col-lg-3 logo">
			<a href="#"><img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/logo.png"></a>
		</div>
		<div class="col-sm-5 col-md-5 col-lg-6 search">
			<form class="form-top-search" method="get" action="<?= Yii::$app->homeUrl.'product' ?>">
				<input id="search" name="search_text" class="form-control" autocomplete="off" placeholder="Поиск среди 2700 товаров" value="">
				<button class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>

				<div id="header_search" class="live_search">

				</div>
			</form>
		</div>
		<div class="col-sm-4 col-md-4 col-lg-3 buttons">
			<div class="btn-group">
				<button class="hidden-lg hidden-md hidden-sm cart">
					<i class="fa fa-shopping-cart" aria-hidden="true"></i> Корзина <span class="badge">4</span></button>
				<button class="login"><a class="api_reg" href="<?=Yii::$app->params['urlRegistrationApi'] ?>" target="_blank">Вход</a></button>
				<button class="reg"><a class="api_reg" href="<?=Yii::$app->params['urlRegistrationApi'] ?>" target="_blank">Регистрация</a></button>
			</div>
		</div>
	</div>
</header>

<!--Окончание модуля header-->

<?php $this->beginBody() ?>


<div class="wrap">
	<!--
    <?php
	NavBar::begin([
		'brandLabel' => 'My Company',
		'brandUrl'   => Yii::$app->homeUrl,
		'options'    => [
			'class' => 'navbar-inverse navbar-fixed-top',
		],
	]);
	echo Nav::widget([
		'options' => ['class' => 'navbar-nav navbar-right'],
		'items'   => [
			['label' => 'Товары', 'url' => ['/admin/products']],
			['label' => 'Категории товара', 'url' => ['/admin/categories']],
			['label' => 'Свойства товара', 'url' => ['/admin/properties']],
			['label' => 'Изображения', 'url' => ['/admin/images']],
			['label' => 'Настройки магазина', 'url' => ['/admin/settings']],
			Yii::$app->user->isGuest ? (
			['label' => 'Войти', 'url' => ['/site/login']]
			) : (
				'<li>'
				. Html::beginForm(['/site/logout'], 'post')
				. Html::submitButton(
					'Logout (' . Yii::$app->user->identity->username . ')',
					['class' => 'btn btn-link logout']
				)
				. Html::endForm()
				. '</li>'
			)
		],
	]);
	NavBar::end();
	?>
-->
	<div class="container">
		<?= $content ?>
	</div>
</div>
</div>

<!--Модуль футер-->
<footer>
	<div class="container main">
		<div class="row footer_link">
			<div class="col-sm-3 col-md-3 col-lg-3 hidden-xs">
				<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/logo.png">
			</div>
			<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
				<ul>
					<li><a href="<?= Yii::$app->homeUrl ?>">Главная</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>garanty">Гарантии</a></li>
				</ul>
			</div>
			<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
				<ul>
					<li><a href="<?= Yii::$app->homeUrl ?>feedbacks">Отзывы</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>discount">Скидки</a></li>
				</ul>
			</div>
			<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
				<ul>
					<li><a href="<?= Yii::$app->homeUrl ?>howbuy">Как покупать?</a></li>
					<li><a href="<?= Yii::$app->homeUrl ?>help">Помощь</a></li>
				</ul>
			</div>
		</div>
		<div class="pay_types pay">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/WMZ.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/BTC.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/QSR.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/PCR.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/RCC.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/MTS.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/BLN.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/MGF.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/TL2.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/RUB.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/BNK.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/PRR.png">
			<img class="img-responsive" src="<?= Yii::$app->homeUrl ?>images/PPZ.png">
		</div>
		<div class="disclamer">
			<span>SteamGamer.ru © 2016-2017. Все права защищены</span>
			<p>Все названия продуктов, компаний и марок, логотипы и товарные знаки являются собственностью
				соответствующих владельцев. Этот сайт не был одобрен Корпорацией Valve и не аффилирован с Корпорацией
				Valve или ее лицензиаров.
				Все продаваемые ключи закупаются у официальных дилеров, работающих напрямую с издателями.</p>
		</div>
	</div>
</footer>

<?php $this->endBody() ?>
<script>
	function calculateFields() {
		var filter_name = "";
		for (filter_name in arr_range) {
			var start = document.getElementsByName('btn_start_' + filter_name)[0].value;
			var end = document.getElementsByName('btn_end_' + filter_name)[0].value;
			if (arr_range[filter_name] === 'value_date') {
				start = start + "-01-01 00:00:00";
				end = end + "-12-31 23:59:59";
			}
			document.getElementsByName(filter_name)[0].value = start + '|' + end;
		}
		var filter_name = "";
		for (filter_name in arr_multiselect) {
			var field = "";

			for (var i = 0; i < arr_multiselect[filter_name]; i++) {
				if (document.getElementsByName(filter_name + i)[0].checked) {
					field = document.getElementsByName(filter_name + i)[0].value + "," + field;
					document.getElementsByName(filter_name + i)[0].value = "";
					document.getElementsByName(filter_name + i)[0].checked = false;
				}
			}

			if (field === "") {
				$("input[name='" + filter_name + "']").remove();
			} else {
				document.getElementsByName(filter_name)[0].value = field;
			}
		}

		var first_price = document.getElementsByName('product_price_first')[0].value.replace(",", ".");
		var last_price = document.getElementsByName('product_price_last')[0].value.replace(",", ".");
		$("input[name='product_price_first']").remove();
		$("input[name='product_price_last']").remove();
		document.getElementsByName('product_price')[0].value = first_price + '|' + last_price;

	}

	function saveViewProducts(view_products) {
		$.ajax({
			type: "POST",
			url: "<?= Yii::$app->homeUrl . "product" ?>",
			async: true,
			data: "view_products=" + view_products,
		});
	}

	function saveSortProducts(sort_products) {
		$.ajax({
			type: "POST",
			url: "<?= Yii::$app->homeUrl . "product" ?>",
			async: true,
			data: "sort=" + sort_products + "&save_sort=true",
		});
	}

	$('document').ready(function () {

		$('#search').keyup(function(){
			var text = this.value;
			if (text!=="") {
				$('.live_search').show().css({"padding":'0'});
				$.ajax({
					type: "POST",
					url: "<?= Yii::$app->homeUrl . "product" ?>",
					async: true,
					data: "search_text=" + text + "&live_search_text=true",
					success: function (response) {
						if (!response) {$('#header_search').hide();}
						$('#header_search').html(response);
					}
				});
			} else {
				$('#header_search').html("").css({"display":"none"});
			}
		})

		$('#search').blur(function(){
			var that = this;
			setTimeout(function(){
				that.value = '';
				$('#header_search').css({"display":"none"});
			}, 400)
		})

		$('.nav-tabs a:first').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
		})

	})

</script>
</body>
</html>
<?php $this->endPage() ?>
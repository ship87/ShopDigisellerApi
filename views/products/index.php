<?php

use app\components\ShopLinkPager;
use app\components\FiltersProducts;

?>



<div class="container main catalog_wrapper row">
	<div class="col-sm-4 col-md-4 col-lg-4">
		<form class="list_sidebar" action="" method="get">
			<div class="column">
				<div class="filter">
					<a class="search_param" data-toggle="collapse" href="#collapseSearch" aria-expanded="true" aria-controls="collapseExample">
						<i class="fa fa-angle-up" aria-hidden="true"></i> Поиск
					</a>
					<div class="collapse in" id="collapseSearch">
						<div class="well">
							<input class="form-control" autocomplete="off">
						</div>
					</div>
				</div>
				<div class="filter">
					<a class="search_param" data-toggle="collapse" href="#collapsePrice" aria-expanded="true" aria-controls="collapseExample">
						<i class="fa fa-angle-up" aria-hidden="true"></i> Цена
					</a>
					<div class="collapse in" id="collapsePrice">
						<div class="well">
							<input class="form-control price_range" autocomplete="off" placeholder="От 0">
							<input class="form-control price_range" autocomplete="off" placeholder="До 9999">
						</div>
					</div>
				</div>

				<?php

				echo FiltersProducts::widget();

				?>

				<div class="filter">
					<a class="search_param" data-toggle="collapse" href="#collapseActivate" aria-expanded="true" aria-controls="collapseExample">
						<i class="fa fa-angle-up" aria-hidden="true"></i> Активация
					</a>
					<div class="collapse in" id="collapseActivate">
						<div class="well">
							<input type="checkbox" class="check" id="steam">
							<label for="steam" class="label_check"><img src="images/steamlogo.png"> Steam</label>
							<input type="checkbox" class="check" id="origin">
							<label for="origin" class="label_check"><img src="images/Origin.png"> Origin</label>
							<input type="checkbox" class="check" id="uplay">
							<label for="uplay" class="label_check"><img src="images/uplay.png"> Uplay</label>
							<input type="checkbox" class="check" id="battle">
							<label for="battle" class="label_check"><img src="images/battlenet.png"> Battle.net</label>
						</div>
					</div>
				</div>
				<div class="filter">
					<a class="search_param" data-toggle="collapse" href="#collapseRus" aria-expanded="true" aria-controls="collapseExample">
						<i class="fa fa-angle-up" aria-hidden="true"></i> Наличие русского языка
					</a>

					<div class="collapse in" id="collapseRus">
						<div class="well">
							<input type="checkbox" class="check" id="rus">
							<label for="rus" class="label_check"> Есть</label>
							<input type="checkbox" class="check" id="no_rus">
							<label for="no_rus" class="label_check"> Нет</label>
						</div>
					</div>
				</div>
				<div class="filter">
					<a class="search_param" data-toggle="collapse" href="#collapseGenre" aria-expanded="true" aria-controls="collapseExample">
						<i class="fa fa-angle-up" aria-hidden="true"></i> Жанры
					</a>
					<div class="collapse in" id="collapseGenre">
						<div class="well row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input type="checkbox" class="check" id="shoot">
								<label for="shoot" class="label_check"> Шутер</label>
								<input type="checkbox" class="check" id="action">
								<label for="action" class="label_check"> Экшен</label>
								<input type="checkbox" class="check" id="ride">
								<label for="ride" class="label_check"> Гонки</label>
								<input type="checkbox" class="check" id="adventure">
								<label for="adventure" class="label_check"> Приклю&shy;чения</label>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input type="checkbox" class="check" id="rpg">
								<label for="rpg" class="label_check"> РПГ</label>
								<input type="checkbox" class="check" id="horror">
								<label for="horror" class="label_check"> Хоррор</label>
								<input type="checkbox" class="check" id="indi">
								<label for="indi" class="label_check"> Инди</label>
								<input type="checkbox" class="check" id="strat">
								<label for="strat" class="label_check"> Стратегия</label>
							</div>
						</div>
					</div>
				</div>

				<div class="filter">
					<a class="search_param" data-toggle="collapse" href="#collapseAccess" aria-expanded="true" aria-controls="collapseExample">
						<i class="fa fa-angle-up" aria-hidden="true"></i> Доступность
					</a>
					<div class="collapse in" id="collapseAccess">
						<div class="well row">
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input type="checkbox" class="check" id="ready">
								<label for="ready" class="label_check"> Игра вышла</label>
								<input type="checkbox" class="check" id="early">
								<label for="early" class="label_check"> Ранний доступ</label>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
								<input type="checkbox" class="check" id="pre">
								<label for="pre" class="label_check"> Предзаказ</label>
							</div>
						</div>
					</div>
				</div>
				<div width="100%">
					<button type="submit" class="show">Показать</button>
				</div>
				<span class="reset">Сброс фильтров</span>
			</div>
		</form>
	</div>
	<div class="col-sm-8 col-md-8 col-lg-8">
		<div class="column">
			<div class="catalog_top">
				<div class="sort pull-right">
					<span>Сортировать по:</span>
					<span class="dropdown" id="sort_list">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="sort_type">Популярности </span><span class="caret"></span>
					</a>
				<ul class="dropdown-menu">
					<a class="sort_item" href=""><li>Цене, сначала недорогие</li></a>
					<a class="sort_item" href=""><li>Цене, сначала дорогие</li></a>
					<a class="sort_item" href=""><li>Популярности</li></a>
					<a class="sort_item" href=""><li>Названию</li></a>
					<a class="sort_item" href=""><li>Дате выхода, сначала новые</li></a>
					<a class="sort_item" href=""><li>Дате выхода, сначала старые</li></a>
				</ul>
			</span>
					<i id="list" class="fa fa-list-ul active_state" aria-hidden="true"></i>
					<i id="net" class="fa fa-th-large" aria-hidden="true"></i>
				</div>
			</div>

			<?php foreach ($products as $key => $value): ?>
				<a href="<?= Yii::$app->homeUrl . 'product/' . $value['product_id'] . '/' . $value['chpu'] ?>">
					<div class="result_main" data-view="true">
						<?php if (!empty($value['product_thumbnail_path']) and !empty($value['product_thumbnail_name'])) { ?>

							<div class="preview main_search pull-left">
								<img class="img-responsive" src="<?= Yii::$app->homeUrl . $value['product_thumbnail_path'] . '/' . $value['product_thumbnail_name'] ?>">
							</div>

						<?php } else { ?>
							<div class="preview main_search pull-left">
								<img class="img-responsive" src="<?= Yii::$app->homeUrl . 'images/thumbnails/1.jpg' ?>">
							</div>
						<?php } ?>
						<div class="item_name pull-left">
							<p>
								<?= $value['product_title'] ?>
							</p>
						</div>

						<div class="item_price pull-right">
							<span><?= $value['final_product_price'] ?></span>
							<span class="valuta"><?= ' ' . $active_currency['currency_title'] ?></span>
							<?php if (!empty($value['product_discount'])) { ?>
								<span nowrap class="discount">-<?= $value['product_discount'] ?> %</span>
							<?php } ?>
						</div>
					</div>
				</a>
				<hr>
			<?php endforeach; ?>

		</div>
		<nav aria-label="Page navigation" class="page_nav">

			<?php

			echo ShopLinkPager::widget([
				'pagination' => $pagination,
					'prevPageLabel' => '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
					'nextPageLabel' => '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
					'prevPageCssClass' => '',
					'nextPageCssClass' => '',
					'disabledPageCssClass' => '',
			]);
			?>

		</nav>
	</div>
</div>
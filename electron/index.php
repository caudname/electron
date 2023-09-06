<?php
	require("includes/db_connect.php");
	session_start();
	include ("includes/header.php");
?>

	<!-- Контент сайта -->
	<main>
		</div>
		<div class="container">
			<div class="cats" id="catalog">
				<div class="cats-grid">
					<div class="cat">
						<a href="cats.php?category=Компьютерная техника" class="cat-link">
							<div class="cat-block computer">
								<div class="cat-image-block">
									<img src="images/computer/computer.png">
								</div>
								<h3 class="cat-title">Компьютерная<br> техника</h3>
							</div>
						</a>
					</div>

					<div class="cat">
						<a href="cats.php?category=Офисная техника и сети" class="cat-link">
							<div class="cat-block office">
								<div class="cat-image-block">
									<img src="images/office/office.png">
								</div>
								<h3 class="cat-title">Офисная<br> техника</h3>
							</div>
						</a>
					</div>

					<div class="cat">
						<a href="cats.php?category=Игры, развлечения, хобби" class="cat-link">
							<div class="cat-block games">
								<div class="cat-image-block">
									<img src="images/games/games.png">
								</div>
								<h3 class="cat-title">Игры,<br> развлечения,<br> хобби</h3>
							</div>
						</a>
					</div>

					<div class="cat">
						<a href="cats.php?category=Климатическая техника" class="cat-link">
							<div class="cat-block climate">
								<div class="cat-image-block">
									<img src="images/climate/climate.png">
								</div>
								<h3 class="cat-title">Климатическая<br> техника</h3>
							</div>
						</a>
					</div>

					<div class="cat">
						<a href="cats.php?category=Бытовая техника" class="cat-link">
							<div class="cat-block appliances">
								<div class="cat-image-block">
									<img src="images/appliances/appliances.png">
								</div>
								<h3 class="cat-title">Бытовая<br> техника</h3>
							</div>
						</a>
					</div>

					<div class="cat">
						<a href="cats.php?category=Телевизоры, аудио, видео" class="cat-link">
							<div class="cat-block tv">
								<div class="cat-image-block">
									<img src="images/TV/TV.png">
								</div>
								<h3 class="cat-title">Телевизоры,<br> аудио,<br> видео</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
			

			<div class="products" >
				<h1 id="new-products" class="title">Новые продукты</h1>
				<div class="products-grid">
					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=105" class="products-image-link">
								<img src="images/computer/laptops/laptops1.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
							<a href="products.php?podcategory=Ноутбуки" class="product-cat-link">
							НОУТБУКИ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=105" class="products-title-link">
							Ноутбук Honor MagicBook D15 15.6'' (5301AELH) серый
							</a>
						</div>
						<div class="products-price-block">
							83140 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="105">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=116" class="products-image-link">
								<img src="images/computer/monitors/monitors6.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
							<a href="products.php?podcategory=Мониторы" class="product-cat-link">
							МОНИТОРЫ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=116" class="products-title-link">
							Монитор Xiaomi RMGMNT238HF 23,8" черный
							</a>
						</div>
						<div class="products-price-block">
							16500 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="116">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=111" class="products-image-link">
								<img src="images/computer/laptops/laptops7.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
							<a href="products.php?podcategory=Ноутбуки" class="product-cat-link">
							НОУТБУКИ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=111" class="products-title-link">
							Ноутбук игровой Acer Nitro 5 AN515-57-57DF 15.6'' (NH.QBWER.005)

							</a>
						</div>
						<div class="products-price-block">
							66276 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="111">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=201" class="products-image-link">
								<img src="images/Games/game_console/game_console1.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
						<a href="products.php?podcategory=Игровые приставки" class="product-cat-link">
						ИГРОВЫЕ ПРИСТАВКИ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=201" class="products-title-link">
							Игровая приставка Sony PlayStation 5
							</a>
						</div>
						<div class="products-price-block">
							47990 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="201">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=32" class="products-image-link">
								<img src="images/appliances/kbt/kbt8.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
						<a href="products.php?podcategory=Крупная бытовая техника" class="product-cat-link">
						КРУПНАЯ БЫТОВАЯ ТЕХНИКА
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=32" class="products-title-link">
							Холодильник LG GR-X24FQEKM бежевый
							</a>
						</div>
						<div class="products-price-block">
						    284400 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="32">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=168" class="products-image-link">
								<img src="images/climate/ventilyatory/ventilyatory8.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
						 <a href="products.php?podcategory=Вентиляторы" class="product-cat-link">
						 ВЕНТИЛЯТОРЫ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=168" class="products-title-link">
							Вентилятор напольный Vitek VT-1933 серебристый
							</a>
						</div>
						<div class="products-price-block">
							15995 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="168">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=41" class="products-image-link">
								<img src="images/office/for_office/for_office1.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">	
							<a href="products.php?podcategory=Офисная техника" class="product-cat-link">
							ОФИСНАЯ ТЕХНИКА
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=41" class="products-title-link">
							МФУ струйный Epson L3251
							</a>
						</div>
						<div class="products-price-block">
							28080 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="41">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=90" class="products-image-link">
								<img src="images/computer/Computers/Computers2.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block"> 
							<a href="products.php?podcategory=Компьютеры" class="product-cat-link">
							КОМПЬЮТЕРЫ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?90" class="products-title-link">
							Компьютер на базе CPU Intel Core i5-11400F + NVIDIA GeForce RTX 3060
							</a>
						</div>
						<div class="products-price-block">
							97053 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="90">Добавить в корзину</a>
						</div>
					</div>


				</div>
			</div>

			<div class="products">
				<h1 id="popular" class="title">Популярные</h1>
				<div class="products-grid">
					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=57" class="products-image-link">
								<img src="images/office/net/net1.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
						<a href="products.php?podcategory=Сетевое оборудование" class="product-cat-link">
						СЕТЕВОЕ ОБОРУДОВАНИЕ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=57" class="products-title-link">
							Wi-Fi роутер Tenda AC23
							</a>
						</div>
						<div class="products-price-block">
							3790 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="57">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=117" class="products-image-link">
								<img src="images/computer/monitors/monitors5.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
							<a href="products.php?podcategory=Мониторы" class="product-cat-link">
							МОНИТОРЫ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=117" class="products-title-link">
							Монитор AOC AGON AG273FXE 27" черный
							</a>
						</div>
						<div class="products-price-block">
							70295 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="117">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=186" class="products-image-link">
								<img src="images/TV/tv/tv2.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
							<a href="products.php?podcategory=Телевизоры" class="product-cat-link">
							ТЕЛЕВИЗОРЫ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=186" class="products-title-link">
							Телевизор TCL 50C635 50" (125 см) черный
							</a>
						</div>
						<div class="products-price-block">
						  70295 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="186">Добавить в корзину</a>
						</div>
					</div>

					<div class="product">
						<div class="products-image-block">
							<a href="product.php?id=208" class="products-image-link">
								<img src="images/Games/game_console/game_console8.jfif" class="products-image">
							</a>
						</div>
						<div class="products-cat-block">
						<a href="products.php?podcategory=Игровые приставки" class="product-cat-link">
						ИГРОВЫЕ ПРИСТАВКИ
						</a>
						</div>
						<div class="products-title-block">
							<a href="product.php?id=208" class="products-title-link">
							Игровая приставка Microsoft Xbox Series S
							</a>
						</div>
						<div class="products-price-block">
							49950 руб
						</div>
						<div class="products-buy-block">
							<a href="#" class="products-buy" id="208">Добавить в корзину</a>
						</div>
					</div>
				</div>
			</div>

		</div>
	</main>

<?php
	include ("includes/footer.php");
?>
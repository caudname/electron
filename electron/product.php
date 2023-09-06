<?php
	require ("includes/db_connect.php");
	session_start();
	$id = $_GET["id"];

	include ("includes/header.php");
?>

	<!-- Контент сайта -->
	<main>
		<div class="container">

<?php
		$query = "SELECT * FROM products WHERE id = '$id'";
		$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);

			echo '
			<div class="product-block">
				<div class="product-image-block">
					<img src="images/'.$row["image"].'" class="product-image">
				</div>
				<div class="product-info">
					<div class="product-title">
						'.$row["title"].'
					</div>
					<div class="product-cat">
						<a href="cats.php?category='.$row["category"].'" class="product-cat-link">
							'.$row["category"].'
						</a><span class="product-cat-arrow"> > </span>
						<a href="products.php?podcategory='.$row["podcategory"].'" class="product-cat-link">
							'.$row["podcategory"].'
						</a>
					</div>
					<div class="product-price-block">
						<span class="price-block">Цена: </span>'.$row["price"].' руб
					</div>
					
					<div class="product-buy-block">
						<a href="#" class="products-buy" id="'.$row["id"].'">Добавить в корзину</a>
					</div>
				</div>
					
			</div>

			<div class="product-description">
				<h1 class="main-title">Описание</h1>
				<p class="product-description-text">'.$row["description"].'</p>
			</div>
			';
		}
?>


		</div>
	</main>

<?php
	include ("includes/footer.php");
?>
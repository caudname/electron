<?php
	require("includes/db_connect.php");
	session_start();
	$searchText = $_GET["search-text"];
	include ("includes/header.php");
?>

	<!-- Контент сайта -->
	<main>
				
		<div class="container">
			<div class="products" >
				<h1 class="title">Результаты поиска: <?php echo $searchText; ?></h1>
				
<?php
		$query = "SELECT * FROM products WHERE title LIKE '%$searchText%'";
		$result = mysqli_query($link, $query);

		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			echo '<div class="products-grid">';

			do {
			echo '
			<div class="product">
				<div class="products-image-block">
					<a href="product.php?id='.$row["id"].'" class="products-image-link">
						<img src="images/'.$row["image"].'" class="products-image">
					</a>
				</div>
				<div class="products-cat-block">
					'.$row["podcategory"].' 
				</div>
				<div class="products-title-block">
					<a href="product.php?id='.$row["id"].'" class="products-title-link">
						'.$row["title"].'
					</a>
				</div>
				<div class="products-price-block">
					'.$row["price"].' руб
				</div>
				<div class="products-buy-block">
					<a href="#" class="products-buy" id="'.$row["id"].'">Добавить в корзину</a>
				</div>
			</div>
			';

			} while ( $row = mysqli_fetch_array($result) );
			echo '</div>';
		} else {
			echo '<h1 class="title">Товаров не найдено</h1>';
		}
?>

			</div>
		</div>
	</main>

<?php
	include ("includes/footer.php");
?>
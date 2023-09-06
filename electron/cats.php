<?php
	require ("includes/db_connect.php");
	session_start();
	$category = $_GET["category"];

	include ("includes/header.php");
?>

	<!-- Контент сайта -->
	<main>
		<div class="container">
			<div class="cats" id="catalog">
				<div class="title"><h1><?php echo $category; ?></h1></div>
				<div class="cats-grid">
<?php
				$query = "SELECT * FROM categories WHERE category = '$category'";
				$result = mysqli_query($link, $query);
				if (mysqli_num_rows($result) > 0) {
					$row = mysqli_fetch_array($result);
					
					do {
					echo '
					<div class="cat">
						<a href="products.php?podcategory='.$row["podcategory"].'" class="cat-link">
							<div class="cat-block computer">
								<div class="cat-image-block">
									<img src="'.$row["image"].'">
								</div>
								<h3 class="cat-title">'.$row["podcategory"].'</h3>
							</div>
						</a>
					</div>
						';
					} while ( $row = mysqli_fetch_array($result) );
				}
				
?>

				</div>
			</div>
		</div>
	</main>
<?php
	include ("includes/footer.php");
?>
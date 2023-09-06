<?php
	require("includes/db_connect.php");
	session_start();

	include ("includes/header.php");
?>

	<!-- Контент сайта -->
	<main>
		<div class="container">
			<div class="cart">
<?php

$result = mysqli_query($link,"SELECT * FROM cart,products WHERE cart.ip = '{$_SERVER["REMOTE_ADDR"]}' AND products.id = cart.product_id");
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
	do {
		$cartCount = $cartCount + $row["count"];
	} while ( $row = mysqli_fetch_array($result) );
echo '<h1 class="main-title">Корзина: <span class="cart-count">'.$cartCount.'</span></h1>';
}



$result = mysqli_query($link,"SELECT * FROM cart,products WHERE cart.ip = '{$_SERVER["REMOTE_ADDR"]}' AND products.id = cart.product_id");
if (mysqli_num_rows($result) > 0)
{
$row = mysqli_fetch_array($result);
	echo '<div class="clear-cart-block"><a href="#" id="clear-cart">Очистить корзину</a></div>';


?>
				
				<!-- <h1 class="main-title">Корзина <span class="cart-count">4</span></h1> -->
				<div class="cart-products-block">
					<div class="cart-products">
						<ul class="cart-list">
							
						<?php
				do {
		
						$price = $row["price"] * $row["count"];
						$allprice = $allprice + $price;
									echo '
							<li class="cart-item">
								<div class="cart-item-image">
							<a href="product.php?id='.$row["id"].'" class="products-image-link">
								<img src="images/'.$row["image"].'" class="products-image">
							</a>
								</div>
								<div class="cart-item-title">
									<div class="products-cat-block">
									<a href="products.php?podcategory='.$row["podcategory"].'" class="product-cat-link">
							'.$row["podcategory"].'
						</a>
									</div>
							<a href="product.php?id='.$row["id"].'" class="products-title-link">
								'.$row["title"].'
							</a>
								</div>
								<div class="cart-item-actions__block">
									<div class="cart-item-actions">
										<button class="cart-button-minus cart-buttons" minusid="'.$row["product_id"].'">-</button>
										<span class="cart-item-count">'.$row["count"].'</span>
										<button class="cart-button-plus cart-buttons" plusid="'.$row["product_id"].'">+</button>
									</div>
									<div>
										<a href="cart.php" class="cart-button-delete" id="'.$row["product_id"].'">Удалить</a>
									</div>
								</div>
								<div class="cart-item-price__block" id="product'.$row["product_id"].'">
									<h3>
										<span class="span-count">'.$row["count"].'</span> x <span class="span-price">'.$row["price"].'</span> руб
									</h3>
									<p class="cart-item-price">
										<span id="price' .$row["product_id"].'">'.$price.'</span> руб
									</p>
								</div>
							</li>
					

					
							';

		        } while ($row = mysqli_fetch_array($result));
					
				echo '
				</div>

				<div class="cart-result">
				<h2 class="main-title">
					Итого <span class="itog-count">'.$row["count"].'</span> 
					товара на сумму: <span class="itog-price"><strong>'.$allprice.'</strong></span> руб
				</h2>
				<div class="cart-result-button__block">
					<a href="#" class="cart-result-button">Перейти к оформлению</a>
				';
				  
				} 
				else
				{
					echo '
						<h1 align="center">Корзина пуста</h1>
					</div>		
					';
				}
?>


							</ul>	
						</div>
					</div>
					
				</div>
			</div>
	</main>

<div class="clearfix"></div>

<?php
	include ("includes/footer.php");
?>
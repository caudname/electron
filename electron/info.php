<?php
	require("includes/db_connect.php");
	session_start();
	include ("includes/header.php");
?>

	<!-- Контент сайта -->

	<main>
		
	<div class="container">
	
		<h1 class="main-title"> О нас</h1>
			<p class="info-description">
			Качество наших товаров и высокий уровень обслуживания позволяют нам не пользоваться запрещенными приемами. Бизнес для нас не просто работа. Нам доставляет удовольствие общаться с нашими покупателями и предлагать им только качественную бытовую технику. Мы стремимся к лучшим результатам во всем, что мы делаем.
			Доступность. Мы отбираем только надежные модели и устанавливаем реальные цены. То есть у нас вы покупаете технику и платите столько, сколько она стоит. Мы стремимся к тому, чтобы каждый человек мог приобрести любую бытовую технику. Для этого предлагается возможность покупки в кредит. Различные схемы кредитования позволяют выбрать наиболее подходящую, а сама процедура занимает около 15 минут.
			Ответственность Нам не безразличен наш город. Компания совершает все необходимые отчисления в местный бюджет, чтобы сделать наш город еще уютнее и удобнее.
			</p>

		<div class="wrap">
			<div class="informBlock">
				<div class="symbol">
					<img class="info-image" src="images/lowcost.svg">
				</div>
				<div class="informText">
					<h5 class="mainText">Низкая цена</h5>
					<p class="secondText">Чтобы купить необходимую вещь по доступной цене, 
						достаточно найти ее в интернете и выбрать интернет–магазин, 
						который на данный момент предлагает самые низкие цены, специальные скидки или бонусы, и заказать товар.</p>
				</div>
			</div>

			<div class="informBlock">
				<div class="symbol">
					<img class="info-image" src="images/crugl.svg">
				</div>
				<div class="informText">
					<h5 class="mainText">Полная автоматизация</h5>
					<p class="secondText">Отслеживание товаров осуществляется через систему 1С. 
						Вы всегда знаете, где хранится товар, в каком количестве, легко можете его найти и изменить статус.</p>
				</div>
			</div>

			<div class="informBlock">
				<div class="symbol">
					<img class="info-image" src="images/247.svg">
				</div>
				<div class="informText">
					<h5 class="mainText">Круглосуточная работа</h5>
					<p class="secondText">Онлайн-магазин автономно принимает заказы 24/7. 
						Это в разы эффективнее для продавцов, чем наличие офлайн-магазина, работающего в штатном режиме.</p>
				</div>
			</div>
		</div>

		<div class="connection">
			<h1>Связаться с нами:</h1>
			<div class="info-contacts-block">
				<div class="info-contacts-phone">
					<a href="tel: +021-95-51-84" class="header-top-link contacts-phone-link">
						<img src="images/phone.svg" class="info-contacts-icons">
						+7-989-449-29-49
					</a>
				</div>
				<div class="info-contacts-mail">
					<a href="mailto: email@email.com" class="header-top-link contacts-phone-mail">
						<img src="images/email.svg" class="info-contacts-icons">
						electron2023@gmail.com
					</a>
				</div>
			</div>
		</div>
		
		<div class="wrap">
			<div class="informBlock">
				<div class="informText">
					<h5 class="mainText">Для клиентов</h5>
					<p class="secondText">Наши клиенты – в центре всего, что мы делаем,
						Доверие - главное. Мы строим долгосрочные отношения,
						Во всём, чем занимаемся, стремимся быть экспертами,
						Открыты для предложений и улучшений.</p>
				</div>
			</div>

			<div class="informBlock">
				<div class="informText">
					<h5 class="mainText">Для партнеров</h5>
					<p class="secondText">Прозрачность - основа совместного бизнеса,
						Работаем, соблюдая этику бизнеса,
						Уважаем другие мнения и интересы,
						Выполняем обязательства и берем ответственность за свои решения,
						Нетерпимы к коррупции.</p>
				</div>
			</div>

			<div class="informBlock">
				<div class="informText">
					<h5 class="mainText">Для сотрудников</h5>
					<p class="secondText">Electron. - территория личной и коллективной самореализации,
						Мы - одна команда,
						Уважаем мнение и интересы людей,
						Ценим свободу, смелость и ответственность.</p>
				</div>
			</div>
		</div>



	</div>
	
	</main>

<?php
	include ("includes/footer.php");
?>
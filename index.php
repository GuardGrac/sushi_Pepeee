<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Магазин роллов</title>
	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">
</head>

<body>

	<nav class="navi">
        
        <div>
            <a href="" class="links" link="#000000" vlink="000000">
                Компания
            </a>
        </div>

        <div>
            <a href="" class="links" link="#000000" vlink="000000">
                Условия Доставки
            </a>
        </div>

        <div>
            <a href="auth.php" class="links" link="#000000" vlink="000000">
                Регистрация
            </a>
        </div>

        <div>
            <a href="" class="links" link="#000000" vlink="000000">
                Контакты
            </a>
        </div>

        <button class="nav__toggle-menu">
            <span></span>
        </button>

    </nav>

	<header class="header">
		<div class="container text-center">
			<img class="logo" src="img/logo/logo.svg" width="92" alt="Суши и пицца">
			<div class="site-title">GiGa Rolls</div>
			<p class="lead">Оперативно и вкусно</p>
		</div>
	</header>

	<div class="container mb-5">
		<div class="row">

			<!-- Товары -->
			<div class="col-md-8">
				<div class="row" id="products-container">

				</div>
			</div>

			<!-- Корзина -->
			<div class="col-md-4">

				<!-- Корзина -->
				<div class="card mb-4">
					<div class="card-body">
						<h5 class="card-title">Ваш заказ</h4>

							<div data-cart-empty class="alert alert-secondary" role="alert">
							Корзина пуста
						</div>

						<!-- cart-wrapper -->
						<div class="cart-wrapper">

						</div>
						<!-- // cart-wrapper -->

						<!-- Стоимость заказа -->
						<div class="cart-total">
							<p data-cart-delivery class="none">
								<span class="h5">Доставка:</span>
								<span class="delivery-cost">250 ₽</span><br>
								<span class="small">Бесплатно при заказе от 600 ₽</span>
							</p>
							<p><span class="h5">Итого:</span>
								<span class="total-price">0</span>
								<span class="rouble">₽</span></p>
						</div>
						<!-- // Стоимость заказа -->

					</div>

					<!-- Оформить заказ -->
					<div id="order-form" class="card-body border-top none">
						<h5 class="card-title">Оформить заказ</h4>
						<form>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Ваш номер телефона">
							</div>
							<button type="submit" class="btn btn-primary">Заказать</button>
						</form>
					</div>
					<!-- // Оформить заказ -->

				</div>
				<!-- // Корзина -->

			</div>

		</div>
	</div>

	<footer>
		</footer>

	<div id="menu" class="">
        <nav class="main-nav">
            <ul>
                <li>  <a href="Компания.html" class="links links_burger"link="#000000" vlink="000000">
                    Компания
                </a></li>
                <li>  <a href="УсловияДоставки.html"  class="links links_burger" link="#000000" vlink="000000">
                    Условия Доставки
                </a></li>
                <li> <a href="auth.php" class="links links_burger" link="#000000" vlink="000000">
                    Регистрация</a></li>
                    <li><a href="Контакты.html" class="links links_burger" link="#000000" vlink="000000">
                    Контакты</a></li>
            </ul>
        </nav>
    </div>

	<!-- Подключаем скрипты -->

	<script src="./js/renderProducts.js"></script>
	<script src="./js/calcCartPrice.js"></script>
	<script src="./js/toggleCartStatus.js"></script>
	<script src="./js/counter-02.js"></script>
	<script src="./js/cart-02.js"></script>
	<script src="/js/burger.js"></script>

</body>
</html>

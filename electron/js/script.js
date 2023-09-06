// Окно авторизации
const loginBlock = document.querySelector(".login-block");
const loginLink = document.querySelector(".login-link");
const closeButton = document.querySelector(".close-button");
const login = document.querySelector(".login");

if (loginLink)
loginLink.addEventListener("click", function () {
    loginBlock.style.display = "block";
    login.focus();
});

if (closeButton)
closeButton.addEventListener("click", function () {
    loginBlock.style.display = "none";
});

// Авторизация
const authForm = document.querySelector(".form-fields form");
if (authForm)
authForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const login = document.querySelector(".form-fields form .login");
    const password = document.querySelector(".form-fields form .password");
    const authData = {
        login: login.value,
        password: password.value
    }
    $.ajax({
        type: "POST",
        url: "auth.php",
        data: authData,
        success: function(data) {
            if (data == "no") {
                alert("Неверный логин или пароль");
                login.value = "";
                password.value = "";
                login.focus();
            } else {
                loginBlock.style.display = "none";
                document.querySelector(".reg").innerHTML = `
                <a href="#" class="header-top-links logout-show">
					<img src="images/user.svg" class="contacts-icons">`+data+`
				</a>`;
                logout();
            }
        }
    });
});

// Выход из аккаунта
function logout() {
    const logoutShow = document.querySelector(".logout-show");
    const logoutBlock = document.querySelector(".logout-block");
    const logoutLink = document.querySelector(".logout-link");
    if (logoutShow) {
        logoutShow.addEventListener("click", function(e) {
            e.preventDefault();
            logoutBlock.style.display = "block";
        })
    }
    
    if (logoutBlock)
    logoutLink.addEventListener("click", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "logout.php",
            success: function(data) {
                if (data == 'logout') {
                    location.reload();
                }
            }
        });
    
    })
}

logout();

// Добавляет товар в корзину
const productsBuy = document.querySelectorAll(".products-buy");
productsBuy.forEach(function(b) {
    b.addEventListener("click", function(e) {
        let id = b.getAttribute("id");
        e.preventDefault();

        $.ajax({
         type: "POST",
         url: "/includes/addtocart.php",
         data: "id="+id,
         success: 
            function(data) { 
                alert("Товар добавлен в корзину");
                // loadcart();
            }
        });

    })
})

// Удаляет товар из корзины
const cartButtonDelete = document.querySelectorAll(".cart-button-delete");
cartButtonDelete.forEach(function(d) {
    d.addEventListener("click", function(e) {
        let id = d.getAttribute("id");
        e.preventDefault();

        $.ajax({
         type: "POST",
         url: "/includes/deleteproduct.php",
         data: "id="+id,
         success: 
            function(data) { 
                d.closest(".cart-item").remove();
                if ( ! document.querySelector(".cart-item") ) {
                    
                    document.querySelector(".cart").innerHTML = '<h1 align="center">Корзина пуста</h1>';
                }
                loadcart();
                allprice();
            }
        });

    })
})

// Очищает корзину
const clearcart = document.querySelector("#clear-cart");
const cartProductsBlock = document.querySelector(".cart-products-block");
if (clearcart)
clearcart.addEventListener("click", function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "/includes/clearproduct.php",
        success: function(data) {
            document.querySelector(".cart").innerHTML = '<h1 align="center">Корзина пуста</h1>';
            loadcart();
            allprice();
        }
    });
});

// Показывает количество товаров в корзине
function loadcart(){
    $.ajax({
        type: "POST",
        url: "/includes/loadingcart.php",
        success: function(data) {
            document.querySelector(".cart-count").innerHTML = data;
        }
    });
}

// Кнопка плюс в корзине
const cartButtonPlus = document.querySelectorAll(".cart-button-plus");
if (cartButtonPlus)
cartButtonPlus.forEach(function (p) {
    p.addEventListener("click", function(){
        let plusid = p.getAttribute("plusid");
        let price = document.querySelector("#product"+plusid+" > h3 > .span-price").innerText;
        $.ajax({
            type: "POST",
            url: "/includes/plus.php",
            data: "plusid="+plusid,
            success: function(data) {
                document.querySelector("#product"+plusid+" > h3 > .span-count").innerText = data;
                document.querySelector("#price"+plusid).innerText = price * data;
                p.previousElementSibling.innerText = data;
                loadcart();
                allprice();
            }
        });
    })
})

// Кнопка минус в корзине
const cartButtonMinus = document.querySelectorAll(".cart-button-minus");
if (cartButtonMinus)
cartButtonMinus.forEach(function (m) {
    m.addEventListener("click", function(){
        let minusid = m.getAttribute("minusid");
        let price = document.querySelector("#product"+minusid+" > h3 > .span-price").innerText;
        $.ajax({
            type: "POST",
            url: "/includes/minus.php",
            data: "minusid="+minusid,
            success: function(data) {
                document.querySelector("#product"+minusid+" > h3 > .span-count").innerText = data;
                document.querySelector("#price"+minusid).innerText = price * data;
                m.nextElementSibling.innerText = data;
                loadcart();
                allprice();
            }
        });
    })
})

// Итоговая цена
function allprice(){
    $.ajax({
     type: "POST",
     url: "/includes/allprices.php",
     dataType: "html",
     cache: false,
     success: function(data) {
        document.querySelector(".itog-price > strong").innerText = data;
    }
   });
}
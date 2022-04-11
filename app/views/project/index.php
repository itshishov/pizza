<?php
session_start();
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/public/css/main.css" rel="stylesheet">
    <link href="/public/css/media.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/pop-up.css" media="screen"/>
    <title>Penzo</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-lg-1 col-md-3 col-6 logo-container">
            <img src="/public/img/logo.png" alt="pizzeria">
          </div>
          <div class="col-lg-6 col-md-3 col-6">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Легендарные</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Фирменные</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Закуски</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Напитки</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link sale" href="#">Акции</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>            
          </div>
          <div class="col-lg-3 col-md-3 number-block col-5">
            <div class="icon-block"><img src="/public/img/adress.png" alt="adress" class="icon"></div>
            <div class="icon-text"><span class="name-icon-block pt-regular">Телефон доставки</span><br><a href="tel:88000000000" class="tel pt-blod">8 800 000-00-00</a></div>
          </div>
          <div class="col-lg-2 col-md-3 number-block-2 col-7">
           <div class="icon-block-2"><img src="/public/img/cat.png" alt="shop" class="icon"></div>
		   <?php $cart = new CartModel() ;?>
           <div class="icon-text-2"><span class="name-icon-block pt-regular">Корзина(<?php echo $cart->countItems(); ?>)</span><br><a href="#" class="final_price pt-blod" onclick="look('link1'); return false;">1000 ₽<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></a></div>
<div id="link1" class="div" style="display: none;">
  <div class="container-fluid main">
    <div class="row">
      <div class="other-container">
      <div class="col-sm-3 left">
        <img src="/public/img/pizza_min.png" alt="">
      </div>
      <div class="col-sm-8 left">
      <p class="name-other-pop">Вегетарианская</p> 
      <p class="bottom-name-other">Традиционное тесто 25см.</p> 
      <div class="prise_other"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#67d264" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/></a>
</svg><span>256 ₽</span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f6b94e" class="bi bi-dash-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></a></div>
      </div>
      <div class="col-sm-1 left">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x bibi" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a>
      </div>
      </div>
            <div class="other-container">
      <div class="col-sm-3 left">
        <img src="/public/img/pizza_min.png" alt="">
      </div>
      <div class="col-sm-8 left">
      <p class="name-other-pop">Вегетарианская</p> 
      <p class="bottom-name-other">Традиционное тесто 25см.</p> 
      <div class="prise_other"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#67d264" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/></a>
</svg><span>256 ₽</span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f6b94e" class="bi bi-dash-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></a></div>
      </div>
      <div class="col-sm-1 left">
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x bibi" viewBox="0 0 16 16">
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a>
      </div>
      </div>
      <div class="gray_prise">  
        <div class="col-sm-6 left">
          <p class="name_p">Итого:</p>
        </div>
        <div class="col-sm-6 left">
          <p class="prise_o">800 ₽</p>
        </div>
      </div>
      <div class="botton_oth">  
        <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
</svg>В корзину</button>
      </div>
    </div>
  </div>
</div> 
          </div>
        </div>
      </div>
    </header> 
    <div class="banner-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6"></div>
          <div class="col-lg-6">
            <div class="mobile-block">
            <img src="/public/img/akciya.png" alt="sale" class="sale-image">
            <p class="header-sale">1+1=3</p>
            <div class="block-p-sale">
              <span class="color-span">Три пиццы </span><span class="white-span">любого размера по цене двух</span>
            </div>
            <div class="info-block pt-regular">
              <span>Доставка / Самовывоз</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg><br>
              <span>Промокод: 1+1=3<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
</svg></span>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-contant">
      <div class="container">
        <div class="row">
         <div class="col-lg-12">
           <h2>Пицца</h2>
         </div>
         <div class="col-lg-6 col-md-6 col-xl-3">
          <div class="image-cart">
            <div class="top-cart-info">
              <div class="slag-div">
                <img src="/public/img/hit.png" alt="hit">
              </div>
              <div class="info-div">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#67d264" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></a>
                </svg>
              </div>
            </div>
           <div class="image-magazine">
             <img src="/public/img/pizza.png" alt="pizza">
           </div>
          <div class="p_and_h_cart">
             <p class="h-cart">Ветчина и грибы</p>
             <p class="ingredients_p">Чесночный соус, сыр Моцарелла, ветчина, свежие шампиньоны, орегано</p>
           </div>
           <div class="button-block">
            <div class="text"><span class="span-button">Тесто:</span></div>
             <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary">25 см.</button>
                <button type="button" class="btn btn-outline-secondary">30 см.</button>
                <button type="button" class="btn btn-outline-secondary">35 см.</button>
              </div>
            <div class="text"><span class="span-button">Тесто:</span></div>
             <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary">Традиционное</button>
                <button type="button" class="btn btn-outline-secondary">Тонкое</button>
              </div>
            <div class="text"><span class="span-button">Бортик:</span></div>
             <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary">Сырный</button>
                <button type="button" class="btn btn-outline-secondary">Пармезан</button>
              </div>
           </div>
           <div class="bottom-cart-info">
             <div class="price-block"><p></p></div>
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">ВЫБЕРИТЕ РАЗМЕР ОСНОВЫ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-12 center">
              <div class="pizza_block_1">
                <img src="/public/img/pizza_25.png" alt="25sm">
              </div>
              <div class="button_modal">
                <button>25 сантиметров</button>
              </div>
            </div>
            <div class="col-lg-4 col-12 center">
              <div class="pizza_block_2">
                <img src="/public/img/pizza_30.png" alt="30sm">
              </div>
              <div class="button_modal">
                <button>30 сантиметров</button>
              </div>
            </div>
            <div class="col-lg-4 col-12 center">
              <div class="pizza_block_3">
                <img src="/public/img/pizza_35.png" alt="35sm">
              </div>
              <div class="button_modal">
                <button>35 сантиметров</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary my_next" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Далее</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">ВЫБЕРИТЕ НАЧИНКУ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-6">
              <div class="container-fluid m_0">
                <div class="row">
                  <div class="min_block" id="style-2">
                    <ul class="name_pizza_ul">
                      <li><span class="name-pizza"><a href="#">Пицца Цезарь</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Сырная</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Морская</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Цезарь</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Сырная</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Морская</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Цезарь</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Сырная</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Морская</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Цезарь</a></span></li>
                    </ul>
                  </div>
                  <div class="pizza_change_image">
                    <img src="/public/img/a2458bc48a.jpg" alt="">
                  </div>
                </div>
              </div>
              <div class="ingridients_modal">
                <p class="l_p">сыр Моццарелла, сыр Пармезан, куриное филе, свежие помидоры, бекон, пряная Руккола, итальянские специи, оригинальный соус</p>
              </div>
              <div class="itog_test">
                Размер : <span> 25 см. </span>
              </div>
            </div>
            <div class="col-6">
              <div class="container-fluid m_0">
                <div class="row">
                  <div class="pizza_change_image_2">
                    <img src="/public/img/2ce4abd369.jpg" alt="">
                  </div>
                  <div class="min_block_2" id="style-3">
                    <ul class="name_pizza_ul">
                      <li><span class="name-pizza"><a href="#">Пицца Цезарь</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Сырная</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Морская</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Цезарь</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Сырная</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Морская</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Цезарь</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Сырная</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Морская</a></span></li>
                      <li><span class="name-pizza"><a href="#">Пицца Цезарь</a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="ingridients_modal">
                <p class="r_p">сыр Моццарелла, сыр Пармезан, куриное филе, свежие помидоры, бекон, пряная Руккола, итальянские специи, оригинальный соус</p>
              </div>
              <div class="itog_prise">
                Итог : <span> 889 руб. </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary my_next" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Назад</button>
         <button class="btn btn-primary my_next">В корзину</button>
      </div>
    </div>
  </div>
</div>
             <div class="bottom-button-block"><a data-bs-toggle="modal" href="#exampleModalToggle" role="button"><button>Перейти</button></a></div>
           </div>
           </div>
         </div>
	
		 <?php foreach ($products as $product): ?>
         <div class="col-lg-6 col-md-6 col-xl-3">
            <div class="image-cart">
            <div class="top-cart-info">
              <div class="info-div-2">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#67d264" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></a>
                </svg>
              </div>
            </div>
           <div class="image-magazine">
             <img src="/public/img/pizza.png" alt="pizza">
           </div>
          <div class="p_and_h_cart">
             <p class="h-cart"><?php echo $product["name"]?></p>
             <p class="ingredients_p">Чесночный соус, сыр Моцарелла, ветчина, свежие шампиньоны, орегано</p>
           </div>
           <div class="button-block">
            <div class="text"><span class="span-button">Тесто:</span></div>
             <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary">25 см.</button>
                <button type="button" class="btn btn-outline-secondary">30 см.</button>
                <button type="button" class="btn btn-outline-secondary">35 см.</button>
              </div>
            <div class="text"><span class="span-button">Тесто:</span></div>
             <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary">Традиционное</button>
                <button type="button" class="btn btn-outline-secondary">Тонкое</button>
              </div>
            <div class="text"><span class="span-button">Бортик:</span></div>
             <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary">Сырный</button>
                <button type="button" class="btn btn-outline-secondary">Пармезан</button>
              </div>
           </div>
           <div class="bottom-cart-info">
             <div class="price-block"><p>₽ 296</p></div>
             <div class="bottom-button-block"><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
</svg>В корзину</button></div>
           </div>
           </div>
         </div>
		 <?php endforeach ?>
        </div>
      </div>
    </div>
    <div class="gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Закуски</h2>
          </div>
		  
		   <?php foreach ($snacks as $snack): ?>
           <div class="col-lg-6 col-md-6 col-xl-3">
          <div class="image-cart">
            <div class="top-cart-info">
              <div class="info-div-2">
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#f6b94e" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/></a>
                </svg>
              </div>
            </div>
           <div class="image-magazine-2">
             <img src="/public/img/<?php echo $snack["filename"]?>">
           </div>
          <div class="p_and_h_cart">
             <p class="h-cart"><?php echo $snack["name"]?></p>
             <p class="ingredients_p"><?php echo $snack["description"]?></p>
           </div>
           <div class="bottom-cart-info">
             <div class="price-block"><p>₽ <?php echo $snack["price"]?></p></div>
             <div class="bottom-button-block-2">
			 <form action="/cart/<?php echo $snack["id"]?>" method="post">
			 <input type="hidden" name="item_id" value="<?php echo $snack["id"]?>">
			 <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket-fill" viewBox="0 0 16 16">
  <path d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 1 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
</svg>В корзину</button>
             </form>
           </div>
           </div>
           </div>
        </div>
		 <?php endforeach ?>
		
		
		
      </div>
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <h2>О нас</h2>
    </div>
      <div class="col-lg-3">
        <img src="/public/img/fot_1.png" alt="fot" class="fot">
        <img src="/public/img/fot_2.png" alt="fot" class="fot fot_one">
      </div>
      <div class="col-lg-4">
        <img src="/public/img/fot_3.png" alt="fot" class="fot fot_two">
      </div>
      <div class="col-lg-5">
        <p class="bold-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <p class="pt-regular top-p">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        <div class="container-fluid m_0">
          <div class="row">
            <div class="col-lg-10">
              <div class="social">
                <p class="red_span">
                  Наши соц.сети
                </p>
                <div class="cos_block">
                  <a href="#" class="a_bor"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg> Instagram</a> | <a href="#" class="a_bor"><img src="/public/img/vk.png" alt="vk" class="vk_icon">vk/adres_pablika</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-1 footer_block_logo">
         <a href="#"><img src="/public/img/logo_2.png" alt="pizzeria"></a>
      </div>
      <div class="col-lg-3">
        <div class="text_block">
          <p class="pt-blod">
            Свежеиспеченная пицца в городе
          </p>
          <p class="pt-regular">
            Бесплатная доставка / Возьми с собой
          </p>
        </div>
      </div>
      <div class="col-lg-7 right">
        <p class="pt-blod white">
            Наши контакты
          </p>
          <div class="number_footer">
            <a href="#" class="white_a"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f6b94e" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg>info@gmail.com</a><a href="#" class="white_a left_p"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f6b94e" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> 8 800 000-00-00</a>
          </div>
      </div>
    </div>
  </div>
  <div class="footer-block-bottom">
    <div class="container">
      <div class="row">
        <ul class="footer-menu">
          <li><a href="#">Условия доставки</a></li>
          <li><a href="#">Публичная оферта</a></li>
          <li><a href="#">Политика кнфеденциальности</a></li>
          <li><a href="#">Контакты</a></li>
          <li><a href="#">Наша история</a></li>
          <li><a href="#">Блог компании</a></li>
          <li><a href="#">Работа в Pizzeria</a></li>
          <li><a href="#">Доставки</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
    <script src="/public/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="/public/js/main.js"></script>
    <script type="text/javascript" src="/public/js/pop-up.js"></script>
  </body>
</html>

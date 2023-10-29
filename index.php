<?php

?>

<!DOCTYPE html>
<html lang="ru">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Hi Bot</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <link rel="shortcut icon" href="images/log_head.svg" type="image/x-icon">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <script src="js/jquery-3.7.1.min.js"></script>
      <script src="js/functions.js"></script>
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- inputmask plagin -->
      <script src="https://unpkg.com/imask"></script>
      <script type="text/javascript" src="js/input_mask.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"></script>
            <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      
      

      <script>
         $('.art-stranger').mask('+7 (999) 999-99-99');

         $.fn.setCursorPosition = function(pos) {
         if ($(this).get(0).setSelectionRange) {
            $(this).get(0).setSelectionRange(pos, pos);
         } else if ($(this).get(0).createTextRange) {
            var range = $(this).get(0).createTextRange();
            range.collapse(true);
            range.moveEnd('character', pos);
            range.moveStart('character', pos);
            range.select();
         }
         };


         $('input[type="tel"]').click(function(){
            $(this).setCursorPosition(4);  // set position number
         });
      </script>


   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img style="width: 100 px; height: 100px;" src="images/logo_bot.svg" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="#titlepage">О нас</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#service">Наши плюсы</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#why">Наши услуги</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#rabota_chat">Возможности</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="text-bg">
                     <h1>Telegram Bot <br>для вас</h1>
                     <span>Разработка Telegram
                        бота под заказ!</span>
                     <p>У нас можно заказать телеграмм бот любой сложности. Делаем под ключ.</p>
                     <a href="#contact">Заказать бота</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="text-img">
                     <figure><img src="images/robot.svg" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- Hosting -->
      <div id="" class="hosting">
         <div class="container">
            <div class="row" id="titlepage">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Коротко о нас</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="web_hosting">
                     <figure><img style="width: 100 px; height: 350px;" src="images/robotag.svg" alt="#"/></figure>
                     <p>Команда разработчиков Hi Bot-это профессионалы с более чем трех летним опытом разработки Telegram-ботов,которые будут 
                        работать над вашим проектом отстадии идеи до стадии реализациии продвижения. С помощью данной технологии, вы сможите автоматизировать бизнес-процессы.
                        Мы создаем ботов для вас и получаем удовольствие от процесса их создания. 
                        С помощью нас, вы сможите автоматизировать бизнес-процессы.
                        Мы тестируем все функции наших ботов на различных нестандартных данных,чтобы не было "сюрпризов" при выпуске бота.
                        По этим причинам мы считаем, что наш сервис заслуживает вашего внимания!</p>
                     <a href="#why">Узнать стоимость</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Hosting -->
      <!-- Services  -->
      <div id="service" class="Services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Наши плюсы</h2>
                     <p style="font-family: Sometype Mono; ">Чем мы отличаемся от дургих разработчиков
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img style="width: 60px; height: 59px;" src="images/1.svg" alt="#" /></i>
                     <h3>Низкие цены</h3>
                     <p>Наш сервис работает по приличным ценнам.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img style="width: 60px; height: 59px;" src="images/2.svg" alt="#" /></i>
                     <h3>Качественная работа</h3>
                     <p>Мы не используем конструкторы для разработки ботов, а пишем код с нуля. Поэтому наши проекты быстрее и качественнее.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img style="width: 60px; height: 59px; padding-left: 10px;" src="images/3.svg" alt="#" /></i>
                     <h3>Помогаем первые полгода</h3>
                     <p>После завершения работы, мы будем отвечать на ваши сообщения, если возникнут какие-то вопросы. Первые полгода будем отвечать за техническую часть вашего проекта.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img style="width: 60px; height: 59px;" src="images/4.svg" alt="#" /></i>
                     <h3>Делаем деплой бота</h3>
                     <p>Загрузим проект на сервер и заставим его работать на вас.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img style="width: 60px; height: 59px; padding-top: 10px;" src="images/5.svg" alt="#" /></i>
                     <h3>Любая сложность проекта</h3>
                     <p>Мы делаем проекты любой сложности. Есть опыт работы по разработке сложного функционала.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="Services-box">
                     <i><img style="width: 60px; height: 59px;" src="images/6.svg" alt="#" /></i>
                     <h3>Ценим время</h3>
                     <p>Делаем ботов четко в указанное время. От 5 дней на разработку бота!</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Servicess -->
      <!-- why -->
      <div id="why" class="why">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Наши услуги</h2>
                     <p></p>
                  </div>
               </div>
            </div>
            <div class="row justify-content-around">
               <div class="card mb-3 shadow p-3 mb-5 bg-white rounded col-12" style="max-width: 540px;">
                  <div class="row g-0 " >
                    <div class="col-md-4" >
                      <img src="images/Group 318.svg" style="width: 100%; height: 100%;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                           <h3 class="card-title">Консультация</h3>
                           <p class="card-text">Функция для общения с пользователем. Предоставляет клиенту всю интересующую информацию и помогает выбрать нужный товар.</p>
                           <p class="card-text"><small class="text-muted">от 2 000 ₽</small></p>
                        </div>
                    </div>
                  </div>
               </div>
               <div class="card mb-3 shadow p-3 mb-5 bg-white rounded col-12" style="max-width: 540px;">
                  <div class="row g-0 " >
                    <div class="col-md-4" >
                      <img src="images/clipboard2-data.svg" style="width: 100%; height: 100%;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                           <h3 class="card-title">Опросы</h3>
                           <p class="card-text">Бот проводит опросы клиентов, помогают определить и сегментировать целевую аудиторию.</p>
                           <p class="card-text"><small class="text-muted">от 5 000 ₽</small></p>
                        </div>
                    </div>
                  </div>
               </div>
               <div class="card mb-3 shadow p-3 mb-5 bg-white rounded col-12" style="max-width: 540px;">
                  <div class="row g-0 " >
                    <div class="col-md-4" >
                      <img src="images/envelope.svg" style="width: 100%; height: 100%;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                           <h3 class="card-title">Рассылки</h3>
                           <p class="card-text">Уведомляют клиентов о проведении акций, отправляют новости, напоминают о мероприятиях.</p>
                           <p class="card-text"><small class="text-muted">от 3 000 ₽</small></p>
                        </div>
                    </div>
                  </div>
               </div>
               <div class="card mb-3 shadow p-3 mb-5 bg-white rounded col-12" style="max-width: 540px;">
                  <div class="row g-0 " >
                    <div class="col-md-4" >
                      <img src="images/shop.svg" style="width: 100%; height: 100%;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                           <h3 class="card-title">Создание полноценного магазина</h3>
                           <p class="card-text">Перенесем ваш магазин в мессенджер телеграм.</p>
                           <p class="card-text"><small class="text-muted">от 25 000 ₽</small></p>
                        </div>
                    </div>
                  </div>
               </div>
               <div class="card mb-3 shadow p-3 mb-5 bg-white rounded col-12" style="max-width: 540px;">
                  <div class="row g-0 " >
                    <div class="col-md-4" >
                      <img src="images/currency-exchange.svg" style="width: 100%; height: 100%;" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                           <h3 class="card-title">Подключение платежей</h3>
                           <p class="card-text">Ведут пользователя по «воронке продаж», оформляют заказы, записывают на услуги и бронируют места.</p>
                           <p class="card-text"><small class="text-muted">от 15 000 ₽</small></p>
                        </div>
                    </div>
                  </div>
               </div>
               <div class="card mb-3 shadow p-3 mb-5 bg-white rounded col-12" style="max-width: 540px;">
                  <div class="row g-0 lol_server" >
                     <div class="col-md-4" >
                        <img src="images/server.svg" style="width: 100%; height: 100%; padding-top:30px;" class="img-fluid rounded-start" alt="...">
                     </div>
                     <div class="col-md-8">
                        <div class="card-body">
                           <h5 class="card-title">Размещение на сервере</h5>
                           <p class="card-text">Разместим бота на сервере.</p>
                           <p class="card-text"><small class="text-muted">от 15 000 ₽</small></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="rabota_chat" class="Services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Возможности чат-бота телеграм</h2>
                  </div>
               </div>
            </div>
            <div class="row g-4">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12" >
                  <a  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div style="box-shadow: 0 0 25px rgba(245,186,255,0.1); min-height: 175px;" class="Services-box">
                           <img style="width: 60px; height: 59px;margin-top:10px;" src="images/baby1.png" class="rounded float-end" alt="...">
                           <h3>Проводит опросы</h3>
                        </div>
                  </a>
                  <div class="collapse gap-3" style="background-color: #0c0f38;" id="collapseExample">
                     <div style="color:#fdd430;background-color: #0c0f38;border:none;" class="card card-body">
                        Вы можете получать информацию от пользователей, чтобы улучшить сервис и повысить продажи.
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <a  data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div style="box-shadow: 0 0 25px rgba(245,186,255,0.1);min-height: 175px;"  class="Services-box">
                           <img style="width: 60px; height: 59px;margin-top:10px;" src="images/baby2.png" class="rounded float-end" alt="...">
                           <h3>Интегрируется с платежными системами</h3>
                        </div>
                  </a>
                  <div class="collapse gap-3" id="collapseExample2">
                     <div style="color:#fdd430;background-color: #0c0f38;border:none;" style="color:#0c0f38;" class="card card-body">
                        Принимайте оплату прямо в телеграме.
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <a  data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div style="box-shadow: 0 0 25px rgba(245,186,255,0.1);min-height: 175px;"  class="Services-box">
                           <img style="width: 60px; height: 59px;margin-top:10px;" src="images/baby3.png" class="rounded float-end" alt="...">
                           <h3>Рассылает информацию клиентам.</h3>
                        </div>
                  </a>
                  <div class="collapse" id="collapseExample3">
                     <div style="color:#fdd430;background-color: #0c0f38;border:none;" style="color:#0c0f38;" class="card card-body">
                        Сообщает о свежем поступление товара или чего либо.
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <a  data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div style="box-shadow: 0 0 25px rgba(245,186,255,0.1);" class="Services-box">
                           <img style="width: 60px; height: 59px;margin-top:10px;" src="images/baby4.png" class="rounded float-end" alt="...">
                           <h3>Производит онлайн запись и бронирование</h3>
                        </div>
                  </a>
                  <div class="collapse" id="collapseExample4">
                     <div style="color:#fdd430;background-color: #0c0f38;border:none;" style="color:#0c0f38;" class="card card-body">
                        Клиент передает свои данные вашему боту, и вы их моментально получаете.
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <a  data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div style="box-shadow: 0 0 25px rgba(245,186,255,0.1);" class="Services-box">
                           <img style="width: 60px; height: 59px;margin-top:10px;" src="images/baby5.png" class="rounded float-end" alt="...">
                           <h3>Проводит пошаговое обучение</h3>
                        </div>
                  </a>
                  <div class="collapse" id="collapseExample5">
                     <div style="color:#fdd430;background-color: #0c0f38;border:none;" style="color:#0c0f38;" class="card card-body">
                        Пользователь может обратиться к боту с любым вопросом, и моментально получить ответ.
                     </div>
                   </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <a  data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <div style="box-shadow: 0 0 25px rgba(245,186,255,0.1);min-height: 175px;"  class="Services-box">
                           <img style="width: 60px; height: 59px;margin-top:10px;" src="images/baby6.png" class="rounded float-end" alt="...">
                           <h3>Осуществляет поиск информацию</h3>
                        </div>
                  </a>
                  <div class="collapse "  id="collapseExample6">
                     <div style="color:#fdd430;background-color: #0c0f38;border:none;" style="color:#0c0f38;" class="card card-body align-self-start">
                        Освободите время для решения более важных и ответственных задач. Простейшую работу сделает за вас Чат-бот Telegram.
                     </div>
                   </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end why -->
      <!-- contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Заказать бота</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 offset-md-3 ">
                  <form class="main_form" action='../functions.php' method='post' style="box-shadow: 0 0 45px rgba(245,186,255,0.5);margin-bottom: 60px;">
                     <div class="row">
                        
                        <div class="col-sm-12">
                           <label for="exampleInputEmail1" style="color:#fff;" class="form-label">Ваше имя</label>
                           <input class="contactus" required style="color:#0c0f38;" placeholder="Иванов Иван" type="text" name="name_user">
                        </div>
                        <div class="col-sm-12">
                           <label for="exampleInputEmail1" style="color:#fff;" class="form-label">Почта</label>
                           <input class="contactus" style="color:#0c0f38;" placeholder="example@email.com" required type="email" name="email_user">
                        </div>
                        <div class="col-sm-12">
                           <label for="exampleDataList" style="color:#fff" class="form-label">Как с вами лучше связаться?</label>
                           <input class="form-control" style="color:#0c0f38;" required list="datalistOptions" name='connect_type' id="exampleDataList" placeholder="С помощью Telegram...">
                           <datalist id="datalistOptions">
                              <option value="Написать в Telegram">
                              <option value="Написать в WhatsApp">
                              <option value="Написать на почту">
                              <option value="Позвонить">
                           </datalist>
                        </div>
                        <div class="col-sm-12">
                           <label style="color:#fff;" class="form-label">Номер телефона</label>
                           <input type="text" required style="color:#0c0f38;" class="contactus form-control" id="phone" name='phone_user' placeholder="+7 (___) ___-____">
                        </div>
                        <div class="col-sm-12">
                           <label for="exampleInputEmail1" style="color:#fff;" class="form-label">Кратко опишите ваш проект</label>
                           <textarea class="textarea" style="color:#0c0f38;" required placeholder="Я бы хотел создать...." type="text" name="message_user"></textarea>
                        </div>
                        <div class="col-sm-12">
                           <p>
                              <label for="amount" style="color:#fff;">В какую сумму хотите уложиться:</label>
                              <input type="text" id="amount" style="background: transparent;border: none;color:white;" readonly name='summ_lance'  font-weight:bold;">
                            </p>
                             
                            <div style="width: 250px;margin-left: 10px;" id="slider-range"></div>
                        </div>
                       
                        <div class="col-sm-12" style="padding-top:40px;">
                           <button class="send" type='submitt'>Отправить</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="cont" style="margin-top:10px;">
                           <a href="index.html"><img  src="images/logo_bot.svg" alt="#" /></a>
                           <br> <a href="https://t.me/Hi_Bot_Tg"><span>@Hi_Bot_Tg</span></a>
                        <p>  &#169 Hi Bot
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
    
      </footer>
      <!-- end footer -->
      <script src="https://unpkg.com/imask"></script>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="js/functions.js"></script>
      <script src="js/input_mask.js"></script>

   </body>
</html>


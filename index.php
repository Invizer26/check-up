<?php
    include 'php/check-up.php';


    $checkUp = getCheckUP();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="fonts/PT_Sans-Caption-Web-Regular.ttf" rel="">
    <link href="css/style.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script defer src="node_modules/jquery/dist/jquery.js"></script>
    <script defer src="js/mask.js"></script>
    <script defer src="js/offcanvas.js"></script>
    <script defer src="js/carouselCounter.js"></script>
</head>
<body>
    <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Запись на прием</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" class="form" id="appointmentForm" name="appointmentForm">
                        <label for="name" class="form-label">Введите имя:</label>
                        <input type="text" name="name" id="name" placeholder="Имя" class="form-control">
                        <label for="phone" class="form-label">Введите телефон:</label>
                        <input name="phone" id="phone" placeholder="+7 (000) 000-00-00" required class="form-control">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" form="appointmentForm" class="btn appointmentBtn">Записаться</button>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <nav class="navbar navbar-light navMenuMobile">
            <button class="navMenuMobile__toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" id="offcanvasToggler" aria-controls="offcanvasNavbar"></button>
            <div class="offcanvas offcanvas-start" data-bs-backdrop="false" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item navMenu__element">
                            О клинике
                        </li>
                        <li class="nav-item navMenu__element">
                            Услуги
                        </li>
                        <li class="nav-item navMenu__element">
                            Специалисты
                        </li>
                        <li class="nav-item navMenu__element">
                            Цены
                        </li>
                        <li class="nav-item navMenu__element">
                            Контакты
                        </li>
                    </ul>
                    <button class="btn btn-white" data-bs-toggle="modal" data-bs-target="#modalForm">Записаться на прием</button>
                </div>
            </div>
        </nav>
        <img class="logo" src="images/logo.svg" alt="">
        <div class="header__info">
            <img class="path" src="images/path.svg" alt="">
            <div class="address">
                Ростов-на-Дону<br>
                <span class="address__house">ул. Ленина, 2Б</span>
            </div>
        </div>
        <div class="header__infoMobile">
            <span class="header__infoMobile__phone">+7(863) 000 00 00</span>
            <span class="header__infoMobile__address">Ростов-на-Дону</span>
        </div>
        <div class="appointment">
            <div class="appointment__phone">
                <img class="appointment__phone__whatsapp" src="images/whatsapp.svg" alt="">
                +7(863) 000 00 00
            </div>
            <button type="button" class="btn appointmentBtn" data-bs-toggle="modal" data-bs-target="#modalForm">Записаться на прием</button>
        </div>
    </header>
    <nav class="navMenu navMenuHeader">
        <div class="navMenu__element">О клинике</div>
        <div class="navMenu__element">Услуги</div>
        <div class="navMenu__element">Специалисты</div>
        <div class="navMenu__element">Цены</div>
        <div class="navMenu__element">Контакты</div>
    </nav>
    <div class="info">
        <div class="info__text">
            <h1 class="info__text__head">
                Многопрофильная клиника для детей и взрослых
            </h1>
            <div class="info__text__content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
            </div>
        </div>
        <div class="info__img"></div>
    </div>
    <div id="carouselCheckUp" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class=" checkUp">
                    <div class="checkUp__info">
                        <h2 class="checkUp__info__head">Check-UP</h2>
                        <h3 class="checkUp__info__secondHead"><?php echo $checkUp[0]['type']?></h3>
                        <ul class="checkUp__info__content">
                            <li><?php echo $checkUp[0]['check-up_1']?></li>
                            <li><?php echo $checkUp[0]['check-up_2']?></li>
                            <li><?php echo $checkUp[0]['check-up_3']?></li>
                            <li><?php echo $checkUp[0]['check-up_4']?></li>
                        </ul>
                        <div class="checkUp__info__price">
                            Всего 2800₽ <span class="checkUp__info__oldPrice">3500₽</span>
                        </div>
                        <div class="checkUp__info__buttons">
                            <button class="btn appointmentBtn" data-bs-toggle="modal" data-bs-target="#modalForm">Записаться</button>
                            <button class="btn checkUp__info__btn">Подробнее</button>
                        </div>
                    </div>
                    <img class="checkUp__img" src="images/doctor-working-table.png" alt="">
                </div>
            </div>
            <div class="carousel-item">
                <div class=" checkUp">
                    <div class="checkUp__info">
                        <h2 class="checkUp__info__head">Check-UP</h2>
                        <h3 class="checkUp__info__secondHead"><?php echo $checkUp[0]['type']?></h3>
                        <ul class="checkUp__info__content">
                            <li><?php echo $checkUp[1]['check-up_1']?></li>
                            <li><?php echo $checkUp[1]['check-up_2']?></li>
                            <li><?php echo $checkUp[1]['check-up_3']?></li>
                            <li><?php echo $checkUp[1]['check-up_4']?></li>
                        </ul>
                        <div class="checkUp__info__price">
                            Всего 2800₽ <span class="checkUp__info__oldPrice">3500₽</span>
                        </div>
                        <div class="checkUp__info__buttons">
                            <button class="btn appointmentBtn" data-bs-toggle="modal" data-bs-target="#modalForm">Записаться</button>
                            <button class="btn checkUp__info__btn">Подробнее</button>
                        </div>
                    </div>
                    <img class="checkUp__img" src="images/doctor-working-table.png" alt="">
                </div>
            </div>
            <div class="carousel-item">
                <div class=" checkUp">
                    <div class="checkUp__info">
                        <h2 class="checkUp__info__head">Check-UP</h2>
                        <h3 class="checkUp__info__secondHead"><?php echo $checkUp[0]['type']?></h3>
                        <ul class="checkUp__info__content">
                            <li><?php echo $checkUp[2]['check-up_1']?></li>
                            <li><?php echo $checkUp[2]['check-up_2']?></li>
                            <li><?php echo $checkUp[2]['check-up_3']?></li>
                            <li><?php echo $checkUp[2]['check-up_4']?></li>
                        </ul>
                        <div class="checkUp__info__price">
                            Всего 2800₽ <span class="checkUp__info__oldPrice">3500₽</span>
                        </div>
                        <div class="checkUp__info__buttons">
                            <button class="btn appointmentBtn" data-bs-toggle="modal" data-bs-target="#modalForm">Записаться</button>
                            <button class="btn checkUp__info__btn">Подробнее</button>
                        </div>
                    </div>
                    <img class="checkUp__img" src="images/doctor-working-table.png" alt="">
                </div>
            </div>
            <div class="carousel-item">
                <div class=" checkUp">
                    <div class="checkUp__info">
                        <h2 class="checkUp__info__head">Check-UP</h2>
                        <h3 class="checkUp__info__secondHead"><?php echo $checkUp[0]['type']?></h3>
                        <ul class="checkUp__info__content">
                            <li><?php echo $checkUp[3]['check-up_1']?></li>
                            <li><?php echo $checkUp[3]['check-up_2']?></li>
                            <li><?php echo $checkUp[3]['check-up_3']?></li>
                            <li><?php echo $checkUp[3]['check-up_4']?></li>
                        </ul>
                        <div class="checkUp__info__price">
                            Всего 2800₽ <span class="checkUp__info__oldPrice">3500₽</span>
                        </div>
                        <div class="checkUp__info__buttons">
                            <button class="btn appointmentBtn" data-bs-toggle="modal" data-bs-target="#modalForm">Записаться</button>
                            <button class="btn checkUp__info__btn">Подробнее</button>
                        </div>
                    </div>
                    <img class="checkUp__img" src="images/doctor-working-table.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="carouselControl">
        <img data-bs-target="#carouselCheckUp" data-bs-slide="prev" src="images/arrow-left.svg" alt="">
        <span class="carouselCounter">
            <span id="carouselCounter">1</span><span class="secondText">/4</span>
        </span>
        <img data-bs-target="#carouselCheckUp" data-bs-slide="next" src="images/arrow-right.svg" alt="">
    </div>
    <footer class="footer">
        <img class="logo" src="images/logo-2.svg" alt="">
        <nav class="navMenu center">
            <div class="navMenu__element">О клинике</div>
            <div class="navMenu__element">Услуги</div>
            <div class="navMenu__element">Специалисты</div>
            <div class="navMenu__element">Цены</div>
            <div class="navMenu__element">Контакты</div>
        </nav>
        <div class="socialNetworks">
            <img src="images/instagram.svg" alt="">
            <img src="images/whatsapp-2.svg" alt="">
            <img src="images/telegram.svg" alt="">
        </div>
    </footer>
</body>
</html>



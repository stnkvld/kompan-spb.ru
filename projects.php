<?php require_once("header.php"); ?>

    <section id="projects" class="projects">
        <div class="container">
            <h2 class="title">Наши проекты</h2>
            <div class="tabs">
                <div class="realized active">
                    <div class="photo"></div>
                    <h3 class="title">Реализованные проекты</h3>
                </div>
                <div class="design">
                    <div class="photo"></div>
                    <h3 class="title">Дизайн-проекты</h3>
                </div>
            </div>
            <div id="slider-realized" class="content realized swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h2 class="title">Школа - детская игровая площадка</h2>
                        <div class="left-right">
                            <div class="left">
                                <div id="slider-realized-in-1-top" class="swiper-container gallery-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                    </div>
                                    <div class="swiper-button-next">
                                        <img src="images/prev.png">
                                    </div>
                                    <div class="swiper-button-prev">
                                        <img src="images/prev.png">
                                    </div>
                                </div>
                                <div id="slider-realized-in-1-bottom" class="swiper-container gallery-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                        <div class="swiper-slide" style="background-image:url(images/slider-in-1.png)"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <p>
                                    <b>Адрес:</b><br>
                                    г. Санкт-Петербург, Татарский пер., д. 3-5
                                </p>
                                <p>
                                    <b>Линия продуктов:</b><br>
                                    Urban
                                </p>
                                <p>
                                    <b>Год:</b><br>
                                    2016
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <h2 class="title">Школа - детская игровая площадка</h2>
                    </div>
                </div>
                <div class="map">
                    <h2 class="title">Карта выполненных проектов</h2>
                    <div id="map-realized" class="map-realized"></div>
                </div>
                <div class="btn-wrapper">
                    <div class="button-prev">
                        <div class="btn"><img src="images/prev.png"></div>
                        <div class="text">Предыдущий<br>проект</div>
                    </div>
                    <div class="button-next">
                        <div class="text">Следующий<br>проект</div>
                        <div class="btn"><img src="images/prev.png"></div>
                    </div>
                </div>
            </div>
            <div id="slider-design" class="content design swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <h2 class="title">Детская игровая площадка</h2>
                        <div class="left-right">
                            <div class="left">
                                <img src="images/design-content-1.jpg">
                            </div>
                            <div class="right">
                                <p>
                                    <b>Линия продуктов:</b><br>
                                    Urban
                                </p>
                                <p>
                                    <b>Год:</b><br>
                                    2016
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-wrapper">
                    <div class="button-prev">
                        <div class="btn"><img src="images/prev.png"></div>
                        <div class="text">Предыдущий<br>проект</div>
                    </div>
                    <div class="button-next">
                        <div class="text">Следующий<br>проект</div>
                        <div class="btn"><img src="images/prev.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="js/map-realized.js"></script>

<?php require_once("footer.php"); ?>

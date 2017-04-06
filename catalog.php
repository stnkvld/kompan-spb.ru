<?php require_once("header.php"); ?>

    <section id="catalog" class="catalog">
        <div class="container">
            <h2 class="title">Каталог продукции</h2>
            <div class="filter-and-products">
                <div class="left">
                    <form>
                        <div class="wrapper-search-info">
                            <div class="form-group search">
                                <input type="text" placeholder="Поиск по артикулу">
                                <img src="images/magnifier.png">
                                <ul class="result">
                                    <li>
                                        <h4 class="title">PCM310101</h4>
                                        <img src="images/compilation-1.png">
                                    </li>
                                    <li>
                                        <h4 class="title">PCM310201</h4>
                                        <img src="images/compilation-1.png">
                                    </li>
                                    <li>
                                        <h4 class="title">PCM310301</h4>
                                        <img src="images/compilation-1.png">
                                    </li>
                                    <button type="button" class="btn-all-results">все результаты <span>></span></button>
                                </ul>
                            </div>
                            <div class="quantity-and-clear">
                                <div class="quantity-selected">
                                    тип оборудования: <span class="num">3</span>
                                    <img src="images/close-gray.png" class="close">
                                </div>
                                <div class="clear-all">
                                    сбросить всё <img src="images/close-red.png" class="close">
                                </div>
                            </div>
                        </div>
                        <div class="filter">
                            <div class="founded">
                                <span class="left">
                                    найдено <span class="num">35</span> шт.
                                </span>
                                <button type="button" class="btn-show">Показать</button>
                            </div>
                            <div class="type">
                                <h4 class="title">Тип оборудования</h4>
                                <a class="clear-filter">сбросить фильтр</a>
                                <div class="checkbox-wrapper">
                                    <div class="checkbox">
                                        <input type="checkbox" id="playgrounds">
                                        <label for="playgrounds">Детские игровые комплексы</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="swing">
                                        <label for="swing">Детские качели</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="furniture">
                                        <label for="furniture">Детская игровая мебель</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="climbing">
                                        <label for="climbing">Конструкции для лазания</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="balancers">
                                        <label for="balancers">Качалки и балансиры</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="sport">
                                        <label for="sport">Спортивные площадки</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="carousels">
                                        <label for="carousels">Карусели</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="park">
                                        <label for="park">Парковая мебель</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="fitness">
                                        <label for="fitness">Фитнес</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="obstacles">
                                        <label for="obstacles">Полосы препятствий</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="street">
                                        <label for="street">Уличные тренажеры</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="cubes">
                                        <label for="cubes">Кубики</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="rope">
                                        <label for="rope">Канатные дороги</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="corocord">
                                        <label for="corocord">Сети Corocord</label>
                                    </div>
                                </div>
                            </div>
                            <div class="age collapsed">
                                <h4 class="title">Возрастная категория <span>></span></h4>
                                <a class="clear-filter">сбросить фильтр</a>
                                <div class="form-group min-max">
                                    <div class="wrapper-1">
                                        <input type="text" value="0">
                                        <span>лет</span>
                                    </div>
                                    <span>&mdash;</span>
                                    <div class="wrapper-2">
                                        <input type="text" value="16+">
                                        <span>лет</span>
                                    </div>
                                </div>
                                <div class="multirange-wrapper">
                                    <div class="scale">
                                        <span>0</span>
                                        <span>8</span>
                                        <span>16+</span>
                                    </div>
                                    <input type="range" multiple value="4,12" min="0" max="16" step="1" style="width: 100%; --range-color: #7ebf3a;">
                                </div>
                            </div>
                            <div class="product-line collapsed">
                                <h4 class="title">Линия продуктов <span>></span></h4>
                                <a class="clear-filter">сбросить фильтр</a>
                                <div class="form-group novelties">
                                    <label for="novelties">Новинки</label>
                                    <input type="checkbox" class="ios-switch green bigswitch" id="novelties"><div><div></div></div>
                                </div>
                                <div class="checkbox-wrapper">
                                    <div class="checkbox">
                                        <input type="checkbox" id="adj-equip">
                                        <label for="adj-equip">Adjustable equipment</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="bloqx">
                                        <label for="bloqx">Bloqx</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="corocord-1">
                                        <label for="corocord-1">Corocord</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="cross-systems">
                                        <label for="cross-systems">Cross systems</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="elements">
                                        <label for="elements">Elements</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="ex-equip">
                                        <label for="ex-equip">Exercise equipment</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="free-game">
                                        <label for="free-game">Freegame</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="galaxy">
                                        <label for="galaxy">Galaxy</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="icon">
                                        <label for="icon">Icon</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="imaginator">
                                        <label for="imaginator">Imaginator</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="moments">
                                        <label for="moments">Moments</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="nature">
                                        <label for="nature">Nature</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="organic-robinia">
                                        <label for="organic-robinia">Organic robinia</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="workout-systems">
                                        <label for="workout-systems">Workout systems</label>
                                    </div>
                                </div>
                            </div>
                            <div class="material collapsed">
                                <h4 class="title">Материал <span>></span></h4>
                                <a class="clear-filter">сбросить фильтр</a>
                                <div class="checkbox-wrapper">
                                    <div class="checkbox">
                                        <input type="checkbox" id="hardwood">
                                        <label for="hardwood">Hardwood</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="plastic">
                                        <label for="plastic">Plastic | HDPE</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="metal">
                                        <label for="metal">Metal | Steel</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="robinia">
                                        <label for="robinia">Robinia/label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="wood">
                                        <label for="wood">Wood</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="rope">
                                        <label for="rope">Rope | Hercules</label>
                                    </div>
                                </div>
                            </div>
                            <div class="founded-adaptive">
                                <span class="left">
                                    найдено <span class="num">35</span> шт.
                                </span>
                                <button type="button" class="btn-show">Показать</button>
                            </div>
                            <div class="show-and-clear">
                                <button class="btn-show">Показать</button>
                                <a class="clear">сбросить</a>
                            </div>
                        </div>
                    </form>
                    <section id="compilation" class="compilation">
                        <h4 class="title">
                            Моя подборка
                            <img src="images/add-to-compilation-icon-2.png">
                        </h4>
                        <a href="">очистить подборку</a>
                        <ul>
                            <li>
                                <img src="images/compilation-1.png">
                                <h4 class="title">PCM310101</h4>
                            </li>
                            <li>
                                <img src="images/compilation-1.png">
                                <h4 class="title">PCM310101</h4>
                            </li>
                            <li>
                                <img src="images/compilation-1.png">
                                <h4 class="title">PCM310101</h4>
                            </li>
                            <li>
                                <img src="images/compilation-1.png">
                                <h4 class="title">PCM310101</h4>
                            </li>
                            <li>
                                <img src="images/compilation-1.png">
                                <h4 class="title">PCM310101</h4>
                            </li>
                            <li>
                                <img src="images/compilation-1.png">
                                <h4 class="title">PCM310101</h4>
                            </li>
                        </ul>
                        <button type="button" class="btn-look-compilation">Смотреть свою подборку <span>></span></button>
                    </section>
                </div>
                <div class="right">
                    <div class="product-wrapper">
                        <div class="product novelty in-comp">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                        <div class="product">
                            <img src="images/novelty.png" class="novelty">
                            <img src="images/slider-product-1.png" class="photo">
                            <ul class="info">
                                <li>
                                    <span class="title">Артикул:</span>
                                    <span class="value">PCM310101</span>
                                </li>
                                <li>
                                    <span class="title">Тип:</span>
                                    <span class="value">Детские игровые комплексы</span>
                                </li>
                                <li>
                                    <span class="title">Возрастная категория:</span>
                                    <span class="value">2+</span>
                                </li>
                                <li>
                                    <span class="title">Линия продуктов:</span>
                                    <span class="value">Galaxy</span>
                                </li>
                                <li>
                                    <span class="title">Материал:</span>
                                    <span class="value">Metal | Steel</span>
                                </li>
                            </ul>
                            <button type="button" class="btn-more">Подробнее</button>
                            <img src="images/add-to-compilation-icon-1.png" class="icon icon-1">
                            <img src="images/add-to-compilation-icon-2.png" class="icon icon-2">
                        </div>
                    </div>
                    <div class="show-more">
                        <img src="images/show-more.png">
                        <h3 class="title">
                            Показать еще <span class="num">30</span>
                        </h3>
                        <h4 class="subtitle">
                            показано <span class="num-1">30</span> из <span class="num-2">115</span>
                        </h4>
                    </div>
                    <section id="guarantee" class="guarantee">
                        <h2 class="title">Гарантия</h2>
                        <h4 class="subtitle">На материалы предоставляется гарантия на следующие сроки:</h4>
                        <div class="elements">
                            <div class="elem">
                                <div class="title">
                                    <img src="images/guarantee-infinity.png">
                                    <span>Пожизненная гарантия</span>
                                </div>
                                <ul>
                                    <li><span>Гальванизированные элементы</span></li>
                                    <li><span>Стальные столбы</span></li>
                                    <li><span>Поручни</span></li>
                                    <li><span>Рама для пола</span></li>
                                    <li><span>Несущие скобы</span></li>
                                    <li><span>Несущие элементы из нержавеющей стали</span></li>
                                    <li><span>HDPE панели</span></li>
                                </ul>
                            </div>
                            <div class="elem">
                                <div class="title">
                                    <img src="images/guarantee-10.png">
                                    <span>Гарантия 10 лет</span>
                                </div>
                                <ul>
                                    <li><span>HPL полы и панели</span></li>
                                    <li><span>Прочие гальванизировынные элементы</span></li>
                                    <li><span>Элементы из твердого пластика</span></li>
                                    <li><span>Неокрашенные металлические элементы</span></li>
                                    <li><span>Обработанная древесина и Робиния</span></li>
                                </ul>
                            </div>
                            <div class="elem">
                                <div class="title">
                                    <img src="images/guarantee-5.png">
                                    <span>Гарантия 5 лет</span>
                                </div>
                                <ul>
                                    <li><span>Обработанная слоистая древесина</span></li>
                                    <li><span>Полые пластиковые части</span></li>
                                    <li><span>Окрашенные металлические элементы</span></li>
                                    <li><span>Пружины и подшипники</span></li>
                                    <li><span>Тросы и тросовые соединители</span></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section id="service-and-safety" class="service-and-safety">
                        <div id="slider-service" class="slider-service swiper-container">
                            <div class="top-background"></div>
                            <div class="top-bar">
                                <div class="main-title">
                                    <img src="images/service-icon.png">
                                    <span>Сервис</span>
                                </div>
                                <div class="btn-wrapper">
                                    <div class="button-prev">
                                        <img src="images/left-arrow-service.png">
                                    </div>
                                    <div class="button-next">
                                        <img src="images/right-arrow-service.png">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h3 class="title">Поддержка: до, во время и после</h3>
                                    <p class="text">
                                        Вы всегда можете рассчитывать на KOMPAN, поддерживающий вас на каждом этапе пути —
                                        до, во время и после установки вашей детской площадки.<br>
                                        К каждой поставке игрового оборудования KOMPAN прилагается подробное руководство по
                                        эксплуатации, соответствующее стандарту EN 1176. Кроме того, компания KOMPAN может
                                        предоставить схему технического обслуживания по условиям заказчика, в которую входит
                                        очистка и замена частей, вышедших из строя в результате естественного износа.
                                        Несмотря на то, что наше оборудование для игровых площадок изготовлено из особо
                                        прочных и высококачественных материалов, необходимо проводить регулярные проверки
                                        оборудования, поскольку оно может выйти из строя по причине вандализма или
                                        естественного износа.<br>
                                        Для гарантии безопасности и долгого срока службы важно проводить техническое
                                        обслуживание оборудования.<br>
                                        Компания KOMPAN может предложить вам консультации по обслуживанию оборудования —
                                        ответ на ваш запрос будет предоставлен в течение суток.
                                    </p>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="title">Спланируйте вашу площадку</h3>
                                    <p class="text">
                                        Консультанты КОМПАН помогут спланировать новую игровую среду и адаптировать уже
                                        имеющуюся с целью удовлетворения меняющихся требований, в том числе разделить
                                        площадки на зоны для различных видов деятельности.
                                    </p>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="title">Дизайн игровой площадки</h3>
                                    <p class="text">
                                        Наш коллектив дизайнеров дает совет специалиста по расположению и дизайну, включая
                                        AUTOCAD 2D планы, 3D изображения, планы местности и полные пакеты предложений.<br><br>
                                        Мы понимаем, что процесс согласования может быть сложным и отнимающим много
                                        времени. Мы рады помочь скоординировать процедуры, необходимые для одобрения
                                        вашего проекта.
                                    </p>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="title">Установка</h3>
                                    <p class="text">
                                        С полной собственностью по нашим производственным процессам и бизнес-процессам,
                                        мы достигли экологической сертификации и сертификации гарантии качества ISO 9001
                                        и ISO 14001.<br><br>
                                        Мы можем организовать квалифицированные команды сборщиков по всему
                                        Северо-Западному региону РФ, и мы поставляем инструкции по полной установке с
                                        каждым продуктом, который мы продаём.
                                    </p>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="title">Дизайн игровой площадки</h3>
                                    <p class="text">
                                        Все продукты KOMPAN сделаны из высококачественных материалов и очень надёжны.
                                        Однако, мы рекомендуем удостовериться, что сотрудники обслуживания проводят
                                        регулярные проверки техники безопасности.<br><br>
                                        С каждым нашим контролем полный отчёт будет предоставлен для вашего журнала детской
                                        площадки. Руководство по эксплуатации поставляется с каждой детской площадкой
                                        KOMPAN.<br><br>
                                        KOMPAN гарантирует, что оригинальные сменные части для всех моделей будут доступны
                                        в течение 10 лет после того, как модель была снята с производства.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div id="slider-safety" class="slider-safety swiper-container">
                            <div class="top-background"></div>
                            <div class="top-bar">
                                <div class="main-title">
                                    <img src="images/safety-icon.png">
                                    <span>Безопасность</span>
                                </div>
                                <div class="btn-wrapper">
                                    <div class="button-prev">
                                        <img src="images/left-arrow-safety.png">
                                    </div>
                                    <div class="button-next">
                                        <img src="images/right-arrow-safety.png">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h3 class="title">Безопасные приключения</h3>
                                    <p class="text">
                                        Игровые площадки должны быть безопасными для детей, однако детям нравятся острые
                                        ощущения, получаемые во время игры. Так как же сделать безопасные и надежные
                                        площадки, привлекающие детей?<br><br>
                                        В KOMPAN, мы думаем о безопасности, как о достижении правильного баланса комфорта и
                                        приключений. Комфорт помогает детям чувствовать себя в безопасности в то время как они
                                        свободно играют. Приключения помогают расширить зону комфорта ребенка.
                                        Для того чтобы понять, что значит «комфорт» и «приключение» для каждого ребенка,нужно
                                        понять потребности конкретных возрастных групп детей. Что заставляет их чувствовать себя
                                        комфортно? Есть ли у них опыт, необходимый для того, чтобы оценить риск?
                                        В дополнение к достижению правильного баланса между комфортом и вызовом, наши
                                        игровые решения полностью соответствуют всем международным стандартам безопасности
                                        игровых площадок, в том числе европейского стандарта EN 1176, американского стандарта
                                        ASTM F1487 и австралийского стандарта AS4685.
                                    </p>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="title">Сертификаты ISO</h3>
                                    <p class="text">
                                        ISO (International Standards Organisation) — организация, которая разрабатывает
                                        международные стандарты в различных технических областях.<br><br>
                                        Компания KOMPAN сертифицирована организацией BVQI по стандарту ISO 9001. То есть,
                                        независимая организация подтверждает, что наше производство игрового оборудования
                                        осуществляется по принятым нормативам обеспечения производства. Система качества
                                        KOMPAN должна всегда соответствовать требованиям, указанным в стандарте ISO 9001.
                                        Компания KOMPAN сертифицирована по стандарту ISO 14001 с 29 марта 1996 года. ISO 14001
                                        — это экологический стандарт, в котором содержатся экологические требования как к
                                        продукции, так и к производственному процессу, включая экологию рабочего пространства.
                                        Задача экологического стандарта состоит в том, чтобы защитить от вредного воздействия
                                        окружающую среду с помощью оценки и тщательного подбора материалов, а также
                                        применения энергосберегающих технологий. По всем применяемым материалам и
                                        технологиям ведется регулярная отчетность.
                                    </p>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="title">Сертифицированная продукция FSC</h3>
                                    <p class="text">
                                        KOMPAN является экологически ответственной компанией. Мы нацелены использовать
                                        столько сертифицированной древесины FSC в наших продуктах, насколько это возможно.<br><br>
                                        Деревянные конструкции изделий KOMPAN сертифицированы по стандартам FSC (Лесной
                                        попечительский совет). Миссия FSC — содействие экологически приемлемого, социально
                                        выгодного и экономически жизнеспособного управления лесами в мире.<br><br>
                                        Если в продукте используется больше видов древесины, и если дерево происходит от двух
                                        источников — сертифицированного и несертифицированного, сертификация FSC
                                        классифицируется как смешанная. Если вся древесина поступает из сертифицированных
                                        источников FSC, сертификация FSC классифицируется как 100%.<br><br>
                                        Сертифицированная продукция FSC отмечена логотипом FSC в разделе продукции данного
                                        веб-сайта.
                                    </p>
                                </div>
                                <div class="swiper-slide">
                                    <h3 class="title">Соответствие всем требованиям РФ</h3>
                                    <p class="text">
                                        Вся продукция KOMPAN получила сертификаты на соответствие всем российским
                                        техническим требованиям к детским спортивным игровым площадкам.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

<?php require_once("footer.php"); ?>

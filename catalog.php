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
                                    <input type="range" multiple value="4,12" min="0" max="16" step="1" onchange="showVal(this.value)" style="width: 100%; --range-color: #7ebf3a;">
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
                            <div class="show-and-clear">
                                <button class="btn-show">Показать</button>
                                <a class="clear">сбросить</a>
                            </div>
                        </div>
                    </form>
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
                </div>
            </div>
        </div>
    </section>

<?php require_once("footer.php"); ?>

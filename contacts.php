<?php require_once("header.php"); ?>

    <section id="contacts" class="contacts">
        <div id="map" class="map"></div>
        <div class="info">
            <h3 class="title">Контакты</h3>
            <p class="invoices">
                ООО «СГ Индустрия»<br>
                ИНН 234234234234
            </p>
            <ul class="contacts">
                <li class="address">
                    <img src="images/marker.png" class="icon">
                    <p class="text">
                        190121, г. Санкт-Петербург,<br>
                        ул. Садовая, д. 104, оф. 405
                    </p>
                </li>
                <li class="phone">
                    <img src="images/phone.png" class="icon">
                    <p class="text">
                        +7 931 315 31 70<br>
                        +7 812 242 82 08
                    </p>
                </li>
                <li class="mail">
                    <img src="images/mail.png" class="icon">
                    <p class="text">
                        <a href="">info@kompan-spb.ru</a>
                    </p>
                </li>
            </ul>
            <ul class="socials">
                <li>
                    <img src="images/contacts-vk.png" class="icon">
                    <a href="">vk.com/kompan_spb</a>
                </li>
                <li>
                    <img src="images/contacts-inst.png" class="icon">
                    <a href="">instagram.com/kompan_spb/</a>
                </li>
                <li>
                    <img src="images/contacts-fb.png" class="icon">
                    <a href="">facebook.com/kompanspb</a>
                </li>
                <li>
                    <img src="images/contacts-tw.png" class="icon">
                    <a href="">twitter.com/kompan_spb/</a>
                </li>
            </ul>
        </div>
    </section>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script src="js/map.js"></script>

<?php require_once("footer.php"); ?>

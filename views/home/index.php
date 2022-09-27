<?php 
    use app\components\HomeTabsWidget; 
    use app\components\FileFormWidget;
?>

<div class="load__wrapper">
    <div class="load">
        <hr/><hr/><hr/><hr/>
    </div>
</div>

<section class="firstscreen">
    <div class="swiper-container swiper-container-firstscreen">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="swiper-slide__img" style="background-image:url(img/firstscreen/firstscreen_slide1.jpg)"></div>
                <div class="swiper-slide__text">
                    <h2>Компьютерное оборудование <br> для организаций</h2>
                    <p>Индивидуальный подбор сетевого и серверного оборудования под ваши задачи</p>
                    <span class="swiper-slide__btn btn-modal-slide1">Оставить заявку</span>
                </div>                
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide__img" style="background-image:url(img/firstscreen/firstscreen_slide2.png)"></div>
                <div class="swiper-slide__text">
                    <h2>Серверное оборудование <br> для предприятий</h2>
                    <p>Индивидуальный подбор сетевого и серверного оборудования под ваши задачи</p>
                    <span class="swiper-slide__btn btn-modal-slide2">Оставить заявку</span>
                </div>                  
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide__img" style="background-image:url(img/firstscreen/firstscreen_slide3.png)"></div>
                <div class="swiper-slide__text">
                    <h2>IT инфраструктура <br> для предприятий</h2>
                    <p>Индивидуальный подбор сетевого и серверного оборудования под ваши задачи</p>
                    <span class="swiper-slide__btn btn-modal-slide3">Оставить заявку</span>
                </div>                   
            </div>            
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>    
    



    
<section class="service" id="service">
    <div class="container">
        <?= HomeTabsWidget::widget() ?>
    </div>
</section>
  
    
    
<section class="about" id="about">
    <div class="container">
        <div class="about-text">
            <h2>О КОМПАНИИ</h2>
            <p>Управленческие системы - ключ <br> к успешному бизнесу</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint sed corrupti omnis, nam deserunt maxime temporibus impedit voluptatum magnam deleniti?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint sed corrupti omnis, nam deserunt maxime temporibus impedit voluptatum magnam deleniti?</p>
            <div class="about-text__btns">
                <span>Подробности</span>
                <span>Начать сотрудничество</span>
            </div>
        </div>
        <img src="img/about/about_worker.png" alt="" class="about-img">
    </div>
</section>
    
    
    
    
<section class="work" id="work">
    <div class="container">
        <h2>Схема работы с нами</h2>
        <div class="schem">
            <div class="schem-item">
                <i class="fas fa-phone"></i>
                <p>Позвоните нам или оставьте заявку и наш  менеджер свяжеться с вами в течении 5 минут</p>
            </div>
            <div class="schem-item">
                <i class="fab fa-wpforms"></i>
                <p>Мы вышлем вам форму для заполнения или  договоримся обо всем по телефону</p>
            </div>    
            <div class="schem-item">
                <i class="fas fa-user-tie"></i>
                <p>Наши специалисты оценят ваш заказ и  сообщат вам всю информацию и цену</p>
            </div>                  
            <div class="schem-item">
                <i class="fas fa-laptop"></i>
                <p>Заказываем комплектующие у наших поставщиков и  собираем ваш заказ </p>
            </div>                  
            <div class="schem-item">
                <i class="fas fa-truck"></i>
                <p>Отправляем вам ваш заказ транспортной компанией или ждем когда вы приедете</p>
            </div>                  
            <div class="schem-item">
                <i class="far fa-handshake"></i>
                <p>Сотрудничаем дальше, устраиваем корпоратив,  пьем чаи и ходим друг другу в гости</p>
            </div>                                                            
        </div>
    </div>
</section>
    
    
  


<section class="callback">
    <div class="callback-img"></div>
    <div class="container">

        <?= FileFormWidget::widget() ?>

    </div>
</section>
    
    
    
<section class="white">
    <div class="container">
        <h2>Поставщики компьютерного оборудования</h2>
        <p>Компания Сервер АйТи стремиться предлагать лучшее, поэтому мы постоянно расширяем <br> список производителей серверного оборудования. </p>
        <div class="white-imgs">
            <img src="img/white/lenovo.png" alt="">
            <img src="img/white/hp.png" alt="">
            <img src="img/white/viewsonic.png" alt="">
            <img src="img/white/microsoft.png" alt="">
            <img src="img/white/samsung.png" alt="">
            <img src="img/white/hp.png" alt="">
            <img src="img/white/viewsonic.png" alt="">
            <img src="img/white/microsoft.png" alt="">
            <img src="img/white/samsung.png" alt="">            
        </div>
        <h3>Серверное оборудование</h3>
        <p>Вряд ли кто - то в современном мире не осознает важности постоянно растущего рынка IT и его значимости для существующих корпораций и компаний, находящихся на стадии развития. Это касается не только традиционных технологических и промышленных центров России, таких как Москва и Санкт-Петербург, но и тех регионов нашей страны, где идет бурное развитие промышленного производства, добывающих нефтяных и газовых отраслей и прочего. Современное высокопроизводительное серверное оборудование необходимо всем участникам рынка IT, по этой причине сложно недооценивать роль надежных поставщиков продуктов и решений.</p>
        <p>В первую очередь надежным поставщиком, будет являться компания, которая имеет прямые договора с большинством наиболее известных мировых производителей, и предлагает широчайший ассортимент основных и периферийных устройств, программного обеспечения и опций к ним. Компания Server IT предлагает серверное оборудование с учетом потребностей и пожеланий каждого клиента. Специалисты нашей компании всегда предложат строго оригинальные, сертифицированные продукты лучших производителей рынка IT. Одновременно с этим, великолепные, многолетние и взаимовыгодные отношения с нашими коллегами - поставщиками автоматически позволят предложить низкий уровень цен и своевременную, оперативную доставку.</p>
    </div>
</section>

<style>

.garant {
    background: #fff;
    padding: 20px 40px;
    display: flex; 
    justify-content: space-between;  
    background-image: url(img/garant2.png); 
    background-image: url(img/garant2.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 15%;
    border-radius: 10px;
    border: 1px solid var(--color-acc1);
}
.garant-left, .garant-right {
    width: 40%;
}
.garant-item {
    margin: 45px 0;
}
.garant-item h6 {
    font-size: 22px;
    margin-bottom: 10px;
    position: relative;
}
.garant-item h6::before {
    content: '';
    display: block;
    position: absolute;
    top: -7px;
    left: 0;
    width: 180px;
    height: 3px;
    background-color: var(--color-acc1);
    border-radius: 25px;
}
</style>

<section class="reviews">
    <div class="reviews-img"></div>
    <div class="container">

        <h2>Какие наши гарантии?</h2>

        <div class="garant">
            <div class="garant-left">
                <div class="garant-item">
                    <h6>100% Возврат денег</h6>
                    <p>В целях проверки нашей компетенции и выполнения обязательств по договору, первый месяц работы считается испытательным. В случае если Вас не устроит наше обслуживание, то мы полностью вернем деньги за этот месяц.</p>
                </div>
                <div class="garant-item">
                    <h6>Соглашение об уровне сервиса (ответственности) - SLA</h6>
                    <p>В целях проверки нашей компетенции и выполнения обязательств по договору, первый месяц работы считается испытательным. В случае если Вас не устроит наше обслуживание, то мы полностью вернем деньги за этот месяц.</p>
                </div>                
            </div>
            <div class="garant-right">
                <div class="garant-item">
                    <h6>Компетентность специалистов</h6>
                    <p>В целях проверки нашей компетенции и выполнения обязательств по договору, первый месяц работы считается испытательным. В случае если Вас не устроит наше обслуживание, то мы полностью вернем деньги за этот месяц.</p>
                </div>
                <div class="garant-item">
                    <h6>Соглашения о неразглашении информации - NDA</h6>
                    <p>В целях проверки нашей компетенции и выполнения обязательств по договору, первый месяц работы считается испытательным. В случае если Вас не устроит наше обслуживание, то мы полностью вернем деньги за этот месяц.</p>
                </div>                
            </div>
        </div>

        <!-- <h2>Отзывы наших клиентов</h2>
        <div class="swiper-container swiper-container-reviews">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="slide-left">
                        <img src="img/reviews/reviews_author.jpg" alt="">
                    </div>
                    <div class="slide-right">
                        <h6>Василий Иванович</h6>
                        <span>Директор по закупкам Газпром</span>
                        <p>Просто лучшие Вуаааася! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui voluptate temporibus nemo necessitatibus, molestias excepturi recusandae. Corrupti facilis autem voluptas illum! Tempora dolor praesentium hic maxime maiores provident voluptatum? Quod.</p>
                    </div>
                </div>         
                
                <div class="swiper-slide">
                    <div class="slide-left">
                        <img src="img/reviews/reviews_author.jpg" alt="">
                    </div>
                    <div class="slide-right">
                        <h6>Василий Иванович</h6>
                        <span>Директор по закупкам Газпром</span>
                        <p>Просто лучшие Вуаааася! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui voluptate temporibus nemo necessitatibus, molestias excepturi recusandae. Corrupti facilis autem voluptas illum! Tempora dolor praesentium hic maxime maiores provident voluptatum? Quod.</p>
                    </div>
                </div>                   

            </div>
            <div class="swiper-pagination"></div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>         -->
        </div>        -->
    </div>
</section>



<section class="contacts" id="contacts">
    <div class="contacts-top">
        <div class="contacts-top__left">
            <h2>Наши контакты</h2>
            <ul>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <span>Адрес</span>
                        
                        <span>Московская область, город Мытищи, улица Коминтерна, дом 15а литера д, помещение 11</span>
                    </div>
                </li>
                <li>
                    <i class="far fa-clock"></i>
                    <div>
                        <span>Часы работы</span>
                        <span>С 09:00 до 20:00</span>
                    </div>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <div>
                        <span>Телефон</span>
                        <span>+7 (222) 202-20-20</span>
                    </div>
                </li>
                <li>
                    <i class="far fa-envelope-open"></i>
                    <div>
                        <span>E-mail</span>
                        <span>info-sist@yandex.ru</span>
                    </div>
                </li>                                    
            </ul>
        </div>
        <div class="contacts-top__right">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A62d085bfc7810525b02de33168dcea8615df9ebc35a89e95f3036d9bf591fbb4&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
    </div>
    <div class="contacts-bottom">
        <div class="contacts-bottom__left">
            <div class="social">
                <h2 class="social-top">Социальные сети</h2>
                <div class="social-bottom">
                    <i class="fab fa-vk"></i>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <!-- <i class="fab fa-twitter"></i> -->
                    <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-telegram-plane"></i>
                </div>
            </div>
        </div>    
        <div class="contacts-bottom__right">
            <h2>Как до нас добраться</h2>
            <p>Из Москвы. Подъехать к офису можно по улице Льва Толстого или Фрунзе, ориентируясь на высокое круглое здание, далее повернуть на лево и останавиться у шлагбаума с проходной.</p>
            <p>Из Области. Подъехать к офису можно по улице Льва Толстого или Фрунзе, ориентируясь на высокое круглое здание, далее повернуть на лево и останавиться у шлагбаума с проходной.</p>
        </div>    
    </div>
</section>

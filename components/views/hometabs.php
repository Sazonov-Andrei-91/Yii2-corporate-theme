        <div class="service-left">
            <h2>Наши услуги</h2>
            <ul>
                <?php 
                    $i = 0;
                    foreach ($pages as $page) {
                        if($i == 0) {
                            echo '<li class="active">' . $page['h1'] . '</li>';
                            $i++;
                        } else {
                            echo '<li>' . $page['h1'] . '</li>';
                        }
                    }
                ?>
            </ul>
        </div>
        <div class="service-right">
            <?php 
                $i = 0;
                foreach ($pages as $page) {
                    if($i == 0) {
                        echo '<div class="service-right__item active"><div class="service-right__item-top"><img src="'.$page['tabs_img'].'" alt="" class="service-right__item-left"><div class="service-right__item-right"><h2>' .$page['h1']. '</h2>' .$page['tabs_content']. '</div></div><div class="service-right__item-bottom"><button>Информация</button><button>Оставить заявку</button></div></div>';
                        $i++;
                    } else {
                        echo '<div class="service-right__item"><div class="service-right__item-top"><img src="'.$page['tabs_img'].'" alt="" class="service-right__item-left"><div class="service-right__item-right"><h2>' .$page['h1']. '</h2>' .$page['tabs_content']. '</div></div><div class="service-right__item-bottom"><button>Информация</button><button>Оставить заявку</button></div></div>';
                    }
                }
            ?>        
        
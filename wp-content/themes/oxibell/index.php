<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Oxibell
 */

get_header();
?>
<section class="oxi-banner col-12">
     <span>
        BANNER
    </span>
</section>
<section class="oxi-about-us col-8 offset-2">
    <div class="row">
        <div class="oxi-contacts col-lg-3 col-md-12">
            <p style="text-align: justify;">ТОРТЫ НА ЗАКАЗ</p>
            <p style="text-align: justify;">  тел. +38 (067) 542-55-05</p>
            <p style="text-align: justify;">
                <span>с 10:00 до 23:00</span>
            </p>

           <p style="text-align: justify;">
               (время работы)
           </p>
        </div>
        <div class="oxi-about-text col-lg-9 col-md-12">
            <h2 style="text-align: center;"><span style="font-size: 24pt; color: #502518;"><strong>О НАС</strong></span></h2><p><span style="font-family: helvetica, arial, sans-serif;">«…И вот в самый разгар праздника появляется ОН. Гости замирают в восхищении, гадая, что же скрывается за разноцветным кремовым фасадом. Влажный ванильный бисквит, воздушная меренга, а быть может шоколад с дерзкими нотками коньяка? И каждый уже успел присмотреть себе кусочек: этот с коктейльной вишней или тот, где больше соленой карамели…»</span><br><span style="font-family: helvetica, arial, sans-serif;">Мы не просто готовим торты на заказ, мы создаем сказку. Мы хотим, чтобы важные даты вашей жизни оставляли только самые сладкие воспоминания. Именно поэтому каждый торт для нас – это предмет искусства, и к его созданию мы подходим с ответственностью и вдохновением.</span></p><h2><span style="font-size: 20pt; color: #502518;">Почему стоит заказать торт в нашей кондитерской?</span></h2><p><span style="font-family: helvetica, arial, sans-serif;"><strong><em>Широкий выбор начинок.</em></strong>&nbsp;Проверенная классика и авторские кондитерские разработки – вы обязательно найдете свой вкус среди этого разнообразия. Если вы планируете заказать многоярусный торт, нужно учесть важный нюанс. Воздушные и нежные начинки нельзя размещать на нижних ярусах, они попросту просядут под весом верхней части. Для одноярусных тортиков ограничений нет – вы можете выбрать самую легкую и пористую начинку.</span></p><p><span style="font-family: helvetica, arial, sans-serif;"><strong>Натуральные ингредиенты</strong><em><strong>.</strong></em>&nbsp;Это неоспоримое преимущество в сравнении с магазинным десертом. Фермерские сливки, лучшие сорта шоколада, свежие ягоды, отсутствие консервантов и усилителей вкуса – ваш торт будет не только вкусным, но и безопасным. Что особенно важно, если вы выбираете угощение для маленького именинника и его гостей.</span></p><p><span style="font-family: helvetica, arial, sans-serif;"><em><strong>Торты по вашему эскизу.</strong></em>&nbsp;Свадебные, детские, именинные, корпоративные – для нас нет невыполнимой задачи. Мы воплотим в жизнь любую вашу фантазию. Большой выбор топперов, различных фигурок и свечей сделают ваш торт не похожим ни на один другой.&nbsp;</span></p><h2 style="text-align: center;"><span style="font-size: 20pt; color: #502518;">Как сделать заказ</span></h2><p><span style="font-family: helvetica, arial, sans-serif; color: #333333;">Звоните, и наш менеджер предоставит полную консультацию, поможет:&nbsp;</span></p><p style="padding-left: 30px;"><span style="font-family: helvetica, arial, sans-serif;">– выбрать начинку</span></p><p style="padding-left: 30px;"><span style="font-family: helvetica, arial, sans-serif;">– определиться с внешним видом торта</span></p><p style="padding-left: 30px;"><span style="font-family: helvetica, arial, sans-serif;">– рассчитать вес в зависимости от количества гостей.</span></p><p><span style="font-family: helvetica, arial, sans-serif; color: #333333;">Кондитерская группы “Синдикат Вкуса” также работает по горячим заказам, сохраняя при этом качество. Если вам нужен «торт за сутки», мы готовы принять этот вызов и предложить вам варианты.</span></p>
        </div>
    </div>
    <div class="oxi-order-button">
        <a role="button" href="#"><div class="button-name">Заказать торт</div></a>
    </div>
</section>
    <section class="oxi-carousel col-12">
        <?php
        global $post;
        $mycollection = get_posts(array(
            'post_type' => 'collection',
            'publish' => true
        ));
//        var_dump($mycollection);
        ?>
        <div class="multiple-items" style=" top: 50%;
    left: 50%;
    margin-right: 78%;
    transform: translate(-50%, -50%);">
            <?php foreach ($mycollection as $image):?>
            <?php $arr_img = get_field('collection_image', $image->ID);
                foreach ($arr_img as $img):
            ?>
<!--                --><?php //var_dump(get_field('collection_image', $image->ID));?>
                <img src="<?php echo $img['url']?>" class="slide" alt="">
            <?php endforeach;?>
            <?php endforeach;?>
        </div>
    </section>
    <section class="oxi-assortment col-12" id="assortment">
        <div class="row">
            <?php
            $val = 'UAH';
            global $post;
            $myposts = get_posts(array(
                'category_name' => 'assort',
            ));
            foreach($myposts as $post):
            ?>
                <div class="assort-item col-lg-4" style="text-align: center">
                <img src="<?php the_post_thumbnail_url('medium');?>" alt="">
                <div class="assort-name"><?php the_field('assort_name', $post->ID);?></div>
                <div class="assort-description"><?php the_field('assort_description', $post->ID);?></div>
                <div class="assort-price"><?php the_field('assort_price', $post->ID);?><?php echo $val;?></div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </section>
    <section class="oxi-order col-12">
    <span>
        ORDER
    </span>
    </section>
<?php
get_footer();

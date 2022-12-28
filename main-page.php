<?php
/**
 * Template Name: Главная страница
 * 
 * 
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

                <!-- I inserted 14/12/2019 for create button for contact form 7 -->
                <!-- <a href='http://mymax/wp-content/themes/mymax/feedback/index.html' target="_blank"><img src="http://pryaniki-ot-enota.kiev.ua/wp-content/themes/bakes-and-cakes-enot/button_zakazat-tovar.png"> -->
                <!-- <input type="button" value="Заказать товар" onclick="location.href='contact/?tovar=название товара'" -->
                <!-- <a href='http://pryaniki-ot-enota.kiev.ua/wp-content/themes/bakes-and-cakes-enot/feedback/index.html' target="_blank"><img src="http://pryaniki-ot-enota.kiev.ua/wp-content/themes/bakes-and-cakes-enot/button_zakazat-tovar.png"> -->
                <!-- <input type="button" value="Заказать товар" img src="button_zakazat-tovar.png" onclick="location.href='http://enot.loc/wp-content/themes/bakes-and-cakes-enot/feedback/index.html'"> -->

                                <!-- margin: 0 auto !important; -->
                                <!-- display: block; -->
	

        
                        <!-- I inserted 01/11/2019 -->
                        <?php
                        
                    // Выведем названия рубрик. Для этого будем использовать функцию get_categories(). 
                    // В первую очередь, зададим нужные аргументы и запишем их в переменную                                 
                            $arg_cat = array('orderby' => 'name',// сортировка по названию
                                'order' => 'ASC',// сортировка от меньшего к большему
                                'hide_empty' => 1,// скрыть пустые рубрики
                                // 'exclude' => 19,// id рубрики, которые надо исключить
                                'include' => '',// id рубрики, из которых надо выводить
                                'taxonomy' => 'category',// название таксономии
                            );
                            // возвращает массив объектов содержащих информацию о категориях
                            $categories = get_categories($arg_cat);
                        ?>
                     
                         <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
        ?>


        
                <!-- I embeded 02.01.2020 plugins Popup Maker and Contact form -->
 				<!-- from https://help-wp.ru/vsplyvayushhaya-forma-wordpress/  -->
                 <button class="show_form" rel="form1" target="_blank" style="cursor: pointer;"> 
            <img src="/wp-content/themes/mymax/zapisatisya-zanyattya.png" alt="" >
        </button>
                                    <!-- End -->    





        <div class="outnews" style="margin-left: 20px;">
                                <!-- I inserted 01/11/2019 --> 
                                <?php                           
                                    if( $categories ) {
                                        foreach( $categories as $cat ) {
                                // Данные в объекте $cat                                
                                // Получает посты относящиеся к определенным категориям $cat по ID категории 
                                // Выведем названия рубрик name (Рубрика 1) 
                                // переменная $cat отвечает за конкретную рубрику             
                                            // echo $cat->name;
                                        }              
                                    }
                                ?>
                                <!-- I inserted 04/11/2019 -->
                                <?php 
                                // выводим по три записи по каждой категории
                                // проверяем - есть ли категории, а затем обрабатываем результат
		                            if( $categories ){
			                            foreach( $categories as $cat ){
                                        // Данные в объекте $cat
                                        // задаем нужные нам критерии выборки данных из БД
			                                $arg_posts =  array(
                                                // 'orderby'      => 'name',    
                                                // I want to do sorting by time, not by name
                                                'orderby'      => 'date',
                                                'order'        => 'DESC',
                        // сколько выводить постов на странице
                                                'posts_per_page' => 5,
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                        // передаем ID тех рубрик,которые получили,в класс WP_Query(),чтобы он отбирал эти ID
                        // cat - получает посты относящиеся к ID категории
                        // cat - входит в параметры рубрик
                        // тут мы указываем cat_ID,то есть мы передаем ID тех рубрик,
                        // которые получили,в класс WP_Query(),чтобы он отбирал эти ID
                                                'cat' => $cat->cat_ID,
                                                                );
                            // делаем вывод записей по категориям
                            // {посты в каждой категории (переменная $arg_posts) 
                            // выводятся по порядку - по ИМЕНИ поста: 'orderby' => 'name'}
                            // создаем экземпляр объекта - запрос к БД
                            // Реком от Камы- получайте категории и через foreach(){} 
                            // для каждой категории выводите записи с помощью WP_Query
                            // запрос в базу данных,чтобы получить записи из опред категорий
                            // Теперь, переменная $query содержит в себе объект с результатами запроса.
                            // Вывод постов из одной категории               
			                                $query = new WP_Query($arg_posts);
                            // в переменной $query уже записано значение нашего класса
                                            
			                    ?>
                                <?php
                                
                        // в переменную цикла мы будем передавать значение переменной $query         
                        // если существуют посты
                                if ($query->have_posts() ) ?>
                        <!-- тогда мы выводим сначала название категории,а потом будут посты в этой категории -->
				                    <h2><?php echo $cat->name; ?></h2>
                                            
                        <!-- теперь мы выводим посты в этой рубрике                     -->
			                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
							                <div class="pmain-page-post">
								<!-- The function the_permalink() we wrap our function the_post_thumbnail  -->
                                            <a href="<?php the_permalink(); ?>">
                                        <!-- Output of thumbnails with option - widgetfull             -->
								            <?php the_post_thumbnail( 'category-thumb' ); ?>
                                                <?php 
                                                echo "<br />"; 
                                                ?>
								            </a>                                            
                                                <div class="pmain2-page-post">                    
                                    <!-- The function the_permalink() we wrap our function the_title()  -->
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							                    </div>
                                            </div>

                                <?php endwhile; 
                                  // Возвращаем оригинальные данные поста. Сбрасываем $post.
                                wp_reset_postdata()?>
                                <?php		
                                    }
                                }
                                ?>            
                    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();

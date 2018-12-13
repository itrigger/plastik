<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<div id="slider">
	<div class="in">
		<div class="l_block">
			<div class="l_block_in">
				<div class="slide_w">
					<div class="sl_head">Производство изделий из пластамассы на заказ</div>
					<div class="image"></div>
				</div>
				<div class="cats_block">
					<div class="block1">
						<a href="#">Экструзия</a>
					</div>
					<div class="block2">
						<a href="#">Производство пластамассовых изделий</a>
					</div>
					<div class="block3">
						<a href="#">Проектирование и изготовление пресс-форм</a>
					</div>
				</div>
				<div class="btn_w">
					<a href="#" class="btn">Рассчитать стоимость услуг</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>


<div class="block block-about">
	<div class="in">
		<div class="left">
			<div class="image img_dotted">
				<img src="/src/i-08.jpg" alt="">
			</div>
			<div class="image3d"></div>
		</div>
		<div class="right">
			<h1>О компании</h1>
			<p>Наша компания проводит полный цикл изготовления детали, начиная от проектирования и разработки пресс-форм, включая создания чертежей и изготовления 3D-прототипа детали, и, заканчивая, непосредственно, литьем под давлением и конечной реализацией продукта</p>
			<p>Это позволяет нам, с одной стороны, поддерживать минимальную цену нашей продукции, а с другой стороны, полностью контролировать качество и совершенствовать цикл производства пластмассовых изделий.</p>
			<p>
				<a href="#" class="btn-video">Видео о нашей работе</a>
			</p>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div class="block block-about2">
	<div class="in">
		<div class="bg_block">
			<div class="left">
				<ul>
					<li>
						<div class="line1">100</div>
						<div class="line2">изделий в месяц</div>
					</li>
					<li>
						<div class="line1">12</div>
						<div class="line2">лет на рынке</div>
					</li>
					<li>
						<div class="line1">150</div>
						<div class="line2">видов продукции</div>
					</li>
				</ul>
			</div>
			<div class="right">
				<div class="image"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>


<div class="block block-perfect">
	<div class="in">
		<h1>Наши преимущества</h1>
		<div class="l_block">
			<div class="l_block_in">
				<ul>
					<li class="b1">
						<div class="desc">Собственный склад готовой продукции</div>
					</li>
					<li class="b2">
						<div class="desc">Собственный цех по сборке и упаковке продукции</div>
					</li>
					<li class="b3">
						<div class="desc">Высококачественное сырье</div>
					</li>
					<li class="b4">
						<div class="desc">Доставка по всей России</div>
					</li>
					<li class="b5">
						<div class="desc">15 лет успешной деятельности</div>
					</li>
					<li class="b6">
						<div class="desc">Собственный литьевой цех</div>
					</li>
				</ul>
				<div class="btn_w">
					<a href="#" class="btn">Рассчитать стоимость услуг</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>


<div class="block block-photos">
	<div class="in">
		<a href="/src/i-21.jpg" data-fancybox="gallery"><img src="/src/i-21.jpg" alt=""></a>
		<a href="/src/i-22.jpg" data-fancybox="gallery"><img src="/src/i-22.jpg" alt=""></a>
		<a href="/src/i-23.jpg" data-fancybox="gallery"><img src="/src/i-23.jpg" alt=""></a>
		<a href="/src/i-24.jpg" data-fancybox="gallery"><img src="/src/i-24.jpg" alt=""></a>
		<a href="/src/i-25.jpg" data-fancybox="gallery"><img src="/src/i-25.jpg" alt=""></a>
		<div class="get_more">
			<div class="btn_get_more">
				<a href="#">Больше фото</a>
			</div>
		</div>
	</div>
</div>












<article id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >

	<?php if ( has_post_thumbnail() ) :
		$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'twentyseventeen-featured-image' );

		// Calculate aspect ratio: h / w * 100%.
		$ratio = $thumbnail[2] / $thumbnail[1] * 100;
		?>

		<div class="panel-image" style="background-image: url(<?php echo esc_url( $thumbnail[0] ); ?>);">
			<div class="panel-image-prop" style="padding-top: <?php echo esc_attr( $ratio ); ?>%"></div>
		</div><!-- .panel-image -->

	<?php endif; ?>

	<div class="panel-content">
		<div class="wrap">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

				<?php twentyseventeen_edit_link( get_the_ID() ); ?>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
						get_the_title()
					) );
				?>
			</div><!-- .entry-content -->

		</div><!-- .wrap -->
	</div><!-- .panel-content -->

</article><!-- #post-## -->

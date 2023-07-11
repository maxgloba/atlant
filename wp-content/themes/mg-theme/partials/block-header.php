<header class="main-header">
	<div class="container">
		<div class="row row-no-gutter">
			<a class="main-header__logo" href="<?php echo home_url(); ?>">
				<img src="<?php the_field('logo', 'option'); ?>">
			</a>

			<div class="main-header__slogan main-header__desktop"><?php the_field('slogan', 'option'); ?></div>

			<div class="main-header__desc main-header__desktop"><?php the_field('prizuv', 'option'); ?></div>

			<?php if( have_rows('smi', 'option') ): ?>
			<div class="main-header__smi main-header__desktop">
				<?php while( have_rows('smi', 'option') ) : the_row(); ?>
					<a href="<?php the_sub_field('link') ?>"><img src="<?php the_sub_field('icon') ?>" /></a>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>

			<a class="main-header__phone main-header__desktop" href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>

			<button class="btn btn-white openFormConsultation">Заказать звонок</button>

			<button class="main-header__mobile btn btn__nav openNav">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
		<div class="main-header__nav main-header__mobile">
			<div class="main-header__slogan"><?php the_field('slogan', 'option'); ?></div>

			<div class="main-header__desc"><?php the_field('prizuv', 'option'); ?></div>

			<?php if( have_rows('smi', 'option') ): ?>
			<div class="main-header__smi">
				<?php while( have_rows('smi', 'option') ) : the_row(); ?>
					<a href="<?php the_sub_field('link') ?>"><img src="<?php the_sub_field('icon') ?>" /></a>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>

			<a class="main-header__phone" href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
		</div>
	</div>
</header>
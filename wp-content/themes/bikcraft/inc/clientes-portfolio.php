<?php $portfolio = get_page_by_path('portfolio'); ?>
<ul class="portfolio_lista rslides_portfolio">

    <li>
        <div class="grid-8"><img src="<?php the_field('portfolio_img1', $portfolio); ?>" alt="<?php the_field('descricao_img1', $portfolio); ?>"></div>
        <div class="grid-8"><img src="<?php the_field('portfolio_img2', $portfolio); ?>" alt="<?php the_field('descricao_img2', $portfolio); ?>"></div>
        <div class="grid-16"><img src="<?php the_field('portfolio_img3', $portfolio); ?>" alt="<?php the_field('descricao_img3', $portfolio); ?>"></div>
    </li>

    <li>
        <div class="grid-8"><img src="<?php the_field('portfolio_img4', $portfolio); ?>" alt="<?php the_field('descricao_img4', $portfolio); ?>"></div>
        <div class="grid-8"><img src="<?php the_field('portfolio_img5', $portfolio); ?>" alt="<?php the_field('descricao_img5', $portfolio); ?>"></div>
        <div class="grid-8"><img src="<?php the_field('portfolio_img6', $portfolio); ?>" alt="<?php the_field('descricao_img6', $portfolio); ?>"></div>
    </li>

</ul>

<?php if (!is_page('portfolio')) { ?>
    <div class="call">
        <p>conheça mais o nosso portfólio</p>
        <a href="<?php echo get_site_url(); ?>/portfolio" class="btn">Portfólio</a>
    </div>
<?php } ?>
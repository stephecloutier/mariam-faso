<?php if(have_posts()) : while(have_posts()) : the_post();?>
    <section>
        <h1><?php the_title(); ?></h1>
        <div class="content__wysiwyg wysiwyg"><?php the_content(); ?></div>
    </section>
<?php endwhile; endif; ?>

<?php get_header(); ?>
    <?php get_template_part('parts/content'); ?>

    <section class="content__posts">
        <h2 class="content">Mes derniers articles</h2>
        <?php
            $posts = new WP_Query(['showposts' => 2]);
        ?>

        <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>
        <article class="post">
            <h3 class="post__title"><?php the_title(); ?></h3>
            <p class="post__date">Publié le <time class="post__time" datetime="<?php the_time('c'); ?>"><?php the_time('l j F, Y'); ?></time>.</p>
            <figure class="post__thumb">
                <?php the_post_thumbnail('medium'); ?>
            </figure>
            <div class="post__excerpt">
                <p><?php mf_the_excerpt(200); ?></p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire plus</a>
            </div>
        </article>
        <?php endwhile; else: ?>
        <p class="content__empty">Il n'y a pas d'articles à afficher pour le moment.</p>
        <?php endif; ?>

    </section>

    <section class="content__posts">
        <h2 class="content">Mes derniers voyages</h2>
        <?php
            $posts = new WP_Query(['showposts' => 2, 'post_type' => 'trip']);
        ?>

        <?php if($posts->have_posts()) : while($posts->have_posts()) : $posts->the_post(); ?>

        <article class="post post--trip">
            <h3 class="post__title"><?php the_title(); ?></h3>
            <p class="post__date"><?= str_replace(':time', '<time class="post__time" datetime="' . get_the_time('c') . '">' . get_the_time('l j F, Y') . '</time>', __('Publié le :time', 'mf')); ?>.</p>

            <p class="post__terms">Endroits visités&nbsp;: <?php mf_the_places(', ', '<strong class="post__term post__term--:type">', '</strong>', 'Nous ne sommes allés nulle part de connu lors de ce voyage.'); ?></p>


            <div class="post__excerpt">
                <p><?php mf_the_excerpt(200); ?></p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire plus</a>
            </div>

            <?php $fields = get_fields(); ?>

            <dl class="post__info">
                <dt class="post__label">Durée du voyage&nbsp;:</dt>
                <dd class="post__data"><?= $fields['tripDuration']; ?></dd>
                <dt class="post__label">Nombre de voyageurs&nbsp;:</dt>
                <dd class="post__data"><?= mf_chose_singularity($fields['tripParticipants'], 'Un voyageur', ':number voyageurs', 'Personne n’a participé à ce voyage'); ?></dd>
            </dl>
        </article>
        <?php endwhile; else: ?>
        <p class="content__empty">Il n'y a pas d'articles à afficher pour le moment.</p>
        <?php endif; ?>

    </section>

<?php get_footer(); ?>

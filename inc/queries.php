<?php
    function agriprod_services_list($number = -1) { ?>
        <ul class="services-list">
            <?php
                $args = array(
                    'post_type' => 'agriprod_services',
                    'posts_per_page' => $number
                );
                $services = new WP_Query($args);
                while($services->have_posts( )) : $services->the_post();
            ?>
            <li class="agriprod-service card gradient">
                <?php the_post_thumbnail('mediumSize'); ?>
                <div class="card-content">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php the_field('presentation_excerpt'); ?></p>
                </div>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    <?php }

    function agriprod_team() { ?>
        <h2 class="text-center primary-text">Notre équipe</h2>
        <ul class="team">
            <?php
                $args  = array(
                    'post_type' => 'agriprod_team'
                );
                $team = new WP_Query($args);
                while($team->have_posts( )) : $team->the_post(); ?>
            <li class="team-member">
                <?php the_post_thumbnail('square'); ?>
                <div class="member-content">
                    <a href="<?php the_permalink(); ?>">
                        <h4><?php the_title(); ?></h4>
                    </a>
                    <div class="member-details">
                        <p><?php the_field('post'); ?></p>
                        <p><?php the_field('email'); ?></p>
                    </div>
                </div>
            </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    <?php } ?>
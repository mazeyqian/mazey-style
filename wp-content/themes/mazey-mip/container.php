                <div class="col-md-8">
                    <?php
                        if(have_posts()) {
                            while(have_posts()) {
                                the_post();
                    ?>
                    <article class="post-index">
                        <header>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <div>
                            <p><?php the_content(); ?></p>
                        </div>
                        <footer>
                        </footer>
                    </article>
                    <?php
                            }
                        } else {
                            echo "There is no post to show!";
                        }
                    ?>
                    <div>
                        <p><?php posts_nav_link(); ?></p>
                    </div>
                </div>
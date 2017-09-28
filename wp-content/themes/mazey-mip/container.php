                <div class="col-md-8">
                    <?php
                        if(have_posts()) {
                            while(have_posts()) {
                                the_post();
                    ?>
                    <article class="post-index">
                        <header>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <h5>时间：<?php the_time('Y年m月d日');?> - 作者：<?php the_author(); ?> - 分类：<?php the_category(', '); ?></h5>
                        </header>
                        <div>
                            <p><?php the_content(); ?></p>
                        </div>
                        <footer>
                            <?php if(is_single()): ?>
                            <ul class="post-page">
                            	<li><?php previous_post_link('上一篇：%link'); ?></li>
                            	<li><?php next_post_link('下一篇: %link'); ?></li>
                            </ul>
                            <?php endif; ?>
                        </footer>
                    </article>
                    <?php
                            }
                        } else {
                            echo "There is no post to show!";
                        }
                    ?>
                    <div class="post-pagination text-center">
                        <?php the_posts_pagination(array(
                            'prev_text' => '上一页',
                            'next_text' => '下一页'
                        )); ?>
                    </div>
                </div>
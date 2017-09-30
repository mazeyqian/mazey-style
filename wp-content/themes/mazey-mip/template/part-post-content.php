                    <?php
                        if(have_posts()) {
                            while(have_posts()) {
                                the_post();
                    ?>
                    <article class="post-index">
                        <header>
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <p class="post-index-detail">时间：<?php the_time('Y年m月d日');?> / 作者：<?php the_author(); ?> / 分类：<?php the_category(', '); ?></p>
                        </header>
                        <div>
                            <p><?php the_content(); ?></p>
                        </div>

                        <footer>
                            <?php if(is_single()): ?>
                            <div class="post-tags">
                            <?php
                                /* 当前标签 */
                                //var_dump(get_the_tags());
                                $listThisTags = get_the_tags();
                                if($listThisTags):
                                    $listThisTagsID = array();
                                    $listThisTagsName = array();
                                    $listThisTagsLink = array();
                                    foreach($listThisTags as $detailThisTags):
                                        $listThisTagsLink[] = get_tag_link($detailThisTags->term_id);
                                        $listThisTagsName[] = $detailThisTags->name;
                                    endforeach;
                                    /* print_r($listThisTagsLink);
                                    print_r($listThisTagsName); */
                                    for($index = 0, $max = count($listThisTagsLink); $index < $max; $index ++):
                                        echo "<a href='{$listThisTagsLink[$index]}' class='btn btn-defalut'>{$listThisTagsName[$index]}</a>";
                                    endfor;
                                endif;
                            ?>
                            </div>
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
<div class="comments-wrapper">


					<div class="comments" id="comments">


						<div class="comments-header">

							<h2 class="comment-reply-title">
								<!-- If there is comments, display the amount -->
                            <?php
                                if ( ! have_comments()) {
                                    echo "Leave A Comment";
                                } else {
                                    echo get_comments_number(). " Comments";
                                }
                            ?>
                            
                            
                            <!-- .comments-title -->

						</div><!-- .comments-header -->

						<div class="comments-inner">

                        <!-- Pulling in the  comments -->
                            <?php
                                wp_list_comments(
                                    // This array contains the different settings for comments
                                    array(
                                        'avatar_size' => 120,
                                        'style' => 'div',
                                    )
                                );
                            ?>

						</div><!-- .comments-inner -->

					</div>
                    <!-- Comments -->

					<hr class="" aria-hidden="true">
                        
                    <?php
                        if( comments_open()) {
                            comment_form(
                                array(
                                    'class_form' => '',
                                    'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                                    'title_reply_after' => '</h2>',
                                

                                )
                            );

                        }
                    ?>

				</div>
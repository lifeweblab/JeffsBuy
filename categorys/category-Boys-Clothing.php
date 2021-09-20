<?php global $deeplive; ?>
<?php /* Template Name: Boys Clothing */ ?>
<?php get_header(); ?>
    <div class="content_top">
        <h3 class="m_1"><?php single_cat_title(); ?>Boys CLothing Products</h3>
        <div class="container">
            <div class="box_1">
                <div class="col-md-12">
                    <div class="section group">
					
				<?php 
                    $categoryname = 'boys-clothing';

					$jeffproducts = new WP_Query(array(
							'post_type' => 'products',
                            'category_name' => 'kids',
							));      
                ?>
					
					
					<?php while($jeffproducts -> have_posts()) : $jeffproducts -> the_post(); ?>
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                <div class="product-img">
                                    <a href="<?php the_permalink(); ?>">
                                       <?php the_post_thumbnail('full', array( 'class' => 'img-responsive' )); ?>
                                       </a>
                                </div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                <div><a href="<?php the_permalink(); ?>" rel="tag"><?php the_title(); ?></a></div>
                                <h3><a href="<?php the_permalink(); ?>"><?php read_more(7); ?></a></h3>
                                <span class="amount item_price"></span>
                            </div>
                        </div>
						<?php endwhile; ?>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<!--------------Footer--------------->
<?php get_footer(); ?>
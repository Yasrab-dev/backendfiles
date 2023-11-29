<?php
/**
 * Template Name: Block Template
 *
 */

get_header();
?>
<?php if(have_rows('add_new_block')):?>
<?php while(have_rows('add_new_block') ): the_row();?>

	<?php if (get_row_layout() == 'home_video_header'):?>
	<!-- BANNER SEC STARTS -->
	<section class="banner" id="home-banner">
		<div class="banner-sec-ouuterwrap">
			<div class="banner-content">
				<h1><?php echo the_sub_field('heading_head_hp');?></h1>
				<div class="site-btn"> <a href="<?php echo the_sub_field('link_url_hp_bann');?>"> <strong class=""><?php echo the_sub_field('link_name_hp_bann');?></strong> <span><i class="fa-solid fa-arrow-right-long"></i></span></a> </div>
			</div>
			<div class="back-video">
				<video id="vid" width="100%" height="100%" poster="" autoplay="" loop="" muted="">
					<source src="<?php echo the_sub_field('add_background_video');?>" type="video/mp4">
				</video>
			</div>
		</div>
	</section>
	<!-- BANNER SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'inner_page_header'):?>
	<!-- BANNER SEC STARTS -->
	<section class="banner <?php echo the_sub_field('inner_hd_sec_class');?>" id="<?php echo the_sub_field('inner_hd_sec_id');?>" style="background-image:url(<?php echo the_sub_field('background_image_inn_hd');?>);">
		<div class="container-fluid">
			<div class="banner-sec-outter">
				<?php if( get_sub_field('page_heading_inn_hd') ): ?>
				<div class="row">
					<div class="col-md-12">
						<div class="banner-heading">
							<h1><?php echo the_sub_field('page_heading_inn_hd');?></h1>
						</div>
					</div>
					<div class="col-md-12">
						<div class="team-banner-links ">
							<?php if( get_sub_field('add_email_address') ): ?>
							<div class="banner-link">
								<div class="link-thumbnail"> <img src="https://lorientcap.flywheelsites.com/wp-content/uploads/2023/04/email-1.png" alt=""> </div>
								<div class="banner-link-anchor"> <a href="mailto:<?php echo the_sub_field('add_email_address');?>" class="split-character"><?php echo the_sub_field('add_email_address');?></a> </div>
							</div>
							<?php endif; ?>
							<?php if( get_sub_field('add_contact_number') ): ?>
							<div class="banner-link">
								<div class="link-thumbnail"> <img src="https://lorientcap.flywheelsites.com/wp-content/uploads/2023/04/call-1.png" alt=""> </div>
								<div class="banner-link-anchor"> <a href="tel:<?php echo the_sub_field('add_contact_number');?>" class="split-character"> <?php echo the_sub_field('add_contact_number');?></a> </div>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php if( get_sub_field('add_form_shortcode_contact') ): ?>
					<div class="col-md-12"> <?php echo do_shortcode(get_sub_field('add_form_shortcode_contact')); ?> </div>
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<?php if( get_sub_field('left_heading_hp_inn') ): ?>
				<div class="row">
					<div class="col-md-5">
						<div class="banner-heading">
							<h1><?php echo the_sub_field('left_heading_hp_inn');?></h1>
						</div>
					</div>
					<div class="col-md-7">
						<div class="team-banner-content">
							<p><?php echo the_sub_field('right_heading_Inner_hd');?></p>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<?php if( have_rows('add_filters_pgtop') ): ?>
			<div class="banner-buttons filters-button-group">
				<button class="button is-checked" data-filter="*">All</button>
				<?php
				while ( have_rows( 'add_filters_pgtop' ) ): the_row();
				$strraw = get_sub_field( 'add_filter_names' );
				$srtt1 = str_replace( ' ', '_', $strraw );
				$srtt = strtolower(str_replace( '&', '', $srtt1 )); ?>
				<button class="button" data-filter=".<?php echo $srtt ?>">
				<?php the_sub_field('add_filter_names'); ?>
				</button>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
	</section>
	<?php endif;?>

	<?php if (get_row_layout() == 'home_about_section'):?>
	<!-- ABOUT SEC STARTS -->
	<section class="about">
		<h2><?php echo the_sub_field('heading_abt_sec');?></h2>
		<p><?php echo the_sub_field('content_abt_sec');?></p>
		<div class="counter-block-main">
			<?php if( have_rows('add_about_blocks') ): ?>
			<?php while ( have_rows( 'add_about_blocks' ) ):
				the_row(); ?>
			<div class="counter-block">
				<div class="counter-content">
					<div class="counter-title">
						<?php the_sub_field('heading_abt_inn'); ?>
					</div>
					<h2>
						<?php the_sub_field('subheading_abt_inn'); ?>
					</h2>
					<p>
						<?php the_sub_field('content_abt_sec'); ?>
					</p>
				</div>
				<div class="site-btn"> <a href="<?php the_sub_field('link_url_inn_abt'); ?>"> <strong class="">
					<?php the_sub_field('link_name_inn_abt'); ?>
					</strong> <span><i class="fa-solid fa-arrow-right-long"></i></span></a> </div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<!-- ABOUT SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'healthcare_blocks'):?>
	<!-- HEALTH SEC STARTS -->
	<section class="health">
		<div class="container-fluid">
			<div class="health-hd">
				<h2> <?php echo the_sub_field('add_heading_hcb');?> </h2>
			</div>
			<div class="row g-2 justify-content-center">
				<?php if( have_rows('add_new_healthcare_block') ): ?>
				<?php
				while ( have_rows( 'add_new_healthcare_block' ) ):
					the_row();
				?>
				<div class="col-md-6 col-lg-4"> <a href="<?php the_sub_field('link_url_healthcare'); ?>">
					<div class="services-block">
						<h2>
							<?php the_sub_field('heading_healthcare_sec'); ?>
						</h2>
						<p>
							<?php the_sub_field('content_healthcare_sec'); ?>
						</p>
						<div class="site-btn"> <a href="<?php the_sub_field('link_url_healthcare'); ?>"> <strong class="">
							<?php the_sub_field('link_name_healthcare'); ?>
							</strong> <span><i class="fa-solid fa-arrow-right-long"></i></span></a> </div>
						<img src="<?php the_sub_field('background_image_healthcare'); ?>" alt=""> </div>
					</a> </div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- HEALTH SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'home_portfolio'):?>
	<!-- PARTNER SEC STARTS -->
	<section class="partners">
		<h2>
			<?php the_sub_field('add_content_paragraph_port'); ?>
		</h2>
		<div class="site-btn d-flex justify-content-center"> <a href="<?php the_sub_field('button_url_port'); ?>"> <strong class="">
			<?php the_sub_field('button_name_port'); ?>
			</strong> <span><i class="fa-solid fa-arrow-right-long" ></i></span></a> </div>
		<?php if( have_rows('add_background_image_port') ):$counter = 1; ?>
		<?php
		while ( have_rows( 'add_background_image_port' ) ): the_row();

		?>
		<div class="background-image" id="img_<?php echo $counter;?>"> <img src="<?php the_sub_field('add_back_image'); ?>" alt=""> </div>
		<?php $counter++; endwhile; ?>
		<?php endif; ?>
	</section>
	<!-- PARTNER SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'react_news_section'):?>
	<!-- NEWS SEC STARTS -->
	<section class="news">
		<h2>
			<?php the_sub_field('add_heading_recent'); ?>
		</h2>
		<div class="news-slider">
			<?php

			$posts = get_posts( array(
				'posts_per_page' => -1,
				'post_type' => 'post',
				 'order' => 'ASC',
				'category' => 4,
			) );

			if ( $posts ): ?>
			<?php
			foreach ( $posts as $post ):

				setup_postdata( $post );
			$cats = get_the_category();
			$cat_name = $cats[ 0 ]->name;
			?>
			<div> <a href="<?php the_permalink(); ?>">
				<div class="slider-block " id="image_1">
					<h6><?php echo $cat_name;?></h6>
					<h3>
						<?php the_title(); ?>
					</h3>
					<?php echo the_excerpt(); ?>
					<div class="site-btn d-flex "> <a href="<?php the_permalink(); ?>"> <strong class="">Learn More</strong> <span><i class="fa-solid fa-arrow-right-long" ></i></span></a> </div>
				</div>
				</a> </div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</section>
	<!-- NEWS SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'map_section'):?>
	<!-- MAP SEC  STARTS -->
	<section class="map">
		<div class="container-fluid">
			<div class="row">
				<?php if( have_rows('add_new_map_info') ): ?>
				<?php
				while ( have_rows( 'add_new_map_info' ) ): the_row();
				?>
				<div class="col-md-6">
					<div class="map-sec-block">
						<?php the_sub_field('add_map_iframe'); ?>
						<div class="map-description">
							<h3>
								<?php the_sub_field('add_new_heading'); ?>
							</h3>
							<p>
								<?php the_sub_field('add_new_address'); ?>
							</p>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- MAP SEC  ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'add_news_insight_blogs'):?>
	<!-- NEWS CARD SEC STARTS -->
	<section class="card-sec">
		<div class="conatiner-fluid">
			<div class="row">
				<?php
				$posts = get_posts( array(
					'posts_per_page'	=> -1,
					'post_type'			=> 'post',
					'category'			=> 4,
					'orderby'			=> 'news_date',
					'order'				=> 'DSC',
				) );

				if ( $posts ): ?>
				<?php
				foreach ( $posts as $post ):
					setup_postdata( $post ); ?>
				<!-- CARD -->
				<div class="col-lg-4 col-md-6">
					<div class="card">
						<div class="card-main-content">
							<h3><?php echo the_title();?></h3>
							<h5>
							<?php the_field('news_date'); //echo get_the_date( 'Y-m-d' ); ?> </h5>
							<p><?php echo the_excerpt(); ?> </p>
						</div>
						<a href="<?php the_permalink(); ?>" class="content"> <strong class="split-character">read more</strong> </a> </div>
				</div>
				<!-- CARD -->

				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- NEWS CARD SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'team_members_section'):?>
	<!-- TEAM CARD SEC STARTS -->
	<section class="team-card">
		<div class="container-fluid">
			<div class="cards-filter">
				<div class="banner-buttons filters-button-group">
				<button class="button is-checked" data-filter="*">All</button>
								<button class="button" data-filter=".leadership">
				Leadership				</button>
								<button class="button" data-filter=".investment__portfolio_management">
				Investment &amp; Portfolio Management				</button>
								<button class="button" data-filter=".business_development">
				Business Development				</button>
								<button class="button" data-filter=".finance__operations">
				Finance &amp; Operations				</button>
								<button class="button" data-filter=".administrative">
				Administrative				</button>
					
					<button class="button" data-filter=".investor_relations__capital_formation">
				Investor Relations & Capital Formation				</button>
					


							</div>
			</div>
			<div class="row justify-content-between grid"> 
				<!-- CARD -->
				<?php $posts = get_posts( array(
					'posts_per_page' => -1,
					'post_type' => 'team',
					'orderby' => 'title',
					'order' => 'ASC'
				) );
				if ( $posts ){
					$counter = '0';
					foreach ( $posts as $post ){
						setup_postdata( $post );
						$sqrwtt1 = str_replace( ' ', '_', $sqtwr1 );
						
						$title = get_the_title();
						$title_new = str_replace('aaa-', '', $title);
						$bio_img = get_field('member_image');
						$Designation = str_replace('_', ' ', get_field('member_designation'));
						$Bios = get_the_content();
						$bio_fun = get_field('fun_facts');
						$bio_quote_heading = get_field('personal_quote_heading');
						$bio_quote = get_field('greatest_portfolio_company_moment');
						
						
						//
						
						?>
						<!-- CARD -->
						<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 element-item <?php 
						$team_group_arr = get_field('team_group');
						$team_group = implode("|", $team_group_arr);
						$team_group = str_replace(' ', '_', $team_group);
						$team_group = str_replace('&', '', $team_group);
						$team_group = str_replace('|', ' ', $team_group);
						$team_group = strtolower( $team_group );
						
						echo $team_group;
						//echo "<pre>"; print_r( $team_group ); echo "</pre>";
						
						//echo (implode(" ",$team_group)); 
						
						// strtolower( str_replace( ' ', '_', get_field('member_designation') ) ); ?>" data-category="transition">
							<div class="card">
								<div class="card-main-content">
									<div class="card-main-thumbnail"> <img src="<?php echo $bio_img;?>" alt=""> </div>
									<h4><?php echo $title_new; ?></h4>
									<h5><?php echo $Designation; ?></h5>
								</div>
								<div class="content">
									<div class="team-bg-image"> <img src="<?php echo $bio_img;?>" alt=""> </div>
									<div class="team-card-btn">
										<?php /* <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $counter;?>" >view bio</a> */ ?>
										<a href="javascript:void(0);" 
										   data-title="<?php echo $title_new;?>" 
										   data-designation="<?php echo $Designation;?>" 
										   data-img="<?php echo $bio_img;?>" 
										   data-content="<?php echo $Bios; ?>"
										   data-fun="<?php echo $bio_fun; ?>"
										   data-quoteh="<?php echo $bio_quote_heading; ?>"
										   data-quote="<?php echo $bio_quote; ?>"
										   class="view_bio" >view bio</a>
									</div>
									<h4>
										<?php echo $title_new; ?>
									</h4>
									<h5><?php echo $Designation; ?></h5>
								</div>
							</div>
						</div>
						<!-- CARD -->
					<?php $counter++; 
					}
					wp_reset_postdata();
				} ?>
			</div>
		</div>
		
		
<div class="modal fade" id="BioModal" tabindex="-1" aria-labelledby="BioModal" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="modal-content-block d-flex">
					<div class="modal-image bio-img"> <img src="https://lorientcap.flywheelsites.com/wp-content/uploads/2023/02/gabriela.png" alt=""> </div>
					<div class="modal-content-intro">
						<h2 class="bio-title">TITLE</h2>
						<h5 class="bio-designation">member_designation</h5>
						<p class="bio-content">the_content</p>
					</div>
				</div>
				<div class="facts-block d-flex justify-content-between">
					<div class="funfacts ">
						<h3>fun facts</h3>
						<div class="bio-fun">fun_facts</div>
					</div>
					<div class="portfolio">
						<h3 class="bio-head">personal_quote_heading</h3>
						<p class="bio-company">greatest_portfolio_company_moment</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<!-- Modal -->
		<?php /*
		$posts = get_posts( array(
			'posts_per_page' => -1,
			'post_type' => 'team',
			'orderby' => 'title',
			'order' => 'ASC'
		));
		if ( $posts ){
			$counter = '0';
			foreach ( $posts as $post ){
				setup_postdata( $post );
				if( get_field('fun_facts') ){ ?>
					<!-- MODAL SEC Starts -->
					<div class="modal fade" id="exampleModal<?php echo $counter;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="modal-content-block d-flex">
										<div class="modal-image"> <img src="<?php echo the_field('member_image');?>" alt=""> </div>
										<div class="modal-content-intro">
											<h2>
												<?php $title = get_the_title(); echo str_replace('aaa-', '', $title); ?>
											</h2>
											<h5><?php echo str_replace('_', ' ', get_field('member_designation')); ?></h5>
											<p><?php echo the_content();?></p>
										</div>
									</div>
									<div class="facts-block d-flex justify-content-between">
										<div class="funfacts ">
											<h3>fun facts</h3>
											<?php echo the_field('fun_facts');?> </div>
										<div class="portfolio">
											<h3><?php echo the_field('personal_quote_heading'); ?></h3>
											<p><?php echo the_field('greatest_portfolio_company_moment'); ?></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- MODAL SEC ENDS -->
				<?php }
				$counter++;
			}
			wp_reset_postdata();
		} ?>
		<?php */ ?>
	</section>
	<?php endif;?>
	<!-- TEAM CARD SEC STARTS -->

	<?php if (get_row_layout() == 'partner_section'):?>
	<!-- PARTNERSHIP CARD SEC STARTS -->
	<section class="partnership">
		<div class="container-fluid">
			<div class="partnetfilter">
				<div class="banner-buttons filters-button-group">
				<button class="button is-checked" data-filter="*">All</button>
								<button class="button" data-filter=".active">
				Active				</button>
								<button class="button" data-filter=".realized">
				Realized				</button>
							</div>
			</div>
			<div class="row grid"> 
				
				<!-- CARD -->
				<?php

				$posts = get_posts( array(
					'posts_per_page' => -1,
					'post_type' => 'partner',
					'orderby' => 'title',
					'order' => 'ASC'
				) );

				if ( $posts ): ?>
				<?php
				foreach ( $posts as $post ):
				setup_postdata( $post );
				$stwr = get_sub_field( 'partner_type' );
				$srwtt = str_replace( ' ', '_', $str ); ?>
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 element-item <?php echo strtolower(str_replace(' ', '_', get_field('partner_type'))); ?>" data-category="transition">
					<div class="card">
						<div class="card-main-content"> <img src="<?php echo the_field('partner_image');?>" alt=""> </div>
						<div class="content" style="color: #000;">
							<div class="content-thumbnail"> <img src="<?php echo the_field('partner_image');?>" alt=""> </div>
							<?php echo the_title();?>
							<h5><?php echo the_field('location_partner');?></br>STATUS: <?php echo the_field('partner_type'); //the_field('status_partner_copy');?></h5>
							<p><?php echo the_content();?></p>
							<div class="card-button"> <a href="<?php echo the_field('website_url_part');?>" class="split-character" target="blank">Website</a> </div>
						</div>
					</div>
				</div>
				<!-- CARD -->
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- PARTNERSHIP CARD SEC STARTS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'our_core_values_sec'):?>
	<!-- COLABORATION SEC STARTS -->
	<section class="collaboraion">
		<h2><?php echo the_sub_field('heading_core_val');?></h2>
		<div class="container-fluid">
			<div class="row">
				<?php if( have_rows('add_new_value') ): ?>
				<?php
				while ( have_rows( 'add_new_value' ) ): the_row();
				$image = get_sub_field( 'image' );
				?>
				<div class="col-md-6">
					<div class="collaboration-block ">
						<div class="collaboration-thumbnail"> <img src="<?php the_sub_field('add_icon_image'); ?>" alt=""> </div>
						<div class="collaboration-content">
							<h3>
								<?php the_sub_field('add_heading_core'); ?>
							</h3>
							<p>
								<?php the_sub_field('add_contact_core'); ?>
							</p>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- COLABORATION SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'approach_criteria'):?>
	<!-- CRITEIA CARD SEC STARTS -->
	<section class="criteria" style="background-image: url(<?php the_sub_field('background_image_criteria'); ?>)">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5 d-md-none">
					<div class="criteria-heading-block">
						<h3>
							<?php the_sub_field('right_heading'); ?>
						</h3>
					</div>
				</div>
				<div class="col-md-7">
					<div class="criteria-content-block">
						<?php if( have_rows('left_heading_and_content') ): ?>
						<?php
						while ( have_rows( 'left_heading_and_content' ) ): the_row();

						?>
						<h2>
							<?php the_sub_field('add_heading_rep'); ?>
						</h2>
						<p>
							<?php the_sub_field('add_content_rep'); ?>
						</p>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-5 d-md-block d-none">
					<div class="criteria-heading-block">
						<h3>
							<?php the_sub_field('right_heading'); ?>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- CRITEIA CARD SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'approach_blogs'):?>
	<!-- PARTNER APPROQQACH SEC STARTS -->
	<section class="partner-approach">
		<div class="container-fluid">
			<div class="partner-approach-sec-outterwrap">
				<div class="partner-approach-heading">
					<h3>
						<?php the_sub_field('add_heading_app_blog'); ?>
					</h3>
					<p>
						<?php the_sub_field('add_sub_heading_app_blog'); ?>
					</p>
				</div>
				<div class="partner-slider">
					<?php if( have_rows('add_approach_blocks') ): ?>
					<?php
					while ( have_rows( 'add_approach_blocks' ) ): the_row();
					?>
					<div>
						<div class="slider-block" id="image_1">
							<div class="partner-slider-background-image"> <img src="<?php the_sub_field('add_background_image_partblo'); ?>" alt=""> </div>
							<h3>
								<?php the_sub_field('add_heading_partblog'); ?>
							</h3>
							<p>
								<?php the_sub_field('add_content_partblog'); ?>
							</p>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- PARTNER APPROQQACH SEC ENDS -->
	<?php endif;?>

	<?php if (get_row_layout() == 'partners_blogs'):?>
	<!-- PARTNER APPROQQACH SEC STARTS -->
	<section class="partnership">
		<div class="container-fluid">
			<div class="row grid">
				<?php if( have_rows('add_partners_blocks') ): ?>
				<?php
				while ( have_rows( 'add_partners_blocks' ) ): the_row();
				?>

				<!-- CARD -->
				<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 element-item <?php the_sub_field('partner_type'); ?>" data-category="transition">
					<div class="card">
						<div class="card-main-content"> <img src="<?php the_sub_field('add_background_image_partblo'); ?>" alt=""> </div>
						<div class="content" style="color: #000;">
							<div class="content-thumbnail"> <img src="<?php the_sub_field('add_background_image_partblo'); ?>" alt=""> </div>
							<h3>
								<?php the_sub_field('add_heading_partblog'); ?>
							</h3>
							<h3>
								<?php the_title(); ?>
							</h3>
							<h3>
								<?php the_sub_field('sub_title_partner'); ?>
							</h3>
							<h5>
								<?php the_sub_field('location_partner'); ?>
								<span>|</span>STATUS:
								<?php the_sub_field('status_partner_copy'); ?>
							</h5>
							<p>
								<?php the_sub_field('add_content_partblog'); ?>
							</p>
							<div class="card-button"> <a href="<?php the_sub_field('website_url_part'); ?> " class="split-character">Website</a> </div>
						</div>
					</div>
				</div>
				<!-- CARD -->

				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- PARTNER APPROQQACH SEC ENDS -->
	<?php endif;?>

<?php endwhile;?>
<?php endif;?>

<?php get_footer(); ?>
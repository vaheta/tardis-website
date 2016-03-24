<section class="about-us" id="aboutus">
	<div class="container">


		<!-- SECTION HEADER -->

		<div class="section-header">


			<!-- SECTION TITLE -->

			<?php 
			$zerif_aboutus_title = get_theme_mod('zerif_aboutus_title',__('About Us','zerif-lite'));
			
			if( !empty($zerif_aboutus_title) ):
				echo '<h2 class="white-text">'.__($zerif_aboutus_title,'zerif-lite').'</h2>';
			endif;
			?>

			<!-- SHORT DESCRIPTION ABOUT THE SECTION -->

			<?php


				$zerif_aboutus_subtitle = get_theme_mod('zerif_aboutus_subtitle',__('Add a subtitle in Customizer, "About us section"','zerif-lite'));


				if( !empty($zerif_aboutus_subtitle) ):


					echo '<h6 class="white-text">';


						echo __($zerif_aboutus_subtitle,'zerif-lite');


					echo '</h6>';


				endif;


			?>
		</div><!-- / END SECTION HEADER -->


		<!-- 3 COLUMNS OF ABOUT US-->


		<div class="row">


			<!-- COLUMN 1 - BIG MESSAGE ABOUT THE COMPANY-->


			<?php


				$zerif_aboutus_biglefttitle = get_theme_mod('zerif_aboutus_biglefttitle',__('In order to Change the Title here you Need to go to Customizer','zerif-lite'));


				if( !empty($zerif_aboutus_biglefttitle) ):


					echo '<div class="col-lg-4 col-md-4 column">';


						echo '<div class="big-intro" data-scrollreveal="enter left after 0s over 1s">';


							echo __($zerif_aboutus_biglefttitle,'zerif-lite');


						echo '</div>';


					echo '</div>';


				endif;





				$zerif_aboutus_text = get_theme_mod('zerif_aboutus_text','You can add here a large piece of text. For that, please go in the Admin Area, Customizer, "About us section" <br/> <br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus, eros at accumsan auctor, felis eros condimentum quam, non porttitor est urna vel neque.  <br/> <br/>Maecenas non tellus vitae augue tempor venenatis. Mauris ac tincidunt dolor, id feugiat odio. Mauris egestas ligula sit amet lorem condimentum ultrices');


				if( !empty($zerif_aboutus_text) ):


					echo '<div class="col-lg-4 col-md-4 column" data-scrollreveal="enter bottom after 0s over 1s">';


						echo '<p>';


							echo __($zerif_aboutus_text,'zerif-lite');


						echo '</p>';


					echo '</div>';


				endif;


			?>




		<!-- COLUMN 1 - SKILSS-->


		<div class="col-lg-4 col-md-4 column">


			<ul class="skills" data-scrollreveal="enter right after 0s over 1s">





				<!-- SKILL ONE -->


				<li class="skill">


					<?php


						$zerif_aboutus_feature1_nr = get_theme_mod('zerif_aboutus_feature1_nr','50');


						if( !empty($zerif_aboutus_feature1_nr) ):


							echo '<div class="skill-count">';


								echo '<input type="text" value="'.$zerif_aboutus_feature1_nr.'" data-thickness=".2" class="skill1">';


							echo '</div>';


						endif;

						$zerif_aboutus_feature1_title = get_theme_mod('zerif_aboutus_feature1_title',__('Feature 1','zerif-lite'));
						$zerif_aboutus_feature1_text = get_theme_mod('zerif_aboutus_feature1_text');
						$zerif_aboutus_feature1_text = get_theme_mod('zerif_aboutus_feature1_text');

						if( !empty($zerif_aboutus_feature1_title) ):
							echo '<h6>'.__($zerif_aboutus_feature1_title,'zerif-lite').'</h6>';
						endif;

						if( !empty($zerif_aboutus_feature1_text) ):
							echo '<p>'.__($zerif_aboutus_feature1_text,'zerif-lite').'</p>';
						endif;


					?>


				</li>





				<!-- SKILL TWO -->


				<li class="skill">


					<?php


						$zerif_aboutus_feature2_nr = get_theme_mod('zerif_aboutus_feature2_nr','70');


						if( !empty($zerif_aboutus_feature2_nr) ):


							echo '<div class="skill-count">';


								echo '<input type="text" value="'.$zerif_aboutus_feature2_nr.'" data-thickness=".2" class="skill2">';


							echo '</div>';


						endif;

						$zerif_aboutus_feature2_title = get_theme_mod('zerif_aboutus_feature2_title',__('Feature 2','zerif-lite'));
						$zerif_aboutus_feature2_text = get_theme_mod('zerif_aboutus_feature2_text');

						if( !empty($zerif_aboutus_feature2_title) ):
							echo '<h6>'.__($zerif_aboutus_feature2_title,'zerif-lite').'</h6>';
						endif;

						if( !empty($zerif_aboutus_feature2_text) ):
							echo '<p>'.__($zerif_aboutus_feature2_text,'zerif-lite').'</p>';
						endif;


					?>

				</li>





				<!-- SKILL THREE -->


				<li class="skill">


					<?php


						$zerif_aboutus_feature3_nr = get_theme_mod('zerif_aboutus_feature3_nr','100');


						if( !empty($zerif_aboutus_feature3_nr) ):


							echo '<div class="skill-count">';


								echo '<input type="text" value="'.$zerif_aboutus_feature3_nr.'" data-thickness=".2" class="skill3">';


							echo '</div>';


						endif;

						$zerif_aboutus_feature3_title = get_theme_mod('zerif_aboutus_feature3_title',__('Feature 3','zerif-lite'));
						$zerif_aboutus_feature3_text = get_theme_mod('zerif_aboutus_feature3_text');

						if( !empty($zerif_aboutus_feature3_title) ):
							echo '<h6>'.__($zerif_aboutus_feature3_title,'zerif-lite').'</h6>';
						endif;

						if( !empty($zerif_aboutus_feature3_text) ):
							echo '<p>'.__($zerif_aboutus_feature3_text,'zerif-lite').'</p>';
						endif;


					?>


				</li>


				<!-- SKILL FOUR -->


				<li class="skill">


					<?php


						$zerif_aboutus_feature4_nr = get_theme_mod('zerif_aboutus_feature4_nr','10');


						if( !empty($zerif_aboutus_feature4_nr) ):


							echo '<div class="skill-count">';


								echo '<input type="text" value="'.$zerif_aboutus_feature4_nr.'" data-thickness=".2" class="skill4">';


							echo '</div>';


						endif;

						$zerif_aboutus_feature4_title = get_theme_mod('zerif_aboutus_feature4_title',__('Feature 4','zerif-lite'));
						$zerif_aboutus_feature4_text = get_theme_mod('zerif_aboutus_feature4_text');

						if( !empty($zerif_aboutus_feature4_title) ):
							echo '<h6>'.__($zerif_aboutus_feature4_title,'zerif-lite').'</h6>';
						endif;

						if( !empty($zerif_aboutus_feature4_text) ):
							echo '<p>'.__($zerif_aboutus_feature4_text,'zerif-lite').'</p>';
						endif;


					?>


				</li>





			</ul>


		</div> <!-- / END SKILLS COLUMN-->


	</div> <!-- / END 3 COLUMNS OF ABOUT US-->





	<!-- CLIENTS -->
	<!--<?php
		if(is_active_sidebar( 'sidebar-aboutus' )):
			echo '<div class="our-clients">';
				echo '<h5><span class="section-footer-title">'.__('НАШИ СЧАСТЛИВЫЕ ПАРТНЕРЫ','zerif-lite').'</span></h5>';
			echo '</div> -->'; 

			echo '<div class="client-list">';
				echo '<div data-scrollreveal="enter right move 60px after 0.00s over 2.5s">';
				dynamic_sidebar( 'sidebar-aboutus' );
				echo '</div>';
			echo '</div> ';
		endif;
	?>


</div> <!-- / END CONTAINER -->


</section> <!-- END ABOUT US SECTION -->
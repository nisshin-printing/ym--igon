<?php
if ( is_archive() || is_single() || is_home() ) {
	$title = 'お知らせ';
} else {
	$title = get_the_title();
}

	get_header();
?>
	<main>
		<header class="pageheader">
			<div class="row">
				<div class="column">
					<h1 class="pageheader--title">
						<?php echo $title; ?>
					</h1>
				</div>
			</div>
		</header>
		<?php NID_Crumbs::crumbs(); ?>
		<div class="row contents--wrap">
			<div class="column large-3 sidebar--wrap">
				<?php get_sidebar(); ?>
			</div>
			<div class="sidenav--overlay js--sidenav--button"></div>
			<div class="column contents">
				<?php
				if ( have_posts() ) {
					if ( is_page( 'cases' ) || is_page( 'voice' ) ) {
						$is_tag = false;
						$is_type = ( is_page( 'cases' ) ) ? 'cases' : 'voice';
						$show_cat = ( is_page( 'cases' ) ) ? '90' : '130';
						include locate_template( './templates/page--cases-voice.php' );

					} else if ( is_page( 'members' ) ) {
						get_template_part( './templates/page--members' );

					} else if ( is_page( 'access' ) ) {
						$page_id = '281';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'firm/dedication' ) ) {
						$page_id = '360';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'firm' ) ) {
						$page_id = '151';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'flow' ) ) {
						while( have_posts() ) : the_post();
							the_content();
						endwhile;
						$page_id = '423';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'fee' ) ) {
						$page_id = '3507';
						include locate_template( './templates/page.php' );

					} else if ( is_page( 'news/column' ) ) {
						$show_cat = '313';
						include locate_template( './templates/page--column.php' );







					/**
					 * 相続の基礎知識
					 */
				} else if ( is_page( '6373' ) ) {
					$isSozoku = true;
					$page_id = '6373';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6560' ) ) {
					$isSozoku = true;
					$page_id = '6560';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6567' ) ) {
					$isSozoku = true;
					$page_id = '6567';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6713' ) ) {
					$isSozoku = true;
					$page_id = '6713';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6562' ) ) {
					$isSozoku = true;
					$page_id = '6562';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6414' ) ) {
					$isSozoku = true;
					$page_id = '6414';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6417' ) ) {
					$isSozoku = true;
					$page_id = '6417';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6419' ) ) {
					$isSozoku = true;
					$page_id = '6419';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6718' ) ) {
					$isSozoku = true;
					$page_id = '6718';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6427' ) ) {
					$isSozoku = true;
					$page_id = '6427';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6422' ) ) {
					$isSozoku = true;
					$page_id = '6422';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6409' ) ) {
					$isSozoku = true;
					$page_id = '6409';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6539' ) ) {
					$isSozoku = true;
					$page_id = '6539';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6541' ) ) {
					$isSozoku = true;
					$page_id = '6541';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6543' ) ) {
					$isSozoku = true;
					$page_id = '6543';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6547' ) ) {
					$isSozoku = true;
					$page_id = '6547';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6545' ) ) {
					$isSozoku = true;
					$page_id = '6545';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6484' ) ) {
					$isSozoku = true;
					$page_id = '6484';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6488' ) ) {
					$isSozoku = true;
					$page_id = '6488';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6486' ) ) {
					$isSozoku = true;
					$page_id = '6486';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6717' ) ) {
					$isSozoku = true;
					$page_id = '6717';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6446' ) ) {
					$isSozoku = true;
					$page_id = '6446';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6438' ) ) {
					$isSozoku = true;
					$page_id = '6438';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6440' ) ) {
					$isSozoku = true;
					$page_id = '6440';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6496' ) ) {
					$isSozoku = true;
					$page_id = '6496';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6500' ) ) {
					$isSozoku = true;
					$page_id = '6500';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6498' ) ) {
					$isSozoku = true;
					$page_id = '6498';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6593' ) ) {
					$isSozoku = true;
					$page_id = '6593';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6507' ) ) {
					$isSozoku = true;
					$page_id = '6507';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6514' ) ) {
					$isSozoku = true;
					$page_id = '6514';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6511' ) ) {
					$isSozoku = true;
					$page_id = '6511';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6509' ) ) {
					$isSozoku = true;
					$page_id = '6509';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6436' ) ) {
					$isSozoku = true;
					$page_id = '6436';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6460' ) ) {
					$isSozoku = true;
					$page_id = '6460';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6454' ) ) {
					$isSozoku = true;
					$page_id = '6454';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6458' ) ) {
					$isSozoku = true;
					$page_id = '6458';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6456' ) ) {
					$isSozoku = true;
					$page_id = '6456';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6467' ) ) {
					$isSozoku = true;
					$page_id = '6467';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6473' ) ) {
					$isSozoku = true;
					$page_id = '6473';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6469' ) ) {
					$isSozoku = true;
					$page_id = '6469';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6475' ) ) {
					$isSozoku = true;
					$page_id = '6475';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6523' ) ) {
					$isSozoku = true;
					$page_id = '6523';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6525' ) ) {
					$isSozoku = true;
					$page_id = '6525';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6527' ) ) {
					$isSozoku = true;
					$page_id = '6527';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6535' ) ) {
					$isSozoku = true;
					$page_id = '6535';
					include locate_template( './templates/page.php' );
				} else if ( is_page( '6533' ) ) {
					$isSozoku = true;
					$page_id = '6533';
					include locate_template( './templates/page.php' );



					} else if ( is_page() ) {
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
						echo '<p class="text-center"><a href="https://www.law-yamashita.com/contact" target="_blank"><img src="', get_template_directory_uri(), '/assets/img/banner_01.png" alt="広島の相続・遺言相談は縮景園駅すぐの山下江法律事務所へ"></a></p>';


					} else {
						while ( have_posts() ) : the_post();
							get_template_part( './templates/content' );
						endwhile;
					}

				} else {
					echo '<h2 class="text-center">記事がありません。</h2>';
				}
			?>
			</div>
			<div class="column small-12">
				<?php NID_Pagination::pagination(); ?>
			</div>
		</div>
	</main>
	<?php
	get_footer();

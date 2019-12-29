<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="header-wrapper">
    <a class="skip-link screen-reader-text" href="#skip_content"><?php esc_html_e( 'Skip to content', 'cgs-travel-agency' ); ?></a>
    <nav class="navbar navbar-expand-lg navbar-light mainmenu" role="navigation">
        <div class="container">
            <a class="navbar-brand logo" href="<?php echo esc_url(get_home_url()); ?>">
                <?php
                if (display_header_text()==true){
                    echo '<h1>'.esc_html( 'خانه' ).'</h1>';
                }?>
            </a>
			
            <div class="collapse navbar-collapse navheader" id="cgs_travel_agency_navmenu">
            <?php
            wp_nav_menu([
                'theme_location'    => 'top',
                'menu_class'        => 'navbar-nav ml-auto topnav cgs-nav-main',
            ]);
            ?>
            </div>
        </div>
    </nav>
</div>
<?php if(is_home() || is_page() || is_search() || is_404() || is_archive() || is_category()){ ?>
<div class="banner-wrapper banner-wrapper-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <?php
                $cgs_travel_agency_h1_text = esc_html(get_theme_mod('cgs_travel_agency_setting_h1_text'));
                $cgs_travel_agency_p_text = esc_html(get_theme_mod('cgs_travel_agency_setting_p_text'));
                ?>
                <?php if(!empty($cgs_travel_agency_h1_text)){ ?>
                    <h1><?php echo esc_html(get_theme_mod('cgs_travel_agency_setting_h1_text')); ?></h1>
                <?php } ?>

	            <?php if(!empty($cgs_travel_agency_p_text)){ ?>
                    <p><?php echo esc_html(get_theme_mod('cgs_travel_agency_setting_p_text')); ?></p>
	            <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<div id="skip_content"></div>

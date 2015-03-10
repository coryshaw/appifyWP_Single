<?php $blogpath = get_bloginfo('template_directory'); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="generator" content="AppifyWP 2.8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * Appify_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/appify.css" />


<style type="text/css">
  
  <?php if ($apfy_headerColor){ ?>
    h1,h2,h3,h4,h5,h6, .post h2, .page h2 {
      color: <?php echo $apfy_headerColor ?>;
    }
  <?php } ?>
  
  <?php if ($apfy_linkColor){ ?>
    a {
      color: <?php echo $apfy_linkColor ?>;
    }
  <?php } ?>
  
  
    #header {
    <?php if ($apfy_backgroundColor) { ?>
      background-color:<?php echo $apfy_backgroundColor ?>;
    <?php } ?>
    <?php if ($apfy_backgroundImage) { ?>
      background-image: url(<?php echo $apfy_backgroundImage ?>);
    <?php } elseif ($apfy_texture != 'none') { ?>
      background-image:url(<?php bloginfo('template_directory'); ?>/images/background_texture_<?php echo $apfy_texture ?>.png);
    <?php } ?>  
    }
</style>


<?php if ( $apfy_fontTheme == 'lobsterCabin') { ?>
   <link href='http://fonts.googleapis.com/css?family=Lobster|Cabin' rel='stylesheet' type='text/css'>
   <style type="text/css">
   body {
     font-family: 'Cabin', Helvetica, Arial, sans-serif;
   }
   
   h1,h2,h3,h4,h5,h6, .post h2, .page h2 {
     font-family: 'Lobster', Georgia, Times, serif;
   }
   </style>
<?php } elseif ( $apfy_fontTheme == 'arvoPTsans') { ?>

   <link href='http://fonts.googleapis.com/css?family=Arvo|PT+Sans' rel='stylesheet' type='text/css'>
   <style type="text/css">
   body {
     font-family: 'PT Sans', Helvetica, Arial, sans-serif;
   }
   
   h1,h2,h3,h4,h5,h6, .post h2, .page h2 {
     font-family: 'Arvo', Georgia, Times, serif;
   }
   </style>
<?php } elseif ( $apfy_fontTheme == 'ubuntuVollkorn') { ?>

   <link href='http://fonts.googleapis.com/css?family=Ubuntu:bold|Vollkorn' rel='stylesheet' type='text/css'>
   
   <style type="text/css">
   body {
     font-family: 'Vollkorn', Georgia, Times, serif;
   }
   
   h1,h2,h3,h4,h5,h6, .post h2, .page h2 {
     font-family: 'Ubuntu', Helvetica, Arial, sans-serif;
   }
   </style>
<?php } elseif ( $apfy_fontTheme == 'droid') { ?>

   <link href='http://fonts.googleapis.com/css?family=Droid+Serif|Droid+Sans' rel='stylesheet' type='text/css'>
   
   <style type="text/css">
   body {
     font-family: 'Droid Sans', Helvetica, Arial, sans-serif;
   }
   
   h1,h2,h3,h4,h5,h6, .post h2, .page h2 {
     font-family: 'Droid Serif', Georgia, Times, serif;
   }
   </style>
<?php } ?>






<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/custom_styles.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/tipTip.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/nyroModal.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />




<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_deregister_script( 'jquery' );

?>
	<?php wp_enqueue_script( 'jquery', get_template_directory_uri() .'/js/jquery-1.7.1.min.js' ); ?>

<?php
 
	wp_head();

?>

<?php wp_enqueue_script( 'jquery-tools', get_template_directory_uri() .'/js/jquery.tools.min.js' ); ?>
<?php wp_enqueue_script( 'jquery-easing', get_template_directory_uri() .'/js/jquery.easing.1.3.js' ); ?>
<?php wp_enqueue_script( 'jquery-scrollto', get_template_directory_uri() .'/js/jquery.scrollTo-min.js' ); ?>
<?php wp_enqueue_script( 'jquery-localscroll', get_template_directory_uri() .'/js/jquery.localscroll-min.js' ); ?>
<?php wp_enqueue_script( 'jquery-validate', get_template_directory_uri() .'/js/jquery.validate.pack.js' ); ?>
<?php wp_enqueue_script( 'jquery-form', get_template_directory_uri() .'/js/jquery.form.js' ); ?>
<?php wp_enqueue_script( 'jquery-tiptip', get_template_directory_uri() .'/js/jquery.tipTip.js' ); ?>
<?php wp_enqueue_script( 'jquery-nyromodal', get_template_directory_uri() .'/js/jquery.nyroModal-1.5.2.js' ); ?>
<?php wp_enqueue_script( 'appifywp-logic', get_template_directory_uri() .'/js/logic.js' ); ?>




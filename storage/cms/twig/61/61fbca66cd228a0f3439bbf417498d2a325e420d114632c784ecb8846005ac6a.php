<?php

/* C:\xampp\htdocs\newlifetrainingcenter-v2/themes/demo/layouts/default.htm */
class __TwigTemplate_f205f44dc4af938a4fbad0c0d2dd5e602de35f360b57122ed8d0403a61c0976a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\" class=\" js  js no-touch\"><!--<![endif]--><!--[if IE 9]>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\" class=\"no-js ie9\">
<![endif]--><!--[if IE 8]>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en-US\" class=\"no-js ie8\">
<![endif]--><head>
<meta charset=\"UTF-8\">
<title>October CMS - ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 14
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 15
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 17
        echo "\" rel=\"stylesheet\">
<link rel=\"profile\" href=\"http://gmpg.org/xfn/11\">
<link rel=\"pingback\" href=\"http://newlifetrainingcenter.ph/xmlrpc.php\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"><meta name=\"robots\" content=\"noindex,follow\">
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Newlife Training Center » Feed\" href=\"http://newlifetrainingcenter.ph/feed/\">
<link rel=\"alternate\" type=\"application/rss+xml\" title=\"Newlife Training Center » Comments Feed\" href=\"http://newlifetrainingcenter.ph/comments/feed/\">
<link rel=\"stylesheet\" id=\"ai1ec_style-css\" href=\"//newlifetrainingcenter.ph/wp-content/plugins/all-in-one-event-calendar/cache/2db52a98_ai1ec_parsed_css.css?ver=2.2.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"open-sans-css\" href=\"//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"dashicons-css\" href=\"http://newlifetrainingcenter.ph/wp-includes/css/dashicons.min.css?ver=4.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"admin-bar-css\" href=\"http://newlifetrainingcenter.ph/wp-includes/css/admin-bar.min.css?ver=4.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"bp-admin-bar-css\" href=\"http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/css/admin-bar.min.css?ver=2.2.3.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"gp-font-awesome-css\" href=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/fonts/font-awesome/css/font-awesome.min.css?ver=4.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"gp-reset-css\" href=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/css/reset.css?ver=4.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"gp-style-css\" href=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy-child/style.css?ver=4.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"gp-buddypress-css\" href=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/css/bp.css?ver=4.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"gp-prettyphoto-css\" href=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/prettyPhoto/css/prettyPhoto.css?ver=4.1\" type=\"text/css\" media=\"all\">
<link rel=\"stylesheet\" id=\"gp-responsive-css\" href=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/responsive.css?ver=4.1\" type=\"text/css\" media=\"all\">
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-includes/js/jquery/jquery.js?ver=1.11.1\"></script><style type=\"text/css\"></style>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1\"></script>
<script type=\"text/javascript\">
/* <![CDATA[ */
var BP_Confirm = {\"are_you_sure\":\"Are you sure?\"};
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/js/confirm.min.js?ver=2.2.3.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/js/widget-members.min.js?ver=2.2.3.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/js/jquery-query.min.js?ver=2.2.3.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/js/jquery-cookie.min.js?ver=2.2.3.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/deprecated/js/jquery-scroll-to.min.js?ver=2.2.3.1\"></script>
<script type=\"text/javascript\">
/* <![CDATA[ */
var BP_DTheme = {\"accepted\":\"Accepted\",\"close\":\"Close\",\"comments\":\"comments\",\"leave_group_confirm\":\"Are you sure you want to leave this group?\",\"mark_as_fav\":\"Favorite\",\"my_favs\":\"My Favorites\",\"rejected\":\"Rejected\",\"remove_fav\":\"Remove Favorite\",\"show_all\":\"Show all\",\"show_all_comments\":\"Show all comments for this thread\",\"show_x_comments\":\"Show all %d comments\",\"unsaved_changes\":\"Your profile has unsaved changes. If you leave the page, the changes will be lost.\",\"view\":\"View\"};
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-templates/bp-legacy/js/buddypress.js?ver=2.2.3.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/modernizr.js?ver=4.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/jwplayer.js?ver=4.1\"></script>
<link rel=\"EditURI\" type=\"application/rsd+xml\" title=\"RSD\" href=\"http://newlifetrainingcenter.ph/xmlrpc.php?rsd\">
<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"http://newlifetrainingcenter.ph/wp-includes/wlwmanifest.xml\"> 
<meta name=\"generator\" content=\"WordPress 4.1\">
<link rel=\"canonical\" href=\"http://newlifetrainingcenter.ph/\">
<link rel=\"shortlink\" href=\"http://newlifetrainingcenter.ph/\">

    <script type=\"text/javascript\">var ajaxurl = 'http://newlifetrainingcenter.ph/wp-admin/admin-ajax.php';</script>

<link rel=\"shortcut icon\" href=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/favicon.png\"><link rel=\"icon\" href=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/favicon.png\" type=\"image/vnd.microsoft.icon\"><link rel=\"icon\" type=\"image/png\" href=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/favicon.png\"><link rel=\"apple-touch-icon\" href=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/apple-icon.png\"><style>body, input, textarea, select, #sidebar .menu li .menu-subtitle {font-family: \"Raleway\";}body, input, textarea, select, #sidebar .menu li .menu-subtitle {color: #666666;}a, .ui-tabs .ui-tabs-nav li.ui-tabs-active a, .ui-tabs .ui-tabs-nav li.ui-state-disabled a, .ui-tabs .ui-tabs-nav li.ui-state-processing a, .ui-tabs .ui-tabs-nav li.ui-state-hover a {color: #6b4d1c;}a:hover {color: #dd9933;}.padder, .widget, #footer, body.activity-permalink .activity-list {background-color: #fafaf7;}.widget .widgettitle, .sc-divider, .author-info, .separate > div, .joint > div {border-color:#fafaf7;}input, textarea, input[type=\"password\"], .ui-tabs .ui-tabs-nav li.ui-tabs-active, .sc-tab-panel, #content .widget[class*=\"widget_bp_\"] h3 {background-color: #e8e6dc; border-color: #e8e6dc;}input:focus, textarea:focus, input[type=\"password\"]:focus {background-color: #bfbfbf; border-color: #bfbfbf;}h1, h2, h3, h4, h5, h6, .widget .widgettitle {font-family: \"Montserrat\";}h1, h2, h3, h4, h5, h6, .widget .widgettitle {color: #dd8502;}h1 {font-size: 22px;}h2 {font-size: 17px;}h3 {font-size: 15px;}h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, #sidebar .menu li a {color: #000000;}h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, #sidebar .menu li a:hover {color: #ddcaa6;}#header {background-color: #fafaf7;}#nav .menu li a, #nav .menu li a:hover, #nav .menu li:hover > a, #mobile-nav .menu li a, #mobile-nav .menu li a:hover {color: #ffffff;}#nav .menu .sub-menu li a {color: rgb(255,255,255); color: rgba(255,255,255,0.8);}#nav .menu .sub-menu li a:hover {color: rgb(255,255,255); color: rgba(255,255,255,1);}#nav .menu li a:hover, #nav .menu .sub-menu, #nav .menu li:hover > a, #mobile-nav .menu li a:hover {background-color: #753809;}input[type=\"button\"], input[type=\"submit\"], input[type=\"reset\"], button, .button {color: #ffffff;}input[type=\"button\"], input[type=\"submit\"], input[type=\"reset\"], button, .button {background-color: #dd9933; border-color: #dd9933;}input[type=\"button\"]:hover, input[type=\"submit\"]:hover, input[type=\"reset\"]:hover, button:hover, .button:hover {background-color: #969696; border-color: #969696; color: #ffffff;}.login-button, #mobile-nav-button, .bp-wrapper .generic-button a,.bp-wrapper ul.button-nav li a,.bp-wrapper .item-list a.button,.bp-wrapper .item-list .activity-meta a,.bp-wrapper .item-list .acomment-options a,.bp-wrapper .activity-meta a:hover span,.widget .item-options a,.widget .swa-wrap ul#activity-filter-links a,.widget .swa-activity-list li.mini div.swa-activity-meta a,.widget .swa-activity-list div.swa-activity-meta a.acomment-reply,.widget .swa-activity-list div.swa-activity-meta a,.widget .swa-activity-list div.acomment-options a {color: #ffffff;}.login-button, #mobile-nav-button, .bp-wrapper .generic-button a,.bp-wrapper ul.button-nav li a,.bp-wrapper .item-list a.button,.bp-wrapper .item-list .activity-meta a,.bp-wrapper .item-list .acomment-options a,.bp-wrapper .activity-meta a:hover span,.widget .item-options a,.widget .swa-wrap ul#activity-filter-links a,.widget .swa-activity-list li.mini div.swa-activity-meta a,.widget .swa-activity-list div.swa-activity-meta a.acomment-reply,.widget .swa-activity-list div.swa-activity-meta a,.widget .swa-activity-list div.acomment-options a {background-color: #dd9933; border-color: #dd9933;}.login-button:hover, #mobile-nav-button:hover, .bp-wrapper .generic-button a:hover,.bp-wrapper ul.button-nav li a:hover,.bp-wrapper .item-list a.button:hover,.bp-wrapper .item-list .activity-meta a:hover,.bp-wrapper .item-list .acomment-options a:hover,.bp-wrapper .acomment-options a:hover,.bp-wrapper .activity-meta a span,.widget .item-options a:hover,.widget .item-options a.selected,.widget .swa-wrap ul#activity-filter-links a:hover,.widget .swa-activity-list div.swa-activity-meta a.acomment-reply:hover,.widget .swa-activity-list div.swa-activity-meta a:hover,.widget .swa-activity-list div.acomment-options a:hover {background-color: #dddddd; border-color: #dddddd; color: #ffffff;}[class^=\"icon-\"]::before, [class*=\" icon-\"]::before {color: #6c9795;}[class^=\"icon-\"]:hover::before, [class*=\" icon-\"]:hover::before {color: #dd9933 !important;}body {
    background-color:#6c9795;
}
.container
{
    width: 100% !important;
}
.widget .widgettitle {
    background:transparent;  
    color: #666666;
    font-size: 16px;
    font-weight: bold;
    margin: 0 0 20px -8px;
    padding: 5px 0 5px 10px;
    width: 100%;
}
#nav  {
    margin:0 auto;
}

.tablenav-pages {
   margin:15px 0;
}

#header {
    background-color: transparent;
}
#post-wrapper {
    float: left;
    width: 100%;
    background: #fff;
    padding: 20px;
    -webkit-border--radius: 8px;
    -moz-border-radius: 8px;
    border-bottom-radius: 8px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
</style>
<script src=\"";
        // line 102
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js"));
        // line 104
        echo "\"></script>

";
        // line 106
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 107
        echo "
<script>jQuery(document).ready(function(){window.devicePixelRatio>=2&&jQuery(\".post-thumbnail img\").each(function(){jQuery(this).attr({src:jQuery(this).attr(\"data-rel\")})})});</script><link href=\"http://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,500,600\" rel=\"stylesheet\" type=\"text/css\"><style type=\"text/css\" id=\"custom-background-css\">
body.custom-background { background-color: #070707; background-image: url('http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/NTC-Background-map.jpg'); background-repeat: repeat; background-position: top left; background-attachment: fixed; }
</style>
<style type=\"text/css\" media=\"print\">#wpadminbar { display:none; }</style>
<style type=\"text/css\" media=\"screen\">
    html { margin-top: 32px !important; }
    * html body { margin-top: 32px !important; }
    @media screen and ( max-width: 782px ) {
        html { margin-top: 46px !important; }
        * html body { margin-top: 46px !important; }
    }
</style>
</head>

<body class=\"home-page home page page-id-6 page-parent page-template page-template-homepage page-template-homepage-php logged-in admin-bar custom-background sb-both js customize-support gp-desktop\">





    <!-- BEGIN PAGE WRAPPER-->
 
    <div id=\"page-wrapper\">
 
 
        <!-- BEGIN HEADER -->
    
        <div id=\"header\">
    
    
            <!-- BEGIN LOGO -->
        
            <div id=\"logo\" style=\"\">
            
                <span class=\"logo-details\">Newlife Training Center | Online Portal</span>
            
                <a href=\"http://newlifetrainingcenter.ph\" title=\"Newlife Training Center\"><img src=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/NTC-Web-Banner-1-e1429326322656.png\" width=\"800\" height=\"100\" alt=\"Newlife Training Center\"></a>
            
            </div>
        
            <!-- END LOGO -->   
                                    
            
            <!-- BEGIN NAV WRAPPER -->  
            
            <div id=\"nav\">

            
                <!-- BEGIN NAV -->  
            
                
                <!-- END NAV -->    
            
            
                <!-- BEGIN LOGIN/REGISTER -->
            
                            
                <!-- END LOGIN/REGISTER -->
        

                        
                        
            </div>
        
            <!-- END NAV -->
        
    
            <nav id=\"mobile-nav\">

                <!-- BEGIN LOGIN/REGISTER -->
            
                            
                <!-- END LOGIN/REGISTER -->
                            
                            </nav><!-- END MOBILE MENU -->

                
        </div>
    
        <!-- END HEADER -->
    
    
        <!-- BEGIN CONTENT WRAPPER -->
    
        <div id=\"content-wrapper\">

            
            <!-- BEGIN LEFT CONTENT WRAPPER -->
            
            <div id=\"left-content-wrapper\">     

            


    <!-- BEGIN CONTENT -->  

    <div id=\"content\">


        <!-- BEGIN POST CONTENT --> 

            
        
            <div id=\"post-content\">
                    
    
            
    
        <!-- BEGIN SLIDER WRAPPER -->   
    
        <div id=\"slider1\" class=\"flexslider alignnone\" style=\"width: 670px; \">
        
        
            <!-- BEGIN SLIDER -->   
        
            <ul class=\"slides\">


                

                    <li class=\"slide flex-active-slide\" id=\"slider1-slide-2033\" style=\"width: 670px; float: left; margin-right: -100%; position: relative; display: list-item; height: 377px;\">
                    
                    
                        <!-- BEGIN CAPTION -->  
                    
                                                
                            <div class=\"caption caption-bottomright\">
                        
                            
                                <!-- BEGIN SLIDE TITLE -->
                            
                                <h2></h2>                                           
                                <!-- END SLIDER TITLE -->
                            
                
                                <!-- BEGIN POST CONTENT -->
                            
                                                            
                                                                    
                                                            
                                <!-- END POST CONTENT -->
                            
                            
                            </div>
                    
                                            
                        <!-- END CAPTION -->    
                    
                    
                        <!-- BEGIN CONTENT -->  
                    
                                            
                        
                            <!-- BEGIN FEATURED IMAGE -->
                            
                                                    
                                                                <a href=\"http://newlifetrainingcenter.ph/slide/2033/\" title=\"\">
                                                                
                                                                
                                                                                                                                                                                                                                            
                                                                                                            <img src=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/11/blockweek-nights-670x377.png\" data-rel=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/11/blockweek-nights-1340x754.png\" width=\"670\" height=\"377\" alt=\"\" class=\"wp-post-image\">
                                    
                                </a>    
                    
                                                                                
                            <!-- END FEATURED IMAGE -->
                        

                            <!-- BEGIN LIGHTBOX IMAGES -->
                
                                                                    
                            <!-- END LIGHTBOX IMAGES -->
                        
                            
                                            
                        <!-- END CONTENT -->
                    

                    </li>
                

                

                    <li class=\"slide\" id=\"slider1-slide-2035\" style=\"width: 670px; float: left; margin-right: -100%; position: relative; height: 377px; display: none;\">
                    
                    
                        <!-- BEGIN CAPTION -->  
                    
                                                
                            <div class=\"caption caption-bottomright\">
                        
                            
                                <!-- BEGIN SLIDE TITLE -->
                            
                                <h2></h2>                                           
                                <!-- END SLIDER TITLE -->
                            
                
                                <!-- BEGIN POST CONTENT -->
                            
                                                            
                                                                    
                                                            
                                <!-- END POST CONTENT -->
                            
                            
                            </div>
                    
                                            
                        <!-- END CAPTION -->    
                    
                    
                        <!-- BEGIN CONTENT -->  
                    
                                            
                        
                            <!-- BEGIN FEATURED IMAGE -->
                            
                                                    
                                                                <a href=\"http://newlifetrainingcenter.ph/slide/2035/\" title=\"\">
                                                                
                                                                
                                                                                                                                                                                                                                            
                                                                                                            <img src=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/11/nathan-morris1-670x377.jpg\" data-rel=\"http://newlifetrainingcenter.ph/wp-content/uploads/2015/11/nathan-morris1-1340x754.jpg\" width=\"670\" height=\"377\" alt=\"\" class=\"wp-post-image\">
                                    
                                </a>    
                    
                                                                                
                            <!-- END FEATURED IMAGE -->
                        

                            <!-- BEGIN LIGHTBOX IMAGES -->
                
                                                                    
                            <!-- END LIGHTBOX IMAGES -->
                        
                            
                                            
                        <!-- END CONTENT -->
                    

                    </li>
                

                

                    <li class=\"slide\" id=\"slider1-slide-12\" style=\"width: 670px; float: left; margin-right: -100%; position: relative; height: 377px; display: none;\">
                    
                    
                        <!-- BEGIN CAPTION -->  
                    
                                            
                        <!-- END CAPTION -->    
                    
                    
                        <!-- BEGIN CONTENT -->  
                    
                        
                        
                            <!-- VIDEO IMAGE-->
                                    
                                                            
                                <div class=\"video-image\" style=\"width: 670px; height: 377px;\">
                        
                                    <div class=\"video-button\"></div>
                            
                                                                                                                                                            <img src=\"http://newlifetrainingcenter.ph/wp-content/uploads/2014/11/ntc-670x377.jpg\" data-rel=\"http://newlifetrainingcenter.ph/wp-content/uploads/2014/11/ntc-1340x754.jpg\" width=\"670\" height=\"377\" alt=\"\" class=\"wp-post-image\">
                                                                    
                                </div>
                        
                                                    
                            <!-- END VIDEO IMAGE -->
                        
                        
                            <!-- BEGIN VIDEO -->

                                            
                                                                

                                
                                    <!-- BEGIN JWPLAYER VIDEO -->
    
                                    <div class=\"video-player\">
                                        <div id=\"slider1-player-12\" class=\"\" style=\"position: relative; height: 377px; width: 0px; padding: 0px; z-index: 0; background-color: rgb(0, 0, 0);\"><div id=\"slider1-player-12_video_wrapper\" style=\"overflow: hidden; position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;\"><div id=\"slider1-player-12_video\" style=\"width: 100%; height: 100%; top: 0px; left: 0px; z-index: 1; margin: auto; display: block;\"></div></div><div id=\"slider1-player-12_displayarea\" style=\"top: 0px; bottom: 0px; left: 0px; right: 0px; width: 0px; height: 377px; position: absolute;\"><div id=\"slider1-player-12_jwplayer_dock\" style=\"opacity: 1; position: absolute; z-index: 7;\"></div><div id=\"slider1-player-12_jwplayer_display\" style=\"cursor: pointer; top: 0px; left: 0px; overflow: hidden; position: absolute; z-index: 6; width: 0px; height: 377px;\"><div id=\"slider1-player-12_jwplayer_display_text\" style=\"z-index: 4; position: relative; opacity: 0.8; color: rgb(255, 255, 255); text-align: center; font-family: Arial, sans-serif; padding: 0px 5px; font-size: 14px; top: 189px; background-color: rgb(0, 0, 0);\"></div><img id=\"slider1-player-12_jwplayer_display_image\" src=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/images/black.gif\" style=\"display: block; position: absolute; cursor: pointer; left: -188px; top: 0px; margin: 0px; padding: 0px; text-decoration: none; z-index: 1; width: 377px; height: 377px; opacity: 1;\"><div id=\"slider1-player-12_jwplayer_display_iconBackground\" style=\"cursor: pointer; position: absolute; border: 0px; width: 89px; height: 51px; margin: 0px; padding: 0px; z-index: 2; display: block; top: 163px; left: -44px; background-image: url(http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/fs39/display/background.png);\"><div id=\"slider1-player-12_jwplayer_display_icon\" style=\"cursor: pointer; position: absolute; top: -14px; left: 5px; border: 0px; margin: 0px; padding: 0px; z-index: 3; display: block; width: 80px; height: 80px; background-image: url(http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/fs39/display/playIcon.png);\"></div></div></div></div><div id=\"slider1-player-12_instreamarea\" style=\"overflow: hidden; position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; z-index: 100; display: none; width: 0px; height: 0px; background: 0px 50%;\"></div></div>                                                         
                                    </div>
                                
                                    <script>
                                    //<![CDATA[

                                    jwplayer(\"slider1-player-12\").setup({
                                        image: \"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/images/black.gif\",
                                        icons: \"true\",
                                        autostart: \"false\",
                                        stretching: \"fill\",
                                        controlbar: \"none\",
                                        skin: \"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/fs39/fs39.xml\",
                                        width: \"100%\",
                                        height: \"377\",
                                        screencolor: \"000000\",
                                        modes:
                                            [
                                                                                            {type: \"html5\", config: {file: \"https://www.youtube.com/watch?v=HrgiJp6-B0I\"}},
                                                {type: \"flash\", src: \"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/player.swf\", config: {file: \"https://www.youtube.com/watch?v=HrgiJp6-B0I\"}}
                                                                                        ],
                                        plugins: {}
                                    });


                                    // Play JW Player
                                        
                                    jQuery(document).ready(function(){
                                        jQuery(\"#slider1-slide-12 .video-image\").click(function() {
                                            jQuery('#slider1-slide-12 .video-player').show();
                                            jwplayer(\"slider1-player-12\").play();
                                        }); 
                                    });
                        
                        
                                    // Stop JW Player
                        
                                    jQuery(window).load(function() {    
                                        jQuery(\"#slider1 .flex-control-nav li a\").click(function() {
                                            if(jwplayer(\"slider1-player-12\").getState() === \"PLAYING\") {
                                                jQuery('#slider1-slide-12 .video-player').hide();
                                                jwplayer(\"slider1-player-12\").stop();
                                            }
                                        });
                                    });
                                
                                                        
                                    //]]&gt;
                                    </script>
                            
                                    <!-- END JWPLAYER VIDEO -->
                        
                        
                                
                            
                            <!-- END VIDEO -->

                            
                                                    
                                <script>
                        
                                jQuery(document).ready(function() {
                        
                                    // Hide Video Image/Play Button

                                    jQuery(\"#slider1-slide-12 .video-image\").click(function() {
                                        jQuery('#slider1-slide-12 .video-image').hide();
                                        jQuery('#slider1-slide-12 .caption').hide();
                                    }); 

                                }); 
                            
                                </script>
                                
                                


                                            
                        <!-- END CONTENT -->
                    

                    </li>
                

                        
        
                </ul>
            
                <!-- END SLIDER --> 
            
        
            <ol class=\"flex-control-nav flex-control-paging\"><li><a class=\"flex-active\">1</a></li><li><a class=\"\">2</a></li><li><a class=\"\">3</a></li></ol></div>
        
            <!-- END SLIDER WRAPPER --> 


                
        
        <script>
        jQuery(document).ready(function(){
        
            jQuery(\"#slider1.flexslider\").flexslider({ 
                animation: \"fade\",
                slideshowSpeed: 6000,
                animationSpeed: 600,
                directionNav: false,            
                controlNav: true,               
                pauseOnAction: true, 
                pauseOnHover: false,
                start: function(slider) {

                    // Pause Slider
                    jQuery(\"#slider1 .flex-control-nav li a, #slider1 .video-image\").click(function() { 
                        slider.pause(); 
                    });
        
                }
            
            }); 

                    
            // Resize Video Player
    
            jQuery(window).load(function(){
                resizePlayer();
                jQuery(window).resize(function() {
                    resizePlayer();
                }); 
            });

            function resizePlayer() {
                parentContainer = jQuery(\"#slider1 .slides\").parent().attr('id');
                sliderWidth = jQuery('#'+parentContainer).width();
                newVideoWidth = sliderWidth;
                newVideoHeight = (sliderWidth * 377) / 670;
                jQuery(\"#slider1.flexslider .slides > li, #slider1.flexslider .video-image, #slider1.flexslider iframe, #slider1.flexslider video, #slider1.flexslider object, #slider1.flexslider embed\").width(newVideoWidth).height(newVideoHeight);                     
            }

                                
            // Show All Video Images & Captions

            jQuery(\"#slider1 .flex-control-nav li a\").click(function() {
                jQuery('#slider1 .video-image').show();
                jQuery('#slider1 .video-player').hide();
                jQuery('#slider1 .caption').show();
            }); 
        
        });         
        </script>
    
    
    
<div class=\"sc-divider clear\"></div>
    
    
        <!-- BEGIN HEADER -->
    
        <section id=\"layout-content\" class=\"post-wrapper\">
            ";
        // line 549
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 550
        echo "        </section>
    
                    
        
                                            <div class=\"clear\"></div>
                    

        </div>
    
        <!-- END POST WRAPPER -->
    

    
            </div>
            
        
        <!-- END POST CONTENT -->           


    </div>
    
    <!-- END CONTENT -->    
    






    
                


    
    <!-- BEGIN SIDEBAR -->
        
    <div id=\"sidebar-left\" class=\"sidebar\">
            
            
            
            
            <!-- BEGIN SELECTED WIDGETS -->

            <div id=\"nav_menu-8\" class=\"widget widget_nav_menu\"><div class=\"menu-header-container\"><ul id=\"menu-header\" class=\"menu\"><li id=\"menu-item-280\" class=\"menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6 current_page_item menu-item-280\"><a href=\"http://newlifetrainingcenter.ph/\">HOME</a></li>
<li id=\"menu-item-1200\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1200\"><a href=\"http://newlifetrainingcenter.ph/homepage/welcome-message/\">WELCOME MESSAGE</a></li>
<li id=\"menu-item-227\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-227\"><a href=\"http://newlifetrainingcenter.ph/homepage/about-us/\">ABOUT US</a></li>
<li id=\"menu-item-1126\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1126\"><a href=\"http://newlifetrainingcenter.ph/homepage/life-ntc/\">LIFE @ NTC</a></li>
<li id=\"menu-item-217\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-217\"><a href=\"http://newlifetrainingcenter.ph/homepage/programs/\">PROGRAMS</a></li>
<li id=\"menu-item-1154\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1154\"><a href=\"http://newlifetrainingcenter.ph/homepage/training-calendar/\">TRAINING CALENDAR</a></li>
<li id=\"menu-item-226\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-226\"><a href=\"http://newlifetrainingcenter.ph/homepage/admissions/\">ADMISSIONS</a></li>
<li id=\"menu-item-386\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-386\"><a href=\"http://newlifetrainingcenter.ph/homepage/apply-now/\">APPLY NOW</a></li>
<li id=\"menu-item-786\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-786\"><a href=\"http://newlifetrainingcenter.ph/homepage/programs/downloadables/\">DOWNLOADABLES</a></li>
<li id=\"menu-item-16\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-16\"><a href=\"http://newlifetrainingcenter.ph/homepage/contact-page/\">CONTACT US</a></li>
</ul></div></div><div id=\"nav_menu-20\" class=\"widget widget_nav_menu\"><div class=\"menu-dashboard-menu-container\"><ul id=\"menu-dashboard-menu\" class=\"menu\"><li id=\"menu-item-454\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-454\"><a href=\"http://newlifetrainingcenter.ph/administrators-control-panel/\">ADMIN CONTROL PANEL</a></li>
<li id=\"menu-item-455\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-455\"><a href=\"http://newlifetrainingcenter.ph/faculty-control-panel/\">FACULTY CONTROL PANEL</a></li>
<li id=\"menu-item-1248\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-1248\"><a href=\"http://newlifetrainingcenter.ph/ntc-staff-dashboard/\">STAFF CONTROL PANEL</a></li>
<li id=\"menu-item-456\" class=\"menu-item menu-item-type-post_type menu-item-object-page menu-item-456\"><a href=\"http://newlifetrainingcenter.ph/students-area/\">STUDENTS CONTROL PANEL</a></li>
</ul></div></div>
            <!-- END SELECTED WIDGETS -->   
            
            
                
        
    </div>
    
    <!-- END SIDEBAR -->
    
    
                
            </div>
            
            <!-- END LEFT CONTENT WRAPPER -->
            
                        
            

        
    
    <!-- BEGIN SIDEBAR -->
        
    <div id=\"sidebar-right\" class=\"sidebar\">
            
        
        <!-- BEGIN BUDYYPRESS SITEWIDE NOTICES -->
            
                                    
        <!-- END BUDYYPRESS SITEWIDE NOTICES -->
        
                    
            
    
            <!-- BEGIN SELECTED WIDGETS -->

            <div id=\"members-widget-login-5\" class=\"widget login\"><h2 class=\"widgettitle\">Account Login</h2><p>You are currently logged in.</p>
</div><div id=\"ai1ec_agenda_widget-3\" class=\"widget widget_ai1ec_agenda_widget\">

    <h2 class=\"widgettitle\">Upcoming Events</h2>

<style>
<!--

-->
</style>
<div class=\"timely ai1ec-agenda-widget-view ai1ec-clearfix\">

            <p class=\"ai1ec-no-results\">
            There are no upcoming events.
        </p>
     
            <p>
                            <a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-pull-right
                    ai1ec-calendar-link\" href=\"http://newlifetrainingcenter.ph/homepage/calendar/cat_ids~20,3,4,5/\">
                    View Calendar
                    <i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
                </a>
            
                            </p><div class=\"ai1ec-subscribe-dropdown ai1ec-dropdown ai1ec-btn
    ai1ec-btn-default ai1ec-btn-xs\">
    <span role=\"button\" class=\"ai1ec-dropdown-toggle ai1ec-subscribe\" data-toggle=\"ai1ec-dropdown\">
        <i class=\"ai1ec-fa ai1ec-icon-rss ai1ec-fa-lg ai1ec-fa-fw\"></i>
        <span class=\"ai1ec-hidden-xs\">
                            Add
                        <span class=\"ai1ec-caret\"></span>
        </span>
    </span>
        <ul class=\"ai1ec-dropdown-menu ai1ec-pull-left\" role=\"menu\">
        <li>
            <a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\" data-placement=\"right\" title=\"Copy this URL for your own Timely calendar or click to add to your rich-text calendar\" href=\"http://newlifetrainingcenter.ph/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;ai1ec_cat_ids=20,3,4,5\">
                <i class=\"ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-icon-timely\"></i>
                Add to Timely Calendar
            </a>
        </li>
        <li>
            <a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\" data-placement=\"right\" title=\"Subscribe to this calendar in your Google Calendar\" href=\"http://www.google.com/calendar/render?cid=http%3A%2F%2Fnewlifetrainingcenter.ph%2F%3Fplugin%3Dall-in-one-event-calendar%26controller%3Dai1ec_exporter_controller%26action%3Dexport_events%26ai1ec_cat_ids%3D20%2C3%2C4%2C5\">
                <i class=\"ai1ec-fa ai1ec-icon-google ai1ec-fa-lg ai1ec-fa-fw\"></i>
                Add to Google
            </a>
        </li>
        <li>
            <a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\" data-placement=\"right\" title=\"Subscribe to this calendar in MS Outlook\" href=\"webcal://newlifetrainingcenter.ph/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;no_html=true&amp;ai1ec_cat_ids=20,3,4,5\">
                <i class=\"ai1ec-fa ai1ec-icon-windows ai1ec-fa-lg ai1ec-fa-fw\"></i>
                Add to Outlook
            </a>
        </li>
        <li>
            <a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" target=\"_blank\" data-placement=\"right\" title=\"Subscribe to this calendar in Apple Calendar/iCal\" href=\"webcal://newlifetrainingcenter.ph/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;no_html=true&amp;ai1ec_cat_ids=20,3,4,5\">
                <i class=\"ai1ec-fa ai1ec-icon-apple ai1ec-fa-lg ai1ec-fa-fw\"></i>
                Add to Apple Calendar
            </a>
        </li>
        <li>
                        <a class=\"ai1ec-tooltip-trigger ai1ec-tooltip-auto\" data-placement=\"right\" title=\"Subscribe to this calendar in another plain-text calendar\" href=\"http://newlifetrainingcenter.ph/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;no_html=true&amp;ai1ec_cat_ids=20,3,4,5\">
                <i class=\"ai1ec-fa ai1ec-icon-calendar ai1ec-fa-fw\"></i>
                Add to other calendar
            </a>
        </li>
    </ul>
</div>

                    <p></p>
     
</div>



</div><div id=\"ai1ec_agenda_widget-7\" class=\"widget widget_ai1ec_agenda_widget\">

    <h2 class=\"widgettitle\">Training Calendar</h2>

<style>
<!--

-->
</style>
<div class=\"timely ai1ec-agenda-widget-view ai1ec-clearfix\">

            <div>
                                                    <div class=\"ai1ec-date
                    \">
                    <a class=\"ai1ec-date-title ai1ec-load-view\" href=\"http://newlifetrainingcenter.ph/homepage/calendar/action~oneday/exact_date~3-11-2015/\">
                        <div class=\"ai1ec-month\">Nov</div>
                        <div class=\"ai1ec-day\">3</div>
                        <div class=\"ai1ec-weekday\">Tue</div>
                                            </a>
                    <div class=\"ai1ec-date-events\">
                                                                                                                                        <div class=\"ai1ec-event
                                    ai1ec-event-id-696
                                    ai1ec-event-instance-id-108
                                    \">

                                    <a href=\"http://newlifetrainingcenter.ph/event/school-of-the-spirit-sos-q3/?instance_id=108\" class=\"ai1ec-popup-trigger ai1ec-load-event\">
                                                                                    <span class=\"ai1ec-event-time\">
                                                09:30
                                            </span>
                                        
                                        <span class=\"ai1ec-event-title\">
                                            School of the Spirit (SOS) Q3
                                                                                            <span class=\"ai1ec-event-location\">@ Newlife Training Center</span>
                                                                                    </span>
                                    </a>

                                    <div class=\"ai1ec-popover ai1ec-popup \">

        
    <span class=\"ai1ec-popup-title\">
        <a href=\"http://newlifetrainingcenter.ph/event/school-of-the-spirit-sos-q3/?instance_id=108\" class=\"ai1ec-load-event\">School of the Spirit (SOS) Q3</a>
                    <span class=\"ai1ec-event-location\">@ Newlife Training Center</span>
                    </span>

            <a class=\"post-edit-link\" href=\"http://newlifetrainingcenter.ph/wp-admin/post.php?post=696&amp;action=edit\">
            <i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> Edit
        </a>
    
    <div class=\"ai1ec-event-time\">
                    Nov 3 @ 09:30 – Dec 17 @ 09:30
            </div>

    
            <div class=\"ai1ec-popup-excerpt\">NTC All Year Levels</div>
    
</div>

                                </div>
                                                                        </div>
                </div>
                            <div class=\"ai1ec-date
                    \">
                    <a class=\"ai1ec-date-title ai1ec-load-view\" href=\"http://newlifetrainingcenter.ph/homepage/calendar/action~oneday/exact_date~24-11-2015/\">
                        <div class=\"ai1ec-month\">Nov</div>
                        <div class=\"ai1ec-day\">24</div>
                        <div class=\"ai1ec-weekday\">Tue</div>
                                            </a>
                    <div class=\"ai1ec-date-events\">
                                                                                                                                        <div class=\"ai1ec-event
                                    ai1ec-event-id-688
                                    ai1ec-event-instance-id-183
                                    \">

                                    <a href=\"http://newlifetrainingcenter.ph/event/how-to-be-led-by-the-spirit/?instance_id=183\" class=\"ai1ec-popup-trigger ai1ec-load-event\">
                                                                                    <span class=\"ai1ec-event-time\">
                                                09:30
                                            </span>
                                        
                                        <span class=\"ai1ec-event-title\">
                                            How To Be Led by the Spirit
                                                                                            <span class=\"ai1ec-event-location\">@ Newlife Training Center</span>
                                                                                    </span>
                                    </a>

                                    <div class=\"ai1ec-popover ai1ec-popup \">

        
    <span class=\"ai1ec-popup-title\">
        <a href=\"http://newlifetrainingcenter.ph/event/how-to-be-led-by-the-spirit/?instance_id=183\" class=\"ai1ec-load-event\">How To Be Led by the Spirit</a>
                    <span class=\"ai1ec-event-location\">@ Newlife Training Center</span>
                    </span>

            <a class=\"post-edit-link\" href=\"http://newlifetrainingcenter.ph/wp-admin/post.php?post=688&amp;action=edit\">
            <i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> Edit
        </a>
    
    <div class=\"ai1ec-event-time\">
                    Nov 24 @ 09:30 – Dec 1 @ 09:30
            </div>

    
            <div class=\"ai1ec-popup-excerpt\">Faculty: Pastors Paul &amp; Shoddy Chase Level: First Year</div>
    
</div>

                                </div>
                                                                        </div>
                </div>
                            <div class=\"ai1ec-date
                    \">
                    <a class=\"ai1ec-date-title ai1ec-load-view\" href=\"http://newlifetrainingcenter.ph/homepage/calendar/action~oneday/exact_date~26-11-2015/\">
                        <div class=\"ai1ec-month\">Nov</div>
                        <div class=\"ai1ec-day\">26</div>
                        <div class=\"ai1ec-weekday\">Thu</div>
                                            </a>
                    <div class=\"ai1ec-date-events\">
                                                                                                                                        <div class=\"ai1ec-event
                                    ai1ec-event-id-694
                                    ai1ec-event-instance-id-184
                                    \">

                                    <a href=\"http://newlifetrainingcenter.ph/event/youth-and-young-adults-ministry/?instance_id=184\" class=\"ai1ec-popup-trigger ai1ec-load-event\">
                                                                                    <span class=\"ai1ec-event-time\">
                                                09:30
                                            </span>
                                        
                                        <span class=\"ai1ec-event-title\">
                                            Youth and Young Adults Ministry
                                                                                            <span class=\"ai1ec-event-location\">@ Newlife Training Center</span>
                                                                                    </span>
                                    </a>

                                    <div class=\"ai1ec-popover ai1ec-popup \">

        
    <span class=\"ai1ec-popup-title\">
        <a href=\"http://newlifetrainingcenter.ph/event/youth-and-young-adults-ministry/?instance_id=184\" class=\"ai1ec-load-event\">Youth and Young Adults Ministry</a>
                    <span class=\"ai1ec-event-location\">@ Newlife Training Center</span>
                    </span>

            <a class=\"post-edit-link\" href=\"http://newlifetrainingcenter.ph/wp-admin/post.php?post=694&amp;action=edit\">
            <i class=\"ai1ec-fa ai1ec-fa-pencil\"></i> Edit
        </a>
    
    <div class=\"ai1ec-event-time\">
                    Nov 26 @ 09:30 – Dec 2 @ 09:30
            </div>

    
            <div class=\"ai1ec-popup-excerpt\">Faculty: Ptr. Heidi Giague and Team Level: Second Year</div>
    
</div>

                                </div>
                                                                        </div>
                </div>
                    </div>
     
            <p>
                            <a class=\"ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-pull-right
                    ai1ec-calendar-link\" href=\"http://newlifetrainingcenter.ph/homepage/calendar/cat_ids~12/\">
                    View Calendar
                    <i class=\"ai1ec-fa ai1ec-fa-arrow-right\"></i>
                </a>
            
                    </p>
     
</div>



</div>
            <!-- END SELECTED WIDGETS -->                       

                
        
    </div>
    
    <!-- END SIDEBAR -->
    
    
    
    
            <div class=\"clear\"></div>
        
        
        </div>
    
        <!-- END CONTENT WRAPPER -->

    </div>

    <!-- END PAGE WRAPPER -->
    

    <!-- BEGIN FOOTER -->

    
    <!-- END FOOTER -->


    <!-- BEGIN COPYRIGHT -->
    
    <div id=\"copyright\">Copyright © 2015. NTC Portal. All rights reserved.</div>
    
    <!-- END COPYRIGHT -->





<!-- Generated in 0.557 seconds. (101 q) -->

    <script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-includes/js/admin-bar.min.js?ver=4.1\"></script>
<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js?ver=4.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/jquery.ui.totop.min.js?ver=4.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/prettyPhoto/js/jquery.prettyPhoto.js?ver=4.1\"></script>
<script type=\"text/javascript\">
/* <![CDATA[ */
var gp_script = {\"rootFolder\":\"http:\\/\\/newlifetrainingcenter.ph\\/wp-content\\/themes\\/buddy\",\"emptySearchText\":\"Please enter something in the search box!\"};
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/custom.js?ver=4.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/jquery.flexslider.js?ver=4.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/jquery.touchSwipe.min.js?ver=4.1\"></script>
<script type=\"text/javascript\" src=\"http://newlifetrainingcenter.ph/?ai1ec_render_js=common_frontend&amp;is_backend=false&amp;ver=2.2.1\"></script>
    <script type=\"text/javascript\">
        (function() {
            var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\\\s+)(no-)?'+cs+'(\\\\s+|\$)');

            request = true;

            b[c] = b[c].replace( rcs, ' ' );
            b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
        }());
    </script>
            </body></html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\newlifetrainingcenter-v2/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 550,  592 => 549,  148 => 107,  145 => 106,  141 => 104,  139 => 102,  52 => 17,  49 => 15,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" class=" js  js no-touch"><!--<![endif]--><!--[if IE 9]>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" class="no-js ie9">*/
/* <![endif]--><!--[if IE 8]>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" class="no-js ie8">*/
/* <![endif]--><head>*/
/* <meta charset="UTF-8">*/
/* <title>October CMS - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="October CMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/css/theme.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/* <link rel="profile" href="http://gmpg.org/xfn/11">*/
/* <link rel="pingback" href="http://newlifetrainingcenter.ph/xmlrpc.php">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="noindex,follow">*/
/* <link rel="alternate" type="application/rss+xml" title="Newlife Training Center » Feed" href="http://newlifetrainingcenter.ph/feed/">*/
/* <link rel="alternate" type="application/rss+xml" title="Newlife Training Center » Comments Feed" href="http://newlifetrainingcenter.ph/comments/feed/">*/
/* <link rel="stylesheet" id="ai1ec_style-css" href="//newlifetrainingcenter.ph/wp-content/plugins/all-in-one-event-calendar/cache/2db52a98_ai1ec_parsed_css.css?ver=2.2.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="open-sans-css" href="//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="dashicons-css" href="http://newlifetrainingcenter.ph/wp-includes/css/dashicons.min.css?ver=4.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="admin-bar-css" href="http://newlifetrainingcenter.ph/wp-includes/css/admin-bar.min.css?ver=4.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="bp-admin-bar-css" href="http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/css/admin-bar.min.css?ver=2.2.3.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="gp-font-awesome-css" href="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/fonts/font-awesome/css/font-awesome.min.css?ver=4.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="gp-reset-css" href="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/css/reset.css?ver=4.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="gp-style-css" href="http://newlifetrainingcenter.ph/wp-content/themes/buddy-child/style.css?ver=4.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="gp-buddypress-css" href="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/css/bp.css?ver=4.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="gp-prettyphoto-css" href="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/prettyPhoto/css/prettyPhoto.css?ver=4.1" type="text/css" media="all">*/
/* <link rel="stylesheet" id="gp-responsive-css" href="http://newlifetrainingcenter.ph/wp-content/themes/buddy/responsive.css?ver=4.1" type="text/css" media="all">*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-includes/js/jquery/jquery.js?ver=1.11.1"></script><style type="text/css"></style>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1"></script>*/
/* <script type="text/javascript">*/
/* /* <![CDATA[ *//* */
/* var BP_Confirm = {"are_you_sure":"Are you sure?"};*/
/* /* ]]> *//* */
/* </script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/js/confirm.min.js?ver=2.2.3.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/js/widget-members.min.js?ver=2.2.3.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/js/jquery-query.min.js?ver=2.2.3.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/js/jquery-cookie.min.js?ver=2.2.3.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-core/deprecated/js/jquery-scroll-to.min.js?ver=2.2.3.1"></script>*/
/* <script type="text/javascript">*/
/* /* <![CDATA[ *//* */
/* var BP_DTheme = {"accepted":"Accepted","close":"Close","comments":"comments","leave_group_confirm":"Are you sure you want to leave this group?","mark_as_fav":"Favorite","my_favs":"My Favorites","rejected":"Rejected","remove_fav":"Remove Favorite","show_all":"Show all","show_all_comments":"Show all comments for this thread","show_x_comments":"Show all %d comments","unsaved_changes":"Your profile has unsaved changes. If you leave the page, the changes will be lost.","view":"View"};*/
/* /* ]]> *//* */
/* </script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/plugins/buddypress/bp-templates/bp-legacy/js/buddypress.js?ver=2.2.3.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/modernizr.js?ver=4.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/jwplayer.js?ver=4.1"></script>*/
/* <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://newlifetrainingcenter.ph/xmlrpc.php?rsd">*/
/* <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://newlifetrainingcenter.ph/wp-includes/wlwmanifest.xml"> */
/* <meta name="generator" content="WordPress 4.1">*/
/* <link rel="canonical" href="http://newlifetrainingcenter.ph/">*/
/* <link rel="shortlink" href="http://newlifetrainingcenter.ph/">*/
/* */
/*     <script type="text/javascript">var ajaxurl = 'http://newlifetrainingcenter.ph/wp-admin/admin-ajax.php';</script>*/
/* */
/* <link rel="shortcut icon" href="http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/favicon.png"><link rel="icon" href="http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/favicon.png" type="image/vnd.microsoft.icon"><link rel="icon" type="image/png" href="http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/favicon.png"><link rel="apple-touch-icon" href="http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/apple-icon.png"><style>body, input, textarea, select, #sidebar .menu li .menu-subtitle {font-family: "Raleway";}body, input, textarea, select, #sidebar .menu li .menu-subtitle {color: #666666;}a, .ui-tabs .ui-tabs-nav li.ui-tabs-active a, .ui-tabs .ui-tabs-nav li.ui-state-disabled a, .ui-tabs .ui-tabs-nav li.ui-state-processing a, .ui-tabs .ui-tabs-nav li.ui-state-hover a {color: #6b4d1c;}a:hover {color: #dd9933;}.padder, .widget, #footer, body.activity-permalink .activity-list {background-color: #fafaf7;}.widget .widgettitle, .sc-divider, .author-info, .separate > div, .joint > div {border-color:#fafaf7;}input, textarea, input[type="password"], .ui-tabs .ui-tabs-nav li.ui-tabs-active, .sc-tab-panel, #content .widget[class*="widget_bp_"] h3 {background-color: #e8e6dc; border-color: #e8e6dc;}input:focus, textarea:focus, input[type="password"]:focus {background-color: #bfbfbf; border-color: #bfbfbf;}h1, h2, h3, h4, h5, h6, .widget .widgettitle {font-family: "Montserrat";}h1, h2, h3, h4, h5, h6, .widget .widgettitle {color: #dd8502;}h1 {font-size: 22px;}h2 {font-size: 17px;}h3 {font-size: 15px;}h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, #sidebar .menu li a {color: #000000;}h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, #sidebar .menu li a:hover {color: #ddcaa6;}#header {background-color: #fafaf7;}#nav .menu li a, #nav .menu li a:hover, #nav .menu li:hover > a, #mobile-nav .menu li a, #mobile-nav .menu li a:hover {color: #ffffff;}#nav .menu .sub-menu li a {color: rgb(255,255,255); color: rgba(255,255,255,0.8);}#nav .menu .sub-menu li a:hover {color: rgb(255,255,255); color: rgba(255,255,255,1);}#nav .menu li a:hover, #nav .menu .sub-menu, #nav .menu li:hover > a, #mobile-nav .menu li a:hover {background-color: #753809;}input[type="button"], input[type="submit"], input[type="reset"], button, .button {color: #ffffff;}input[type="button"], input[type="submit"], input[type="reset"], button, .button {background-color: #dd9933; border-color: #dd9933;}input[type="button"]:hover, input[type="submit"]:hover, input[type="reset"]:hover, button:hover, .button:hover {background-color: #969696; border-color: #969696; color: #ffffff;}.login-button, #mobile-nav-button, .bp-wrapper .generic-button a,.bp-wrapper ul.button-nav li a,.bp-wrapper .item-list a.button,.bp-wrapper .item-list .activity-meta a,.bp-wrapper .item-list .acomment-options a,.bp-wrapper .activity-meta a:hover span,.widget .item-options a,.widget .swa-wrap ul#activity-filter-links a,.widget .swa-activity-list li.mini div.swa-activity-meta a,.widget .swa-activity-list div.swa-activity-meta a.acomment-reply,.widget .swa-activity-list div.swa-activity-meta a,.widget .swa-activity-list div.acomment-options a {color: #ffffff;}.login-button, #mobile-nav-button, .bp-wrapper .generic-button a,.bp-wrapper ul.button-nav li a,.bp-wrapper .item-list a.button,.bp-wrapper .item-list .activity-meta a,.bp-wrapper .item-list .acomment-options a,.bp-wrapper .activity-meta a:hover span,.widget .item-options a,.widget .swa-wrap ul#activity-filter-links a,.widget .swa-activity-list li.mini div.swa-activity-meta a,.widget .swa-activity-list div.swa-activity-meta a.acomment-reply,.widget .swa-activity-list div.swa-activity-meta a,.widget .swa-activity-list div.acomment-options a {background-color: #dd9933; border-color: #dd9933;}.login-button:hover, #mobile-nav-button:hover, .bp-wrapper .generic-button a:hover,.bp-wrapper ul.button-nav li a:hover,.bp-wrapper .item-list a.button:hover,.bp-wrapper .item-list .activity-meta a:hover,.bp-wrapper .item-list .acomment-options a:hover,.bp-wrapper .acomment-options a:hover,.bp-wrapper .activity-meta a span,.widget .item-options a:hover,.widget .item-options a.selected,.widget .swa-wrap ul#activity-filter-links a:hover,.widget .swa-activity-list div.swa-activity-meta a.acomment-reply:hover,.widget .swa-activity-list div.swa-activity-meta a:hover,.widget .swa-activity-list div.acomment-options a:hover {background-color: #dddddd; border-color: #dddddd; color: #ffffff;}[class^="icon-"]::before, [class*=" icon-"]::before {color: #6c9795;}[class^="icon-"]:hover::before, [class*=" icon-"]:hover::before {color: #dd9933 !important;}body {*/
/*     background-color:#6c9795;*/
/* }*/
/* .container*/
/* {*/
/*     width: 100% !important;*/
/* }*/
/* .widget .widgettitle {*/
/*     background:transparent;  */
/*     color: #666666;*/
/*     font-size: 16px;*/
/*     font-weight: bold;*/
/*     margin: 0 0 20px -8px;*/
/*     padding: 5px 0 5px 10px;*/
/*     width: 100%;*/
/* }*/
/* #nav  {*/
/*     margin:0 auto;*/
/* }*/
/* */
/* .tablenav-pages {*/
/*    margin:15px 0;*/
/* }*/
/* */
/* #header {*/
/*     background-color: transparent;*/
/* }*/
/* #post-wrapper {*/
/*     float: left;*/
/*     width: 100%;*/
/*     background: #fff;*/
/*     padding: 20px;*/
/*     -webkit-border--radius: 8px;*/
/*     -moz-border-radius: 8px;*/
/*     border-bottom-radius: 8px;*/
/*     -webkit-box-sizing: border-box;*/
/*     -moz-box-sizing: border-box;*/
/*     box-sizing: border-box;*/
/* }*/
/* </style>*/
/* <script src="{{ [*/
/*     'assets/javascript/jquery.js',*/
/* ]|theme }}"></script>*/
/* */
/* {% framework %}*/
/* */
/* <script>jQuery(document).ready(function(){window.devicePixelRatio>=2&&jQuery(".post-thumbnail img").each(function(){jQuery(this).attr({src:jQuery(this).attr("data-rel")})})});</script><link href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:400,500,600" rel="stylesheet" type="text/css"><style type="text/css" id="custom-background-css">*/
/* body.custom-background { background-color: #070707; background-image: url('http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/NTC-Background-map.jpg'); background-repeat: repeat; background-position: top left; background-attachment: fixed; }*/
/* </style>*/
/* <style type="text/css" media="print">#wpadminbar { display:none; }</style>*/
/* <style type="text/css" media="screen">*/
/*     html { margin-top: 32px !important; }*/
/*     * html body { margin-top: 32px !important; }*/
/*     @media screen and ( max-width: 782px ) {*/
/*         html { margin-top: 46px !important; }*/
/*         * html body { margin-top: 46px !important; }*/
/*     }*/
/* </style>*/
/* </head>*/
/* */
/* <body class="home-page home page page-id-6 page-parent page-template page-template-homepage page-template-homepage-php logged-in admin-bar custom-background sb-both js customize-support gp-desktop">*/
/* */
/* */
/* */
/* */
/* */
/*     <!-- BEGIN PAGE WRAPPER-->*/
/*  */
/*     <div id="page-wrapper">*/
/*  */
/*  */
/*         <!-- BEGIN HEADER -->*/
/*     */
/*         <div id="header">*/
/*     */
/*     */
/*             <!-- BEGIN LOGO -->*/
/*         */
/*             <div id="logo" style="">*/
/*             */
/*                 <span class="logo-details">Newlife Training Center | Online Portal</span>*/
/*             */
/*                 <a href="http://newlifetrainingcenter.ph" title="Newlife Training Center"><img src="http://newlifetrainingcenter.ph/wp-content/uploads/2015/04/NTC-Web-Banner-1-e1429326322656.png" width="800" height="100" alt="Newlife Training Center"></a>*/
/*             */
/*             </div>*/
/*         */
/*             <!-- END LOGO -->   */
/*                                     */
/*             */
/*             <!-- BEGIN NAV WRAPPER -->  */
/*             */
/*             <div id="nav">*/
/* */
/*             */
/*                 <!-- BEGIN NAV -->  */
/*             */
/*                 */
/*                 <!-- END NAV -->    */
/*             */
/*             */
/*                 <!-- BEGIN LOGIN/REGISTER -->*/
/*             */
/*                             */
/*                 <!-- END LOGIN/REGISTER -->*/
/*         */
/* */
/*                         */
/*                         */
/*             </div>*/
/*         */
/*             <!-- END NAV -->*/
/*         */
/*     */
/*             <nav id="mobile-nav">*/
/* */
/*                 <!-- BEGIN LOGIN/REGISTER -->*/
/*             */
/*                             */
/*                 <!-- END LOGIN/REGISTER -->*/
/*                             */
/*                             </nav><!-- END MOBILE MENU -->*/
/* */
/*                 */
/*         </div>*/
/*     */
/*         <!-- END HEADER -->*/
/*     */
/*     */
/*         <!-- BEGIN CONTENT WRAPPER -->*/
/*     */
/*         <div id="content-wrapper">*/
/* */
/*             */
/*             <!-- BEGIN LEFT CONTENT WRAPPER -->*/
/*             */
/*             <div id="left-content-wrapper">     */
/* */
/*             */
/* */
/* */
/*     <!-- BEGIN CONTENT -->  */
/* */
/*     <div id="content">*/
/* */
/* */
/*         <!-- BEGIN POST CONTENT --> */
/* */
/*             */
/*         */
/*             <div id="post-content">*/
/*                     */
/*     */
/*             */
/*     */
/*         <!-- BEGIN SLIDER WRAPPER -->   */
/*     */
/*         <div id="slider1" class="flexslider alignnone" style="width: 670px; ">*/
/*         */
/*         */
/*             <!-- BEGIN SLIDER -->   */
/*         */
/*             <ul class="slides">*/
/* */
/* */
/*                 */
/* */
/*                     <li class="slide flex-active-slide" id="slider1-slide-2033" style="width: 670px; float: left; margin-right: -100%; position: relative; display: list-item; height: 377px;">*/
/*                     */
/*                     */
/*                         <!-- BEGIN CAPTION -->  */
/*                     */
/*                                                 */
/*                             <div class="caption caption-bottomright">*/
/*                         */
/*                             */
/*                                 <!-- BEGIN SLIDE TITLE -->*/
/*                             */
/*                                 <h2></h2>                                           */
/*                                 <!-- END SLIDER TITLE -->*/
/*                             */
/*                 */
/*                                 <!-- BEGIN POST CONTENT -->*/
/*                             */
/*                                                             */
/*                                                                     */
/*                                                             */
/*                                 <!-- END POST CONTENT -->*/
/*                             */
/*                             */
/*                             </div>*/
/*                     */
/*                                             */
/*                         <!-- END CAPTION -->    */
/*                     */
/*                     */
/*                         <!-- BEGIN CONTENT -->  */
/*                     */
/*                                             */
/*                         */
/*                             <!-- BEGIN FEATURED IMAGE -->*/
/*                             */
/*                                                     */
/*                                                                 <a href="http://newlifetrainingcenter.ph/slide/2033/" title="">*/
/*                                                                 */
/*                                                                 */
/*                                                                                                                                                                                                                                             */
/*                                                                                                             <img src="http://newlifetrainingcenter.ph/wp-content/uploads/2015/11/blockweek-nights-670x377.png" data-rel="http://newlifetrainingcenter.ph/wp-content/uploads/2015/11/blockweek-nights-1340x754.png" width="670" height="377" alt="" class="wp-post-image">*/
/*                                     */
/*                                 </a>    */
/*                     */
/*                                                                                 */
/*                             <!-- END FEATURED IMAGE -->*/
/*                         */
/* */
/*                             <!-- BEGIN LIGHTBOX IMAGES -->*/
/*                 */
/*                                                                     */
/*                             <!-- END LIGHTBOX IMAGES -->*/
/*                         */
/*                             */
/*                                             */
/*                         <!-- END CONTENT -->*/
/*                     */
/* */
/*                     </li>*/
/*                 */
/* */
/*                 */
/* */
/*                     <li class="slide" id="slider1-slide-2035" style="width: 670px; float: left; margin-right: -100%; position: relative; height: 377px; display: none;">*/
/*                     */
/*                     */
/*                         <!-- BEGIN CAPTION -->  */
/*                     */
/*                                                 */
/*                             <div class="caption caption-bottomright">*/
/*                         */
/*                             */
/*                                 <!-- BEGIN SLIDE TITLE -->*/
/*                             */
/*                                 <h2></h2>                                           */
/*                                 <!-- END SLIDER TITLE -->*/
/*                             */
/*                 */
/*                                 <!-- BEGIN POST CONTENT -->*/
/*                             */
/*                                                             */
/*                                                                     */
/*                                                             */
/*                                 <!-- END POST CONTENT -->*/
/*                             */
/*                             */
/*                             </div>*/
/*                     */
/*                                             */
/*                         <!-- END CAPTION -->    */
/*                     */
/*                     */
/*                         <!-- BEGIN CONTENT -->  */
/*                     */
/*                                             */
/*                         */
/*                             <!-- BEGIN FEATURED IMAGE -->*/
/*                             */
/*                                                     */
/*                                                                 <a href="http://newlifetrainingcenter.ph/slide/2035/" title="">*/
/*                                                                 */
/*                                                                 */
/*                                                                                                                                                                                                                                             */
/*                                                                                                             <img src="http://newlifetrainingcenter.ph/wp-content/uploads/2015/11/nathan-morris1-670x377.jpg" data-rel="http://newlifetrainingcenter.ph/wp-content/uploads/2015/11/nathan-morris1-1340x754.jpg" width="670" height="377" alt="" class="wp-post-image">*/
/*                                     */
/*                                 </a>    */
/*                     */
/*                                                                                 */
/*                             <!-- END FEATURED IMAGE -->*/
/*                         */
/* */
/*                             <!-- BEGIN LIGHTBOX IMAGES -->*/
/*                 */
/*                                                                     */
/*                             <!-- END LIGHTBOX IMAGES -->*/
/*                         */
/*                             */
/*                                             */
/*                         <!-- END CONTENT -->*/
/*                     */
/* */
/*                     </li>*/
/*                 */
/* */
/*                 */
/* */
/*                     <li class="slide" id="slider1-slide-12" style="width: 670px; float: left; margin-right: -100%; position: relative; height: 377px; display: none;">*/
/*                     */
/*                     */
/*                         <!-- BEGIN CAPTION -->  */
/*                     */
/*                                             */
/*                         <!-- END CAPTION -->    */
/*                     */
/*                     */
/*                         <!-- BEGIN CONTENT -->  */
/*                     */
/*                         */
/*                         */
/*                             <!-- VIDEO IMAGE-->*/
/*                                     */
/*                                                             */
/*                                 <div class="video-image" style="width: 670px; height: 377px;">*/
/*                         */
/*                                     <div class="video-button"></div>*/
/*                             */
/*                                                                                                                                                             <img src="http://newlifetrainingcenter.ph/wp-content/uploads/2014/11/ntc-670x377.jpg" data-rel="http://newlifetrainingcenter.ph/wp-content/uploads/2014/11/ntc-1340x754.jpg" width="670" height="377" alt="" class="wp-post-image">*/
/*                                                                     */
/*                                 </div>*/
/*                         */
/*                                                     */
/*                             <!-- END VIDEO IMAGE -->*/
/*                         */
/*                         */
/*                             <!-- BEGIN VIDEO -->*/
/* */
/*                                             */
/*                                                                 */
/* */
/*                                 */
/*                                     <!-- BEGIN JWPLAYER VIDEO -->*/
/*     */
/*                                     <div class="video-player">*/
/*                                         <div id="slider1-player-12" class="" style="position: relative; height: 377px; width: 0px; padding: 0px; z-index: 0; background-color: rgb(0, 0, 0);"><div id="slider1-player-12_video_wrapper" style="overflow: hidden; position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px;"><div id="slider1-player-12_video" style="width: 100%; height: 100%; top: 0px; left: 0px; z-index: 1; margin: auto; display: block;"></div></div><div id="slider1-player-12_displayarea" style="top: 0px; bottom: 0px; left: 0px; right: 0px; width: 0px; height: 377px; position: absolute;"><div id="slider1-player-12_jwplayer_dock" style="opacity: 1; position: absolute; z-index: 7;"></div><div id="slider1-player-12_jwplayer_display" style="cursor: pointer; top: 0px; left: 0px; overflow: hidden; position: absolute; z-index: 6; width: 0px; height: 377px;"><div id="slider1-player-12_jwplayer_display_text" style="z-index: 4; position: relative; opacity: 0.8; color: rgb(255, 255, 255); text-align: center; font-family: Arial, sans-serif; padding: 0px 5px; font-size: 14px; top: 189px; background-color: rgb(0, 0, 0);"></div><img id="slider1-player-12_jwplayer_display_image" src="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/images/black.gif" style="display: block; position: absolute; cursor: pointer; left: -188px; top: 0px; margin: 0px; padding: 0px; text-decoration: none; z-index: 1; width: 377px; height: 377px; opacity: 1;"><div id="slider1-player-12_jwplayer_display_iconBackground" style="cursor: pointer; position: absolute; border: 0px; width: 89px; height: 51px; margin: 0px; padding: 0px; z-index: 2; display: block; top: 163px; left: -44px; background-image: url(http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/fs39/display/background.png);"><div id="slider1-player-12_jwplayer_display_icon" style="cursor: pointer; position: absolute; top: -14px; left: 5px; border: 0px; margin: 0px; padding: 0px; z-index: 3; display: block; width: 80px; height: 80px; background-image: url(http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/fs39/display/playIcon.png);"></div></div></div></div><div id="slider1-player-12_instreamarea" style="overflow: hidden; position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; z-index: 100; display: none; width: 0px; height: 0px; background: 0px 50%;"></div></div>                                                         */
/*                                     </div>*/
/*                                 */
/*                                     <script>*/
/*                                     //<![CDATA[*/
/* */
/*                                     jwplayer("slider1-player-12").setup({*/
/*                                         image: "http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/images/black.gif",*/
/*                                         icons: "true",*/
/*                                         autostart: "false",*/
/*                                         stretching: "fill",*/
/*                                         controlbar: "none",*/
/*                                         skin: "http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/fs39/fs39.xml",*/
/*                                         width: "100%",*/
/*                                         height: "377",*/
/*                                         screencolor: "000000",*/
/*                                         modes:*/
/*                                             [*/
/*                                                                                             {type: "html5", config: {file: "https://www.youtube.com/watch?v=HrgiJp6-B0I"}},*/
/*                                                 {type: "flash", src: "http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/mediaplayer/player.swf", config: {file: "https://www.youtube.com/watch?v=HrgiJp6-B0I"}}*/
/*                                                                                         ],*/
/*                                         plugins: {}*/
/*                                     });*/
/* */
/* */
/*                                     // Play JW Player*/
/*                                         */
/*                                     jQuery(document).ready(function(){*/
/*                                         jQuery("#slider1-slide-12 .video-image").click(function() {*/
/*                                             jQuery('#slider1-slide-12 .video-player').show();*/
/*                                             jwplayer("slider1-player-12").play();*/
/*                                         }); */
/*                                     });*/
/*                         */
/*                         */
/*                                     // Stop JW Player*/
/*                         */
/*                                     jQuery(window).load(function() {    */
/*                                         jQuery("#slider1 .flex-control-nav li a").click(function() {*/
/*                                             if(jwplayer("slider1-player-12").getState() === "PLAYING") {*/
/*                                                 jQuery('#slider1-slide-12 .video-player').hide();*/
/*                                                 jwplayer("slider1-player-12").stop();*/
/*                                             }*/
/*                                         });*/
/*                                     });*/
/*                                 */
/*                                                         */
/*                                     //]]&gt;*/
/*                                     </script>*/
/*                             */
/*                                     <!-- END JWPLAYER VIDEO -->*/
/*                         */
/*                         */
/*                                 */
/*                             */
/*                             <!-- END VIDEO -->*/
/* */
/*                             */
/*                                                     */
/*                                 <script>*/
/*                         */
/*                                 jQuery(document).ready(function() {*/
/*                         */
/*                                     // Hide Video Image/Play Button*/
/* */
/*                                     jQuery("#slider1-slide-12 .video-image").click(function() {*/
/*                                         jQuery('#slider1-slide-12 .video-image').hide();*/
/*                                         jQuery('#slider1-slide-12 .caption').hide();*/
/*                                     }); */
/* */
/*                                 }); */
/*                             */
/*                                 </script>*/
/*                                 */
/*                                 */
/* */
/* */
/*                                             */
/*                         <!-- END CONTENT -->*/
/*                     */
/* */
/*                     </li>*/
/*                 */
/* */
/*                         */
/*         */
/*                 </ul>*/
/*             */
/*                 <!-- END SLIDER --> */
/*             */
/*         */
/*             <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol></div>*/
/*         */
/*             <!-- END SLIDER WRAPPER --> */
/* */
/* */
/*                 */
/*         */
/*         <script>*/
/*         jQuery(document).ready(function(){*/
/*         */
/*             jQuery("#slider1.flexslider").flexslider({ */
/*                 animation: "fade",*/
/*                 slideshowSpeed: 6000,*/
/*                 animationSpeed: 600,*/
/*                 directionNav: false,            */
/*                 controlNav: true,               */
/*                 pauseOnAction: true, */
/*                 pauseOnHover: false,*/
/*                 start: function(slider) {*/
/* */
/*                     // Pause Slider*/
/*                     jQuery("#slider1 .flex-control-nav li a, #slider1 .video-image").click(function() { */
/*                         slider.pause(); */
/*                     });*/
/*         */
/*                 }*/
/*             */
/*             }); */
/* */
/*                     */
/*             // Resize Video Player*/
/*     */
/*             jQuery(window).load(function(){*/
/*                 resizePlayer();*/
/*                 jQuery(window).resize(function() {*/
/*                     resizePlayer();*/
/*                 }); */
/*             });*/
/* */
/*             function resizePlayer() {*/
/*                 parentContainer = jQuery("#slider1 .slides").parent().attr('id');*/
/*                 sliderWidth = jQuery('#'+parentContainer).width();*/
/*                 newVideoWidth = sliderWidth;*/
/*                 newVideoHeight = (sliderWidth * 377) / 670;*/
/*                 jQuery("#slider1.flexslider .slides > li, #slider1.flexslider .video-image, #slider1.flexslider iframe, #slider1.flexslider video, #slider1.flexslider object, #slider1.flexslider embed").width(newVideoWidth).height(newVideoHeight);                     */
/*             }*/
/* */
/*                                 */
/*             // Show All Video Images & Captions*/
/* */
/*             jQuery("#slider1 .flex-control-nav li a").click(function() {*/
/*                 jQuery('#slider1 .video-image').show();*/
/*                 jQuery('#slider1 .video-player').hide();*/
/*                 jQuery('#slider1 .caption').show();*/
/*             }); */
/*         */
/*         });         */
/*         </script>*/
/*     */
/*     */
/*     */
/* <div class="sc-divider clear"></div>*/
/*     */
/*     */
/*         <!-- BEGIN HEADER -->*/
/*     */
/*         <section id="layout-content" class="post-wrapper">*/
/*             {% page %}*/
/*         </section>*/
/*     */
/*                     */
/*         */
/*                                             <div class="clear"></div>*/
/*                     */
/* */
/*         </div>*/
/*     */
/*         <!-- END POST WRAPPER -->*/
/*     */
/* */
/*     */
/*             </div>*/
/*             */
/*         */
/*         <!-- END POST CONTENT -->           */
/* */
/* */
/*     </div>*/
/*     */
/*     <!-- END CONTENT -->    */
/*     */
/* */
/* */
/* */
/* */
/* */
/* */
/*     */
/*                 */
/* */
/* */
/*     */
/*     <!-- BEGIN SIDEBAR -->*/
/*         */
/*     <div id="sidebar-left" class="sidebar">*/
/*             */
/*             */
/*             */
/*             */
/*             <!-- BEGIN SELECTED WIDGETS -->*/
/* */
/*             <div id="nav_menu-8" class="widget widget_nav_menu"><div class="menu-header-container"><ul id="menu-header" class="menu"><li id="menu-item-280" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-6 current_page_item menu-item-280"><a href="http://newlifetrainingcenter.ph/">HOME</a></li>*/
/* <li id="menu-item-1200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1200"><a href="http://newlifetrainingcenter.ph/homepage/welcome-message/">WELCOME MESSAGE</a></li>*/
/* <li id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-227"><a href="http://newlifetrainingcenter.ph/homepage/about-us/">ABOUT US</a></li>*/
/* <li id="menu-item-1126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1126"><a href="http://newlifetrainingcenter.ph/homepage/life-ntc/">LIFE @ NTC</a></li>*/
/* <li id="menu-item-217" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-217"><a href="http://newlifetrainingcenter.ph/homepage/programs/">PROGRAMS</a></li>*/
/* <li id="menu-item-1154" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1154"><a href="http://newlifetrainingcenter.ph/homepage/training-calendar/">TRAINING CALENDAR</a></li>*/
/* <li id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-226"><a href="http://newlifetrainingcenter.ph/homepage/admissions/">ADMISSIONS</a></li>*/
/* <li id="menu-item-386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-386"><a href="http://newlifetrainingcenter.ph/homepage/apply-now/">APPLY NOW</a></li>*/
/* <li id="menu-item-786" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-786"><a href="http://newlifetrainingcenter.ph/homepage/programs/downloadables/">DOWNLOADABLES</a></li>*/
/* <li id="menu-item-16" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="http://newlifetrainingcenter.ph/homepage/contact-page/">CONTACT US</a></li>*/
/* </ul></div></div><div id="nav_menu-20" class="widget widget_nav_menu"><div class="menu-dashboard-menu-container"><ul id="menu-dashboard-menu" class="menu"><li id="menu-item-454" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-454"><a href="http://newlifetrainingcenter.ph/administrators-control-panel/">ADMIN CONTROL PANEL</a></li>*/
/* <li id="menu-item-455" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-455"><a href="http://newlifetrainingcenter.ph/faculty-control-panel/">FACULTY CONTROL PANEL</a></li>*/
/* <li id="menu-item-1248" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1248"><a href="http://newlifetrainingcenter.ph/ntc-staff-dashboard/">STAFF CONTROL PANEL</a></li>*/
/* <li id="menu-item-456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-456"><a href="http://newlifetrainingcenter.ph/students-area/">STUDENTS CONTROL PANEL</a></li>*/
/* </ul></div></div>*/
/*             <!-- END SELECTED WIDGETS -->   */
/*             */
/*             */
/*                 */
/*         */
/*     </div>*/
/*     */
/*     <!-- END SIDEBAR -->*/
/*     */
/*     */
/*                 */
/*             </div>*/
/*             */
/*             <!-- END LEFT CONTENT WRAPPER -->*/
/*             */
/*                         */
/*             */
/* */
/*         */
/*     */
/*     <!-- BEGIN SIDEBAR -->*/
/*         */
/*     <div id="sidebar-right" class="sidebar">*/
/*             */
/*         */
/*         <!-- BEGIN BUDYYPRESS SITEWIDE NOTICES -->*/
/*             */
/*                                     */
/*         <!-- END BUDYYPRESS SITEWIDE NOTICES -->*/
/*         */
/*                     */
/*             */
/*     */
/*             <!-- BEGIN SELECTED WIDGETS -->*/
/* */
/*             <div id="members-widget-login-5" class="widget login"><h2 class="widgettitle">Account Login</h2><p>You are currently logged in.</p>*/
/* </div><div id="ai1ec_agenda_widget-3" class="widget widget_ai1ec_agenda_widget">*/
/* */
/*     <h2 class="widgettitle">Upcoming Events</h2>*/
/* */
/* <style>*/
/* <!--*/
/* */
/* -->*/
/* </style>*/
/* <div class="timely ai1ec-agenda-widget-view ai1ec-clearfix">*/
/* */
/*             <p class="ai1ec-no-results">*/
/*             There are no upcoming events.*/
/*         </p>*/
/*      */
/*             <p>*/
/*                             <a class="ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-pull-right*/
/*                     ai1ec-calendar-link" href="http://newlifetrainingcenter.ph/homepage/calendar/cat_ids~20,3,4,5/">*/
/*                     View Calendar*/
/*                     <i class="ai1ec-fa ai1ec-fa-arrow-right"></i>*/
/*                 </a>*/
/*             */
/*                             </p><div class="ai1ec-subscribe-dropdown ai1ec-dropdown ai1ec-btn*/
/*     ai1ec-btn-default ai1ec-btn-xs">*/
/*     <span role="button" class="ai1ec-dropdown-toggle ai1ec-subscribe" data-toggle="ai1ec-dropdown">*/
/*         <i class="ai1ec-fa ai1ec-icon-rss ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/*         <span class="ai1ec-hidden-xs">*/
/*                             Add*/
/*                         <span class="ai1ec-caret"></span>*/
/*         </span>*/
/*     </span>*/
/*         <ul class="ai1ec-dropdown-menu ai1ec-pull-left" role="menu">*/
/*         <li>*/
/*             <a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" target="_blank" data-placement="right" title="Copy this URL for your own Timely calendar or click to add to your rich-text calendar" href="http://newlifetrainingcenter.ph/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;ai1ec_cat_ids=20,3,4,5">*/
/*                 <i class="ai1ec-fa ai1ec-fa-lg ai1ec-fa-fw ai1ec-icon-timely"></i>*/
/*                 Add to Timely Calendar*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" target="_blank" data-placement="right" title="Subscribe to this calendar in your Google Calendar" href="http://www.google.com/calendar/render?cid=http%3A%2F%2Fnewlifetrainingcenter.ph%2F%3Fplugin%3Dall-in-one-event-calendar%26controller%3Dai1ec_exporter_controller%26action%3Dexport_events%26ai1ec_cat_ids%3D20%2C3%2C4%2C5">*/
/*                 <i class="ai1ec-fa ai1ec-icon-google ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/*                 Add to Google*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" target="_blank" data-placement="right" title="Subscribe to this calendar in MS Outlook" href="webcal://newlifetrainingcenter.ph/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;no_html=true&amp;ai1ec_cat_ids=20,3,4,5">*/
/*                 <i class="ai1ec-fa ai1ec-icon-windows ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/*                 Add to Outlook*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" target="_blank" data-placement="right" title="Subscribe to this calendar in Apple Calendar/iCal" href="webcal://newlifetrainingcenter.ph/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;no_html=true&amp;ai1ec_cat_ids=20,3,4,5">*/
/*                 <i class="ai1ec-fa ai1ec-icon-apple ai1ec-fa-lg ai1ec-fa-fw"></i>*/
/*                 Add to Apple Calendar*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*                         <a class="ai1ec-tooltip-trigger ai1ec-tooltip-auto" data-placement="right" title="Subscribe to this calendar in another plain-text calendar" href="http://newlifetrainingcenter.ph/?plugin=all-in-one-event-calendar&amp;controller=ai1ec_exporter_controller&amp;action=export_events&amp;no_html=true&amp;ai1ec_cat_ids=20,3,4,5">*/
/*                 <i class="ai1ec-fa ai1ec-icon-calendar ai1ec-fa-fw"></i>*/
/*                 Add to other calendar*/
/*             </a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* */
/*                     <p></p>*/
/*      */
/* </div>*/
/* */
/* */
/* */
/* </div><div id="ai1ec_agenda_widget-7" class="widget widget_ai1ec_agenda_widget">*/
/* */
/*     <h2 class="widgettitle">Training Calendar</h2>*/
/* */
/* <style>*/
/* <!--*/
/* */
/* -->*/
/* </style>*/
/* <div class="timely ai1ec-agenda-widget-view ai1ec-clearfix">*/
/* */
/*             <div>*/
/*                                                     <div class="ai1ec-date*/
/*                     ">*/
/*                     <a class="ai1ec-date-title ai1ec-load-view" href="http://newlifetrainingcenter.ph/homepage/calendar/action~oneday/exact_date~3-11-2015/">*/
/*                         <div class="ai1ec-month">Nov</div>*/
/*                         <div class="ai1ec-day">3</div>*/
/*                         <div class="ai1ec-weekday">Tue</div>*/
/*                                             </a>*/
/*                     <div class="ai1ec-date-events">*/
/*                                                                                                                                         <div class="ai1ec-event*/
/*                                     ai1ec-event-id-696*/
/*                                     ai1ec-event-instance-id-108*/
/*                                     ">*/
/* */
/*                                     <a href="http://newlifetrainingcenter.ph/event/school-of-the-spirit-sos-q3/?instance_id=108" class="ai1ec-popup-trigger ai1ec-load-event">*/
/*                                                                                     <span class="ai1ec-event-time">*/
/*                                                 09:30*/
/*                                             </span>*/
/*                                         */
/*                                         <span class="ai1ec-event-title">*/
/*                                             School of the Spirit (SOS) Q3*/
/*                                                                                             <span class="ai1ec-event-location">@ Newlife Training Center</span>*/
/*                                                                                     </span>*/
/*                                     </a>*/
/* */
/*                                     <div class="ai1ec-popover ai1ec-popup ">*/
/* */
/*         */
/*     <span class="ai1ec-popup-title">*/
/*         <a href="http://newlifetrainingcenter.ph/event/school-of-the-spirit-sos-q3/?instance_id=108" class="ai1ec-load-event">School of the Spirit (SOS) Q3</a>*/
/*                     <span class="ai1ec-event-location">@ Newlife Training Center</span>*/
/*                     </span>*/
/* */
/*             <a class="post-edit-link" href="http://newlifetrainingcenter.ph/wp-admin/post.php?post=696&amp;action=edit">*/
/*             <i class="ai1ec-fa ai1ec-fa-pencil"></i> Edit*/
/*         </a>*/
/*     */
/*     <div class="ai1ec-event-time">*/
/*                     Nov 3 @ 09:30 – Dec 17 @ 09:30*/
/*             </div>*/
/* */
/*     */
/*             <div class="ai1ec-popup-excerpt">NTC All Year Levels</div>*/
/*     */
/* </div>*/
/* */
/*                                 </div>*/
/*                                                                         </div>*/
/*                 </div>*/
/*                             <div class="ai1ec-date*/
/*                     ">*/
/*                     <a class="ai1ec-date-title ai1ec-load-view" href="http://newlifetrainingcenter.ph/homepage/calendar/action~oneday/exact_date~24-11-2015/">*/
/*                         <div class="ai1ec-month">Nov</div>*/
/*                         <div class="ai1ec-day">24</div>*/
/*                         <div class="ai1ec-weekday">Tue</div>*/
/*                                             </a>*/
/*                     <div class="ai1ec-date-events">*/
/*                                                                                                                                         <div class="ai1ec-event*/
/*                                     ai1ec-event-id-688*/
/*                                     ai1ec-event-instance-id-183*/
/*                                     ">*/
/* */
/*                                     <a href="http://newlifetrainingcenter.ph/event/how-to-be-led-by-the-spirit/?instance_id=183" class="ai1ec-popup-trigger ai1ec-load-event">*/
/*                                                                                     <span class="ai1ec-event-time">*/
/*                                                 09:30*/
/*                                             </span>*/
/*                                         */
/*                                         <span class="ai1ec-event-title">*/
/*                                             How To Be Led by the Spirit*/
/*                                                                                             <span class="ai1ec-event-location">@ Newlife Training Center</span>*/
/*                                                                                     </span>*/
/*                                     </a>*/
/* */
/*                                     <div class="ai1ec-popover ai1ec-popup ">*/
/* */
/*         */
/*     <span class="ai1ec-popup-title">*/
/*         <a href="http://newlifetrainingcenter.ph/event/how-to-be-led-by-the-spirit/?instance_id=183" class="ai1ec-load-event">How To Be Led by the Spirit</a>*/
/*                     <span class="ai1ec-event-location">@ Newlife Training Center</span>*/
/*                     </span>*/
/* */
/*             <a class="post-edit-link" href="http://newlifetrainingcenter.ph/wp-admin/post.php?post=688&amp;action=edit">*/
/*             <i class="ai1ec-fa ai1ec-fa-pencil"></i> Edit*/
/*         </a>*/
/*     */
/*     <div class="ai1ec-event-time">*/
/*                     Nov 24 @ 09:30 – Dec 1 @ 09:30*/
/*             </div>*/
/* */
/*     */
/*             <div class="ai1ec-popup-excerpt">Faculty: Pastors Paul &amp; Shoddy Chase Level: First Year</div>*/
/*     */
/* </div>*/
/* */
/*                                 </div>*/
/*                                                                         </div>*/
/*                 </div>*/
/*                             <div class="ai1ec-date*/
/*                     ">*/
/*                     <a class="ai1ec-date-title ai1ec-load-view" href="http://newlifetrainingcenter.ph/homepage/calendar/action~oneday/exact_date~26-11-2015/">*/
/*                         <div class="ai1ec-month">Nov</div>*/
/*                         <div class="ai1ec-day">26</div>*/
/*                         <div class="ai1ec-weekday">Thu</div>*/
/*                                             </a>*/
/*                     <div class="ai1ec-date-events">*/
/*                                                                                                                                         <div class="ai1ec-event*/
/*                                     ai1ec-event-id-694*/
/*                                     ai1ec-event-instance-id-184*/
/*                                     ">*/
/* */
/*                                     <a href="http://newlifetrainingcenter.ph/event/youth-and-young-adults-ministry/?instance_id=184" class="ai1ec-popup-trigger ai1ec-load-event">*/
/*                                                                                     <span class="ai1ec-event-time">*/
/*                                                 09:30*/
/*                                             </span>*/
/*                                         */
/*                                         <span class="ai1ec-event-title">*/
/*                                             Youth and Young Adults Ministry*/
/*                                                                                             <span class="ai1ec-event-location">@ Newlife Training Center</span>*/
/*                                                                                     </span>*/
/*                                     </a>*/
/* */
/*                                     <div class="ai1ec-popover ai1ec-popup ">*/
/* */
/*         */
/*     <span class="ai1ec-popup-title">*/
/*         <a href="http://newlifetrainingcenter.ph/event/youth-and-young-adults-ministry/?instance_id=184" class="ai1ec-load-event">Youth and Young Adults Ministry</a>*/
/*                     <span class="ai1ec-event-location">@ Newlife Training Center</span>*/
/*                     </span>*/
/* */
/*             <a class="post-edit-link" href="http://newlifetrainingcenter.ph/wp-admin/post.php?post=694&amp;action=edit">*/
/*             <i class="ai1ec-fa ai1ec-fa-pencil"></i> Edit*/
/*         </a>*/
/*     */
/*     <div class="ai1ec-event-time">*/
/*                     Nov 26 @ 09:30 – Dec 2 @ 09:30*/
/*             </div>*/
/* */
/*     */
/*             <div class="ai1ec-popup-excerpt">Faculty: Ptr. Heidi Giague and Team Level: Second Year</div>*/
/*     */
/* </div>*/
/* */
/*                                 </div>*/
/*                                                                         </div>*/
/*                 </div>*/
/*                     </div>*/
/*      */
/*             <p>*/
/*                             <a class="ai1ec-btn ai1ec-btn-default ai1ec-btn-xs ai1ec-pull-right*/
/*                     ai1ec-calendar-link" href="http://newlifetrainingcenter.ph/homepage/calendar/cat_ids~12/">*/
/*                     View Calendar*/
/*                     <i class="ai1ec-fa ai1ec-fa-arrow-right"></i>*/
/*                 </a>*/
/*             */
/*                     </p>*/
/*      */
/* </div>*/
/* */
/* */
/* */
/* </div>*/
/*             <!-- END SELECTED WIDGETS -->                       */
/* */
/*                 */
/*         */
/*     </div>*/
/*     */
/*     <!-- END SIDEBAR -->*/
/*     */
/*     */
/*     */
/*     */
/*             <div class="clear"></div>*/
/*         */
/*         */
/*         </div>*/
/*     */
/*         <!-- END CONTENT WRAPPER -->*/
/* */
/*     </div>*/
/* */
/*     <!-- END PAGE WRAPPER -->*/
/*     */
/* */
/*     <!-- BEGIN FOOTER -->*/
/* */
/*     */
/*     <!-- END FOOTER -->*/
/* */
/* */
/*     <!-- BEGIN COPYRIGHT -->*/
/*     */
/*     <div id="copyright">Copyright © 2015. NTC Portal. All rights reserved.</div>*/
/*     */
/*     <!-- END COPYRIGHT -->*/
/* */
/* */
/* */
/* */
/* */
/* <!-- Generated in 0.557 seconds. (101 q) -->*/
/* */
/*     <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-includes/js/admin-bar.min.js?ver=4.1"></script>*/
/* <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js?ver=4.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/jquery.ui.totop.min.js?ver=4.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/prettyPhoto/js/jquery.prettyPhoto.js?ver=4.1"></script>*/
/* <script type="text/javascript">*/
/* /* <![CDATA[ *//* */
/* var gp_script = {"rootFolder":"http:\/\/newlifetrainingcenter.ph\/wp-content\/themes\/buddy","emptySearchText":"Please enter something in the search box!"};*/
/* /* ]]> *//* */
/* </script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/custom.js?ver=4.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/jquery.flexslider.js?ver=4.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/wp-content/themes/buddy/lib/scripts/jquery.touchSwipe.min.js?ver=4.1"></script>*/
/* <script type="text/javascript" src="http://newlifetrainingcenter.ph/?ai1ec_render_js=common_frontend&amp;is_backend=false&amp;ver=2.2.1"></script>*/
/*     <script type="text/javascript">*/
/*         (function() {*/
/*             var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');*/
/* */
/*             request = true;*/
/* */
/*             b[c] = b[c].replace( rcs, ' ' );*/
/*             b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;*/
/*         }());*/
/*     </script>*/
/*             </body></html>*/

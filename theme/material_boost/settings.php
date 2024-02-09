<?php

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    // New tabs layout for admin settings pages.
    $settings = new theme_boost_admin_settingspage_tabs('themesettingmaterial_boost', get_string('configtitle', 'theme_material_boost'));
    //General Settings
    require('settings/general_settings.php');
    //Header Settings
    require('settings/header_settings.php');
    //Footer Settings
    require('settings/footer_settings.php');
    //Frontpage Settings
    
    require('settings/fpalerts_settings.php');
    require('settings/fpslideshow_settings.php');

    require('settings/fpfeatures_settings.php');
    require('settings/fppromo_settings.php');
    require('settings/fptestimonials_settings.php');
    require('settings/fpctasection_settings.php');
    //Social Media Settings
    require('settings/socialmedia_settings.php');
    //Advanced Settings
    require('settings/advanced_settings.php');
}

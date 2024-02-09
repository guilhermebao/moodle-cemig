<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Header Settings */
    $page = new admin_settingpage('theme_material_boost_header', get_string('headerheading', 'theme_material_boost'));
	$page->add(new admin_setting_heading('theme_material_boost_header', get_string('headerheadingsub', 'theme_material_boost'),
            format_text(get_string('headerdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));
    
    
    // Header phone number settings
    $name = 'theme_material_boost/headerphone';
    $title = get_string('headerphone','theme_material_boost');
    $description = get_string('headerphonedesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Header email settings
    $name = 'theme_material_boost/headeremail';
    $title = get_string('headeremail','theme_material_boost');
    $description = get_string('headeremaildesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
        
    $settings->add($page);
	

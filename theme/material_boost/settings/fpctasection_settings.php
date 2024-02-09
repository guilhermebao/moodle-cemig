<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Frontpage CTA Section */
    
    $page = new admin_settingpage('theme_material_boost_ctasection', get_string('ctasectionheading', 'theme_material_boost'));
	$page->add(new admin_setting_heading('theme_material_boost_ctasection', get_string('ctasectionsub', 'theme_material_boost'),
            format_text(get_string('ctasectiondesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));
    
    // Enable CTA Section
    $name = 'theme_material_boost/usectasection';
    $title = get_string('usectasection', 'theme_material_boost');
    $description = get_string('usectasectiondesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA Section Title
    $name = 'theme_material_boost/ctasectiontitle';
    $title = get_string('ctasectiontitle', 'theme_material_boost');
    $description = get_string('ctasectiontitledesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA Section Content
    $name = 'theme_material_boost/ctasectioncontent';
    $title = get_string('ctasectioncontent', 'theme_material_boost');
    $description = get_string('ctasectioncontentdesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA Section CTA Button Text
    $name = 'theme_material_boost/ctasectionbuttontext';
    $title = get_string('ctasectionbuttontext', 'theme_material_boost');
    $description = get_string('ctasectionbuttontextdesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // CTA Section CTA Button URL
    $name = 'theme_material_boost/ctasectionbuttonurl';
    $title = get_string('ctasectionbuttonurl', 'theme_material_boost');
    $description = get_string('ctasectionbuttonurldesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // URL open in new window    
    $name = 'theme_material_boost/ctasectionbuttonurlopennew';
    $title = get_string('opennew', 'theme_material_boost');
    $description = get_string('opennewdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

        
    $settings->add($page);
	

<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
    /* Footer Blocks Settings */
	$page = new admin_settingpage('theme_material_boost_footerblocks', get_string('footerblocksheading', 'theme_material_boost'));
	$page->add(new admin_setting_heading('theme_material_boost_footerblocks', get_string('footerblocksheadingsub', 'theme_material_boost'),
            format_text(get_string('footerblocksdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));   
            
       
	
	//Enable Footer Blocks.
    $name = 'theme_material_boost/usefooterblocks';
    $title = get_string('usefooterblocks', 'theme_material_boost');
    $description = get_string('usefooterblocksdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
	
	//Footer Block One.
	$name = 'theme_material_boost/footerblock1';
    $title = get_string('footerblock1', 'theme_material_boost');
    $description = get_string('footerblock1desc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //Footer Block Two.
	$name = 'theme_material_boost/footerblock2';
    $title = get_string('footerblock2', 'theme_material_boost');
    $description = get_string('footerblock2desc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    //Footer Block Three.
	$name = 'theme_material_boost/footerblock3';
    $title = get_string('footerblock3', 'theme_material_boost');
    $description = get_string('footerblock3desc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    $page->add(new admin_setting_heading('theme_material_boost_footerwidgetheadingsub', get_string('footerwidgetheadingsub', 'theme_material_boost'),
            format_text(get_string('footerwidgetheadingsubdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));   
    
    
    // Footerwidget setting.
    $name = 'theme_material_boost/footerwidget';
    $title = get_string('footerwidget', 'theme_material_boost');
    $description = get_string('footerwidgetdesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);      
    
        
    $settings->add($page);
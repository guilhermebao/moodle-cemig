<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	
	/* Advanced Settings */
	$page = new admin_settingpage('theme_material_boost_advanced', get_string('advancedheading', 'theme_material_boost'));

	
	/* Custom SCSS & CSS */
	$page->add(new admin_setting_heading('theme_material_boost_customcss', get_string('customcssheadingsub', 'theme_material_boost'),
            format_text(get_string('customcssdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));
       
    // Raw SCSS to include before the content.
    $setting = new admin_setting_scsscode('theme_material_boost/scsspre',
        get_string('rawscsspre', 'theme_material_boost'), get_string('rawscsspre_desc', 'theme_material_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Raw SCSS to include after the content.
    $setting = new admin_setting_scsscode('theme_material_boost/scss', get_string('rawscss', 'theme_material_boost'),
        get_string('rawscss_desc', 'theme_material_boost'), '', PARAM_RAW);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    /* Analytics Settings */
	$page->add(new admin_setting_heading('theme_material_boost_analytics', get_string('analyticsheadingsub', 'theme_material_boost'),
            format_text(get_string('analyticsdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));
    
    
    // Google Analytics ID
    $name = 'theme_material_boost/analyticsid';
    $title = get_string('analyticsid', 'theme_material_boost');
    $description = get_string('analyticsiddesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* iOS Homescreen Icons */
            
    //Description for iOS Icons
    $name = 'theme_material_boost/iosiconinfo';
    $heading = get_string('iosicon', 'theme_material_boost');
    $information = get_string('iosicondesc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // iPhone Icon.
    $name = 'theme_material_boost/iphoneicon';
    $title = get_string('iphoneicon', 'theme_material_boost');
    $description = get_string('iphoneicondesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // iPhone Retina Icon.
    $name = 'theme_material_boost/iphoneretinaicon';
    $title = get_string('iphoneretinaicon', 'theme_material_boost');
    $description = get_string('iphoneretinaicondesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'iphoneretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // iPad Icon.
    $name = 'theme_material_boost/ipadicon';
    $title = get_string('ipadicon', 'theme_material_boost');
    $description = get_string('ipadicondesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // iPad Retina Icon.
    $name = 'theme_material_boost/ipadretinaicon';
    $title = get_string('ipadretinaicon', 'theme_material_boost');
    $description = get_string('ipadretinaicondesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'ipadretinaicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    
    
    $settings->add($page);
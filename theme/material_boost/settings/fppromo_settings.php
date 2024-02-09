<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Frontpage Promo Carousel Settings */	
	$page = new admin_settingpage('theme_material_boost_promoblocks', get_string('promoblocksheading', 'theme_material_boost'));
	$page->add(new admin_setting_heading('theme_material_boost_promoblocks', get_string('promoblocksheadingsub', 'theme_material_boost'),
            format_text(get_string('promoblocksdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));
            
	//Enable Promo Blocks
    $name = 'theme_material_boost/usepromoblocks';
    $title = get_string('usepromoblocks', 'theme_material_boost');
    $description = get_string('usepromoblocksdesc', 'theme_material_boost');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
	
	/* Promo Item 1 */	
	$name = 'theme_material_boost/promoitem1info';
    $heading = get_string('promoitem1info', 'theme_material_boost');
    $information = get_string('promoitem1desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
	
	$name = 'theme_material_boost/promoitem1';
    $title = get_string('promoitemtitle', 'theme_material_boost');
    $description = get_string('promoitemtitledesc', 'theme_material_boost');
    $default = 'Heading One';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    

    $name = 'theme_material_boost/promoitem1image';
    $title = get_string('promoitemimage', 'theme_material_boost');
    $description = get_string('promoitemimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'promoitem1image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    
    $name = 'theme_material_boost/promoitem1content';
    $title = get_string('promoitemcontent', 'theme_material_boost');
    $description = get_string('promoitemcontentdesc', 'theme_material_boost');
    $default = '<p>You can add up to 6 promo items to promote your content or courses.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem1buttonurl';
    $title = get_string('promoitembuttonurl', 'theme_material_boost');
    $description = get_string('promoitembuttonurldesc', 'theme_material_boost');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Promo Item 2 */	
	$name = 'theme_material_boost/promoitem2info';
    $heading = get_string('promoitem2info', 'theme_material_boost');
    $information = get_string('promoitem2desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
	
	$name = 'theme_material_boost/promoitem2';
    $title = get_string('promoitemtitle', 'theme_material_boost');
    $description = get_string('promoitemtitledesc', 'theme_material_boost');
    $default = 'Heading Two';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem2image';
    $title = get_string('promoitemimage', 'theme_material_boost');
    $description = get_string('promoitemimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'promoitem2image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem2content';
    $title = get_string('promoitemcontent', 'theme_material_boost');
    $description = get_string('promoitemcontentdesc', 'theme_material_boost');
    $default = '<p>You can add up to 6 promo items to promote your content or courses.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem2buttonurl';
    $title = get_string('promoitembuttonurl', 'theme_material_boost');
    $description = get_string('promoitembuttonurldesc', 'theme_material_boost');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Promo Item 3 */	
	$name = 'theme_material_boost/promoitem3info';
    $heading = get_string('promoitem3info', 'theme_material_boost');
    $information = get_string('promoitem3desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
	
	$name = 'theme_material_boost/promoitem3';
    $title = get_string('promoitemtitle', 'theme_material_boost');
    $description = get_string('promoitemtitledesc', 'theme_material_boost');
    $default = 'Heading Three';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem3image';
    $title = get_string('promoitemimage', 'theme_material_boost');
    $description = get_string('promoitemimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'promoitem3image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    
    $name = 'theme_material_boost/promoitem3content';
    $title = get_string('promoitemcontent', 'theme_material_boost');
    $description = get_string('promoitemcontentdesc', 'theme_material_boost');
    $default = '<p>You can add up to 6 promo items to promote your content or courses.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem3buttonurl';
    $title = get_string('promoitembuttonurl', 'theme_material_boost');
    $description = get_string('promoitembuttonurldesc', 'theme_material_boost');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Promo Item 4 */	
	$name = 'theme_material_boost/promoitem4info';
    $heading = get_string('promoitem4info', 'theme_material_boost');
    $information = get_string('promoitem4desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
	
	$name = 'theme_material_boost/promoitem4';
    $title = get_string('promoitemtitle', 'theme_material_boost');
    $description = get_string('promoitemtitledesc', 'theme_material_boost');
    $default = 'Heading Four';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem4image';
    $title = get_string('promoitemimage', 'theme_material_boost');
    $description = get_string('promoitemimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'promoitem4image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    
    $name = 'theme_material_boost/promoitem4content';
    $title = get_string('promoitemcontent', 'theme_material_boost');
    $description = get_string('promoitemcontentdesc', 'theme_material_boost');
    $default = '<p>You can add up to 6 promo items to promote your content or courses.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem4buttonurl';
    $title = get_string('promoitembuttonurl', 'theme_material_boost');
    $description = get_string('promoitembuttonurldesc', 'theme_material_boost');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Promo Item 5 */	
	$name = 'theme_material_boost/promoitem5info';
    $heading = get_string('promoitem5info', 'theme_material_boost');
    $information = get_string('promoitem5desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
	
	$name = 'theme_material_boost/promoitem5';
    $title = get_string('promoitemtitle', 'theme_material_boost');
    $description = get_string('promoitemtitledesc', 'theme_material_boost');
    $default = 'Heading Five';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem5image';
    $title = get_string('promoitemimage', 'theme_material_boost');
    $description = get_string('promoitemimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'promoitem5image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    
    $name = 'theme_material_boost/promoitem5content';
    $title = get_string('promoitemcontent', 'theme_material_boost');
    $description = get_string('promoitemcontentdesc', 'theme_material_boost');
    $default = '<p>You can add up to 6 promo items to promote your content or courses.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem5buttonurl';
    $title = get_string('promoitembuttonurl', 'theme_material_boost');
    $description = get_string('promoitembuttonurldesc', 'theme_material_boost');
    $default = '#link5';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Promo Item 6 */	
	$name = 'theme_material_boost/promoitem6info';
    $heading = get_string('promoitem6info', 'theme_material_boost');
    $information = get_string('promoitem6desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
	
	$name = 'theme_material_boost/promoitem6';
    $title = get_string('promoitemtitle', 'theme_material_boost');
    $description = get_string('promoitemtitledesc', 'theme_material_boost');
    $default = 'Heading Six';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem6image';
    $title = get_string('promoitemimage', 'theme_material_boost');
    $description = get_string('promoitemimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'promoitem6image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);

    
    $name = 'theme_material_boost/promoitem6content';
    $title = get_string('promoitemcontent', 'theme_material_boost');
    $description = get_string('promoitemcontentdesc', 'theme_material_boost');
    $default = '<p>You can add up to 6 promo items to promote your content or courses.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/promoitem6buttonurl';
    $title = get_string('promoitembuttonurl', 'theme_material_boost');
    $description = get_string('promoitembuttonurldesc', 'theme_material_boost');
    $default = '#link6';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    $settings->add($page);
	

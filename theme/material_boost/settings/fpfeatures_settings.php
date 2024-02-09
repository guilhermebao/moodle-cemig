<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
    /* Frontpage Featured Blocks */	
	$page = new admin_settingpage('theme_material_boost_homeblocks', get_string('homeblocksheading', 'theme_material_boost'));
	$page->add(new admin_setting_heading('theme_material_boost_homeblocks', get_string('homeblocksheadingsub', 'theme_material_boost'),
            format_text(get_string('homeblocksdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));
            
            
	//Enable Featured Blocks.
    $name = 'theme_material_boost/usehomeblocks';
    $title = get_string('usehomeblocks', 'theme_material_boost');
    $description = get_string('usehomeblocksdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
	
	/* Home Block 1 */	
    $name = 'theme_material_boost/homeblock1info';
    $heading = get_string('homeblock1info', 'theme_material_boost');
    $information = get_string('homeblock1desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
	
	$name = 'theme_material_boost/homeblock1title';
    $title = get_string('homeblocktitle', 'theme_material_boost');
    $description = get_string('homeblocktitledesc', 'theme_material_boost');
    $default = 'Heading One';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock1image';
    $title = get_string('homeblockimage', 'theme_material_boost');
    $description = get_string('homeblockimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock1content';
    $title = get_string('homeblockcontent', 'theme_material_boost');
    $description = get_string('homeblockcontentdesc', 'theme_material_boost');
    $default = 'Block 1 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    $name = 'theme_material_boost/homeblock1url';
    $title = get_string('homeblockurl', 'theme_material_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_material_boost');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Home Block 2 */    
    $name = 'theme_material_boost/homeblock2info';
    $heading = get_string('homeblock2info', 'theme_material_boost');
    $information = get_string('homeblock2desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);   
    
	$name = 'theme_material_boost/homeblock2title';
    $title = get_string('homeblocktitle', 'theme_material_boost');
    $description = get_string('homeblocktitledesc', 'theme_material_boost');
    $default = 'Heading Two';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock2image';
    $title = get_string('homeblockimage', 'theme_material_boost');
    $description = get_string('homeblockimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock2content';
    $title = get_string('homeblockcontent', 'theme_material_boost');
    $description = get_string('homeblockcontentdesc', 'theme_material_boost');
    $default = 'Block 2 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock2url';
    $title = get_string('homeblockurl', 'theme_material_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_material_boost');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Home Block 3 */        
    $name = 'theme_material_boost/homeblock3info';
    $heading = get_string('homeblock3info', 'theme_material_boost');
    $information = get_string('homeblock3desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
	$name = 'theme_material_boost/homeblock3title';
    $title = get_string('homeblocktitle', 'theme_material_boost');
    $description = get_string('homeblocktitledesc', 'theme_material_boost');
    $default = 'Heading Three';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock3image';
    $title = get_string('homeblockimage', 'theme_material_boost');
    $description = get_string('homeblockimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock3content';
    $title = get_string('homeblockcontent', 'theme_material_boost');
    $description = get_string('homeblockcontentdesc', 'theme_material_boost');
    $default = 'Block 3 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock3url';
    $title = get_string('homeblockurl', 'theme_material_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_material_boost');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Home Block 4 */    
    $name = 'theme_material_boost/homeblock4info';
    $heading = get_string('homeblock4info', 'theme_material_boost');
    $information = get_string('homeblock4desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
	$name = 'theme_material_boost/homeblock4title';
    $title = get_string('homeblocktitle', 'theme_material_boost');
    $description = get_string('homeblocktitledesc', 'theme_material_boost');
    $default = 'Heading Four';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock4image';
    $title = get_string('homeblockimage', 'theme_material_boost');
    $description = get_string('homeblockimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock4content';
    $title = get_string('homeblockcontent', 'theme_material_boost');
    $description = get_string('homeblockcontentdesc', 'theme_material_boost');
    $default = 'Block 4 content goes here Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock4url';
    $title = get_string('homeblockurl', 'theme_material_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_material_boost');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Home Block 5 */    
    $name = 'theme_material_boost/homeblock5info';
    $heading = get_string('homeblock5info', 'theme_material_boost');
    $information = get_string('homeblock5desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
	$name = 'theme_material_boost/homeblock5title';
    $title = get_string('homeblocktitle', 'theme_material_boost');
    $description = get_string('homeblocktitledesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock5image';
    $title = get_string('homeblockimage', 'theme_material_boost');
    $description = get_string('homeblockimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock5content';
    $title = get_string('homeblockcontent', 'theme_material_boost');
    $description = get_string('homeblockcontentdesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock5url';
    $title = get_string('homeblockurl', 'theme_material_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);    
    
    /* Home Block 6 */   
    $name = 'theme_material_boost/homeblock6info';
    $heading = get_string('homeblock6info', 'theme_material_boost');
    $information = get_string('homeblock6desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
     
	$name = 'theme_material_boost/homeblock6title';
    $title = get_string('homeblocktitle', 'theme_material_boost');
    $description = get_string('homeblocktitledesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock6image';
    $title = get_string('homeblockimage', 'theme_material_boost');
    $description = get_string('homeblockimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homeblock6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock6content';
    $title = get_string('homeblockcontent', 'theme_material_boost');
    $description = get_string('homeblockcontentdesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $name = 'theme_material_boost/homeblock6url';
    $title = get_string('homeblockurl', 'theme_material_boost');
    $description = get_string('homeblockbuttonurldesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);    
     
    
    $settings->add($page);
<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
	/* Frontpage Testimonials */
    
    $page = new admin_settingpage('theme_material_boost_testimonials', get_string('testimonialsheading', 'theme_material_boost'));
	$page->add(new admin_setting_heading('theme_material_boost_testimonials', get_string('testimonialssub', 'theme_material_boost'),
            format_text(get_string('testimonialsdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));
    
    // Enable Testimonials section
    $name = 'theme_material_boost/usetestimonials';
    $title = get_string('usetestimonials', 'theme_material_boost');
    $description = get_string('usetestimonialsdesc', 'theme_material_boost');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    
    /* Testimonial 1 */
    
    // Description for Testimonial 1
    $name = 'theme_material_boost/testimonial1info';
    $heading = get_string('testimonial1', 'theme_material_boost');
    $information = get_string('testimonial1desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_material_boost/testimonial1image';
    $title = get_string('testimonialimage', 'theme_material_boost');
    $description = get_string('testimonialimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_material_boost/testimonial1name';
    $title = get_string('testimonialname', 'theme_material_boost');
    $description = get_string('testimonialnamedesc', 'theme_material_boost');
    $default = 'James Chapman';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_material_boost/testimonial1meta';
    $title = get_string('testimonialmeta', 'theme_material_boost');
    $description = get_string('testimonialmetadesc', 'theme_material_boost');
    $default = 'London, UK';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Testimonial Content 
    $name = 'theme_material_boost/testimonial1content';
    $title = get_string('testimonialcontent', 'theme_material_boost');
    $description = get_string('testimonialcontentdesc', 'theme_material_boost');
    $default = '<p>Testimonial 1 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Testimonial 2 */
    
    // Description for Testimonial 2
    $name = 'theme_material_boost/testimonial2info';
    $heading = get_string('testimonial2', 'theme_material_boost');
    $information = get_string('testimonial2desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_material_boost/testimonial2image';
    $title = get_string('testimonialimage', 'theme_material_boost');
    $description = get_string('testimonialimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_material_boost/testimonial2name';
    $title = get_string('testimonialname', 'theme_material_boost');
    $description = get_string('testimonialnamedesc', 'theme_material_boost');
    $default = 'Olivia Castro';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_material_boost/testimonial2meta';
    $title = get_string('testimonialmeta', 'theme_material_boost');
    $description = get_string('testimonialmetadesc', 'theme_material_boost');
    $default = 'San Francisco, US';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    // Testimonial Content 
    $name = 'theme_material_boost/testimonial2content';
    $title = get_string('testimonialcontent', 'theme_material_boost');
    $description = get_string('testimonialcontentdesc', 'theme_material_boost');
    $default = '<p>Testimonial 2 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Testimonial 3 */
    
    // Description for Testimonial 3
    $name = 'theme_material_boost/testimonial3info';
    $heading = get_string('testimonial3', 'theme_material_boost');
    $information = get_string('testimonial3desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_material_boost/testimonial3image';
    $title = get_string('testimonialimage', 'theme_material_boost');
    $description = get_string('testimonialimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_material_boost/testimonial3name';
    $title = get_string('testimonialname', 'theme_material_boost');
    $description = get_string('testimonialnamedesc', 'theme_material_boost');
    $default = 'Jason Wang';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_material_boost/testimonial3meta';
    $title = get_string('testimonialmeta', 'theme_material_boost');
    $description = get_string('testimonialmetadesc', 'theme_material_boost');
    $default = 'Berlin, Germany';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Testimonial Content 
    $name = 'theme_material_boost/testimonial3content';
    $title = get_string('testimonialcontent', 'theme_material_boost');
    $description = get_string('testimonialcontentdesc', 'theme_material_boost');
    $default = '<p>Testimonial 3 goes here. You can add up to 6 testimonials. Lorem ipsum dolor sit amet consectetur adipiscing elit. Integer suscipit, elit sed placerat aliquam, velit nulla semper lectus.</p>';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Testimonial 4 */
    
    // Description for Testimonial 4
    $name = 'theme_material_boost/testimonial4info';
    $heading = get_string('testimonial4', 'theme_material_boost');
    $information = get_string('testimonial4desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_material_boost/testimonial4image';
    $title = get_string('testimonialimage', 'theme_material_boost');
    $description = get_string('testimonialimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_material_boost/testimonial4name';
    $title = get_string('testimonialname', 'theme_material_boost');
    $description = get_string('testimonialnamedesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_material_boost/testimonial4meta';
    $title = get_string('testimonialmeta', 'theme_material_boost');
    $description = get_string('testimonialmetadesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    // Testimonial Content 
    $name = 'theme_material_boost/testimonial4content';
    $title = get_string('testimonialcontent', 'theme_material_boost');
    $description = get_string('testimonialcontentdesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Testimonial 5 */
    
    // Description for Testimonial 5
    $name = 'theme_material_boost/testimonial5info';
    $heading = get_string('testimonial5', 'theme_material_boost');
    $information = get_string('testimonial5desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_material_boost/testimonial5image';
    $title = get_string('testimonialimage', 'theme_material_boost');
    $description = get_string('testimonialimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_material_boost/testimonial5name';
    $title = get_string('testimonialname', 'theme_material_boost');
    $description = get_string('testimonialnamedesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Meta
    $name = 'theme_material_boost/testimonial5meta';
    $title = get_string('testimonialmeta', 'theme_material_boost');
    $description = get_string('testimonialmetadesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // Testimonial Content 
    $name = 'theme_material_boost/testimonial5content';
    $title = get_string('testimonialcontent', 'theme_material_boost');
    $description = get_string('testimonialcontentdesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Testimonial 6 */
    
    // Description for Testimonial 6
    $name = 'theme_material_boost/testimonial6info';
    $heading = get_string('testimonial6', 'theme_material_boost');
    $information = get_string('testimonial6desc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);
    
    // Testimonial Image 
    $name = 'theme_material_boost/testimonial6image';
    $title = get_string('testimonialimage', 'theme_material_boost');
    $description = get_string('testimonialimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'testimonial6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Name
    $name = 'theme_material_boost/testimonial6name';
    $title = get_string('testimonialname', 'theme_material_boost');
    $description = get_string('testimonialnamedesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // Testimonial Profile Title
    $name = 'theme_material_boost/testimonial6meta';
    $title = get_string('testimonialmeta', 'theme_material_boost');
    $description = get_string('testimonialmetadesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    // Testimonial Content 
    $name = 'theme_material_boost/testimonial6content';
    $title = get_string('testimonialcontent', 'theme_material_boost');
    $description = get_string('testimonialcontentdesc', 'theme_material_boost');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    $settings->add($page);
    
	

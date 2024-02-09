<?php 
	
	
	defined('MOODLE_INTERNAL') || die();
	
    /* Frontpage Hero Slideshow Settings */
    $page = new admin_settingpage('theme_material_boost_slideshow', get_string('slideshowheading', 'theme_material_boost'));
    $page->add(new admin_setting_heading('theme_material_boost_slideshow', get_string('slideshowheadingsub', 'theme_material_boost'),
            format_text(get_string('slideshowdesc' , 'theme_material_boost'), FORMAT_MARKDOWN)));
    
    // Enable Hero Slideshow    
    $name = 'theme_material_boost/useheroslideshow';
    $title = get_string('useheroslideshow', 'theme_material_boost');
    $description = get_string('useheroslideshowdesc', 'theme_material_boost');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    

    /* Slide 1 */

    // Description for Slide 1
    $name = 'theme_material_boost/slide1info';
    $heading = get_string('slide1', 'theme_material_boost');
    $information = get_string('slideinfodesc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Image
    $name = 'theme_material_boost/slide1image';
    $title = get_string('slideimage', 'theme_material_boost');
    $description = get_string('slideimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide1image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);
    
    // Heading
    $name = 'theme_material_boost/slide1heading';
    $title = get_string('slideheading', 'theme_material_boost');
    $description = get_string('slideheadingdesc', 'theme_material_boost');
    $default = 'Slide One Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Intro
    $name = 'theme_material_boost/slide1intro';
    $title = get_string('slideintro', 'theme_material_boost');
    $description = get_string('slideintrodesc', 'theme_material_boost');
    $default = 'Slide 1 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA
    $name = 'theme_material_boost/slide1btn';
    $title = get_string('slidebtn', 'theme_material_boost');
    $description = get_string('slidebtndesc', 'theme_material_boost');
    $default = 'Button 1 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA URL.
    $name = 'theme_material_boost/slide1url';
    $title = get_string('slideurl', 'theme_material_boost');
    $description = get_string('slideurldesc', 'theme_material_boost');
    $default = '#link1';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    // URL open in new window    
    $name = 'theme_material_boost/slide1urlopennew';
    $title = get_string('opennew', 'theme_material_boost');
    $description = get_string('opennewdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);


    /* Slide 2 */
     
    // Description for Slide 2
    $name = 'theme_material_boost/slide2info';
    $heading = get_string('slide2', 'theme_material_boost');
    $information = get_string('slideinfodesc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Image
    $name = 'theme_material_boost/slide2image';
    $title = get_string('slideimage', 'theme_material_boost');
    $description = get_string('slideimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide2image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);
    
    
    // Heading
    $name = 'theme_material_boost/slide2heading';
    $title = get_string('slideheading', 'theme_material_boost');
    $description = get_string('slideheadingdesc', 'theme_material_boost');
    $default = 'Slide Two Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Intro
    $name = 'theme_material_boost/slide2intro';
    $title = get_string('slideintro', 'theme_material_boost');
    $description = get_string('slideintrodesc', 'theme_material_boost');
    $default = 'Slide 2 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA
    $name = 'theme_material_boost/slide2btn';
    $title = get_string('slidebtn', 'theme_material_boost');
    $description = get_string('slidebtndesc', 'theme_material_boost');
    $default = 'Button 2 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA URL.
    $name = 'theme_material_boost/slide2url';
    $title = get_string('slideurl', 'theme_material_boost');
    $description = get_string('slideurldesc', 'theme_material_boost');
    $default = '#link2';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // URL open in new window    
    $name = 'theme_material_boost/slide2urlopennew';
    $title = get_string('opennew', 'theme_material_boost');
    $description = get_string('opennewdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    
    /* Slide 3 */
     
    // Description for Slide 3
    $name = 'theme_material_boost/slide3info';
    $heading = get_string('slide3', 'theme_material_boost');
    $information = get_string('slideinfodesc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Image
    $name = 'theme_material_boost/slide3image';
    $title = get_string('slideimage', 'theme_material_boost');
    $description = get_string('slideimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide3image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);
    
    // Heading
    $name = 'theme_material_boost/slide3heading';
    $title = get_string('slideheading', 'theme_material_boost');
    $description = get_string('slideheadingdesc', 'theme_material_boost');
    $default = 'Slide Three Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Intro
    $name = 'theme_material_boost/slide3intro';
    $title = get_string('slideintro', 'theme_material_boost');
    $description = get_string('slideintrodesc', 'theme_material_boost');
    $default = 'Slide 3 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA
    $name = 'theme_material_boost/slide3btn';
    $title = get_string('slidebtn', 'theme_material_boost');
    $description = get_string('slidebtndesc', 'theme_material_boost');
    $default = 'Button 3 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA URL.
    $name = 'theme_material_boost/slide3url';
    $title = get_string('slideurl', 'theme_material_boost');
    $description = get_string('slideurldesc', 'theme_material_boost');
    $default = '#link3';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // URL open in new window    
    $name = 'theme_material_boost/slide3urlopennew';
    $title = get_string('opennew', 'theme_material_boost');
    $description = get_string('opennewdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Slide 4 */
     
    // Description for Slide 4
    $name = 'theme_material_boost/slide4info';
    $heading = get_string('slide4', 'theme_material_boost');
    $information = get_string('slideinfodesc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Image
    $name = 'theme_material_boost/slide4image';
    $title = get_string('slideimage', 'theme_material_boost');
    $description = get_string('slideimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide4image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);
    
    // Heading
    $name = 'theme_material_boost/slide4heading';
    $title = get_string('slideheading', 'theme_material_boost');
    $description = get_string('slideheadingdesc', 'theme_material_boost');
    $default = 'Slide Four Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Intro
    $name = 'theme_material_boost/slide4intro';
    $title = get_string('slideintro', 'theme_material_boost');
    $description = get_string('slideintrodesc', 'theme_material_boost');
    $default = 'Slide 4 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA
    $name = 'theme_material_boost/slide4btn';
    $title = get_string('slidebtn', 'theme_material_boost');
    $description = get_string('slidebtndesc', 'theme_material_boost');
    $default = 'Button 4 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA URL.
    $name = 'theme_material_boost/slide4url';
    $title = get_string('slideurl', 'theme_material_boost');
    $description = get_string('slideurldesc', 'theme_material_boost');
    $default = '#link4';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // URL open in new window    
    $name = 'theme_material_boost/slide4urlopennew';
    $title = get_string('opennew', 'theme_material_boost');
    $description = get_string('opennewdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    
    /* Slide 5 */
     
    // Description for Slide 5
    $name = 'theme_material_boost/slide5info';
    $heading = get_string('slide5', 'theme_material_boost');
    $information = get_string('slideinfodesc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Image
    $name = 'theme_material_boost/slide5image';
    $title = get_string('slideimage', 'theme_material_boost');
    $description = get_string('slideimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide5image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);
    
    // Heading
    $name = 'theme_material_boost/slide5heading';
    $title = get_string('slideheading', 'theme_material_boost');
    $description = get_string('slideheadingdesc', 'theme_material_boost');
    $default = 'Slide Five Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Intro
    $name = 'theme_material_boost/slide5intro';
    $title = get_string('slideintro', 'theme_material_boost');
    $description = get_string('slideintrodesc', 'theme_material_boost');
    $default = 'Slide 5 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA
    $name = 'theme_material_boost/slide5btn';
    $title = get_string('slidebtn', 'theme_material_boost');
    $description = get_string('slidebtndesc', 'theme_material_boost');
    $default = 'Button 5 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA URL.
    $name = 'theme_material_boost/slide5url';
    $title = get_string('slideurl', 'theme_material_boost');
    $description = get_string('slideurldesc', 'theme_material_boost');
    $default = '#link5';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // URL open in new window    
    $name = 'theme_material_boost/slide5urlopennew';
    $title = get_string('opennew', 'theme_material_boost');
    $description = get_string('opennewdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    /* Slide 6 */
     
    // Description for Slide 6
    $name = 'theme_material_boost/slide6info';
    $heading = get_string('slide6', 'theme_material_boost');
    $information = get_string('slideinfodesc', 'theme_material_boost');
    $setting = new admin_setting_heading($name, $heading, $information);
    $page->add($setting);

    // Image
    $name = 'theme_material_boost/slide6image';
    $title = get_string('slideimage', 'theme_material_boost');
    $description = get_string('slideimagedesc', 'theme_material_boost');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'slide6image');
    $setting->set_updatedcallback('theme_reset_all_caches');    
    $page->add($setting);
    
    // Heading
    $name = 'theme_material_boost/slide6heading';
    $title = get_string('slideheading', 'theme_material_boost');
    $description = get_string('slideheadingdesc', 'theme_material_boost');
    $default = 'Slide Six Heading';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // Intro
    $name = 'theme_material_boost/slide6intro';
    $title = get_string('slideintro', 'theme_material_boost');
    $description = get_string('slideintrodesc', 'theme_material_boost');
    $default = 'Slide 6 description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam malesuada, erat bibendum gravida varius.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA
    $name = 'theme_material_boost/slide6btn';
    $title = get_string('slidebtn', 'theme_material_boost');
    $description = get_string('slidebtndesc', 'theme_material_boost');
    $default = 'Button 6 Text';
    $setting = new admin_setting_configtext($name, $title, $description, $default);    
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    // CTA URL.
    $name = 'theme_material_boost/slide6url';
    $title = get_string('slideurl', 'theme_material_boost');
    $description = get_string('slideurldesc', 'theme_material_boost');
    $default = '#link6';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);
    
    // URL open in new window    
    $name = 'theme_material_boost/slide6urlopennew';
    $title = get_string('opennew', 'theme_material_boost');
    $description = get_string('opennewdesc', 'theme_material_boost');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $page->add($setting);

    $settings->add($page);
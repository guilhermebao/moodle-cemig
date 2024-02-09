<?php

namespace theme_material_boost\output;

use coding_exception;
use html_writer;
use tabobject;
use tabtree;
use custom_menu_item;
use custom_menu;
use block_contents;
use navigation_node;
use action_link;
use stdClass;
use moodle_url;
use preferences_groups;
use action_menu;
use help_icon;
use single_button;
use single_select;
use paging_bar;
use url_select;
use context_course;
use pix_icon;
use theme_config;

defined('MOODLE_INTERNAL') || die;

require_once ($CFG->dirroot . "/course/renderer.php");
//require_once ($CFG->libdir . '/coursecatlib.php'); //From Moodle 3.6 - Class coursecat is now alias to autoloaded class core_course_category, course_in_list is an alias to core_course_list_element. Class coursecat_sortable_records is deprecated without replacement. Do not include coursecatlib.php


class core_renderer extends \theme_boost\output\core_renderer {
    
    
    
    /*
    public function image_url($imagename, $component = 'moodle') {
        // Strip -24, -64, -256  etc from the end of filetype icons so we
        // only need to provide one SVG, see MDL-47082.
        $imagename = \preg_replace('/-\d\d\d?$/', '', $imagename);
        return $this->page->theme->image_url($imagename, $component);
    }
    */
    
    
    public function site_logo() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->setting_file_url('logo', 'logo');
        
        return $setting != '' ? $setting : '';
        
    }
    
    public function header_phone() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->settings->headerphone;
        
        return $setting != '' ? $setting : '';
        
    }
    
    public function header_email() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->settings->headeremail;
        
        return $setting != '' ? $setting : '';
        
    }

    
    public function google_analyticsid() {
        global $PAGE;
        
        $setting = $PAGE->theme->settings->analyticsid;
        
        return $setting != '' ? $setting : '';
        
    }
    
    public function ios_homescreen_icons() {
        global $PAGE;

        
        //iPhone icon
        $iphoneicon = (empty($PAGE->theme->setting_file_url('iphoneicon', 'iphoneicon'))) ? false : $PAGE->theme->setting_file_url('iphoneicon', 'iphoneicon');

        
        //iPhone Retina icon
        $iphoneretinaicon = (empty($PAGE->theme->setting_file_url('iphoneretinaicon', 'iphoneretinaicon'))) ? false : $PAGE->theme->setting_file_url('iphoneretinaicon', 'iphoneretinaicon');
        
         //iPad icon
        $ipadicon = (empty($PAGE->theme->setting_file_url('ipadicon', 'ipadicon'))) ? false : $PAGE->theme->setting_file_url('ipadicon', 'ipadicon');
        
        //ipad Retina icon
        $ipadretinaicon = (empty($PAGE->theme->setting_file_url('ipadretinaicon', 'ipadretinaicon'))) ? false : $PAGE->theme->setting_file_url('ipadretinaicon', 'ipadretinaicon');


        $ios_homescreen_icons = [
        
            'iphoneicon' => $iphoneicon, 
            'iphoneretinaicon' => $iphoneretinaicon, 
            'ipadicon' => $ipadicon, 
            'ipadretinaicon' => $ipadretinaicon, 

        
        ];

        return $this->render_from_template('theme_material_boost/ios_homescreen_icons', $ios_homescreen_icons);
    }
    
    public function moodle_validator() {
        global $CFG;
        
        $valid = $CFG->branch == '401';
        

        $moodle_validator = [
        
            'invalid' => !$valid, 
        ];

        return $this->render_from_template('theme_material_boost/moodle_validator', $moodle_validator);
    }

    
    public function header_alert() {
        global $PAGE;
        
        $usealert = $PAGE->theme->settings->usealert== 1;
        $alertcontent = (empty($PAGE->theme->settings->alertcontent)) ? false : format_text($PAGE->theme->settings->alertcontent);
        $alertbgcolor = (empty($PAGE->theme->settings->alertbgcolor)) ? false : $PAGE->theme->settings->alertbgcolor;


        $header_alert = [
        
            'hasalert' => $usealert, 
            'alertcontent' => $alertcontent, 
            'alertbgcolor' => $alertbgcolor,


        ];

        return $this->render_from_template('theme_material_boost/header_alert', $header_alert);
    }

    
    
    public function footer_socialmedia() {
        global $PAGE;
        
        $usefootersocial = $PAGE->theme->settings->usefootersocial == 1;
      
        $haswebsite = (empty($PAGE->theme->settings->website)) ? false : $PAGE->theme->settings->website;
        $hastwitter = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
        $hasfacebook = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
        $hasgoogleplus = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
        $haslinkedin = (empty($PAGE->theme->settings->linkedin)) ? false : $PAGE->theme->settings->linkedin;
        $hasyoutube = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
        $hasvimeo = (empty($PAGE->theme->settings->vimeo)) ? false : $PAGE->theme->settings->vimeo;
        $hasinstagram = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
        $haspinterest = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
        $hasflickr = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
        $hastumblr = (empty($PAGE->theme->settings->tumblr)) ? false : $PAGE->theme->settings->tumblr;
        $hasslideshare = (empty($PAGE->theme->settings->slideshare)) ? false : $PAGE->theme->settings->slideshare;
        $hasskype = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
        $haswhatsapp = (empty($PAGE->theme->settings->whatsapp)) ? false : $PAGE->theme->settings->whatsapp;
        $hassnapchat = (empty($PAGE->theme->settings->snapchat)) ? false : $PAGE->theme->settings->snapchat;
        $hasweixin = (empty($PAGE->theme->settings->weixin)) ? false : $PAGE->theme->settings->weixin;
        $hasweibo = (empty($PAGE->theme->settings->weibo)) ? false : $PAGE->theme->settings->weibo;
        $hasrss = (empty($PAGE->theme->settings->rss)) ? false : $PAGE->theme->settings->rss;

        $hassocial1 = (empty($PAGE->theme->settings->social1)) ? false : $PAGE->theme->settings->social1;
        $social1icon = (empty($PAGE->theme->settings->socialicon1)) ? '' : $PAGE->theme->settings->socialicon1;
        $hassocial2 = (empty($PAGE->theme->settings->social2)) ? false : $PAGE->theme->settings->social2;
        $social2icon = (empty($PAGE->theme->settings->socialicon2)) ? '' : $PAGE->theme->settings->socialicon2;
        $hassocial3 = (empty($PAGE->theme->settings->social3)) ? false : $PAGE->theme->settings->social3;
        $social3icon = (empty($PAGE->theme->settings->socialicon3)) ? '' : $PAGE->theme->settings->socialicon3;

        $socialcontext = [

        'usefootersocial' => $usefootersocial,


        'socialmedia' => array(
	        
	        array(
                'haslink' => $haswebsite,
                'linkicon' => 'globe'
            ) ,
           
            array(
                'haslink' => $hastwitter,
                'linkicon' => 'twitter'
            ) ,
            array(
                'haslink' => $hasfacebook,
                'linkicon' => 'facebook'
            ) ,
            array(
                'haslink' => $hasgoogleplus,
                'linkicon' => 'google-plus'
            ) ,
            array(
                'haslink' => $haslinkedin,
                'linkicon' => 'linkedin'
            ) ,
            array(
                'haslink' => $hasyoutube,
                'linkicon' => 'youtube'
            ) ,
            array(
                'haslink' => $hasvimeo,
                'linkicon' => 'vimeo'
            ) ,
            array(
                'haslink' => $hasinstagram,
                'linkicon' => 'instagram'
            ) ,
            array(
                'haslink' => $haspinterest,
                'linkicon' => 'pinterest'
            ) ,
            array(
                'haslink' => $hasflickr,
                'linkicon' => 'flickr'
            ) ,
            array(
                'haslink' => $hastumblr,
                'linkicon' => 'tumblr'
            ) ,
            array(
                'haslink' => $hasslideshare,
                'linkicon' => 'slideshare'
            ) ,
            array(
                'haslink' => $hasskype,
                'linkicon' => 'skype'
            ) ,
            array(
                'haslink' => $haswhatsapp,
                'linkicon' => 'whatsapp'
            ) ,
            array(
                'haslink' => $hassnapchat,
                'linkicon' => 'snapchat'
            ) ,
            array(
                'haslink' => $hasweixin,
                'linkicon' => 'weixin'
            ) ,
            array(
                'haslink' => $hasweibo,
                'linkicon' => 'weibo'
            ) ,
            array(
                'haslink' => $hasrss,
                'linkicon' => 'rss'
            ) ,
            array(
                'haslink' => $hassocial1,
                'linkicon' => $social1icon
            ) ,
            array(
                'haslink' => $hassocial2,
                'linkicon' => $social2icon
            ) ,
            array(
                'haslink' => $hassocial3,
                'linkicon' => $social3icon
            ) ,
        ) ];

        return $this->render_from_template('theme_material_boost/footer_socialmedia', $socialcontext);
    }
    
   
   public function fp_slideshow() {
        global $PAGE, $OUTPUT;

        $useheroslideshow = $PAGE->theme->settings->useheroslideshow == 1;

        $hasslide1 = (empty($PAGE->theme->setting_file_url('slide1image', 'slide1image'))) ? false : $PAGE->theme->setting_file_url('slide1image', 'slide1image');
        $hasslide2 = (empty($PAGE->theme->setting_file_url('slide2image', 'slide2image'))) ? false : $PAGE->theme->setting_file_url('slide2image', 'slide2image');
        $hasslide3 = (empty($PAGE->theme->setting_file_url('slide3image', 'slide3image'))) ? false : $PAGE->theme->setting_file_url('slide3image', 'slide3image');
        $hasslide4 = (empty($PAGE->theme->setting_file_url('slide4image', 'slide4image'))) ? false : $PAGE->theme->setting_file_url('slide4image', 'slide4image');
        $hasslide5 = (empty($PAGE->theme->setting_file_url('slide5image', 'slide5image'))) ? false : $PAGE->theme->setting_file_url('slide5image', 'slide5image');
        $hasslide6 = (empty($PAGE->theme->setting_file_url('slide6image', 'slide6image'))) ? false : $PAGE->theme->setting_file_url('slide6image', 'slide6image');
        
        
        $slide1heading = (empty($PAGE->theme->settings->slide1heading)) ? false : format_text($PAGE->theme->settings->slide1heading);
        $slide2heading = (empty($PAGE->theme->settings->slide2heading)) ? false : format_text($PAGE->theme->settings->slide2heading);
        $slide3heading = (empty($PAGE->theme->settings->slide3heading)) ? false : format_text($PAGE->theme->settings->slide3heading);
        $slide4heading = (empty($PAGE->theme->settings->slide4heading)) ? false : format_text($PAGE->theme->settings->slide4heading);
        $slide5heading = (empty($PAGE->theme->settings->slide5heading)) ? false : format_text($PAGE->theme->settings->slide5heading);
        $slide6heading = (empty($PAGE->theme->settings->slide6heading)) ? false : format_text($PAGE->theme->settings->slide6heading);
        
        
        $slide1intro = (empty($PAGE->theme->settings->slide1intro)) ? false : format_text($PAGE->theme->settings->slide1intro);
        $slide2intro = (empty($PAGE->theme->settings->slide2intro)) ? false : format_text($PAGE->theme->settings->slide2intro);
        $slide3intro = (empty($PAGE->theme->settings->slide3intro)) ? false : format_text($PAGE->theme->settings->slide3intro);
        $slide4intro = (empty($PAGE->theme->settings->slide4intro)) ? false : format_text($PAGE->theme->settings->slide4intro);
        $slide5intro = (empty($PAGE->theme->settings->slide5intro)) ? false : format_text($PAGE->theme->settings->slide5intro);
        $slide6intro = (empty($PAGE->theme->settings->slide6intro)) ? false : format_text($PAGE->theme->settings->slide6intro);
        
        $slide1btn = (empty($PAGE->theme->settings->slide1btn)) ? false : format_text($PAGE->theme->settings->slide1btn);
        $slide2btn = (empty($PAGE->theme->settings->slide2btn)) ? false : format_text($PAGE->theme->settings->slide2btn);
        $slide3btn = (empty($PAGE->theme->settings->slide3btn)) ? false : format_text($PAGE->theme->settings->slide3btn);
        $slide4btn = (empty($PAGE->theme->settings->slide4btn)) ? false : format_text($PAGE->theme->settings->slide4btn);
        $slide5btn = (empty($PAGE->theme->settings->slide5btn)) ? false : format_text($PAGE->theme->settings->slide5btn);
        $slide6btn = (empty($PAGE->theme->settings->slide6btn)) ? false : format_text($PAGE->theme->settings->slide6btn);
        
        $slide1url = (empty($PAGE->theme->settings->slide1url)) ? false : $PAGE->theme->settings->slide1url;
        $slide2url = (empty($PAGE->theme->settings->slide2url)) ? false : $PAGE->theme->settings->slide2url;
        $slide3url = (empty($PAGE->theme->settings->slide3url)) ? false : $PAGE->theme->settings->slide3url;
        $slide4url = (empty($PAGE->theme->settings->slide4url)) ? false : $PAGE->theme->settings->slide4url;
        $slide5url = (empty($PAGE->theme->settings->slide5url)) ? false : $PAGE->theme->settings->slide5url;
        $slide6url = (empty($PAGE->theme->settings->slide6url)) ? false : $PAGE->theme->settings->slide6url;
        
        
        $slide1urlopennew = $PAGE->theme->settings->slide1urlopennew == 1;
        $slide2urlopennew = $PAGE->theme->settings->slide2urlopennew == 1;
        $slide3urlopennew = $PAGE->theme->settings->slide3urlopennew == 1;
        $slide4urlopennew = $PAGE->theme->settings->slide4urlopennew == 1;
        $slide5urlopennew = $PAGE->theme->settings->slide5urlopennew == 1;
	    $slide6urlopennew = $PAGE->theme->settings->slide6urlopennew == 1;
        

        $fp_slideshow = [

        'useheroslideshow' => $useheroslideshow,
         
         
        'slideshow' => array(
	        
            array(
	            'slidecount' => "1",
                'hasslide' => $hasslide1,
                'slideimage' => $hasslide1,
                'slideheading' => $slide1heading,
                'slideintro' => $slide1intro,       
                'slidebtn' => $slide1btn,    
                'slideurl' => $slide1url,            
                'urlopennew' => $slide1urlopennew,
            ) ,
            array(
	            'slidecount' => "2",
                'hasslide' => $hasslide2,
                'slideimage' => $hasslide2,
                'slideheading' => $slide2heading,
                'slideintro' => $slide2intro,       
                'slidebtn' => $slide2btn,    
                'slideurl' => $slide2url,            
                'urlopennew' => $slide2urlopennew,
            ) ,
            
           array(
	            'slidecount' => "3",
                'hasslide' => $hasslide3,
                'slideimage' => $hasslide3,
                'slideheading' => $slide3heading,
                'slideintro' => $slide3intro,       
                'slidebtn' => $slide3btn,    
                'slideurl' => $slide3url,            
                'urlopennew' => $slide3urlopennew,
            ) ,
            array(
	            'slidecount' => "4",
                'hasslide' => $hasslide4,
                'slideimage' => $hasslide4,
                'slideheading' => $slide4heading,
                'slideintro' => $slide4intro,       
                'slidebtn' => $slide4btn,    
                'slideurl' => $slide4url,            
                'urlopennew' => $slide4urlopennew,
            ) ,
            array(
	            'slidecount' => "5",
                'hasslide' => $hasslide5,
                'slideimage' => $hasslide5,
                'slideheading' => $slide5heading,
                'slideintro' => $slide5intro,       
                'slidebtn' => $slide5btn,    
                'slideurl' => $slide5url,            
                'urlopennew' => $slide5urlopennew,
            ) ,
            array(
	            'slidecount' => "6",
                'hasslide' => $hasslide6,
                'slideimage' => $hasslide6,
                'slideheading' => $slide6heading,
                'slideintro' => $slide6intro,       
                'slidebtn' => $slide6btn,    
                'slideurl' => $slide6url,            
                'urlopennew' => $slide6urlopennew,
            ) ,
                           
        ),


        ];

        return $this->render_from_template('theme_material_boost/fp_slideshow', $fp_slideshow);
    } 
    
   
    public function fp_features() {
        global $PAGE;
        
        $usehomeblocks = $PAGE->theme->settings->usehomeblocks == 1;
        

        $homeblock1title = (empty($PAGE->theme->settings->homeblock1title)) ? false : format_text($PAGE->theme->settings->homeblock1title);
        $homeblock1content = (empty($PAGE->theme->settings->homeblock1content)) ? false : format_text($PAGE->theme->settings->homeblock1content);
        $homeblock1url = (empty($PAGE->theme->settings->homeblock1url)) ? false : $PAGE->theme->settings->homeblock1url;
        $homeblock1image = (empty($PAGE->theme->setting_file_url('homeblock1image', 'homeblock1image'))) ? false : $PAGE->theme->setting_file_url('homeblock1image', 'homeblock1image');

        

        $homeblock2title = (empty($PAGE->theme->settings->homeblock2title)) ? false : format_text($PAGE->theme->settings->homeblock2title);
        $homeblock2content = (empty($PAGE->theme->settings->homeblock2content)) ? false : format_text($PAGE->theme->settings->homeblock2content);
        $homeblock2url = (empty($PAGE->theme->settings->homeblock2url)) ? false : $PAGE->theme->settings->homeblock2url;
        $homeblock2image = (empty($PAGE->theme->setting_file_url('homeblock2image', 'homeblock2image'))) ? false : $PAGE->theme->setting_file_url('homeblock2image', 'homeblock2image');
        
        $homeblock3title = (empty($PAGE->theme->settings->homeblock3title)) ? false : format_text($PAGE->theme->settings->homeblock3title);
        $homeblock3content = (empty($PAGE->theme->settings->homeblock3content)) ? false : format_text($PAGE->theme->settings->homeblock3content);
        $homeblock3url = (empty($PAGE->theme->settings->homeblock3url)) ? false : $PAGE->theme->settings->homeblock3url;
        $homeblock3image = (empty($PAGE->theme->setting_file_url('homeblock3image', 'homeblock3image'))) ? false : $PAGE->theme->setting_file_url('homeblock3image', 'homeblock3image');
        
        $homeblock4title = (empty($PAGE->theme->settings->homeblock4title)) ? false : format_text($PAGE->theme->settings->homeblock4title);
        $homeblock4content = (empty($PAGE->theme->settings->homeblock4content)) ? false : format_text($PAGE->theme->settings->homeblock4content);
        $homeblock4url = (empty($PAGE->theme->settings->homeblock4url)) ? false : $PAGE->theme->settings->homeblock4url;
        $homeblock4image = (empty($PAGE->theme->setting_file_url('homeblock4image', 'homeblock4image'))) ? false : $PAGE->theme->setting_file_url('homeblock4image', 'homeblock4image');
        
        $homeblock5title = (empty($PAGE->theme->settings->homeblock5title)) ? false : format_text($PAGE->theme->settings->homeblock5title);
        $homeblock5content = (empty($PAGE->theme->settings->homeblock5content)) ? false : format_text($PAGE->theme->settings->homeblock5content);
        $homeblock5url = (empty($PAGE->theme->settings->homeblock5url)) ? false : $PAGE->theme->settings->homeblock5url;
        $homeblock5image = (empty($PAGE->theme->setting_file_url('homeblock5image', 'homeblock5image'))) ? false : $PAGE->theme->setting_file_url('homeblock5image', 'homeblock5image');
        
        $homeblock6title = (empty($PAGE->theme->settings->homeblock6title)) ? false : format_text($PAGE->theme->settings->homeblock6title);
        $homeblock6content = (empty($PAGE->theme->settings->homeblock6content)) ? false : format_text($PAGE->theme->settings->homeblock6content);
        $homeblock6url = (empty($PAGE->theme->settings->homeblock6url)) ? false : $PAGE->theme->settings->homeblock6url;
        $homeblock6image = (empty($PAGE->theme->setting_file_url('homeblock6image', 'homeblock6image'))) ? false : $PAGE->theme->setting_file_url('homeblock6image', 'homeblock6image');
        
        


        $fp_features = [

        'usefeaturedblocks' => $usehomeblocks,

        'featuredblocks' => array(
	        
            array(
	            'blockcount'=> '1',
                'hasblock' => $homeblock1title,
                'blockimage' => $homeblock1image,
                'blocktitle' => $homeblock1title,
                'blockcontent' => $homeblock1content,
                'blockurl' => $homeblock1url,
            ) ,
            
           
            array(
	            'blockcount'=> '2',
                'hasblock' => $homeblock2title,
                'blockimage' => $homeblock2image,
                'blocktitle' => $homeblock2title,
                'blockcontent' => $homeblock2content,
                'blockurl' => $homeblock2url,
            ) ,
            
            
            array(
	            'blockcount'=> '3',
                'hasblock' => $homeblock3title,
                'blockimage' => $homeblock3image,
                'blocktitle' => $homeblock3title,
                'blockcontent' => $homeblock3content,
                'blockurl' => $homeblock3url,
            ) ,
            
            array(
	            'blockcount'=> '4',
                'hasblock' => $homeblock4title,
                'blockimage' => $homeblock4image,
                'blocktitle' => $homeblock4title,
                'blockcontent' => $homeblock4content,
                'blockurl' => $homeblock4url,
            ) ,
            
            array(
	            'blockcount'=> '5',
                'hasblock' => $homeblock5title,
                'blockimage' => $homeblock5image,
                'blocktitle' => $homeblock5title,
                'blockcontent' => $homeblock5content,
                'blockurl' => $homeblock5url,
            ) ,
            
            array(
	            'blockcount'=> '6',
                'hasblock' => $homeblock6title,
                'blockimage' => $homeblock6image,
                'blocktitle' => $homeblock6title,
                'blockcontent' => $homeblock6content,
                'blockurl' => $homeblock6url,
            ) ,
            
            
        ) , 
        
        ];

        return $this->render_from_template('theme_material_boost/fp_features', $fp_features);
    }
    

     
    public function fp_promo() {
        global $PAGE;

        $usepromoblocks = $PAGE->theme->settings->usepromoblocks == 1;
        
        //Item 1
        $promoitem1 = (empty($PAGE->theme->settings->promoitem1)) ? false : format_text($PAGE->theme->settings->promoitem1);
        $promoitem1image = (empty($PAGE->theme->setting_file_url('promoitem1image', 'promoitem1image'))) ? false : $PAGE->theme->setting_file_url('promoitem1image', 'promoitem1image');       
        $promoitem1content = (empty($PAGE->theme->settings->promoitem1content)) ? false : format_text($PAGE->theme->settings->promoitem1content);
        $promoitem1buttonurl = (empty($PAGE->theme->settings->promoitem1buttonurl)) ? false : $PAGE->theme->settings->promoitem1buttonurl;       
        
         //Item 2
        $promoitem2 = (empty($PAGE->theme->settings->promoitem2)) ? false : format_text($PAGE->theme->settings->promoitem2);
        $promoitem2image = (empty($PAGE->theme->setting_file_url('promoitem2image', 'promoitem2image'))) ? false : $PAGE->theme->setting_file_url('promoitem2image', 'promoitem2image');       
        $promoitem2content = (empty($PAGE->theme->settings->promoitem2content)) ? false : format_text($PAGE->theme->settings->promoitem2content);
        $promoitem2buttonurl = (empty($PAGE->theme->settings->promoitem2buttonurl)) ? false : $PAGE->theme->settings->promoitem2buttonurl;
        
         //Item 3
        $promoitem3 = (empty($PAGE->theme->settings->promoitem3)) ? false : format_text($PAGE->theme->settings->promoitem3);
        $promoitem3image = (empty($PAGE->theme->setting_file_url('promoitem3image', 'promoitem3image'))) ? false : $PAGE->theme->setting_file_url('promoitem3image', 'promoitem3image');       
        $promoitem3content = (empty($PAGE->theme->settings->promoitem3content)) ? false : format_text($PAGE->theme->settings->promoitem3content);
        $promoitem3buttonurl = (empty($PAGE->theme->settings->promoitem3buttonurl)) ? false : $PAGE->theme->settings->promoitem3buttonurl;

         //Item 4
        $promoitem4 = (empty($PAGE->theme->settings->promoitem4)) ? false : format_text($PAGE->theme->settings->promoitem4);
        $promoitem4image = (empty($PAGE->theme->setting_file_url('promoitem4image', 'promoitem4image'))) ? false : $PAGE->theme->setting_file_url('promoitem4image', 'promoitem4image');       
        $promoitem4content = (empty($PAGE->theme->settings->promoitem4content)) ? false : format_text($PAGE->theme->settings->promoitem4content);
        $promoitem4buttonurl = (empty($PAGE->theme->settings->promoitem4buttonurl)) ? false : $PAGE->theme->settings->promoitem4buttonurl;
        
         //Item 5
        $promoitem5 = (empty($PAGE->theme->settings->promoitem5)) ? false : format_text($PAGE->theme->settings->promoitem5);
        $promoitem5image = (empty($PAGE->theme->setting_file_url('promoitem5image', 'promoitem5image'))) ? false : $PAGE->theme->setting_file_url('promoitem5image', 'promoitem5image');       
        $promoitem5content = (empty($PAGE->theme->settings->promoitem5content)) ? false : format_text($PAGE->theme->settings->promoitem5content);
        $promoitem5buttonurl = (empty($PAGE->theme->settings->promoitem5buttonurl)) ? false : $PAGE->theme->settings->promoitem5buttonurl;
        
         //Item 6
        $promoitem6 = (empty($PAGE->theme->settings->promoitem6)) ? false : format_text($PAGE->theme->settings->promoitem6);
        $promoitem6image = (empty($PAGE->theme->setting_file_url('promoitem6image', 'promoitem6image'))) ? false : $PAGE->theme->setting_file_url('promoitem6image', 'promoitem6image');       
        $promoitem6content = (empty($PAGE->theme->settings->promoitem6content)) ? false : format_text($PAGE->theme->settings->promoitem6content);
        $promoitem6buttonurl = (empty($PAGE->theme->settings->promoitem6buttonurl)) ? false : $PAGE->theme->settings->promoitem6buttonurl;
        

        $fp_promo = [

        'usepromoblocks' => $usepromoblocks,
        
        'promoblocks' => array(
	        
            array(
	            'itemcount' => "1",
                'hasitem' => $promoitem1,
                'promoimage' => $promoitem1image,
                'promotitle' => $promoitem1,
                'promocontent' => $promoitem1content,
                'promourl' => $promoitem1buttonurl,

            ) ,
            
             array(
	            'itemcount' => "2",
                'hasitem' => $promoitem2,
                'promoimage' => $promoitem2image,
                'promotitle' => $promoitem2,
                'promocontent' => $promoitem2content,
                'promourl' => $promoitem2buttonurl,

            ) ,
            
             array(
	            'itemcount' => "3",
                'hasitem' => $promoitem3,
                'promoimage' => $promoitem3image,
                'promotitle' => $promoitem3,
                'promocontent' => $promoitem3content,
                'promourl' => $promoitem3buttonurl,

            ) ,
            
             array(
	            'itemcount' => "4",
                'hasitem' => $promoitem4,
                'promoimage' => $promoitem4image,
                'promotitle' => $promoitem4,
                'promocontent' => $promoitem4content,
                'promourl' => $promoitem4buttonurl,

            ) ,
            
             array(
	            'itemcount' => "5",
                'hasitem' => $promoitem5,
                'promoimage' => $promoitem5image,
                'promotitle' => $promoitem5,
                'promocontent' => $promoitem5content,
                'promourl' => $promoitem5buttonurl,

            ) ,
            
             array(
	            'itemcount' => "6",
                'hasitem' => $promoitem6,
                'promoimage' => $promoitem6image,
                'promotitle' => $promoitem6,
                'promocontent' => $promoitem6content,
                'promourl' => $promoitem6buttonurl,

            ) ,
            
                        
            
        ),

        ];

        return $this->render_from_template('theme_material_boost/fp_promo', $fp_promo);
    }
    
        
    
    public function fp_testimonials() {
        global $PAGE, $OUTPUT;

        $usetestimonials = $PAGE->theme->settings->usetestimonials == 1;      
        $defaultimage = $OUTPUT->image_url('default-profile', 'theme');
        
        //Testimonial 1
        $testimonial1content = (empty($PAGE->theme->settings->testimonial1content)) ? false : format_text($PAGE->theme->settings->testimonial1content);
        $testimonial1image = (empty($PAGE->theme->setting_file_url('testimonial1image', 'testimonial1image'))) ? false : $PAGE->theme->setting_file_url('testimonial1image', 'testimonial1image');
        $testimonial1name = (empty($PAGE->theme->settings->testimonial1name)) ? false : format_text($PAGE->theme->settings->testimonial1name);
        $testimonial1meta = (empty($PAGE->theme->settings->testimonial1meta)) ? false : format_text($PAGE->theme->settings->testimonial1meta);
        
        //Testimonial 2
        $testimonial2content = (empty($PAGE->theme->settings->testimonial2content)) ? false : format_text($PAGE->theme->settings->testimonial2content);
        $testimonial2image = (empty($PAGE->theme->setting_file_url('testimonial2image', 'testimonial2image'))) ? false : $PAGE->theme->setting_file_url('testimonial2image', 'testimonial2image');
        $testimonial2name = (empty($PAGE->theme->settings->testimonial2name)) ? false : format_text($PAGE->theme->settings->testimonial2name);
        $testimonial2meta = (empty($PAGE->theme->settings->testimonial2meta)) ? false : format_text($PAGE->theme->settings->testimonial2meta);
        
        //Testimonial 3
        $testimonial3content = (empty($PAGE->theme->settings->testimonial3content)) ? false : format_text($PAGE->theme->settings->testimonial3content);
        $testimonial3image = (empty($PAGE->theme->setting_file_url('testimonial3image', 'testimonial3image'))) ? false : $PAGE->theme->setting_file_url('testimonial3image', 'testimonial3image');
        $testimonial3name = (empty($PAGE->theme->settings->testimonial3name)) ? false : format_text($PAGE->theme->settings->testimonial3name);
        $testimonial3meta = (empty($PAGE->theme->settings->testimonial3meta)) ? false : format_text($PAGE->theme->settings->testimonial3meta);
        
        //Testimonial 4
        $testimonial4content = (empty($PAGE->theme->settings->testimonial4content)) ? false : format_text($PAGE->theme->settings->testimonial4content);
        $testimonial4image = (empty($PAGE->theme->setting_file_url('testimonial4image', 'testimonial4image'))) ? false : $PAGE->theme->setting_file_url('testimonial4image', 'testimonial4image');
        $testimonial4name = (empty($PAGE->theme->settings->testimonial4name)) ? false : format_text($PAGE->theme->settings->testimonial4name);
        $testimonial4meta = (empty($PAGE->theme->settings->testimonial4meta)) ? false : format_text($PAGE->theme->settings->testimonial4meta);
        
        //Testimonial 5
        $testimonial5content = (empty($PAGE->theme->settings->testimonial5content)) ? false : format_text($PAGE->theme->settings->testimonial5content);
        $testimonial5image = (empty($PAGE->theme->setting_file_url('testimonial5image', 'testimonial5image'))) ? false : $PAGE->theme->setting_file_url('testimonial5image', 'testimonial5image');
        $testimonial5name = (empty($PAGE->theme->settings->testimonial5name)) ? false : format_text($PAGE->theme->settings->testimonial5name);
        $testimonial5meta = (empty($PAGE->theme->settings->testimonial5meta)) ? false : format_text($PAGE->theme->settings->testimonial5meta);
        
        //Testimonial 6
        $testimonial6content = (empty($PAGE->theme->settings->testimonial6content)) ? false : format_text($PAGE->theme->settings->testimonial6content);
        $testimonial6image = (empty($PAGE->theme->setting_file_url('testimonial6image', 'testimonial6image'))) ? false : $PAGE->theme->setting_file_url('testimonial6image', 'testimonial6image');
        $testimonial6name = (empty($PAGE->theme->settings->testimonial6name)) ? false : format_text($PAGE->theme->settings->testimonial6name);
        $testimonial6meta = (empty($PAGE->theme->settings->testimonial6meta)) ? false : format_text($PAGE->theme->settings->testimonial6meta);
       
        $fp_testimonials = [

        'usetestimonials' => $usetestimonials,
        'defaultimage' => $defaultimage,
        
        
        'testimonials' => array(
	        
            array(
	            'itemclass' => 'active',
	            'indicatorcount' => '0',
                'hastestimonial' => $testimonial1content,
                'testimonial' => $testimonial1content,
                'testimonialimage' => $testimonial1image,
                'testimonialname' => $testimonial1name,
                'testimonialmeta' => $testimonial1meta,
            ),    
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '1',
                'hastestimonial' => $testimonial2content,
                'testimonial' => $testimonial2content,
                'testimonialimage' => $testimonial2image,
                'testimonialname' => $testimonial2name,
                'testimonialmeta' => $testimonial2meta,
            ),   
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '2',
                'hastestimonial' => $testimonial3content,
                'testimonial' => $testimonial3content,
                'testimonialimage' => $testimonial3image,
                'testimonialname' => $testimonial3name,
                'testimonialmeta' => $testimonial3meta,
            ),  
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '3',
                'hastestimonial' => $testimonial4content,
                'testimonial' => $testimonial4content,
                'testimonialimage' => $testimonial4image,
                'testimonialname' => $testimonial4name,
                'testimonialmeta' => $testimonial4meta,
            ),  
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '4',
                'hastestimonial' => $testimonial5content,
                'testimonial' => $testimonial5content,
                'testimonialimage' => $testimonial5image,
                'testimonialname' => $testimonial5name,
                'testimonialmeta' => $testimonial5meta,
            ),  
            
            array(
	            'itemclass' => '',
	            'indicatorcount' => '5',
                'hastestimonial' => $testimonial6content,
                'testimonial' => $testimonial6content,
                'testimonialimage' => $testimonial6image,
                'testimonialname' => $testimonial6name,
                'testimonialmeta' => $testimonial6meta,
            ),  
              
        ),

        ];

        return $this->render_from_template('theme_material_boost/fp_testimonials', $fp_testimonials);
    }
    
    
      
    public function fp_ctasection() {
        global $PAGE;
        
        $usectasection = $PAGE->theme->settings->usectasection == 1;
        $ctasectiontitle = (empty($PAGE->theme->settings->ctasectiontitle)) ? false : format_text($PAGE->theme->settings->ctasectiontitle);
        $ctasectioncontent = (empty($PAGE->theme->settings->ctasectioncontent)) ? false : format_text($PAGE->theme->settings->ctasectioncontent);
        $ctasectionbuttontext = (empty($PAGE->theme->settings->ctasectionbuttontext)) ? false : format_text($PAGE->theme->settings->ctasectionbuttontext);
        $ctasectionbuttonurl = (empty($PAGE->theme->settings->ctasectionbuttonurl)) ? false : $PAGE->theme->settings->ctasectionbuttonurl;
        $ctasectionbuttonurlopennew = $PAGE->theme->settings->ctasectionbuttonurlopennew== 1;

        $fp_ctasection = [
        
            'hasctasection' => $usectasection, 
            'ctatitle' => $ctasectiontitle, 
            'ctacontent' => $ctasectioncontent, 
            'hasctabutton' => ($ctasectionbuttontext && $ctasectionbuttonurl) ? true : false,
            'ctabutton' => $ctasectionbuttontext,
            'ctaurl' => $ctasectionbuttonurl,
            'urlopennew' => $ctasectionbuttonurlopennew,

        ];

        return $this->render_from_template('theme_material_boost/fp_ctasection', $fp_ctasection);
    }
    
      
    public function footer_blocks() {
        global $PAGE;

        $usefooterblocks = $PAGE->theme->settings->usefooterblocks == 1;

        
        //Blocks
        $footerblock1 = (empty($PAGE->theme->settings->footerblock1)) ? false : format_text($PAGE->theme->settings->footerblock1);
        $footerblock2 = (empty($PAGE->theme->settings->footerblock2)) ? false : format_text($PAGE->theme->settings->footerblock2);
        $footerblock3 = (empty($PAGE->theme->settings->footerblock3)) ? false : format_text($PAGE->theme->settings->footerblock3);
        
        
              
        $footer_blocks = [

        'usefooterblocks' => $usefooterblocks,
        
        
        'footerblocks' => array(
	        
            array(
	            'blockclass' =>'links',
	            'blockgrid' => 'col-lg-3 col-12',
                'hasblock' => $footerblock1,
                'blockcontent' => $footerblock1,
            ), 
            array(
	            'blockclass' => 'links',
	            'blockgrid' => 'col-lg-3 col-12',
                'hasblock' => $footerblock2,
                'blockcontent' => $footerblock2,
            ),    
            
            array(
	            'blockclass' => 'about',
	            'blockgrid' => 'col-lg-5 offset-lg-1 col-12',
                'hasblock' => $footerblock3,
                'blockcontent' => $footerblock3,
            ),    
   

        ),

        ];

        return $this->render_from_template('theme_material_boost/footer_blocks', $footer_blocks);
    }
    
    
    public function footer_widget() {
        global $PAGE;
        
        $footerwidget = (empty($PAGE->theme->settings->footerwidget)) ? false : format_text($PAGE->theme->settings->footerwidget);
        
        $footer_widget = [
	        'footerwidgetcontent' => $footerwidget,
	        
        ];
        
        
        return $this->render_from_template('theme_material_boost/footer_widget', $footer_widget);
    }
    
   
    
     public function footer_copyright() {
	     
        global $PAGE;
        
        $setting = $PAGE->theme->settings->copyright;
        
        return $setting != '' ? $setting : '';
        
    }

   

}

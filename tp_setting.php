<?php 

//This is sample code for creating Template setting menu with ACF plugin
//Place this code in function.php your WordPress template

    if( function_exists('acf_add_options_page') ) {

        //Create name of menu (It'll display in WordPress dashboard)
        $acf_main_data_page = acf_add_options_page(array(  
            'page_title' 	=> 'Template settings',
            'menu_title' 	=> 'Template settings',
            'menu_slug' 	=> 'acf-opt-template_settings',
            'icon_url'      => 'dashicons-post-status',
            'redirect' 		=> true
        ));

        //Create the option item
        $acf_testimonials_page = acf_add_options_sub_page(array( 
            'page_title' 	=> 'Pages',
            'menu_title' 	=> 'Pages',
            'parent_slug' 	=> $acf_main_data_page['menu_slug'],
        ));

        //Create the option item
        $acf_testimonials_page = acf_add_options_sub_page(array(
            'page_title' 	=> 'Footer',
            'menu_title' 	=> 'Footer',
            'parent_slug' 	=> $acf_main_data_page['menu_slug'],
        ));

        //Create the option item
        $acf_testimonials_page = acf_add_options_sub_page(array(
            'page_title' 	=> 'Header',
            'menu_title' 	=> 'Header',
            'parent_slug' 	=> $acf_main_data_page['menu_slug'],
        ));
    }

?>
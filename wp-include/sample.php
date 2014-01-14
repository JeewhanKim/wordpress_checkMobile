<?php
/*
Template Name: Sample Template
*/
if ( wp_is_mobile_device() ) // or wp_is_tablet_device()
    {
        // require_once( 'mobile_page.php');
    } 
else
    {
        // require_once( 'pc_page.php');
    }
?>
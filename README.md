#Wordpress checkMobile Function

#Introduction

Check if the page run on Mobile or Desktop browser written in PHP.
The code detects a user based on the user-agent string by 'HTTP_USER_AGENT'.

You can simply replace vars.php in the [wp-include] folder.

#Example

```php
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
```

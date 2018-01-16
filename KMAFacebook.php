<?php
/*
 * Plugin Name: KMA Facebook AutoBlog for WordPress
 * Plugin URI: https://www.keriganmarketing.com
 * Description: Plugin allows easy setup of auth tokens and various settings required to automate your blog
 * Author: Kerigan Marketing Associates
 * Version: 0.1
 * Release Date: 1/16/18
 * Latest Update: 1/16/18
 * Initial Release Date: 1/16/18
 * Author URI: https://www.keriganmarketing.com
 *
 * @package KMAFacebook
 * @since 1.3
 * @version 0.1
 */

require_once ('vendor\autoload.php');

//add the hooks for install/uninstall and menu.
register_activation_hook( __FILE__, function(){
    $install = new KMAFacebook\PluginSetup();
    $install->installPlugin();
});

register_deactivation_hook(__FILE__, function(){
    $uninstall = new KMAFacebook\PluginSetup();
    $uninstall->uninstallPlugin();
});

add_action('init', function(){
    if(!is_admin()) {
        return;
    }else{

//        $update = new KMAFacebook\PluginSetup();
//        $update->updatePlugin();

        new KMAFacebook\AdminPages();
    }
});
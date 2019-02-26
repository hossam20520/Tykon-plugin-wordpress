<?php
/**
 * @package     TykonPackage
 * 
 */
namespace Inc\Base;
use \Inc\Base\BaseController;

class Enqueue  extends BaseController{

public function register(){
    add_action('admin_enqueue_scripts',array($this, 'enqueue'));
}


function enqueue(){
    wp_enqueue_script('TykonStyle', $this->plugin_url .'/assets/js/main.js');
    wp_enqueue_style( 'TykonScript', $this->plugin_url .'/assets/css/main.css');
}

}
?>
<?php
/**
 * @package     TykonPackage
 * 
 */

namespace Inc\Pages;

use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;
use Inc\Api\Callbacks\AdminCallBacks;


class Admin extends BaseController{
  public $settings;
  public $callbacks;
  public $pages = array();
  public $subpages = array();
  


    public function register(){
 
        $this->settings = new SettingsApi();
        $this->callbacks = new AdminCallBacks();
        $this->setPages();
        $this->setSubPages();
        $this->settings->addPages( $this->pages)->withSubPage('Dashboard')->addSubPages($this->subpages)->register();
    }

  
public function setPages(){
    $this->pages = [ 
        [
        'page_title' => 'Tykon Plugin',
        'menu_title' => 'Tykon',
        'capability' => 'manage_options',
        'menu_slug' => 'Tykon_plugin',
        'callback' => array($this->callbacks , 'adminDashboard' ),
        'icon_url' => 'dashicons-screenoptions',
        'position' => 110

        ]
     ];
}

public function setSubPages(){
    $this->subpages =   [ 
        [
    
        'parent_slug' => 'Tykon_plugin',
        'page_title' =>  'Add Project',
        'menu_title' =>'Add Project',
        'capability' => 'manage_options',
        'menu_slug' => 'Tykon_add_project',
        'callback' => array($this->callbacks , 'projectHomeAdd' ) 
        
        ], [
    
            'parent_slug' => 'Tykon_plugin',
            'page_title' =>  'Add Info Project',
            'menu_title' =>'Add Info Project',
            'capability' => 'manage_options',
            'menu_slug' => 'Tykon_info_project',
            'callback' => array($this->callbacks , 'projectInfoAdd' )
        
        ],
        [
            
            'parent_slug' => 'Tykon_plugin',
            'page_title' =>  'Custom WIDGET',
            'menu_title' =>'WIDGET',
            'capability' => 'manage_options',
            'menu_slug' => 'Tykon_WIDGET',
            'callback' => function() { echo '<h1>WIDGET MANGER </h1>'; }
        
            ]
    
        ];
}

}
?>

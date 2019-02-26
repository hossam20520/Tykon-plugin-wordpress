<?php
/**
 * Plugin Name
 *
 * @package     TykonPackage
 * @author      Hossam
 * @copyright   Turnon
 * @license     GPL
 *
 * @wordpress-plugin
 * Plugin Name: Tykon
 * Plugin URI:  https://#
 * Description: This Plugin For Manage The Content Of Tykon's Website.
 * Version:     1.0.0
 * Author:      hossam
 * Author URI:  hossamhassan889@gmail.com
 * Text Domain: plugin-name
 * License:     GPL
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined('ABSPATH') or die("Sorry You Can't Acess This Page !");

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function Active_Tykon(){
    Activate::active();  
}
function Deactivate_Tyko(){
    Deactivate::deactive();
}
register_activation_hook( __FILE__, 'Active_Tykon' );
register_deactivation_hook( __FILE__, 'Deactivate_Tyko' );

if(class_exists('Inc\\Init')){
    Inc\Init::register_services();
}



?>
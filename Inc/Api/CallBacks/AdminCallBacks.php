<?php
/**
 * @package     TykonPackage
 * 
 */

namespace Inc\Api\Callbacks;
use Inc\Base\BaseController;

class AdminCallBacks extends BaseController{

public function adminDashboard(){
    return require_once("$this->plugin_path/templates/admin.php");
}

public function projectHomeAdd(){
    return require_once("$this->plugin_path/templates/projects.php");
}

public function projectInfoAdd(){
    return require_once("$this->plugin_path/templates/project_info.php");
}


}
?>










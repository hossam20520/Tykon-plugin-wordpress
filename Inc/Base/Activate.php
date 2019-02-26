<?php
/**
 * @package     TykonPackage
 * 
 */

namespace Inc\Base;


class Activate {
    public static function active(){
        flush_rewrite_rules( );
    }
}
?>


<?php
/**
 * @package GNOME Website
 * @subpackage Grass Theme
 */


$post_type = get_post_type();
$post_category = get_the_category();

if($post_type == 'post') {

    if($post_category->slug == 'quarterly-reports') {
        require_once('one-column.php');
    } else {
        require_once('news.php');
    }

} elseif($post_type == 'projects') {
    
    require_once('project.php');
    
} else {

    require_once('one-column.php');
    
}


?>

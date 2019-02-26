<h1>Project Info </h1>

<?php






global $wpdb;

if(isset($_GET['id_project'])){
    $id_project =   $_GET['id_project'];
   // where id_project ='$id_project'
}
$results = $wpdb->get_results( "SELECT * FROM  wp_info_projects "); 
$count = 0;
if(!empty($results)) {
  
    foreach($results as $row){
?>

<a href="http://localhost:60/turnon/tykon/wordpress/wp-admin/admin.php?page=Tykon_info_project&&id_project='<?php echo $row->id_project; ?>'">click me</a>


<?php

    }

}







?>
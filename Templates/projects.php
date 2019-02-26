<h1>Our Exclusive Projects</h1>


<?php
test_handle_post();
?>

        <!-- Form to handle the upload - The enctype value here is very important -->
        <form  method="post" enctype="multipart/form-data">
                <label>Image: </label> <input type='file' id='test_upload_pdf' name='upload_image'><br>
                <label>Area: </label> <input type ='text' name ='area'><br>
                <label>Area from: </label> <input type ='text' name ='area_from'><br>
                <label>Area to: </label> <input type ='text' name ='area_to'><br>
                <label>Starting Price: </label> <input type ='text' name ='starting_price'><br>
                <?php submit_button('Upload') ?>
        </form>
<?php

        function test_handle_post(){
        
        if(isset($_FILES['upload_image'])){
                $pdf = $_FILES['upload_image'];
                $name = $_FILES['upload_image']['name'];
               $area =  $_POST['area'];
               $area_from =  $_POST['area_from'];
               $area_to =  $_POST['area_to'];
               $starting_price =  $_POST['starting_price'];
                $uploaded=media_handle_upload('upload_image', 0);
               
                if(is_wp_error($uploaded)){
                        echo "Error uploading file: " . $uploaded->get_error_message();
                }else{
                    $filename = $uploaded['file'];
                    $wp_upload_dir = wp_upload_dir();
               
                   $url =  $wp_upload_dir['url']. '/'.$name;
                  
                 
                  
                 
                        echo "File upload successful!";
                }
                insert($url ,$area , $area_from , $area_to , $starting_price);

        }
}


 function insert($url ,$area , $area_from , $area_to , $starting_price){
     global $wpdb;
    $tablename = $wpdb->prefix.'projects';

   $wpdb->insert( $tablename, array(
        'pic' => $url, 
        'area' =>$area,
       'area_from' => $area_from, 
       'area_to' => $area_to,
       'starting_price' => $starting_price),
       array( '%s', '%s', '%s', '%s' ,'%s' ));
}




?>
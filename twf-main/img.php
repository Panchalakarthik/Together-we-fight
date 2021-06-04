<?php
// File 

function cropandsave($id)
{
$filename = 'C:/xampp/htdocs/twf/assets/user_profile_pic/'.$id.'.jpg';



// Get sizes
list($width, $height) = getimagesize($filename);
//obtain ratio
$imageratio = $width/$height;

if($imageratio >= 1){
    $newwidth = 600;
    $newheight = 600 / $imageratio; 
}
else{
     $newidth = 400;
     $newheight = 400 / $imageratio;
};

//$newwidth=100;
//$newheight=100;


// Load
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, 
$height);

// Output
imagejpeg($thumb, 'C:/xampp/htdocs/twf/assets/user_profile_pic/'.$id.'_.jpg');
//imagedestroy();
}

function crop_img($image_name)
{
    $uploadDir="C:/xampp/htdocs/twf/assets/user_profile_pic/";
    $image_name=$image_name.'.jpg';
    $new_height=200;
    $new_width=200;
    $moveToDir="C:/xampp/htdocs/twf/assets/cpic/";
    $path = $uploadDir . '/' . $image_name;

    $mime = getimagesize($path);

    if($mime['mime']=='image/png') { 
        $src_img = imagecreatefrompng($path);
    }
    if($mime['mime']=='image/jpg' || $mime['mime']=='image/jpeg' || $mime['mime']=='image/pjpeg') {
        $src_img = imagecreatefromjpeg($path);
    }   

    $old_x          =   imageSX($src_img);
    $old_y          =   imageSY($src_img);

    if($old_x > $old_y) 
    {
        $thumb_w    =   $new_width;
        $thumb_h    =   $old_y*($new_height/$old_x);
    }

    if($old_x < $old_y) 
    {
        $thumb_w    =   $old_x*($new_width/$old_y);
        $thumb_h    =   $new_height;
    }

    if($old_x == $old_y) 
    {
        $thumb_w    =   $new_width;
        $thumb_h    =   $new_height;
    }

    $dst_img        =   ImageCreateTrueColor($thumb_w,$thumb_h);

    imagecopyresampled($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y); 


    // New save location
    $new_thumb_loc = $moveToDir . $image_name;

    if($mime['mime']=='image/png') {
        $result = imagepng($dst_img,$new_thumb_loc,8);
    }
    if($mime['mime']=='image/jpg' || $mime['mime']=='image/jpeg' || $mime['mime']=='image/pjpeg') {
        $result = imagejpeg($dst_img,$new_thumb_loc,80);
    }

    imagedestroy($dst_img); 
    imagedestroy($src_img);

    return $result;
}

//crop_img("518fbe51018b018649e7d8aa32481d8e");


?>
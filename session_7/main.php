   
<?php 

// echo "<pre>";
//    print_r($_SERVER);

/**
 *    session
 * 1-write php script to store username in a session and display it in another page
 * 2-make login page store the username in the session and display welcome message in another page
 * 3-make logout button that destroy the session
 * 
 *   cookie
 * 1-write php script that set a cookie named user with a value and 1 hour expire
 * 2-show message welcome back , user if cookie exist and it not set welcome user for the firstname user
 * 3-make remember me login page
 */



// echo "<pre>";
// print_r($_FILES);



if($_SERVER['REQUEST_METHOD'] == 'POST'){
$image = $_FILES['iamge'];
$image_name = $image['name'];
$image_temp = $image['tmp_name'];
//  $new_name = uniqid() ;
 $ext = pathinfo($image_name ,PATHINFO_EXTENSION);
$new_name = uniqid().".".$ext ;
  move_uploaded_file($image_temp,  $new_name);
// $_SESSION['show'] =  $myImage;

echo "<img src='$new_name' >";


}


/** array
 * chunk()
 * array_diff()
 * array_comping()
 * array_count_value()
 * array_diff_assoc()
 * array_fill
 * array_key_exist()
 * array_push()
 * array_unshift()
 * array_pop()
 * array_shift()
 * array_reverse()
 * slice()
 * array_unique()
 * asort()
 * ksort()
 * slice()
 * splice()
 * slice()
 * extract()
 * shuffle()
 * in_array()
 * 
 * 
 * string
 * 
 * chunk_split()
 * echo()
 * explode()
 * implode()
 * print_if()
 * join()
 * lefirst()
 * ltrim()
 * md5
 * nl2br
 * shal1()
 * substr()
 * math()
 * ceil()
 * floor()
 * max()
 * min()
 * 
 * 
 */



  
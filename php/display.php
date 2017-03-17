<?php
function showimage($myfile,$userid){
    foreach(glob("../upload/{$userid}/*.*") as $filename){
            
            if(strcmp($filename,$myfile)==0){
                $image = $filename;
                
                 $supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);
     $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_file)) {
        
        echo '<img  height="300" width="300" src="'.$image .'" alt="Random image" />';
    }

            }
 }
}
    $servername = "localhost";
    $username = "root";
    $password = 'abcd';
    $dbname = 'login';
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $userid=2;
   

    $sql = "SELECT image_id FROM uploads where user_id='$userid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    $i=0;
    while($row = $result->fetch_assoc()) {
        
         
         $myfile="../upload/{$userid}/{$row["image_id"]}.png";
        showimage($myfile,$userid);
            $myfile="../upload/{$userid}/{$row["image_id"]}.gif";
            showimage($myfile,$userid);
            $myfile="../upload/{$userid}/{$row["image_id"]}.jpg";
            showimage($myfile,$userid);
            $myfile="../upload/{$userid}/{$row["image_id"]}.jpeg";
       
   
    }
} else {
    echo "0 results";
}
?>
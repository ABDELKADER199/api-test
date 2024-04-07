<?php 
$con = mysqli_connect('localhost','root', '' , 'stocks');

if($con){
    $sql = "SELECT * from admins";
    $result = mysqli_query($con,$sql);
    if($result){
        header("Content-Type: JSON");
        $i = 0 ;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row ['id'];
            $response[$i]['name'] = $row ['name'];
            $response[$i]['jobs_title'] = $row ['jobs_title'];
            $response[$i]['email'] = $row ['email'];
            $response[$i]['passwords'] = $row ['passwords'];
            $response[$i]['phone'] = $row ['phone'];
            $response[$i]['department_id'] = $row ['department_id'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
<?php

    include_once "../config/koneksi.php";
    $order_id=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT pay_status from orders where order_id='$order_id'"; 
    $result=$ha-> query($sql);
  //  echo $result;

    $row=$result-> fetch_assoc();
    
   // echo $row["pay_status"];
    
    if($row["pay_status"]==0){
         $update = mysqli_query($ha,"UPDATE orders SET pay_status=1 where order_id='$order_id'");
    }
    else if($row["pay_status"]==1){
         $update = mysqli_query($ha,"UPDATE orders SET pay_status=0 where order_id='$order_id'");
    }
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>
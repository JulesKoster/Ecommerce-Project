<?php

    $sql = "SELECT brand, model, cpu, gpu,ram,hdd FROM laptoptable";
    
    $data = $conn->query($sql);  

    foreach ($data as $row)
    {   
        echo '<p class="result">';     
        echo $row['brand'] . " ";  
        echo $row['model'] . " ";
        echo $row['cpu'] . " "; 
        echo $row['gpu'] . " "; 
        echo $row['ram'] . " "; 
        echo $row['hdd'] . " ";
        //echo $row['os'] . " ";
        echo "</p>";
    }  
  
?>

		
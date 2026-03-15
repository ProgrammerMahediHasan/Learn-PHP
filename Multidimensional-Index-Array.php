<?php

$users=[
        [1,"Mahedi","Engineer",50000],
        [2,"Pollob","Developer",20000],
        [3,"Harun","Ai Engineer",30000],
        [4,"Abdullah","Designer",40000],
        [5,"Rashed","Manager",60000]
    ];

    echo "<table border='1px' cellpadding='4px' cellspacing='0'>";
    echo "<tr>
             <th>Id</th>   
             <th>Name</th>   
             <th>Designation</th>   
             <th>Salary</th>   
    </tr>";
 for ($i=0;$i<count($users);$i++){
    echo "<tr>";
    for ($u=0;$u<count($users[$i]);$u++){
        echo "<td>";
        echo $users[$i][$u] . " ";
        echo "</td>";
    }echo "<br>";
    echo "</tr>";
 }
 echo "</table>";

    // echo "<pre>";
    // print_r($users);
    // echo "</pre>";

<?php

$employees= [
    ["name"=>"Mahedi","designation"=>"Software Engineer","age"=>30,"salary"=>30000],
    ["name"=>"Pollob","designation"=>"Prompt Engineer","age"=>27,"salary"=>50000],
    ["name"=>"Abdullah","designation"=>"Graphics Designer","age"=>25,"salary"=>40000]
];

foreach ($employees as $emp){
    foreach($emp as $key=>$emps){
        echo "$key => $emps <br>";
    }
}
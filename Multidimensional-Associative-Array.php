<?php



$employee=[
    ["Id"=>101,"Name"=>"Mahedi","Age"=>30],
    ["Id"=>102,"Name"=>"Pollob","Age"=>29],
    ["Id"=>103,"Name"=>"Harun","Age"=>28],
    ["Id"=>104,"Name"=>"Rashed","Age"=>29]
];
echo "<table border='1' cellpadding='4' cellspacing='0'>";

echo "<tr>";
foreach($employee[0] as $key=> $emp){
echo "<th>";   
echo $key ;
echo "</th>";
}
echo "</tr>";


foreach($employee as $emp){
    echo "<tr>";
    foreach($emp as $value){
    echo "<td>";    
    echo  $value . " ";
    echo "</td>";
    } echo "</tr>";
}echo "</table>";
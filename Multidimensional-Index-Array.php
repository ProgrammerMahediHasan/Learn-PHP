<?php

$emp=[
    [1,"Mahedi Hasan","Web Developer",35000],
    [2,"Abdullah","Backend Developer",50000],
    [3,"Pollob Sagor","Full Stack Developer",40000],
    [4,"Rashed Khan","Frontend Developer",60000],
];

for ($row=0;$row<4;$row++){
    for($col=0;$col<4;$col++){
        echo $emp [$row][$col] . " ";
    }echo "<br>";
}

echo "<br>";

echo "<table border='1px'; cellpadding='5px' cellspacing='0'>";
echo "<tr>
      <th>Emp Id</th>
      <th>Emp Name</th>
      <th>Emp Desig</th>
      <th>Emp Salary</th>
     </tr>";
foreach($emp as $v1){
    echo "<tr>";
    foreach ($v1 as $v2){
        echo "<td> $v2  </td>  ";
    } echo "</tr>";
}
 "</table>";
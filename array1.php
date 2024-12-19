<!-- // Convert array to JSON -->
<?php

$data = [
    "name" => "Mr x",
    "role" => "PHP Intern",
    "company" => "x",
    "skills" => ["PHP", "Laravel", "React"]
];

 $jsonData = json_encode($data);
 echo "JSON Data: \n" . $jsonData;

?>
<!-- Output:
JSON Data: {"name":"Mr x","role":"PHP Intern","company":"x","skills":["PHP","Laravel","React"]} -->




<!-- // JSON string to convert Array-->
<?php

$jsonString = '{
    "name": "Md x",
    "role": "PHP Intern",
    "company": "x",
    "skills": ["PHP", "Laravel", "React"]
}';

$arrayData = json_decode($jsonString, true); // `true` for associative array

echo "Array Data: \n";
print_r($arrayData);
?>

<!-- Output:
Array Data: Array ( [name] => Md x [role] => PHP Intern [company] => x [skills] => Array ( [0] => PHP [1] => Laravel [2] => React ) ) -->
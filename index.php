<?php

$people = [
    ["name" => "Jānis", "age" => 20, "email" => "janis@janis.lv", "languages" => ["PHP", "Python", "Java"]],
    ["name" => "Antra", "age" => 34, "email" => "antra@antra.com", "languages" => ["HTML", "Javascript", "SQL"]]
];

echo "<ul>";
foreach ($people as $p) {
    echo "<li>";
    echo "<h1>" . $p["name"] . "</h1>";
    echo "<p>" . $p["age"] . "</p>";
    echo "<p>" . $p["email"] . "</p>";

    echo "<ul>";
    foreach ($p["languages"] as $lang){
        echo "<li>" . $lang . "</li>";
    }
    echo "</ul>";
    echo "</li>";
}
echo "</ul>";

?>
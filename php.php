<?php

//---[1 UZD]---
$fruits = ["Ābols", "Banāns", "Ķirsis", "Dateles"];
echo $fruits[1] . "\n";


//---[2 UZD]---
$ages = ["Alise" => 30, "Bobs" => 25, "Čārlijs" => 35];
echo $ages["Bobs"] . "\n\n";


//---[3 UZD]---
$students = [
    ["Vārds" => "Džons", "Vecums" => 20, "Atzīmes" => [90, 85, 88]],
    ["Vārds" => "Džena", "Vecums" => 22, "Atzīmes" => [92, 80, 84]],
    ["Vārds" => "Džo", "Vecums" => 21, "Atzīmes" => [78, 85, 90]]
];

foreach ($students as $s) {
    $avg = 0;
    foreach ($s["Atzīmes"] as $a)
        $avg += $a;
    echo $s["Vārds"] . " Vidējā atzīme: " . $avg / count($s["Atzīmes"]) . "\n";
}


//---[4 UZD]---
foreach ($students as $s) {
    echo "\nVārds: " . $s["Vārds"] . ", Vecums: " . $s["Vecums"] . ", Atzīmes: ";
    foreach ($s["Atzīmes"] as $a)
        echo $a . " ";
}

echo "\n\n";


//---[5 UZD]---
$assocAnimal = [
    "name" => "lauva",
    "mass" => 250,
    "type" => "zīdītājs",
    "prey" => ["gazele", "zebra"]
];

$animals = [
    [
        "name" => "lauva",
        "mass" => 250,
        "type" => "zīdītājs",
        "prey" => ["gazele", "zebra"]
    ],
    [
        "name" => "vilks",
        "mass" => 45,
        "type" => "zīdītājs",
        "prey" => ["zaķis", "stirna"]
    ],
    [
        "name" => "ērglis",
        "mass" => 6,
        "type" => "putns",
        "prey" => ["čūska", "pele"]
    ]
];

foreach ($animals as $a) {
    var_dump($a);
}


//---[6 UZD]---
$arr = ['red', 'blue', 'green', 'yellow'];

echo "\n\nColors: ";
foreach ($arr as $a){
    echo $a;
    echo ($a == $arr[count($arr) - 1]) ? "." : ", ";
}

echo "\n\n";

//---[7 UZD]---
$people = [
    ["name" => "Jānis", "age" => 20, "email" => "janis@janis.lv", "languages" => ["PHP", "Python", "Java"]],
    ["name" => "Antra", "age" => 34, "email" => "antra@antra.com", "languages" => ["HTML", "Javascript", "SQL"]]
];

?>
<?php

$fruits = ["Ābols", "Banāns", "Ķirsis", "Dateles"];
echo $fruits[1] . "\n";

$ages = ["Alise" => 30, "Bobs" => 25, "Čārlijs" => 35];
echo $ages["Bobs"] . "\n\n";

$students = [
    ["Vārds" => "Džons", "Vecums" => 20, "Atzīmes" => [90, 85, 88]],
    ["Vārds" => "Džena", "Vecums" => 22, "Atzīmes" => [92, 80, 84]],
    ["Vārds" => "Džo", "Vecums" => 21, "Atzīmes" => [78, 85, 90]]
];

foreach ($students as $s) {
    $avg = 0;
    foreach ($s["Atzīmes"] as $a)
        $avg += $a;
    echo $s["Vārds"] . " Vidējā atzīme: " . $avg / 3 . "\n";
}

foreach ($students as $s) {
    echo "\nVārds: " . $s["Vārds"] . ", Vecums: " . $s["Vecums"] . ", Atzīmes: ";
    foreach ($s["Atzīmes"] as $a)
        echo $a . " ";
}

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

$arr = ['red', 'blue', 'green', 'yellow'];

echo "\n\nColors: ";
foreach ($arr as $a)
    echo $a . ", ";
?>
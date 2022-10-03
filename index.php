<?php
$people = [
    "Pakhomova" => 2007,
    "Horban" => 2008,
    "Virotchenko" => 1980,
    "PakhomovVlad" => 1999,
    "Pakhomov" => 1977,
];
asort($people);
print_r($people);
ksort($people);
print_r($people);
sort($people);
print_r($people);
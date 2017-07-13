<?php
#List Of all applicants

$applicants =[
    (object)[
    'Id' => 233,
    'Name' => 'Ivaylo',
    'Priority' => NULL,
    'Description' => 'Some description',
],
(object)[
    'Id' => 413,
    'Name' => 'Miroslav',
    'Priority' => 1,
    'Description' => 'Some description',
],

(object)[
    'Id' => 51,
    'Name' => 'Georgi',
    'Priority' => NULL,
    'Description' => 'Some description',
],
];

$sortedList = sort(applicants);
print_r ($sortedList);


 ?>

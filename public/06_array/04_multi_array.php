<?php
// define multi-dimensional array(2D)
$tasks = [
    ['Learn PHP programming', 2],
    ['Practice PHP', 2],
    ['Work', 8],
    ['Do exercise', 1]
];


// display multi-dimensional array
print_r($tasks);
echo '<br>';


// add new element into md array
$tasks[] = ['Build something matter in PHP', 2];


// removing element from md array
unset($tasks[2]);


// loop through md array by foreach
foreach($tasks as $task) {
    foreach($task as $task_details) {
        echo $task_details . '<br>';
    }
}


// access to md array element
echo 'name of first task is: ' . $tasks[0][0] . '<br>';
echo 'time of fourth task is: ' . $tasks[3][1] . '<br>';
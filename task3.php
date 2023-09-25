<?php
$grades = [85, 92, 78, 88, 95];

function sortDescending(array $grades): array
{
    rsort($grades);

    return $grades;
}

$sortedGrades = sortDescending($grades);

print_r($sortedGrades);

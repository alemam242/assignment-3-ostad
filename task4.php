<?php
$studentGrades = [
    [
        'Math' => 88,
        'English' => 85,
        'Science' => 80
    ],
    [
        'Math' => 81,
        'English' => 75,
        'Science' => 84
    ],
    [
        'Math' => 89,
        'English' => 93,
        'Science' => 87
    ]
];


function calculateAverage(array $studentGrades): array
{
    $studentsAverage = [];
    foreach ($studentGrades as $student) {
        $total = 0;
        $numberOfSubject = count($student);
        foreach ($student as $mark) {
            $total += $mark;
        }
        $studentsAverage[] = $total / $numberOfSubject;
    }

    return $studentsAverage;
}


$studentsAverage = calculateAverage($studentGrades);

foreach ($studentsAverage as $key => $average) {
    if (is_int($average)) {
        printf("Average grade of student-{$key}: {$average}\n");
    } else {
        printf("Average grade of student-{$key}: %.2f\n", $average);
    }
}

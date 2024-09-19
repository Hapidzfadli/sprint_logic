<?php

function gradingStudents($grades)
{
    $roundedGrades = [];

    foreach ($grades as $grade) {
        if ($grade < 38) {
            $roundedGrades[] = $grade;
        } else {
            $nextMultipleOf5 = ceil($grade / 5) * 5;
            $difference = $nextMultipleOf5 - $grade;

            if ($difference < 3) {
                $roundedGrades[] = $nextMultipleOf5;
            } else {
                $roundedGrades[] = $grade;
            }
        }
    }

    return $roundedGrades;
}

echo "Masukkan jumlah siswa: ";
$numStudents = intval(trim(fgets(STDIN)));

$grades = [];
for ($i = 0; $i < $numStudents; $i++) {
    echo "Masukkan nilai untuk siswa " . ($i + 1) . ": ";
    $grade = intval(trim(fgets(STDIN)));

    while ($grade < 0 || $grade > 100) {
        echo "Nilai harus antara 0 dan 100. Masukkan kembali: ";
        $grade = intval(trim(fgets(STDIN)));
    }

    $grades[] = $grade;
}

$result = gradingStudents($grades);

// Menampilkan hasil
echo "\nNilai awal: " . implode(", ", $grades) . "\n";
echo "Nilai setelah pembulatan: " . implode(", ", $result) . "\n";

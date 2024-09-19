# Grading Students - Sprint Asia University Case Study

This repository contains a PHP implementation of the grading system for Sprint Asia University, as described in the Full Stack Engineer case study.

## Project Description

The project implements a grading system with the following rules:

- Every student receives a grade in the inclusive range from 0 to 100.
- Any grade less than 40 is a failing grade.
- Grades are rounded according to these rules:
  - If the difference between the grade and the next multiple of 5 is less than 3, round the grade up to the next multiple of 5.
  - If the value of the grade is less than 38, no rounding occurs as the result will still be a failing grade.

## Features

- Input grades for multiple students via command line
- Automatic grade rounding based on the specified rules
- Display of original and rounded grades

## Requirements

- PHP 7.0 or higher

## Installation

1. Clone this repository:
   ```
   git clone https://github.com/Hapidzfadli/sprint_logic.git
   ```
2. Navigate to the project directory:
   ```
   cd sprint_logic
   ```

## Usage

1. Run the script from the command line:
   ```
   php logic.php
   ```
2. Follow the prompts to enter the number of students and their grades.
3. The program will display the original grades and the rounded grades.

## Example

```
$ php logic.php
Masukkan jumlah siswa: 4
Masukkan nilai untuk siswa 1: 73
Masukkan nilai untuk siswa 2: 67
Masukkan nilai untuk siswa 3: 38
Masukkan nilai untuk siswa 4: 33

Nilai awal: 73, 67, 38, 33
Nilai setelah pembulatan: 75, 67, 40, 33
```

## Contributing

This project is part of a case study and is not actively seeking contributions. However, if you have suggestions or improvements, feel free to fork the repository and submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).

## Contact

For any queries regarding this project, please open an issue in this repository.

---

This project is a solution to the Sprint Asia University case study for the Full Stack Engineer position.

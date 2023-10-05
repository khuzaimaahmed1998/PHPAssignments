<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


    echo "<h1>Marksheet</h1>"
    $sno = 54;
    $name = "Khuzaima";
    $class = 9;
    $eng = 94;
    $urdu = 100;
    $maths = 89;
    $science = 71;

    // Calculating Obtained Marks and Percentage
    $marks = $eng + $urdu + $maths + $science;
    $total_marks = 400;
    $per = ($marks / $total_marks) * 100;
    $grade;

    if ($percentage >= 80) {
        $grade = 'A+';
    }else if ($per>=70 && $per<=79) {
        $grade = 'A';
    }else if ($per>=60 && $per<=69) {
        $grade = 'B';
    }else if ($per>= 50 && $per<=59) {
        $grade = 'C';
    }else if ($per>= 40 && $per<= 49) {
        $grade = 'D';
    }else if ($per>= 0 && $per<=39) {
        $grade = 'FAIL';
    }
        echo "<b>SNO:</b>" . $sno . "<br>";
        echo "<b>Name:</b>" . $name . "<br>";
        echo "<b>Class:</b>" . $class . "<br>";
        echo "<b>English:</b>" . $eng . "<br>";
        echo "<b>Urdu:</b>" . $urdu . "<br>";
        echo "<b>Maths:</b>" . $maths . "<br>";
        echo "<b>Science:</b>" . $science . "<br>";
        echo "<b>Marks:</b>" . $marks . "<br>";
        echo "<b>Percentage:</b>" . $per . "<br>";
        echo "<b>Grade:</b>" . $grade . "<br>";
    ?>

</body>
</html>

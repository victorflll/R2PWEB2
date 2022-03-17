<?php

include "config.php";

$return_arr = array();

$query = "SELECT * FROM `grades`;";

$result = mysqli_query($connect, $query);

while($row = mysqli_fetch_array($result)){
    $schoolCode = $row['school_code'];
    $schoolSubject = $row['school_subject'];
    $firstGrade = $row['first_grade'];
    $secondGrade = $row['second_grade'];
    $thirdGrade = $row['third_grade'];
    $fourthGrade = $row['fourth_grade'];

    $return_arr[] = array(
                    "school_code" => $schoolCode,
                    "school_subject" => $schoolSubject,
                    "first_grade" => $firstGrade,
                    "second_grade" => $secondGrade,
                    "third_grade" => $thirdGrade,
                    "fourth_grade" => $fourthGrade);
}

echo json_encode($return_arr);

?>
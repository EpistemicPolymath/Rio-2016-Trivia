<?php
/**
 * In Class Assignment 1
 * 800768070_InClass01
 * Jennifer Tillman
 * Date: 1/25/2017
 * Time: 5:13 PM
 */

# Declare all variables
/*
$userName = $_POST['userName'];
$Phelps_answer = $_POST['Phelps_answer'];
$Simone_answer = $_POST['Simone_answer'];
$Allyson_answer = $_POST['Allyson_answer'];
$Caeleb_answer = $_POST['Caeleb_answer'];
$Katie_answer = $_POST['Katie_answer'];
$Nathan_answer = $_POST['Nathan_answer'];
$Lilly_answer = $_POST['Lilly_answer'];
$Madeline_answer = $_POST['Madeline_answer'];
*/


$userName = filter_input(INPUT_POST, 'userName');
$Phelps_answer = filter_input(INPUT_POST, 'Phelps_answer');
$Simone_answer = filter_input(INPUT_POST, 'Simone_answer');
$Allyson_answer = filter_input(INPUT_POST, 'Allyson_answer');
$Caeleb_answer = filter_input(INPUT_POST, 'Caeleb_answer');
$Katie_answer = filter_input(INPUT_POST, 'Katie_answer');
$Nathan_answer = filter_input(INPUT_POST, 'Nathan_answer');
$Lilly_answer = filter_input(INPUT_POST, 'Lilly_answer');
$Madeline_answer = filter_input(INPUT_POST, 'Madeline_answer');

#Declare correct variable and compare answers for correctness while incrementing the correct var
$correct = 0;


if ($Phelps_answer == "Swimming") {

    $correct++;


}

if ($Simone_answer == "Gymnastics") {

    $correct++;

}


if ($Allyson_answer == "Track & Field") {

    $correct++;


}


if ($Caeleb_answer == "Swimming") {

    $correct++;

}

if ($Nathan_answer == "Swimming")
{

    $correct++;

}


if ($Lilly_answer == "Swimming") {

    $correct++;

}

if ($Katie_answer == "Swimming") {

    $correct++;

}

if ($Madeline_answer == "Swimming") {

    $correct++;

}
#Create totalScore and message variables for output, depending on amount correct message variable changes

$totalScore = "You got $correct/8 correct answers. <br>";
$message = " ";

if ($correct >= 6) {

    $message = "Congratulations $userName! you have passed the quiz :)";


} elseif ($correct >= 4) {

    $message = "$userName, you got an average score …";

} elseif ($correct < 4) {

    $message = "You should refresh your
information $userName";

}

#Echo out all calculated data. with PHP close tags

?>

<style>

    .phpTable {

        border: double;

    }

    td, th {

        border-style: double;
        font-weight: bold;


    }

    th {

        font-weight: bold;

    }

</style>

<h1> So, you have selected:</h1> <br>
<table class="phpTable">


    <tr>
        <th>Medalist</th>
        <th>Name</th>
        <th>Sport</th>
    </tr>

    <tr>

        <td><img src='img/philips.jpg'></td>
        <td>Micheal Phelps</td>
        <td><?= $Phelps_answer; ?></td>

    </tr>


    <tr>

        <td><img src='img/Simone.jpg'></td>
        <td>Simone Biles</td>
        <td><?= $Simone_answer; ?></td>

    </tr>


    <tr>

        <td><img src='img/Allyson.jpg'></td>
        <td>Allyson Felix</td>
        <td><?= $Allyson_answer; ?></td>

    </tr>


    <tr>

        <td><img src='img/Caeleb.jpg'></td>
        <td>Caeleb Dressel</td>
        <td><?= $Caeleb_answer; ?></td>

    </tr>


    <tr>

        <td><img src='img/Katie.jpg'></td>
        <td>Katie Ledecky</td>
        <td><?= $Katie_answer; ?></td>

    </tr>


    <tr>

        <td><img src='img/Nathan.jpg'></td>
        <td>Nathan Adrian</td>
        <td><?= $Nathan_answer; ?></td>

    </tr>


    <tr>

        <td><img src='img/Lilly.jpg'></td>
        <td>Lilly King</td>
        <td><?= $Lilly_answer; ?></td>


    </tr>


    <tr>

        <td><img src='img/Madeline.jpg'></td>
        <td>Madeline Dirado</td>
        <td><?= $Madeline_answer; ?></td>

    </tr>


</table>

<p>

    <?= $totalScore; ?> <br>
    <?= $message; ?>

</p>

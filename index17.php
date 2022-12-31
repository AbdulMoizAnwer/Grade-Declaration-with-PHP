<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Declaration</title>
</head>
<body>
    <!-- Write a php program to accept a grade and declare the equivalent description : Go to the editor

    Grade	Description
    E	Excellent
    V	Very Good
    G	Good
    A	Average
    F	Fail
    Test Data :
    Input the grade :A
    Expected Output :
    You have chosen : Average -->
    <h1>Accept a Grade and Declare it's Equivalent Description</h1>
    <form action="#" method="POST">
        <label>Enter Grade Alphabet</label>
        <input type="text" name="a1"> 
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $alpha = $_POST['a1'];
    if($alpha == 'A' || $alpha == 'a')
        echo "You have chosen: Average";
    else if($alpha == 'E' || $alpha == 'e')  
        echo "You have chosen: Excellent"; 
    else if($alpha == 'F' || $alpha == 'f')     
        echo "You have chosen: Fail";
    else if($alpha == 'G' || $alpha == 'g')
        echo "You have chosen: Good";    
    else if($alpha == 'V' || $alpha == 'v')
        echo "You have chosen: Very Good";
    else 
        echo "Grade you have entered is not available. Please try again submitting correct grade.";
    }
?>


<?php
$age = $_POST['ageValue'];

if ($age >= 18 && $age <= 90) {
    echo "You are you are allowed to vote.";
} elseif ($age >= 90) {
    echo "You are over-age.";
} elseif($age <= 0) {
    echo "Invalid age.";
} else{
    echo "You are not allowed to vote.";
}



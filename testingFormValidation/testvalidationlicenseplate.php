<?php

$licensePlate = '';
$licensePlateErr = '';

// valid license plate pattern in the Netherlands
$validLicensePlates = [
    "/^([A-Z]{2})(\d{2})(\d{2})/i", // XX-99-99
    "/^(\d{2})(\d{2})([A-Z]{2})/i", // 99-99-XX
    "/^(\d{2})([A-Z]{2})(\d{2})/i", // 99-XX-99
    // "/^([A-Z]{2})(\d{2})([A-Z]{2})/i", // XX-99-XX
    // "/^([A-Z]{2})([A-Z]{2})(\d{2})/i", // XX-XX-99
    "/^(\d{2})([A-Z]{2})([A-Z]{2})/i", // 99-XX-XX
    "/^(\d{2})([A-Z]{3})(\d)/i", // 99-XXX-9
    "/^(\d)([A-Z]{3})(\d{2})/i", // 9-XXX-99
    // "/^([A-Z]{2})(\d{3})([A-Z])/i", // XX-999-X
    // "/^([A-Z])(\d{3})([A-Z]{2})/i", // X-999-XX
    // "/^([A-Z]{3})(\d{2})([A-Z])/i" // XXX-99-X
];

foreach ($validLicensePlates as $validLicensePlate) { // checks for each different pattern
    $licensePlateCheck = preg_replace('/-/', '', $_POST['licensePlate']); // removes -
    $nonValidPattern = preg_match($validLicensePlate, $licensePlateCheck); // var contains the match
    // part which checks the matches
    if ($licensePlateCheck == $nonValidPattern) {
        $validForm = false;
        $licensePlateErr = 'Geen geldig kenteken ingevoerd.';
    }
    break;
}
// print_r($validLicensePlates);
if ($licensePlateErr == '') {
    $licensePlate = htmlspecialchars($_POST['licensePlate']);
}
?>
<form action="" method="post">
<label for="kenteken">Kenteken*: </label>
<input type="text" id="kenteken" name="licensePlate" maxlength="8" value="<?=$licensePlate?>">
<p style="color:red;"><?=$licensePlateErr;?></p>

    <input type="submit" name="submit">
</form>
<?php
//phpmailer setting from Github.com//

$file1 = '/PHPMailer/Exception.php';
$file2 = '/PHPMailer/PHPMailer.php';
$file3 = '/PHPMailer/SMTP.php';
$basePath = $_SERVER['DOCUMENT_ROOT'];
$fullPath1 = $basePath . $file1;
$fullPath2 = $basePath . $file2;
$fullPath3 = $basePath . $file3;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $fullPath1;
require $fullPath2;
require $fullPath3;
//storing the post in the database//
$fullName = $_POST['fullname'];
$email = $_POST['email'];
$age = $_POST['age'];
$Gender = $_POST['Gender'];
$mobileNumber = $_POST['phone'];
$location = $_POST['address'] . ', ' . $_POST['city'] . ', ' . $_POST['state'] . ', ' . $_POST['postcode'] . ', ' . $_POST['country'];
$message = $_POST['additionalnotes'];
$drugName = $_POST['drugnames'];
$dosage = $_POST['dosage'];
$routeOfAdministration = $_POST['routeofadministration'];
$preexistingConditions = $_POST['preexistingconditions'];
$allergies = $_POST['allergies'];
$currentMedications = $_POST['currentmedications'];
$pastMedications = $_POST['pastmedications'];
$surgicalHistory = $_POST['surgicalhistory'];
$familyMedicalHistory = $_POST['familymedicalhistory'];
$immunizationHistory = $_POST['immunizationhistory'];
$dateAndTimeOfReaction = $_POST['dateofreaction'] . ' ' . $_POST['timeofreactions'];
$reactionDescription = $_POST['reactiondescription'];
$severityOfReaction = $_POST['severity'];
$symptomsExperienced = $_POST['symptomsexperienced'];
$laboratoryTestResults = $_POST['laboratorytestresults'];
$actionsTaken = $_POST['actiontaken'];
$outcomeOfReaction = $_POST['outcomeofthereaction'];
$healthcareProviderInformation = $_POST['healthcareproviderinformation'];
$pharmacyInformation = $_POST['pharmacyinformation'];
$healthInsuranceInformation = $_POST['healthinsuranceinformation'];
$travelHistory = $_POST['additionalnotes'];
$occupational = $_POST['occupational'];
$lifestyleFactors = $_POST['lifestylefactors'];
$pregnancyAndLactationStatus = $_POST['pregnancyandlactationstatus'];

//connecting to the database//
$servername = "localhost";
$username = "id20782851_admin";
$password = "Onyeka2000@";
$database = "id20782851_ofrsdb";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to insert data into the appointment table
$sql = "INSERT INTO adrreport (fullName, Age, Gender, mobileNumber, location, DrugName, Dosage, RouteofAdministration, message, PreexistingConditions, Allergies, CurrentMedications, PastMedications, SurgicalHistory, FamilyMedicalHistory, ImmunizationHistory, DateandTimeofthereaction, ReactionDescription, Severityofthereaction, Symptomsexperienced, LaboratoryTestResults, ActionsTaken, Outcomeofthereaction, HealthcareProviderInformation, PharmacyInformation, HealthInsuranceInformation, TravelHistory, Occupational, LifestyleFactors, PregnancyandLactationStatus, email)
VALUES ('$fullName', '$age', '$Gender', '$mobileNumber', '$location', '$drugName', '$dosage', '$routeOfAdministration', '$message', '$preexistingConditions', '$allergies', '$currentMedications', '$pastMedications', '$surgicalHistory', '$familyMedicalHistory', '$immunizationHistory', '$dateAndTimeOfReaction', '$reactionDescription', '$severityOfReaction', '$symptomsExperienced', '$laboratoryTestResults', '$actionsTaken', '$outcomeOfReaction', '$healthcareProviderInformation', '$pharmacyInformation', '$healthInsuranceInformation', '$travelHistory', '$occupational', '$lifestyleFactors', '$pregnancyAndLactationStatus', '$email')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo 'Form submitted successfully.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

try {
    $mail = new PHPMailer(true);

    // Set SMTP server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.office365.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'Reportadr@outlook.com';
    $mail->Password = '@Stephaine23';
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Port = 587;

    // Send copy of the signed form to the user
    $mail->setFrom('Reportadr@outlook.com', 'Adverse drug reaction');
    $mail->addAddress($email, $fullName);
    $mail->addReplyTo('Reportadr@outlook.com', 'Adverse drug reaction');
    $mail->isHTML(true);

    $subject = "Copy of Signed Form";
    $adrmessage = "Dear $fullName,<br><br>\n\nThank you for submitting the form. A member of the reporting team would reach out to you soon.<br><br>\n\n Best regards,<br><br>\n\n Adverse drug reaction reporting team.";

    $mail->Subject = $subject;
    $mail->Body = $adrmessage;
    $mail->send();

    echo 'Email sent successfully to the reporting team!';

    // Send email to the admin
    $adminEmail = "Reportadr@outlook.com";
    $adminSubject = "New Form Submission by $fullName";
    $adminMessage = "A new form has been submitted. <br><br>\n\n Name: $fullName <br>\n\n MobileNumber: $mobileNumber <br> \n\n Location: $location <br> \n\n Message: $message <br> \n\n Drug Name: $drugName <br> \n\n Dosage: $dosage <br> \n\n Route of Administration: $routeOfAdministration. <br> \n\n Pre-existing Conditions: $preexistingConditions <br> \n\n Allergies: $allergies <br> \n\n Current Medications : $currentMedications <br> \n\n Past Medications : $pastMedications <br> \n\n Surgical History : $surgicalHistory <br> \n\n Family Medical History : $familyMedicalHistory <br> \n\n Immunization History : $immunizationHistory <br> \n\n Date And Time Of Reaction : $dateAndTimeOfReaction <br> \n\n Reaction Description : $reactionDescription <br> \n\n Severity Of Reaction : $severityOfReaction <br> \n\n Symptoms Experienced : $symptomsExperienced <br> \n\n Laboratory Test Results : $laboratoryTestResults <br> \n\n Actions Taken: $actionsTaken <br> \n\n Outcome Of Reaction : $outcomeOfReaction <br> \n\n Healthcare Provider Information : $healthcareProviderInformation <br> \n\n Pharmacy Information : $pharmacyInformation <br> \n\n Additional notes: $travelHistory <br> \n\n Occupational : $occupational <br> \n\n Lifestyle Factors: $lifestyleFactors <br> \n\n Pregnancy And Lactation Status : $pregnancyAndLactationStatus";

    $mail->clearAddresses();
    $mail->addAddress($adminEmail);

    $mail->Subject = $adminSubject;
    $mail->Body = $adminMessage;
    $mail->send();
    echo 'Form sent to the admin!';
} catch (Exception $e) {
    echo 'Email could not be sent. Error: ', $mail->ErrorInfo;
}
?>

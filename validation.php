<?php
ob_start(); // Start output buffering
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['save_multiple_checkbox'])) {
    // Database connection details
    $db_host = "localhost";
    $db_username = "";
    $db_password = "";
    $db_name = "";

    // Create a database connection
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Process other form fields here
    $FullName = mysqli_real_escape_string($conn, $_POST['FullName']);
    $LastNameatBirth = mysqli_real_escape_string($conn, $_POST['LastNameatBirth']);
    $MarriedLastName = mysqli_real_escape_string($conn, $_POST['MarriedLastName']);
    $CurrentAddress = mysqli_real_escape_string($conn, $_POST['CurrentAddress']);
    $PhoneNumber = mysqli_real_escape_string($conn, $_POST['PhoneNumber']);
    $EmailAddress = mysqli_real_escape_string($conn, $_POST['EmailAddress']);
    $Occupation = mysqli_real_escape_string($conn, $_POST['Occupation']);
    $DateofBirth = mysqli_real_escape_string($conn, $_POST['DateofBirth']);
    $PlaceofBirth = mysqli_real_escape_string($conn, $_POST['PlaceofBirth']);
    $MaritalStatus = mysqli_real_escape_string($conn, $_POST['MaritalStatus']);
    $PlaceofMarriage = mysqli_real_escape_string($conn, $_POST['PlaceofMarriage']);
    $Citizenship = mysqli_real_escape_string($conn, $_POST['Citizenship']);
    $StatusinCanada = mysqli_real_escape_string($conn, $_POST['StatusinCanada']);
    $SpouseName = mysqli_real_escape_string($conn, $_POST['SpouseName']);
    $SpouseBirthplace = mysqli_real_escape_string($conn, $_POST['SpouseBirthplace']);
    $FathersName = mysqli_real_escape_string($conn, $_POST['FathersName']);
    $FathersBirthplace = mysqli_real_escape_string($conn, $_POST['FathersBirthplace']);
    $MothersMaidenName = mysqli_real_escape_string($conn, $_POST['MothersMaidenName']);
    $MothersBirthplace = mysqli_real_escape_string($conn, $_POST['MothersBirthplace']);
    $DateofRegistrationifLate = mysqli_real_escape_string($conn, $_POST['DateofRegistrationifLate']);
    $RemittanceFullName = mysqli_real_escape_string($conn, $_POST['RemittanceFullName']);
    $RemittanceCurrentAddress = mysqli_real_escape_string($conn, $_POST['RemittanceCurrentAddress']);
    $RemittanceEmail = mysqli_real_escape_string($conn, $_POST['RemittanceEmail']);
    $RemittancePhoneNumber = mysqli_real_escape_string($conn, $_POST['RemittancePhoneNumber']);
    $RemittanceAccountNumber = mysqli_real_escape_string($conn, $_POST['RemittanceAccountNumber']);
    $RemittanceBank = mysqli_real_escape_string($conn, $_POST['RemittanceBank']);
    $RemittanceBranchName = mysqli_real_escape_string($conn, $_POST['RemittanceBranchName']);
    $RemittanceTransaction = mysqli_real_escape_string($conn, $_POST['RemittanceTransaction']);
    $RemittanceAmount = mysqli_real_escape_string($conn, $_POST['RemittanceAmount']);


// Process checkbox values
if (isset($_POST['order']) && is_array($_POST['order'])) {
    $selectedItems = $_POST['order']; // Get selected checkbox values as an array
    $request = implode(', ', $selectedItems); // Combine selected values into a comma-separated string
} else {
    $request = ''; // Default value if no checkboxes are selected
}

$fileInputs = [
    'fileInputValidID' => ['valid_id_name', 'valid_id_type', 'valid_id_content'],
    'fileInputPassport' => ['passport_name', 'passport_type', 'passport_content'],
    'fileInput2x2' => ['2x2_name', '2x2_type', '2x2_content'],
    'fileInputOldNBI' => ['old_nbi_name', 'old_nbi_type', 'old_nbi_content'],
    'fileUploadReceipt' => ['file_UploadReceipt_name', 'file_UploadReceipt_type', 'file_UploadReceipt_content'],
];

$attachments = []; // Array to store file attachments

// Assuming $conn is your database connection, ensure it's established before this point

foreach ($fileInputs as $input => $columns) {
    if (isset($_FILES[$input]) && $_FILES[$input]['error'] === UPLOAD_ERR_OK) {
        $fileName = $_FILES[$input]['name'];
        $fileType = $_FILES[$input]['type'];
        $fileContent = file_get_contents($_FILES[$input]['tmp_name']);

        // Use placeholders in the SQL query to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO uploads 
            ({$columns[0]}, {$columns[1]}, {$columns[2]}) VALUES (?, ?, ?)");

        // Check if the prepare was successful
        if ($stmt === false) {
            die('Error preparing statement: ' . $conn->error);
        }

        $result = $stmt->bind_param("sss", $fileName, $fileType, $fileContent);

        // Check if the bind_param was successful
        if ($result === false) {
            die('Error binding parameters: ' . $stmt->error);
        }

        $stmt->execute();
        $stmt->close();

        // Add the file details to attachments array
        $attachments[] = [
            'name' => $fileName,
            'content' => $fileContent,
            'type' => $fileType
        ];
    }
}

// Perform any further actions or redirection based on the $request and $attachments if needed



    
    // Insert data into the database
    $sql = "INSERT INTO databaseform (FullName, LastNameatBirth, MarriedLastName, CurrentAddress, PhoneNumber, EmailAddress, Occupation, DateofBirth, PlaceofBirth, MaritalStatus, PlaceofMarriage,
     Citizenship, StatusinCanada, SpouseName, SpouseBirthplace, FathersName, FathersBirthplace, MothersMaidenName, MothersBirthplace, DateofRegistrationifLate, RemittanceFullName,
     RemittanceCurrentAddress, RemittanceEmail, RemittancePhoneNumber, RemittanceAccountNumber, RemittanceBank,  RemittanceBranchName, RemittanceTransaction, RemittanceAmount   )
     VALUES ('$FullName', '$LastNameatBirth','$MarriedLastName', '$CurrentAddress', '$PhoneNumber', '$EmailAddress', '$Occupation', '$DateofBirth', '$PlaceofBirth',
      '$MaritalStatus', '$PlaceofMarriage', '$Citizenship', '$StatusinCanada', '$SpouseName', '$SpouseBirthplace', '$FathersName', '$FathersBirthplace', 
      '$MothersMaidenName', '$MothersBirthplace', '$DateofRegistrationifLate', '$RemittanceFullName', '$RemittanceCurrentAddress', '$RemittanceEmail', '$RemittancePhoneNumber', 
      '$RemittanceAccountNumber', '$RemittanceBank', '$RemittanceBranchName', '$RemittanceTransaction', '$RemittanceAmount')";

    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "Data inserted successfully.";
    } else {
        $_SESSION['status'] = "Error: " . mysqli_error($conn);
    }



    require 'vendor/autoload.php'; // Include your email library file
    $mailer = new PHPMailer(true);
    $mailer->SMTPDebug = 2; // Set to 2 for debugging
    $mailer->isSMTP();
    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = '';
    $mailer->Password = '';
    $mailer->SMTPSecure = 'tls'; // Change to 'ssl' if needed
    $mailer->Port = 587; // Change to 465 if using 'ssl'
    $mailer->setFrom('');
    $mailer->addAddress('');
    $mailer->addAddress('');
    $mailer->addCC('');
    $mailer->addCC('');
    $mailer->addCC('');
    $mailer->Subject = 'Information';
    $mailBody = "Notification for New Client\r\n";
    
if (!empty($request)) {
    $mailBody .= "Request: $request\r\n";
}

if (!empty($FullName)) {
    $mailBody .= "Full Name: $FullName\r\n";
}

if (!empty($LastNameatBirth)) {
    $mailBody .= "Last Name: $LastNameatBirth\r\n";
}

// Add "\r\n" to the end of each entry as follows
if (!empty($MarriedLastName)) {
    $mailBody .= "Married Last Name (if applicable): $MarriedLastName\r\n";
}

if (!empty($CurrentAddress)) {
    $mailBody .= "Current Address: $CurrentAddress\r\n";
}

if (!empty($PhoneNumber)) {
    $mailBody .= "Phone Number: $PhoneNumber\r\n";
}

if (!empty($EmailAddress)) {
    $mailBody .= "Email Address: $EmailAddress\r\n";
}

if (!empty($Occupation)) {
    $mailBody .= "Occupation: $Occupation\r\n";
}

if (!empty($DateofBirth)) {
    $mailBody .= "Date of Birth: $DateofBirth\r\n";
}

if (!empty($PlaceofBirth)) {
    $mailBody .= "Place of Birth: $PlaceofBirth\r\n";
}

if (!empty($MaritalStatus)) {
    $mailBody .= "Marital Status: $MaritalStatus\r\n";
}

if (!empty($PlaceofMarriage)) {
    $mailBody .= "Place of Marriage: $PlaceofMarriage\r\n";
}

if (!empty($Citizenship)) {
    $mailBody .= "Citizenship: $Citizenship\r\n";
}

if (!empty($StatusinCanada)) {
    $mailBody .= "Status in Canada: $StatusinCanada\r\n";
}

if (!empty($SpouseName)) {
    $mailBody .= "Spouse Name: $SpouseName\r\n";
}

if (!empty($SpouseBirthplace)) {
    $mailBody .= "Spouse Birth Place: $SpouseBirthplace\r\n";
}

if (!empty($FathersName)) {
    $mailBody .= "Father's  Name: $FathersName\r\n";
}

if (!empty($FathersBirthplace)) {
    $mailBody .= "Father's Birth Place: $FathersBirthplace\r\n";
}

if (!empty($MothersMaidenName)) {
    $mailBody .= "Mother's Maiden Name: $MothersMaidenName\r\n";
}

if (!empty($MothersBirthplace)) {
    $mailBody .= "Mother's Birth Place: $MothersBirthplace\r\n";
}

if (!empty($DateofRegistrationifLate)) {
    $mailBody .= "Date of Registration if Late (Marriage): $DateofRegistrationifLate\r\n";
}

if (!empty($RemittanceFullName)) {
    $mailBody .= "Recipient's Full Name: $RemittanceFullName\r\n";
}

if (!empty($RemittanceCurrentAddress)) {
    $mailBody .= "Recipient's Current Address: $RemittanceCurrentAddress\r\n";
}

if (!empty($RemittanceEmail)) {
    $mailBody .= "Recipient's Email Address: $RemittanceEmail\r\n";
}

if (!empty($RemittancePhoneNumber)) {
    $mailBody .= "Recipient's Phone Number: $RemittancePhoneNumber\r\n";
}

if (!empty($RemittanceAccountNumber)) {
    $mailBody .= "Account Number: $RemittanceAccountNumber\r\n";
}

if (!empty($RemittanceBank)) {
    $mailBody .= "Bank: $RemittanceBank\r\n";
}

if (!empty($RemittanceBranchName)) {
    $mailBody .= "Branch Name: $RemittanceBranchName\r\n";
}

if (!empty($RemittanceTransaction)) {
    $mailBody .= "Transaction Type: $RemittanceTransaction\r\n";
}

if (!empty($RemittanceAmount)) {
    $mailBody .= "Amount: $RemittanceAmount\r\n";
}

foreach ($attachments as $attachment) {
    $mailer->addStringAttachment($attachment['content'], $attachment['name'], 'base64', $attachment['type']);
}

    
       
     $mailer->Body = $mailBody;
    

    try {
        // Send email
        $mailer->send();
        // The email was sent successfully
                // Redirect to the appropriate page
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        // Email sending failed, handle the error
        // You can add error handling code here
    }
    // Close the database connection
    mysqli_close($conn);

    header("Location: index.php");
    exit; // Terminate the script
} 
ob_end_flush(); // Send the output to the browser
?>

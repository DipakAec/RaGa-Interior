<?php 
// Email settings 
$toEmail = 'pauldippakkr@gmail.com'; // Recipient email 
$from = $email;
$fromName = $name;
 
 
 
/* Form submission handler code */ 
$postData =  $statusMsg = $valErr = ''; 
$msgClass = 'errordiv'; 
if(isset($_POST['submit'])){ 
    // Get the submitted form data 
    $postData = $_POST; 
    $name = trim($_POST['name']); 
    $email = trim($_POST['email']); 
    $company = trim($_POST['company']); 
    $message = trim($_POST['message']); 
 
    // Validate input data 
    if(empty($name)){ 
        $valErr .= 'Please enter your name.<br/>'; 
    } 
    if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
    }  
    if(empty($company)){ 
        $valErr .= 'Please enter subject.<br/>'; 
    } 
    if(empty($message)){ 
        $valErr .= 'Please enter message.<br/>'; 
    } 
     
    // Check whether submitted data is valid 
    if(empty($valErr)){ 
        $uploadStatus = 1; 
         
         
        if($uploadStatus == 1){ 
            // Email subject 
            $emailSubject = 'Contact Request Submitted by '.$name; 
             
            // Email message  
            $htmlContent = '<h2>Contact Request Submitted</h2> 
                <p><b>Name:</b> '.$name.'</p> 
                <p><b>Email:</b> '.$email.'</p> 
                <p><b>Subject:</b> '.$company.'</p> 
                <p><b>Message:</b><br/>'.$message.'</p>'; 
             
            // Header for sender info 
            $headers = "From: $fromName"." <".$from.">"; 
 
            // Add attachment to email 
            if(!empty($uploadedFile) && file_exists($uploadedFile)){ 
                 
                // Boundary  
                $semi_rand = md5(time());  
                $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  
                 
                // Headers for attachment  
                $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";  
                 
                // Multipart boundary  
                $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
                "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n";  
                 

                 
                $message .= "--{$mime_boundary}--"; 
                $returnpath = "-f" . $email; 
                 
                // Send email 
                $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath); 
                 
                // Delete attachment file from the server 
                @unlink($uploadedFile); 
            }else{ 
                    // Set content-type header for sending HTML email 
                $headers .= "\r\n". "MIME-Version: 1.0"; 
                $headers .= "\r\n". "Content-type:text/html;charset=UTF-8"; 
                 
                // Send email 
                $mail = mail($toEmail, $emailSubject, $htmlContent, $headers);  
            } 
             
            // If mail sent 
            if($mail){ 
                $statusMsg = 'Thanks! Your contact request has been submitted successfully.'; 
                $msgClass = 'succdiv'; 
                 
                $postData = ''; 
            }else{ 
                $statusMsg = 'Failed! Something went wrong, please try again.'; 
            } 
        } 
    }else{ 
        $valErr = !empty($valErr)?'<br/>'.trim($valErr, '<br/>'):''; 
        $statusMsg = 'Please fill all the mandatory fields.'.$valErr; 
    } 
} 
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
class Mailer{

    public function seat_booking_email($CustomerID, $Date, $Movie, $Name, $City, $Email, $PhoneNumber, $PaymentDate, $TotalPayment, $Theater, $BookingDate, $Time, $Seats, $TotalSeats){
        $mail = new PHPMailer(true);   
        $mail->CharSet= 'UTF-8';
        $text_email = '<div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <center><img src="img/UIT.png" width="40%">
                    <h2 style="color:blue ; font-family:"Times New Roman"">UIT Theatre</h2></center>
                    <table>
                        <tr>
                        <td></td>
                        <td style="padding: 12px 2px 12px 90px;">Customer ID: '.$CustomerID.'</td>
                    </tr>
                    <tr>
                        <td></td><td style="padding: 1px 2px 1px 90px;">Date: '.$Date.'</td>
                    </tr>
                    </table>
                    <hr>
                    
                    <center><h3>Movie: '.$Movie.'</h3></center>

                <table>
                    <tr>
                    <th align= "left" style="padding: 0px 0px 0px 90px;">Name</th><th style="padding: 12px 0px 0px 185px;">City</th>
                </tr>
                <tr>
                    <td style="padding: 0px 0px 0px 90px;">'.$Name.'</td><td style="padding: 12px 0px 0px 250px;">'.$City.'</td>
                </tr>
                <tr>
                    <th align= "left" style="padding: 0px 0px 0px 90px;">Email</th><th style="padding: 12px 0px 0px 250px;">Phone Number</th>
                </tr>
                <tr>
                    <td style="padding: 0px 0px 0px 90px;">'.$Email.'</td><td style="padding: 12px 0px 0px 250px;">0'.$PhoneNumber.'</td>
                </tr>
                <tr>
                    <th align= "left" style="padding: 0px 0px 0px 90px;">Payment Date</th><th style="padding: 12px 0px 0px 240px;">Total Payment</th>
                </tr>
                <tr>
                    <td style="padding: 0px 0px 0px 90px;">'.$PaymentDate.'</td><td style="padding: 12px 0px 0px 250px;">'.number_format($TotalPayment, 0, "", ".").' VND</td>
                </tr>
                </table>

                <hr>

                <h4>BOOKING DETAILS:</h4>
                <table>
                <tr>
                    <th align= "left" style="padding: 0px 0px 0px 90px;">Theater</th><th align= "left" style="padding: 0px 0px 0px 120px;">Date</th><th align= "left" style="padding: 0px 0px 0px 120px;">Time</th>
                </tr>
                <tr>
                    <td style="padding: 0px 0px 0px 90px;">No. '.$Theater.'</td><td style="padding: 0px 0px 0px 120px;">'.$BookingDate.'</td><td style="padding: 0px 0px 0px 120px;">'.$Time.'</td>
                </tr>
                <tr>
                    <th align= "left" style="padding: 0px 0px 0px 90px;">Seats</th><th align= "left" style="padding: 0px 0px 0px 120px;">Total Seats</th>
                </tr>
                <tr>
                    <td style="padding: 0px 0px 0px 90px;">'.$Seats.'</td><td style="padding: 0px 0px 0px 120px;">'.$TotalSeats.'</td>
                </tr>
                
                </table>
                
                </div>
            </div>
        </div>
    </div>';
            
        try {
            //Server settings
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'nguyenminhnhatip@gmail.com';                 // SMTP username
            $mail->Password = 'zecwnqrosmwlbezh';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, ssl also accepted
            $mail->Port = 465;                                    // TCP port to connect to
         
            //Recipients
            $mail->setFrom('nguyenminhnhatip@gmail.com', 'UIT Theatre');
            $mail->addAddress($Email, $Name); 
                // Add a recipient
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
         
            // //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
         
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'YOUR TICKET PURCHASE IS CONFIRMED!';
            $mail->Body    = $text_email;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
            $mail->send();
            echo '<center><font color="#B233FF"><h2>A confirmation message has been sent to your gmail</h2></font>';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
}



?>
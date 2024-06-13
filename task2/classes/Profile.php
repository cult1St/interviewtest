<?php 
    require_once "Db.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

class Profile extends Db{
   
    protected $dbconn;

    public function __construct(){
        $this->dbconn = $this->connect();

    }


    public function insert_profile($name, $phone, $email){
        try{
            $sql = "INSERT INTO profile(profile_fullname, profile_phone, profile_email) VALUES(?, ?, ?)";
            $stmt = $this->dbconn->prepare($sql);
            $resp =  $stmt->execute([$name, $phone, $email]);
            return $resp;

        }catch(PDOException $e){
            $_SESSION['error']=  $e->getMessage();
            return false;
        }catch(Exception $e){
            $_SESSION['error']=  $e->getMessage();
            return false;
        }
    }
    public function send_message_mailer($email, $message){
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'momoduwealth2@gmail.com';                     //SMTP username
    $mail->Password   = 'rqcn suzx tzro xzha';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('momoduwealth@gmail.com', 'Mailer');
    $mail->addAddress($email, 'Website visitor');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Registration Confirmation';
    $mail->Body    = "<b>Dear $email </b> Thank you for your registration Your account have been saved with us";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   return true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
        
    }
}
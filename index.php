<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/flowbite@1.4.3/dist/flowbite.js"></script>
    <title>Hackers-poulette</title>
</head>

<body>

    <!--formumlaire complet-->
    <div class="container">
        <form action="mail.php" method="post">
            <!--rentrer le nom-->
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" placeholder="Last name">

            <!-- rentrer le prenom-->
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" placeholder="First name">

            <!--selectioner le genre-->
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female">
            <labe for="female">Female</labe>

            <!--choisir le pays-->
            <label for="country">Country</label>
            <input type="text" name="country" placeholder="Belgium">

            <!--selectionner le sujet-->
            <select name="subject" id="subject-select">
                <option value="choose">Please choose an option</option>
                <option value="other">Other</option>
                <option value="miss">Element missing</option>
                <option value="broke">Element broken</option>
            </select>

            <!--entrer le message-->
            <label for="message">Description of the problem</label>
            <textarea name="message" rows="10" cols="30"></textarea>

            <!--bouton submit-->
            <input type="submit" value="Submit">

        </form>
    </div>

    <?php

        if (isset($_POST['submit'])) {

            $nom = $POST['lastname'];
            $prenom = $POST['firstname'];
            $gender = $POST['gender'];
            $country = $POST['country'];
            $subject = $POST['subject'];
            $message = $POST['message'];
        }
    ?>

    <?php

        use PHPMailer\PHPMailer\Exception;
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;

        require_once "process/phpmailer/Exception.php";
        require_once "process/phpmailer/PHPMailer.php";
        require_once "process/phpmailer/SMTP.php";

        $mail = new PHPMailer(true);

        try {
            //configuration
            $mail->SMTPDebug =  SMTP::DEBUG_SERVER;

            //Configure le SMTP
            $mail->isSMTP();
            $mail->Host = "localhost:8888";
            $mail->Port = 1025;

            //Charset
            $mail->CharSet = "utf-8";

            $mail->addAddress("hackerspoulette@info.com");

            $mail->setFrom("hackers-poulette@reply.com");

            $mail->Subject = "sujet du message"

        } catch(Exception) {
            echo "Message non envoyé. Erreur: ${mail->ErrorInfo}";
        }

?>

</body>

</html>
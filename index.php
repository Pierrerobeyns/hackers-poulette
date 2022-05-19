<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.3/dist/flowbite.min.css" />
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
    $return = mail("pierre.robeyns@gmail.com", "Envoi depuis la page contact", $_POST["message"], "From:hackerspoulette@monsite.fr");

    if ($return)

        echo "<p>Votre message a bien été envoyé</p>"
    ?>

</body>

</html>
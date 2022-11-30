<?php
$name =$_GET['first'];
setcookie('cookie', $name, time()+3600);
?>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="resumestyles.css" rel="stylesheet" type="text/css">
    <title>Guestbook</title>
</head>

<body>

<div class="container-fluid">

    <div class="row">
        <div class="col-12 text-center">
            <h1>Thank you for signing my guestbook</h1>
            <p>Your message has been submitted for approval. If it is appropriate, it will show up here shortly.</p>
        </div>
    </div>
    <div class="row">
        <p>Here is what some previous guests said:</p>
    </div>




    <?php

    require '/home/deedeegr/db.php';

    $first = $_POST['first'];
    $last = $_POST['last'];
    $gbmessage = $_POST['gbmessage'];
    $link = $_POST['link'];


    $sql = "INSERT INTO guest (first, last, gbmessage, link)
VALUES ('$first', '$last', '$gbmessage', '$link')";

    $result = @mysqli_query($cnxn, $sql);

    $sql = "SELECT * FROM guest";

    $result = @mysqli_query($cnxn, $sql);

    while ($row = mysqli_fetch_assoc($result)){

        $first = $row['first'];
        $last = $row['last'];
        $link = $row['link'];
        $gbmessage = $row['gbmessage'];
        $approved = $row['approved'];

        if($approved == true){

            echo
            '<div class="row">
        <div class="col-12">
        <ul>';
            echo"
            <li>$first $last, $gbmessage, $link</li>";
            echo'    
        </ul>
        </div>
        </div>';
        }
    }



    if(isset($first)) {
        $to = "deebrecke@hotmail.com";
        $subject = 'Someone signed your Guestbook!';
        $message = "
    <ul><b>You have a new message:</b>
        <li>$first $last</li>
        <li>$gbmessage</li>
        <li>$link</li>
    </ul>
<a href='https://deedee.greenriverdev.com/portfolio/login.php'>click here to validate message</a>

";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: Self in CPanel <sender@email.com>"."\r\n";


        mail($to,$subject,$message,$headers);
    }

    ?>
</div>
</body>
</html>

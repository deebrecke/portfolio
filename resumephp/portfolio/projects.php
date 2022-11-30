
<html>
<head>
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="resumestyles.css" rel="stylesheet">
    <meta name="robots" content="noindex, nofollow">
</head>
<body>

<div class="container-fluid">

    <!--this needs to be turned into a styled header -->
    <div class="row">
        <div class="col-12 text-center">
            <h1>Deirdre "Dee" Brecke</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-md-4">
            <a href="/index.html">Home</a>
        </div>
        <div class="col-12 col-md-4">
            <a href=guestbook.php target="blank">Sign My Guestbook</a>
        </div>
        <div class="col-12 col-md-4">
            <a href=resume.php target="blank">View My Resume</a>
        </div>
    </div>


    <?php

    require '/home/deedeegr/db.php';

    $sql = "SELECT * FROM portfolio";

    $result = @mysqli_query($cnxn, $sql);

    while ($row = mysqli_fetch_assoc($result)){

        $picture = $row['picture'];
        $project_title = $row['project_title'];
        $description = $row['description'];
        $languages = $row['languages'];
        $category = $row['category'];


        echo '
    <div class="row">
        <div class="col-12 border-bottom border-2 border-dark pt-3">
    </div>
    
    <div class="row">
        <div class="col-6 picdiv">';
        echo"
                $picture";
        echo'
        </div>
    
        <div class="col-6 textdiv align-middle">';
        echo"
            <h3>Project $project_id: $project_title</h3>
            <p>$description</p>
            <h5>languages: $languages</h5>
            <h5>Project type: $category</h5>";
        echo'
        </div>
    </div>';

    }

    $conn = mySqli_connect($servername, $username, $pass, $dbname);

    ?>

    <!--this info needs to be in a styled footer -->
    <div class="row">
        <div class="col-12 col-md-6">
            <p>email: brecke.deirdre@student.greenriver.edu</p>
        </div>
        <div class="col-12 col-md-6">
            <p>phone: 206-354-9128</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-6">
            <p>github id goes here</p>

        </div>
        <div class="col-12 col-md-6">
            <a href="https://www.linkedin.com/in/dee-brecke-4908aa226/" target="blank">My LinkedIn</a>
        </div>
    </div>


</div>
</body>
</html>
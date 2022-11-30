<html>
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="resumestyles.css" rel="stylesheet" type="text/css">
    <title>Guestbook</title>
</head>

<body>

<div class="container-fluid">
    <header>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 text-center">
                <h1>Welcome to my guestbook</h1>
            </div>
        </div>
    <div
        <div class="row">
            <div class="col-6 col-md-3">
                <a href="/index.html">Home</a>
            </div>
            <div class="col-12 col-md-4">
                <a href="projects.php" target="blank">View My Projects</a>
            </div>
            <div class="col-12 col-md-4">
                <a href="resume.php" target="blank">View My Resume</a>
            </div>
        </div>


    </header>
        <div class="row">
            <div class="col-12">
                <p>Please sign in:</p>
            </div>

            <div class="col-12">
                <form name="guestinfo" action="send.php" method="POST">
                    <div class="form-group">

                        <label for="first">Your First Name</label>
                        <input type="text" class="form-control" id="first" name="first" required>

                        <label for="last">Your Last Name</label>
                        <input type="text" class="form-control" id="last" name="last" required>

                        <label for="gbmessage">Leave a Message</label>
                        <input type="text" class="form-control" id="gbmessage" name="gbmessage" required>

                        <label for="link">Social Media link: Link me to your LinkedIn or other page</label>
                        <input type="text" class="form-control" id="link" name="link" required>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <p>Here is what some previous guests said:</p>
            </div>
        </div>


        <?php

        require '/home/deedeegr/db.php';

        $sql = "SELECT * FROM guest";

        $result = @mysqli_query($cnxn, $sql);

        while ($row = mysqli_fetch_assoc($result)){

            $first = $row['first'];
            $last = $row['last'];
            $link = $row['link'];
            $gbmessage = $row['gbmessage'];
            $approved = $row['approved'];

            if($approved == true)
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

        ?>

        <!--this info needs to be in a styled footer -->
        <footer>
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
        </footer>


    </div>
</body>
</html>


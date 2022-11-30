<?php
session_start();
session_regenerate_id();
//Make sure we came from our own server

if(!strstr($_SERVER['HTTP_REFERER'],
    "https://deedee.greenriverdev.com/portfolio/login.php" && $_POST['uname'] =='gatormonkey' && $_POST['psw'] == 'deedle823'))

    die("GO AWAY HACKER!");


    echo 'I am on the page'

//pull from database select
        require '/home/deedeegr/db.php';

    $sql = "SELECT * FROM guest";

    $result = @mysqli_query($cnxn, $sql);

    $messages = array();

    while ($row = mysqli_fetch_assoc($result)){

//        $first = $row['first'];
//        $last = $row['last'];
//        $link = $row['link'];
//        $gbmessage = $row['gbmessage'];
//        $approved = $row['approved'];
//
//        $messages = array('first', 'last', 'link', 'gbmessage','approved');
    $messages[] = $row;
    print_r($messages);

//$i = 0;
//foreach ($reserved as $value) {
//    if ($reserved[$i] == 1) {
//        echo '<input type="checkbox" id="'.$extras[$i].'" name="'.$extras[$i].'" disabled>
//        <label for="'.$extras[$i].'">'.$extrastext[$i].' (not available on your date)</label><br>';
//    }else {
//        echo '<input type="checkbox" id="'.$extras[$i].'" name="'.$extras[$i].'">
//        <label for="'.$extras[$i].'">'.$extrastext[$i].'</label><br>';
//    }
//    $i++;
//}
//for each row, make it editable
//approved edit
//check box form
//have submit change status using update statement


?>

<!--I need to create a form that submits message for approval if I say
yes, but deletes it if I say no
<?php


require '/home/deedeegr/db.php';

$sql = "SELECT * FROM guest";

$result = @mysqli_query($cnxn, $sql);

$messages = array();

while ($row = mysqli_fetch_assoc($result)){

    $first = $row['first'];
    $last = $row['last'];
    $link = $row['link'];
    $gbmessage = $row['gbmessage'];
    $approved = $row['approved'];

    $messages[] = $row;

    $i=0;
    foreach($row as $value){
        $messages[i]= $first.$last.$link.$gbmessage.$approved;
    }


    echo $messages[0];
}

?>



-->


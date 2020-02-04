<?php


include_once '../dbconfig.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $seq_que = test_input($_POST['secq']);

    $sql_get_seq_ques = "SELECT seq_ques FROM user_details_table WHERE username = '$username'";
    $res = (($conn->query($sql_get_seq_ques))->fetch_assoc());

    if ($seq_que == $res['seq_ques']) {
       header("Location: ../UPDATE_PASSWORD/index.html");
    } else {
        echo "Error: ". $conn->error;
    }


}

?>
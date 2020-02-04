<?php


include_once './dbconfig.php';

if(isset($_POST['username'])) {
    $username = $_POST['username'];
    $seq_ques = $_POST['secq'];
    $sql_get_seq_ques = "SELECT seq_ques FROM user_details_table WHERE Username = $username";
    $res = $conn->query($sql_get_seq_ques);
    if ($res == $seq_ques) {
        echo "<br>";
        echo "Right";
    } else {
        echo "Error: ". $conn->error;
    }


}

?>
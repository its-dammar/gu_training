
<?php
require('../config/config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM users WHERE id =$id";
    $result = mysqli_query($conn, $select);
    if ($result) {
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?sms=deleted\">";
    }
    else{
        echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php?sms=error\">";

    }
}




?>
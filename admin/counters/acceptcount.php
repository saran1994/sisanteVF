<?php
    include '../../includes/dbconn.php';

    $sql = "SELECT idp from program WHERE status = '1'";
    $query = $dbh -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $leavtypcount=$query->rowCount();

    echo htmlentities($leavtypcount);

?>   
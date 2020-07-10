<?php
    require_once './includes/conn.php';
        $offset = date("Y-m-d");
        $stmt = "SELECT * FROM confusion.reservation WHERE date >=? ORDER BY date,time ASC";
        $sql = $conn->prepare($stmt);
        $sql->bind_param('s', $offset);
        $sql->execute();
        $result = $sql->get_result();
        $result = $result->fetch_all();
        echo json_encode($result);


        // foreach($result as $row){
        //     echo $row[0];
        //     echo $row[1];
        //     echo $row[2];
        //     echo $row[3];
        //     echo $row[4];
        // }
    ?>
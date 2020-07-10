<?php
    require_once './includes/conn.php';

    try{
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $username = $_POST['email'];
            $pass = $_POST['password'];
            if($username == 'tafreedyo@gmail.com' && $pass == 'qwertyuiop')
                header('Location: ./admin.php');
            else
                header('Location: ./index.php?error=invalid&credentials');
        }
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $sql = $conn->prepare("INSERT INTO confusion.reservation(name,guest,smoke,date,time) VALUES (?,?,?,?,?)");
            $sql->bind_param('sssss',$name,$guest, $smoke, $date, $time);
            $name = $_GET['name'];
            $guest = $_GET['guests'];
            $smoke = $_GET['Smoke'];
            $date = $_GET['date'];
            $time = $_GET['time'];
            $sql->execute();
            $conn->close();        }
    }
    catch(Error $e){
        echo $e->getMessage();
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
        
?>
<?php 

include_once 'Database.php';
if(isset($_POST['name']) && isset($_POST['id'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    try{
        $query = "UPDATE notes SET name=:name WHERE id=:id";
        $statement  = $conn->prepare($query);
        $statement->execute(array(":name"=>$name,":id"=>$id));
        if($statement->rowCount() === 1){
            echo "Title Updated";
        }else{
            echo "No Data Found";
        }
    }catch(PDOException $ex){
        echo 'Error : '.$ex->getMessage();
    }
}else if(isset($_POST['desc']) && isset($_POST['id'])){
    $desc = $_POST['desc'];
    $id = $_POST['id'];
    try{
        $query = "UPDATE notes SET description=:description WHERE id=:id";
        $statement  = $conn->prepare($query);
        $statement->execute(array(":description"=>$desc,":id"=>$id));
        if($statement->rowCount() === 1){
            echo "Body Updated";
        }else{
            echo "No Data Found";
        }
    }catch(PDOException $ex){
        echo 'erreur'.$ex->getMessage();
    }
}else if(isset($_POST['status']) && isset($_POST['id'])){
    $status = $_POST['status'];
    $id = $_POST['id'];
    try{
        $query = "UPDATE notes SET status=:status WHERE id=:id";
        $statement  = $conn->prepare($query);
        $statement->execute(array(":status"=>$status,":id"=>$id));
        if($statement->rowCount() === 1){
            echo "Status Updated";
        }else{
            echo "No Data Found";
        }
    }catch(PDOException $ex){
        echo 'Error : '.$ex->getMessage();
    }
}
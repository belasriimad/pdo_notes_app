<?php 

include_once 'Database.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    try{
        $query = "DELETE FROM  notes WHERE id=:id";
        $statement  = $conn->prepare($query);
        $statement->execute(array(":id"=>$id));
        if($statement){
            echo "Note Deleted";
        }
    }catch(PDOException $ex){
        echo 'Error : '.$ex->getMessage();
    }
}
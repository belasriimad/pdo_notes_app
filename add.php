<?php 

include_once 'Database.php';
if(isset($_POST['name']) && isset($_POST['description'])){
    $name = $_POST['name'];
    $desc = $_POST['description'];
    try{
        $query = "INSERT INTO notes(name,description,created_at)
                    VALUES (:name,:descri,now())";
        $statement  = $conn->prepare($query);
        $statement->execute(array(":name"=>$name,":descri"=>$desc));
        if($statement){
            echo "Note Added";
        }
    }catch(PDOException $ex){
        echo 'Error : '.$ex->getMessage();
    }
}
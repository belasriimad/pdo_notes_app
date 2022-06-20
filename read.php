<?php 

include_once 'Database.php';
try{
    $query = "SELECT * FROM notes";
    $statement  = $conn->query($query);
    while($note = $statement->fetch(PDO::FETCH_OBJ)){
        $output = " <tr>
                        <td title='update'><div onclick='edit(this);'
                        onblur='updateName(this,$note->id);'>$note->name</div></td>
                        <td title='update'><div onclick='edit(this);'
                        onblur='updateDesc(this,$note->id);'>$note->description</div></td>
                        <td title='update'><div onclick='edit(this);'
                        onblur='updateStatus(this,$note->id);'>$note->status</div></td>
                        <td>$note->created_at</td>
                        <td style='width: 5%;'>
                            <button class='btn btn-sm btn-danger'>
                                <i class='fas fa-trash' onclick='deleteNote($note->id);'></i>
                            </button>
                        </td>
                    </tr>";
        echo $output;
    }
}catch(PDOException $ex){
    echo 'Error : '.$ex->getMessage();
}
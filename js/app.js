//ajouter une note
$('#addForm').submit(function(e){
    e.preventDefault();
    var form = $(this);
    var formData = form.serialize();
    $.ajax({
        url : 'add.php',
        type : 'POST',
        data : formData,
        success:function(data){
            $('#ajax_msg').css('display','block').delay(3000).slideUp(300).html(data);
            document.getElementById('addForm').reset();
        }
    });
});
//afficher toutes les botes
$('#task-list').load('read.php');
//supprimer une note
function deleteNote(id){
    if(confirm("Voulez vous supprimer cette note ?")){
        $.ajax({
            url : 'delete.php',
            type : 'POST',
            data : {id:id},
            success:function(data){
                $('#ajax_msg').css('display','block').delay(3000).slideUp(300).html(data);
                $('#task-list').load('read.php');
            }
        });
    }
}
//rendre les valeurs modifiable
function edit(div){
    div.style.border = "1px solid lavender";
    div.style.padding = "5px";
    div.style.background = "white";
    div.contentEditable = true;
}
//modifier le titre d'une note
function updateName(div,id){
    var data = div.textContent;
    div.style.border = "none";
    div.style.padding = "0";
    div.style.background = "#ececec";
    div.contentEditable = false;
    $.ajax({
        url : 'update.php',
        type : 'POST',
        data : {name:data,id:id},
        success:function(data){
            $('#ajax_msg').css('display','block').delay(3000).slideUp(300).html(data);
        }
    });
}
//modifier la description d'une note
function updateDesc(div,id){
    var data = div.textContent;
    div.style.border = "none";
    div.style.padding = "0";
    div.style.background = "#ececec";
    div.contentEditable = false;
    $.ajax({
        url : 'update.php',
        type : 'POST',
        data : {desc:data,id:id},
        success:function(data){
            $('#ajax_msg').css('display','block').delay(3000).slideUp(300).html(data);
        }
    });
}
//modifier l'etat d'une note
function updateStatus(div,id){
    var data = div.textContent;
    div.style.border = "none";
    div.style.padding = "0";
    div.style.background = "#ececec";
    div.contentEditable = false;
    $.ajax({
        url : 'update.php',
        type : 'POST',
        data : {status:data,id:id},
        success:function(data){
            $('#ajax_msg').css('display','block').delay(3000).slideUp(300).html(data);
        }
    });
}
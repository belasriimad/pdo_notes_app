<?php include("includes/header.php");?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header bg-white">
                    <h3 class="text-dark">Add Note</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post" id="addForm">
                        <div class="form-group mb-2">
                            <label for="name" class="form-label">Title</label>
                            <div class="col-md-10">
                                <input 
                                    name="name" 
                                    class="form-control" 
                                    required
                                    id="name" type="text"
                                >
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="description" class="form-label">Body</label>
                            <div class="col-md-10">
                                <textarea class="form-control" required rows="3" name="description" id="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" name="add" class="btn btn-success pull-right">
                            Submit <i class="fas fa-plus"></i></button>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php");?>
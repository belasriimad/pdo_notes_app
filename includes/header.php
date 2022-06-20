<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pdo Notes</title>
    <!-- Bootstrap CSS cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <!-- Fontawesome & Ripples css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/ripples.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="css/app.css">
</head>

<!-- Navigation -->
<div class="container">
    <nav class="navbar navbar-expand-lg bg-danger navbar-dark rounded">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="create.php">Create</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- App Alert-->
<div class="row">
    <div class="col-md-6 mx-auto my-3">
        <div id="ajax_msg" class="alert alert-success"></div>
    </div>
</div>
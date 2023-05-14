<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <?php
    include "connectdb.php";
    $id = $_GET['id'];
    echo '<h1> Edit User : ' . $id . '</h1>';
    echo '<form class="row g-3" action="outputUpdate.php?id=' . $id . '" method="post" enctype="multipart/form-data">';
        echo '
        
        <div class="col-12">         
            <label class="form-label" for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="role">Role</label>
            <select id="role" name="role" class="form-select">
                <option selected>Choose Role</option>
                <option value="Admin">Admin</option>
                <option value="Staff">Staff</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label" fo="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="col-12">
            <label class="form-label" for="address">Address</label>
            <textarea class="form-control" id="address" name="address"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label" for="avatar">Upload Photo</label>
            <input class="form-control" type="file" id="avatar" name="avatar" accept="image/png, image/jpg, image/jpeg">
        </div>
        <div class="col-12">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>'
    
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
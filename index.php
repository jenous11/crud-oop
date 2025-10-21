

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">

</head>

<body>

    <form action="add-user.php"   method="get" >
        
        <div class="d-grid justify-content-center mt-5"> 
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label  class="form-label">Email address</label>
            <input type="email" name="email" class="form-control">
        </div>
        
        <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" name="password" class="form-control" >
        </div>

        <button type="submit" class="btn btn-success">add</button>
        </div>
    
    </form>



</body>

</html>
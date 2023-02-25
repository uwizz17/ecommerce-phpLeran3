<?php include 'controllers/db-con.php'; ?>
<?php include 'controllers/product-updateCon.php';?>

<?php
$id = $_GET['id']; // get id through query string


$sql = "SELECT * FROM products where product_id=$id";
$result = $conn->query($sql);



?>









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="style.css">

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="index.php" style="color: #fff;">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manage-category.php" style="color: #fff;">manage category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manage-product.php" style="color: #fff;">manage product</a>
                </li>

            </ul>
        </div>
    </nav>

</head>


<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Product insert
                    </div>

                    <?php
                    while ($row = $result->fetch_assoc()) {
                       

                    ?>

                        <div class="card-body">
                            <form action="update-product.php?id=<?php echo $row['product_id']; ?>" method="POST" class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label">name</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">description</label>
                                    <input type="password" class="form-control" name="description"  value="<?php echo $row['description']; ?>">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">weight</label>
                                    <input type="text" class="form-control" name="weight"  value="<?php echo $row['weight']; ?>">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">color</label>
                                    <input type="text" class="form-control" name="color"  value="<?php echo $row['color']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">price</label>
                                    <input type="text" class="form-control" name="price"  value="<?php echo $row['price']; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">cost</label>
                                    <input type="text" class="form-control" name="cost"  value="<?php echo $row['cost']; ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">image</label>
                                    <input type="text" class="form-control" name="image"  value="<?php echo $row['image']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">inventory</label>
                                    <input type="text" class="form-control" name="inventory"  value="<?php echo $row['inventory']; ?>">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">category</label>
                                    <select id="inputState" name="category" class="form-select"  value="<?php echo $row['category']; ?>">
                                        <option selected value="1">Choose...</option>
                                        <option value="2">Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>


                    <?php

                    }
                    ?>
                </div>
            </div>
            <div class="col-3"></div>



        </div>
    </div>



</body>

</html>
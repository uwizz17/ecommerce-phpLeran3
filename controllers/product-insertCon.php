<?php include 'db-con.php';?>

<?php
// PHP program to pop an alert
// message box on the screen
  
// Display the alert box 



 // Taking all 5 values from the form data(input)
 $name =  $_REQUEST['name'];
 $description = $_REQUEST['description'];
 $weight =  $_REQUEST['weight'];
 $color = $_REQUEST['color'];
 $price = $_REQUEST['price'];
 $cost = $_REQUEST['cost'];
 $image = $_REQUEST['image'];
 $inventory = $_REQUEST['inventory'];
 $category = $_REQUEST['category'];


if(isset($name) && isset($description) && isset($weight) && isset($color) && isset($price) && isset($cost) && isset($image) && isset($inventory) && isset($category)  ){



 $sql = "INSERT INTO products  VALUES ('0','$category',
 '$name','$description','$weight','$color','$price','$cost','$image','$inventory','1000-01-01','')";


if(mysqli_query($conn, $sql)){
    echo '<script>alert("Data insert Successfully")</script>';


   
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    echo '<script>alert("ERROR: Hush! Sorry")</script>';

}
}
// $conn->close();
  
?>
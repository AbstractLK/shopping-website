<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ADD ITEM</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <h2>Input Product Details</h2>
        <br>
        
        <form class="form-horizontal" method = "POST">

            <div class="form-group">
                <label class="control-label col-sm-2">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Price</label>
                <div class="col-sm-10">          
                    <input type="text" class="form-control" id="price" placeholder="Enter Item Price" name="price">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Image URL</label>
                <div class="col-sm-10">          
                    <input type="text" class="form-control" id="url" placeholder="Enter Image URL" name="url">
                </div>
            </div>

            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name = "submit" class="btn btn-info" onclick = "myBtn()">Add Item</button>
                    <a href="admin.php"><button type="button" class="btn btn-default" >Home</button></a>
                </div>
                
            </div>
        </form>
    </div>

    <?php

        include("dbConnect.php");

        $conn = getDbConnection();

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }else{
            //echo "connection okey";
        }

        // Taking all values from the form data(input)
        $title = isset($_POST['title']) ? $_POST['title'] : null;
        $price = isset($_POST['price']) ? $_POST['price'] : null;
        $url = isset($_POST['url']) ? $_POST['url'] : null;
        //$title =  $_GET['title'];
        // $price = $_GET['price'];
        // $url =  $_GET['url'];
        //echo "'$title', $price, '$url'";

        $sql = "INSERT INTO products (title, price, thumbnail) VALUES ('$title', $price, '$url')";
        //echo "$sql";

        if (isset($_POST['submit'])) {
            mysqli_query($conn, $sql);
            // if(mysqli_query($conn, $sql)){
            //     echo "<h3>data stored in a database successfully</h3>";
            //     //echo "hi".mysqli_num_row($result);

            //     echo nl2br("\n$title\n $price\n $url");
            // } else{
            //     echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            // }
        }
        

        // Close connection
        mysqli_close($conn);
    ?>

    <!-- <script src = "scripts.js"> </script> -->
    
    <script>
        function myBtn(){
            alert("Data stored in a database successfully");
        }
    </script>

</body>
</html>
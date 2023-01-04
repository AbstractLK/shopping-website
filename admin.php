<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>

    <div class="container">
        <br>
       

        <div class="row" id="qq">
            <nav class="navbar justify-content-center bg-primary" id="nav">
                <h4 class="title">Items</h4>
            </nav>
        </div>

        <div class="products row" style="background-color:aquamarine;">

            <?php
                include("dbConnect.php");

                $conn = getDbConnection();

                // SQL QUERY
                $query = "SELECT * FROM products";

                // FETCHING DATA FROM DATABASE
                $result = $conn->query($query);

                if ($result->num_rows > 0)
                {
                    // OUTPUT DATA OF EACH ROW
                    while($row = $result->fetch_assoc())
                    {
                        echo "<div class='col-md-2 card text-center' style='width: 200px; margin: 30px; padding: 15px 2px;'>
                                <img src='" . $row["thumbnail"]. "' class='card-img-top' style='padding-top:15px'>
                                <div class='card-body'>
                                    <h5 class='card-title txt' id='text1'> ". $row['title']." </h5>
                                    <h5><span>&dollar;</span>" . $row["price"]. "</h5>
                                </div>
                                <div class='card-footer' style='padding: 10px;'>
                                    <button class='btn btn-primary' onclick= \"addToCart({id: ". $row['id']." , name: '". $row['title']."' })\" >Add to Cart</button>
                                </div>
                            </div> ";
                    }
                }
                else {
                    echo "0 results";
                }

                $conn->close();

            ?>


        </div>
        <br>
        <a href="insert.php" type="button" id = "addbtn" style = "margin-right: 5px;" class="btn btn-success">ADD</a>
        <button type="button" class="btn btn-warning" style = "margin-right: 5px;">Update</button>
        <button type="button" class="btn btn-danger">Delete</button>
        <br><br>

    </div>

    <script src='scripts.js'></script>
</body>

</html>
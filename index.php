<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</head>

<body>
    
    <div class="container">

        <!-- <div class="row" id="qq">
            <nav class="d-flex flex-row py-2  navbar bg-primary" id="nav">
                <span class="title font-extrabold" style="font-size: 30px">My Store</span>
                <span class="" style="font-size: 20px; align:left">hello</span>
            </nav>
        </div><br/> -->

        
        <div class="row ">
            <nav class=" navbar navbar-dark bg-dark justify-content-between" style="padding:10px 15px 10px 15px">
                <a class="navbar-brand">Home</a>
                <a class="navbar-brand">My Store</a>
                <form class="form-inline">
                    <button  style="padding:5px 20px 5px 20px" class="btn btn-outline-success my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></button>
                </form>
            </nav>
        </div>
        <br/>

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
                        echo "<div class='col-md-2 card text-center' style='width: 270px; margin: 30px; padding: 15px 2px;'>
                                <img width='300px' height='200px' src='" . $row["thumbnail"]. "' class='card-img-top' alt='A03s' style='padding-top:15px'>
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

        <!-- <div class="row">
            <hr>
        </div>
        <div class="row bg-warning">
            <h4 class="text-center title">Cart</h4>
        </div>
        <div class="row bg-warning">
            <div class="col-md-2">
                <img src="Assets/cart.png" style="width: 80px; margin-left: 30px; margin-bottom: 30px;">
            </div>
            <div class="col-md-8">
                <h5>--Items--</h5>
                <ol id="list"></ol>
            </div>
            <div class="col-md-2"></div>
        </div> -->
        <br>
    </div>

    <script src="scripts.js"> </script>
</body>

</html>
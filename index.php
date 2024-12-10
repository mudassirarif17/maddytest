<?php 
include('./connection.php');


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Insert & Read File</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container my-5 w-50">
            <h1 class="text-center mt-4">Insert Category</h1>
        <form action="./insert.php" method="POST">
            <div class="my-2">
                <input type="text" name="name" placeholder="Name" class="form-control">
            </div>
            <div class="my-2">
                <select name="manager" class="form-control">
                    <option>None</option>
                    <?php
                    $q = "select * from categories where parent_id is NULL";
                    $res = mysqli_query($con , $q);
                    foreach($res as $r){
                        echo "<option value='$r[id]'>$r[id]</option>";
                    }
                    ?>
                    
                </select>
            </div>
            <div class="my-2">
                <button class="btn btn-primary" name="sbt">Submit</button>
            </div>
        </form>





   
        </div>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
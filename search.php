
    <?php
            include('/brief/db.php');
            include 'header.php';
            
            $seraching = isset($_POST['seraching']) ? $_POST['seraching'] :'';

            $sqli = "SELECT * FROM data WHERE title LIKE'$seraching%'";
            $RESULTS = mysqli_query($connect, $sqli);

            while($row= mysqli_fetch_assoc($RESULTS))
            {
                ?>
        <h1 style="color: rgb(99, 20, 228);font-size:x-large;text-align:left;margin-top:20px;margin-left:20px;">
            <?php echo $row['title'] ?>
        </h1>
        <div class="container">
            <div class="row">
                <div class=" col-lg-6  col-md-8" style="display: inline-block; ">
                    <form action="" style="background-color: rgba(128, 128, 128, 0.719);width:100%;height: 400px;margin-left: 50px;border-radius:10px;margin-top: 50px; padding-top: 20px;">
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;">  NAME: <?php echo $row['title'] ?></span>
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;">  AUTHOR: <?php echo $row['author'] ?></span>
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;"> PRIX: <?php echo $row['prix'] ?></span>
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;"> QUNATITE AU STOCK: <?php echo $row['quantite'] ?></span>
                        <span style="color: rgb(99, 20, 228);font-size:x-large;display: block;margin-top:20px;margin-left: 50px;"> DATE DE PUBLICATION: <?php echo $row['pub'] ?></span>
                    </form>
                </div>

                <div class="col-lg-6 col-md-4">
                    <center><img class="card-img-top" src="<?php echo $row['image'] ?>" alt="Card image cap" style="border:2px solid black;width: 40%; position: absolute;bottom: 200px; "></center>

                </div>
                <?php 

            }
        

           ?>

            </div>
        
   
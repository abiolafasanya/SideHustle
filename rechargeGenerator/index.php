<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Recharge Pin Generator</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center ">
            <h1 class="text-info">Recharge pin</h1>
            <a href="index.php" class="btn btn-primary m-auto">Back to Home</a>
        </div>
        <h1 class="text-center">Recharge pin</h1>
        <div class="row justify-content-center">
            <ol class="list-group">

                    <?php
                    // recharge pin generator
                    
                    for($x = 0; $x <200; $x++ ){
                        echo 
                            '<li class="list-group-item">'.
                                'Recharge Pin Number:'. '<br>'
                            . $pinRand =  random_int(1000000000000000, 9000000000000000).
                            '</li>'
                        ;                
                    }
                    ?>

            </ol>
        </div>

</div>
</body>
</html>



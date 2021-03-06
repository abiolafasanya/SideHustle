<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Session and Cookies</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron text-center ">
            <h1 class="text-info">Difference cookies and session</h1>
            <a href="index.php" class="btn btn-primary m-auto">Back to Home</a>
        </div>
        <div class="row justify-content-center">
            <h5 class="col-12 text-center">Cookies</h5>
            <ul class="list-group">
                <li class="list-group-item">cookies are client-side files that contain user information</li>
                <li class="list-group-item">cookies are stored in the browser/li>
                <li class="list-group-item">A cookie can keep information in the browser until deleted</li>
                <li class="list-group-item">If you set Variable to cookies then your users will not have to log in</li>
            </ul>
        </div>
        
        <div class="row justify-content-center">
            <h5 class="col-12 text-center">Session Variable</h5>
            <ul class="list-group">
                <li class="list-group-item">session are sever-sidefiles that can contain user information</li>
                <li class="list-group-item">session are not stored in the browser</li>
                <li class="list-group-item">session data will be removed if you close your browser</li>
                <li class="list-group-item">If you set the variable to session then the user activity will be tracked</li>
            </ul>
        </div>
    </div>
</body>
</html>
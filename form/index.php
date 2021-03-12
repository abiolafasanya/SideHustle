<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Contact - Fastbeetech</title>
</head>
<body>
    <div class="container">

    <div class="jumbotron text-center">
        <h1 class="text-info">Contact Form</h1>
        <a href="../index.php" class="btn btn-primary">Home</a>
    </div>
    <?php
        if(isset($_GET['success'])):
    ?>
    <div class="alert alert-success">Thank You For Contacting Me. Your message has been sent.</div>
    <?php endif; ?>
        <div class="row justify-content-center">
            <form action="process.php" method="post" id="contact">
            <p>Please drop your suggestion and advice</p>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="" class="form-control" required>
                </div>
                <div class="form-group">
                <label for="message">Message</label>
                    <textarea name="message" id="" class="form-control" cols="30" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                </div>
            </form>

            <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
            <script src="main.js"></script>

        </div>
    </div>
</body>
</html>
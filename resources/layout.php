
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <title>Moodslider</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm navbar-light bg-light mb-5">
        <div class="navbar-brand card" style="width: 10rem;" >
            <img class="card-img" src="images/logo.jpg">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column " id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <h4>Moodslider</h4>
                </li>               
            </ul>
            <ul class="navbar-nav mr-auto mb-1" style="color: #A9A9A9">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Slider</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?content=uploadView">Upload Content</a>
                </li>
            </ul>
            </div>
</nav>

<!--  Body  -->

        <div class="container">
            <?php include_once 'resources/routes.php'; ?>

        </div>


    </body>
</html>



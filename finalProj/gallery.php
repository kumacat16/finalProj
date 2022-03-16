<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/02b034fe5f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-con" href="favicon/favicon.ico">
    <link rel="manifest" href="favicon/site.webmanifest">
    <title>Danny Brown</title>

</head>

<body>
    <header>

        <div class="logo">
            <div class="logoImg">
                <img src="Images/danny/logo.png">
            </div>
            <nav>
                <label class="label" for="toggle"><i class="fas fa-bars"></i></label>
                <input type="checkbox" id="toggle">
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="blogMain.php">Blog</a></li>
                    <li><a href="about.php">About Me</a></li>
                    <li><a href="contact.php">Contact</a></li>

                </ul>
            </nav>
        </div>
    </header>
    <main>
        <main>

            <div class="directorGal">
                <div class="left">
                    <h1 class="maingalText">GALLERY</h1>
                </div>
                <div class="rightside">
                    <div class="gallPhoto">
                        <img src="Images/Toys/nendoroids/nar.png">
                        <button class="galBtn"><a href="galleryPhoto.php">Toy Photography</a></button>
                    </div>

                    <div class="gallGD">
                        <img src="Images/art/pokemon.png">
                        <button class="galBtn"><a href="galleryGD.php">Graphic Design</a></button>
                    </div>
                    <div class="gallArt">
                        <img src="Images/art/abstractPort.png">
                        <button class="galBtn"><a href="galleryArt.php">Fine Art</a></button>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </main>

        <footer>
            <section class="socials">
                <div class="insta">
                    <a href="https://www.instagram.com/blanketboystoys/"><i class="fab fa-instagram"></i></a>
                </div>
                <div class="youtube">
                    <a href="https://www.youtube.com/channel/UCOoSkSId2uUVWv3FA23ifjw"><i
                            class="fab fa-youtube"></i></a>
                </div>

            </section>
        </footer>

        <!--Required JavaScript-->
</body>

</html>

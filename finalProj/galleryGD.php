<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/02b034fe5f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/baguetteBox.css">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/brands.css">
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
    <section class="GDsection">

        <div class="GDgallery">
            <div class="card">
                <a href="Images/Toys/otherBrands/rowlet.png">
                    <img src="Images/Toys/otherBrands/rowlet.png" alt="">
                </a>

            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/bakugo.png">
                    <img src="Images/Toys/otherBrands/bakugo.png" alt="">
                </a>
                
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/cartoonjoker.png">
                    <img src="Images/Toys/otherBrands/cartoonjoker.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/dc.png">
                    <img src="Images/Toys/otherBrands/dc.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/gun.png">
                    <img src="Images/Toys/otherBrands/gun.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/gundam.png">
                    <img src="Images/Toys/otherBrands/gundam.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/harley.png">
                    <img src="Images/Toys/otherBrands/harley.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/ironfist.png">
                    <img src="Images/Toys/otherBrands/ironfist.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/joker.png">
                    <img src="Images/Toys/otherBrands/joker.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/levi.png">
                    <img src="Images/Toys/otherBrands/levi.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/optimusbumble.png">
                    <img src="Images/Toys/otherBrands/optimusbumble.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/rorschach.png">
                    <img src="Images/Toys/otherBrands/rorschach.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/spidermann.png">
                    <img src="Images/Toys/otherBrands/spidermann.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/otherBrands/todoroki.png">
                    <img src="Images/Toys/otherBrands/todoroki.png" alt="">
                </a>
            </div>
            <div class="card">
                <a href="Images/Toys/aboutMe/halloween.png">
                    <img src="Images/Toys/aboutMe/halloween.png" alt="">
                </a>
            </div>
        </div>
        </div>
    </section>

    </main>

    <footer>
        <section class="socials">
            <div class="insta">
                <a href="https://www.instagram.com/blanketboystoys/"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="youtube">
                <a href="https://www.youtube.com/channel/UCOoSkSId2uUVWv3FA23ifjw"><i class="fab fa-youtube"></i></a>
            </div>

        </section>
    </footer>
    <!--Required JavaScript-->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="js/jquery.cycle.all.js"></script>
    <script src="js/baguetteBox.js"></script>


    <script>
        //baguetteBox run
        baguetteBox.run('.GDgallery',{
            animation: 'fadeIn'
        });
    </script>
</body>

</html>
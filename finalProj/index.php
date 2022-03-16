<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!--<script src="https://kit.fontawesome.com/02b034fe5f.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="css/main.css">
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
            </nav>
        </div>
    </header>
    <main>

        <section class="indexMain">
            <div class="mainWelcome">
                <div class="welText">
                    <h1>Designer, Artist, Photographer, Editor</h1>
                    <button><a href="gallery.php">Explore My Work</a></button>
                </div>
                    <img src="Images/art/babydanny.png" alt="">
                
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




    <!--Required JavaScript// COMEBACK AND FIT-->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>


    <script src="js/owl.carousel.js"></script>

    <script src="js/simpleLightbox.js"></script>

    <script>
        //SLIDER

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            dotsEach: true,
            animateOut: true,
            responsive: {
                0: { item: 1 },
                600: { item: 2 },
                1000: { item: 5 }
            }

        });
        //baguetteBox
        baguetteBox.run('.gallery', {
            animation: 'fadeIn',
        });
        //lightBox
        $('.gallery a'), simplelightbox();
    </script>
</body>

</html>
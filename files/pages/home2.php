<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Feng3-2</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/home2.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://kit.fontawesome.com/4503cd8997.js" crossorigin="anonymous"></script>

    <!-- <link href="https://fonts.googleapis.com/css?family=Oswald:200|Roboto:300i&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Oswald:200|Roboto:300i,400i&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Oswald:200,400|Roboto:300i,400i&display=swap" rel="stylesheet"> -->

<body>

    <div class="container">

        <div class="menu">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">FENG SHUI</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>

        </div>
        <div class="menu-btn">
            <i class="fas fa-bars fa-2x"></i>
        </div>


        <div class="feng-box">
            <div class="feng-box__upper">
                Essential
            </div>
            <div class="feng-box__lower">
                <div class="text-upper">
                    FENG
                </div>
                <div class="text-lower">
                    SHUI
                </div>
            </div>
        </div>

        <div class="balance">
            <p>Learn how to live in balance with your universe.
                By following a path to an uncluttered lifestyle
                we can change your life to one of peaceful
                coexistence at home and at work.</p>
        </div>

        <div class="circle">
            <div class="circle-top">
                CHANGE
            </div>
            <div class="circle-top">
                YOUR LIFE
            </div>
            <div class="circle-bottom">
                24/7
            </div>


        </div>

    </div>

    <script>
        document.querySelector('.menu-btn').addEventListener('click', () =>
            document.querySelector('.main-menu').classList.toggle('show')
        );
    </script>

</body>

</html>
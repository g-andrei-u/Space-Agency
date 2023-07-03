<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="./style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<title>Space Agency</title>
</head>
<body>
	<header>
        <?php
        session_start();
        if (!isset($_SESSION['nav_class'])) {

            $_SESSION['nav_class'] = "close";
        }

        if (isset($_POST['btn-nav'])) {
            if ($_SESSION['nav_class'] === "close") {

                $_SESSION['nav_class'] = "navigation-bar";
            } else {

                $_SESSION['nav_class'] = "close";
            }
        }

        if (isset($_POST['btn-close'])) {
            if ($_SESSION['nav_class'] === "close") {

                $_SESSION['nav_class'] = "navigation-bar";
            } else {

                $_SESSION['nav_class'] = "close";
            }
        }
        ?>
		<nav>
            <form method="post">
                <input type="submit" name="btn-nav" value="NAV">
            </form>
            <div class="<?= $_SESSION['nav_class']?>">
                <form method="post">
                    <input type="submit" name="btn-close" value="X">
                </form>
                <a>Home</a>
                <a>About</a>
                <a>Careers</a>
                <a>Space and More</a>
            </div>
        </nav>
        <h1>The Space Agency</h1>
	</header>
	<main>
		<section class="first-mission">
            <h2>SCIENCE & EXPLORATION</h2>
            <h1>Euclid liftoff</h1>
            <p>01/07/2023 943 VIEWS 34 LIKES</p>
            <button>PLAY</button>
        </section>

        <section class="squares">
            <div class="square-links">
                <h2>Vision</h2>
                <div>
                    <p>Agenda 2025</p>
                    <p>Accelerators</p>
                    <p>Advisory group report</p>
                    <p>Revolution Space</p>
                </div>
            </div>
            <div class="square-links">
                <h2>Programmes</h2>
                <div>
                    <p>Space Science</p>
                    <p>Human and Robotic Exploration</p>
                    <p>Observing the Earth</p>
                    <p>Connectivity</p>
                </div>
            </div>
            <div class="square-links">
                <h2>Pillars</h2>
                <div>
                    <p>Science & Exploration</p>
                    <p>Space Safety</p>
                    <p>Applications</p>
                    <p>Enabling & Support</p>
                </div>
            </div>
            <div class="square-links">
                <h2>You</h2>
                <div>
                    <p>Careers at ESA</p>
                    <p>Business with ESA</p>
                    <p>Advisory group report</p>
                    <p>Revolution Space</p>
                </div>
            </div>
        </section>

        <section>
            <div>
                <h1>In the spotlight</h1>
                <button>All</button>
                <button>STORIES</button>
                <button>VIDEOS</button>
                <button>IMAGES</button>
            </div>
            <div>
                <div>
                    <h3></h3>
                    <p></p>
                    <button>VIEW</button>
                </div>
            </div>
        </section>
	</main>
	<footer>
		<p>© 2023 My Company</p>
	</footer>
</body>
</html>
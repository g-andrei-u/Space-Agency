<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="./style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
	<title>Space Agency</title>
    <template>
    $('div #Wrapper-notify').load('http://yoursite.com #newContent');
    </template>
</head>
<body>
    <?php 
    include 'Array.php';
    ?>
	<header id="here2">
        <?php
        session_start();
        if (!isset($_SESSION['nav_class'])) {

            $_SESSION['nav_class'] = "close";
        }

        if (isset($_POST['btn-nav'])) {
            if ($_SESSION['nav_class'] === "close") {

                $_SESSION['nav_class'] = "navigation-bar";
                header("Location: #here2");
                exit();
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
        <h2>The Space Agency</h2>
	</header>
	<main>
		<section class="first-mission">
            <h2>SCIENCE & EXPLORATION</h2>
            <h1>Euclid lifts off on quest to unravel the cosmic mystery of dark matter and dark energy</h1>
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

        <section id="here">
            <div class="heading">
                <h1>In the spotlight</h1>
                <div>
                    <?php
                    $filteredStories = $stories;

                    if (isset($_POST['all'])) {
                        $filteredStories = $stories;

                        header("Location: #here");
                        exit();
                    } elseif (isset($_POST['story'])) {

                        $filteredStories = array_filter($stories, function ($story) {
                            return $story['type'] === 'story';
                        });
                    } elseif (isset($_POST['video'])) {

                        $filteredStories = array_filter($stories, function ($story) {
                            return $story['type'] === 'video';
                        });
                    } elseif (isset($_POST['image'])) {

                        $filteredStories = array_filter($stories, function ($story) {
                            return $story['type'] === 'image';
                        });
                    }
                    ?>
                    <form method="post" id="buttons">
                        <button type="submit" name="all">ALL</button>
                        <button type="submit" name="story">STORIES</button>
                        <button type="submit" name="video">VIDEOS</button>
                        <button type="submit" name="image">IMAGES</button>
                    </form>
                </div>
            </div>
            <ul class="stories">
                <?php foreach ($filteredStories as $story): ?>
                <li class="story">
                    <div>
                        <img src="<?= $story["src"] ?>" />
                    </div>
                    <div>
                        <h3><?= $story["title"] ?></h3>
                        <p><?= $story["date"] ?></p>
                        <button>READ</button>
                    </div>
                </li>
                <?php endforeach ?>
            </ul>
        </section>

        <section class="second-mission">
            <h2>SCIENCE & EXPLORATION</h2>
            <h1>The Sun in high resolution</h1>
            <p>01/07/2023 943 VIEWS 34 LIKES</p>
            <button>PLAY</button>
        </section>
	</main>
	<footer>
        <h5>The Space Agency</h5>
        <p>FAQ</p>
		<p>Contacts</p>
		<p>Terms and conditions</p>
		<p>Privacy notice</p>
	</footer>
</body>
</html>
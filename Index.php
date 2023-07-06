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
	<header id="header1">
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
            if ($_SESSION['nav_class'] === "navigation-bar") {

                $_SESSION['nav_class'] = "close";
            }
        }
        ?>
		<nav>
            <form method="post">
                <button type="submit" name="btn-nav" value="NAV">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
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
                <ul>
                    <li><p>Agenda 2025</p></li>
                    <li><p>Accelerators</p></li>
                    <li><p>Advisory group report</p></li>
                    <li><p>Revolution Space</p></li>
                 </ul>
            </div>
            <div class="square-links">
                <h2>Programmes</h2>
                <ul>
                    <li><p>Space Science</p></li>
                    <li><p>Human and Robotic Exploration</p></li>
                    <li><p>Observing the Earth</p></li>
                    <li><p>Connectivity</p></li>
                </ul>
            </div>
            <div class="square-links">
                <h2>Pillars</h2>
                <ul>
                    <li><p>Science & Exploration</p></li>
                    <li><p>Space Safety</p></li>
                    <li><p>Applications</p></li>
                    <li><p>Enabling & Support</p></li>
                </ul>
            </div>
            <div class="square-links">
                <h2>You</h2>
                <ul>
                    <li><p>Careers at ESA</p></li>
                    <li><p>Business with ESA</p></li>
                    <li><p>Advisory group report</p></li>
                    <li><p>Revolution Space</p></li>
                </ul>
            </div>
        </section>

        <section id="here">
            <div class="heading">
                <h1>In the spotlight</h1>
                <div>
                    <?php
                    $filteredStories = $stories;

                    function filtering() {
                        global $filteredStories, $stories;

                        if (isset($_POST['all'])) {
                            $filteredStories = $stories;
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
                    }

                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SESSION['nav_class'] = "close") {
                        filtering();
                        echo '<script>window.location = "#here";</script>';
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
                        <button>VIEW</button>
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

        <section>
            <div class="heading">
                <h1>Recommeded</h1>
            </div>
            <ul class="stories">
                <?php foreach ($recomended as $info): ?>
                <li class="story">
                    <div>
                        <img src="<?= $info["src"] ?>" />
                    </div>
                    <div>
                        <h3><?= $info["title"] ?></h3>
                        <p><?= $info["details"] ?></p>
                        <button>READ</button>
                    </div>
                </li>
                <?php endforeach ?>
            </ul>
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
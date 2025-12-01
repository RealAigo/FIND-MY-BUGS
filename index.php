<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find My Bugs</title>
    <link rel="stylesheet" href="./style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>

<body>
    <div class="cursor"></div>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">FIND <span>MY</span> BUGS</div>
        <ul>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Researchers</a></li>
            <li><a href="#" class="btn">Sign In</a></li>

        </ul>
    </nav>

    <button class="menu-button" data-menu-toggle>
        <span class="menu-text">Menu</span>
    </button>
    <div class="nav-overlay">
        <div class="wipe-panel panel-1"></div>
        <div class="wipe-panel panel-2"></div>
        <div class="wipe-panel panel-3"></div>

        <nav class="nav-menu">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">Work</a>
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Contact</a>
        </nav>

        <button class="close-button" data-menu-toggle>Close</button>
    </div>
    <!-- HERO SECTION -->
    <section class="hero">
        <div class="content">
            <h1 id="heroTitle">Find Vulnerabilities.<br>Reward Researchers.<br>Secure <br>Your Apps.</h1>
            <br><br>
            <a href="#" class="cta">Launch Program</a>
            <a href="#" class="cta secondary">Become a Researcher</a>
        </div>

        <div class="bg-lines">
            <img class="bug" src="assets/img/bug.png">
        </div>
        <canvas id="particles"></canvas>
    </section>

    <!-- SECTION 2 -->
    <section class="info">
        <h2>Why Choose <span>Find My Bugs?</span></h2>
        <p class="infoText">
            A modern bug bounty marketplace where companies meet elite security hackers.
            Secure your digital assets with real-world offensive testing.
        </p>
    </section>

    <script src="./script.js"></script>
</body>

</html>
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

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="content">
            <h1 id="heroTitle">Find Vulnerabilities.<br>Reward Researchers.<br>Secure Your Apps.</h1>
            <p>Launch bug bounty programs. Pay only for real security findings.</p>

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
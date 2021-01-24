<!---- HEAD ---->
<?php include('./vue/head.php') ?>
<!---- BODY ---->
<body>
    <main id="home">
        <div id="slider">
            <span class="item-slider"><img src="./assets/img/audi.webp" alt="Hélicoptère de l'armée américaine" width="600" height="600"></span>
            <span class="item-slider"><img src="./assets/img/porsche.webp" alt="Hélicoptère de l'armée américaine" width="600" height="600"></span>
            <span class="item-slider"><img src="./assets/img/helico.webp" alt="Hélicoptère de l'armée américaine" width="600" height="600"></span>
            <span class="item-slider"><img src="./assets/img/submarine.webp" alt="Hélicoptère de l'armée américaine" width="600" height="600"></span>
        </div>
        <div id="interface">
            <header>
                <nav class="nav-ctn">
                    <ul>
                        <li><a href="#">explore</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                </nav>
            </header>
            <div class="slider-addon">
                <div class="round-btn">
                    <span class="round"></span>
                    <span class="round"></span>
                    <span class="round"></span>
                    <span class="round"></span>
                </div>
            </div>
            <footer>
                <div class="name">
                    <span><h1>Quentin Leduff</h1></span>
                    <span><h2>CG Artist</h2></span>
                </div>
            </footer>
        </div>
        <div id="indicator-slider"></div>
    </main>
</body>
<!---- FOOTER ---->
<?php include('./vue/footer.php') ?>
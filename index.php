<!---- HEAD ---->
<?php include('./vue/head.php') ?>
<!---- BODY ---->
<body>
    <main id="home">
        <div id="menu">
            <div class="title">
                <span><h3 class="returnHome">Quentin Leduff</h3></span>
                <span><h4 class="returnHome">CG Artist</h4></span>
            </div>
            <div class="list-icons">
                <ul>
                    <li>
                        <a href="#" target="_blank"><img src="./assets/icons/behance.svg" alt="Behance link" class="icons" width="20" height="20"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><img src="./assets/icons/youtube.svg" alt="Youtube link" class="icons" width="20" height="20"></a>
                    </li>
                    <li>
                        <a href="#" target="_blank"><img src="./assets/icons/facebook.svg" alt="Facebook link" class="icons" width="20" height="20"></a>
                    </li>
                </ul>
            </div>
            <div class="menu-list">
                <div class="inner-menu-list">
                    <div class="block-menu-1">
                        <ul>
                            <li class="title-list"><a href="#">My Story</a></li>
                            <li><a href="#">Me</a></li>
                            <li><a href="#">Digital Painting</a></li>
                            <li><a href="#">Photographe</a></li>
                            <li><a href="#">Artbook</a></li>
                        </ul>
                        <ul>
                            <li class="title-list"><a href="#">CG Portfolio</a></li>
                            <li><a href="#">Vehicles</a></li>
                            <li><a href="#">Scenes</a></li>
                            <li><a href="#">Organic</a></li>
                            <li><a href="#">Movies</a></li>
                        </ul>
                    </div>
                    <div class="block-menu-2">
                        <ul>
                            <li class="title-list"><a href="#">3D Visualizer</a></li>
                        </ul>
                        <ul>
                            <li class="title-list"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="close-menu">
                <ul>
                    <li><a href="#">home</a></li>
                </ul>
            </div>
        </div>
        <div id="slider">
            <span class="item-slider"><img src="./assets/img/porsche.webp" alt="Voiture de sport de la marque Porsche" width="600" height="600"></span>
            <span class="item-slider"><img src="./assets/img/audi.webp" alt="Voiture de sport de la marque Audi" width="600" height="600"></span>
            <span class="item-slider"><img src="./assets/img/helico.webp" alt="Hélicoptère de l'armée américaine" width="600" height="600"></span>
            <span class="item-slider"><img src="./assets/img/submarine.webp" alt="Sous-marin Shinkaï" width="600" height="600"></span>
        </div>
        <div id="interface">
            <header>
                <nav class="nav-ctn">
                    <ul>
                        <li id="goToMenuBtn"><a href="#">explore</a></li>
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
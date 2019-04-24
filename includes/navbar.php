<nav class="navbar fixed-top navbar-expand-lg navbar-light" id="mainNav">
    <a class="navbar-brand logo" href="index.php"> <img src="images/Montimage_logo.png" alt="Montimage logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-item nav-link " href="about.php?lang=<?php echo $lang['lang']?>"><?php echo $lang['about'] ?><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=""><?php echo $lang['ntsol'] ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="solutions.php?lang=<?php echo $lang['lang']?>"><?php echo $lang['overview'] ?></a>
                    <a class="dropdown-item" href="products.php?lang=<?php echo $lang['lang']?>"><?php echo $lang['products'] ?></a>
                    <a class="dropdown-item" href="services.php?lang=<?php echo $lang['lang']?>"><?php echo $lang['services'] ?></a>
                    <a class="dropdown-item" href="training.php?lang=<?php echo $lang['lang']?>"><?php echo $lang['training'] ?></a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-item nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=""><?php echo $lang['technologies'] ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#cyberange"><?php echo $lang['cyberange'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#blockchain"><?php echo $lang['blockchain'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#artificial"><?php echo $lang['artificial'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#managing"><?php echo $lang['managing'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#dpi"><?php echo $lang['dpi'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#analysis"><?php echo $lang['analysis'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#behaviour"><?php echo $lang['behaviour'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#slas"><?php echo $lang['slas'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#apt"><?php echo $lang['apt'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#bandwidth"><?php echo $lang['bandwidth'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#cloud"><?php echo $lang['cloud'] ?></a>
                    <a class="dropdown-item js-scroll-trigger" href="technologies.php?lang=<?php echo $lang['lang']?>#edge"><?php echo $lang['edge'] ?></a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="innovation.php?lang=<?php echo $lang['lang']?>"><?php echo $lang['innovation'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="awards.php?lang=<?php echo $lang['lang']?>"><?php echo $lang['awards'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link" href="news.php?lang=<?php echo $lang['lang']?>"><?php echo $lang['news'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-item nav-link active" href="#"><?php echo $lang['contact'] ?></a>
            <li class="nav-item">
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href=""><</a>
                    <a class="dropdown-item" href=""></a>
                    <a class="dropdown-item" href="index.php?lang=fr"></a>
                </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $lang['language'] ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php $_SERVER['PHP_SELF']?>?lang=fr"><?php echo $lang['lang_fr'] ?></a>
                    <a class="dropdown-item" href="<?php $_SERVER['PHP_SELF']?>?lang=en"><?php echo $lang['lang_en'] ?></a>
                    <a class="dropdown-item" href="<?php $_SERVER['PHP_SELF']?>?lang=es"><?php echo $lang['lang_es'] ?></a>
                </div>
            </li>
        </ul>

    </div>
</nav>
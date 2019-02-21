<?php include("includes/header.inc"); ?>

    <!-- Top Page Nav -->
    <section class="top-page-nav">
        <div class="center cf">

            <h2><?php echo $page->title; ?></h2>

            <div class="navi">
                <a href="<?php echo $config->urls->root; ?>">Home</a>
                <span></span>
                <a class="active" href="<? echo $page->url; ?>"><?php echo $page->title; ?></a>
            </div>

        </div>
    </section>

    <!-- Donate -->
    <section class="donate page">
        <div class="cf">
            <div class="col-6 text">
                <h3>Danke!</h3>
            </div>
            <div class="col-6 but">
                <span>Bankverbindung
                    <p>Deutsche Skatbank<br>DEGAF Äthiopien e. V.<br>IBAN: DE35 8306 5408 0004 0468 38<br>BIC: GENO DEF1 SLR<br>Steuernummer: 27/663/63567</p>
                </span>
            </div>
        </div>
    </section>
    <!-- INFO-->

    <!-- Our Cause -->
    <section class="cause">
        <div class="center">
            <div class="causes cf">

                <?php
                $options = array(
                    'upscaling' => false,
                    'cropping' => 'northwest'
                );

                foreach($page->thirds_projects as $thirds_projects) {

                echo "
                <div class='col-4'>
                    <a class='image-popup-vertical-fit' href='{$thirds_projects->thirds_projects_image->url}'>
                    <img src='{$thirds_projects->thirds_projects_image->size(300, 222, $options)->url}' alt=''/>
                    </a>
                    <h3>{$thirds_projects->thirds_projects_title}</h3>
                    <p>{$thirds_projects->thirds_projects_image->description}</p>
                </div>";
                }
                ?>

            </div>
        </div>
    </section>

    <!-- Section Bottom -->
    <?php include("includes/footer.inc"); ?>
</body>
</html>
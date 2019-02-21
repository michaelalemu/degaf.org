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

    <!-- Google Maps -->
    <section class="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=ztfMEUNjcdnI.kL6OOnNEjVXw" width="640" height="580"></iframe>
    </section>

    <!-- Contacts -->
    <section class="contacts cf">

        <div class="center">
            <div class="col-7 left">
                <h2>Treten Sie in Kontakt</h2>

                <a href="#" class="home">Essner Straße 32, 10555 Berlin, Deutschland</a>
                <a href="#" class="mail">info (@) degaf.org</a>
                <a href="#" class="phone">+49 30 250 57 69 3</a>
                <a href="#" class="fax">+49 30 250 57 69 4</a>

                <p>
                    Wir freuen uns mit Ihnen zu sprechen. Zögern Sie nicht uns zu anzurufen oder uns per E-Mail zu kontaktieren.
                </p>
            </div>

            <!-- div class="col-5">
                <h2>Nachricht hinterlassen</h2>

                <form action="#" method="post">
                    <input placeholder="Name" class="name" type="text"/>
                    <input placeholder="E-Mail" class="email" type="text"/>
                    <input placeholder="Betreff" class="subject" type="text"/>
                    <textarea placeholder="Ihre Nachricht..." class="message" name="message"></textarea>
                    <input id="submit" type="submit" value="Abschicken"/>
                </form>

            </div>
        </div -->
		</div>
    </section>

    <!-- Section Bottom -->
    <?php include("includes/footer.inc"); ?>
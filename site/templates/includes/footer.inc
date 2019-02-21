<footer>
        <div class="footer">
            <div class="center cf">
                <div class="col-4">
                    <h3><?=$page->footer_title ?>Über DEGAF Äthiopien</h3>
                    <p>
                        <?=$page->footer_about_left ?>
                        „DEGAF Äthiopien e. V.“ ist von entwicklungspolitisch interessierten sowie auslandserfahrenen Freunden - sei es beruflich oder durch eigene Wurzeln in dem Süden - aus Potsdam und Berlin gegründet.
                    </p>
                    <div class="contacts external-link"><a href="http://www.fazit-brb.de/"><i class="fa fa-external-link"></i>ISA e.V <i>www.fazit-brb.de</i></a></div>
                    <div class="contacts external-link"><a href="http://www.moveglobal.de/"><i class="fa fa-external-link"></i>moveGLOBAL <i>www.moveglobal.de</i></a></div>
                    <div class="contacts external-link"><a href="http://www.eda-e.org/"><i class="fa fa-external-link"></i>ENVIRONMENTALISTS DEVELOPMENT ASSOCIATION <i>www.eda-e.org</i></a></div>
                </div>
                <div class="col-4">
                    <p>
                        Wir arbeiten in erster Linie in Äthiopien. Dabei arbeiten wir vor allem mit der lokalen NGO <a href="/eda-e" target="_blank">„ENVIRONMENTALISTS DEVELOPMENT ASSOCIATION - ETHIOPIA (EDA-E)”</a> zusammen, die ein Jahrzehnt an Erfahrungen im Bereich Schulausbau, Wasserversorgung und Umwelt gesammelt hat und die notwendige Logistik sowie das Fachpersonal für die Umsetzung unserer <a href="/site/assets/files/download/degaf-mou.pdf" target="_blank">Arbeit (PDF)</a> besitzt.
                    </p>
                </div>
                
                <div class="col-4 contacts">
                    <h3>Kontakt</h3>
                    <div><i class="fa fa-phone"></i>+49 176 277 060 30</div>
                    <div><i class="fa fa-map-marker"></i>DEGAF Äthiopien e.V.,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Essener Straße 32, 10555 Berlin</div> 
                    <div><i class="fa fa-envelope"></i>info (@) degaf.org</div>
                    <div><strong>Bankverbindung</strong>: Deutsche Skatbank<br>IBAN: DE35 8306 5408 0004 0468 38</div>
                    <div>BIC: GENO DEF1 SLR</div>
                    <div>Steuernummer: 27/663/63567</div>
                </div>
            </div>
        </div>

        <div class="line">
            <div class="center cf">
                <div class="links">
                    <?php include("navigation-foot.inc"); ?>
                    <a href="/impressum/">Impressum</a>
                </div>
                <div class="copy">© <?php echo date("Y") ?> Alle Rechte vorbehalten. <span>DEGAF Äthiopien e. V.</span> </div>
            </div>
        </div>
    </footer>

    <!-- Libs -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo $config->urls->templates; ?>js/libs/jquery.flexslider-min.js"></script>
    
    <!-- Custom -->
    <script src="<?php echo $config->urls->templates; ?>js/scripts.js"></script>
    <script>
        InitHome();
    </script>
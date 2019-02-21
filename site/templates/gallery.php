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

    <div class="center cf">

        <!-- Gallery -->
        <section class="col-8 blog cf">
            <div class="gallery">
                <div class="menu cf" id="menu-cf" data-option-key="filter">
                    <a href="#" data-filter=".projektziele" class="active">Projektziele</a>
                    <a href="#" data-filter=".schulbau">Schulbau</a>
                    <a href="#" data-filter=".toiletten">Toiletten</a>
                    <a href="#" data-filter=".brunnen">Brunnen</a>
                    <a href="#" data-filter=".frauen">Frauen</a>
                </div>

                <div class="photos cf" id="photos-cf">
                    <?php
                    $i = 1;
                    foreach($page->gallery_image as $gallery) {
                        echo "<div class='col-6 {$gallery->tags}'><a href='#'>";
                        echo "<img src='{$gallery->size(333, 250)->url}' alt=''/>";
                        echo "<span class='mask'></span><div class='like'><p>".$i."</p></div>";
                        echo "</a></div>";
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- Aside Blog -->
        <aside class="col-4 blog cf">

            <!-- ASIDE DYNAMIC -->
            <div id="aside-dynamic">

                <div class="content m1">
                    <?php
                    function before ($inthat)
                    {
                        return substr($inthat, 0, strpos($inthat, $this));
                    };
                    function after ($inthat)
                    {
                        if (!is_bool(strpos($inthat, $this)))
                            return substr($inthat, strpos($inthat,$this)+strlen($this));
                    };

                    foreach($page->gallery_image as $gallery) {
                        if($gallery->description) {
                            $texttitle = before (':', $gallery->description);
                            $text = after (': ', $gallery->description);
                            echo "<div class='item cf'><div class='col-9'><a href='#' class='title'>".$texttitle."</a>";
                            echo "<p>".$text."</p>";
                            echo "</div></div>";
                        };
                    }
                    ?>
            </div>
        </aside>
    </div>

    <!-- Footer -->
    <?php include("includes/footer.inc"); ?>

    <!-- Libs -->
    <script src="<?php echo $config->urls->templates; ?>js/libs/jquery-1.10.2.min.js"></script>
    
    <!-- Custom -->
    <script src="<?php echo $config->urls->templates; ?>js/scripts.js"></script>
    <script>
        InitBlog();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.0/isotope.pkgd.min.js"></script>
    <script>
    var $container = $('#photos-cf');
    $container.isotope({
        itemSelector: '.col-6',
        layoutMode: 'fitRows'
    });
    $('#menu-cf a').click(function(){
        var selector = $(this).attr('data-filter');
        $container.isotope({ filter: selector });
        return false;
    });
    // set selected menu items
   var $optionSets = $('.menu'),
       $optionLinks = $optionSets.find('a');
 
       $optionLinks.click(function(){
          var $this = $(this);
      // don't proceed if already selected
      if ( $this.hasClass('active') ) {
          return false;
      }
   var $optionSet = $this.parents('.menu');
   $optionSet.find('.active').removeClass('active');
   $this.addClass('active'); 
});
    </script>
</body>
</html>
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

    <!-- Our Cause -->
    <div class="linetext donate">
        <div class="center">
            <?php echo $page->page_top_text; ?>
        </div>
    </div>

    <!-- Footer-->
    <?php include("includes/footer.inc"); ?>

    <!-- Custom -->
    <script src="<?php echo $config->urls->templates; ?>js/scripts.js"></script>
    <script>
        InitHome();
    </script>
</body>
</html>
</html>
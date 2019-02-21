<?php include("includes/header.inc"); ?>

    <!-- Slider -->
    <div id="slider">
        <ul class="slides">
            <?php
            $options = array(
                'upscaling' => false,
                'cropping' => 'north'
            );
            foreach($page->home_slides as $slides) {
                echo "<li>";
                echo "<img src='{$slides->home_slides_image->size(1500, 772, $options)->url}' alt=''/>";
                echo "<div class='text1'>{$slides->home_slides_image->description}</div>";
                echo "<div class='text2'>{$page->home_slides_motto}</div>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>

    <!-- Section Bottom -->
    <?php include("includes/footer.inc"); ?>
</body>
</html>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title><?php echo $page->title; ?> | DEGAF Äthiopien e. V.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/general.css">
    <link rel="stylesheet" href="<?php echo $config->urls->templates; ?>css/magnific-popup.css">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,800' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="format-detection" content="telephone=no" />

    <!-- Semantic HTML5 Support on old IE -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>

    <header class="main">
        <div class="center">
            <div class="logo"><a href="/"><img src="<?php echo $config->urls->templates; ?>css/images/logo.svg" width="100%"></a></div>

            <!-- Navigation -->

            <nav>
                <ul>
                    <?php include("navigation.inc"); ?>
                </ul>
            </nav>

            <div id="mobile-button"></div>
            <div id="mobile-menu">
                <ul>
                    <?php include("navigation.inc"); ?>
                </ul>
            </div>
        </div>
    </header>
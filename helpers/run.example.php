<?php
include "common.php";
$example = json_decode(file_get_contents("_example.json"),true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="KoolReport is an intuitive and flexible Open Source PHP Reporting Framework for faster and easier data report delivery.">
    <meta name="author" content="KoolPHP Inc">
    <meta name="keywords" content="php reporting framework">
    <link rel="shortcut icon" href="<?php echo $root_url; ?>/assets/images/bar.png">
    <title><?php echo $example["title"] ?> - KoolReport Examples &amp; Demonstration</title>

    <link href="<?php echo $root_url; ?>/assets/fontawesome/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $root_url; ?>/assets/simpleline/simple-line-icons.min.css" rel="stylesheet">
    <link href="<?php echo $root_url; ?>/assets/css/tomorrow.css" rel="stylesheet">

    <link href="<?php echo $root_url; ?>/assets/theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $root_url; ?>/assets/theme/css/main.css" rel="stylesheet">
    
    <script type="text/javascript" src="<?php echo $root_url; ?>/assets/theme/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $root_url; ?>/assets/theme/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="<?php echo $root_url; ?>/assets/js/highlight.min.js"></script>
    <script type="text/javascript" src="<?php echo $root_url; ?>/assets/js/showdown.js"></script>

</head>
<body>
    <?php include "nav.php"; ?>
    <?php include "online_link.php"; ?>
    <main role="main" class="container">
        <?php include "run.php"; ?>
        <?php include "example_meta.php"; ?>
    </main>
    <?php include "footer.php"; ?>
    <script type="text/javascript">hljs.initHighlightingOnLoad();</script>
</body>
</html>
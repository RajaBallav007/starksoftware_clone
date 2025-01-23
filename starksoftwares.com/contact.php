<?php include_once('includes/url.inc.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> 
    <title>ct Us</title>
 
    <!-- All Stylesheets --> 
    <?php $folder='root'; include_once('includes/stylesheets.inc.php'); ?> 
</head>
<body> 

    <!-- Preloader, Main Navigation Menu --> 
    <?php $folder='root'; include_once('includes/header.inc.php'); ?> 

    <main> 
        <!-- header wrapper start -->
        <header class="py-5 bg-dark position-relative">
            <img 
                src="assets/images/common/ct-bg.webp" 
                alt="ct Us" width="1920" height="306"
                class="img-fluid w-100 h-100 position-absolute top-0 start-0 object-fit-cover"
            >
            <div class="w-100 h-100 position-absolute top-0 start-0" style="background: #0466C8AD;"></div>
            <div class="iner py-4 py-sm-5 my-xl-4 position-relative z-3">
                <h1 class="fs-1 fw-semibold text-white mb-0">ct Us</h1>
            </div>
        </header>
        <!-- header wrapper end -->

        <!-- ct wrapper start -->
        <?php include('includes/ct-section.inc.php'); ?>
        <!-- ct wrapper end -->



    </main>
   <!-- Footer and Script List --> 
<?php $folder='root'; include_once('includes/footer.inc.php'); ?> 
</body>
</html>
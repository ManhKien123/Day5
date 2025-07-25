<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <?php include_once(__DIR__ . '/../layouts/styles.php'); ?>
</head>
<body>
    <?php include_once(__DIR__ . '/../layouts/scripts.php'); ?>

        <!-- Header -->
        <?php include_once(__DIR__ . '/../layouts/partials/header.php'); ?>

        <main class="container">
            <h1 class="text-center">About Us</h1>
            <p class="text-center">Welcome to our shop! You can find us at the location below:</p>
            <div class="map-responsive" style="overflow:hidden;padding-bottom:56.25%;position:relative;height:0;">
                <div style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <iframe src="https://maps.google.com/maps?q=your+location&output=embed" 
                        width="100%" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <?php include_once(__DIR__ . '/../layouts/partials/footer.php'); ?>
</body>
</html>
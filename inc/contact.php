<!-- ContactForm -->   
<?php
include(__DIR__ . '/get_response.php');
?>
<!-- ContactForm -->
<!DOCTYPE html>
<html>
    <head>   
    <title>Contact Us</title>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/nmcss.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Baloo Thambi 2' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

        <!-- ================================ Map resources ====================================== -->

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>

        <!-- =========================================Recaptcha======================================== -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
    <!-- Header -->   
    <?php
    include(__DIR__ . '/header.php');
    ?>
    <!-- Header -->
        <form method="post">
            <div class="contact-container">
                <div class="main-title main-font">CONTACT US</div>
                <span class="title-underline main-font"></span>
                <p class="contact-text main-font">Netmatters<br />11 Penfold Drive<br />Wymondham<br />Norfolk<br />NR18 0WZ</p>
                <p class="contact-text main-font"><b>Telephone:</b> 01235-852-894<br /><b>E-mail:</b> info@Terracotta.com</p>
                    <div class="form-container">
                        <label class="contact-text main-font" for="name">Name:</label>
                        <input class="contact-text main-font" type="text" id="name" name="name">
                        <label class="contact-text main-font" for="email">Email:</label>
                        <input class="contact-text main-font" type="text" id="email" name="email">
                        <label class="contact-text main-font" for="number">Telephone:</label>
                        <input class="contact-text main-font" type="text" id="telephone" name="number">
                    
                        <label class="contact-text main-font" for="message">Message:</label>
                        <textarea class="contact-text main-font" name="message">Type your message in here.</textarea>
                    <!-- ================ GDPR Tickboxes ========================== -->
                        <div class="tickbox">
                            <input type="checkbox" id="agreement" name="agreement">
                            <label class="contact-text main-font" for="agreement">I agree</label>
                        </div>
                    <!-- ================ Recaptcha Area ========================== -->
                    <div class="g-recaptcha" data-sitekey="6LeVvfwUAAAAAOMJHcTHT37vky5nYaB4BllUBdrb"></div>
                    
                        <input type="submit" value="Submit" name="submit" style="width:30%">
                        <div class="status main-font"><?php echo $status ?></div>
                    </div>
                    <div class="main-title main-font">FIND US HERE</div>
        <div class="title-underline"></div>
            </div>
        </form>
        
        <div class="map-container">
            <div id ="map"></div>
        </div>



<!-- Footer -->   
<?php
include(__DIR__ . '/footer.php');
?>
<!-- Footer -->
<script src="../js/map.js"></script>
    </body>
</html>
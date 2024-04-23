<html>
<head>
    <title>Membuat Contact Form dengan PHP - ePlusGo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <form id="contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <?php if(!empty($notify)){ ?>
                <p class="notify <?php echo !empty($notifyClass)?$notifyClass:''; ?>"><?php echo $notify; ?></p>
            <?php } ?>
            <h3>Contact Form</h3>
            <h4>Hubungi kami dengan mengisi isian dibawah</h4>
            <fieldset>
                <input placeholder="Natanael Andrew Pratiknyo" type="text" name="name" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="andrewyuna17@gmail.com" type="text" name="email" tabindex="2" required>
           
            <fieldset>
                <textarea placeholder="Ketikan pesan Anda" name="message" tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Mengirim pesan">Kirim</button>
            </fieldset>
        </form>
    </div>
</body>
</html>
<?php include ROOT . '/views/header-footer/header.php'; ?>

<div id="tooplate_main">
    <div class="col_w450 float_l">
        <div id="contact_form">

            <h2>Quick Contact Form</h2>

            <form method="post" name="contact" action="#">

                <label for="fullname">Name:</label> <input type="text" id="fullname" name="fullname" class="required input_field" />
                <div class="cleaner h10"></div>

                <label for="email">Email:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />
                <div class="cleaner h10"></div>

                <label for="subject">Subject:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>
                <div class="cleaner h10"></div>

                <label for="message">Message:</label> <textarea id="message" name="message" rows="0" cols="0" class="required"></textarea>
                <div class="cleaner h10"></div>

                <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
                <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />

            </form>
        </div>
    </div>

    <div class="col_w450 float_r">
        <h4>Our Location</h4>
        <div id="map"><a href="/template/images/map_big.jpg" title="Our Location"><img width="300" height="200" src="/template/images/map_thumb.jpg" alt="Our Location" class="image_wrapper" /></a></div>
        <div class="cleaner h30"></div>

        <h4>Mailing Address</h4>
        <h6><strong>Company Name</strong></h6>
        980-640 Duis lacinia dictum, <br />
        Accumsan auctor, 14930<br />
        Diam a mollis tempor<br /><br />

        <strong>Phone:</strong> 010-020-0120<br />
        <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a></div>

    <div class="cleaner"></div>
</div> <!-- end of tooplate_main -->

<?php include ROOT . '/views/header-footer/footer.php'; ?>

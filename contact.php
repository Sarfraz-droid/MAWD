<?php include 'header.php';?>
<img src="../bg.jpg" class="bg-img"/>
    <div class="section partner">
        <div class="contact-us-section contact-page">
            <div class="contact-us">
                <h2>
                    Contact Us
                </h2>
                <form name="contact-form" action="mailer.php" method="post" enctype="multipart/form-data">
                    <div class="line">
                        <input placeholder="Name" name="name">
                        <input placeholder="Email" name="email">
                    </div>
                    <div class="line">
                        <input placeholder="Phone" name="phone">
                        <input placeholder="Company" name="company">
                    </div>

                    <div class="line full">
                    <input placeholder="Subject" name="subject" />
                    </div>

                    <div class="line full">
                        <textarea placeholder="Message" cols="30" rows="10" name="message"></textarea>
                    </div>
                    <button type="submit" onclick="return validateForm()" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <?php include 'footer.php';?>
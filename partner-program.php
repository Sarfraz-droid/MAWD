<?php include 'header.php';?>
<img src="../bg.jpg" class="bg-img"/>
    <div class="section partner">
        <div class="contact-us-section contact-page">
            <div class="contact-us">
                <h2>
                    Partner Program
                </h2>
                <form name="contact-form" action="mailer.php" method="post" enctype="multipart/form-data">
                    <div class="line">
                        <input placeholder="Name" name="name">
                        <input placeholder="Email" name="email">
                    </div>
                    
                     <div class="line full">
                    <input placeholder="Company" name="company">
                    </div>
                    
                     <div class="line full checkbox-form">
                    <h3>What are you interested in?</h3>
                     <h4>   Please also include the URL of your website below.</h4>
                     <span class="line">
                     <input class="checkbox-input" type = "checkbox" name = "maths" value = "on"> Referral Fee ($100 - $500 Per Account)
                    </span> 
                    <span class="line">
                     <input type = "checkbox" name = "physics" value = "on"> Commission (20% - 50% Per Account)   
                     </span> 
                    <span class="line">
                     <input type = "checkbox" name = "physics" value = "on"> Part-Time Job   
                     </span> 
                    <span class="line">
                     <input type = "checkbox" name = "physics" value = "on"> 
                        Other:   
                     </span> 
                    </div>

                    <div class="line full checkbox-form">
                        <h3>Services to Resell</h3>
                        <h4>Please also include the URL of your website below.</h4>
                        <span class="line">
                        <input type = "checkbox" name = "maths" value = "on"> Google Ads, Bing Ads
                        </span> 
                    <span class="line">
                        <input type = "checkbox" name = "physics" value = "on"> Social Media Ads, Amazon Ads 
                        </span> 
                    <span class="line">

                        <input type = "checkbox" name = "physics" value = "on"> Search Engine Optimization
                        </span> 
                    <span class="line">
 
                        <input type = "checkbox" name = "physics" value = "on"> Analytics & Business Lead Tracking
                        </span> 
                    <span class="line">

                        <input type = "checkbox" name = "physics" value = "on"> New Websites & Website Maintenance
                        </span> 
                    <span class="line">

                        <input type = "checkbox" name = "physics" value = "on"> Social Media Management
                        </span> 
                    <span class="line">

                        <input type = "checkbox" name = "physics" value = "on"> Email Newsletters
                        </span> 
                    <span class="line">

                        <input type = "checkbox" name = "physics" value = "on"> Video Creation & Advertising
                        </span> 
                    <span class="line">

                        <input type = "checkbox" name = "physics" value = "on"> Hosting Solutions & Migration
                        </span> 
                    <span class="line">

                        <input type = "checkbox" name = "physics" value = "on"> Mobile Apps
                        </span> 
                    </div>

                    <div class="line full">
                        <input placeholder="Website & Phone Number (optional)" name="Phone">
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
<?php include 'header.php';?>
    <video autoplay muted loop id="myVideo">
        <source src="file.mp4" type="video/mp4">
    </video>
    <div class="main">
        <h1>
            <span>M</span>
            <span>ARKETING</span>
        </h1>
        <h1>
            <span>A</span>
            <span>DVERTISING</span>
        </h1>
        <h1>
            <span>W</span>
            <span>EBSITE</span>
        </h1>
        <h1>
            <span>D</span>
            <span>ESIGN</span>
        </h1>

        <p>
            "LEAD GENERATION SPECIALIST"
        </p>
 <a href="contact.php" >
        <button>
           ⭐ Get a Quote  </button></a>
         
    </div>

    <div class="section">
        <ul class="main">
            <li class="info">
                <div class="info-left">01</div>
                <div class="info-right">
                    <h2>
                        ONLINE ADVERTISING
                    </h2>
                    <div class="subtitle">
                        Full PPC Setup &amp; Maintenance
                    </div>

                        <ul>
                            <li>
                                Google Ads, Facebook, Instagram, Bing
                            </li>
                            <li>
                                LinkedIn, Amazon, Craigslist
                            </li>
                            <li>
                                Re-Targeting, Native Ads
                            </li>
                            <li>
                                YouTube Ads, Display Ads
                            </li>
                            <li>
                                Smart Campaigns
                            </li>
                            <li>
                                Programmatic Advertising
                            </li>
                        </ul>
                </div>
            </li>
            <li class="info">
                <div class="info-left">02</div>
                <div class="info-right">
                    <h2>
                        WEB DESIGN &amp; MOBILE
                    </h2>

                        <ul>
                            <li>
                                Wix Wordpress, Webflow, Shopify, CMS, HTML5/CSS3/JS
                            </li>
                            <li>
                                Setup, Hosting, &amp; Maintenance
                            </li>
                            <li>
                                Security &amp; Performance
                            </li>     
                            <li>  
                        </ul>
                </div>
            </li>
            <li class="info">
                <div class="info-left">03</div>
                <div class="info-right">
                    <h2>
                        SEARCH ENGINE OPTIMIZATION

                    </h2>

                        <ul>
                            <li>
                                On-Site
                            </li>
                            <li>
                                Off-Site SEO
                            </li>
                            <li>
                                Free Audit
                            </li>     
                        </ul>
                </div>
            </li>
            <li class="info">
                <div class="info-left">04</div>
                <div class="info-right">
                    <h2>
                        SOCIAL MEDIA


                    </h2>

                        <ul>
                            <li>
                                On-Site &amp; Off-Site SEO
                            </li>
                            <li>
                                Produce, Post &amp; Promote
                            </li>
                            <li>
                                Videos
                            </li>     
                            <li>
                                Google My Business
                            </li>
                            <li>
                                Facebook, Instagram, LinkedIn, Twitter, Pinterest
                            </li>
                            <li>
                                Content Writing
                            </li>     
                        </ul>
                </div>
            </li>
        </ul>
        <div class="contact-us-section">
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
    <?php include 'footer.php';?>

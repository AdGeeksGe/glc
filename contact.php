<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('./components/header.php'); ?>
    <link rel="stylesheet" href="./styles/contact.css">
</head>
<body>
    
    <?php
        include './components/nav-bar.php';
        renderNavBar();  
    ?>
    
    <div class="container-contact">
        
        <div class="flex-for-middle">
            <div class="inner-for-ali">
                <div class="form-flex-div">
                    <div class="form-text-div">
                        <h1>Contact Us</h1>
                        <p>We are here to help you with your business, real estate, and legal needs in Georgia. Fill out the form below, and our team will get back to you promptly.</p>
                    </div>

                    <form id="form" method="POST" action="script.php">
                        <div class="outer-flex">
                            <div class="inner-flex">
                                <label for="name">Name<span>*</span></label>
                                <input type="text" name="name" placeholder="Your full name" required>
                            </div>

                            <div class="inner-flex">
                                <label for="email">Email address<span>*</span></label>
                                <input type="email" name="email" placeholder="Your preferred email" required>
                            </div>
                        </div>

                        <div class="outer-flex">
                            <div class="inner-flex">
                                <label for="citizenship">Citizenship<span>*</span></label>
                                <input type="text" name="citizenship" placeholder="Enter your country of citizenship" required>
                            </div>

                            <div class="inner-flex">
                                <label for="language">Language<span>*</span></label>
                                <select id="language" name="language" required>
                                    <option value="selected" disabled selected>Select...</option>
                                    <option value="english">English</option>
                                    <option value="russian">Russian</option>
                                </select>
                            </div>
                        </div>

                        <div class="outer-flex">
                            <div class="inner-flex">
                                <label for="whatsapp">WhatsApp<span class="span">(Optional)</span></label>
                                <input type="tel" placeholder="Including Country Code">
                            </div>

                            <div class="inner-flex">
                                <label for="telegram">Telegram<span class="span">(Optional)</span></label>
                                <input type="tel" placeholder="Including Country Code">
                            </div>
                        </div>

                        <div class="message-div">
                            <label for="message">Message</label>
                            <textarea name="message" placeholder="Please describe your needs or ask any specific questions you may have" id="message"></textarea>
                        </div>

                        <div class="submit-div">
                            <button id="submit-button" type="submit">Send</button>
                        </div>
                    </form>

                    <p class="pp-form">Or</p>
                    <a class="read-more3" href="https://calendly.com/d/cngg-vf7-3mx/book-free-consultation?month=2024-12">Book a meeting</a>
                </div>
            </div>
            <div class="inner-for-ali">
                <div class="form-img-div">

                </div>
            </div>
        </div>


    </div>

    <?php include('./components/footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./script/script.js"></script>
</body>
</html>

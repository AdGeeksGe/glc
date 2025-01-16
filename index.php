<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('./components/header.php'); ?>
        <link rel="stylesheet" href="./styles/home.css">
    </head>
<body>
    <div class="container">
    <?php
        include './components/nav-bar.php';
        renderNavBar();
        include './variables/index.php';
    ?>

    <div class="move-to-georgia-div">
        <div data-aos="fade-in" class="move-to-georgia">
            <div class="to-georgia-text">
                <div class="text-div">
                    <h1 class="georgia-h1"><?php echo $page_title; ?></h1>
                    <p class="georgia-p"><?php echo $intro_text; ?></p>
                </div>
                <div class="read-more-div">
                    <a class="read-more" href="<?php echo $book_meeting_link; ?>">Book a meeting</a>
                    <a class="read-more2" href="./move-to-georgia.php">Read more</a>
                </div>
            </div>
            <div class="georgia-img-div"></div>
        </div>
    </div>

    <div class="background-how-to-move">
        <div class="how-to-move-to-georgia">
            <div data-aos="fade-up" class="how-to-move-div">
                <h1 class="how-to-move-h1"><?php echo $how_to_move_title; ?></h1>
                <p class="how-to-move-p"><?php echo $how_to_move_text; ?></p>
            </div>
            <div class="how-to-move-flex-div">
                <div data-aos="fade-up" class="how-to-move-text-div-1">
                    <h1 class="how-to-move-h1"><?php echo $tax_benefits_title; ?></h1>
                    <p class="how-to-move-p"><?php echo $tax_benefits_text; ?></p>
                </div>
                <div data-aos="fade-up" class="img-div-1"></div>
            </div>
            <div class="how-to-move-flex-div">
                <div data-aos="fade-up" class="img-div-2"></div>
                <div data-aos="fade-up" class="how-to-move-text-div-2">
                    <h1 class="how-to-move-h1"><?php echo $living_costs_title; ?></h1>
                    <p class="how-to-move-p"><?php echo $living_costs_text; ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="why-to-move-to-georgia">
        <div class="why-to-move-flex-div">
            <h1 data-aos="fade-up" class="why-to-move-h1"><?php echo $why_move_title; ?></h1>
            <p data-aos="fade-up" class="why-to-move-p"><?php echo $why_move_text; ?></p>
        </div>
    </div>

    <div class="legal-assistance">
        <div class="legal-assist-flex-div">
            <div data-aos="fade-up" class="legal-assist-img-div"></div>
            <div data-aos="fade-up" class="legal-assist-inner-flex">
                <h1 class="legal-assist-h1"><?php echo $legal_assist_title; ?></h1>
                <p class="legal-assist-inner-p"><?php echo $legal_assist_text; ?></p>
            </div>
        </div>

        <p data-aos="fade-up" class="legal-assist-p"><?php echo $legal_assist_p1; ?></p>
        <p data-aos="fade-up" class="legal-assist-p"><?php echo $legal_assist_p2; ?></p>

    </div>

    
    <?php include('./components/footer.php'); ?>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./script/script.js"></script>
</body>
</html>
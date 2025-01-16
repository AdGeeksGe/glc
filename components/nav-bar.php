<?php
function renderNavBar() {
    echo '
    
    <div class="nav-bar-div">
        <div class="nav-bar">
            <div class="nav-bar-first">
                <a href="https://georgiabusinessandresidentiallaw.ge/">
                    <img class="nav-bar-logo" src="./assets/svg/glc.svg" alt="">
                </a>
            </div>
            <div class="nav-bar-items">
                <div class="btn-point">
                    <a class="link" href="./index.php">Start</a>
                    <div class="point"></div>
                </div>
                <div class="btn-point">
                    <a class="link" href="./move-to-georgia.php">Move to Georgia</a>
                    <div class="point"></div>
                </div>
                <div class="btn-point">
                    <a class="link" href="./about.php">About</a>
                    <div class="point"></div>
                </div>
                <a class="contact-button" href="./contact.php">Contact
                    <svg fill="white" width="30px" height="30px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="white">
                        <path d="M128,24A104,104,0,1,0,232,128,104.12041,104.12041,0,0,0,128,24Zm47.38477,107.05469a7.99866,7.99866,0,0,1-1.73829,2.61133l-33.92773,33.92773a7.99915,7.99915,0,0,1-11.3125-11.3125L148.6875,136H88a8,8,0,0,1,0-16h60.6875L128.40625,99.71875a7.99915,7.99915,0,0,1,11.3125-11.3125L173.64648,122.334a8.02367,8.02367,0,0,1,1.73829,8.72071Z"/>
                    </svg>
                </a>
            </div>
            <div class="hamburger-menu">
                <svg width="40px" height="40px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#DAB983">
                    <path d="M4 18L20 18" stroke="#DAB983" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4 12L20 12" stroke="#DAB983" stroke-width="2" stroke-linecap="round"/>
                    <path d="M4 6L20 6" stroke="#DAB983" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="close-button displaynone">
                <svg class="displaynone" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#DAB983"/>
                </svg>
            </div>
        </div>
        <div class="after-dropdown-nav-bar displaynone">
            <div class="dropdown-nav-bar displaynone">
                <div class="btn-point">
                    <a class="link" href="./home.php">Start</a>
                    <div class="point"></div>
                </div>
                <div class="btn-point">
                    <a class="link" href="./move-to-georgia.php">Move to Georgia</a>
                    <div class="point"></div>
                </div>
                <div class="btn-point">
                    <a class="link" href="./about.php">About</a>
                    <div class="point"></div>
                </div>
                    <a class="contact-button" href="./contact.php">Contact
                        <svg class="displaynone" fill="white" width="30px" height="30px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="white">
                            <path d="M128,24A104,104,0,1,0,232,128,104.12041,104.12041,0,0,0,128,24Zm47.38477,107.05469a7.99866,7.99866,0,0,1-1.73829,2.61133l-33.92773,33.92773a7.99915,7.99915,0,0,1-11.3125-11.3125L148.6875,136H88a8,8,0,0,1,0-16h60.6875L128.40625,99.71875a7.99915,7.99915,0,0,1,11.3125-11.3125L173.64648,122.334a8.02367,8.02367,0,0,1,1.73829,8.72071Z"/>
                        </svg>
                    </a>
            </div>
        </div>
    </div>';
}
?>
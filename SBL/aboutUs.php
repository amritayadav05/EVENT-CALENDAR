

<?php include("navbar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT US</title>
    <link rel="stylesheet" href="aboutUs.css" />
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <div class="animated">
                <h1>WELCOME TO EVENT CALENDAR</h1></br>
                <p>Hey there! I'm amrita, the driving force behind Event Calendar.</p>
            </div></br>
            <div class="animated">
                <img src="image/undraw_programmer_re_owql.svg" alt="insert">
            </div>
        </div>
        
        <div class="content-wrapper">
        <div class="animated">
            <img src="image/undraw_schedule_re_2vro.svg" alt="insert" class="animated">
            </div>
            <div class="animated">
                <h3>WHY EVENT CALENDAR</h3>
                <p>I know firsthand how overwhelming it can be to keep track of everything going on in your area. That's why I created Event Calendar - your go-to hub for all things events. With our user-friendly interface and comprehensive listings, you'll never miss out on the fun again. Whether you're a social butterfly always on the lookout for the next big thing or someone who just wants to stay informed, we've got you covered.</p>
            </div>
           
        </div>
        
        <div class="content-wrapper">
            <div class="animated">
                <h3>OUR MISSION</h3>
                <p>Here at Event Calendar, our mission is simple: to simplify event planning and attendance for everyone. Whether you're a seasoned event-goer or someone looking for something fun to do on the weekend, we've got you covered. With a user-friendly interface and a comprehensive database of events, finding your next adventure has never been easier.</p>
            </div>
            <div class="animated">
            <img src="image/undraw_date_picker_re_r0p8.svg" alt="insert" class="animated">
            </div>
        </div>

        <div class="content-wrapper">
        <div class="animated">
                <img src="image/undraw_smiley_face_re_9uid.svg" alt="insert" class="animated">
            </div>
            <div class="animated">
                <h5>THANK YOU!</h5>
                <p>Thank you for being a part of the event calendar community. Together, let's make every day an event to remember!</p>
            </div>
            
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll(".animated");

            function checkViewport() {
                elements.forEach(element => {
                    const position = element.getBoundingClientRect();

                    if (position.top < window.innerHeight * 0.75) {
                        element.classList.add("visible");
                    }
                });
            }

            window.addEventListener("scroll", checkViewport);
            checkViewport();
        });
    </script>
</body>
</html>

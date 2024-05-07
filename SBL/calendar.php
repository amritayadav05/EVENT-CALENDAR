<?php
include("connection.php");
// INCLUDE("navbar.php");
// session_start();

// // Check if the form is submitted
// if(isset($_POST['eventsubmit'])){
//     // Escape user inputs for security
//     $eventname = mysqli_real_escape_string($conn,$_POST['eventtitle']);
//     $eventdate = mysqli_real_escape_string($conn,$_POST['eventdate']);
//     $eventstart = mysqli_real_escape_string($conn,$_POST['eventstart']);
//     $eventend = mysqli_real_escape_string($conn,$_POST['eventend']);
//     $eventrepeat = mysqli_real_escape_string($conn,$_POST['eventrepeat']);

//     // Insert event into database
//     $sql = "INSERT INTO event (eventtitle, eventdate, eventstart, eventend, eventrepeat) VALUES ('$eventname', '$eventdate', '$eventstart', '$eventend', '$eventrepeat')";
//     if ($conn->query($sql) === TRUE) {
//         echo "New event created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// // Fetch events from database
// $sql = "SELECT * FROM event";

// $result = $conn->query($sql);
// $events = array();

// if ($result->num_rows > 0) {
//     while($row = $result->fetch_assoc()) {
//         $events[] = $row;
//     }
// } else {
//     echo "0 results";
// }

// // Close database connection
// $conn->close();
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!"
    />
    <meta
      name="keywords"
      content="calendar, events, reminders, javascript, html, css, open source coding"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="calendar.css" />
    <title>Calendar with Events</title>
  </head>
  <body>
  <div class="navbar-container">
    <?php include("NAVBAR.PHP"); ?>
</div>

     <div class="container">
    
      <div class="left">
        <div class="calendar">
          <div class="month">
            <i class="fas fa-angle-left prev"></i>
            <div class="date">december 2015</div>
            <i class="fas fa-angle-right next"></i>
          </div>
          <div class="weekdays">
            <div>Sun</div>
            <div>Mon</div>
            <div>Tue</div>
            <div>Wed</div>
            <div>Thu</div>
            <div>Fri</div>
            <div>Sat</div>
          </div>
          <div class="days"></div>
          <div class="goto-today">
            <div class="goto">
              <input type="text" placeholder="mm/yyyy" class="date-input" />
              <button class="goto-btn">Go</button>
            </div>
            <button class="today-btn">Today</button>
          </div>
        </div>
      </div>
      <div class="right">
        <div class="today-date">
          <div class="event-day">wed</div>
          <div class="event-date">12th december 2022</div>
        </div>
        <div class="events"  ></div>
        
        <div class="add-event-wrapper" >
          <div class="add-event-header">
            <div class="title">Add Event</div>
            <i class="fas fa-times close"></i>
          </div>
          <div class="add-event-body">
            <div class="add-event-input">
              <input type="text" placeholder="Event Name" class="event-name" />
            </div>
            <div class="add-event-input">
              <input type="text" placeholder="Event Date" class="event-name" />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Event Time From"
                class="event-time-from"
              />
            </div>
            <div class="add-event-input">
              <input
                type="text"
                placeholder="Event Time To"
                class="event-time-to"
              />
            </div>
            <div class="add-event-input">
    <select class="repeat-option">
        <option value="None">None</option>
        <option value="Daily">Repeat Daily</option>
        <option value="Weekly">Repeat Weekly</option>
        <option value="Monthly">Repeat Monthly</option>
        <option value="Yearly">Repeat Yearly</option>
    </select>
</div>

          </div>
          <div class="add-event-footer">
            <button class="add-event-btn">Add Event</button>
          </div>
        </div>
      </div>
      <button class="add-event">
        <i class="fas fa-plus"></i>
      </button>
</div>

    <script src="calendar.js"></script>
  </body>
</html>
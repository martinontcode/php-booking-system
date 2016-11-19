<?php    
include_once 'header.php'; 
?>

<div class="container">
    
<!-- Booking Form -->
<form method="post" action="index.php" name="booking" class="booking-form">

<div class="form-group">
    <div class="cnt"><h3>Booking</h3></div>
    <div class="col-md-6 form-group">
    <h4>Contact information:</h4>
    <label for="username">Name:</label>
    <input type="text" name="username" id="username" placeholder="Full name" class="input form-control" autocomplete="off" required autofocus>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Email" class="input form-control" autocomplete="off" required autofocus>
    <label for="phone">Phone:</label>
    <input type="text" name="phone" id="phone" placeholder="Phone number" class="input form-control" autocomplete="off" required autofocus><br>
    </div>
    <div class="col-md-6 form-group">
    <h4>Reservation infomation:</h4>
    <label for="carlist">Car:</label>
    <select class="form-control" id="carlist" name="carlist" required autofocus>
        <option><!-- Car 1 --> Car 1</option>
        <option><!-- Car 2 --> Car 2</option>
        <option><!-- Car 3 --> Car 3</option>
        <option><!-- Car 4 --> Car 4</option>
    </select>
    <label for="startTime">Reservation start:</label>
    <input type="text" name="startTime" id="startTime" placeholder="14:00" class="input form-control" autocomplete="off" required autofocus>
    <label for="endTime">Reservation end:</label>
    <input type="text" name="endTime" id="endTime" placeholder="15:00" class="input form-control" autocomplete="off" required autofocus><br>
    </div>
    <input type="submit"  name="booking" value="Book car" class="btn btn-lg btn-book btn-block submit" />
</div>
    
</form>


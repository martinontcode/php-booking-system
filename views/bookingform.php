<!-- Include Bootstrap .css ; You can copy this to your header file instead. I've added custom code at the end. -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Custom -->
<link rel="stylesheet" href="css/booking-form.css">

<div class="container">
    
<!-- Registration Form -->
<form method="post" action="index.php" name="bookingform" class="booking-form">

<div class="form-group">
    <div class="cnt"><h3>User registration</h3></div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" placeholder="Username" class="input form-control" autocomplete="off" required autofocus><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" class="input form-control" autocomplete="off" required autofocus><br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Email" class="input form-control" autocomplete="off" required autofocus><br>
    <input type="submit"  name="registration" value="Sign Up" class="btn btn-lg btn-success btn-block submit" />
</div>
    
</form>


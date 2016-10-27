<?php

class Booking{
    
    /* __constructor()
    * Constructor will be called every time Login class is called ($login = new Login())
    */
    public function __construct(){
        
        /* Call for booking form */
        $this->showBooking();
        
        /* If booking data is posted call createUser function. */
        if (isset($_POST["booking"])) {
            $this->bookReservation();
        }
        
    }
    
    /* function showBooking()
     * Call for booking form.
     */
    public function showBooking(){
                               
        include("views/bookingform.php");

    } /* End showBooking() */
    
    
    /* function bookReservation()
    * Book reservation on the chosen date
    */
    private function bookReservation(){
        
    /* Require credentials for DB connection. */
    require ('config/dbconnect.php');   

        /* User input variables converted to string to prevent SQL injections */
        /* Contact information */
        $name = mysqli_real_escape_string($conn,trim($_POST['name']));
        $email = mysqli_real_escape_string($conn,($_POST['email']));
        $phone = mysqli_real_escape_string($conn,($_POST['phone']));
        /* Reservation information */
        $car = mysqli_real_escape_string($conn,($_POST['car']));
        $timestart = mysqli_real_escape_string($conn,($_POST['timestart']));
        $timeend = mysqli_real_escape_string($conn,($_POST['timeend']));
        $status = "Pending";

        /* Check that main fields are filled with values */
        if(!empty($name) && !empty($email) && !empty($phone)){

            /* Insert data into database, assign status pending */
            $sql = "INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `car`,"
                    . " `timestart`, `timeend`, `status`) VALUES ('', '$name', "
                        . "'$email', '$phone', '$car', '$timestart', '$timeend', '$status');";
            $result = mysqli_query($conn, $sql);

            /* If reservation booking is successful, return user to booking.php and prompt success pop-up */
            header('Location: index.php?usercreated=true');
        }
    
    }   /* End bookReservation() */
}


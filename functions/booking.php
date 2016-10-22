<?php

class Booking{
    
    /* __constructor()
    * Constructor will be called every time Login class is called ($login = new Login())
    */
    public function __construct(){

    }
    
    /* function bookReservation()
    * Book reservation on the chosen date
    */
    public function bookReservation(){
        
    /* Require credentials for DB connection. */
    require ('config/dbconnect.php');   
    
    /* Check if data has been submited through booking form */
    if(isset($_POST['booking'])){
        
        /* User input variables converted to string to prevent SQL injections */
        
        /* Contact information */
        $name = mysqli_real_escape_string($conn,trim($_POST['name']));
        $email = mysqli_real_escape_string($conn,($_POST['email']));
        $phone = mysqli_real_escape_string($conn,($_POST['phone']));
        
        /* Reservation information */
        $arrival = mysqli_real_escape_string($conn,trim($_POST['arrival']));
        $departure = mysqli_real_escape_string($conn,trim($_POST['departure']));
        $room = mysqli_real_escape_string($conn,trim($_POST['room']));
        $adults = mysqli_real_escape_string($conn,trim($_POST['adults']));
        $children = mysqli_real_escape_string($conn,trim($_POST['children']));
        
        /* Check that main fields are filled with values */
        if(!empty($name) && !empty($email) && !empty($phone)){
            /* Insert data into database, assign status pending */
        }
    }   
    
    }   /* End bookReservation() */
}


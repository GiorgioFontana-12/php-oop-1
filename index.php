<?php 

class Movie {
    public $Name
    public $Duration
    public $Actors
    function __construct($_Name, $_Duration, $_Actors ) {
        $this->Name = $_Name;
        $this->Duration = $_Duration;
        $this->Actors = $_Actors;
    }
}

$Avengers = new Movie("Avengers", "180min", "Robert D.J. , Cris H. , ecc" )

?>
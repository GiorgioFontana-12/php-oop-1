<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
// class Actors{
//     public $Actor1;
//     public $Actor2;
//     public $Actor3;
//     public function __construct( $Actor1, $Actor2,  $Actor3)
//     {
//         $this->Actor1 = $Actor1;
//         $this->Actor2 = $Actor2;
//         $this->Actor3 = $Actor3;
//     }
// }


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

$Avengers = new Movie("Avengers", "180min", ["Robert D.J.", "Cris H.", "ecc"])
$IronMan = new Movie("Iron Man", "108min", ["Robert D.J.", "Gwyneth Paltrow", "ecc"])

?>

<pre>

</pre>


    
</body>
</html>

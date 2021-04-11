<?php
class Circle
{
    public $radius;
    public $PI = 3.14159; // inisialisasi

    function __construct($radius)
    {
        if (empty($radius)) {
            $this->radius = 0.0;
        } else {
            $this->radius = $radius;
        }
    }
    // function __construct()
    // { // no-arg constructor set radius field 0.0
    //     $this->radius = 0.0;
    // }

    function setRadius($r) // mutator method
    {
        $this->radius = $r;
    }

    function getRadius() // accessor
    {
        return $this->radius;
    }

    function getArea()
    {
        $area = 0;
        $area = $this->PI * $this->radius * $this->radius;
        return $area;
    }

    function getCircumference()
    {
        $circumference = 0;
        $circumference = 2 * $this->PI * $this->radius;
        return $circumference;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Program Lingkaran</title>
</head>

<body>
    <div class="p-3 mb-2 bg-secondary text-white">
        <form action="Circle.php" method="POST" class="row g-3">
            <div class="mb-3 col-auto container">
                <label for="radius" class="form-label">Radius</label>
                <input name="radius" type="radius" class="form-control" id="radius" placeholder="Insert Radius Here">
            </div>
            <div class="mb-3 ccol-auto container">
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST["radius"];
        $circle = new Circle($radius);
        echo "<center><h4>Result</h4></center>";
        echo "<center><h6>Radius = {$circle->getRadius()} </h6></center>";
        echo "<center><h6>Area = {$circle->getArea()} </h6></center>";
        echo "<center><h6>Circumference = {$circle->getCircumference()} </h6></center>";
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>
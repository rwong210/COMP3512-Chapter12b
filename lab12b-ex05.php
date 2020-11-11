<?php
// add class definition here
class Stock
{
   public $symbol;
   public $name;
   public $percent;
   public $value;

   function __construct($s, $n, $p, $v)
   {
      $this->symbol = $s;
      $this->name = $n;
      $this->percent = $p;
      $this->value = $v;
   }
}

$foo = new Stock("AMZN", "Amazon.com Inc.", 25, 1760.19);
?>

<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <title>Lab 12b</title>
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">
   <link rel="stylesheet" href="css/lab12b-ex04.css">
</head>

<body>
   <main class="container">

      <div class="box">
         <h1>Portfolio Overview (Using Objects)</h1>
         <div class="data">
            <?php
            echo "<h2>$foo->symbol</h2>";
            echo "<h3>$foo->name</h3>";
            echo "<p>$foo->percent% at $" . $foo->value . "</p>";
            ?>
         </div>
      </div>

   </main>
</body>

</html>
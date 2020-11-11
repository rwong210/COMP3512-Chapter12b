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

   public function __toString()
   {
      $s = "<h2>$$this->symbol</h2>";
      $s .= "<h3>$this->name</h3>";
      $s .= "<p>$this->percent% at $" . $this->value . "</p>";
      return $s;
   }
}

$portfolio = [
   new Stock("AMZN", "Amazon.ca Inc.", 25, 1760.19),
   new Stock("APPL", "Apple Inc.", 20, 218.32),
   new Stock("MSFT", "Microsoft Corporation", 15, 108.82),
   new Stock("GOOGL", "Alphabet Inc.", 40, 1111.39)
];

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
            //echo "<h2>$foo->symbol</h2>";
            //echo "<h3>$foo->name</h3>";
            //echo "<p>$foo->percent% at $" . $foo->value . "</p>";
            // foreach ($portfolio as $p) {
            // echo "<h2>$p->symbol</h2>";
            // echo "<h3>$p->name</h3>";
            // echo "<p>$p->percent% at $" . $foo->value . "</p>";
            // }

            foreach ($portfolio as $p) {
               echo $p;
            }

            ?>
         </div>
      </div>

   </main>
</body>

</html>
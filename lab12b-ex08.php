<?php

include 'includes/book-data.inc.php';

// if ISBN number is set (declared and not null), ISBN is the value currently assigned
if (isset($_GET['isbn'])) {
  $isbn = $_GET['isbn'];

  /* if the assigned value of ISBN is not a key in the books array, use the header function to
  change the location header to a new url. NOTE TO SELF: header function MUST be called before
  any markup is generated 
  */
  if (!array_key_exists($isbn, $books)) {
    header("Location: lab12b-error.php");
  }
}

// if no ISBN is selected, use the default ISBN value
else {
  $isbn = $defaultISBN;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Chapter 12b</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/lab12b-ex08.css">
</head>

<body>

  <header>
    <h1><span>Textbook</span> Browser</h1>
    <nav><img src="images/menu.png" alt="mobile menu icon"></nav>
  </header>

  <main class="container">
    <div class="cards">
      <section class="card list">
        <div class="card-content">
          <ul>
            <?php
            foreach ($books as $key => $value) {
              echo '<li>';
              echo '<a href="lab12b-ex08.php?isbn=' . $key . '">';
              echo $value['title'];
              echo '</a>';
              echo '</li>';
            }
            ?>
          </ul>
        </div>
      </section>

      <section class="card">
        <figure>
          <img src="images/books/<?php echo $isbn; ?>.jpg" alt="<?php echo $books[$isbn]["title"]; ?>">
        </figure>
        <div class="card-content">
          <p><span>ISBN: </span><?php echo $isbn; ?></p>
          <p><span>Year: </span><?php echo $books[$isbn]["year"]; ?></p>
          <p><span>Pages: </span><?php echo $books[$isbn]["pages"]; ?></p>
          <p><?php echo $books[$isbn]["description"]; ?></p>
        </div>
      </section>
    </div>
  </main>
</body>

</html>
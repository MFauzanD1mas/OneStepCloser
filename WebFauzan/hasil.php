<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FauzanWeb</title>
</head>
<body>
    <H1>TOTAL BELANJA ANDA</H1>
    <?php 
    session_start();{
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
          $_SESSION["ID"] = $_POST["ID"];
          $_SESSION["server"] = $_POST["server"];
        }
        
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = $_POST["ID"];
            $server = $_POST["server"];
        
            echo "<p>ID Anda : " . $id . "</p>";
            echo "<p>server : (" . $server . ")</p>";
            echo "<style>#biodata { display: none; }</style>";
          }
        echo "<style>#biodata { display: none; }</style>";
      }
    ?>
    <?php


      if (isset($_SESSION["ID"]) && isset($_SESSION["server"])) {
        $id = $_SESSION["ID"];
        $server = $_SESSION["server"];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $id = $_POST['ID'];
          $server = $_POST['server'];
          $totalPrice = $_POST['total_price'];

          echo "<p>ID Anda : " . $id . "</p>";
          echo "<p>server : (" . $server . ")</p>";
          echo "<p>Total Harga: " . $totalPrice . "</p>";

          $file = fopen("struk.txt", "a");

          fwrite($file, "ID Anda : " . $id . "\n");
          fwrite($file, "Server: " . $server . "\n");
          fwrite($file, "Total Harga: " . $totalPrice . "\n");

          fclose($file);
        }
      } else {
        echo "<p>Data tidak tersedia.</p>";
      }
      ?>
</body>
</html>
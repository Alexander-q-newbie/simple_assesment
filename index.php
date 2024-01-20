<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <?php 
    echo '<table border="1" class="table text-center">';
    ?>
    <thead>
      <tr>
        <th scope="col">A</th>
        <th scope="col">B</th>
      </tr>
    </thead>
  
    <?php
    // Function to read CSV file and return an array of rows
    function readCsvFile($filename) {
        $rows = [];
        if (($csvFile = fopen($filename, "r")) !== FALSE) {
            while (($data = fgetcsv($csvFile)) !== FALSE) {
                $rows[] = $data;
            }
            fclose($csvFile);
        }
        return $rows;
    }

    // Read CSV file into an array
    $csvData = readCsvFile("table_input.csv");

    // Display the table
    foreach ($csvData as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    ?>

    </table>
  </div>

  <?php

  //Adding values from the third row to the fifth row
  $result = array_map(function ($a, $b) {
      return intval($a) + intval($b);
  }, $csvData[5], $csvData[7]);
  ?>

  <script src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


  <footer>
    <div class="container mx-auto">
      <table class="table text-center" style="border: 10px;">
          <thead>
          <tr>
              <th scope="col">Category</th>
              <th scope="col">Value</th>
          </tr>
          </thead>
          <tbody class="table-group-divider">
          <tr>
              <th scope="row" id="row1">Alpha</th>
              <td><?php echo $csvData[5][1] + $csvData[7][1]; ?></td>
          </tr>
          <tr>
              <th scope="row" id="row2">Beta</th>
              <td><?php echo $csvData[15][1] / $csvData[7][1]; ?></td>
          </tr>
          <tr>
            <th scope="row" id="row3">Charlie</th>
            <td><?php echo $csvData[13][1] * $csvData[12][1]; ?></td>
        </tr>
          </tbody>
      </table>
    </div>
  </footer>
</html>
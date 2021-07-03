<html>
<head>

  <!--Bootstrap?-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Stencil+Display:wght@300&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/cashbacksearch.css">

  </style>
</head>
<body>
    
    <?php
        // Read JSON file
    $readjson = file_get_contents('credit_card_info.json') ;

        //Decode JSON
    $data = json_decode($readjson, true);

        //Print data
    print_r($data);
    ?>

  <div class="container-fluid">
    <h1>discard</h1>
    
    <div class="search-label">
      <p class = "heading">Explore cashback rewards for thousands of stores</p>
    </div>
    <form class="input-group" onSubmit="handle(e)">
      <input class="search-bar" type="text" placeholder="Search for cashback opportunities" required>
      <button class="btn btn-default" type="button">hi</button>
    </form>

    <script>
      function handle(e) {
        e.preventDefault();
        document.getElementById("pp").innerHTML = e.target.value;
      }
    </script>

    <p>Input: </p>
    <p id="pp"></p>
  </div>
</body>
</html>
<?php
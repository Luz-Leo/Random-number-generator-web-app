<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <div class="container">
        <form class="form-example" id="form" method="post">
            <h1> Random number generator web app </h1>
            <div class="mb-3">
                <label for='time' class="form-label">How many times you want to roll?</label>
                <input type="number" name="time" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="dice" class="form-label"> Select dice type</label>
                <select name="dice" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option class="dropdown-item" value=4 selected>d4 </option>
                    <option class="dropdown-item" value=6>d6 </option>
                    <option class="dropdown-item" value="8">d8 </option>
                    <option class="dropdown-item" value="10">d10</option>
                    <option class="dropdown-item" value="12">d12</option>
                    <option class="dropdown-item" value="20">d20</option>

                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-secondary" type="submit">Roll</button>
            </div>
            <?php

            if (isset($_POST['time']) && isset($_POST['dice'])) {
                $time = (int) $_POST['time'];
                $type = (int) $_POST['dice'];

                echo "<h3>DICE: d". $type . "</h3>" ;
                for ($i = 0; $i < $time; $i++) {
                    
                    $result = rand(1, $type);

                    echo "<p>Roll " . ($i + 1) . ": " . $result . "</p>";
                }
            }

            ?>
        </form>
    </div>
</body>

</html>
<?php
    session_start();

    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning Poker</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg" >
            <div class="container-fluid container">
              <a class="navbar-brand" href="#">Planning Poker</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-right">
                    <li>
                        <img src="assets/default.png" alt="" class="user-img">
                    </li>
                    <div class="dropdown">
                        <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            $user = $_SESSION['user'];
                            echo $user;
                            ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="logout.php" class="dropdown-item">Cerrar sesión</a>
                            </li>
                        </ul>
                    </div>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <!-- <main>
        <div class="card-container">
            <button class="card" data-card="1">
                <span class="value">1</span>
            </button>
            <button class="card" data-card="2">
                <span class="value">2</span>
            </button>
            <button class="card" data-card="3">
                <span class="value">3</span>
            </button>
            <button class="card" data-card="5">
                <span class="value">5</span>
            </button>
            <button class="card" data-card="8">
                <span class="value">8</span>
            </button>
            <button class="card" data-card="13">
                <span class="value">13</span>
            </button>
            <button class="card" data-card="21">
                <span class="value">21</span>
            </button>
            <button class="card" data-card="34">
                <span class="value">34</span>
            </button>
            <button class="card" data-card="55">
                <span class="value">55</span>
            </button>
            <button class="card" data-card="89">
                <span class="value">89</span>
            </button>
            <button class="card" data-card="?">
                <span class="value">?</span>
            </button>
            <button class="card" data-card="coffe">
                <span class="value">
                    <img src="assets/coffe.png" alt="coffe-img" class="coffe">
                </span>
            </button>
        </div>
    </main> -->
    
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukit Asam - Fleet's Availability Summary</title>
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="../assets/styles/responsive.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="icon" href="../assets/logo/icon.svg" />
    <script defer src="../assets/styles/all.min.js"></script>
</head>
<body>
    <?php include "../codes/connection.php"; ?>
    <header>
        <figure>
            <img src="../assets/logo/logoptba.png" alt="logoPTBA" class="brandptba">
        </figure>
        <h1 class="judul">Bukit Asam Fleet Availability</h1>
    </header>
    <main>
        <?php include "pit2Equipment.php" ?>
        <?php include "pit3Equipment.php" ?>
    </main>
    <footer style="background: var(--blue1); margin-block-start: 0 !important;">
       <p>Copyright &copy; 2022 PT. Bukit Asam (Persero) Tbk. 
        <div style="margin-top: 20px">
            <a href="https://storyset.com/work"> Illustrations by Storyset</a> | SVG Background by <a target="_blank" href="https://bgjar.com">BGJar</a> | Icons by <a target="_blank" href="https://fontawesome.com"> FontAwesome</a></p>
        </div> 
   </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukit Asam - Fleet's Availability Summary</title>
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../assets/logo/icon.svg" />
</head>
<body>
    <?php include "../codes/connection.php"; ?>
    <header>
        <figure>
            <img src="../assets/logo/logoptba.png" alt="logoPTBA" class="brandptba">
        </figure>
        <h1>Bukit Asam Fleet Availability</h1>
        <!-- <div class="boxDate">
            <form action="fleetSummary.php">
                <label for="startdate">Start Date</label>
                <input type="date" id="startdate" name="startdate">
                <label for="startdate">End Date</label>
                <input type="date" id="enddate" name="enddate">
                <button type="submit" name="submitdate"><i class="fa fa-paper-plane" style="margin-inline-end: 10px;"></i>Submit</button>
            </form>
        </div> -->
    </header>
    <main>
        <?php include "pit2Equipment.php" ?>
        <?php include "pit3Equipment.php" ?>
    </main>
    <footer>
        <p>Copyright &copy; 2022  PT. Bukit Asam (Persero) Tbk.</p>
    </footer>
</body>
</html>
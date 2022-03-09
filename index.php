<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukit Asam | Monitoring System</title>
    <link rel="stylesheet" href="assets/styles/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="assets/logo/icon.svg" />
    <script defer src="assets/script.js"></script>
</head>
<body style="background-image: url('assets/bg2.svg'); background-size: cover; background-position: 20% 140px">
    <?php
        if(isset($_GET['login'])){
            if($_GET['login'] == 'wronguser'){
                echo "
                <script>alert('Log In Failed, Wrong Username')
                </script>
                ";
            }
            if($_GET['login'] == 'wrongpass'){
                echo "
                <script>alert('Log In Failed, Wrong Password')</script>
                ";
            }
        }
    ?>
    <header class ="headerhome">
        <figure >
            <img class="brandptba" src="assets/logo/logoptba.png" alt="brandptba">
        </figure>
        <div><a class="loginbtn" href="#" onclick="showlogin()">Log In</a></div>
    </header>
    <div>
        <div class="content">
            <figure>
                <img src="assets/illus/report.svg" alt="reportillustration">
            </figure>
            <figcaption>
                <h2>Monitor All <span style="color: red;">Unit Availability</span></h2>
                <p>Serving status/availability of All Minning Equipment, Fleet Setting, and Flow of Hauler. It will be easier to monitor status of Minning Equipment. </p>
                <a target="_blank" href="pages/fleetSummary.php" class="btngo"><i class="fa fa-paper-plane" style="margin-inline-end: 10px"></i>Check Report</a>
            </figcaption>
        </div>
        <div class="contentlogin">
            <h2>Maintenance Availability Unit and Fleet Setting </h2>
            <p>Already have access as an Administrator? Please Log In.</p>
            <a href="#" class="btnlogin" onclick="showlogin()"><i class="fa fa-sign-in-alt" style="margin-inline-end: 10px"></i>Get Logged In</a>
        </div>
   </div>
   <footer style="background: var(--blue1); margin-block-start: 0 !important;">
       <p>Copyright &copy; 2022 PT. Bukit Asam (Persero) Tbk. | <a href="https://storyset.com/work"> Illustrations by Storyset</a> | SVG Background by <a target="_blank" href="https://bgjar.com">BGJar</a></p>
   </footer>
   <div class="loginbox">
        <div class="loginform">
            <a class="closebtn" href="#" onclick="hidelogin()"><i class="fa fa-lg fa-times-circle "></i></a>
            <figure>
                <img src="assets/illus/login.svg" alt="illustration-login">
            </figure>    
            <div>
                <h2>Log In Form</h2>
                <form action="#" method="get">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div>
                        <label for="passowrd">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <button type="submit" name="logins"><i class="fa fa-sign-in-alt" style="margin-inline-end: 10px;"></i>Log In</button>
                </form>
            </div>
        </div>
        <?php 
            if(isset($_GET['logins'])){
                if($_GET['username'] == 'Administrator'){
                    if($_GET['password'] =='bukitasam2022'){
                        header('Location: pages/admin.php');
                    } else {
                        header('Location:index.php?login=wrongpass');
                    };
                } else {
                    header('Location:index.php?login=wronguser');
                }
            };
        ?>
   </div>
</body>
</html>
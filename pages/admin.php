<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: ../index.php?login=nouser');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukit Asam - Admin Page</title>
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="../assets/styles/responsive.css" />
    <link rel="stylesheet" href="../assets/styles/admin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../assets/logo/icon.svg" />
    <script defer src="../assets/script.js"></script>
</head>
<body style="background: rgba(228, 228, 228, 0.200);">
    <?php include "../codes/connection.php" ?>
    <?php include "../pages/inputLocationUnit.php" ?>
    <?php include "../pages/inputSettingFleet.php"?>
    <?php include "../pages/inputBD.php" ?>
    <?php include "../pages/inputFlow.php" ?>
    
    <header class="navbar">
        <img src="../assets/logo/logoptba.png" alt="navbarimage">
        <div class="side-info">
            <span><i class="fa fa-lg fa-user-circle" style="margin-inline-end: 6px"></i>Welcome, <?php echo $_SESSION['username']?></span>
            <span><a href="../codes/logout.php"><i class="fa fa-lg fa-sign-out-alt" style="margin-inline-end: 6px"></i>Log Out</a></span>
        </div>
    </header>
    <div class="boxcontentadmin">
        <div class="bodycontent">
            <aside>
                <p><i class="fa fa-lg fa-bars" style="margin-inline-end: 15px"></i><a href="admin.php">All Menu</a></p>
                <div class="sidemenu">
                    <a href="?content=location"><i class="fa fa-edit" style="margin-inline-end: 15px"></i>Lokasi Unit</a>
                    <a href="?content=fleet"><i class="fa fa-traffic-light" style="margin-inline-end: 15px"></i>Setting Fleet</a>
                    <a href="?content=status"><i class="fa fa-exclamation-triangle" style="margin-inline-end: 15px"></i>Status Unit</a>
                    <a href="?content=flow"><i class="fa fa-route" style="margin-inline-end: 15px"></i>Flow Unit</a>
                </div>
            </aside>
            <div class="maincontent">
                <?php 
                    if(isset($_GET['content'])){
                        switch($_GET['content']){
                            case 'location' :
                                include "c_location.php";
                                break;
                            case 'fleet' :
                                include "c_fleet.php";
                                break;
                            case 'status' :
                                include "c_status.php";
                                break;
                            case 'flow' :
                                include "c_flow.php";
                                break;
                            default:
                                include "c_home.php";
                                break;
                        }
                    } else {
                        include "c_home.php";
                    }
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>
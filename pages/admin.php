<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukit Asam - Admin Page</title>
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../assets/logo/icon.svg" />
    <script defer src="../assets/script.js"></script>
</head>
<body style="background-image: url('../assets/bg.svg'); background-repeat: no-repeat; ">
    <?php include "../codes/connection.php" ?>
    <?php include "../pages/inputLocationUnit.php" ?>
    <?php include "../pages/inputSettingFleet.php"?>
    <?php include "../pages/inputBD.php" ?>
    <?php include "../pages/inputFlow.php" ?>
    
    <div class="headeradmin" style="margin-block-start: 30px;">
        <details>
            <summary>Administrator Menu (Dispatch Overbudden)</summary>
            <div class="boxmenu">
                <button onclick="showformlocationob()"> <i class="fa fa-edit" style="margin-inline-end: 8px"></i>Update Lokasi Unit</button>
                <button onclick="showforminputfleet()"> <i class="fa fa-traffic-light" style="margin-inline-end: 8px"></i>Update Setting Fleet Unit</button>
                <button onClick="showforminputbdob()"> <i class="fa fa-exclamation-triangle" style="margin-inline-end: 8px"></i>Update Status Unit</button>
                <button onClick="showforminputflow()"> <i class="fa fa-route" style="margin-inline-end: 8px"></i>Update Flow Hauler</button>
            </div>
        </details>
        
    </div>
    <div class="headeradmin">
        <details>
            <summary>Administrator Menu (Dispatch CoalGetting)</summary>
            <div class="boxmenu">
                <button onclick="showformlocationcoal()"> <i class="fa fa-edit" style="margin-inline-end: 8px"></i>Update Lokasi Unit</button>
                <button onclick="showforminputfleetcoal()"> <i class="fa fa-traffic-light" style="margin-inline-end: 8px"></i>Update Setting Fleet Unit</button>
                <button onclick="showforminputbdcoal()"> <i class="fa fa-exclamation-triangle" style="margin-inline-end: 8px"></i>Update Status Unit</button>
                <button onclick="showinputflowcoal()"> <i class="fa fa-route" style="margin-inline-end: 8px"></i>Update Flow Hauler</button>
            </div>
        </details>
    </div>

</body>
</html>
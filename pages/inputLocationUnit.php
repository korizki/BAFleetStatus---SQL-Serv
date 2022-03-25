<div class="outerform" id="updatelocationob">
    <div class='boxinputlocation boxform' >
        <div class='header'>
            <h2>Input Unit Location/Position (Overbudden)</h2>
            <?php 
                if(isset($_GET['statusinput'])){
                    if($_GET['statusinput'] == "success"){
                        echo " <p class='successinputlocation'>Input Data Successfully.</p> 
                        <script>
                            const updatelocationob = document.getElementById('updatelocationob');
                            updatelocationob.style.display = 'block';
                            const success = document.querySelector('.successinputlocation');
                            success.style.display = 'block';
                            setTimeout(function(){
                                const success = document.querySelector('.successinputlocation');
                                success.style.display = 'none'
                            },2000)
                        </script>";
                    }; 
                    if($_GET['statusinput'] == "failed"){
                        echo " <p class='failedinputlocation'>Input Data Failed, Please check again! </p> 
                        <script>
                            const updatelocationob = document.getElementById('updatelocationob');
                            updatelocationob.style.display = 'block';
                            const failed = document.querySelector('.failedinputlocation');
                            failed.style.display = 'block';
                            setTimeout(function(){
                                const failed = document.querySelector('.failedinputlocation');
                                failed.style.display = 'none'
                            },2000)
                        </script>";
                    };
                } 
            ?>
            <i class="fa fa-lg fa-times-circle" onclick="closeform()" style="cursor: pointer"></i>
            
        </div>
        <form action="../codes/handleSubmitLocation.php" autocomplete="off" method="post">
            <label for="unitname">Unit Name</label>
            <input list="listeq" name="unitname" id="unitname">
            <datalist id="listeq">
                <?php 
                    $sqlunit = $connection->query("SELECT * FROM t_unit WHERE unit_type IN ('Dozer','Belaz','PC 1250','HD PPA','Grader','Shovel PC-3000','Excavator','Water Tank','Compac','PC200') ORDER BY unit_name");
                    while($rowunit = $sqlunit->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="area">Area</label>
            <select name="area" id="area">
                <option value="" selected disabled>-- Select Area --</option>
                <option value="PIT 2">PIT 2</option>
                <option value="PIT 3">PIT 3</option>
                <option value="Workshop">Workshop</option>
            </select>
            <label for="location">Location</label>
            <select name="location" id="location">
                <option value="" selected disabled>-- Select Location --</option>
                <option value="Front">Front PIT</option>
                <option value="Jalan">Jalan PIT</option>
                <option value="Disposal">Disposal PIT</option>
                <option value="Workshop">Workshop</option>
            </select>
            <button type="submit" name="submitdata"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
    </div>
</div>
<div class="outerform" id="updatelocationcoal">
    <div class='boxinputlocation boxform' id="updatelocationcoal">
        <div class='header'>
            <h2>Input Unit Location/Position (Coal)</h2>
            <?php 
                if(isset($_GET['statusinput'])){
                    if($_GET['statusinput'] == "successcoal"){
                        echo " <p class='successinputlocation'>Input Data Successfully.</p> 
                        <script>
                            const updatelocationcoal = document.getElementById('updatelocationcoal');
                            updatelocationcoal.style.display = 'block';
                            const success = document.querySelector('.successinputlocation');
                            success.style.display = 'block';
                            setTimeout(function(){
                                const success = document.querySelector('.successinputlocation');
                                success.style.display = 'none'
                            },2000)
                        </script>";
                    }; 
                    if($_GET['statusinput'] == "failedcoal"){
                        echo " <p class='failedinputlocation'>Input Data Failed, Please check again! </p> 
                        <script>
                            const updatelocationcoal = document.getElementById('updatelocationcoal');
                            updatelocationcoal.style.display = 'block';
                            const failed = document.querySelector('.failedinputlocation');
                            failed.style.display = 'block';
                            setTimeout(function(){
                                const failed = document.querySelector('.failedinputlocation');
                                failed.style.display = 'none'
                            },2000)
                        </script>";
                    };
                } 
            ?>
            <i class="fa fa-lg fa-times-circle" onclick="closeformcoal()" style="cursor: pointer"></i>
        </div>
        <form action="../codes/handleSubmitLocation.php" autocomplete="off" method="post">
            <label for="unitname">Unit Name</label>
            <input list="listeqcoal" name="unitname" id="unitname" style="width: 150px;">
            <datalist id="listeqcoal">
                <?php 
                    $sqlunit = $connection->query("SELECT * FROM t_unit WHERE unit_type IN ('Excavator','Excavator Coal','Excavator Tanah') ORDER BY unit_name");
                    while($rowunit = $sqlunit->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="area">Area</label>
            <select name="area" id="area">
                <option value="" selected disabled>-- Area --</option>
                <option value="PIT 2">PIT 2</option>
                <option value="PIT 3">PIT 3</option>
                <option value="Workshop">Workshop</option>
            </select>
            <label for="loadertype">Tipe Loader</label>
            <select name="loadertype" id="loadertype" style="width: 150px;" required>
                <option value="" selected disabled>-- Type Loader --</option>
                <option value="Excavator Coal">Excavator Coal</option>
                <option value="Excavator Tanah">Excavator Tanah</option>
            </select>
            <button type="submit" name="submitdatacoal"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
    </div>
</div>
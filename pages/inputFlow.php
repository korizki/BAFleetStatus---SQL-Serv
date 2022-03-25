<div class="outerform" id="updateflowob">
    <div class='boxinputlocation boxform' >
        <div class='header'>
            <h2>Input Hauler Flow (Overbudden)</h2>
            <?php 
                if(isset($_GET['statusinput'])){
                    if($_GET['statusinput'] == "flowsuccess"){
                        echo " <p class='successinputlocation'>Input Data Successfully.</p> 
                        <script>
                            const updateflow = document.getElementById('updateflowob');
                            updateflow.style.display = 'block';
                            const success = document.querySelector('.successinputlocation');
                            success.style.display = 'block';
                            setTimeout(function(){
                                const success = document.querySelector('.successinputlocation');
                                success.style.display = 'none'
                            },2000)
                        </script>";
                    }; 
                    if($_GET['statusinput'] == "flowfailed"){
                        echo " <p class='failedinputlocation'>Input Data Failed, Please check again! </p> 
                        <script>
                            const updateflow = document.getElementById('updateflowob');
                            updateflow.style.display = 'block';
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
            
        </div>
        <form action="../codes/handleSubmitLocation.php" method="post" autocomplete="off" style="justify-content: center">
            <label for="unitname">Unit Name</label>
            <input list="unitnamesf" name="unitname" id="unitname" style="width: 150px">
            <datalist id="unitnamesf">
                <?php 
                    $sqlunit = $connection->query("SELECT * FROM t_unit WHERE unit_type IN ('Shovel PC-3000','PC 1250') ORDER BY unit_name");
                    while($rowunit = $sqlunit->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="from">From</label>
            <input list="location2" name="from" id="from" style="width: 150px">
            <datalist id="location2">
                <?php 
                    $sqlarea = $connection->query("SELECT * FROM t_area WHERE area_type = 'Overbudden' ORDER BY area_name");
                    while($rowarea = $sqlarea->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowarea['area_name']?>"><?php echo $rowarea['area_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="to">To</label>
            <input list="location3" name="to" id="to" style="width: 150px">
            <datalist id="location3">
                <?php 
                    $sqlarea = $connection->query("SELECT * FROM t_area WHERE area_type = 'Overbudden' ORDER BY area_name");
                    while($rowarea = $sqlarea->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowarea['area_name']?>"><?php echo $rowarea['area_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <button type="submit" name="submitdataflow"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
        <div style="display: flex; justify-content: flex-end">
            <button class="cancelbtnform" onclick = "closeforminputflow()">Back / Cancel</button>
        </div>
    </div>
</div>
<div class="outerform" id="updateflowcoal">
    <div class='boxinputlocation boxform'>
        <div class='header'>
            <h2>Input Hauler Flow (Coal)</h2>
            <?php 
                if(isset($_GET['statusinput'])){
                    if($_GET['statusinput'] == "flowsuccesscoal"){
                        echo " <p class='successinputlocation'>Input Data Successfully.</p> 
                        <script>
                            const updateflowcoal = document.getElementById('updateflowcoal');
                            updateflowcoal.style.display = 'block';
                            const success = document.querySelector('.successinputlocation');
                            success.style.display = 'block';
                            setTimeout(function(){
                                const success = document.querySelector('.successinputlocation');
                                success.style.display = 'none'
                            },2000)
                        </script>";
                    }; 
                    if($_GET['statusinput'] == "flowfailedcoal"){
                        echo " <p class='failedinputlocation'>Input Data Failed, Please check again! </p> 
                        <script>
                            const updateflowcoal = document.getElementById('updateflowcoal');
                            updateflowcoal.style.display = 'block';
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
            
        </div>
        <form action="../codes/handleSubmitLocation.php" method="post" autocomplete="off" style="justify-content: center">
            <label for="unitname">Unit Name</label>
            <input list="unitnamescoal" name="unitname" id="unitname" style="width: 150px">
            <datalist id="unitnamescoal">
                <?php 
                    $sqlunit = $connection->query("SELECT * FROM t_unit WHERE unit_type IN ('Excavator', 'Excavator Tanah','Excavator Coal') ORDER BY unit_name");
                    while($rowunit = $sqlunit->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="from">From</label>
            <input list="locationcoalfrom" name="from" id="from" style="width: 150px">
            <datalist id="locationcoalfrom">
                <?php 
                    $sqlarea = $connection->query("SELECT * FROM t_area WHERE area_type = 'Coal' ORDER BY area_name");
                    while($rowarea = $sqlarea->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowarea['area_name']?>"><?php echo $rowarea['area_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="to">To</label>
            <input list="locationcoalto" name="to" id="to" style="width: 150px">
            <datalist id="locationcoalto">
                <option value="" selected disabled>-- Select Location --</option>
                <?php 
                    $sqlarea = $connection->query("SELECT * FROM t_area WHERE area_type = 'Coal' ORDER BY area_name");
                    while($rowarea = $sqlarea->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowarea['area_name']?>"><?php echo $rowarea['area_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <button type="submit" name="submitdataflowcoal"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
        <div style="display: flex; justify-content: flex-end">
            <button class="cancelbtnform" onclick = "closeforminputflowcoal()">Back / Cancel</button>
        </div>
    </div>
</div>
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
        <form action="../codes/handleSubmitLocation.php" method="post" style="justify-content: center">
            <label for="unitname">Unit Name</label>
            <select name="unitname" id="unitname">
                <option value="" selected disabled>-- Choose Shovel --</option>
                <?php 
                    $sqlunit = mysqli_query($connection, "SELECT * FROM t_unit WHERE unit_type = 'Shovel PC-3000' ORDER BY unit_name");
                    while($rowunit = mysqli_fetch_array($sqlunit)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </select>
            <label for="from">From</label>
            <select name="from" id="from">
                <option value="" selected disabled>-- Select Location --</option>
                <?php 
                    $sqlarea = mysqli_query($connection, "SELECT * FROM t_area WHERE area_type = 'Overbudden' ORDER BY area_name");
                    while($rowarea = mysqli_fetch_array($sqlarea)){
                        ?>
                            <option value="<?php echo $rowarea['area_name']?>"><?php echo $rowarea['area_name']?></option>
                        <?php
                    }
                ?>
            </select>
            <label for="to">To</label>
            <select name="to" id="to">
                <option value="" selected disabled>-- Select Location --</option>
                <?php 
                    $sqlarea = mysqli_query($connection, "SELECT * FROM t_area WHERE area_type = 'Overbudden' ORDER BY area_name");
                    while($rowarea = mysqli_fetch_array($sqlarea)){
                        ?>
                            <option value="<?php echo $rowarea['area_name']?>"><?php echo $rowarea['area_name']?></option>
                        <?php
                    }
                ?>
            </select>
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
        <form action="../codes/handleSubmitLocation.php" method="post" style="justify-content: center">
            <label for="unitname">Unit Name</label>
            <select name="unitname" id="unitname">
                <option value="" selected disabled>-- Choose Excavator --</option>
                <?php 
                    $sqlunit = mysqli_query($connection, "SELECT * FROM t_unit WHERE unit_type IN ('Excavator', 'Excavator Tanah','Excavator Coal') ORDER BY unit_name");
                    while($rowunit = mysqli_fetch_array($sqlunit)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </select>
            <label for="from">From</label>
            <select name="from" id="from">
                <option value="" selected disabled>-- Select Location --</option>
                <?php 
                    $sqlarea = mysqli_query($connection, "SELECT * FROM t_area WHERE area_type = 'Coal' ORDER BY area_name");
                    while($rowarea = mysqli_fetch_array($sqlarea)){
                        ?>
                            <option value="<?php echo $rowarea['area_name']?>"><?php echo $rowarea['area_name']?></option>
                        <?php
                    }
                ?>
            </select>
            <label for="to">To</label>
            <select name="to" id="to">
                <option value="" selected disabled>-- Select Location --</option>
                <?php 
                    $sqlarea = mysqli_query($connection, "SELECT * FROM t_area WHERE area_type = 'Coal' ORDER BY area_name");
                    while($rowarea = mysqli_fetch_array($sqlarea)){
                        ?>
                            <option value="<?php echo $rowarea['area_name']?>"><?php echo $rowarea['area_name']?></option>
                        <?php
                    }
                ?>
            </select>
            <button type="submit" name="submitdataflowcoal"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
        <div style="display: flex; justify-content: flex-end">
            <button class="cancelbtnform" onclick = "closeforminputflowcoal()">Back / Cancel</button>
        </div>
    </div>
</div>
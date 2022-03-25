<div class="outerform" id="updatesettingfleet">
    <div class='boxinputlocation boxform' >
        <div class='header'>
            <h2>Input Setting Fleet (Overbudden)</h2>
            <?php 
                if(isset($_GET['statusinput'])){
                    if($_GET['statusinput'] == "fleetsuccess"){
                        echo " <p class='successinputlocation'>Input Data Successfully.</p> 
                        <script>
                            const updatefleet = document.getElementById('updatesettingfleet');
                            updatefleet.style.display = 'block';
                            const success = document.querySelector('.successinputlocation');
                            success.style.display = 'block';
                            setTimeout(function(){
                                const success = document.querySelector('.successinputlocation');
                                success.style.display = 'none'
                            },2000)
                        </script>";
                    }; 
                    if($_GET['statusinput'] == "fleetfailed"){
                        echo " <p class='failedinputlocation'>Input Data Failed, Please check again! </p> 
                        <script>
                            const updatefleet = document.getElementById('updatesettingfleet');
                            updatefleet.style.display = 'block';
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
            <input list="listloader" name="unitname" id="unitname" >
            <datalist id="listloader">
                <?php 
                    $sqlunit = $connection->query("SELECT * FROM t_unit WHERE unit_type IN ('Shovel PC-3000','PC 1250') ORDER BY unit_name");
                    while($rowunit = $sqlunit->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="totalhauler">Total Hauler</label>
            <input type="number" name="totalhauler" id="totalhauler" style="width: 100px">
            <button type="submit" name="submitdatafleet"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
        <div style="display: flex; justify-content: flex-end">
            <button class="cancelbtnform" onclick = "closeformfleetob()">Back / Cancel</button>
        </div>
    </div>
</div>
<div class="outerform" id="updatesettingfleetcoal">
    <div class='boxinputlocation boxform' >
        <div class='header'>
            <h2>Input Setting Fleet (Coal)</h2>
            <?php 
                if(isset($_GET['statusinput'])){
                    if($_GET['statusinput'] == "fleetcoalsuccess"){
                        echo " <p class='successinputlocation'>Input Data Successfully.</p> 
                        <script>
                            const updatefleetcoal = document.getElementById('updatesettingfleetcoal');
                            updatefleetcoal.style.display = 'block';
                            const success = document.querySelector('.successinputlocation');
                            success.style.display = 'block';
                            setTimeout(function(){
                                const success = document.querySelector('.successinputlocation');
                                success.style.display = 'none'
                            },2000)
                        </script>";
                    }; 
                    if($_GET['statusinput'] == "fleetcoalfailed"){
                        echo " <p class='failedinputlocation'>Input Data Failed, Please check again! </p> 
                        <script>
                            const updatefleet = document.getElementById('updatesettingfleetcoal');
                            updatefleetcoal.style.display = 'block';
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
        <form action="../codes/handleSubmitLocation.php" autocomplete="off" method="post" style="justify-content: center">
            <label for="unitname">Unit Name</label>
            <input list="listloadcoal" name="unitname" id="unitname">
            <datalist id="listloadcoal">
                <?php 
                    $sqlunit = $connection->query("SELECT * FROM t_unit WHERE unit_type IN ('Excavator','Excavator Tanah','Excavator Coal') ORDER BY unit_name");
                    while($rowunit = $sqlunit->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="totalhauler">Total Hauler</label>
            <input type="number" name="totalhauler" id="totalhauler" style="width: 100px">
            <button type="submit" name="submitdatafleetcoal"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
        <div style="display: flex; justify-content: flex-end">
            <button class="cancelbtnform" onclick = "closeformfleetcoal()">Back / Cancel</button>
        </div>
    </div>
</div>
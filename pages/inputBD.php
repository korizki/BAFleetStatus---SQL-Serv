<div class="outerform" id="updatebdob">
    <div class='boxinputlocation boxform' >
        <div class='header'>
            <h2>Update Status Unit (Overbudden)</h2>
            <?php 
                if(isset($_GET['statusinput'])){
                    if($_GET['statusinput'] == "bdsuccess"){
                        echo " <p class='successinputlocation'>Input Data Successfully.</p> 
                        <script>
                            const updatebd = document.getElementById('updatebdob');
                            updatebd.style.display = 'block';
                            const success = document.querySelector('.successinputlocation');
                            success.style.display = 'block';
                            setTimeout(function(){
                                const success = document.querySelector('.successinputlocation');
                                success.style.display = 'none'
                            },2000)
                        </script>";
                    }; 
                    if($_GET['statusinput'] == "bdfailed"){
                        echo " <p class='failedinputlocation'>Input Data Failed, Please check again! </p> 
                        <script>
                            const updatebd = document.getElementById('updatebdob');
                            updatebd.style.display = 'block';
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
            <i class="fa fa-lg fa-times-circle" onclick="closeformbdob()" style="cursor: pointer"></i>
        </div>
        <form action="../codes/handleSubmitLocation.php" method="post" autocomplete="off" style="justify-content: center">
            <label for="unitname">Unit Name</label>
            <input list="unitnames" name="unitname" id="unitname">
            <datalist id="unitnames">
                <?php 
                    $sqlunit = $connection->query("SELECT * FROM t_unit WHERE unit_type IN ('Shovel PC-3000','Grader','Dozer','Belaz','PC 1250','HD PPA','PC200','Water Tank','Compac') ORDER BY unit_name");
                    while($rowunit = $sqlunit->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            <label for="type">Status</label>
            <select name="type" id="type" class="combostatus">
                <option value="" disabled selected>-- Status --</option>
                <option value="Ready">Ready</option>
                <option value="Breakdown">Breakdown</option>
                <option value="Standby">Standby</option>
                <option value="General">General</option>
            </select>
            <label for="detailstatus">Detail</label>
            <input type="text" id="detailstatus" name="detailstatus" >
            <button type="submit" name="submitdatabd"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
    </div>
</div>
<div class="outerform" id="updatebdcoal">
    <div class='boxinputlocation boxform' >
        <div class='header'>
            <h2>Update Status Unit (Coal)</h2>
            <?php 
                if(isset($_GET['statusinput'])){
                    if($_GET['statusinput'] == "bdcoalsuccess"){
                        echo " <p class='successinputlocation'>Input Data Successfully.</p> 
                        <script>
                            const updatebdcoal = document.getElementById('updatebdcoal');
                            updatebdcoal.style.display = 'block';
                            const success = document.querySelector('.successinputlocation');
                            success.style.display = 'block';
                            setTimeout(function(){
                                const success = document.querySelector('.successinputlocation');
                                success.style.display = 'none'
                            },2000)
                        </script>";
                    }; 
                    if($_GET['statusinput'] == "bdcoalfailed"){
                        echo " <p class='failedinputlocation'>Input Data Failed, Please check again! </p> 
                        <script>
                            const updatebdcoal = document.getElementById('updatebdcoal');
                            updatebdcoal.style.display = 'block';
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
            <i class="fa fa-lg fa-times-circle" onclick="closeformbdcoal()" style="cursor: pointer"></i>
        </div>
        <form action="../codes/handleSubmitLocation.php" method="post" autocomplete="off" style="justify-content: center">
            <label for="unitname">Unit Name</label>
            <input list="unitnames2" name="unitname" id="unitname">
            <datalist id="unitnames2">
                <?php 
                    $sqlunit = $connection->query("SELECT * FROM t_unit WHERE unit_type IN ('Excavator','Excavator Tanah','Excavator Coal', 'DT Kamaz') ORDER BY unit_name");
                    while($rowunit = $sqlunit->fetch(PDO::FETCH_ASSOC)){
                        ?>
                            <option value="<?php echo $rowunit['unit_name']?>"><?php echo $rowunit['unit_name']?></option>
                        <?php
                    }
                ?>
            </datalist>
            
            <label for="type">Status</label>
            <select name="type" id="type" class="combostatus">
                <option value="" disabled selected>-- Status --</option>
                <option value="Ready">Ready</option>
                <option value="Breakdown">Breakdown</option>
                <option value="Standby">Standby</option>
                <option value="General">General</option>
            </select>
            <label for="detailstatus">Detail</label>
            <input type="text" id="detailstatus" name="detailstatus" >
            <button type="submit" name="submitdatabdcoal"><i class="fa fa-paper-plane" style="margin-inline-end: 8px" ></i>Submit Data</button>
        </form>
    </div>
</div>
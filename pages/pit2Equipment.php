<?php 
    include "../codes/queryLocation.php";
    include "../codes/queryFleet.php";
?>
<article class="boxlocation">
    <h3><i class="fa fa-map-marker-alt" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>PIT 2 Banko Barat | Primary Mining Equipment</h3>
    <div class="boxeqtype">
        <div class="boxShovel">
            <div class="shovelsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo mysqli_num_rows($readypit2)?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo mysqli_num_rows($breakdownpit2)?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo mysqli_num_rows($standbypit2)?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type LIKE 'Shovel PC-3000' AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel" style=" justify-content: space-around">
                            <img src="../assets/logo/exca.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status']?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center"><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Unit</p>
                            <p style="width: 240px; text-align:center"><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        <div class="boxShovel" style="font-size: 0.9rem">
            <div class="shovelsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo mysqli_num_rows($readyexpit2)?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo mysqli_num_rows($breakdownexpit2)?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo mysqli_num_rows($standbyexpit2)?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo mysqli_num_rows($generalexpit2)?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type = 'Excavator Coal' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel" style=" justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'] ?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status']?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center"><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Unit</p>
                            <p style="width: 190px; text-align:center"><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        
        </div>
    </div>
    <h3 style="margin-top: 80px;"><i class="fa fa-map-marker-alt" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>PIT 2 Banko Barat | Mining Support Equipment</h3>
    <div class="boxeqtype">
        <div class="boxapt">
            <div class='aptarea'>
                <h2><i class="fa fa-truck-loading " style="margin-inline-end: 10px;"></i>Area Front (<?php echo mysqli_num_rows($queryaptfrontpit2)?> Unit) </h2>
                <div>
                    <?php 
                        while($rowaptfront = mysqli_fetch_array($queryaptfrontpit2)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptfront['unit_name']))['status'] ?>"><?php echo $rowaptfront['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-dumpster" style="margin-inline-end: 10px;"></i>Area Disposal (<?php echo mysqli_num_rows($queryaptdisposalpit2)?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptdisposal = mysqli_fetch_array($queryaptdisposalpit2)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptdisposal['unit_name']))['status'] ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Area Jalan (<?php echo mysqli_num_rows($queryaptjalanpit2)?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = mysqli_fetch_array($queryaptjalanpit2)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptjalan['unit_name']))['status'] ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</article>
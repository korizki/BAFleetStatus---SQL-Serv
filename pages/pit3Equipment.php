
<article class="boxlocation" style="margin-block-start: 100px">
    <h3><i class="fa fa-map-marker-alt" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>PIT 3 Banko Barat | Primary Mining Equipment</h3>
    <div class="boxeqtype">
        <div class="boxShovel">
            <div class="shovelsummary" style="justify-content: space-around">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo mysqli_num_rows($readypit3)?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo mysqli_num_rows($breakdownpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo mysqli_num_rows($standbypit3)?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type LIKE 'Shovel PC-3000' AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel" style=" justify-content: space-around">
                            <img src="../assets/logo/exca.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status']?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px;"><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Unit</p>
                            <p><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <div class="boxeqtype" style="margin-block-start: 30px">
        <div class="boxShovel" style="font-size: 0.9rem">
            <div class="shovelsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo mysqli_num_rows($readyexpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo mysqli_num_rows($breakdownexpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo mysqli_num_rows($standbyexpit3)?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo mysqli_num_rows($generalexpit3)?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type = 'Excavator Coal' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel" style="justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 10px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center"><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Unit</p>
                            <p style="width: 170px; text-align:center"><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        <div class="boxShovel" style="font-size: 0.9rem">
            <div class="shovelsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo mysqli_num_rows($readyextanahpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo mysqli_num_rows($breakdownextanahpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo mysqli_num_rows($standbyextanahpit3)?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo mysqli_num_rows($generalextanahpit3)?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type = 'Excavator Tanah' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel" style="justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 10px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center "><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Unit</p>
                            <p style="width: 170px; text-align:center"><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
    <h3 style="margin-top: 80px;"><i class="fa fa-map-marker-alt" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>PIT 3 Banko Barat | Mining Support Equipment</h3>
    <div class="boxeqtype">
        <div class="boxapt">
            <div class='aptarea'>
                <h2><i class="fa fa-truck-loading " style="margin-inline-end: 10px;"></i>Area Front (<?php echo mysqli_num_rows($queryaptfrontpit3)?> Unit) </h2>
                <div>
                    <?php 
                        while($rowaptfront = mysqli_fetch_array($queryaptfrontpit3)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptfront['unit_name']))['status'] ?>"><?php echo $rowaptfront['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-dumpster" style="margin-inline-end: 10px;"></i>Area Disposal (<?php echo mysqli_num_rows($queryaptdisposalpit3)?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptdisposal = mysqli_fetch_array($queryaptdisposalpit3)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptdisposal['unit_name']))['status'] ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Area Jalan (<?php echo mysqli_num_rows($queryaptjalanpit3)?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = mysqli_fetch_array($queryaptjalanpit3)){
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
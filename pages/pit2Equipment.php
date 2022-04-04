<?php 
    include "../codes/queryLocation.php";
    include "../codes/queryFleet.php";
?>
<article class="boxlocation">
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Overbudden | Primary Mining Equipment</h3>
    <div class="boxeqtype">
        <div class="boxShovel">
            <h1>PIT 2 Banko Barat</h1>
            <div class="shovelsummary">
                <div>
                    <h3>Ready</h3>
                    <p >Shovel : <span> <?php echo $readypit2->fetchColumn()?> Unit<span></p>
                    <p >PC | PPA : <span><?php echo countUnit('PIT 2', 'PC 1250', 'Ready')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($belazready2) ?>">Belaz : <span><?php echo countUnit('PIT 2', 'Belaz', 'Ready')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($hdready2) ?>">HD | PPA : <span><?php echo countUnit('PIT 2', 'HD PPA', 'Ready')->fetchColumn()?> Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p >Shovel : <span><?php echo $breakdownpit2->fetchColumn()?> Unit</span></p>
                    <p >PC | PPA : <span><?php echo countUnit('PIT 2', 'PC 1250', 'Breakdown')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($belazbd2) ?>">Belaz : <span><?php echo countUnit('PIT 2', 'Belaz', 'Breakdown')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($hdbd2) ?>">HD | PPA : <span><?php echo countUnit('PIT 2', 'HD PPA', 'Breakdown')->fetchColumn()?> Unit</span></p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p >Shovel : <span><?php echo $standbypit2->fetchColumn()?> Unit</span></p>
                    <p >PC | PPA : <span><?php echo countUnit('PIT 2', 'PC 1250', 'Standby')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($belazst2) ?>">Belaz : <span><?php echo countUnit('PIT 2', 'Belaz', 'Standby')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($hdst2) ?>">HD | PPA : <span><?php echo countUnit('PIT 2', 'HD PPA', 'Standby')->fetchColumn()?> Unit</span></p>
                </div>
            </div>
            <div class="datainfo">
                <p>Loader Name</p>
                <p>Fleet Setting</p>
                <p>Flow Info</p>
            </div>
            <?php 
                $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type IN ('Shovel PC-3000', 'PC 1250') AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name ASC");
                while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="boxdetailshovel" style=" justify-content: space-around">
                            <img src="../assets/logo/exca.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?> "><?php echo $rowshovel['unit_name'] ?></h4>
                            <div class="setUnit">
                                <p style="width: 100px; text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Belaz')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Belaz')->fetchColumn(2)." Belaz"; ?> </p>
                                <p style="width: 100px"><?php echo (getFleet($rowshovel['unit_name'], 'HD PPA')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'HD PPA')->fetchColumn(2)." HD PPA"; ?></p>
                            </div>
                            <p style="width: 240px; text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        <!-- <div class="boxeqtype"> -->
        <div class="boxShovel">
            <h1>PIT 3 Banko Barat</h1>
            <div class="shovelsummary" style="justify-content: space-around">
                <div>
                    <h3>Ready</h3>
                    <p>Shovel : <span><?php echo $readypit3->fetchColumn()?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 3', 'PC 1250', 'Ready')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($belazready3) ?>">Belaz : <span><?php echo countUnit('PIT 3', 'Belaz', 'Ready')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($hdready3) ?>">HD | PPA : <span><?php echo countUnit('PIT 3', 'HD PPA', 'Ready')->fetchColumn()?> Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Shovel : <span><?php echo $breakdownpit3->fetchColumn()?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 3', 'PC 1250', 'Breakdown')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($belazbd3) ?>">Belaz : <span><?php echo countUnit('PIT 3', 'Belaz', 'Breakdown')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($hdbd3) ?>">HD | PPA : <span><?php echo countUnit('PIT 3', 'HD PPA', 'Breakdown')->fetchColumn()?> Unit</span></p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p>Shovel : <span><?php echo $standbypit3->fetchColumn()?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo countUnit('PIT 3', 'PC 1250', 'Standby')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($belazst3) ?>">Belaz : <span><?php echo countUnit('PIT 3', 'Belaz', 'Standby')->fetchColumn()?> Unit</span></p>
                    <p title ="<?php echo PrintUnit($hdst3) ?>">HD | PPA : <span><?php echo countUnit('PIT 3', 'HD PPA', 'Standby')->fetchColumn()?> Unit</span></p>
                </div>
            </div>
            <div class="datainfo">
                <p>Loader Name</p>
                <p>Fleet Setting</p>
                <p>Flow Info</p>
            </div>
            <?php 
                $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type IN ('Shovel PC-3000','PC 1250') AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name DESC" );
                while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <div class="boxdetailshovel pit3" style=" justify-content: space-around">
                            <img src="../assets/logo/exca.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0);?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <div class="setUnit">
                                <p style="width: 100px; text-align:center"><?php echo (getFleet($rowshovel['unit_name'], 'Belaz')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Belaz')->fetchColumn(2)." Belaz"; ?> </p>
                                <p style="width: 100px"><?php echo (getFleet($rowshovel['unit_name'], 'HD PPA')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'HD PPA')->fetchColumn(2)." HD PPA"; ?></p>
                            </div>
                            <p><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
        
    </div>
    <h3 style="margin-top: 80px;" class="judulapt"><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;" ></i>Overbudden | Mining Support Equipment</h3>
    <div class="boxeqtype">
        <div class="boxapt">
            <div class='aptarea'>
                <h2><i class="fa fa-snowplow " style="margin-inline-end: 10px;"></i>Dozer | PIT 2 (<?php echo filterUnitAPT('PIT 2', 'Dozer')->fetchColumn()?> Unit) </h2>
                <div>
                    <?php 
                        while($rowaptfront = $querydozerpit2->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" ><?php echo $rowaptfront['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Grader | PIT 2 (<?php echo filterUnitAPT('PIT 2', 'Grader')->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptdisposal = $querygraderpit2->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-caret-square-down" style="margin-inline-end: 10px;"></i>Compac | PIT 2 (<?php echo filterUnitAPT('PIT 2', 'Compac')->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = $querycompacpit2->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-check-double" style="margin-inline-end: 10px;"></i>PC 200 | PIT 2 (<?php echo filterUnitAPT('PIT 2', 'PC200')->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = $querypcpit2->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-tint" style="margin-inline-end: 10px;"></i>Water Tank | PIT 2 (<?php echo filterUnitAPT('PIT 2', 'Water Tank')->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = $querywtpit2->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="boxapt">
            <div class='aptarea'>
                <h2><i class="fa fa-snowplow " style="margin-inline-end: 10px;"></i>Dozer | PIT 3 (<?php echo filterUnitAPT('PIT 3', 'Dozer')->fetchColumn()?> Unit) </h2>
                <div>
                    <?php 
                        while($rowaptfront = $querydozerpit3->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" ><?php echo $rowaptfront['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Grader | PIT 3 (<?php echo filterUnitAPT('PIT 3', 'Grader')->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptdisposal = $querygraderpit3->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-caret-square-down" style="margin-inline-end: 10px;"></i>Compac | PIT 3 (<?php echo filterUnitAPT('PIT 3', 'Compac')->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = $querycompacpit3->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-check-double" style="margin-inline-end: 10px;"></i>PC 200 | PIT 3 (<?php echo filterUnitAPT('PIT 3', 'PC200')->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = $querypcpit3->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-tint" style="margin-inline-end: 10px;"></i>Water Tank | PIT 3 (<?php echo filterUnitAPT('PIT 3', 'Water Tank')->fetchColumn()?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = $querywtpit3->fetch(PDO::FETCH_ASSOC)){
                            ?>
                                <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</article>
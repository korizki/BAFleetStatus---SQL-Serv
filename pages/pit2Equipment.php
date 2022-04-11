<?php 
    include "../codes/queryLocation.php";
    include "../codes/queryFleet.php";
?>
<article class="boxlocation">
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Overbudden | PIT 2</h3>
    <div class="boxeqtype">
        <div class="boxShovel" style="flex: 2">
            <h1>Primary Mining Equipment</h1>
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
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Loader Info</th>
                            <th>Status</th>
                            <th>Setting Fleet</th>
                            <th>Flow</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type IN ('Shovel PC-3000', 'PC 1250') AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name ASC");
                            while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    <tr >
                                        <td><?php echo $no ++."."?></td>
                                        <td>
                                            <h4 id="shovelName" style="padding: 5px 10px; margin-bottom: 5px; display: inline-block; border-bottom: 1px solid var(--line)" ><?php echo $rowshovel['unit_name'] ?></h4>
                                            <p><?php echo getUnitType($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?></p>
                                        </td>
                                        <td>
                                            <span class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?> "><?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?></span>
                                        </td>
                                        <td>
                                            <div class="setUnit">
                                                <p> <?php echo (getFleet($rowshovel['unit_name'], 'Belaz')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Belaz')->fetchColumn(2)." Belaz"; ?> </p>
                                                <p> <?php echo (getFleet($rowshovel['unit_name'], 'HD PPA')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'HD PPA')->fetchColumn(2)." HD PPA"; ?></p>
                                            </div>
                                        </td>
                                        <td><p style="text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p></td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class='boxeqtype' style="flex: 1">
            <div class="boxapt">
                <div class='aptarea boxShovel'>
                    <h1>Mining Support Unit</h1>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-snowplow " style="margin-inline-end: 10px;"></i>Dozer <span style="float: right"><?php echo filterUnitAPT('PIT 2', 'Dozer')->fetchColumn()?> Unit </span></summary>
                        <div>
                            <?php 
                                while($rowaptfront = $querydozerpit2->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" ><?php echo $rowaptfront['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Grader <span style="float: right"><?php echo filterUnitAPT('PIT 2', 'Grader')->fetchColumn()?> Unit</span></summary>
                        <div>
                            <?php 
                                while($rowaptdisposal = $querygraderpit2->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-caret-square-down" style="margin-inline-end: 10px;"></i>Compac <span style="float: right"><?php echo filterUnitAPT('PIT 2', 'Compac')->fetchColumn()?> Unit</span></summary>
                        <div>
                            <?php 
                                while($rowaptjalan = $querycompacpit2->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-check-double" style="margin-inline-end: 10px;"></i>PC 200 <span style="float: right"><?php echo filterUnitAPT('PIT 2', 'PC200')->fetchColumn()?> Unit</span></summary>
                        <div>
                            <?php 
                                while($rowaptjalan = $querypcpit2->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-tint" style="margin-inline-end: 10px;"></i>Water Tank <span style="float: right"><?php echo filterUnitAPT('PIT 2', 'Water Tank')->fetchColumn()?> Unit</span></summary>
                        <div>
                            <?php 
                                while($rowaptjalan = $querywtpit2->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
</article>
<article class="boxlocation" style="margin-top: 40px">
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Overbudden | PIT 3</h3>
    <div class="boxeqtype">
        <div class="boxShovel" style="flex: 2">
            <h1>Primary Mining Equipment</h1>
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
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Loader Info</th>
                            <th>Status</th>
                            <th>Setting Fleet</th>
                            <th>Flow</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            $queryshovel = $connection->query("SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type IN ('Shovel PC-3000', 'PC 1250') AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name ASC");
                            while($rowshovel = $queryshovel->fetch(PDO::FETCH_ASSOC)){
                                ?>
                                    <tr >
                                        <td><?php echo $no ++."."?></td>
                                        <td>
                                            <h4 id="shovelName" style="padding: 5px 10px; margin-bottom: 5px; display: inline-block; border-bottom: 1px solid var(--line)" ><?php echo $rowshovel['unit_name'] ?></h4>
                                            <p><?php echo getUnitType($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN,0)?></p>
                                        </td>
                                        <td>
                                            <span class="shovelstatus <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" title="Unit <?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?> | <?php echo getDetail($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?> "><?php echo getStatus($rowshovel['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?></span>
                                        </td>
                                        <td>
                                            <div class="setUnit">
                                                <p> <?php echo (getFleet($rowshovel['unit_name'], 'Belaz')->fetchColumn(2) == 0)? "" : getFleet($rowshovel['unit_name'], 'Belaz')->fetchColumn(2)." Belaz"; ?> </p>
                                                <p> <?php echo (getFleet($rowshovel['unit_name'], 'HD PPA')->fetchColumn(2) == 0) ? "" : getFleet($rowshovel['unit_name'], 'HD PPA')->fetchColumn(2)." HD PPA"; ?></p>
                                            </div>
                                        </td>
                                        <td><p style="text-align:center"><?php echo getflow($rowshovel['unit_name'])->fetchColumn(2);?></p></td>
                                    </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        <div class='boxeqtype' style="flex: 1">
            <div class="boxapt">
                <div class='aptarea boxShovel'>
                    <h1>Mining Support Unit</h1>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-snowplow " style="margin-inline-end: 10px;"></i>Dozer <span style="float: right"><?php echo filterUnitAPT('PIT 3', 'Dozer')->fetchColumn()?> Unit </span></summary>
                        <div>
                            <?php 
                                while($rowaptfront = $querydozerpit3->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptfront['unit_name'])->fetch(PDO::FETCH_COLUMN, 0)?>" ><?php echo $rowaptfront['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Grader <span style="float: right"><?php echo filterUnitAPT('PIT 3', 'Grader')->fetchColumn()?> Unit</span></summary>
                        <div>
                            <?php 
                                while($rowaptdisposal = $querygraderpit3->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>" title="<?php echo getDetail($rowaptdisposal['unit_name'])->fetch(PDO::FETCH_COLUMN, 0) ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-caret-square-down" style="margin-inline-end: 10px;"></i>Compac <span style="float: right"><?php echo filterUnitAPT('PIT 3', 'Compac')->fetchColumn()?> Unit</span></summary>
                        <div>
                            <?php 
                                while($rowaptjalan = $querycompacpit3->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-check-double" style="margin-inline-end: 10px;"></i>PC 200 <span style="float: right"><?php echo filterUnitAPT('PIT 3', 'PC200')->fetchColumn()?> Unit</span></summary>
                        <div>
                            <?php 
                                while($rowaptjalan = $querypcpit3->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                    <details title="Click to Expand">
                        <summary><i class="fa fa-tint" style="margin-inline-end: 10px;"></i>Water Tank <span style="float: right"><?php echo filterUnitAPT('PIT 3', 'Water Tank')->fetchColumn()?> Unit</span></summary>
                        <div>
                            <?php 
                                while($rowaptjalan = $querywtpit3->fetch(PDO::FETCH_ASSOC)){
                                    ?>
                                        <p class="<?php echo getStatus($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>" title="<?php echo getDetail($rowaptjalan['unit_name'])->fetch(PDO::FETCH_COLUMN,0) ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                                    <?php
                                }
                            ?>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </div>
</article>
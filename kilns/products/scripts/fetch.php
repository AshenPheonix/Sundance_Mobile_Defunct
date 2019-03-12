<?php
    require_once ROOT.'/mobile/includes/dbs/kilns.php';
    foreach ($kilns as $key => $value) {
        if ( strpos($_SERVER["PHP_SELF"], $value->specsLoc) ){
            $kiln=$value;
            break;
        }
    }

    function specifications($type, $impSpec, $volume, $depth, $length, $width, $outer, $ship, $weight, $temp, $amps, $phase, $watts, $nema, $breaker, $wireSize, $TUV, $CE, $Voltage, $hertz, $plug, $shipNotations, $controller=null)
    {
        switch ($type) {
            case 'Top Loading Square':
                $pic = 'dimen_top_square.jpg';
                break;
            
            case 'Front Loading Square':
                $pic = 'dimen_front_square.jpg';
                break;
            default:
                $pic =  'dimen_top_round.jpg';
                break;
        }
        ?>
            <hr class="my-3">
            <div class="row">
                <div class="col">
                    <div class="h3">Specifications</div>
                </div>
            </div>
            <hr>
            <div class="row spec">
                <div class="col-6">
                    Kiln Type
                </div>
                <div class="col-6">
                    <?=$type;?>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6">
                    <?=$impSpec[0];?>
                </div>
                <div class="col-6">
                    <?=$impSpec[1];?>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Understanding Chamber Measurements
                </div>
                <div class="col flex-image">
                    <img src="../images/<?=$pic;?>" alt="Diagram of Measurements" class="img-fluid">
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Chamber Volume
                </div>
                <div class="col-6">
                    <?=$volume;?> feet<sup>3</sup><br>
                    <?=round( $volume*28.31684659 ,2);?> Litres
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Chamber <?=$width[0];?>
                </div>
                <div class="col-6">
                    <?=$width[1];?> Inches<br>
                    <?=round($width[1] * 25.4,2);?> mm
                </div>
            </div>
            <?php if(isset($length)):?>
                <div class="row spec">
                    <div class="col-6 flex-text">
                        Chamber Length
                    </div>
                    <div class="col-6">
                        <?=$length;?> Inches<br>
                        <?=round($length*25.4);?> mm
                    </div>
                </div>
            <?php endif; ?>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Chamber Depth
                </div>
                <div class="col-6">
                    <?=$depth;?> Inches<br>
                     <?=round($depth * 25.4, 2);?> mm
                </div>
            </div>
            <div class="row spec">
                <div class="col flex-text">
                    The Outer Size of the Kiln and The Shipping Size: Width = Left to Right; Depth = Front to Back; Height = Top to Bottom<br>Measurements are in Width/Depth/Height
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Outer Size
                </div>
                <div class="col-6 flex-text pt-3">
                    <p>
                        <?=$outer[0];?> x <?=$outer[1];?> x <?=$outer[2];?> Inches
                    </p>
                    <p>
                        <?=round($outer[0]*25.4);?> x <?=round($outer[1]*25.4);?> x <?=round($outer[2]*25.4);?> mm
                    </p>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Ship Size
                </div>
                <div class="col-6 flex-text pt-3">
                    <p>
                        <?=$ship[0];?> x <?=$ship[1];?> x <?=$ship[2];?> Inches
                    </p>
                    <p>
                        <?=round($ship[0]*25.4);?> x <?=round($ship[1]*25.4);?> x <?=round($ship[2]*25.4);?> mm
                    </p>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Ship Weight
                </div>
                <div class="col-6 flex-text">
                    <?=$weight;?> Lbs<br>
                    <?=round($weight*.45359237, 2);?> Kg
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Max Temperature
                </div>
                <div class="col-6 flex-text">
                    <?=$temp;?> &deg;F<br>
                    <?=round( ($temp-32)*(5/9), 2);?> &deg;C
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Amps
                </div>
                <div class="col-6 flex-text">
                    <?=$amps;?>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Phase
                </div>
                <div class="col-6 flex-text">
                    <?=$phase;?>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Watts
                </div>
                <div class="col-6 flex-text">
                    <?=$watts;?>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Nema
                </div>
                <div class="col-6 flex-text">
                    <?=$nema;?>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Breaker Size
                </div>
                <div class="col-6 flex-text">
                    <?=$breaker;?>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Circuit Copper Wire Size
                </div>
                <div class="col-6 flex-text">
                    <?=$wireSize;?> Guage
                </div>
            </div>
            <?php if(isset($TUV)):?>
                <div class="row spec">
                    <div class="col-6 flex-text">
                        TUV test to CSA and UL Standard 499
                    </div>
                    <div class="col-6 flex-text">
                        <?=$TUV;?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if(isset($CE)):?>
                <div class="row spec">
                    <div class="col-6 flex-text">
                        CE
                    </div>
                    <div class="col-6 flex-text">
                        <?=$CE;?>
                    </div>
                </div>    
            <?php endif; ?>
            <div class="row spec">
                <div class="col">
                    IMPORTANT: Some Areas Such as Canada and Europe Require a Lid or Door Safety Switch on Kilns
                </div>
            </div>
            <?php if(isset($controller)):?>
            <div class="row spec">
                <div class="col-6 flex-text">
                    <p>Control Type</p>
                </div>
                <div class="col-6 flex-image py-2">
                    <figure class="figure">
                        <img src="../images/<?=$controller[0];?>" class="figure-img img-fluid rounded" alt="The controller">
                        <figcaption class="figure-caption text-xs-center" style="color:black;"><?=$controller[1];?></figcaption>
                    </figure>
                </div>
            </div>    
            <?php endif; ?>
            <div class="row spec">
                <div class="col-6">
                    Voltage
                </div>
                <div class="col-6">
                    <?=$Voltage;?>
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Hertz
                </div>
                <div class="col-6 flex-text">
                    <?=$hertz;?>
                </div>
            </div>
            <?php if(isset($plug)):?>
                <div class="row spec">
                    <div class="col">
                        Nema Details
                    </div>
                </div>
                <div class="row spec">
                    <div class="col"><img src="../images/<?=$plug;?>" alt="Nema Details" class="img-fluid"></div>
                </div>
            <?php endif; ?>
            <div class="row spec">
                <div class="col">
                    Disclaimer: The specifications above assume that the kiln will be plugged into a dedicated circuit. Local electrical codes supersede our recommendations.
                </div>
            </div>
            <div class="row spec">
                <div class="col-6 flex-text">
                    Ship Method & Notations
                </div>
                <div class="col-6 flex-text">
                    <?=$shipNotations;?>
                </div>
            </div>
        <?php
    }

    function InchToMM($inches, $unit='cm')
    {
        return $inches*(($unit=='mm')?25.4:2.54).' '.$unit;
    }
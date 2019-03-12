<?php
    foreach($stands as $key => $value):
?>

    <div class="row beige border-left-0 border-right-0 border border-dark">
        <div class="col-6 col-md flex-image">
            <?php if(is_null($value->bigImg)):?>
            <img src="images/<?=$value->image;?>" alt="<?=$value->desc;?>" class="img-fluid">
            <?php else:?>
            <img src="images/<?=$value->image;?>" alt="<?=$value->desc;?>" class="img-fluid clickImg" data-bigImg="images/<?=$value->bigImg;?>" data-title="<?=$value->desc;?>">
            <?php endif;?>
        </div>
        <div class="col-6 col-md">
            #
            <?=$value->number;?><br><br>
            <div class="desc">
                <?=$value->desc?>
            </div>
                    <br>
            <?php 
                if(isset($value->sub) && isset($value->sub['images'])):
            ?>
                    <div class="row justify-content-center">
                <?php
                    foreach($value->sub['images'] as $image):
                ?>
                    <div class="col justify-content-center flex-image">
                    <?php if(is_array($image)):?>
                        <img src="images/<?=$image[0];?>" class="clickImg" data-bigImg="images/<?=$image[1];?>" data-title="Demonstation Piece">
                    <?php else:?>
                        <img src="images/<?=$image;?>" alt="Demonstation Piece" >
                    <?php endif;?>
                    </div>
                    <?php endforeach;?>
                    <br>
                </div>
                    <?php
                endif;
                if(isset($value->sub)&&isset($value->sub['figure'])):?>
                        <br>
                        <figure class="figure smallFig">
                            <img src="images/<?=$value->sub['figure'][0];?>" class="figure-img img-fluid rounded" alt="Demonstration Piece">
                            <figcaption class="figure-caption text-sm-bottom">
                                <?=$value->sub['figure'][1];?>
                            </figcaption>
                        </figure>
                        <?php endif;
                if(isset($value->sub)&&isset($value->sub['info'])):?>
                        <p>
                            <?=$value->sub['info'];?>
                        </p>
                        <?php 
                endif;
                if(isset($value->sub)&&isset($value->sub['link'])):?>
                        <?php foreach($value->sub['link'] as $link):?>
                        <a href="<?=$link;?>">Click Here for more Information</a>
                        <?php endforeach; ?>
                        <?php 
                endif;
            ?>
                        <br>
                        <?php if(isset($notUS)==false || $notUS==false):?>
                            <span class="USA">Made in the USA</span>
                        <?php endif; ?>
        </div>
        <div class="w-100 d-md-none"></div>
        <div class="col flex flex-text">
        <?php if($value->width!=NULL):?>
            Horizontal Size Range is
        <?=$value->width;?>
            <?php endif; ?>
            <span class="style19"><strong>$<?=$value->price;?></strong></span>    
        </div>
        <div class="col flex flex-text">
            <label for="quantity" class="d-inline-block">Qty:
                <input type='number' min='0' step='1' value='1' name="quantity" class="d-inline-block" /><br />
            </label>
            <button type="button" class="btn btn-link btn-lg btn-block buyButton" value="<?=$value->pid;?>">
                <img src="/mobile/images/cart_button_1.png" alt="Click here to Purchace">
            </button>
        </div>
    </div>
    <?php
    endforeach;
?>
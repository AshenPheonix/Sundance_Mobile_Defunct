<?php
include_once ROOT.'/mobile/includes/saleItems.php';
?>

<div id="saleCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

<div class="carousel-inner" role="listbox" id="saleInner">
<?php
    foreach($saleItems as $key => $value):
?>
    <div class="carousel-item">
    <?php if(isset($value['href']) && $value['href']!==''):?>
        <a href="<?=$value['href'];?>">
    <?php endif;?>
            <img src="<?=$value['src'];?>" alt="<?=$value['alt'];?>" class="center saleImage img-fluid">
            <div class="carousel-caption">
                <h3>
                    <?=$value['name'];?>
                </h3>
                <p>
                    <?=$value['description'];?>
                </p>
            </div>
    <?php if(isset($value['href']) && $value['href']!==''):?>
        </a>
    <?php endif;?>
    </div>
<?php
endforeach;
?>
<a class="left carousel-control" href="#saleCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#saleCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>



<script>
    $(document).ready(function(){
        $('#carouselList li:first-child').attr('class',"active");
        $('#saleInner div:first-child').addClass('active');
    })
</script>
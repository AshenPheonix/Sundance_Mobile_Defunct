<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Blow Your Own Glass Handpipes Video - Sundance Art Glass Center';
    $description='Your source for artists working glass with a torch - Flameworking Lampworking Glass Beadmaking - Sundance Art Glass Center!';
    $keywords='Flameworking Lampworking Glass Beadmaking Sundance Art Glass Mountain View Bay Area California 94043 Santa Clara County Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass Center California';
    $abstract='Flameworking Lampworking Glass Beadmaking - Sundance Art Glass Center';
    $location='making-glass-pipes-video.php';
    require_once(ROOT .'/mobile/includes/header.php'); 
    require_once 'fetch.php';
?>

<div class="row mb-2">
    <div class="col">
        <h1>How to Blow Your Own Glass Handpipes</h1>
        <h4 class="red font-weight-bld">Back in Stock!!!</h4>
        <img src="../images/pipe-making-video.jpg" alt="Blow Your Own Handpipes cover" class="img-fluid">
    </div>
</div>

<?=$dvd->purch();?>

<div class="row mt-2">
    <div class="col">
        <img src="../images/pipe-making-video2.jpg" alt="Scenes from the Video" class="img-fluid">
        <p>
            Until now, making Glass Handpipes has been a mystery and a well kept secret. Finally, with this superbly produced video, you can see into this secret world for yourself and learn the skills needed to begin creating your masterpieces.
        </p>
        <p>
            All the basics are covered from torches, tools, kilns, raw materials, and how to get them.
        </p>
        <p>
            The footage is superb, with amazing closeups of the work being performed, as if you were holding it in your own hand. You'll actually get a "feel" for the craft before you start.
        </p>
        <p>
            If you've been thinking about becoming a glass blower, this is where to start.
        </p>
        <p>
            Below are clips from the video.
        </p>
    </div>
</div>

<div class="row">
    <div class="col">
        <img src="../images/pipe-making-video3.jpg" alt="Pipe being formed" class="img-fluid my-2">
        <img src="../images/pipe-making-3.jpg" alt="Pipe being formed" class="img-fluid my-2">
        <img src="../images/pipe-making-video4.jpg" alt="Pipe Being Formed" class="img-fluid my-2">
        <img src="../images/pipe-making-video5.jpg" alt="Pipe Being Formed" class="img-fluid my-2">
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';
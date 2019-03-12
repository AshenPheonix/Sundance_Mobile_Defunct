<?php 
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
$title='Flameworking Videos Lampworking Videos Glass Beadmaking Videos- Sundance Art Glass Center';
$description='Videos for Glass Beadmaking, Lampworking, Glassblowing, Flameworking, Marblemaking, Pipemaking, and more!';
$keywords='Videos glass beadmaking lampworking glassblowing videos , flameworking pipemaking marblemaking sculptures, videos';
$abstract='Your California West Coast, North America, and International source for artists working glass with a torch and a kiln- Flameworking Lampworking Glass Beadmaking Glass Sculpturing Fusing Firing- Sundance Art Glass Center! At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
$location='bookWEB/videos-flameworking.php';
require_once(ROOT .'/mobile/includes/header.php'); 
?>

<div class="row">
    <div class="col">
        <h1>
            Videos and DVD's
        </h1>
        <h5>
            for Glass Beadmaking, Lampworking, Glassblowing, and Flameworking.
        </h5>
    </div>
</div>

<div class="row">
    <div class="col fakeBtn py-2">
        <a href="bead.php">
            <figure class="figure">
                <img src="images/vlwgbmsm.jpg" class="figure-img img-fluid rounded" alt="Crystal Myths Inc dvd">
                <figcaption class="figure-caption text-xs-right">Tap here for videos working with soft glass</figcaption>
            </figure>
        </a>
    </div>
    <div class="col fakeBtn py-2">
        <a href="boro.php">
            <figure class="figure">
                <img src="images/video-mt-flame-sm.jpg" class="figure-img img-fluid rounded" alt="Flameworking DVD">
                <figcaption class="figure-caption text-xs-right">Tap here for videos with working with Hard (Pyrex) glass</figcaption>
            </figure>
        </a>
    </div>
    <div class="col fakeBtn py-2">
        <a href="both.php">
            <figure class="figure">
                <img src="images/essential-marbles-dvd-video-cover-med.jpg" class="figure-img img-fluid rounded" alt="Essential Marbles DVD">
                <figcaption class="figure-caption text-xs-right">Tap here for videos that apply to both materials</figcaption>
            </figure>
        </a>
    </div>
</div>

<?php 
    require_once ROOT.'/mobile/includes/rightcol.php';
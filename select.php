<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Lampworking Glass - Sundance Glass';
    $description='Your source for artists working glass with a torch. At Sundance Art Glass you will find tools, glass, and supplies for making glass art sculptures. Everything from glass beads, glass pipes, glass pendants, glass plates, glass mosaics, stained glass, painting on glass, glass vases, glass sculptures and more! With all the important glass names: Bullseye fusing glass, Fuming, Millifiori, Morretti soft glass, Effetre soft glass, Northstar hard glass, Dichroic Glass, Precision Glass, Pyrex, Momka, Borascilica, Alchemy, Bethlehem torches, Red Max torches, Baracuda torches, National Bench Burners, Major and Minor Torches, Surface and Pre Mix Burners, and more! With all the glass art studio equipment you need!';
    $keywords='Flameworking Lampworking Glass Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Mountain View Bay Area Beadmaking Sundance Art Glass Mountain View Bay Area California Flameworking Lampworking Glass Beadmaking Sundance Art Glass Center California';
    $location='lg.php';
    include_once(ROOT .'/mobile/includes/header.php');
?>
<div class="row">
    <div class="col">
        <h1>
            Torchwork and Flamework
        </h1>
        <p>
            which type of glass to you wish to work with<br> You have 2 excellent choices
        </p>
    </div>
</div>
<div class="row">
    <div class="col"><img src="images/choose.jpg" alt="Choose" class="img-fluid"></div>
</div>
<div class="row">
    <div class="col-6 border border-dark">
        <h4 class="red font-weight-bold">Soft Glass</h4>
        <p class="font-weight-bold">
            Moretti, Effetre, Bullseye, etc
        </p>
        <a href="/mobile/supplies/beadmaking.php">
            <img src="/mobile/images/beadverymed.jpg" alt="A Multi colored Bead" title="to Soft Glass tools and supplies" class="img-fluid"><br> Click here for Glass, Tools, Torches, and Kilns for soft glass!
        </a>
    </div>
    <div class="col-6 border border-dark">
        <h4 class="red font-weight-bold">Hard Glass</h4>
        <p class="font-weight-bold">
            Borosilicate, Pyrex, Northstar, etc
        </p>
        <a href="/mobile/supplies/glassblowers/pipe.php">
            <img src="/mobile/images/max27med.jpg" alt="A multicolored pipe" title="to Hard Glass tools and supplies" class="img-fluid"><br> Click here for Glass, Tools, Torches, and Kilns for hard glass!
        </a>
    </div>
</div>

<div class="row">
    <div class="col">
        <p class="font-weight-bold">
            How do you know which kind of glass?
        </p>
        <table class="table">
            <thead>
                <tr>
                    <th>What do you want to make?</th>
                    <th>Soft Glass</th>
                    <th>Hard Glass</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Beads and buttons</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td scope="row">Beads and buttons <em>with intricate detail</em></td>
                    <td>Yes</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td scope="row">Marbles, Paperweights</td>
                    <td>Yes</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td scope="row">Marbles, Paperwieghts <em>with intricate detail</em></td>
                    <td>Yes</td>
                    <td>No</td>
                </tr>
                <tr>
                    <td scope="row">Sculptures</td>
                    <td>No</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td scope="row">Blow Vessels or Ornaments</td>
                    <td>No</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td scope="row">Glassblowing</td>
                    <td>No</td>
                    <td>Yes</td>
                </tr>
                <tr>
                    <td scope="row">
                        Blow Pipes, Bubblers
                    </td>
                    <td>No</td>
                    <td>Yes</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php require_once ROOT.'/mobile/includes/rightcol.php';
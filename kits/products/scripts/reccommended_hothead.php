
<div class="row border border-dark">
    <div class="col">
        We Reccommend the following items in addition to this kit:
        <div class="row beige border">
            <div class="col">
                <img src="images/1631w.jpg" alt="Work surface with attached burner" class="img-fluid">
            </div>
            <div class="w-100"></div>
            <div class="col font-weight-bold">
                #kit2hose<br>Kit 2 with Bulk Tank Set up
            </div>
            <div class="w-100"></div>
            <div class="col-6">
                <p>
                    If you want to use a bulk/large propane gas tank instead of small, disposable tanks, order this kit. Contains a different work surface (#1617) and bracket (1622). In addition, choose between the 5 or 12 foot hose adaptor. Make your selection in the shopping cart during checkout.
                </p>
            </div>
            <div class="col-6 flex-image">
                <p>
                    Piecewise price: $202<br>
                    <strong>Our Low Price: <span class="red">$190</span></strong>
                </p>
                <a href="http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&bid=52cbe69b7ca54b6f7a652141bd6b7961">
                    <img src="/mobile/images/cart_button_1.png" alt="add to cart" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="row beige border py-3">
            <div class="col">
                <img src="images/glassbeadjewelryprojects.jpg" alt="Glass Bead Jewelry Projects Book" class="img-fluid">
            </div>
            <div class="w-100"></div>
            <div class="col font-weight-bold">
                <p>
                    There are no bead making instructions included with our kits. Learn how make glass beads with our <a href="/bookWEB/videogbm.php">videos</a> and <a href="/bookWEB/glass-beadmaking-books.php">books</a>.
                </p>
            </div>
        </div>
        <div class="row beige border py-3">
            <div class="col">
                <img src="/mobile/glass/soft/images/1654.jpg" alt="A fist holding 45 assorted colors" class="img-fluid">
            </div>
            <div class="w-100"></div>
            <div class="col font-weight-bold">
                <a href="/mobile/glass/soft/starter.php">Add some glass to your kit</a>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col">
        <h4>Work Surfaces for torch lampworking, glassblowing, and glass beadmaking</h4>
        <p class="font-weight-bold">Propane bottle holder with work surface</p>
        <p>
            Holds your disposable MAPP or propane bottle safely and at the correct angle for your torch . Torch height is adjustable . Includes a built in tool and glass rod rest . All rust proof series 300 stainless steel . Holder holds both the wide and narrow shaped gas tank . Should be clamped or screwed to the table . Lower section is cut in to give you more leg room . Lower part that holds tank can be bent to adjust the torch angle . Torch and & nbsp; propane tank not included . Dimensions are approximate . Made in the USA
        </p>
    </div>
</div>

<?php
    require_once ROOT.'/mobile/includes/dbs/worksurfaces.php';
    foreach ($worksurfaces as $key => $value) {
        $value->display('with bottle holder');
    }
?>

<hr class="my-3">

<div class="row mb-3">
    <div class="col">
        <h4>Work Surfaces</h4>
        <p>
            Protect your work table. A comfortable pair of padded foam armrests and worksurface and rod rest all in one! All stainless steel. Pictured with a Minor Burner not included.
        </p>
        <div class="row">
            <div class="col-6"><img src="/mobile/supplies/lampworking/images/work-surface.jpg" alt="Stainless Steel Worksurface with rod rests" class="img-fluid"></div>
            <div class="col-6"><img src="/mobile/supplies/lampworking/images/1631w.jpg" alt="Worksurface with instructions" class="img-fluid"></div>
        </div>
    </div>
</div>

<?php
    foreach ($worksurfaces as $key => $value) {
        $value->display('metal');
    }
?>

<div class="row">
    <div class="col">
        Accessories pictured not included.
    </div>
</div>

<hr class="my-3">

<div class="row mb-3">
    <div class="col">
        <img src="/mobile/supplies/lampworking/images/rrt.jpg" alt="stand with rods" class="img-fluid">
    </div>
    <div class="w-100"></div>
    <div class="col">
        <p class="font-weight-bold">
            Glass Rod Rests
        </p>
        <p>
            This movable rod rest is used to support glass rods to keep them up off the flame worker's workbench for easier grabbing, better organization, and to keep the glass rods cleaner. The rippled edge keeps the rods from rolling around. These durable stainless steel rod holders can also be placed inside a glass bead kiln to support your mandrels. 
        </p>
    </div>
</div>

<?php
    foreach ($worksurfaces as $key => $value) {
        $value->display('rod rest');
    }
?>
<div class="row">
    <div class="col">
        <figure class="figure">
            <img src="/mobile/supplies/lampworking/images/glass-rod-rest-lampworking-sm.jpg" class="figure-img img-fluid rounded" alt="Comparing the two sizes of rod rest">
            <figcaption class="figure-caption text-xs-right">Difference between standard and tall rod rests</figcaption>
        </figure>
    </div>
</div>

<hr class="my-3">

<?php
    foreach ($worksurfaces as $key => $value) {
        $value->display('tool caddy');
    }
?>

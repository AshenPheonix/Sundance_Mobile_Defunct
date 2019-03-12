<hr class="my-2">
<div class="row">
    <div class="col">
        <div class="h3">
            Clear Marble Holders/Stands
        </div>
        <img src="/mobile/display_stands/images/marbleStandsHead.png" alt="Marble Holders, one marble by Joe Naish of Mojo Marbles" class="img-fluid">
        <p>
            Display your marbles while keeping them safe. These holders will keep your creations from rolling around, while
            not obstructing the beauty of your art. Can hold orbs with either side up.
        </p>
    </div>
</div>
<?php
    include_once DBROOT.'stands.php';
    foreach($stands as $value){
        $value->display('marble');
    }
?>
<hr class="my-2">
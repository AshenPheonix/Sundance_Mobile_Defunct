<?php 
    define('ROOT',$_SERVER['DOCUMENT_ROOT']);
    $title='Thank you for choosing Sundance Art Glass';
    $description='Email us questions or concerns and thank you again for your order';
    $keywords='glass,fusing,slumping,interest,sign,up,flyer,ad,etc,sundance,art,glass,sale,thank,you,question,concern';
    $abstract='Thank you for your Order';
    require_once(ROOT .'/mobile/includes/header.php');
?>

<style>
    .fakeButton {
        border: gray 3px outset;
        background-color: lemonchiffon;
        cursor: pointer;
        padding: .5em 0;
    }

    .fakeButton:hover {
        border: gray 3px inset;
        background-color: #ffe699;
        box-shadow: gray inset 1px 1px 10px;
    }
</style>

<div class="row beige border border-dark ">
    <div class="col">
        <h1>Thank you for Your order!</h1>
        <p>
            You should receive an email within the next 15 minutes confirming your order and providing you with an Order ID #.
        </p>
        <p>
            If you have a moment, please review us on Yelp, Google, Facebook, or any other social media site.
        </p>
        <div class="row justify-content-around">
            <div id="YelpButton" class="col-4 fakeButton" data-href="http://yelp.com/biz/sundance-art-glass-paradise?utm_medium=badge_small&amp;utm_source=biz_review_badge">
                Check us out on
                <img src="https://dyn.yelpcdn.com/extimg/en_US/yelp/bwKZ75NZ3l7yQ_06tx0wJw.png" alt="Sundance Art Glass">
            </div>
            <div id="googleButton" class="col-4 fakeButton" data-href="https://search.google.com/local/writereview?placeid=ChIJzQX4Ea3UnIAR58EGcvNZMgY">
                Review us on Google!
            </div>
        </div>
        <hr class="my-2">

        <p>
            Any Feedback for our new mobile site? Let me know!
        </p>
        <div class="row justify-content-center">
            <div class="col-4 fakeButton" data-href="mailto:brandon/*dead*/glass.com">
                Mail the Designer!
            </div>
        </div>
        <hr class="my-2">
        <p>
            If you have further questions or any concerns regarding your order, please email us at
            <a href="mailto:contactus/*dead*/glass.com">contactus/*dead*/glass.com</a> or feel free to give us a call at
            <a href="tel:+18009468452">(800) 641-6262</a>
        </p>
        <hr class="my-2">
        <strong class="h4 my-4">International Customers, please read</strong>
        <p>
            Your total upon check out will not include shipping. This is to be calculated later once we finish processing your order
            as we need to manually obtain shipping quotes. You're responsible for Taxes/Duties/Customs Fees upon import of
            product. Since we cannot predict what your country will charge, we cannot calculate this for you. If you have
            further questions please email us, or give us a call at
            <a href="tel:+1 (800)946-8452">+1 (800) 641-6262</a> between 8AM and 4PM, PST (GMT-8).
        </p>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.fakeButton').on('mousedown', function (e) {
            var href = $(e.currentTarget).data().href;
            switch (e.which) {
                case 1:
                    window.location = href;
                    break;
                case 2:
                    window.open(href, '_blank');
                default:
                    break;
            }
        })
    });
</script>
<?php
    require_once ROOT.'/mobile/includes/rightcol.php';
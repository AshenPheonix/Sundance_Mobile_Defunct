<?php 
 
 define('ROOT',$_SERVER['DOCUMENT_ROOT']);
 $title='Tools for Shaping Glass';
 $description='Special custom oreders payment page - Sundance Art Glass!';
 $keywords='Custom stands,custom tools,special projects';
 $abstract='Payment for custom orders';
 require_once(ROOT .'/mobile/includes/header.php'); 
 $setPay = (isset($_GET['pay'])) ? $_GET['pay'] : 1 ;
?>

<div class="row">
    <div class="col">
        <div class="h1">Special Order Payment Page</div>
        <p>
            Here, you can process the payment for your custom orders or international shipping.
        </p>
        <form class="form-inline">
            <label for="ProcessPayment" class="sr-only">Process Payment</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Payment: $</div>
                </div>
                <input type="number" name="ProcessPayment" id="payment" min="1" step="1" placeholder="Payment" class="form-control"
                    style="margin:0;" value="<?=$setPay;?>">
            </div>
        </form>
        <a href='http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=6dfc703e2f2446bf8dbe8be8a1773733&qty=<?=$setPay;?>' id="pay">
			<img src='/mobile/images/cart_button_1.png' alt="click here to purchase" class="img-fluid"/></a>
    </div>
</div>

<script>
    $(document).ready(function () {
        $('#payments').on('keyup', function (e) {
            if (e.which == 13) {
                location.assign(
                    'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=6dfc703e2f2446bf8dbe8be8a1773733&qty=' +
                    $('#payments').val())
            }
        });

        $('#payments').on('change', function (e) {
            $('#pay').attr('href',
                'http://www.1shoppingcart.com/SecureCart/SecureCart.aspx?mid=/*private*/&pid=6dfc703e2f2446bf8dbe8be8a1773733&qty=' +
                $('#payments').val())
        });

    })
</script>

<?php
    require_once ROOT.'/mobile/includes/rightcol.php';
<style>
    .cart-o{
        margin-top: 10px !important; 
    }
    .text-center{

    }
</style>
<div class="col-sm-3 col-sm-offset-5 cart-o">
    <div id="cart" class="btn-group btn-block">
        <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total"><?php if (isset($this->data['cart'])) echo count($this->data['cart']); ?> item(s) - $<?= isset($this->data['price']) ? $this->data['price'] : 0 ?></span></button>
        <ul class="dropdown-menu pull-right">
            <li>
                <p class="text-center">Your shopping cart is empty!</p>
            </li>
        </ul>
    </div>
</div>
<section>
    <div class="container">
        <div class="section-intro mb-75px">
            <h4 class="intro-title">Transaction</h4>
        </div>
        <div class="row mb-5">
            <form class="col-md-12" method="post">
            <div class="site-blocks-table">
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th class="product-thumbnail">Chef</th>
                    <th class="product-name">Order</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td class="product-thumbnail">
                            <img style="width:50%" src="<?= base_url('assets/');?>img/home/chef-1.png" alt="Image" class="img-fluid">
                            <h2 class="h5 text-black">Chef Malika</h2>
                            
                        </td>
                        <td class="product-name">
                            <h2 class="h5 text-black">Ayam Goreng</h2>
                            
                        </td>
                        <td>
                            Rp. 49.000
                            
                        </td>
                        <td>
                            <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                            </div>

                        </td>
                        <td>Rp 49.000</td>
                        <td><a href="#" class="btn btn-primary height-auto btn-sm">X</a></td>
                    </tr>
                    
                </tbody>
                </table>
            </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-6">
            <div class="row mb-5">
                <div class="col-md-6 mb-3 mb-md-0">
                    <button class="btn btn-outline-primary btn-sm btn-block" onclick="loadMenu('<?= base_url('user/menu/menu');?>')">Continue Shopping</button>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary btn-sm btn-block">Save Order</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
                </div>
                <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                </div>
                <div class="col-md-4">
                <button class="btn btn-primary btn-sm px-4">Apply Coupon</button>
                </div>
            </div>
            </div>
            <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
                <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                    </div>
                    <div class="col-md-6 text-right">
                    <strong class="text-black">Rp 230.000</strong>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-6">
                    <span class="text-black">Total</span>
                    </div>
                    <div class="col-md-6 text-right">
                    <strong class="text-black">Rp 230.000</strong>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="loadMenu('<?= base_url('user/checkout');?>')">Proceed To Checkout</button>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    
</section>
<?php include('includes/header.php'); ?>

<div class="container mt-5">
    <div class="checkout-steps mb-5">
        <div class="step active">1. Cart</div>
        <div class="step">2. Details</div>
        <div class="step">3. Payment</div>
    </div>

    <div id="step-1">
        <h3>Shopping Cart</h3>
        <div class="cart-items">
            <?php foreach($_SESSION['cart'] as $item): ?>
            <div class="cart-item row mb-3">
                <div class="col-md-2">
                    <img src="images/<?= $item['image'] ?>" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h5><?= $item['name'] ?></h5>
                </div>
                <div class="col-md-4">
                    <input type="number" value="<?= $item['quantity'] ?>" class="form-control">
                    <p class="price">$<?= $item['price'] * $item['quantity'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="discount-section mb-4">
            <h4>Apply Discount</h4>
            <input type="text" class="form-control" placeholder="Enter discount code">
            <div class="discount-info mt-2">
                <p>First-time customers: 10% off</p>
                <p>5+ items: 15% off</p>
                <p>Free shipping over $50</p>
            </div>
        </div>

        <button class="btn btn-primary next-step">Proceed to Checkout</button>
    </div>

    <!-- Add other steps for shipping and payment -->
</div>

<?php include('includes/footer.php'); ?>
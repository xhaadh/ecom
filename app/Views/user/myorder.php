<?= $this->extend('layouts/navbar') ?>

<?= $this->section('custom_css') ?>
<style>
    .order-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .order-card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        margin-bottom: 20px;
        padding: 15px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .order-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .order-header h4 {
        margin: 0;
        font-size: 1.2rem;
        color: #333;
    }

    .order-header .order-status {
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 0.9rem;
        font-weight: bold;
    }

    .order-status.completed {
        background-color: #28a745;
        color: #fff;
    }

    .order-status.pending {
        background-color: #ffc107;
        color: #fff;
    }

    .order-status.canceled {
        background-color: #dc3545;
        color: #fff;
    }

    .order-body {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .order-body .product-details {
        flex: 2;
        display: flex;
        align-items: center;
    }

    .order-body img {
        width: 60px;
        height: 60px;
        margin-right: 15px;
        border-radius: 5px;
    }

    .order-body h5 {
        margin: 0;
        font-size: 1rem;
        color: #555;
    }

    .order-body p {
        margin: 0;
        font-size: 0.9rem;
        color: #777;
    }

    .order-total {
        font-size: 1rem;
        font-weight: bold;
        color: #333;
    }

    .order-footer {
        text-align: right;
    }

    .order-footer a {
        text-decoration: none;
        color: #007bff;
        font-weight: bold;
    }

    .order-footer a:hover {
        text-decoration: underline;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="order-container">
    <h2>My Orders</h2>

    <!-- Order 1 -->
    <div class="order-card">
        <div class="order-header">
            <h4>Order #12345</h4>
            <div class="order-status completed">Completed</div>
        </div>
        <div class="order-body">
            <div class="product-details">
                <img src="https://via.placeholder.com/60" alt="Product Image">
                <div>
                    <h5>Product Name 1</h5>
                    <p>Quantity: 2</p>
                </div>
            </div>
            <div class="order-total">$50.00</div>
        </div>
        <div class="order-footer">
            <a href="#">View Order Details</a>
        </div>
    </div>

    <!-- Order 2 -->
    <div class="order-card">
        <div class="order-header">
            <h4>Order #12346</h4>
            <div class="order-status pending">Pending</div>
        </div>
        <div class="order-body">
            <div class="product-details">
                <img src="https://via.placeholder.com/60" alt="Product Image">
                <div>
                    <h5>Product Name 2</h5>
                    <p>Quantity: 1</p>
                </div>
            </div>
            <div class="order-total">$30.00</div>
        </div>
        <div class="order-footer">
            <a href="#">View Order Details</a>
        </div>
    </div>

    <!-- Order 3 -->
    <div class="order-card">
        <div class="order-header">
            <h4>Order #12347</h4>
            <div class="order-status canceled">Canceled</div>
        </div>
        <div class="order-body">
            <div class="product-details">
                <img src="https://via.placeholder.com/60" alt="Product Image">
                <div>
                    <h5>Product Name 3</h5>
                    <p>Quantity: 3</p>
                </div>
            </div>
            <div class="order-total">$90.00</div>
        </div>
        <div class="order-footer">
            <a href="#">View Order Details</a>
        </div>
    </div>

    <!-- Add more orders as needed -->
</div>
<?= $this->endSection() ?>

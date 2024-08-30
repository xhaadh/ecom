<?= $this->extend('layouts/navbar') ?>

<?= $this->section('custom_css') ?>
<style>
    .container {
        max-width: 900px;
        margin: 40px auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    h2 {
        color: #444;
        text-align: center;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .product {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px;
        background-color: #f8f9fa;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .product img {
        width: 80px;
        height: 80px;
        border-radius: 10px;
    }

    .product-details h4 {
        margin: 0;
        color: #333;
        font-weight: bold;
    }

    .product-details p {
        margin: 5px 0;
        color: #777;
    }

    .product-quantity input {
        width: 50px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
        text-align: center;
    }

    .product-price {
        color: #28a745;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .total {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        background-color: #f1f1f1;
        border-radius: 10px;
        font-size: 1.2rem;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .payment-details {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
    }

    .payment-details h3 {
        margin-bottom: 20px;
        color: #444;
        text-align: center;
        font-weight: bold;
    }

    .payment-details label {
        display: block;
        margin-bottom: 10px;
        color: #333;
        font-weight: bold;
    }

    .payment-details input {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .payment-btn {
        width: 100%;
        padding: 15px;
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .payment-btn:hover {
        background-color: #0056b3;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <h2>Checkout</h2>

    <div class="product">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKCqwj260AwiBhFlZjpz1350A4zSVkKOJXK_M41yElTq8riY4VbB4QIIyWERN5Z8pTHPM&usqp=CAU" alt="Product 1">
        <div class="product-details">
            <h4>Product 1</h4>
            <p>Short description of the product.</p>
        </div>
        <div class="product-quantity">
            <input type="number" value="1" min="1" readonly>
        </div>
        <div class="product-price">$25.00</div>
    </div>

    <div class="total">
        <span>Total Amount:</span>
        <span id="total-amount">$25.00</span>
    </div>

    <div class="payment-details">
        <h3>Payment Information</h3>
        <form action="/process_payment" method="post">
            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card_number" required>

            <label for="expiry-date">Expiry Date</label>
            <input type="text" id="expiry-date" name="expiry_date" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" required>

            <button type="submit" class="payment-btn">Pay Now</button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('layouts/navbar') ?>
<?= $this->section('custom_css') ?>
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    h2 {
        color: #343a40;
        text-align: center;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        gap: 20px;
        justify-items: center;
    }

    .product {
        border: 1px solid #dee2e6;
        border-radius: 10px;
        background-color: #f8f9fa;
        padding: 15px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .product:hover {
        transform: translateY(-5px);
    }

    .product img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .product-details h4 {
        margin-bottom: 5px;
        font-size: 1rem;
        color: #495057;
    }

    .product-details p {
        margin-bottom: 10px;
        color: #6c757d;
        font-size: 0.9rem;
    }

    .product-quantity input {
        width: 60px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid #ced4da;
        text-align: center;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 1.1rem;
        font-weight: bold;
        color: #28a745;
        margin-bottom: 10px;
    }

    .total {
        display: flex;
        justify-content: space-between;
        font-size: 1.5rem;
        font-weight: bold;
        padding-top: 20px;
        margin-top: 20px;
        border-top: 1px solid #dee2e6;
        color: #343a40;
    }

    .checkout-btn {
        display: block;
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        background-color: #007bff;
        color: #ffffff;
        text-align: center;
        font-size: 1.2rem;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .checkout-btn:hover {
        background-color: #0056b3;
        color: #ffffff;
    }
    .cartbtn{
        background-color: #fff;
        color: black;
        border-radius: 4px;
        height: 28px;
        width: 100px;
        border: 1px solid gray;
    }
    .cartbtn:hover{
        background-color: green;
        color: white;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="container">
        <h2>Purchase</h2>

        <div class="product-grid">
            <!-- Product 1 -->
            <?php foreach ($products as $product): ?>
            <div class="product">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKCqwj260AwiBhFlZjpz1350A4zSVkKOJXK_M41yElTq8riY4VbB4QIIyWERN5Z8pTHPM&usqp=CAU" alt="Product 1">
                <div class="product-details">
                    <h4><?= $product['name'] ?></h4>
                    <p><?= $product['description'] ?></p>
                </div>
                <div class="product-quantity">
                    <input type="number" value="1" min="1" onchange="updateTotal(this)">
                </div>
                <div class="product-price"><?= $product['price'] ?></div>
                <button class="cartbtn">Add to Cart</button>
            </div>
            <?php endforeach; ?>

        </div>
    </div>


<?= $this->endSection() ?>

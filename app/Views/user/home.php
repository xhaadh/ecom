<?= $this->extend('layouts/navbar') ?>

<?= $this->section('content') ?>
    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="https://img.freepik.com/free-photo/3d-rendering-cartoon-shopping-cart_23-2151680632.jpg" decoding="async" alt="" class="sliderImg" id="firsts">
                <a href="#product">
                    <button class="buyButton">SHOP NOW!</button>
                </a>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img src="./img/return.png" alt="" class="featureIcon">
            <span class="featureTitle">QUALITY ASSURED</span>
            <span class="featureDesc">Directly picked from farmers.</span>
        </div>
        <div class="feature">
            <img src="./img/gift.png" alt="" class="featureIcon">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img src="./img/contact.png" alt="" class="featureIcon">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>
<?= $this->endSection() ?>

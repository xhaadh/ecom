<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'  href="style/style.css">
    <title>Vegiees</title>

    <?= $this->renderSection('custom_css') ?>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <h2>VEGIEES</h2>
                <button class="navToggle" id="navToggle">&#9776;</button>
            </div>
  <div class="navBottom" id="navMenu">
          <a class="menuItem"href="/">Home</a>
          <a class="menuItem"href="/purchase">Purchase</a>
          <a class="menuItem"href="/checkout">Check Out</a>
          <a class="menuItem"href="/myorder">My Order</a>
          <a class="menuItem"href="/aboutus">About Us</a>
        </div>

        </div>
      
    </nav>

    <div class="main-content">
        <?= $this->renderSection('content') ?>
    </div>
    <script>
        document.getElementById('navToggle').addEventListener('click', function () {
            const menu = document.getElementById('navMenu');
            menu.classList.toggle('active');
        });
    </script>i
</body>

</html>

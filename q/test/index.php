<?php
$hash = '$2y$10$SmtdT0f8ah0FagdOW6czBujPqZoUHnxeVsx71OZtux42iaczRQCTy';
echo password_verify('ag', $hash);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
    <title>Document</title>
    <link href="assets/css/style.css" rel="stylesheet" и type="text/css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="main.js"></script>
</head>
<body>
<!--Bootstap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>
<!-- Import app -->
<script src="main.js"></script>
<!-- Import components -->
<script src="components/ProductDisplay.js"></script>
<script src="components/ReviewForm.js"></script>
<script src="components/ReviewList.js"></script>
<!-- Mount app -->
<div id="app">
    <div>
        <p>cart({{ cart.length }})</p>
    </div>
    <product-display :premium="premium" @add-to-cart="updateCart" @remove-from-cart="removeItemFromCart"></product-display>


</div>
<script>
    const mountedApp = app.mount('#app')
</script>


</body>
</html>

<h1>Product Demo</h1>

<form action="checkout.php" method="POST">
    Your name: <input type="text" name="name">
    Email: <input type="email" name="email">
    Purchasing:
    <select name="product" id="product">
        <option value="shirt">Shirt</option>
        <option value="cup">Cup</option>
    </select>
    Quantity: <input type="text" name="quantity">
    <input type="submit" value="Purchase">
</form>
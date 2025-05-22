<html>
<head>
    <link rel="stylesheet" href="flex-items.css">
</head>
<body>

    <h1>Flex Items</h1>
    <div class="flex-container">
    <div>1</div>
    <div>2</div>
    <div>3</div> 
    <div>4</div>
    </div>

    <h1>Order property</h1>
    <div class="flex-container">
        <div style="order: 3">1</div>
        <div style="order: 2">2</div>
        <div style="order: 4">3</div>
        <div style="order: 1">4</div>
    </div>

    <h1>Flex-grow Property</h1>
    <div class="flex-container">
        <div style="flex-grow: 1">1</div>
        <div style="flex-grow: 1">2</div>
        <div style="flex-grow: 8">3</div>
    </div>

    <h1>Flex-shrink Property</h1>
    <div class="flex-container">
        <div>1</div>
        <div>2</div>
        <div style="flex-shrink: 0">3</div>
        <div>4</div>
        <div>5</div>
        <div>6</div>
        <div>7</div>
        <div>8</div>
        <div>9</div>
        <div>10</div>
    </div>

    <h1>Flex-basis Property</h1>
    <div class="flex-container">
        <div>1</div>
        <div>2</div>
        <div style="flex-basis: 200px">3</div>
        <div>4</div>
    </div>

    <h1>Flex Property (Shorthand)</h1>
    <div class="flex-container">
        <div>1</div>
        <div>2</div>
        <div style="flex: 0 100px 200px">3</div>
        <div>4</div>
    </div>

    <h1>Align-self Property</h1>
    <div class="flex-container" style="height: 200px;">
        <div>1</div>
        <div>2</div>
        <div style="align-self: center">3</div>
        <div>4</div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Checkout &mdash; Porchlight General</title>
<meta name="description" content="One-page checkout: choose your items, fill in your details, and place your order. We never ask for card details on this page.">
<meta name="robots" content="noindex">
<link rel="canonical" href="https://porchlightgeneral.example/pages/checkout.php">
<meta property="og:title" content="Checkout &mdash; Porchlight General">
<meta property="og:description" content="One-page checkout: choose your items, fill in your details, and place your order. We never ask for card details on this page.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://porchlightgeneral.example/pages/checkout.php">
<meta property="og:image" content="https://porchlightgeneral.example/assets/images/brand/og-image.jpg">
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="../assets/images/brand/favicon.svg" type="image/svg+xml">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;700&amp;family=Libre+Franklin:wght@400;600&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<a class="skip-link" href="#main">Skip to main content</a>
<div class="phonebar">
  <div class="wrap">
    <span>Order by phone: <a href="tel:+15555550147">(555) 010-0147</a></span>
    <span>Mon&ndash;Fri 9 AM&ndash;6 PM ET</span>
  </div>
</div>
<header class="masthead">
  <div class="wrap">
    <a class="wordmark" href="../index.php">
      <img src="../assets/images/brand/logo.svg" alt="" width="52" height="52">
      <span><b>Porchlight General</b>
      <span>Kitchen classics and keepsakes</span></span>
    </a>
    <form class="search" role="search" method="get" action="../pages/shop.php">
      <label for="q">Search the catalog</label>
      <input type="text" id="q" name="q" placeholder="Search the catalog">
      <button type="submit">Search</button>
    </form>
    <a class="cart-link" href="../pages/cart.php">Cart &amp; Checkout</a>
  </div>
</header>
<nav class="tabs" aria-label="Departments">
  <ul><li><a href="../pages/shop.php#kitchen-classics">Kitchen Classics</a></li><li><a href="../pages/shop.php#pantry-canning">Pantry &amp; Canning</a></li><li><a href="../pages/shop.php#home-hearth">Home &amp; Hearth</a></li><li><a href="../pages/shop.php#radios-clocks-keepsakes">Radios, Clocks &amp; Keepsakes</a></li><li><a href="../pages/deals.php">Today&rsquo;s Deals</a></li></ul>
</nav>
<nav class="crumbs" aria-label="Breadcrumb"><div class="wrap"><ol><li><a href="../index.php">Home</a></li><li><a href="cart.php">Cart &amp; Checkout</a></li><li><span aria-current="page">Checkout</span></li></ol></div></nav><main id="main"><div class="wrap">
  <h1>Checkout</h1>
  <p>Everything is on this one page, in six numbered steps. Nothing is lost between steps because there are no other pages to move to.</p>
  <section class="notice">
    <h2>Online payment is being set up</h2>
    <p>Pressing <strong>Place order</strong> will not charge you. We will show you plainly what happened and how to order by telephone or mail instead.</p>
  </section>

<form class="checkout" action="checkout-result.php" method="post" accept-charset="UTF-8">

  <fieldset id="items">
    <legend>1. Your items</legend>
    <p>Choose up to three items. Item numbers are printed on every product page.</p>
    <div class="field">
      <label for="item1">Item 1 (required)</label>
      <span class="hint" id="item1-hint">Choose an item by its number, for example PG-1001.</span>
      <select id="item1" name="item1" aria-describedby="item1-hint" required>
        <option value="">Choose an item</option>
        <optgroup label="Kitchen Classics"><option value="PG-1001">PG-1001 &ndash; 10-Inch Pre-Seasoned Cast-Iron Skillet &ndash; $39.99</option><option value="PG-1002">PG-1002 &ndash; 5-Quart Cast-Iron Dutch Oven &ndash; $89.95</option><option value="PG-1003">PG-1003 &ndash; 8-Cup Stovetop Coffee Percolator &ndash; $44.99</option><option value="PG-1004">PG-1004 &ndash; Enamelware Coffee Pot, 6-Cup &ndash; $29.99</option><option value="PG-1005">PG-1005 &ndash; 3-Piece Glass Mixing Bowl Set &ndash; $34.99</option><option value="PG-1006">PG-1006 &ndash; Stainless Balloon Whisk and Scraper Set &ndash; $19.95</option><option value="PG-1007">PG-1007 &ndash; 3-Cup Flour Sifter &ndash; $16.99</option><option value="PG-1008">PG-1008 &ndash; Maple Rolling Pin &ndash; $24.95</option><option value="PG-1009">PG-1009 &ndash; 9-Inch Fluted Ceramic Pie Dish &ndash; $18.99</option><option value="PG-1010">PG-1010 &ndash; 8-Quart Stainless Stockpot with Colander Insert &ndash; $54.99</option><option value="PG-1011">PG-1011 &ndash; 5-Piece Beechwood Spoon Set &ndash; $21.99</option><option value="PG-1012">PG-1012 &ndash; Maple Serving Board with Handle &ndash; $32.95</option><option value="PG-1013">PG-1013 &ndash; Quilted Cotton Oven Mitt &ndash; $15.99</option><option value="PG-1014">PG-1014 &ndash; 9-Inch Cast-Iron Cornbread Skillet &ndash; $27.99</option></optgroup><optgroup label="Pantry &amp; Canning"><option value="PG-1015">PG-1015 &ndash; Wide-Mouth Canning Jars, Quart, 12-Pack &ndash; $22.99</option><option value="PG-1016">PG-1016 &ndash; 12-Quart Water-Bath Canner with Rack &ndash; $49.99</option><option value="PG-1017">PG-1017 &ndash; Swivel Peeler and Apple Corer Set &ndash; $16.99</option><option value="PG-1018">PG-1018 &ndash; Unbleached Cheesecloth, 9 Square Feet &ndash; $9.99</option><option value="PG-1019">PG-1019 &ndash; 5-Piece Kitchen Canister Set &ndash; $39.95</option><option value="PG-1020">PG-1020 &ndash; Roll-Top Metal Bread Box &ndash; $49.99</option><option value="PG-1021">PG-1021 &ndash; Covered Ceramic Butter Dish &ndash; $14.95</option><option value="PG-1022">PG-1022 &ndash; Recipe Cards, 4 × 6 Inch, 100-Pack &ndash; $12.99</option><option value="PG-1023">PG-1023 &ndash; Wicker Bread Basket &ndash; $26.95</option><option value="PG-1024">PG-1024 &ndash; 2-Gallon Stoneware Crock &ndash; $54.99</option><option value="PG-1025">PG-1025 &ndash; Glass Cake Stand with Dome &ndash; $42.99</option><option value="PG-1026">PG-1026 &ndash; 2-Quart Glass Pitcher &ndash; $18.99</option></optgroup><optgroup label="Home &amp; Hearth"><option value="PG-1027">PG-1027 &ndash; Wood Mantel Clock &ndash; $79.95</option><option value="PG-1028">PG-1028 &ndash; Octagonal Wood-Framed Wall Clock &ndash; $34.99</option><option value="PG-1029">PG-1029 &ndash; Wool-Blend Throw Blanket &ndash; $54.99</option><option value="PG-1030">PG-1030 &ndash; Patchwork Quilt, Queen &ndash; $89.99</option><option value="PG-1031">PG-1031 &ndash; Woven Rag Rug, 2 × 3 Feet &ndash; $39.95</option><option value="PG-1032">PG-1032 &ndash; Slat-Back Porch Rocking Chair &ndash; $149.99</option><option value="PG-1033">PG-1033 &ndash; Red Hurricane Lantern with LED Bulb &ndash; $28.99</option><option value="PG-1034">PG-1034 &ndash; Cast-Iron Figure Doorstop &ndash; $24.99</option><option value="PG-1035">PG-1035 &ndash; Carved Wood Bookend &ndash; $18.95</option><option value="PG-1036">PG-1036 &ndash; Coir Welcome Mat &ndash; $21.99</option><option value="PG-1037">PG-1037 &ndash; Stainless Whistling Tea Kettle &ndash; $36.99</option><option value="PG-1038">PG-1038 &ndash; Embroidered Cotton Table Runner &ndash; $26.95</option><option value="PG-1039">PG-1039 &ndash; Painted Wood Storage Chest &ndash; $149.99</option></optgroup><optgroup label="Radios, Clocks &amp; Keepsakes"><option value="PG-1040">PG-1040 &ndash; Cathedral-Style AM/FM Tabletop Radio &ndash; $59.99</option><option value="PG-1041">PG-1041 &ndash; Portable 3-Speed Record Player &ndash; $89.99</option><option value="PG-1042">PG-1042 &ndash; Handheld Reading Magnifier &ndash; $24.99</option><option value="PG-1043">PG-1043 &ndash; Mechanical Pocket Watch with Chain &ndash; $49.95</option><option value="PG-1044">PG-1044 &ndash; Plaid Cloth-Bound Photo Album &ndash; $27.99</option><option value="PG-1045">PG-1045 &ndash; Wood Picture Frame, 5 × 7 Inch &ndash; $16.95</option><option value="PG-1046">PG-1046 &ndash; Wooden Chess Set with Board &ndash; $59.99</option><option value="PG-1047">PG-1047 &ndash; Wooden Checkers Set &ndash; $24.99</option><option value="PG-1048">PG-1048 &ndash; Wooden Cribbage Board with Pegs &ndash; $22.95</option><option value="PG-1049">PG-1049 &ndash; Double-Six Domino Set &ndash; $19.99</option><option value="PG-1050">PG-1050 &ndash; Large-Index Playing Cards, 2-Pack &ndash; $9.99</option><option value="PG-1051">PG-1051 &ndash; Carved Wooden Bowl with Lid &ndash; $34.95</option><option value="PG-1052">PG-1052 &ndash; Wind-Up Alarm Clock with Twin Bells &ndash; $26.99</option></optgroup>
      </select>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Choose an item from the list, or leave this line as it is.</span>
    </div>
    <div class="field">
      <label for="qty1">Quantity for item 1</label>
      <span class="hint" id="qty1-hint">A number from 1 to 10.</span>
      <input type="number" id="qty1" name="qty1" min="1" max="10" value="1" inputmode="numeric" aria-describedby="qty1-hint">
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter a whole number from 1 to 10.</span>
    </div>
    <div class="field">
      <label for="item2">Item 2 (optional)</label>
      <span class="hint" id="item2-hint">Choose an item by its number, for example PG-1001.</span>
      <select id="item2" name="item2" aria-describedby="item2-hint">
        <option value="" selected>No additional item</option>
        <optgroup label="Kitchen Classics"><option value="PG-1001">PG-1001 &ndash; 10-Inch Pre-Seasoned Cast-Iron Skillet &ndash; $39.99</option><option value="PG-1002">PG-1002 &ndash; 5-Quart Cast-Iron Dutch Oven &ndash; $89.95</option><option value="PG-1003">PG-1003 &ndash; 8-Cup Stovetop Coffee Percolator &ndash; $44.99</option><option value="PG-1004">PG-1004 &ndash; Enamelware Coffee Pot, 6-Cup &ndash; $29.99</option><option value="PG-1005">PG-1005 &ndash; 3-Piece Glass Mixing Bowl Set &ndash; $34.99</option><option value="PG-1006">PG-1006 &ndash; Stainless Balloon Whisk and Scraper Set &ndash; $19.95</option><option value="PG-1007">PG-1007 &ndash; 3-Cup Flour Sifter &ndash; $16.99</option><option value="PG-1008">PG-1008 &ndash; Maple Rolling Pin &ndash; $24.95</option><option value="PG-1009">PG-1009 &ndash; 9-Inch Fluted Ceramic Pie Dish &ndash; $18.99</option><option value="PG-1010">PG-1010 &ndash; 8-Quart Stainless Stockpot with Colander Insert &ndash; $54.99</option><option value="PG-1011">PG-1011 &ndash; 5-Piece Beechwood Spoon Set &ndash; $21.99</option><option value="PG-1012">PG-1012 &ndash; Maple Serving Board with Handle &ndash; $32.95</option><option value="PG-1013">PG-1013 &ndash; Quilted Cotton Oven Mitt &ndash; $15.99</option><option value="PG-1014">PG-1014 &ndash; 9-Inch Cast-Iron Cornbread Skillet &ndash; $27.99</option></optgroup><optgroup label="Pantry &amp; Canning"><option value="PG-1015">PG-1015 &ndash; Wide-Mouth Canning Jars, Quart, 12-Pack &ndash; $22.99</option><option value="PG-1016">PG-1016 &ndash; 12-Quart Water-Bath Canner with Rack &ndash; $49.99</option><option value="PG-1017">PG-1017 &ndash; Swivel Peeler and Apple Corer Set &ndash; $16.99</option><option value="PG-1018">PG-1018 &ndash; Unbleached Cheesecloth, 9 Square Feet &ndash; $9.99</option><option value="PG-1019">PG-1019 &ndash; 5-Piece Kitchen Canister Set &ndash; $39.95</option><option value="PG-1020">PG-1020 &ndash; Roll-Top Metal Bread Box &ndash; $49.99</option><option value="PG-1021">PG-1021 &ndash; Covered Ceramic Butter Dish &ndash; $14.95</option><option value="PG-1022">PG-1022 &ndash; Recipe Cards, 4 × 6 Inch, 100-Pack &ndash; $12.99</option><option value="PG-1023">PG-1023 &ndash; Wicker Bread Basket &ndash; $26.95</option><option value="PG-1024">PG-1024 &ndash; 2-Gallon Stoneware Crock &ndash; $54.99</option><option value="PG-1025">PG-1025 &ndash; Glass Cake Stand with Dome &ndash; $42.99</option><option value="PG-1026">PG-1026 &ndash; 2-Quart Glass Pitcher &ndash; $18.99</option></optgroup><optgroup label="Home &amp; Hearth"><option value="PG-1027">PG-1027 &ndash; Wood Mantel Clock &ndash; $79.95</option><option value="PG-1028">PG-1028 &ndash; Octagonal Wood-Framed Wall Clock &ndash; $34.99</option><option value="PG-1029">PG-1029 &ndash; Wool-Blend Throw Blanket &ndash; $54.99</option><option value="PG-1030">PG-1030 &ndash; Patchwork Quilt, Queen &ndash; $89.99</option><option value="PG-1031">PG-1031 &ndash; Woven Rag Rug, 2 × 3 Feet &ndash; $39.95</option><option value="PG-1032">PG-1032 &ndash; Slat-Back Porch Rocking Chair &ndash; $149.99</option><option value="PG-1033">PG-1033 &ndash; Red Hurricane Lantern with LED Bulb &ndash; $28.99</option><option value="PG-1034">PG-1034 &ndash; Cast-Iron Figure Doorstop &ndash; $24.99</option><option value="PG-1035">PG-1035 &ndash; Carved Wood Bookend &ndash; $18.95</option><option value="PG-1036">PG-1036 &ndash; Coir Welcome Mat &ndash; $21.99</option><option value="PG-1037">PG-1037 &ndash; Stainless Whistling Tea Kettle &ndash; $36.99</option><option value="PG-1038">PG-1038 &ndash; Embroidered Cotton Table Runner &ndash; $26.95</option><option value="PG-1039">PG-1039 &ndash; Painted Wood Storage Chest &ndash; $149.99</option></optgroup><optgroup label="Radios, Clocks &amp; Keepsakes"><option value="PG-1040">PG-1040 &ndash; Cathedral-Style AM/FM Tabletop Radio &ndash; $59.99</option><option value="PG-1041">PG-1041 &ndash; Portable 3-Speed Record Player &ndash; $89.99</option><option value="PG-1042">PG-1042 &ndash; Handheld Reading Magnifier &ndash; $24.99</option><option value="PG-1043">PG-1043 &ndash; Mechanical Pocket Watch with Chain &ndash; $49.95</option><option value="PG-1044">PG-1044 &ndash; Plaid Cloth-Bound Photo Album &ndash; $27.99</option><option value="PG-1045">PG-1045 &ndash; Wood Picture Frame, 5 × 7 Inch &ndash; $16.95</option><option value="PG-1046">PG-1046 &ndash; Wooden Chess Set with Board &ndash; $59.99</option><option value="PG-1047">PG-1047 &ndash; Wooden Checkers Set &ndash; $24.99</option><option value="PG-1048">PG-1048 &ndash; Wooden Cribbage Board with Pegs &ndash; $22.95</option><option value="PG-1049">PG-1049 &ndash; Double-Six Domino Set &ndash; $19.99</option><option value="PG-1050">PG-1050 &ndash; Large-Index Playing Cards, 2-Pack &ndash; $9.99</option><option value="PG-1051">PG-1051 &ndash; Carved Wooden Bowl with Lid &ndash; $34.95</option><option value="PG-1052">PG-1052 &ndash; Wind-Up Alarm Clock with Twin Bells &ndash; $26.99</option></optgroup>
      </select>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Choose an item from the list, or leave this line as it is.</span>
    </div>
    <div class="field">
      <label for="qty2">Quantity for item 2</label>
      <span class="hint" id="qty2-hint">A number from 1 to 10.</span>
      <input type="number" id="qty2" name="qty2" min="1" max="10" value="1" inputmode="numeric" aria-describedby="qty2-hint">
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter a whole number from 1 to 10.</span>
    </div>
    <div class="field">
      <label for="item3">Item 3 (optional)</label>
      <span class="hint" id="item3-hint">Choose an item by its number, for example PG-1001.</span>
      <select id="item3" name="item3" aria-describedby="item3-hint">
        <option value="" selected>No additional item</option>
        <optgroup label="Kitchen Classics"><option value="PG-1001">PG-1001 &ndash; 10-Inch Pre-Seasoned Cast-Iron Skillet &ndash; $39.99</option><option value="PG-1002">PG-1002 &ndash; 5-Quart Cast-Iron Dutch Oven &ndash; $89.95</option><option value="PG-1003">PG-1003 &ndash; 8-Cup Stovetop Coffee Percolator &ndash; $44.99</option><option value="PG-1004">PG-1004 &ndash; Enamelware Coffee Pot, 6-Cup &ndash; $29.99</option><option value="PG-1005">PG-1005 &ndash; 3-Piece Glass Mixing Bowl Set &ndash; $34.99</option><option value="PG-1006">PG-1006 &ndash; Stainless Balloon Whisk and Scraper Set &ndash; $19.95</option><option value="PG-1007">PG-1007 &ndash; 3-Cup Flour Sifter &ndash; $16.99</option><option value="PG-1008">PG-1008 &ndash; Maple Rolling Pin &ndash; $24.95</option><option value="PG-1009">PG-1009 &ndash; 9-Inch Fluted Ceramic Pie Dish &ndash; $18.99</option><option value="PG-1010">PG-1010 &ndash; 8-Quart Stainless Stockpot with Colander Insert &ndash; $54.99</option><option value="PG-1011">PG-1011 &ndash; 5-Piece Beechwood Spoon Set &ndash; $21.99</option><option value="PG-1012">PG-1012 &ndash; Maple Serving Board with Handle &ndash; $32.95</option><option value="PG-1013">PG-1013 &ndash; Quilted Cotton Oven Mitt &ndash; $15.99</option><option value="PG-1014">PG-1014 &ndash; 9-Inch Cast-Iron Cornbread Skillet &ndash; $27.99</option></optgroup><optgroup label="Pantry &amp; Canning"><option value="PG-1015">PG-1015 &ndash; Wide-Mouth Canning Jars, Quart, 12-Pack &ndash; $22.99</option><option value="PG-1016">PG-1016 &ndash; 12-Quart Water-Bath Canner with Rack &ndash; $49.99</option><option value="PG-1017">PG-1017 &ndash; Swivel Peeler and Apple Corer Set &ndash; $16.99</option><option value="PG-1018">PG-1018 &ndash; Unbleached Cheesecloth, 9 Square Feet &ndash; $9.99</option><option value="PG-1019">PG-1019 &ndash; 5-Piece Kitchen Canister Set &ndash; $39.95</option><option value="PG-1020">PG-1020 &ndash; Roll-Top Metal Bread Box &ndash; $49.99</option><option value="PG-1021">PG-1021 &ndash; Covered Ceramic Butter Dish &ndash; $14.95</option><option value="PG-1022">PG-1022 &ndash; Recipe Cards, 4 × 6 Inch, 100-Pack &ndash; $12.99</option><option value="PG-1023">PG-1023 &ndash; Wicker Bread Basket &ndash; $26.95</option><option value="PG-1024">PG-1024 &ndash; 2-Gallon Stoneware Crock &ndash; $54.99</option><option value="PG-1025">PG-1025 &ndash; Glass Cake Stand with Dome &ndash; $42.99</option><option value="PG-1026">PG-1026 &ndash; 2-Quart Glass Pitcher &ndash; $18.99</option></optgroup><optgroup label="Home &amp; Hearth"><option value="PG-1027">PG-1027 &ndash; Wood Mantel Clock &ndash; $79.95</option><option value="PG-1028">PG-1028 &ndash; Octagonal Wood-Framed Wall Clock &ndash; $34.99</option><option value="PG-1029">PG-1029 &ndash; Wool-Blend Throw Blanket &ndash; $54.99</option><option value="PG-1030">PG-1030 &ndash; Patchwork Quilt, Queen &ndash; $89.99</option><option value="PG-1031">PG-1031 &ndash; Woven Rag Rug, 2 × 3 Feet &ndash; $39.95</option><option value="PG-1032">PG-1032 &ndash; Slat-Back Porch Rocking Chair &ndash; $149.99</option><option value="PG-1033">PG-1033 &ndash; Red Hurricane Lantern with LED Bulb &ndash; $28.99</option><option value="PG-1034">PG-1034 &ndash; Cast-Iron Figure Doorstop &ndash; $24.99</option><option value="PG-1035">PG-1035 &ndash; Carved Wood Bookend &ndash; $18.95</option><option value="PG-1036">PG-1036 &ndash; Coir Welcome Mat &ndash; $21.99</option><option value="PG-1037">PG-1037 &ndash; Stainless Whistling Tea Kettle &ndash; $36.99</option><option value="PG-1038">PG-1038 &ndash; Embroidered Cotton Table Runner &ndash; $26.95</option><option value="PG-1039">PG-1039 &ndash; Painted Wood Storage Chest &ndash; $149.99</option></optgroup><optgroup label="Radios, Clocks &amp; Keepsakes"><option value="PG-1040">PG-1040 &ndash; Cathedral-Style AM/FM Tabletop Radio &ndash; $59.99</option><option value="PG-1041">PG-1041 &ndash; Portable 3-Speed Record Player &ndash; $89.99</option><option value="PG-1042">PG-1042 &ndash; Handheld Reading Magnifier &ndash; $24.99</option><option value="PG-1043">PG-1043 &ndash; Mechanical Pocket Watch with Chain &ndash; $49.95</option><option value="PG-1044">PG-1044 &ndash; Plaid Cloth-Bound Photo Album &ndash; $27.99</option><option value="PG-1045">PG-1045 &ndash; Wood Picture Frame, 5 × 7 Inch &ndash; $16.95</option><option value="PG-1046">PG-1046 &ndash; Wooden Chess Set with Board &ndash; $59.99</option><option value="PG-1047">PG-1047 &ndash; Wooden Checkers Set &ndash; $24.99</option><option value="PG-1048">PG-1048 &ndash; Wooden Cribbage Board with Pegs &ndash; $22.95</option><option value="PG-1049">PG-1049 &ndash; Double-Six Domino Set &ndash; $19.99</option><option value="PG-1050">PG-1050 &ndash; Large-Index Playing Cards, 2-Pack &ndash; $9.99</option><option value="PG-1051">PG-1051 &ndash; Carved Wooden Bowl with Lid &ndash; $34.95</option><option value="PG-1052">PG-1052 &ndash; Wind-Up Alarm Clock with Twin Bells &ndash; $26.99</option></optgroup>
      </select>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Choose an item from the list, or leave this line as it is.</span>
    </div>
    <div class="field">
      <label for="qty3">Quantity for item 3</label>
      <span class="hint" id="qty3-hint">A number from 1 to 10.</span>
      <input type="number" id="qty3" name="qty3" min="1" max="10" value="1" inputmode="numeric" aria-describedby="qty3-hint">
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter a whole number from 1 to 10.</span>
    </div>
  </fieldset>

  <fieldset>
    <legend>2. Contact details</legend>
    <div class="field">
      <label for="name">Full name (required)</label>
      <span class="hint" id="name-hint">First and last name, as it should appear on the parcel.</span>
      <input type="text" id="name" name="name" autocomplete="name" aria-describedby="name-hint" required>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter your full name.</span>
    </div>
    <div class="field">
      <label for="email">Email address (required)</label>
      <span class="hint" id="email-hint">We send your receipt and tracking number here, for example name@example.com.</span>
      <input type="email" id="email" name="email" autocomplete="email" aria-describedby="email-hint" required>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter an email address that includes an @ sign, like name@example.com.</span>
    </div>
    <div class="field">
      <label for="phone">Telephone number (required)</label>
      <span class="hint" id="phone-hint">Any format is fine. We call only if there is a question about your order.</span>
      <input type="tel" id="phone" name="phone" autocomplete="tel" aria-describedby="phone-hint" required>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter a telephone number where we can reach you.</span>
    </div>
  </fieldset>

  <fieldset>
    <legend>3. Delivery address</legend>
    <div class="field">
      <label for="address1">Street address (required)</label>
      <span class="hint" id="address1-hint">House number and street, for example 214 Maple Street.</span>
      <input type="text" id="address1" name="address1" autocomplete="address-line1" aria-describedby="address1-hint" required>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter your street address.</span>
    </div>
    <div class="field">
      <label for="address2">Apartment, suite, or unit (optional)</label>
      <span class="hint" id="address2-hint">Leave this empty if it does not apply.</span>
      <input type="text" id="address2" name="address2" autocomplete="address-line2" aria-describedby="address2-hint">
    </div>
    <div class="field">
      <label for="city">City (required)</label>
      <span class="hint" id="city-hint">The city or town on your mailing address.</span>
      <input type="text" id="city" name="city" autocomplete="address-level2" aria-describedby="city-hint" required>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter your city or town.</span>
    </div>
    <div class="field">
      <label for="state">State (required)</label>
      <span class="hint" id="state-hint">Choose your state from the list. Military addresses are at the end.</span>
      <select id="state" name="state" autocomplete="address-level1" aria-describedby="state-hint" required>
        <option value="">Choose your state</option>
        <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">District of Columbia</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option><option value="AA">Armed Forces Americas (AA)</option><option value="AE">Armed Forces Europe (AE)</option><option value="AP">Armed Forces Pacific (AP)</option>
      </select>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Choose your state from the list.</span>
    </div>
    <div class="field">
      <label for="zip">ZIP code (required)</label>
      <span class="hint" id="zip-hint">5 digits, like 30301. ZIP+4 such as 30301-1234 is also fine.</span>
      <input type="text" id="zip" name="zip" autocomplete="postal-code" inputmode="numeric" pattern="[0-9]{5}(-[0-9]{4})?" aria-describedby="zip-hint" required>
      <span class="field-error"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" focusable="false"><path d="M10 1 19 18H1Z" fill="none" stroke="currentColor" stroke-width="2"/><path d="M10 7v5" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="15" r="1.2" fill="currentColor"/></svg>Enter a 5-digit ZIP code, like 30301.</span>
    </div>
  </fieldset>

  <fieldset>
    <legend>4. Delivery method</legend>
    <div class="choice">
      <input type="radio" id="delivery-standard" name="delivery" value="standard" required>
      <label for="delivery-standard">Standard delivery &mdash; $7.95, free on orders over $75
        <span class="sub">Leaves us in 1&ndash;2 business days. Arrives in 3&ndash;7 business days.</span></label>
    </div>
    <div class="choice">
      <input type="radio" id="delivery-expedited" name="delivery" value="expedited">
      <label for="delivery-expedited">Expedited delivery &mdash; $19.95
        <span class="sub">Leaves us in 1 business day. Arrives in 2&ndash;3 business days.</span></label>
    </div>
  </fieldset>

  <fieldset>
    <legend>5. Payment method</legend>
    <div class="choice">
      <input type="radio" id="payment-card" name="payment" value="card" required>
      <label for="payment-card">Credit or debit card on our payment provider&rsquo;s secure page
        <span class="sub">You would enter card details on their page, never on ours.</span></label>
    </div>
    <div class="choice">
      <input type="radio" id="payment-paypal" name="payment" value="paypal">
      <label for="payment-paypal">PayPal
        <span class="sub">You would sign in to PayPal to approve the payment.</span></label>
    </div>
    <p>We never ask for your card number on this page.</p>
  </fieldset>

  <fieldset>
    <legend>6. Review and place order</legend>
    <p>Your total will be the item prices shown on their product pages, plus shipping by the method you chose above, plus sales tax calculated from your delivery state. Item prices include every mandatory fee.</p>
    <div class="agree-row">
      <input type="checkbox" id="agree" name="agree" required>
      <label for="agree">I have read the <a href="../policies/return-and-refund-policy.php">Return &amp; Refund Policy</a> and the <a href="../policies/shipping-policy.php">Shipping Policy</a>. (required)</label>
    </div>
    <p><strong>Online payment is being set up. Pressing Place order will not charge you.</strong></p>
    <button type="submit" class="btn-block">Place order</button>
    <p><a href="cart.php">Back to cart</a></p>
  </fieldset>
</form>

  <section class="section">
    <h2>Rather order by telephone?</h2>
    <p>Call <a href="tel:+15555550147">(555) 010-0147</a>, Mon&ndash;Fri 9 AM&ndash;6 PM ET. Have your item numbers ready.</p>
  </section>
</div></main>
<footer>
  <div class="wrap">
    <div>
      <h2>Porchlight General</h2>
      <address>
        Porchlight General LLC<br>
        118 Depot Street, Suite 4<br>
        Springfield, IL 62701<br>
        Phone: <a href="tel:+15555550147">(555) 010-0147</a><br>
        Email: <a href="mailto:orders@porchlightgeneral.example">orders@porchlightgeneral.example</a><br>
        Hours: Mon&ndash;Fri 9 AM&ndash;6 PM ET
      </address>
    </div>
    <div class="nav-col">
      <h2>Shop</h2>
      <ul><li><a href="../pages/shop.php#kitchen-classics">Kitchen Classics</a></li><li><a href="../pages/shop.php#pantry-canning">Pantry &amp; Canning</a></li><li><a href="../pages/shop.php#home-hearth">Home &amp; Hearth</a></li><li><a href="../pages/shop.php#radios-clocks-keepsakes">Radios, Clocks &amp; Keepsakes</a></li><li><a href="../pages/shop.php">Shop All</a></li><li><a href="../pages/deals.php">Today&rsquo;s Deals</a></li></ul>
    </div>
    <div class="nav-col">
      <h2>Help</h2>
      <ul>
        <li><a href="../pages/how-to-order.php">How to Order</a></li>
        <li><a href="../pages/contact.php">Contact &amp; Help Center</a></li>
        <li><a href="../pages/cart.php">Cart &amp; Checkout</a></li>
        <li><a href="../pages/about.php">About Us</a></li>
      </ul>
    </div>
    <div class="nav-col">
      <h2>Policies</h2>
      <ul><li><a href="../policies/return-and-refund-policy.php">Return &amp; Refund Policy</a></li><li><a href="../policies/shipping-policy.php">Shipping Policy</a></li><li><a href="../policies/privacy-policy.php">Privacy Policy</a></li><li><a href="../policies/your-privacy-choices.php">Your Privacy Choices</a></li><li><a href="../policies/cookie-policy.php">Cookie Policy</a></li><li><a href="../policies/terms-of-service.php">Terms of Service</a></li><li><a href="../policies/payment-and-pricing-policy.php">Payment &amp; Pricing Policy</a></li><li><a href="../policies/warranty-and-product-safety.php">Warranty &amp; Product Safety</a></li><li><a href="../policies/accessibility-statement.php">Accessibility Statement</a></li><li><a href="../policies/intellectual-property.php">Intellectual Property</a></li></ul>
    </div>
  </div>
  <div class="copyright"><div class="wrap">
    <p>&copy; 2026 Porchlight General. All rights reserved. Prices in U.S. dollars. Sales tax is calculated at checkout based on your delivery state.</p>
  </div></div>
</footer>
</body>
</html>

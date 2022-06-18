<?php 
error_reporting(E_ALL); 
ini_set('display_errors', 1);
// feel free to change this
echo '<body style="background-color:#F1E8BA">';

/* ====================== ITEMS ====================== */

/* SRIRACHA SHRIMP */
if(isset($_GET['sShrimp'])  && !empty($_GET['sShrimp']) && is_numeric($_GET['sShrimp']) ){

    $sShrimp = $_GET['sShrimp'];
    $sShrimp_price = "16.50";
    $total_sShrimp = $sShrimp * $sShrimp_price;

echo "<b>Sriracha Shrimp</b>: $" . number_format($total_sShrimp,2);
echo "<br>";

}
else{ $total_sShrimp = 0; }


/* SUPREME BURGER */
if(isset($_GET['wbBurger'])  && !empty($_GET['wbBurger']) && is_numeric($_GET['wbBurger']) ){

    $wbBurger = $_GET['wbBurger'];
    $wbBurger_price = "14.50";
    $total_wbBurger = $wbBurger * $wbBurger_price;

echo "<b>Supreme Burger</b>: $" . number_format($total_wbBurger,2);
echo "<br>";

}
else{ $total_wbBurger = 0; }


/* MOZZ STICKS */
if(isset($_GET['mozSticks'])  && !empty($_GET['mozSticks']) && is_numeric($_GET['mozSticks']) ){

    $mozSticks = $_GET['mozSticks'];
    $mozSticks_price = "8.50";
    $total_mozSticks = $mozSticks * $mozSticks_price;

echo "<b>Mozzarella Sticks</b>: $" . number_format($total_mozSticks,2);
echo "<br>";

}

else{ $total_mozSticks = 0; }

/* BONELESS WINGS */
if(isset($_GET['bWings']) && !empty($_GET['bWings']) && is_numeric($_GET['bWings']) ){

    $bWings = $_GET['bWings'];
    $bWings_price = "12.30";
    $total_bWings = $bWings * $bWings_price;

echo "<b>Boneless Wings</b>: $" . number_format($total_bWings,2);
echo "<br>";

}

else{ $total_bWings = 0; }


/* TAQUITOS */
if(isset($_GET['cTaquitos'])  && !empty($_GET['cTaquitos']) && is_numeric($_GET['cTaquitos']) ){

    $cTaquitos = $_GET['cTaquitos'];
    $cTaquitos_price = "13.90";
    $total_cTaquitos = $cTaquitos * $cTaquitos_price;

echo "<b>Chicken Taquitos</b>: $" . number_format($total_cTaquitos,2);
echo "<br>";

}

else{ $total_cTaquitos = 0; }

/* PORK RIBS */
if(isset($_GET['pRibs']) && !empty($_GET['pRibs']) && is_numeric($_GET['pRibs']) ){

    $pRibs = $_GET['pRibs'];
    $pRibs_price = "16.50";
    $total_pRibs = $pRibs * $pRibs_price;

echo "<b>Smoked Pork Rib Tips</b>: $" . number_format($total_pRibs,2);
echo "<br>";

}

else{ $total_pRibs = 0; }

/* CAPRESE FLATBREAD */
if(isset($_GET['cFlatbread']) && !empty($_GET['cFlatbread']) && is_numeric($_GET['cFlatbread']) ){

    $cFlatbread = $_GET['cFlatbread'];
    $cFlatbread_price = "10.30";
    $total_cFlatbread = $cFlatbread * $cFlatbread_price;

echo "<b>Caprese Flatbread</b>: $" . number_format($total_cFlatbread,2);
echo "<br>";

}

else{ $total_cFlatbread = 0; }

/* GRILLED CHEESE */
if(isset($_GET['grilledC']) && !empty($_GET['grilledC']) && is_numeric($_GET['grilledC']) ){

    $grilledC = $_GET['grilledC'];
    $grilledC_price = "10.45";
    $total_grilledC = $grilledC * $grilledC_price;

echo "<b>Grilled Cheese</b>: $" . number_format($total_grilledC,2);
echo "<br>";

}

else{ $total_grilledC = 0; }

/* BUFFALO CHICKEN WRAP */
if(isset($_GET['cWrap']) && !empty($_GET['cWrap']) && is_numeric($_GET['cWrap']) ){

    $cWrap = $_GET['cWrap'];
    $cWrap_price = "12.30";
    $total_cWrap = $cWrap * $cWrap_price;

echo "<b>Buffalo Chicken Wrap</b>: $" . number_format($total_cWrap,2);
echo "<br>";

}

else{ $total_cWrap = 0; }

/* CHICKEN STRIPS */
if(isset($_GET['cStrips']) && !empty($_GET['cStrips']) && is_numeric($_GET['cStrips']) ){

    $cStrips = $_GET['cStrips'];
    $cStrips_price = "14.30";
    $total_cStrips = $cStrips * $cStrips_price;

echo "<b>Chicken Strips</b>: $" . number_format($total_cStrips,2);
echo "<br>";

}

else{ $total_cStrips = 0; }

/* FISH TACOS */
if(isset($_GET['fishTacos']) && !empty($_GET['fishTacos']) && is_numeric($_GET['fishTacos']) ){

    $fishTacos = $_GET['fishTacos'];
    $fishTacos_price = "16.80";
    $total_fishTacos = $fishTacos * $fishTacos_price;

echo "<b>Fish Tacos</b>: $" . number_format($total_fishTacos,2);
echo "<br>";

}

else{ $total_fishTacos = 0; }

/* FISH TACOS */
if(isset($_GET['cSalad']) && !empty($_GET['cSalad']) && is_numeric($_GET['cSalad']) ){

    $cSalad = $_GET['cSalad'];
    $cSalad_price = "10.30";
    $total_cSalad = $cSalad * $cSalad_price;

echo "<b>Caesar Salad</b>: $" . number_format($total_cSalad,2);
echo "<br>";

}

else{ $total_cSalad = 0; }


/* ====================== TALLY ====================== */

$sub_total = $total_sShrimp + $total_wbBurger + $total_mozSticks + $total_bWings + $total_cTaquitos + $total_pRibs + $total_cFlatbread + $total_grilledC + $total_cWrap + $total_cStrips + $total_cSalad + $total_fishTacos;

$grand_total_items = number_format($sub_total, 2);

echo "<hr>";
echo "<b>Sub-total</b>: $" . $grand_total_items;
echo "<br>";

$tax= 1.08;

$grand_total = $grand_total_items * $tax;

echo "<b>Grand total + Tax</b>: $" . number_format($grand_total,2);

echo "<br>";

$checkout = "Checkout text here.";


/* ====================== PRINT OTHER ====================== */

print "<hr>";
?>
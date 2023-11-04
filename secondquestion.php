<?php
function calculateTotalSales($salesData, $productName) {
    $lines = explode("\n", $salesData);
    $totalSales = 0;

    foreach ($lines as $line) {
        $data = explode(",", $line);
        if (count($data) >= 3) {
            $product = trim($data[0]);
            $amount = floatval($data[1]);
            $quantity = intval($data[2]);

            if ($product === $productName) {
                $totalSales += $amount * $quantity;
            }
        }
    }

    return number_format($totalSales, 2);
}


$salesData = "Product A,100.50,5
Product B,75.25,3
Product A,50.25,2
Product C,30.00,1
Product A,75.50,4";
$productName = "Product A";
$totalSales = calculateTotalSales($salesData, $productName);

echo "Total sales for $productName: PHP" . $totalSales;
?>

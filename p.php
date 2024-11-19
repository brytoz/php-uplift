<?php
function calculateDiscount($amount, $isMember) {
    $discount = 0;

    if ($isMember) {
        // For members
        if ($amount < 50) {
            $discount = 0.10; 
        } elseif ($amount >= 50 && $amount <= 100) {
            $discount = 0.15;
        } else {
            $discount = 0.20;
        }
    } else {
        if ($amount < 50) {
            $discount = 0.00; 
        } elseif ($amount >= 50 && $amount <= 100) {
            $discount = 0.05; 
        } else {
            $discount = 0.10; 
        }
    }

    // Calculate the final amount after applying the discount
    $finalAmount = $amount - ($amount * $discount);
    return $finalAmount;
}

// Example usage:
$purchaseAmount = 120;
$isMember = true;

$finalPrice = calculateDiscount($purchaseAmount, $isMember);
echo "The final amount after discount is: $" . number_format($finalPrice, 2); // Outputs the discounted price
?>

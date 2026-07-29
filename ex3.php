<!-- Task 1 -->
 <?php
    $budget = 5000;
    $groceries = 1200;
    $transportation = 800;
    $entertainment = 600;
    $expenses = $groceries + $transportation + $entertainment;
    echo "Your total amount left after expenses is: " . ($budget - $expenses);
    ?>

<!-- Task 2 -->
 <?php
    $userAge= 21;
    if ($userAge <= 12) {
        echo "You are a child!";
    }
    elseif (13<= $userAge <= 17) {
        echo "You are a teenager";
    }
    elseif (18 <= $userAge <= 64) {
        echo "You are an adult";
    }
    else {
        echo "You are a senior citizen";
    };
 ?>

<!-- Task 3 -->
 <?php
    $amount = 10000;
    $rate = 0.05;
    $years = 5;
    $interest = $amount * $rate * $years;
    $totalAmount = $amount + $interest;
    echo "The interest earned on the amount is: " . $interest . "<br>";
    echo "The total amount after interest is: " . $totalAmount;
    ?>

<!-- Task 4 -->
 <?php 
    $age = 17;
    if (17 < $age > 36) {
        echo "You are eligible to vote";
    } 
    else {
        echo "You are not eligible to vote";
    };
?>

<!-- Task 5 -->
 <?php
    $purchaseAmount = 1200 ;
    if ($purchaseAmount >= 1000) {
        $newPurchaseAmount = $purchaseAmount - ($purchaseAmount * 0.10);
        echo "You have been given a 10% discount. New price: " . $newPurchaseAmount;

    }
    elseif (500 <= $purchaseAmount < 1000) {
        $newPurchaseAmount = $purchaseAmount - ($purchaseAmount * 0.05);
        echo "You have been given a 5% discount. New price: " . $newPurchaseAmount;
    }
    elseif (250 <= $purchaseAmount < 500) {
        $newPurchaseAmount = $purchaseAmount - ($purchaseAmount *0.02);
        echo "You have been given a 2% discount. New price:". $newPurchaseAmount;
    }
    else {
        echo "You are not eligible for any discount. Price: " . $purchaseAmount;
    };
<?php
// Initialize an empty array to store weights
$weights = [];
$totalWeight = 0;

// Loop to get weights of five people
for ($i = 1; $i <= 5; $i++) {
    echo "Enter the weight of person $i: ";
    $input = trim(fgets(STDIN)); // Read input from the command line

    // Check if the input is numeric
    if (is_numeric($input)) {
        $weight = floatval($input);
        $weights[] = $weight;
        $totalWeight += $weight;
    } else {
        echo "Invalid input. Please enter a numeric value.\n";
        $i--; // Repeat this iteration
    }
}

// Output the total weight
echo "The total weight of all five people is: $totalWeight\n";
?>

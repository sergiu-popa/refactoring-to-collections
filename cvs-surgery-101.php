<?php

include('vendor/autoload.php');

$shifts = [
    'Shipping_Steve_A7',
    'Sales_B9',
    'Support_Tara_K11',
    'J15',
    'Warehouse_B2',
    'Shipping_Dave_A6',
];

$shiftIds = collect($shifts)->map(function ($shift) {
    return collect(explode('_', $shift))->last();
});

dd($shiftIds->all());

/*$shiftIds = [];

foreach ($shifts as $shift) {
    $parts = explode('_', $shift);
    $shiftIds[] = end($parts);
}

dd($shiftIds);*/


<?php

if (!function_exists('formatShippingAddress')) {
    function formatShippingAddress($street, $city, $state, $zipcode, $country)
    {
        return implode(', ', array_filter([$street, $city, $state, $zipcode, $country]));
    }
}
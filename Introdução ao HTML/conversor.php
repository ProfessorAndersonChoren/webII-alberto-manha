<?php
const grau_celsius = 37;

const grau_fahrenheit = grau_celsius * 1.8 + 32;
const grau_kelvin = grau_celsius + 273.15;
const grau_rankine = grau_celsius * 1.8 + 491.67;

echo "<p style='font-weight:bold'>" . grau_celsius . "°C:</p>";
echo "<p style='font-weight:bold'>" . grau_fahrenheit . "°F</p>";
echo "<p style='font-weight:bold'>" . grau_kelvin . "K</p>";
echo "<p style='font-weight'>" . grau_rankine . "°R</p>";

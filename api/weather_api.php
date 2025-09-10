<?php
session_start();

require_once __DIR__ . "/../config.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
  $cityName = $_GET["cityName"];

  // TODO: agregar conexión y retornar resultados
  //
  // condition_icon codes -> https://www.weatherapi.com/docs/weather_conditions.json
  // eg. "//cdn.weatherapi.com/weather/64x64/night/$condition_code.png"
  //
  // API url: https://api.weatherapi.com/v1/current.json?key=$apiKey&q=$cityName

  if ($cityName === 'Lima') {
    $_SESSION["status"] = "ok";
    $_SESSION["response"] = [
      "condition_icon" => "//cdn.weatherapi.com/weather/64x64/night/116.png",
      "condition_text" => "Despejado",
      "temperature"    => "17.2",
      "humidity"       => "78",
      "wind_kph"     => "6.1",
    ];
  } elseif (isset($cityName) && $cityName !== "") {
    $_SESSION["status"] = "404";
  }


  header("Location:/?cityName=$cityName");
}

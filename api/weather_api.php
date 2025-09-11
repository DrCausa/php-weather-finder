<?php
session_start();

require_once __DIR__ . "/../config.php";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $cityName = htmlspecialchars($_GET["cityName"] ?? "");

    // Construir la URL de la API con la clave y la ciudad
    $apiUrl = "https://api.weatherapi.com/v1/current.json?key=" . $_ENV['API_KEY'] . "&q=" . $cityName;

    // Realizar la conexión y obtener los datos con cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Decodificar la respuesta JSON
    $data = json_decode($response, true);

    // Verificar si la solicitud fue exitosa y los datos existen
    if (isset($data["current"]) && isset($data["location"])) {

        $last_updated_epoch = $data["current"]["last_updated_epoch"];
        $condition_icon = $data["current"]["condition"]["icon"];
        $_SESSION["status"] = "ok";
        $_SESSION["response"] = [
            "condition_icon" => $condition_icon,
            "condition_text" => $data["current"]["condition"]["text"],
            "temperature" => $data["current"]["temp_c"],
            "humidity" => $data["current"]["humidity"],
            "wind_kph" => $data["current"]["wind_kph"],
            "location_name" => $data["location"]["name"],
            "location_region" => $data["location"]["region"],
            "location_country" => $data["location"]["country"],
            "last_updated_epoch" => $last_updated_epoch
        ];
    } else {
        $_SESSION["status"] = "404";
    }

    header("Location:/?cityName=$cityName");
}

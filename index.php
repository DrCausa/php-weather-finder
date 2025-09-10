<?php
session_start();
$status = $_SESSION["status"] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="/assets/css/styles.css" />
</head>

<body>
  <!-- WRAPPER -->
  <div class="w-[25rem] border p-4 rounded-lg mx-auto my-15 flex flex-col *:!text-lg *:!font-light">
    <!-- FORM CONTAINER -->
    <form
      x-data="{ cityName: '' }"
      class="flex w-full rounded-lg border"
      action="api/weather_api.php"
      method="GET">
      <!-- ICON -->
      <div class="flex items-center justify-center px-3">
        <span
          x-show="cityName === ''"
          class="text-gray-600 material-symbols-rounded">map_search</span>
        <button
          x-show="cityName !== ''"
          class="flex items-center justify-center hover:cursor-pointer"
          type="reset"
          title="Reset">
          <span class="material-symbols-rounded">close</span>
        </button>
      </div>

      <!-- INPUT LAYER -->
      <div class="relative z-0 flex-1 flex items-center py-2">
        <input
          x-model="cityName"
          class="peer w-full focus:outline-none"
          type="text"
          id="cityName"
          name="cityName"
          placeholder=" "
          value=""
          autocomplete="off" />
        <label
          class="absolute z-5 pointer-events-none transition-all text-gray-600 bg-white peer-focus:px-1 peer-focus:translate-y-[-20px] peer-focus:text-sm peer-not-placeholder-shown:px-1 peer-not-placeholder-shown:translate-y-[-20px] peer-not-placeholder-shown:text-sm peer-not-placeholder-shown:text-black"
          for="cityName">City Name</label>
      </div>

      <!-- BUTTON -->
      <button
        class="flex items-center justify-center px-3 hover:cursor-pointer"
        type="submit"
        title="Search">
        <span class="material-symbols-rounded">search</span>
      </button>
    </form>

    <!-- RESPONSE CONTAINER -->
    <?php
    if ($status === true && isset($_SESSION["response"])) {
      $response = $_SESSION["response"];
      include "includes/response.php";
    } elseif ($status === false) {
      include "includes/404.php";
    }

    $_SESSION = [];
    ?>
  </div>
</body>

<script src="//unpkg.com/alpinejs" defer></script>

</html>
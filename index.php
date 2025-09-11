<?php
session_start();
$status = $_SESSION["status"] ?? null;
$cityName = $_GET["cityName"] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP Weather Finder</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="/assets/css/styles.css" />
</head>

<body class="bg-gray-100/50 min-h-screen flex items-center overflow-y-scroll">
  <!-- WRAPPER -->
  <div class="bg-white bg-opacity-75 backdrop-blur-sm border border-white border-opacity-30 shadow-2xl w-[22rem] border p-6 rounded-2xl mx-auto my-15 flex flex-col *:!text-lg *:!font-light">
    <!-- FORM CONTAINER -->
    <form
      x-data="{ cityName: '<?php echo $cityName ?>' }" // cambiar nombre de ciudad por ''
      class="flex w-full rounded-lg
              border-b-2 border-gray-300
              focus:border-indigo-600 focus:outline-none 
              px-4 py-1 transition duration-300 ease-in-out shadow-sm"
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
          <span class="text-gray-600 material-symbols-rounded">close</span>
        </button>
      </div>

      <!-- INPUT LAYER -->
      <div class="ml-2 relative z-0 flex-1 flex items-center py-2">
        <input
          x-model="cityName"
          class="peer w-full focus:outline-none"
          type="text"
          id="cityName"
          name="cityName"
          placeholder=""
          value=""
          autocomplete="off" />
        <label
          class="
            absolute z-5 pointer-events-none transition-all duration-500 ease-and-out text-gray-600 bg-white
            peer-focus:px-1 peer-focus:translate-x-[120%] peer-focus:opacity-0
            peer-not-placeholder-shown:px-1 peer-not-placeholder-shown:translate-x-[200%] peer-not-placeholder-shown:opacity-0
          "
          for="cityName">City Name</label>
      </div>

      <!-- BUTTON -->
      <button
        class="flex items-center justify-center px-3 hover:cursor-pointer"
        type="submit"
        title="Search">
        <span class=" material-symbols-rounded">search</span>
      </button>
    </form>

    <!-- RESPONSE CONTAINER -->
    <?php
    if (isset($status) && $status === "ok") {
      $response = $_SESSION["response"];
      include "includes/response.php";
    } elseif ($status === "404") {
      include "includes/404.php";
    }

    $_SESSION = [];
    ?>
  </div>
</body>

<script src="//unpkg.com/alpinejs" defer></script>

</html>
<?php

$cityName = $_GET["cityName"];

?>

<div class="mt-8">
  <p class="flex flex-col items-center text-gray-600 text-center">
    <img class="w-[128px] mb-4" src="/assets/img/404.png" alt="404">
    <span>No weather data available for '<strong><?php echo $cityName ?></strong>'</span>
  </p>
</div>
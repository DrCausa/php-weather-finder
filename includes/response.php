<div class="mt-2">
  <div class="mb-15 mt-6 flex flex-col items-center">
    <!-- SEARCH INFO -->
    <div class="flex">
      <?php
      $sep = " / ";
      $info = strtoupper(htmlspecialchars($response["location_name"]) . $sep . htmlspecialchars($response["location_region"]) . $sep . htmlspecialchars($response["location_country"]));
      ?>
      <span class="text-sm text-center text-gray-600 mb-2"><?= $info ?></span>
    </div>
    <!-- CONDITION IMAGE -->
    <img
      class="w-[100px] h-[100px] flex flex-col justify-center items-center"
      src="<?= htmlspecialchars($response["condition_icon"]) ?>"
      alt="Weather icon" />
    <!-- CONDITION TEXT -->
    <span class="text-3xl text-center mt-3"><?= htmlspecialchars($response["condition_text"]) ?></span>
    <!-- TEMPERATURE -->
    <span class="text-2xl mt-2"><?= htmlspecialchars($response["temperature"]) ?> °C</span>
  </div>
  <div class="flex justify-between mt-10">
    <div class="flex flex-col items-center">
      <!-- HUMIDITY -->
      <span class="text-2xl mb-1"><?= htmlspecialchars($response["humidity"]) ?>%</span>
      <p class="flex items-center">
        <span class="mr-1 material-symbols-rounded">cool_to_dry</span>
        Humidity
      </p>
    </div>

    <div class="flex flex-col items-center">
      <!-- WIND KPH -->
      <span class="text-2xl mb-1"><?= htmlspecialchars($response["wind_kph"]) ?> Km/h</span>
      <p class="flex items-center">
        <span class="mr-1 material-symbols-rounded">air</span>
        Wind Speed
      </p>
    </div>
  </div>
</div>
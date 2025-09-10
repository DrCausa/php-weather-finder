<div class="mt-4">
  <div class="mb-15 mt-6 flex flex-col items-center">
    <!-- CONDITION IMAGE -->
    <img
      class="w-[120px] h-[120px] flex grayscale flex-col justify-center items-center"
      src="<?= htmlspecialchars($response["condition_icon"]) ?>"
      alt="Weather icon" />
    <!-- CONDITION TEXT -->
    <span class="text-4xl mt-3"><?= htmlspecialchars($response["condition_text"]) ?></span>
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
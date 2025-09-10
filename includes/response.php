<div class="mt-4">
  <div class="flex flex-col items-center">
    <!-- CONDITION IMAGE -->
    <img
      class="w-[50px] h-[50px] flex grayscale"
      src="<?= htmlspecialchars($response["condition_icon"]) ?>"
      alt="Weather icon" />
    <!-- CONDITION TEXT -->
    <span class="text-2xl"><?= htmlspecialchars($response["condition_text"]) ?></span>
    <!-- TEMPERATURE -->
    <span class="text-xl"><?= htmlspecialchars($response["temperature"]) ?> °C</span>
  </div>
  <div class="flex justify-between mt-8">
    <div class="flex flex-col items-center">
      <!-- HUMIDITY -->
      <span><?= htmlspecialchars($response["humidity"]) ?>%</span>
      <p class="flex">
        <span class="material-symbols-rounded">cool_to_dry</span>
        Humidity
      </p>
    </div>
    <div class="flex flex-col items-center">
      <!-- WIND KPH -->
      <span><?= htmlspecialchars($response["wind_kph"]) ?> Km/h</span>
      <p class="flex">
        <span class="material-symbols-rounded">air</span>
        Wind Speed
      </p>
    </div>
  </div>
</div>
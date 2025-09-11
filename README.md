# 🌦️ PHP Weather Finder

Aplicación sencilla en **PHP** que permite consultar el clima de cualquier ciudad utilizando la API de [WeatherAPI](https://www.weatherapi.com/).

## 🚀 Características
- Búsqueda de clima actual por nombre de ciudad.  
- Muestra temperatura, estado del clima, humedad y otros datos relevantes.  
- Interfaz simple y ligera.  
- Basado en **PHP** con integración a una API externa.  

## 📦 Requisitos
- PHP 7.4 o superior.  
- Conexión a internet (para consumir la API).  
- Una [API Key gratuita](https://www.weatherapi.com/) de WeatherAPI.  
- Archivo `.env` para guardar tu API Key de forma segura.  

## 🔧 Instalación y uso
1. Clona este repositorio:
   ```bash
   git clone https://github.com/DrCausa/php-weather-finder.git
   ```
2. Accede al directorio:
   ```bash
   cd php-weather-finder
   ```
3. Crea un archivo `.env` en la raíz del proyecto y agrega tu API Key:
   ```env
   API_KEY=TU_API_KEY
   ```
4. Abre el archivo principal en tu servidor local (ejemplo con XAMPP, Laragon, etc.).  
5. Busca el clima de cualquier ciudad desde la interfaz.  

## 🗝️ Configuración de la API
- Crea una cuenta gratuita en [WeatherAPI](https://www.weatherapi.com/).  
- Copia tu **API Key**.  
- Pégala en el archivo `.env` con la variable `API_KEY`.  

Ejemplo de endpoint que usará el sistema con la clave del `.env`:
```url
http://api.weatherapi.com/v1/current.json?key=API_KEY&q=Lima
```

## 📷 Captura de ejemplo
![Index](https://github.com/user-attachments/assets/1bdb46d7-9634-4d66-9cf7-f430aa5d9390)

![Response](https://github.com/user-attachments/assets/f042afcc-1835-49db-a9df-f91e05ae2f21)

![404](https://github.com/user-attachments/assets/5702b162-5ae7-43fe-91dd-1df9a11fa503)

## 📄 Licencia
Este proyecto está bajo la licencia **MIT**.  
Eres libre de usarlo, modificarlo y mejorarlo.  

---

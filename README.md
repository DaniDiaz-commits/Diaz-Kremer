# 📦 Diaz-Kremer 📦  
**Aplicación web hecha para Diaz Kremer**

---

## 📌 Instalación
### Requisitos previos
Para ejecutar este proyecto, asegúrate de tener instaladas las siguientes herramientas:

- [PHP](https://www.php.net/downloads.php) **(>= 8.2)**
- [Composer](https://getcomposer.org/download/) **(>= 2.8.6)**
- [Node.js](https://nodejs.org/es/download) **(>= 22.0.0)**
- Base de datos: **MySQL** o **SQLite** (según preferencia, solo se deben ejecutar las migraciones con seeders)

### 📥 Instalación del Proyecto
Ejecuta los siguientes comandos en la terminal:

#### 🔹 Instalación de dependencias PHP:
```bash
composer install
```

#### 🔹 Instalación de dependencias Node.js (Tailwind, Flowbite, etc.):
```bash
npm install
```

#### 🔹 Ejecución de las migraciones con los seeders, para la creación de las tablas así como ingresar los datos:
```bash 
php artisan migrate --seed
```

#### 🔹 Ejecución del servidor local:
Si no tienes configurado un servidor web local, ejecuta:
```bash
php artisan serve
```

#### 🔹 Compilación de archivos con Vite:
(Este comando se ejecuta solo si hay un servidor corriendo)
```bash
npm run dev
```

---

## 👨‍💻 Configuración
Creación de el .env, usa el archivo '.env.example' para poder usar la app con bases de datos
Ya sea que elijas MySQL o Sqlite tendrás que ponerlo en el .env.

## 🛠️ Tecnologías Utilizadas

| Tecnología  | Descripción |
|-------------|-------------|
| [Laravel](https://laravel.com) | Framework principal del backend |
| [Livewire](https://laravel-livewire.com) | Biblioteca para componentes interactivos |
| [Vite](https://vite.dev) | Herramienta para empaquetar y compilar archivos |
| [Tailwind](https://tailwindcss.com) | Framework CSS moderno y eficiente |
| [Flux](https://fluxui.dev) | Librería de componentes UI |
| Adobe Illustrator | Creación del logo en formato SVG |

---

## 📚 Recursos y Reconocimientos
Este proyecto ha sido desarrollado siguiendo tutoriales y referencias de:
- 📺 [Coders Free](https://www.youtube.com/@CodersFree)
- 📺 [Hardik Savani](https://www.youtube.com/@savanihd)

---

## 📜 Licencia

**© 2025 Diaz Kremer. Todos los derechos reservados.**

Este software es propiedad exclusiva de **Diaz Kremer**. Se prohíbe su distribución, modificación o uso sin permiso expreso por escrito.

El software se proporciona "tal cual", sin garantía de ningún tipo, ya sea expresa o implícita, incluyendo, pero no limitado a, garantías de comerciabilidad o idoneidad para un propósito particular.

---

## 🙇 Autor

👤 **Daniel Díaz**  
🔗 [GitHub: @DaniDiaz-commits](https://github.com/DaniDiaz-commits)

---

✨ _Si te ha sido útil este proyecto, considera darle una estrella en GitHub!_ ⭐

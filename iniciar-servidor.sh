#!/bin/zsh

# Ir a la carpeta del proyecto
cd /Volumes/Documentos\ y\ Achivos/Dreamweaver/la-viliella

# Iniciar el servidor en segundo plano
php -S localhost:8000 &

# Esperar un momento para que el servidor arranque
sleep 2

# Abrir la página de opiniones en el navegador
open http://localhost:8000/opiniones.php

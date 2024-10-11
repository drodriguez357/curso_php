#!/bin/bash

# Pregunta al usuario por el mensaje del commit
read -p "Introduce el mensaje del commit: " commit_message

# Encuentra carpetas vacías y crea un archivo .gitkeep en cada una
find . -type d -empty -exec touch {}/.gitkeep \;

# Encuentra carpetas que contienen archivos y elimina el .gitkeep


# Agrega todos los cambios al índice
git add .

find . -type d ! -empty -exec rm -f {}/.gitkeep \;

# Realiza el commit con el mensaje proporcionado por el usuario
git commit -m "$commit_message"

# Envía los cambios al repositorio remoto
git push origin main

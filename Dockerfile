# Utiliser l'image officielle PHP
FROM php:latest

# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www/html

# Copier le code PHP dans le conteneur
COPY . .

# Exposer le port 80
EXPOSE 80

# Commande pour démarrer le serveur PHP
CMD ["php", "-S", "0.0.0.0:80"]

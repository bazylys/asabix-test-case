## Dev deploy

```bash

# Clone re  po
git clone https://github.com/bazylys/asabix-test-case

# Go to folder
cd asabix-test-case

# Configure settings file
cp .env.example .env
mcedit .env

# Install dependencies
docker run --rm \
-v "$(pwd)":/opt \
-w /opt \
laravelsail/php81-composer:latest \
composer install

# Start docker 
vendor/bin/sail up
## [Swap to new term] ##

  
# Migrate db & generate key
vendor/bin/sail artisan migrate --seed
vendor/bin/sail artisan key:generate
```


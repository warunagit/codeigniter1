php -S localhost:8080 -d display_errors=1 -t public\

1
duplicate env file and rename as .env

environment mode change
#CI_ENVIRONMENT = production -> CI_ENVIRONMENT = development
it enables debug mode to view errors.

app.baseURL = '' -> app.baseURL = 'http://localhost:8080/'

2

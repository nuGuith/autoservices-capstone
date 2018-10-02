@echo off

taskkill /F /IM xampp-control.exe
taskkill /IM cmd.exe /FI "WINDOWTITLE eq JPR*"

start /min "JPR" cmd /k "php artisan serve"

cd "C:\xampp"
start /min xampp-control.exe
cd "C:\Program Files (x86)\Google\Chrome\Application"
start chrome http://127.0.0.1:8000

exit
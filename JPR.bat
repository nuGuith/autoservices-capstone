@echo off

taskkill /F /IM xampp-control.exe
cls
cd "C:\xampp"
start /min/d xampp-control.exe
cls
start chrome http://git.auto.jpr

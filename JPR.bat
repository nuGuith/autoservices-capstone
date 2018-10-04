@echo off

taskkill /F /IM xampp-control.exe

cd "C:\xampp"
start /min xampp-control.exe

start chrome http://git.auto.jpr

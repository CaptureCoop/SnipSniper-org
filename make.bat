@echo off
cls

REM This file makes moving the web files to something like a xampp webserver faster

set webserver=D:\Programs\xampp\htdocs\
echo Webserver directory: %webserver%

echo Cleaning...
rmdir /S /Q %webserver%

echo Making folder...
mkdir %webserver%

echo Copying files...
robocopy src/ %webserver% /E /njh /njs /ndl /nc /ns /nfl

echo Done!
@echo off
REM Glinta Africa Cron Job Runner
REM This script runs the automated tasks for the billing system

echo Starting Glinta Africa Cron Job...
echo Time: %date% %time%

REM Change to the system directory
cd /d "C:\xampp\htdocs\phpnuxbill\system"

REM Run the cron job
C:\xampp\php\php.exe cron.php

echo Cron job completed.
echo Time: %date% %time% 
@echo off
chcp 65001 >nul
setlocal
cd /d "%~dp0"

if "%~1"=="local" goto local
if "%~1"=="production" goto production
if "%~1"=="prod" goto production

echo 使い方: htaccess_switch.bat [local ^| production]
echo.
echo   local     - .htaccess.local を .htaccess にコピー（ローカル開発用）
echo   production - .htaccess.production を .htaccess にコピー（本番用）
echo.
echo 引数なしの場合、現在の .htaccess はホスト名で自動切り替えのままです。
goto end

:local
if not exist .htaccess.local (echo .htaccess.local が見つかりません & goto end)
copy /Y .htaccess.local .htaccess >nul
echo [OK] .htaccess をローカル用に切り替えました。
goto end

:production
if not exist .htaccess.production (echo .htaccess.production が見つかりません & goto end)
copy /Y .htaccess.production .htaccess >nul
echo [OK] .htaccess を本番用に切り替えました。
goto end

:end
endlocal

@ECHO OFF 

FOR /F "tokens=*" %%i in ('ipconfig ^| find "IPv4"') do SET result=%%i

echo %result:IPv4 Address. . . . . . . . . . . : =% | clip


















FROM vulnerables/web-dvwa
EXPOSE 80
COPY exploit.py /var/www/html/vulnerabilities/exec/
chmod 777 exploit.py

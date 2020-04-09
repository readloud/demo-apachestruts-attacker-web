FROM vulnerables/web-dvwa
EXPOSE 80
COPY exploit.py /var/www/html/vulnerabilities/exec/
COPY index.php /var/www/html/vulnerabilities/exec/
CMD chmod 777 exploit.py
RUN apt-get update
RUN apt-get install -y python
RUN apt-get install -y wget
RUN apt-get install -y curl

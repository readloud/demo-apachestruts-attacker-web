FROM vulnerables/web-dvwa
EXPOSE 80
COPY exploit.py /var/www/html/
RUN chmod 777 exploit.py
RUN apt-get update
RUN apt-get install python
RUN apt-get install wget
RUN apt-get install curl

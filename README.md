# Rularea site-ului într-un container


# Scopul lucrarii
Pregatirea unui container pentru a rula un site web bazat pe Apache HTTP Server + PHP (mod_php) + MariaDB.


# Sarcina 
Creați un fișier Dockerfile pentru a construi o imagine a containerului care va conține un site web bazat pe Apache HTTP Server + PHP (mod_php) + MariaDB. Baza de date MariaDB trebuie să fie stocată într-un volum montat. Serverul trebuie să fie disponibil pe portul 8000.

Instalați site-ul WordPress. Verificați funcționarea site-ului.


# Realizarea sarcinii

## partea 1
1. am creat directorul containers04 si l-am legat cu git.
2. am creat directorul files, unde am adaugat directoarele apache2, php, mariadb
3. am creat fisireul Dockerfile si am adaugat continut\
4. am creat imaginea apache2-php-mariadb, containerul cu imaginea de baza apache2-php-mariadb si l-am pornit
![image](https://github.com/user-attachments/assets/e3d297d7-1d9a-4e45-9811-72109b468f33)

5. am copiat fisierele de configurare din container pe sistemul local
![image](https://github.com/user-attachments/assets/75c2d68e-ade5-40bb-9d11-6b2a7fa16734)

6. verificam ca fisierle exista, dupa care oprim si stergem containerul
![image](https://github.com/user-attachments/assets/93d9a23b-9f13-4747-bd52-f77c0dfc2ba7)

## partea 2
1. intam in fiserul 000-default.conf din files/apache2 si facem modificari la numele serverului, admin si adaugam inca o linie:
![image](https://github.com/user-attachments/assets/b9e6f0f5-ccc5-4f71-b22e-4c801694b73e)

2. intram in fisierul apache2.conf si adaugam servername:
![image](https://github.com/user-attachments/assets/1b9c9150-09ce-473e-9c77-e44c21c9531b)

3. intram in fisierul php.ini din files/php si facem schimbarile necesare.
4. intram in fisierul 50-server.cnf din files/mariadb si facem modificari.
![image](https://github.com/user-attachments/assets/6f4d3a42-c507-4a9c-9ce9-86e2d7b704d6)

5. in directoriul files facem un nou directoriu cu numele supervisor si cream in file de configuratie unde adaugam informatiile nececsare si salvam.
![image](https://github.com/user-attachments/assets/354e002b-0c2e-4744-9329-deb9eedd9288)

## partea 3
1. in Dockerfile am adaugat urmatoarele informatii:
### mount volume for mysql data
VOLUME /var/lib/mysql

### mount volume for logs
VOLUME /var/log

### add wordpress files to /var/www/html
ADD https://wordpress.org/latest.tar.gz /var/www/html/

### copy the configuration file for apache2 from files/ directory
COPY files/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY files/apache2/apache2.conf /etc/apache2/apache2.conf

### copy the configuration file for php from files/ directory
COPY files/php/php.ini /etc/php/8.2/apache2/php.ini

### copy the configuration file for mysql from files/ directory
COPY files/mariadb/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

### copy the supervisor configuration file
COPY files/supervisor/supervisord.conf /etc/supervisor/supervisord.conf

### create mysql socket directory
RUN mkdir /var/run/mysqld && chown mysql:mysql /var/run/mysqld

### expose port 80
EXPOSE 80

### start supervisor
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]

2. dupa ce am creat imaginea pornim containerul in baza imaginii:
![image](https://github.com/user-attachments/assets/dc2c9e21-56fa-41bc-959c-e8b58ac2e7a5)

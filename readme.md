# Running
Run this docker image to boot myXampp with html/php server and MariaDB.
Update dir for locally mounted www path.
docker run --name myXampp -p 41306:3306 -p 41061:22 -p 41062:80 -d -v /mnt/c/Workspace/labs/php/www:/www tomsik68/xampp:8

IP adress if running on docker on WSL2:
hostname -I

Steps for initial DB configuration:
- Go to DB admin panel under /phpmyadmin/
- Create new DB
- Create new user with correct privilages to allow connection from DBeaver
- DB will be reachable on port 41306


# Example links
Webpage link:
http://[IP]:41062/www/
DB admin panel:
http://[IP]:41062/phpmyadmin/

# Insterting data into DB
INSERT INTO models (id, model, year, displacement, power, weight, wheel, length) VALUES (NULL, 'Impreza GC', 1997, 1997, 115, 1150, 15, 4340), (NULL, 'Impreza GD', 2004, 1997, 125, 1250, 16, 4405), (NULL, 'Impreza GH', 2009, 1997, 150, 1380, 16, 4395), (NULL, 'Levorg', 1997, 1600, 170, 1480, 18, 4690);

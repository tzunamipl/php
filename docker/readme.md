# Mount www dir
docker run --name myXampp -p 41061:22 -p 41062:80 -d -v /mnt/c/Workspace/labs/php/www:/www tomsik68/xampp:8

# Mount apache setting (not tested)
docker run --name myXampp -p 41061:22 -p 41062:80 -d -v ~/my_web_pages:/www  -v /mnt/c/Workspace/labs/php/apache:/opt/lampp/apache2/conf.d tomsik68/xampp

cd /walker/html/blogs_new/wp-content/themes/walkerseen/avantgarden
./tag.py > new.txt
cat new.txt imgs.txt | sort | uniq > imgs.txt


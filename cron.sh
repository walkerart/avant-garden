cd /srv/www/blogs.walkerart.org/wp-content/themes/walktoberfest
./tag.py > new.txt
cat new.txt imgs.txt | sort | uniq > imgs.txt


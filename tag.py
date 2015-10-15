#!/usr/local/bin/python2.6

import simplejson
import urllib
url = 'https://api.instagram.com/v1/tags/walktoberfest/media/recent?client_id=66af27d088564255bdfd6945a02a57a5&min_id=1347044538233'
json = simplejson.load(urllib.urlopen(url))
print '\n'.join([','.join([j['created_time'],j['user']['username'],j['images']['standard_resolution']['url']]) for j in json['data']])


#!/usr/bin/expect

PRIVATE_KEY_PASSWORD=${PRIVATE_KEY_PASSWORD} spawn sftp -i key cwood@192.241.239.20
send ${PRIVATE_KEY_PASSWORD}
cd /usr/share/nginx/html
lcd build
put -r *
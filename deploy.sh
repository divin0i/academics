#!/bin/bash

SRC_DIR="/home/divin/Documents/PERSO/Training_arc/academics/"
DEST_DIR="/var/www/html"
sudo cp $SRC_DIR/php/*.php $DEST_DIR/
sudo cp $SRC_DIR/html/*.html $DEST_DIR/
sudo chown apache:apache $DEST_DIR/*.php
sudo chown apache:apache $DEST_DIR/*.html
sudo chmod 644 $DEST_DIR/*.php
sudo chmod 644 $DEST_DIR/*.html
echo "Deployment complete!"

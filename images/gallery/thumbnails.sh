#!/bin/bash

FILES="$@"
dir="/home/bitnami/htdocs/beta/images/gallery/fulls"
thumbs="/home/bitnami/htdocs/beta/images/gallery/thumbs"
    for i in $dir/*.jpg
    do

        echo "Processing image $i ..."
	/opt/bitnami/common/bin/convert -thumbnail 500 $i $thumbs/$i
   done

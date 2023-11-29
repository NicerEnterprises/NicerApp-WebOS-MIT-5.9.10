#!/bin/bash 
root="/var/www"

function today() {
	today="$1.`date +%F--%H%M%S`--$2"
}

function archive() {
	today $2 $3
	echo "mv $2 $today"
	#mv $1 $2
}

archive $root/$1 $root/$2 $3
echo cp -r $root/$1 $root/$2


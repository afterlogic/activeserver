#!/bin/bash

DIR=$(cd `dirname $0` && pwd)
TASK="pack"

POSITIONAL=()
while [[ $# -gt 0 ]]
do
key="$1"

case $key in
    -t|--task)
    TASK="$2"
    shift # past argument
    shift # past value
    ;;
    *)    # unknown option
    POSITIONAL+=("$1") # save it in an array for later
    shift # past argument
    ;;
esac
done
set -- "${POSITIONAL[@]}" # restore positional parameters

echo TASK: "$TASK"

if [ "$TASK" = "pack" ]; then
	PRODUCT_VERSION=`cat VERSION`
	
	echo CREATE ZIP FILE: "${PRODUCT_NAME}_${PRODUCT_VERSION}.zip"
	
	zip -rq ${PRODUCT_NAME}_${PRODUCT_VERSION}.zip * -x .git .github .gitignore builder.sh
fi

if [ "$TASK" = "upload" ]; then
	cd ${DIR}
	
	PRODUCT_VERSION=`cat VERSION`
	
	echo UPLOAD ZIP FILE: "${PRODUCT_NAME}_${PRODUCT_VERSION}.zip"
	
	curl -v --ftp-create-dirs --retry 6 -T ${PRODUCT_NAME}_${PRODUCT_VERSION}.zip -u ${FTP_USER}:${FTP_PASSWORD} ${FTP_SERVER_URL}
fi

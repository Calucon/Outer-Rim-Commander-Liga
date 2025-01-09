#!/bin/bash

pushd /mnt/md0/www/commander_liga.calucon.de

LAST_MODIFIED_FILE=".last_modified"
CSV_FILE="players.csv"
DATE_FORMAT="+%Y-%d-%mT%H:%M:%S"
ARCHIVE_DIR="archive/"

touch $LAST_MODIFIED_FILE
mkdir -p $ARCHIVE_DIR

if [ ! -f $CSV_FILE ]; then
    exit 1
fi

LAST_MODIFIED=$(cat "$LAST_MODIFIED_FILE")
MODIFIED_DATE=$(date -r "$CSV_FILE" "$DATE_FORMAT")

# write last modified to file if not exists yet
#if [ -z "$LAST_MODIFIED" ]; then
#    LAST_MODIFIED="$MODIFIED_DATE"
#    echo "$LAST_MODIFIED" >$LAST_MODIFIED_FILE
#fi

# archive current file version
if [ "$LAST_MODIFIED" != "$MODIFIED_DATE" ]; then
    cp "$CSV_FILE" "archive/players_${MODIFIED_DATE}.csv"
    echo "$MODIFIED_DATE" >$LAST_MODIFIED_FILE
    echo "Modification detected, creating Archive!"
fi

curl https://uptime.betterstack.com/api/v1/heartbeat/fLyd7LHX7737MVU1STWMMuak

popd

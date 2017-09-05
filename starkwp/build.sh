#!/bin/bash

if [ -e "./dist/starkwp.zip" ] 
then
    sudo mv ./dist/starkwp.zip "./dist/old/starkwp-$(date '+%Y%m%d%H%M').zip"
fi

pushd ./src
sudo zip -r ../dist/starkwp.zip *
popd

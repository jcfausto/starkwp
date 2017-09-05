#!/bin/bash

echo "### Deploying from ./dist/starkwp.zip to ../wordpress/wp-content/themes/starkwp/"
sudo unzip -o ./dist/starkwp.zip -d ../wp-content/themes/starkwp/

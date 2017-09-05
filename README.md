# starkwp

A new wordpress theme for my personal website

A theme based on Twenty Sixteen theme with my own custom changes.

I'm using docker as a platform for this project, so if you'd like to use it, please follow the instructions below. 

## Setting up the development environment

1. Make sure you have docker installed on your system (I'm using Ubuntu for this project). 
2. Make sure you have python installed on your system. 
3. Make sure your local user is member of the www-data group. 
   $ cat /etc/group | www-data (you should see something like this: www-data:x:33:john)
4. Git clone the project.
5. $ ./start.sh (Will create some dirs and set up the docker image and container for you) 

## Development

Edit the files under /starkwp/src

## Building and Deploying your changes

To build the zip file containing the theme files inside the ./starkwp/dist directory:
```
$ ./starkwp/build.sh
```

To install the new version of the theme into your wordpress container:
```
$ ./starkwp/deploy.sh
```

To build and deploy at the same time:
```
 $ ./starkwp/bd.sh
```

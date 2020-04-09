# Apache Struts - Attacker Container
## How to Build the Image from Dockerfile
## Phase1 - Requirements
Linux Machine

### Installing Docker
curl -fsSL https://get.docker.com | sh

## Phase2 - Building the Image

### Cloning GitHub Repo
git clone https://github.com/andrefernandes86/demo-dvwa.git

### Building the Image
docker image build -t demo-dvwa .

## Phase3 - Starting the Container
### Starting the Container
docker run --rm --name demo-dvwa -d -p 81:80 demo-dvwa

### Executing Commands Inside the Attacker Container
docker exec -it demo-dvwa bash

## Phase4 - Attacking..
Commands to be executed from the demo-dvwa web console

### Instructions
http://demo-dvwa:81
username: administrator
password: password

## Command Injection Menu
Use the "Ping" field to execute the attacks described in:
https://raw.githubusercontent.com/andrefernandes86/demo-dvwa/master/commands.txt


## How to Build the Image from DockerHub
### References
docker run -d --rm -it -p 81:80 demo-apachestruts-attacker
username: administrator
password: password
https://github.com/andrefernandes86/demo-dvwa
https://raw.githubusercontent.com/andrefernandes86/demo-dvwa/master/commands.txt

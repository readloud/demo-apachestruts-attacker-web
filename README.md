# Apache Struts - Attacker Container | [andrefernandes86](https://github.com/andrefernandes86)
## How to Build the Image from Dockerfile
## Phase1 - Requirements
Linux Machine

### Installing Docker
curl -fsSL https://get.docker.com | sh

## Phase2 - Building the Image

### Cloning GitHub Repo
git clone https://github.com/andrefernandes86/demo-apachestruts-attacker-web.git

### Building the Image
docker image build -t demo-apachestruts-attacker-web .

## Phase3 - Starting the Container
### Starting the Container
docker run -d --rm --name demo-apachestruts-attacker-web -d -p 81:80 demo-apachestruts-attacker-web

### Executing Commands Inside the Attacker Container
docker exec -it demo-apachestruts-attacker-web bash

## Phase4 - Attacking..
Commands to be executed from the "demo-apachestruts-attacker-web" web console

### Instructions
http://demo-apachestruts-attacker-web:81
username: administrator
password: password

## Command Injection Menu
Use the "Ping" field to execute the attacks described in commands.txt file

## How to Build the Image from DockerHub
### References
- docker run -d --rm -it -p 81:80 andrefernandes86/demo-apachestruts-attacker-web
- username: administrator
- password: password
- https://github.com/andrefernandes86/demo-apachestruts-attacker-web.git

.

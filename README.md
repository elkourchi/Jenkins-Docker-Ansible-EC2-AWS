# Jenkins-Docker-Ansible-EC2-AWS

### Step 1 : Create EC2 instence

- Security Groups Rules:
    - SSH
    - HTTP: 80
    - Custom rule: 8080
    - Custom rule:5000

- Create Key_Pair
    Download the .pem file and change the permissions "sudo chmod 400 file.pem"

- Connect to the created EC2 instence
    sudo ssh -i file.pem ubuntu@PUBLIC_IPv4_DNS_NAME

### Step 2 : Install Jenkins
    sudo apt update -y

    sudo apt-get install openjdk-8-jdk -y 

    java -version

    readlink -f $(which java)

    JAVA_HOME=/usr/lib/jvm/java-8-openjdk-amd64/jre/bin/java

    echo $JAVA_HOME

    export JAVA_HOME

    sudo apt install wget 

    wget -q -O - https://pkg.jenkins.io/debian-stable/jenkins.io.key | sudo apt-key add -

    sudo sh -c 'echo deb https://pkg.jenkins.io/debian-stable binary/ > \
    /etc/apt/sources.list.d/jenkins.list'

    sudo apt update -y 

    sudo apt-get install jenkins -y
  
  - Access Jenkins through browser:

        PUBLIC_IPv4_ADDRESS:8080

        sudo cat <jenkins_default_password_path>

        Fill in user details & Install suggested plugins

### Step 3 : Create a job
     Add Repository Link in Source Code Management

     Make sure the master branch name is the same as in the repository */main  or */master

     Add build setup then Execute Shell 

        docker build -t image-name .

        docker run -d --name container-name -p 5000:80 image-name

        (this step valid once, we can't reuse it . and by using ansible we make this job reusable )

### Step 4 : Install Ansible

    sudo apt update

    sudo apt install ansible -y

    
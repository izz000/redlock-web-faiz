pipeline {
    agent any
    environment {
        PATH = "${PATH}:/usr/local/bin"
    }   
    stages {
        stage("Build-web"){
            steps{
                sh '''
                    docker build -t redlock-web-2.0 .
                '''
            }
        }
        stage("run-web"){
            steps{
                sh '''
                    docker run -d -p 7077:80 --name redlock-web-2.0 
                '''
            }
        }
    }
}

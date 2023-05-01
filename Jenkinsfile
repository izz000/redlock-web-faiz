pipeline
{
    agent any
    environment 
    {
        DOCKER_COMPOSE_PATH = "/usr/local/bin"
    }
    stages
    {
        stage('Build-docker')
        {
            steps
            {
                sh "docker build -t redlock-web-2.0 ."
            }
    }
}
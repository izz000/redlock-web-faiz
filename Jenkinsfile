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
                sh "${DOCKER_COMPOSE_PATH} up --build"
            }
        }
        stage('Run Test')
        {
            steps
            {
                sh 'curl http://localhost:7077'
            }
        }
    }
    post 
    {
        always
        {
            sh "${DOCKER_COMPOSE_PATH} down"
        }
    }
}
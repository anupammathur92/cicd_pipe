pipeline {
     agent any
     stages {
        stage("Build") {
            steps {
                sh "sudo composer update"
            }
        }
        stage("Deploy") {
            steps {
                sh "sudo chmod -R 777 /var/www/html/"
                sh "sudo cp -r /var/lib/jenkins/workspace/cicd_pipe /var/www/html/"
                sh "sudo chmod -R 777 /var/www/html/cicd_pipe/"
            }
        }
    }
}
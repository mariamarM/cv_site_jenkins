pipeline {
    agent any

    stages {

        stage('Descargar código') {
            steps {
                echo 'Descargando repositorio...'
                checkout scm
            }
        }

        stage('Validar PHP') {
            steps {
                echo 'Validación omitida'
            }
        }

        stage('Desplegar en Apache') {
            steps {
                sh '''
                echo "Deploy OK"

                mkdir -p /var/jenkins_home/deploy

                rm -rf /var/jenkins_home/deploy/*

                cp -r cv_site/* /var/jenkins_home/deploy/
                '''
            }
        }
    }
}
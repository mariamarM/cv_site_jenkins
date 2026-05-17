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
                echo 'Saltando validación PHP (php no instalado en contenedor)'
            }
        }

        stage('Desplegar en Apache') {
            steps {
                echo 'Desplegando proyecto...'

                sh '''
                mkdir -p /var/jenkins_home/deploy

                cp -r * /var/jenkins_home/deploy/
                '''
            }
        }
    }
}
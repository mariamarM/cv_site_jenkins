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
                echo "Deploy Apache"

                rm -rf /var/www/html/cv_site/*

                cp -r cv_site/* /var/www/html/cv_site/
                '''
            }
        }
    }
}
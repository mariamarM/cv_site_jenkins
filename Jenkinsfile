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
                echo 'Desplegando proyecto...'

                sh '''
                rm -rf /var/www/html/cv_site
                mkdir -p /var/www/html/cv_site
                cp -r * /var/www/html/cv_site/
                '''
            }
        }
    }
}
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

                mkdir -p /var/www/html/cv_site

                rm -rf /var/www/html/cv_site/*

                cp index.php /var/www/html/cv_site/
                '''
            }
        }
    }
}
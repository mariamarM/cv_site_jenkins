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
        sudo rm -rf /var/www/html/cv_site
        sudo mkdir -p /var/www/html/cv_site
        sudo cp -r * /var/www/html/cv_site/
        sudo chown -R www-data:www-data /var/www/html/cv_site
        '''
    }
}
    }
}
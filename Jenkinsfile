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
        echo "Deploy directo al workspace"

        rm -rf $WORKSPACE/cv_site
        mkdir -p $WORKSPACE/cv_site
        cp -r * $WORKSPACE/cv_site

        cp -r $WORKSPACE/cv_site /var/www/html/
        '''
    }
}
    }
}
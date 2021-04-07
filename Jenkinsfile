node {
    stage('preparation') {
        // Checkout the master branch of the Laravel framework repository
        git branch: 'master', url: 'https://github.com/NALLAKANNU/eNoah-News.git'
    }
    stages {
        stage('Build') {
            steps {
                echo 'Building..'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing..'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}


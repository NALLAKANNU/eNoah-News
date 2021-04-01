node {
    stage('preparation') {
        // Checkout the master branch of the Laravel framework repository
        git branch: 'master', url: 'https://github.com/NALLAKANNU/eNoah-News.git'
    }
    stage("phpunit") {
        // Run PHPUnit
        sh 'vendor/bin/phpunit'
    }
}

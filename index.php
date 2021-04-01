<html>
 <head>
  <title>eNoah News</title>
 </head>
 <body>
 <?php echo '<p>DEEPACK AND NALLAKANNU IS GOOD FRIENDS</p>
 </body>
</html>

node {
    stage("composer_install") {
        // Run `composer update` as a shell script
        sh 'composer install'
    }
    stage("phpunit") {
        // Run PHPUnit
        sh 'vendor/bin/phpunit'
    }
}

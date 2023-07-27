pipeline {
    agent any
    
    stages {
        stage('Checkout') {
            steps {
                // Check out the repository from GitHub
                git 'https://github.com/GurneetKaur10/spotifyclone.git'
            }
        }
        
        stage('Build') {
            steps {
                // Execute your build commands here
                sh 'mvn clean install' // Or any build command specific to your project
            }
        }
        
        stage('Test') {
            steps {
                // Execute your test commands here
                sh 'mvn test' // Or any test command specific to your project
            }
        }
        
        // Add more stages as needed (e.g., deploy, publish, etc.)
    }
}

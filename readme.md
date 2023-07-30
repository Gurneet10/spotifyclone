To  run this project on docker, follow the steps:
>> Firstly install docker desktop on your system
>> After installing it, download the code zip file
>> Extract the file and open it in Visual Studio Code or any other software
>> Open the Terminal and run "docker-compose up". It will create an image on docker engine.
>> Then go to browser and write "localhost", it will run the project spotifyclone without installing any server like xampp


To test this project on Jenkins, follow:
>> firstly clone the repository.
>> Run PowerShell as an administrator and run the command "docker run -p 8080:8080 -p 5000:5000 -d -v jenkins_home:/var/ jenkins_home jenkins/jenkins:lts"
>> the above command will set up jenkins and you can browse "localhost:8080" to run jenkins
>> Then just select new item and write name of your project and select "pipeline" below
>> On next click just scroll down to the "script" and select "SCM" in the dropdown. Just put github's url there and write the branch name .Click ok
>> then on left menu click "Build Now" 

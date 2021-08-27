## After the project comes back
- run command

       docker-compose up
- change path using command
   
       cd app/public
- Install composer libraries      
       
       composer dump-autoload
       composer require twbs/bootstrap:4.0.0

##  Connect mysql   
- Hostname => 127.0.0.1
- Username => sampleUser
- Port => 3306
- Password=> root

## Run project
- After successful connection, we access the link path
- **[we access the link](http://127.0.0.1/public)**
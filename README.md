 
###lamp-server

=======

+++++++++++++++

step1: create hosts file
    -> vi hosts
            [testserver]
                localhost
                    slave ansible_user=192.168.36.2
 
 step2: create lamp.yml
     -> call roles 
         - mariadb
         - apache2
 
 step3: craete role mariadb
        roles
	|
	|-----<mariadb>
	|        |
	         | ---->tasks
                 |       |-->  main.yml
	         |
		 |----->  files
                            |---> <db.php>
                             |---> <dump.sql>
         
                
   step4: create role apache2
        roles
	|
        |---->apache2
                |
		|----> tasks
                |     |--> main.yml
                |----> files
                |     |---> index.php
	 
    
    step5: run playbook
            with command----> ansible-playbook lamp.yml

lamp-server
===
+++++++++++++++++++++++++++++++++


*Installing lamp-server with Ansible playbooks and roles*

**step1:  create hosts file**

        -->vi hosts  
        [testserver]  
        localhost  
        slave ansible_user=192.168.36.2
        
        
**step2:   create role mariadb**  

        roles/
            |  
            |---  >mariadb /   
                     |---tasks/  
                            |-- main.yml  
            |
            |--- files  
                      |--<db.php>  
                      |--<dump.sql>
                      
**step3:    create role apache2**

        roles/  
            |  
            |---  >apache2  
                      |--- tasks  
                              |-- main.yml  
            |  
            |--- files  
                    |  
                    |--<index.php>
        
        
**step4:   create lamp.yml file (playbook)**

        * call roles   
              - mariadb  
              - apahe2
    

**step5:    run playbook**  
- with command
        `ansible-playbook lamp.yml`

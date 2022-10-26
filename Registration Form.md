# <u>Registration Form</u>

This project consists of 3 parts : 

- Database creation using phpMyadmin.

- Login.

- Registration.

  #### Note : you can create your own database  by following the next steps 

  1. type localhost in your browser's search tab .

  2. open phpMyadmin .

  3. enter create database table .

  4. enter the number of columns you need in your table .

  5. you can edit the properties of each column . 

     for example : you can make an id column autoincremented.

     you can also make date column to writedown the date of your data insertions into the database.

     

  ### 1-begin.html &  begin.css

     These two files for only the beginning of the form to choose if you want to login or Register.

  ### 2- login.html & login.css & login.php

    login.html & login.css : 

  ​		1-you will be asked to enter the email and password to login and it will take the data 		from you as a user and pass it to the php file .

  ​		2-you must enter the required data . if you don't fill any of them , an alert will be shown 		to ask you to fill the info .

    login.php :

  - The connection between the database and the html is written in this part of code . 
  - It takes the email and password it search for them in the database. if the email & password exit , it will display welcome : "your input e-mail". if any of them is not correct , it will display "your e-mail or password is incorrect" .

  

  ### 3- Reg.html & reg.css & reg.php

  ​	  reg.html & reg.css : 

  ​		1- You will be asked to enter the email , username , password ,confirm tha password to 		register sucessfully and it will take the data from you as a user and pass it to the php 		file .

  ​		2- You must enter the required data . if you don't fill any of them , an alert will be shown 		to ask you to fill the info .

  ​		3- The password must be identical with the confirm password .

  ​		4- The e-mail should have @ and . and some letters must be existed between them to 		be in a valid format .

    reg.php :

  - The connection between the database and the html is written in this part of code . 
  - It takes the passed data from the html and insert them into the database. if the email already exists before , it will display "This e-mail already exists". if all data is in correct format and the e-mail is new ,   it will display "Welcome (username)" .

  
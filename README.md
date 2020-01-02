# Rename-DataBase-Name

PHP Code to Rename Database as now Direct Database Rename is Not permissible. 

## Getting Started

Index file is Written in Core PHP For Styling Used Basic Bootdtrap and Calls sh Script to perform Task with dynamic Parameters.

### Prerequisites

You should have Username and password for MYSQL database and Has to have suffficient Privileges to run command and make sure that script is Executable , [I used 755 on my amazon Ec2]

### Installing

Copy file containt and sh script to same directory and execute file on Browser , make sure that Database is connected.

Setup in Script File

```
mysql connection :

mysql -h [host] -u [username] -p[password]

Note: there is no space after -p , so if your password is dummypass then write like this -pdummypass.
```

And repeat

```
check coonection and run on browser.
```

## Running the tests

I have not done any much condition check on this. Feel free to submit pull request for Better version.


## License

This project is licensed under the MIT License - see the Licence file for details

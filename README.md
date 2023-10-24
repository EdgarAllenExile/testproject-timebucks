# PHP Test Project 2
## Introduction
This was an additional test project that I completed, as I wanted to further imrpove my (Cake)PHP abilities. 

This project is also a one page application with with no login/signup. If you have any questions please do not hesitate to send me an email.

## Tech Stack
Backend: CakePHP 5.0
Frontend: Jquery Datatables & Bootstrap
Database: MySQL

## Features
1. Reads data from the JSON file provided and inserts this into a database table. Each field returned in the json file is used as a db column to store the value.

2. Created a web page that pulls in this data into a display table with the following columns:
	NetworkOfferId, LongName, Categories, Countries, Bid, Device Type, Operating System, Action

3. Action column within each row of the table houses three buttons, which have the following functions: 
    A) "Load New Data" -> On click it fires a background command to load data from data.json file, using the INSERT OR UPDATE MySQLi command. If the table already has data then it will update. If this is novel data it will insert.
    B) "Generate Hash" -> On click it fires a background command to generate a hash and update the the "Hash" column in the database table using MD5. The MD5 key is a combination of following columns: Instructins+LongName+Categories+Countries
    C) "Display Data" -> On click it should query the database and display the data on page order by Bid DESC. It ensures some additional rules are followed. These are:
    	Categories display full names and not the provided numeric constants, as per their the information provided in Categories.php
    	Countries display full name and not the provided country code. 

4. Created click tracking functionality. The Action Column "View Link" tag is mapped to the record's TrackingUrl. Every time the anchor is clicked an INSERT OR UPDATE command is sent to the click tracking table, with NetworkOfferId, ClickCount. If the record already exists for that "NetworkOfferId" then the ClickCount is incremented by 1 each time.

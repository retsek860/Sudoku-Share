# Sudoku-Share
A website where you can solve and share your sudokus! (Made as a learning project)

Connecting to your MySQL database:

In order for you to run this website on your own machine you must connected it to a MySQL database.
The only file you need to change is /indludes/dbh.inc.php where you will need to update the credentials for your database.
Then, in the database you have connected to run the following command:

CREATE TABLE users (
  uid int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  username TINYTEXT,
  passHash TINYTEXT
  );

**A Web Location Interface Design**

You must build a web application with server side scripting on a full scale webserver. You must design a live website for recording locations and finding people.

**Requirements**

Write a web application for the student location service. In addition to storing the current location of each student, it must also keep track of each student’s previous locations. Your web application must implement the following tasks:
1) A database storing locations and details of students.
a. For each student, a first name and surname must be uniquely stored in the SQL database.
b. For each location, the database must store the new location and the date and time at which it was recorded. Old locations and timestamps should not be removed from the database.
2) In the root folder of your RDE website, there must be a page called ‘location.php’ OR ‘location.aspx’ which must accept GET and POST requests. GET requests to this web page must return the most recent location of the student in question. It must not return HTML as a result of a GET or POST request. POST requests to this page URL must allow a student’s location to be updated. On receiving a valid POST, your website must update the database record for that student. If the student does not exist in the database, they must be added. Note that PUT requests need not be supported.
3) In the root folder of your RDE website, there must be a single index page called ‘index.php’ or ‘default.aspx’ from which the following human-readable pages (which you must also create) can be accessed:
A page which
a. shows the current locations of all student
b. allows a user to change the location of a student
c. allows a user to edit the l details of a student
d. allows a user to choose a student and list their locations for the last 24 hours
e. allows the user to select from a list of all locations used by people and show a list of the people currently in the selected location
4) All data entry in your web pages must be validated to prevent the user entering invalid values.

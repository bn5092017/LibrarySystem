#System Design
##User interface design
All the pages have the same basic layout to help users to easily navigate around the website.  The header area of the pages will contain an image or text at the top and a horizontal navigation bar underneath this.  The bottom of the page will contain information in the footer.  The main area of the page varies between the pages.
###Home page
![wireframe diagram - home page](images/homePage.jpg)
Basic home page with popular items or staff suggestions displayed to give customers ideas of books to borrow.
###About page
![wireframe diagram - about page](images/about.jpg)
The about page will have text talking about services available on the website.
###Login page
![wireframe diagram - login page](images/loginPage.jpg)
Login page with textboxes for user input of username and password and a login (submit) button.
###Login page for staff
![wireframe diagram - Staff login page](images/loginPageStaff.jpg)
Login page with textboxes as above and a warning banner to alert non-staff users that login is restricted.
###Search page
![wireframe diagram - search page](images/search.jpg)
Search page with textboxes for user input of title, author or keyword.  These will be independent of each other, that is one or more can be left blank.
###List of search results page
![wireframe diagram - search results page](images/searchResults.jpg)
This page will display a list of results from a search.
###One book page
![wireframe diagram - book page](images/OneBook.jpg)
This page is used for displaying the details of an individual book.
###List of loans page for a customer
![wireframe diagram - MyLoans page](images/MyLoans.jpg)
This page will be used by customers to view and renew items that they have on loan.
###Create an entry in the book table
![wireframe diagram - CRUD book page](images/crudBook.jpg)
A staff area page allowing a staff member to create, update or delete records in the book table.
###Create an entry in the user table
![wireframe diagram - CRUD user page](images/crudUser.jpg)
A staff area page allowing a staff member to create, update or delete records in the user table.
##Functional Design (with class diagrams and interaction diagrams)
##Data design
The data for the library system will be held in a database.  The basic structure of the database is built on three tables.  These are a table of users, a table of books and a table of loans.
###User table
The user table contains details of staff and customers.  Both are in the same table as there are only a few entries in this test system.  The id is auto-incremented in this table, however in a real-world situation the id would be a staff member number or membership number for customers.  
| id     | username  | firstname | lastname | address | email | password | role  |
| :----- | :-------- | :-------- | :------- | :------ | :---- | :------- | :---  |
| 1      | fred      | Fred      | Smith    | address | email | password | staff |
###Book table
The book table contains details of the books in the library.  The id is the ISBN, which is a unique identifier for a particular publication of a work by an author (Coyle, 2015).  The date is the year of publication for this particular publication.  Books have been identified by various catagories.  The description is a short piece of text giving a basic idea of what the book is about.
| isbn      | title      | author      | publisher        | date | catagory | description |
| :-------- | :--------- | :---------- | :--------------- | :--- | :------- | :---------- |
| 151008116 | Life of Pi | Yann Martel | Houghton Mifflin | 2002 | fiction  | Sample text |
###Loans table
The loans table is a table of loans with an auto-incremented loanId.  Each loan has a customer id and a book id, the date the book was taken out and the date it will be due back.
| loanId | userId | bookId    | dateOut    | dateDueBack |
| :----- | :----- | :-------- | :--------- | :---------- |
| 1      | 3      | 857381113 | 2017-03-22 | 2017-04-20  |

#System Analysis
The library system is a system to manage data held by a library on users(customers and staff), books held by the library, and the books that are out on loan to individual users.  This system uses a web based, interactive user-interface to search records, CRUD records, and supply information about the services provided by the system.  It will create links between the data held in order to display information on the connections between the entities involved.  
##Functional requirements
###Information display
The most basic function of the system is simply to display information.  This function is available to all users, not restricted to registered users such as customers and staff.  This information is held on the about page and the home page.
###Search items
The user can also interrogate the books table of the database using a search function.  This function is available to all users.
![Use case diagram - search](images/useCaseSearch.jpg)
This diagram shows the steps involved in searching the book table.  First the user clicks on the search button.  When the search form is displayed, the user then enters an author, title or keyword(s).  This creates a query to the database which will return a list of matches or a message if no matches are found.
###Login function
Registered users can login to the system to gain access to information on the books they have on loan at the moment and to renew any of these items.
![Use case diagram - login](images/useCaseLogin.jpg)
A customer logs in and is redirected to their MyLoans page which is the customer home page.
![Activity diagram - renew book](images/activityRenewBook.jpg)
When a customer clicks on login and enters their username and password, the system checks if there is a match in the database and displays the MyLoans page containing the items they have on loan.  If no match is found, an error message is displayed.  The user home page has the option for the customer to renew any of the items out on loan.  
![Sequence diagram - renew book](images/sequenceRenewItem.jpg)
The various levels of the system are illustrated in the sequence diagram for logging in and renewing an item.  The login function processes the user details and then redirects to the MyLoans page where a function performs a check on the database for any loans that the customer has out.  A function then updates the database if the customer clicks on renew item.
###CRUD items
Staff members can CRUD books and users in the database.  A staff member must be logged in to access these functions.  The system will check if the username and password correspond to a user in the database with the staff role when the staff member logs in.  The system will then display a page allowing the user to input details to the database.
![Use case diagram - CRUD](images/useCaseCRUD.jpg)
When a staff member clicks on login and enters their username and password, the system checks if there is a match in the database and if they have staff level authorisation.  If the data does not match, an error message is displayed.  Otherwise the user is redirected to a page displaying options for staff members.  This will include links to update the databases for users, books and loans and a link to their MyLoans page.  If the staff member clicks on create a new book, an update book form is displayed, allowing the user to update the database with the new item.
![Activity diagram - CRUD](images/activityCRUDBook.jpg)
Creating, updating and deleting the book will involve the same form with different action buttons to complete the different actions.  When the details are entered in the form and the action is selected, the system will update the database or display an error message if the action cannot be completed.
![Sequence diagram - CRUD book](images/sequenceCRUDItem.jpg)
The login function processes the user details and then redirects the user to the CRUD option form where the user can enter updated book details.  A function then checks the database for the book and updates the details if it exists in the database or displays an error message if the action cannot be completed.
##Data requirements
The library system will contain data on the user and the library holdings.  This data will be held in MySQL database tables.  The third table in the database, loan, links user to book.  This relationship and the necessary columns of all three tables is shown in this entity-relationship diagram.
![E-R diagram - user, loan, book](images/UserLoanBookER.jpg)
The relationship descibed here is that the user takes out a loan which contains a book.  This also lists all the properties of each of the entities.
###Class diagrams
Class diagrams are similar to entity-relationship diagrams as they show the relationships between entities that will be defined as classes in the code.  Though they show similar information, they are designed to represent the class code structure.  They usually contain the properties and the methods of the class, and so are particularly useful when deciding what classes are necessary and what responsibilities each class will have (Booch et al, 1998).
![Class diagram - loan](images/classLoan.jpg)
This diagram shows the relationship between User, Book and Loan classes.  It shows customer as a subclass of User.  It also shows that each loan is related to one customer, but a customer can have many loans.  In this design, to simplify the relationships, each loan object is associated with only one book object.  In this diagram, as loan is the focus of the diagram, both the properties and the methods have been described.  The other classes have only their properties described.
![Class diagram - CRUD](images/classCRUD.jpg)
This diagram shows the relationship between User, Book and BookContoller.  It shows StaffUser as a subclass of User.  The StaffUser uses BookContoller which uses Book in order to update the database table of books with the create, update and delete methods.
##Constraints and assumptions
In order to create a working model of the system it is necessary to simplify the relationships and data held.  A real world library system will have more detailed information, such as overdue books and fines due.  The user data has been kept to one table, however it may be more appropriate to hold this information in two separate tables, one for staff members and one for customers.  Assumptions have been made on the type of data held on library items and the users of the system, based on information collected from the librariesireland website and the book FRBR.

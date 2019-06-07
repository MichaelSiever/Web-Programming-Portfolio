# Web-Programming-Portfolio
Michael Siever's Web Programming Portfolio

Contains all of my work done for web programming classes and other odd jobs

The first class I took at Austin Community College (ACC) in Fall 2018 was ITSE 1311 - Beginning Web Programming with 
Professor Alexander Katrompas, MSCS. This course focused on the introduction to HTML, CSS, JavaScript with some jQuery 
and Bootstrap thrown in.

The second class I took at ACC in Spring 2019 was ITSE 2302 - Intermediate Web Programming with Dr. Rudy L. Martinez, Ph. D.
This course continued with HTML, CSS, and JavaScript, and introduced PHP, MySQL, XML, and AJAX.

Couple of things to note:

ITSE 1311
1. Assignments 4 and 5 are exactly the same. I was assigned a Halloween-themed multipage website for Assignment 4, and 
Assignment 5 was doing the same exact website, but making it mobile first, so I killed two birds with one stone, and made 
Assignment 4 mobile first from the get-go.
2. Various copyrighted images show up in Assignment 4/5. No citations are provided because the professor did not require it.
This is the only instance in all of my portfolio that uses copyrighted images. All other images are provided by myself or 
were obtained from PixaBay.
3. Assignments 3-9 and the Final Project use external CSS and JavaScript (JS) files for the most part. Professor Katrompas 
says this is generally considered the best practice, and I carried this practice over to the next class, even though for the 
most part, external files were not required by Dr. Martinez unless explicitly stated in the instructions.

ITSE 2302
1. Assignments 5-12 are PHP files, which means you will need to use LAMP, MAMP, WAMP, or XAMPP (which is what I used) to 
view them in your browser window properly.
2. Assignments 9, 10, and 12 use PHP to access a MySQL database. The login credentials for each assignment are stored in 
separate files called credentials.php. I did this instead of hard-coding the credentials into the index.php files for two 
reasons. First, for security. If some person, say a disgruntled employee that just found out they were being laid off or 
somebody going in for a job interview and wanted some kind of leverage over the company/startup, were walking by your cubicle 
with their phone out as you were working on your index.php file with the credentials showing up in on your screen, they could 
take a picture of your screen with their phone and would have everything they need to do an SQL injection attack/wipe the server. 
In a small startup environment, this could single-handedly kill the business. Your database login credentials should almost never 
be on your screen. The second reason for using an external credentials file is efficiency/eliminating redundancy. In some of these
assignemnts, I was required to login 4-6 separate times, which meant hard-coding would have required re-writing out the credentials 
4-6 times in a single index.php file. As Professor Katrompas once told me, if you are writing the same lines of code multiple times
in the same file, you're doing it wrong. These credentials were 10 lines long, so writing them once in a separate file, and then 
writing 'include credentials.php;' on a single line each time I needed to use it in these assignments cut down the time needed to 
write the index.php files as well as significantly reducing the number of lines of code needed to complete the assignments. This 
also cut down the security risk of login credentials being on screen more than they needed to. This way, I would only see the login 
credentials whenever I a) was creating the credentials file for the first time and b) when I needed to change the credentials from 
Localhost mode for testing my code to Server mode for uploading the assignment to the server for grading.

That is all for now. I am currently reading on MEAN (MongoDB, Express, Angular, and Node) stacks and MERN (MongoDB, Express, React,
and Node) stacks.

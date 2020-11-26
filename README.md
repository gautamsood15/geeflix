GEEFLIX is a video streaming website designed for streaming Movies, TV series and more .... 

The video streaming website has a subscription model and uses PayPal payment gateway

It is made up of JS, PHP, and MySql to store all the data.

Xampp server is required to run the search engine

Schema for database for saving all the sites data is also included below.


List of external 3rd party CDN used --

1 Font-Awesome
2 Jquery


DB_NAME = geeflix

------------------------------------------------------------------------------------------------

TABLE_NAME = users

1   id Primary	    int(11)		    AUTO_INCREMENT	
2	firstName	    varchar(25)	
3	lastName	    varchar(25)	
4	username	    varchar(50)	
5	email	        varchar(100)	
6	password	    varchar(255)	
7	signUpDate	    datetime		current_timestamp()	
8	isSubscribed	tinyint(4)		



TABLE_NAME = videos


1 	id Primary 	    int(11) 	    AUTO_INCREMENT 	
2 	title 	        varchar(70) 	latin1_swedish_ci 	
3 	description 	varchar(1000) 	latin1_swedish_ci 	
4 	filePath 	    varchar(250) 	latin1_swedish_ci 	
5 	isMovie 	    tinyint(1) 		
6 	uploadDate 	    datetime 	
7 	releaseDate 	date 			
8 	views 	        int(11) 			
9 	duration 	    varchar(10)     latin1_swedish_ci 		
10 	season 	        int(11) 	
11 	episode 	    int(11) 		
12 	entityId	    int(11)         Index 


TABLE_NAME = entities


1 	id Primary 	    int(11) 	    AUTO_INCREMENT 	
2 	name 	        varchar(250) 	latin1_swedish_ci 		
3 	thumbnail 	    varchar(250) 	latin1_swedish_ci 		
4 	preview 	    varchar(250) 	latin1_swedish_ci 		
5 	categoryId 	    int(11) 		Index 


TABLE_NAME = categories


1 	id Primary 	    int(11) 		AUTO_INCREMENT 	
2 	name 	        varchar(50) 	latin1_swedish_ci 	



















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

TABLE_NAME = billingDetails


1	id Primary	    int(11)         AUTO_INCREMENT	<br>
2	agreementId	    varchar(200)					<br>
3	nextBillingDate	varchar(50)						<br>
4	token	        varchar(50)						<br>
5	username	    varchar(50)						<br>












TABLE_NAME = users

1   id Primary	    int(11)		    AUTO_INCREMENT		<br>
2	firstName	    varchar(25)							<br>
3	lastName	    varchar(25)							<br>
4	username	    varchar(50)							<br>
5	email	        varchar(100)						<br>
6	password	    varchar(255)						<br>
7	signUpDate	    datetime		current_timestamp()	<br>
8	isSubscribed	tinyint(4)							<br>



TABLE_NAME = videos


1 	id Primary 	    int(11) 	    AUTO_INCREMENT 		<br>
2 	title 	        varchar(70) 	latin1_swedish_ci 	<br>
3 	description 	varchar(1000) 	latin1_swedish_ci 	<br>
4 	filePath 	    varchar(250) 	latin1_swedish_ci 	<br>
5 	isMovie 	    tinyint(1) 							<br>
6 	uploadDate 	    datetime 							<br>
7 	releaseDate 	date 								<br>
8 	views 	        int(11) 							<br>
9 	duration 	    varchar(10)     latin1_swedish_ci 	<br>	
10 	season 	        int(11) 							<br>
11 	episode 	    int(11) 							<br>
12 	entityId	    int(11)         Index 				<br>


TABLE_NAME = entities


1 	id Primary 	    int(11) 	    AUTO_INCREMENT 		<br>
2 	name 	        varchar(250) 	latin1_swedish_ci 	<br>	
3 	thumbnail 	    varchar(250) 	latin1_swedish_ci 	<br>	
4 	preview 	    varchar(250) 	latin1_swedish_ci 	<br>	
5 	categoryId 	    int(11) 		Index 				<br>


TABLE_NAME = categories


1 	id Primary 	    int(11) 		AUTO_INCREMENT 		<br>
2 	name 	        varchar(50) 	latin1_swedish_ci 	<br>


TABLE_NAME = videoProgress


1	id Primary	    int(11)			AUTO_INCREMENT		<br>
2	username	    varchar(50)     utf8mb4_general_ci	<br>	
3	videoId	        int(11)								<br>
4	progress	    int(11)								<br>
5	finished	    tinyint(4)							<br>
6	dateModified	datetime        current_timestamp()	<br>		

















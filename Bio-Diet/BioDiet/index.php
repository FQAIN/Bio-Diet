<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <script src="application.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css"
              href="/BioDiet/style.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
        <link rel="shortcut icon" href="favicon.ico" >
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    </head>
    <body>
        <div id="mySidenav" class="sidenav"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><a href="account.html"><i class='fas'>&#xf2bd;</i></a> <a href="index.php">Home</a> <a href="login.html">Login</a> <a href="newProducts.html">Products</a> <a href="member">Sign Up</a> <a href="#">Feedbacks & Queries</a><a href="adminlogin.php">Admin</a></div>
        <div id="main"> <span style="font-size:30px;cursor:pointer" onclick="openNav()" id="mm">&#9776;</span></div>
        <div id="home"> <img src="Images/salad.jpg" class="salad" title="salad_pic" alt="salad_pic" /> <a href="index.php">
                <h1 id="high" class="bounce">Bio-Diet</h1>
            </a>
            <input type="text" id="search" name="search" placeholder="Search">
            <div id="headingTwo">
                <h3>Be Healthy Stay Healthy</h3>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
            </div>
        </div>
    <marquee><h1>Newest Products - 70% of on all Discounted Products</h1></marquee>
    <div class="coles"><img src="Images/strawberry.jpg" alt="watermelon">
        <h2>Strawberry</h2>
        <p>The fruit is widely appreciated for its characteristic aroma, bright red color, juicy texture, and sweetness.</p>
        <a href="newProducts.html" class="button" target="_blank">See Product</a> </div>
    <div class="coles"><img src="Images/cucumber.jpg" alt="watermelon">
        <h2>Capsicum</h2>
        <p>This species is the most common and extensively cultivated of the five domesticated capsicums.</p>
        <a href="newProducts.html" class="button" target="_blank">See Product</a> </div>
    <div class="coles"><img src="Images/capsicum.jpg" alt="watermelon">
        <h2>Cucumber</h2>
        <p>There are three main varieties of cucumber: slicing, pickling, and seedless.</p>
        <a href="newProducts.html" class="button" target="_blank">See Product</a> </div>
    <h1 id="catch">&#x2517;DESIGN IMPLEMENT AND SHAPE YOUR BODY BY CONSUMING RIGHT &#9499;</h1>
    <div id="example1">
        <h2>Hello World</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mattis auctor ex, quis placerat mi semper eget. Donec pharetra elementum sollicitudin. Nulla facilisi. Ut sit amet maximus quam. In sit amet sollicitudin velit. Cras sit amet cursus nisi. Maecenas varius ante eu neque molestie dictum. Cras tincidunt, eros quis commodo lobortis, leo tellus consequat eros, id interdum tortor est vitae lacus. Vivamus placerat id nibh quis malesuada. Morbi porttitor ut eros et semper. Nunc condimentum efficitur augue, id posuere nulla gravida sit amet.
            <br>
            <br>
            Phasellus consectetur, mi mollis posuere iaculis, arcu nibh aliquet nisi, sed tristique nisl purus maximus odio. Phasellus pretium eget ante eu maximus. Nunc in ultricies sem, eget ornare metus. Nulla placerat mattis lacus in dapibus. Suspendisse id ligula a metus auctor feugiat vitae vitae justo. Mauris ut blandit quam, in ornare odio. Praesent sodales, massa in congue malesuada, lorem ex feugiat ante, ac pretium sem mi at ex. Vestibulum commodo libero at leo feugiat molestie. Nunc placerat auctor erat in luctus.
            <br>
            <br>
            Phasellus consectetur, mi mollis posuere iaculis, arcu nibh aliquet nisi, sed tristique nisl purus maximus odio. Phasellus pretium eget ante eu maximus. Nunc in ultricies sem, eget ornare metus. Nulla placerat mattis lacus in dapibus. Suspendisse id ligula a metus auctor feugiat vitae vitae justo. Mauris ut blandit quam, in ornare odio. Praesent sodales, massa in congue malesuada, lorem ex feugiat ante, ac pretium sem mi at ex. Vestibulum commodo libero at leo feugiat molestie. Nunc placerat auctor erat in luctus.</p>
    </div>

    <div class="middle">
        <div class="counting-sec">
            <div class="inner-width">
                <div class="sectionOfColumns">
                    <i class="far fa-smile-wink"></i>
                    <div class="num">1246</div>
                    Customers
                </div>

                <div class="sectionOfColumns">
                    <i class="fas fa-briefcase"></i>
                    <div class="num">19</div>
                    Services
                </div>

                <div class="sectionOfColumns">
                    <i class="far fa-money-bill-alt"></i>
                    <div class="num">687</div>
                    Purchases
                </div>

                <div class="sectionOfColumns">
                    <i class="fas fa-seedling"></i>
                    <div class="num">187</div>
                    Products
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(".num").counterUp({delay: 10, time: 1000});
    </script>
    <div class="section">
        <h2>Where we are located</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2386.0000093067283!2d-6.215438384610327!3d53.271619479963476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486709a7799b018b%3A0xd93bdad686507aab!2sBio-industries%20LTD!5e0!3m2!1sen!2sie!4v1582458324518!5m2!1sen!2sie" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <div class="biography">
        <h2 class="meet">MEET THE TEAM</h2>
        <div class="profiling">
            <h3>Fyaz Ikram</h3>
            <img src="Images/aw.jpg" class="avatar" />
            <h4>Web Designer</h4>
            <p>Phasellus eget enim eu lectus faucibus vestibulum.</p>
        </div>
        <div class="profiling">
            <h3>Safaa Ikram</h3>
            <img src="Images/ac.jpg" class="avatar" />
            <h4>CEO & Founder</h4>
            <p>Phasellus eget enim eu lectus faucibus vestibulum.</p>
        </div>
        <div class="profiling">
            <h3>Alex Olsthoorn</h3>
            <img src="Images/ab.jpg" class="avatar" />
            <h4>Business Analyst</h4>
            <p>Phasellus eget enim eu lectus faucibus vestibulum.</p>
        </div>
    </div>
    <footer>
        <div id="footerImg"> 
            <p><strong>-------------------------------------------------------------------------------------------------------------------------------------------</strong></p>
            <h2>Connect with Us:</h2>
            <a href="http://www.facebook.com" target="_blank" ><img src="Images/facebook.png" class="socials" alt="facebook logo" height="70" width="70"/></a> 
            <a href="http://www.instagram.com" target="_blank" ><img src="Images/instagram.png" class="socials" alt="instagram logo" height="70" width="70"/></a> 
            <a href="http://www.twitter.com" target="_blank" ><img src="Images/twitter.png" class="socials" alt="twitter logo" height="70" width="70"/></a>
            <a href="http://www.youtube.com" target="_blank" ><img src="Images/youtube.png" class="socials" alt="twitter logo" height="70" width="70"/></a> </div>
            <p class="fyazcopyright">Fyaz Qadir Ahmed Ikram Copyright Protected 2019</p>
    </footer>
</body>
</html>


<!--

CREATE TABLE employeesTable(
employeeid    INT(11)     NOT NULL AUTO_INCREMENT,
firstname   VARCHAR(45) NOT NULL,
lastname    VARCHAR(45) NOT NULL,
email       VARCHAR(45) NOT NULL,
address     VARCHAR(45) NOT NULL,
phone       INT         NOT NULL,
birth       DATE        NOT NULL,
password    VARCHAR(255) NOT NULL,
PRIMARY KEY(employeeid)
);

CREATE TABLE productsTable(
productid      INT(11)      NOT NULL AUTO_INCREMENT,
name           VARCHAR(45)  NOT NULL,
description    VARCHAR(45)  NOT NULL,
qty            INT          NOT NULL,
price          DECIMAL(6,2) NOT NULL,
PRIMARY KEY(productid)
);

CREATE TABLE membersTable(
memberid    INT(11)     NOT NULL AUTO_INCREMENT,
firstname   VARCHAR(45) NOT NULL,
lastname    VARCHAR(45) NOT NULL,
email       VARCHAR(45) NOT NULL,
address     VARCHAR(45) NOT NULL,
phone       INT         NOT NULL,
birth       DATE        NOT NULL,
zipcode     VARCHAR(45) NOT NULL,
password    VARCHAR(255) NOT NULL,
PRIMARY KEY(memberid)
);

INSERT INTO employeesTable (firstname,lastname,email,address,phone,birth,password) VALUES
('Fyaz','Ikram','fyaz@biodiet.com','25 The Crescent',894389623,'2000-12-08','$2y$10$IB7WZs3BzIFkWn8hqcxu/eSfOw26TUQf9bymsOyMYESlWdUFDVHOi'),
('Adam','Moroney','adam@biodiet.com','15 the Oakleywood',877068212,'1999-03-21','$2y$10$XXExOXHkzK/i6DlxRGbw3OR9RATsOJ2Cf08DO99ROCpawstqbdxXK'),
('Alex','Olsthoorn','alex@biodiet.com','Rock Hse Ballymote',839183313,'1999-01-12','$2y$10$DxmpW2.bhT0iTavom0TwpeELOHnMYlsTnOU6IBJ1E6fhHYYQgwPaa'),
('Nathan','O Connor','nathan@biodiet.com','Templehill Carrigrohane',864874986,'2002-10-30','$2y$10$8.uXKGr1PXtKmdabpc7xkOGmgBzvyUfOFW5R/gN1/rVPfb1nruvse'),
('Pierce','Griffin','pierce@biodiet.com','7 Lavitts Quay',864272139,'1987-03-27','$2y$10$qfcBq/A2FxC9Ou2M8UwDeeYibVTAHJuvc28atuYo3ePCjABQta/h2'),
('Stephen','Barry','stephen@biodiet.com','15 Herbert Pl.',839142213,'1999-04-15','$2y$10$bUwWm4SuEhvFFwAtWYwBseeI5lTxR9jN0U/97yfIC4pGPFym8UZx2'),
('Joe','Moloney','joe@biodiet.com','Council Civic Offices',876357318,'1998-02-28','$2y$10$RAZoSZi.FB3Rgnjry6NU8O.w3Wm.Q8MiC6ED3huVJNkhO/Cs0RSYG'),
('Dylan','Parr','dylan@biodiet.com','Naul Lake Road',879670481,'1988-11-09','$2y$10$jA5QvtTjSuyzYxJMgCm8Aenb/IjLZOcEk1dqloYYKlIKIuLerJLzK'),
('Patrick','Moyles','patrick@biodiet.com','Lr Strand Kanturk',852616178,'2002-04-21','$2y$10$tUgU69M6my60.UgzRNLXmO0pj81WweYj0hwu8qudGnkwIWz/fWw6G'),
('Rayner','Lim','rayner@biodiet.com','75th Evergreen Farenhub',872346338,'2001-11-04','$2y$10$ZuBsKBt7DQL5DlPxH3o5t.w55i5qVQZTIg71kBBNMImoT4tUcZ2ve'),
('Luke','McEvoy','luke@biodiet.com','Harrignton Street 6th Avenue',838891209,'1998-03-03','$2y$10$XfrHaLU4pO3YINzFzvYYy.L7WxUSSMQFDTu5XD1s7GV1QJG2bak7G');

INSERT INTO productsTable (name,description,qty,price) VALUES
('Apples','Apples are red',203,72.49),
('Carrots','Carrots are orange',109,84.43),
('Tomatoes','Tomatoes are juicy',203,101.68),
('Oranges','Oranges have vitiman c',211,80.11),
('Prunes','Are sweet and tasty',160,116.05),
('Dates','Dates are good for iron',200,119.3),
('Rasberries','Type of sour berry',130,51.9),
('Watermelon','Good for milshakes',259,90.44),
('Peaches','Nice healthy snack',242,145.8),
('Olives','Good side for rolls',109,76.79),
('Pinapples','Nice in a pizza',205,52.65);


-->
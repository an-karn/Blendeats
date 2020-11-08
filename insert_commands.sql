-- ADDING DATA
--===============
INSERT INTO member(uid, Fname, Lname, Country, email)
VALUES
    (1, 'Ankit', 'Karn', 'Nepal','a@a.com'),
    (2, 'Alex', 'Costa', 'U.S.A','a@c.com'),
    (3, 'Shubhaman', 'Gill', 'India','s@g.com'),
    (4, 'Pat', 'Cummins', 'Australia','p@c.com'),
    (5, 'Sam', 'Curran', 'West Indies','s@c.com');
    
INSERT INTO member(uid, Fname, Lname, Country,email)
VALUES
    (6, 'Ishwor', 'Giri', 'Nepal','i@g.com'),
    (7, 'Aarshika', 'Singh', 'India','a@s.com'),
    (8, 'John','Doe', 'Nepal','j@d.com');
    
--Food
INSERT INTO food(fid, Title, Price, Image) VALUES  (01, 'Momo', 1.2, 'Momo-pic');
INSERT INTO food(fid, Title, Price, Image) VALUES  (02, 'Burger', 2.0, 'Burger-pic');
INSERT INTO food(fid, Title, Price, Image) VALUES  (03, 'Biryani', 1.5, 'Biryani-pic');
INSERT INTO food(fid, Title, Price, Image) VALUES  (04, 'Pizza', 3.0, 'Pizza-pic');
INSERT INTO food(fid, Title, Price, Image) VALUES  (05, 'Noodles', 2.0, 'Noodles-pic');
INSERT INTO food(fid, Title, Price, Image) VALUES  (06, 'Pasta', 20.0, 'pasta-pic');
INSERT INTO food(fid, Title, Price, Image) VALUES  (07, 'Scones', 29.0, 'scones-pic');

--Admin table
INSERT INTO admin(uid, permission_type) VALUES  (6, 'Read,Edit,Delete');
INSERT INTO admin(uid, permission_type) VALUES  (7, 'Read,Edit,Delete');
INSERT INTO admin(uid, permission_type) VALUES  (8, 'Read');

--Client table
INSERT INTO client(uid, preferred_payment) VALUES  (1, 'Cash');
INSERT INTO client(uid, preferred_payment) VALUES  (3, 'Cash');
INSERT INTO client(uid, preferred_payment) VALUES  (5, 'Cash');
INSERT INTO client(uid, preferred_payment) VALUES  (6, 'PayPal');

--Offers table
INSERT INTO offers(uid, fid, oid) VALUES (1,1,0987);
INSERT INTO offers(uid, fid, oid) VALUES (2,2,0988);
INSERT INTO offers(uid, fid, oid) VALUES (3,3,0989);
INSERT INTO offers(uid, fid, oid) VALUES (4,4,0990);
INSERT INTO offers(uid, fid, oid) VALUES (5,5,0991);
INSERT INTO offers(uid, fid, oid) VALUES (1,5,0995);
INSERT INTO offers(uid, fid, oid) VALUES (2,6,0998);


--Request table
INSERT INTO requests(uid, fid, rid)VALUES(1, 4, 0977);
INSERT INTO requests(uid, fid, rid)VALUES(2, 1, 0978);
INSERT INTO requests(uid, fid, rid)VALUES(3, 5, 0979);
INSERT INTO requests(uid, fid, rid)VALUES(4, 1, 0980);
INSERT INTO requests(uid, fid, rid)VALUES(5, 3, 0981);
INSERT INTO requests(uid, fid, rid)VALUES(5, 1, 0982);

--Packaged food
INSERT INTO packaged_food(fid, bestbefore)VALUES(2, 10/02/2020);
INSERT INTO packaged_food(fid, bestbefore)VALUES(4, 30/09/2021);
INSERT INTO packaged_food(fid, bestbefore)VALUES(6, 02/11/2021);
INSERT INTO packaged_food(fid, bestbefore)VALUES(7, 15/02/2022);

--Cooked food
INSERT INTO cooked_food(fid, ingredients)VALUES(1, 'Chicken, Vegetables, Wheat');
INSERT INTO cooked_food(fid, ingredients)VALUES(3, 'Chicken, Rice, Indian spices');
INSERT INTO cooked_food(fid, ingredients)VALUES(5, 'Noodles, Spices');

--Vegan
INSERT INTO vegan(fid)VALUES(4);
INSERT INTO vegan(fid)VALUES(5);

--Vegetarian
INSERT INTO vegetarian(fid)VALUES(2);
INSERT INTO vegetarian(fid)VALUES(7);

--non veg halal
INSERT INTO n_veg_halal(fid)VALUES(3);

--non veg not halal
INSERT INTO n_veg(fid)VALUES(6);
INSERT INTO n_veg(fid)VALUES(1);

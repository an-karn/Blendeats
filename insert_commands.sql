-- ADDING DATA
--===============
INSERT INTO member(uid, Fname, Lname, Country)
VALUES
    (1, 'Ankit', 'Karn', 'Nepal'),
    (2, 'Alex', 'Costa', 'U.S.A'),
    (3, 'Shubhaman', 'Gill', 'India'),
    (4, 'Pat', 'Cummins', 'Australia'),
    (5, 'Sam', 'Curran', 'West Indies');
    
INSERT INTO member(uid, Fname, Lname, Country)
VALUES
    (6, 'Ishwor', 'Giri', 'Nepal'),
    (7, 'Aarshika', 'Singh', 'India'),
    (8, 'John','Doe', 'Nepal');
    
--Food
INSERT INTO Food(fid, Title, Price, Image) VALUES  (01, 'Momo', 1.2, 'Momo-pic');
INSERT INTO Food(fid, Title, Price, Image) VALUES  (02, 'Burger', 2.0, 'Burger-pic');
INSERT INTO Food(fid, Title, Price, Image) VALUES  (03, 'Biryani', 1.5, 'Biryani-pic');
INSERT INTO Food(fid, Title, Price, Image) VALUES  (04, 'Pizza', 3.0, 'Pizza-pic');
INSERT INTO Food(fid, Title, Price, Image) VALUES  (05, 'Noodles', 2.0, 'Noodles-pic');
INSERT INTO Food(fid, Title, Price, Image) VALUES  (06, 'Pasta', 20.0, 'pasta-pic');
INSERT INTO Food(fid, Title, Price, Image) VALUES  (07, 'Scones', 29.0, 'scones-pic');

--Admin table
INSERT INTO Admin(uid, permission_type) VALUES  (6, 'Read,Edit,Delete');
INSERT INTO Admin(uid, permission_type) VALUES  (7, 'Read,Edit,Delete');
INSERT INTO Admin(uid, permission_type) VALUES  (8, 'Read');

--Client table
INSERT INTO Client(uid, preferred_payment) VALUES  (1, 'Cash');
INSERT INTO Client(uid, preferred_payment) VALUES  (3, 'Cash');
INSERT INTO Client(uid, preferred_payment) VALUES  (5, 'Cash');
INSERT INTO Client(uid, preferred_payment) VALUES  (6, 'PayPal');

--Offers table
INSERT INTO offers(uid, fid, oid) VALUES (1,1,0987);
INSERT INTO offers(uid, fid, oid) VALUES (2,2,0988);
INSERT INTO offers(uid, fid, oid) VALUES (3,3,0989);
INSERT INTO offers(uid, fid, oid) VALUES (4,4,0990);
INSERT INTO offers(uid, fid, oid) VALUES (5,5,0991);
INSERT INTO offers(uid, fid, oid) VALUES (1,5,0995);
INSERT INTO offers(uid, fid, oid) VALUES (2,6,0998);


--Request table
INSERT INTO Requests(uid, fid, rid)VALUES(1, 4, 0977);
INSERT INTO Requests(uid, fid, rid)VALUES(2, 1, 0978);
INSERT INTO Requests(uid, fid, rid)VALUES(3, 5, 0979);
INSERT INTO Requests(uid, fid, rid)VALUES(4, 1, 0980);
INSERT INTO Requests(uid, fid, rid)VALUES(5, 3, 0981);
INSERT INTO Requests(uid, fid, rid)VALUES(5, 1, 0982);

--Packaged food
INSERT INTO Packaged_Food(fid, bestbefore)VALUES(2, 10);
INSERT INTO Packaged_Food(fid, bestbefore)VALUES(4, 30);
INSERT INTO Packaged_Food(fid, bestbefore)VALUES(6, 2);
INSERT INTO Packaged_Food(fid, bestbefore)VALUES(7, 5);

--Cooked food
INSERT INTO Cooked_Food(fid, ingredients)VALUES(1, 'Chicken, Vegetables, Wheat');
INSERT INTO Cooked_Food(fid, ingredients)VALUES(3, 'Chicken, Rice, Indian spices');
INSERT INTO Cooked_Food(fid, ingredients)VALUES(5, 'Noodles, Spices');

--Vegan
INSERT INTO Vegan(fid)VALUES(4);
INSERT INTO Vegan(fid)VALUES(5);

--Vegetarian
INSERT INTO Vegetarian(fid)VALUES(2);
INSERT INTO Vegetarian(fid)VALUES(7);

--non veg halal
INSERT INTO n_veg_halal(fid)VALUES(3);

--non veg not halal
INSERT INTO n_veg_n_halal(fid)VALUES(6);
INSERT INTO n_veg_n_halal(fid)VALUES(1);

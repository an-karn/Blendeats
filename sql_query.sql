--  Get Foods which is offered with Food Provider Name and the price is less than 25.
SELECT M.Fname, F.Title, O.fid 
FROM member M, offers O , Food F
WHERE M.uid=O.uid AND O.fid=F.fid AND F.price<25;

-- Get Clients who are from country India
SELECT M.Fname , M.country
FROM member M, Client C 
WHERE M.uid=C.uid AND M.country="India";

--Select all the packaged food, which is going to expire in next three months
SELECT  F.Title, P.bestbefore
FROM Packaged_Food P, Food F
WHERE F.fid=P.fid AND P.bestbefore < 3;

--Select all the food being requested by more than one people
SELECT F.Title, R.fid ,Count(R.fid) as requests
FROM Food F, Requests R
WHERE F.fid = R.fid
GROUP BY R.fid
HAVING COUNT(*) > 1; 

--Select the average price.
SELECT AVG(F.price)
FROM Food F, offers O
WHERE F.fid = O.fid;

--Group the food according to price
SELECT F.price 
FROM Food F 
GROUP BY(F.price);

--Select countries with more than one person who are registered in our website
SELECT Count(M.uid) as usercount,  M.country 
FROM member M 
GROUP BY M.country 
HAVING usercount>1;

-- Select all the clients who are also admins
SELECT M.Fname
FROM member M, Client C, Admin A
WHERE M.uid = C.uid AND M.uid= A.uid AND C.uid = A.uid;

-- Select all admins who can read, write and delete in the website
SELECT M.Fname, M.Lname
FROM member M, Admin A
WHERE M.uid = A.uid AND A.permission_type = ('Read,Edit,Delete');

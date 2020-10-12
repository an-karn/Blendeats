
CREATE TABLE member
(
    uid INTEGER AUTO_INCREMENT,
    Fname CHAR(20) NOT NULL,
    Lname CHAR(20) NOT NULL,
    bio CHAR(50),
    profilepic LONGBLOB,
    Country CHAR(20) NOT NULL,
    PRIMARY KEY(uid)
    
);

CREATE TABLE Admin
(
    uid INTEGER,
    permission_type SET("Read", "Edit", "Delete"),
    PRIMARY KEY(uid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE

    
);


CREATE TABLE Client
(
    uid INTEGER,
    preferred_payment SET("Cash", "Bank-Transfer", "PayPal"),
    PRIMARY KEY(uid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Account
(
    loginid INTEGER NOT NULL,
    email CHAR(30) UNIQUE NOT NULL,
    password CHAR(30) NOT NULL,
    PRIMARY KEY(loginid)
    
);

-- member & Account Relation

CREATE TABLE registers_with
(
    uid INTEGER,
    loginid INTEGER,
    PRIMARY KEY(uid, loginid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(loginid) REFERENCES Account(loginid) ON DELETE CASCADE  ON UPDATE CASCADE
);


CREATE TABLE Food
(
    fid INTEGER NOT NULL,
    Title CHAR(20) NOT NULL,
    description CHAR(50),
    image LONGBLOB NOT NULL,
    price INTEGER NULL,
    PRIMARY KEY(fid)
);


-- Food is_a
CREATE TABLE Packaged_Food
(
    fid INTEGER NOT NULL,
    bestbefore INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES Food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

CREATE TABLE Cooked_Food
(
    fid INTEGER NOT NULL,
    ingredients CHAR(50),
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES Food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);
-- Food is_a
CREATE TABLE Vegan
(
    fid INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES Food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

CREATE TABLE Vegetarian
(
    fid INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES Food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

CREATE TABLE n_veg_halal
(
    fid INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES Food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

CREATE TABLE n_veg_n_halal
(
    fid INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES Food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

-- member & Food Relation



CREATE TABLE offers
(
    uid INTEGER,
    fid INTEGER,
    oid INTEGER UNIQUE,
    PRIMARY KEY(uid,fid,oid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(fid) REFERENCES Food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);


CREATE TABLE Requests
(
    uid INTEGER,
    fid INTEGER,
    rid INTEGER,
    pay INTEGER,
    PRIMARY KEY(rid, uid, fid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(fid) REFERENCES Food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);
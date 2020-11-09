
CREATE TABLE member
(
    uid INTEGER AUTO_INCREMENT,
    fname CHAR(20) NOT NULL,
    lname CHAR(20) NOT NULL,
    bio CHAR(250),
    profilepic LONGBLOB,
    contact VARCHAR(15) UNIQUE,
    country CHAR(50) NOT NULL,
    email CHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY(uid)
    
);

CREATE TABLE admin
(
    
    uid INTEGER AUTO_INCREMENT,
    permission_type SET("Read", "Edit", "Delete"),
    PRIMARY KEY(uid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE

    
);


CREATE TABLE client
(
    
    uid INTEGER AUTO_INCREMENT,
    preferred_payment SET("Cash", "Bank-Transfer", "PayPal"),
    PRIMARY KEY(uid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE account
(
    loginid INTEGER AUTO_INCREMENT NOT NULL ,
    user CHAR(30) UNIQUE NOT NULL,
    password CHAR(30) NOT NULL,
    email CHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY(loginid)
    
);

-- member & Account Relation

CREATE TABLE registers_with
(
    uid INTEGER UNIQUE NOT NULL,
    loginid INTEGER UNIQUE NOT NULL,
    PRIMARY KEY(uid,loginid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(loginid) REFERENCES account(loginid) ON DELETE CASCADE  ON UPDATE CASCADE
);


CREATE TABLE food
(
    fid INTEGER AUTO_INCREMENT NOT NULL,
    title CHAR(30) NOT NULL,
    description CHAR(250),
    image LONGBLOB,
    price INTEGER NULL,
    PRIMARY KEY(fid)
);


-- Food is_a
CREATE TABLE packaged_food
(
    fid INTEGER NOT NULL,
    bestbefore DATE NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

CREATE TABLE cooked_food
(
    fid INTEGER NOT NULL,
    ingredients CHAR(250),
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);
-- Food is_a
CREATE TABLE vegan
(
    fid INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

CREATE TABLE vegetarian
(
    fid INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

CREATE TABLE n_veg_halal
(
    fid INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

CREATE TABLE n_veg
(
    fid INTEGER NOT NULL,
    PRIMARY KEY(fid),
    FOREIGN KEY(fid) REFERENCES food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

-- member & Food Relation

CREATE TABLE offers
(
    uid INTEGER,
    fid INTEGER UNIQUE ,
    oid INTEGER UNIQUE AUTO_INCREMENT ,
    PRIMARY KEY(uid,fid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(fid) REFERENCES food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);


CREATE TABLE requests
(
    uid INTEGER ,
    fid INTEGER ,
    rid INTEGER AUTO_INCREMENT UNIQUE,
    message CHAR(250) NULL,
    PRIMARY KEY(uid, fid),
    FOREIGN KEY(uid) REFERENCES member(uid) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY(fid) REFERENCES food(fid) ON DELETE CASCADE  ON UPDATE CASCADE
);

/* -------------------------------------------------------------------------- */
/*                       -- Employee Manager v2 Database                      */
/* -------------------------------------------------------------------------- */

-- Checking if already exists
DROP DATABASE IF EXISTS eemp_man_V2;
CREATE DATABASE IF NOT EXISTS emp_man_V2;
USE emp_man_V2;

-- Creating employees table
CREATE TABLE employees (
    emp_no         INT             NOT NULL AUTO_INCREMENT,
    first_name     VARCHAR(15)     NOT NULL,
    last_name      VARCHAR(30),
    email          VARCHAR(320)    NOT NULL,
    gender         ENUM ('M','F'),
    age            INT             NOT NULL,
    state          CHAR(5)         NOT NULL,
    city           VARCHAR(30)     NOT NULL,
    streetAddress  INT             NOT NULL,
    postal_code    INT(5)          NOT NULL,
    phone_number   INT(20)         NOT NULL,
    PRIMARY KEY (emp_no)
);

-- Inserting data to employees table
INSERT INTO employees (
        emp_no,
        first_name,
        last_name,
        email,
        gender,
        age,
        state,
        city,
        streetAddress,
        postal_code,
        phone_number
)
VALUES
(1, "Rack",     "Lei",      "jackon@network.com",   "M", 24, "CA",  "San Jone",       126, 394221, 7383627627),
(2, "John",     "Doe",      "jhondoe@foo.com",      "M", 34, "WA",  "New York",       89,  09889,  1283645645),
(3, "Leila",    "Mills",    "mills@leila.com",      "W", 29, "CA",  "San Diego",      55,  098765, 9983632461),
(4, "Richard",  "Desmond",  "dismond@foo.com",      "M", 30, "UT",  "Salt lake city", 90,  457320, 90876987654),
(5, "Susan",    "Smith",    "susanmith@baz.com",    "W", 28, "KNT", "Louisville",     43,  445321, 224355488976),
(6, "Brad",     "Simpson",  "brad@foo.com",         "M", 40, "GEO", "Atlanta",        128, 394221, 6854634522),
(7, "Neil",     "Walker",   "walkerneil@baz.com",   "M", 42, "TN",  "Nashville",      1,   90143,  45372788192),
(8, "Michaela", "Thomson",  "mthomson@network.com", "W", 24, "LU",  "New Orleans",    126, 63281,  91232876454);

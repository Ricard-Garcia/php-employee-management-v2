/* -------------------------------------------------------------------------- */
/*                       -- Employee Manager v2 Database                      */
/* -------------------------------------------------------------------------- */
-- Command to access "root" user
-- mysql -u root -p

-- Checking if db already exists
DROP DATABASE IF EXISTS eemp_man_V2;
CREATE DATABASE IF NOT EXISTS emp_man_V2;
USE emp_man_V2;

-- Checking if table already exists
DROP TABLE IF EXISTS employees, admins;

-- Creating employees table
CREATE TABLE employees (
    emp_no         INT             NOT NULL AUTO_INCREMENT,
    first_name     CHAR(20)        NOT NULL,
    last_name      CHAR(30),
    email          CHAR(80)        NOT NULL,
    gender         ENUM ('M','W'),
    age            INT             NOT NULL,
    state          CHAR(5)         NOT NULL,
    city           CHAR(45)        NOT NULL,
    street_address INT             NOT NULL,
    postal_code    INT             NOT NULL,
    phone_number   VARCHAR(20)     NOT NULL,
    PRIMARY KEY (emp_no)
);

-- Creating admins table
CREATE TABLE admins (
    admin_id        INT            NOT NULL  AUTO_INCREMENT,
    first_name      CHAR(20)       NOT NULL,
    password        CHAR(60)       NOT NULL,
    email           CHAR(80)       NOT NULL,
    PRIMARY KEY (admin_id)
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
(1, "Rack",     "Lei",      "jackon@network.com",   "M", 24, "CA",  "San Jone",       126, 394221, "7383627627"),
(2, "John",     "Doe",      "jhondoe@foo.com",      "M", 34, "WA",  "New York",       89,  09889,  "1283645645"),
(3, "Leila",    "Mills",    "mills@leila.com",      "W", 29, "CA",  "San Diego",      55,  098765, "9983632461"),
(4, "Richard",  "Desmond",  "dismond@foo.com",      "M", 30, "UT",  "Salt lake city", 90,  457320, "90876987654"),
(5, "Susan",    "Smith",    "susanmith@baz.com",    "W", 28, "KNT", "Louisville",     43,  445321, "224355488976"),
(6, "Brad",     "Simpson",  "brad@foo.com",         "M", 40, "GEO", "Atlanta",        128, 394221, "6854634522"),
(7, "Neil",     "Walker",   "walkerneil@baz.com",   "M", 42, "TN",  "Nashville",      1,   90143,  "45372788192"),
(8, "Michaela", "Thomson",  "mthomson@network.com", "W", 24, "LU",  "New Orleans",    126, 63281,  "91232876454");


-- Inserting data to admins table
INSERT INTO admins (
        admin_id,
        first_name,
        password,
        email
)
VALUES
(1, "admin", "$2y$10$nuh1LEwFt7Q2/wz9/CmTJO91stTBS4cRjiJYBY3sVCARnllI.wzBC", "admin@assemblerschool.com");

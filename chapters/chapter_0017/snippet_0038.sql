CREATE TABLE IF NOT EXISTS users (
    id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    name varchar(60) DEFAULT NULL,
    phone varchar(14) DEFAULT NULL,
    city varchar(60) DEFAULT NULL,
    date_added date DEFAULT NULL,
    PRIMARY KEY (id)
)

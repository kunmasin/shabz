CREATE TABLE IF NOT EXISTS users(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(100),
    usernames VARCHAR(40),
    passwords VARCHAR(15),
    email VARCHAR(60),
    address VARCHAR(255),
    phoneNumber VARCHAR(12),
    images VARCHAR(255),
    date_joined TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS regiteration(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(100),
    usernames VARCHAR(40),
    passwords VARCHAR(15),
    email VARCHAR(60),
    address VARCHAR(255),
    phoneNumber VARCHAR(12),
    images VARCHAR(255),
    date_joined TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS cars(
	 id INT(11) AUTO_INCREMENT PRIMARY KEY,
    car_name VARCHAR(50),
    car_color VARCHAR(30),
    car_status VARCHAR(40),
    lease_price DECIMAL(20),
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS drivers(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    driver_name VARCHAR(100),
    driver_email VARCHAR(60),
    driver_address VARCHAR(255),
    driver_number VARCHAR(12),
    driver_images VARCHAR(255),
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE IF NOT EXISTS bookings(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(100),
    car_destination VARCHAR(255),
    car_name VARCHAR(50),
    car_color VARCHAR(12),
    nin VARCHAR(40),
    starting_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    ending_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Travel Planner database
CREATE DATABASE IF NOT EXISTS travel_planner;


USE travel_planner;

-- Users table to store user information
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Flights table to store flight information
CREATE TABLE IF NOT EXISTS flights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    airline VARCHAR(50),
    flight_number VARCHAR(20),
    departure DATETIME,
    arrival DATETIME,
    price DECIMAL(10, 2)
);

-- Hotels table to store hotel information
CREATE TABLE IF NOT EXISTS hotels (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    location VARCHAR(100),
    price_per_night DECIMAL(10, 2),
    availability BOOLEAN
);

-- Activities table to store activity information
CREATE TABLE IF NOT EXISTS activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    location VARCHAR(100),
    price DECIMAL(10, 2),
    availability BOOLEAN
);

-- Bookings table to store user bookings
CREATE TABLE IF NOT EXISTS bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    flight_id INT,
    hotel_id INT,
    activity_id INT,
    booking_date DATETIME,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (flight_id) REFERENCES flights(id),
    FOREIGN KEY (hotel_id) REFERENCES hotels(id),
    FOREIGN KEY (activity_id) REFERENCES activities(id)
);

-- feedback table to store user feedback
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    username VARCHAR(50) NOT NULL,
    feedback TEXT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
CREATE DATABASE izzidgaf_center;

USE izzidgaf_center;


CREATE TABLE users (

id INT AUTO_INCREMENT PRIMARY KEY,

username VARCHAR(50),

email VARCHAR(100),

password VARCHAR(255),

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);



CREATE TABLE posts (

id INT AUTO_INCREMENT PRIMARY KEY,

user_id INT,

title VARCHAR(100),

description TEXT,

image VARCHAR(255),

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);



CREATE TABLE comments (

id INT AUTO_INCREMENT PRIMARY KEY,

post_id INT,

user_id INT,

comment TEXT,

created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);



CREATE TABLE followers (

id INT AUTO_INCREMENT PRIMARY KEY,

user_id INT,

follower_id INT

);

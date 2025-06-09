create database inventory;
create table item;

CREATE TABLE items (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(2083), -- Max length for URLs
    model VARCHAR(255),
    type VARCHAR(255),
    store VARCHAR(255),
    amount INTEGER DEFAULT 0,
    project VARCHAR(255),
    account VARCHAR(255)
);
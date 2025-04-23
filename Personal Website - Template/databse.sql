CREATE DATABASE photography_portfolio;
GO

USE photography_portfolio;
GO

-- Table to store portfolio images
CREATE TABLE portfolio (
    id INT IDENTITY(1,1) PRIMARY KEY,
    title NVARCHAR(255) NOT NULL,
    description NVARCHAR(MAX),
    image_url NVARCHAR(255) NOT NULL,
    category NVARCHAR(100),
    date_added DATE NOT NULL
);
GO

-- Table to store information about different services
CREATE TABLE services (
    id INT IDENTITY(1,1) PRIMARY KEY,
    name NVARCHAR(255) NOT NULL,
    description NVARCHAR(MAX) NOT NULL
);
GO

-- Table to store information about packages
CREATE TABLE packages (
    id INT IDENTITY(1,1) PRIMARY KEY,
    name NVARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    service_id INT,
    CONSTRAINT FK_ServiceID FOREIGN KEY (service_id) REFERENCES services(id) ON DELETE CASCADE
);
GO

-- Table to store client testimonials
CREATE TABLE testimonials (
    id INT IDENTITY(1,1) PRIMARY KEY,
    client_name NVARCHAR(255) NOT NULL,
    photo_url NVARCHAR(255),
    message NVARCHAR(MAX) NOT NULL,
    date_posted DATE NOT NULL
);
GO

-- Table to store social media links
CREATE TABLE social_links (
    id INT IDENTITY(1,1) PRIMARY KEY,
    platform NVARCHAR(50) NOT NULL,
    url NVARCHAR(255) NOT NULL
);
GO

-- Table to store contact information
CREATE TABLE contact_info (
    id INT IDENTITY(1,1) PRIMARY KEY,
    phone_number NVARCHAR(20),
    email NVARCHAR(255) NOT NULL,
    address NVARCHAR(255),
    city NVARCHAR(100),
    state NVARCHAR(100),
    zip_code NVARCHAR(20)
);
GO


-- Table to store blog posts (if needed)
CREATE TABLE blog_posts (
    id INT IDENTITY(1,1) PRIMARY KEY,
    title NVARCHAR(255) NOT NULL,
    content NVARCHAR(MAX) NOT NULL,
    image_url NVARCHAR(255),
    date_posted DATE NOT NULL
);
GO

-- Example data insertion
INSERT INTO services (name, description) VALUES
(N'Wedding Photography', N'Capturing the special moments of your big day.'),
(N'Engagement Photography', N'Engagement session before your wedding.'),
(N'Family Photography', N'Beautiful family portraits to cherish forever.');
GO

INSERT INTO packages (name, price, service_id) VALUES
(N'Gold Package', 2000.00, 1),
(N'Silver Package', 1500.00, 1),
(N'Engagement Photography Package', 500.00, 2),
(N'Family Photography Package', 500.00, 3);
GO

INSERT INTO social_links (platform, url) VALUES
(N'Instagram', N'https://www.instagram.com/malcolm_lismore'),
(N'Behance', N'https://www.behance.net/malcolmlismore'),
(N'GitHub', N'https://github.com/malcolmlismore');
GO

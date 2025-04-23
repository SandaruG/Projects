CREATE DATABASE my_website_db;
GO

USE my_website_db;
GO

CREATE TABLE Users (
    user_id INT IDENTITY(1,1) PRIMARY KEY,
    username NVARCHAR(50) NOT NULL UNIQUE,
    email NVARCHAR(100) NOT NULL UNIQUE,
    password_hash NVARCHAR(255) NOT NULL,
    role NVARCHAR(20) DEFAULT 'viewer',
    created_at DATETIME DEFAULT GETDATE(),
    updated_at DATETIME DEFAULT GETDATE()
);
GO

CREATE TABLE Pages (
    page_id INT IDENTITY(1,1) PRIMARY KEY,
    page_slug NVARCHAR(50) NOT NULL UNIQUE,
    page_title NVARCHAR(100) NOT NULL,
    page_content NVARCHAR(MAX) NOT NULL,
    created_at DATETIME DEFAULT GETDATE(),
    updated_at DATETIME DEFAULT GETDATE()
);
GO

CREATE TABLE Comments (
    comment_id INT IDENTITY(1,1) PRIMARY KEY,
    page_id INT NOT NULL,
    user_id INT NOT NULL,
    comment_text NVARCHAR(MAX) NOT NULL,
    created_at DATETIME DEFAULT GETDATE(),
    FOREIGN KEY (page_id) REFERENCES Pages(page_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id) ON DELETE CASCADE
);
GO

CREATE TABLE Navigation (
    nav_id INT IDENTITY(1,1) PRIMARY KEY,
    nav_title NVARCHAR(100) NOT NULL,
    page_slug NVARCHAR(50) NOT NULL,
    display_order INT NOT NULL,
    created_at DATETIME DEFAULT GETDATE(),
    FOREIGN KEY (page_slug) REFERENCES Pages(page_slug)
);
GO

CREATE TABLE Media (
    media_id INT IDENTITY(1,1) PRIMARY KEY,
    file_name NVARCHAR(255) NOT NULL,
    file_path NVARCHAR(255) NOT NULL,
    uploaded_by INT NOT NULL,
    uploaded_at DATETIME DEFAULT GETDATE(),
    FOREIGN KEY (uploaded_by) REFERENCES Users(user_id)
);
GO

CREATE TABLE Contact_Submissions (
    submission_id INT IDENTITY(1,1) PRIMARY KEY,
    user_name NVARCHAR(100) NOT NULL,
    user_email NVARCHAR(100) NOT NULL,
    subject NVARCHAR(150),
    message NVARCHAR(MAX) NOT NULL,
    submitted_at DATETIME DEFAULT GETDATE()
);
GO

INSERT INTO Users (username, email, password_hash, role) VALUES 
('admin', 'admin@example.com', 'hashed_password_here', 'admin'),
('editor1', 'editor1@example.com', 'hashed_password_here', 'editor'),
('viewer1', 'viewer1@example.com', 'hashed_password_here', 'viewer');
GO

INSERT INTO Pages (page_slug, page_title, page_content) VALUES 
('home', 'Welcome to Our Site', 'This is the homepage content.'),
('about', 'About Us', 'This is the about us content.'),
('services', 'Our Services', 'Details about our services.'),
('contact', 'Contact Us', 'Feel free to reach out.');
GO

INSERT INTO Navigation (nav_title, page_slug, display_order) VALUES 
('Home', 'home', 1),
('About', 'about', 2),
('Services', 'services', 3),
('Contact', 'contact', 4);
GO

INSERT INTO Media (file_name, file_path, uploaded_by) VALUES 
('banner.jpg', '/images/banner.jpg', 1),
('logo.png', '/images/logo.png', 1);
GO

INSERT INTO Contact_Submissions (user_name, user_email, subject, message) VALUES 
('John Doe', 'john@example.com', 'Inquiry about services', 'Can you provide more details about your services?');
GO

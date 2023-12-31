CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    balance FLOAT NOT NULL DEFAULT 0,
    photo_profile VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE wallets (
    id VARCHAR(6) PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    creator_id INT,
    balance FLOAT NOT NULL DEFAULT 0,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (creator_id) REFERENCES Users(id)
);

CREATE TABLE user_on_wallets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    wallet_id VARCHAR(6),
    user_id INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (wallet_id) REFERENCES Wallets(id),
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE mutation(
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(10) NOT NULL,
    uow_id VARCHAR(6) NOT NULL,
    log TEXT,
    amount FLOAT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
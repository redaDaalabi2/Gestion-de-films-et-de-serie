
CREATE TABLE utilisateur (
    id int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(50),
    prenom varchar(50),
    email varchar(50),
    motdepasse varchar(50)
);

CREATE TABLE post (
    id int PRIMARY KEY AUTO_INCREMENT,
    titre varchar(50),
    description varchar(500),
    photo varchar(50),
    categorie varchar(50),
    userId int NOT NULL,
    FOREIGN KEY (userId) REFERENCES utilisateur(id) ON DELETE CASCADE
);

CREATE TABLE commentaire (
    id int PRIMARY KEY AUTO_INCREMENT,
    userId INT NOT NULL,
    postId INT NOT NULL,
    FOREIGN KEY (userId) REFERENCES utilisateur(id) ON DELETE CASCADE,
    FOREIGN KEY (postId) REFERENCES post(id) ON DELETE CASCADE
);

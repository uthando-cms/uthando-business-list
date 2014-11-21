
CREATE TABLE businessList (
  businessListId integer PRIMARY KEY AUTOINCREMENT NOT NULL,
  userId integer NOT NULL,
  company varchar(255) NOT NULL,
  telephone varchar(255) NOT NULL,
  slug varchar(255) NOT NULL,
  image varchar(255),
  location varchar(255) NOT NULL,
  website varchar(255),
  sector varchar(255) NOT NULL,
  "text" text NOT NULL,
  dateCreated text(128) NOT NULL,
  dateModified text(128) NOT NULL,
  FOREIGN KEY (userId) REFERENCES user (userId) ON DELETE RESTRICT
);
CREATE UNIQUE INDEX businessListId ON businessList (memberId ASC);
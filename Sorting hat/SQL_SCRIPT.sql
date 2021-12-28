Use sortinghat;

create table Users(
User_ID Int NOT NULL auto_increment UNIQUE,
User_name Text not null,
Age int not null,
gender ENUM('male', 'female') NOT NULL,
pref_house ENUM('gryffindor','slytherin','hufflepuff','ravenclaw') NOT NULL,
primary key(User_ID)
);

insert into Users (User_ID, User_name, Age, gender, pref_house) 
values ( '1', 'Huckleberry Fourpetal', '20','male','ravenclaw'),
('2', 'Ignatius Coyota','19','male','hufflepuff'),
('3','Vinnie Persimmom','12','female','gryffindor'),
('4','Martine Madley','17','male','ravenclaw'),
('5','Brandon Denshaw','19','male','slytherin'),
('6','Darius Dedworth','25','male','slytherin'),
('7','Abigail Fredericks', '30','male', 'gryffindor'),
('8','Nina Bickering','23','female','hufflepuff'),
('9','Kouta Entwhistle','25','female','ravenclaw'),
('10','Basil Chang','22','male','slytherin'),
('11','Millicent Willerby','20','female','gryffindor'),
('12','Sally Biggs','16','female','hufflepuff'),
('13','Maisy Partington','13','female','ravenclaw'),
('14','Trudy Prescott','18','female','slytherin'),
('15','Glynis Murk','15','male','hufflepuff'),
('16','Giffard Kettletoft','24','male','gryffindor');

create table description(
User_ID int not null auto_increment unique,
Foreign key(User_ID) references Users(User_ID),
description ENUM('Bravery','Intelligence','Empathy','Ambition') NOT NULL
);

insert into description (User_ID, description)
values
('1','Bravery'),
('2','Empathy'),
('3','Ambition'),
('4','Intelligence'),
('5','Ambition'),
('6','Ambition'),
('7','Bravery'),
('8','Empathy'),
('9','Intelligence'),
('10','Bravery'),
('11','Ambition'),
('12','Empathy'),
('13','Intelligence'),
('14','Ambition'),
('15','Empathy'),
('16','Bravery');

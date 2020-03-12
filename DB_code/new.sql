create table Type 
(
	ID		int(3) NOT NULL AUTO_INCREMENT,
	TypeName	varchar(60),
constraint book1_pk primary key (ID)
);

create table Status 
(
	IDst		int(3) NOT NULL AUTO_INCREMENT,
	StatusName	varchar(60),
constraint book1_pk primary key (IDst)
);

create table Item 
(
	IDs					int(3) NOT NULL AUTO_INCREMENT,
    TypeID 				int(3),
    ItemID				CHAR(30),
	ItemName			varchar(300),
	Detail				varchar(500),
    Price 				int(10),
    Building			CHAR(11),
	Add_Date date,
	Edit_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	TeacherRight 		varchar(100),
	StaffRight  		varchar(100),
	StudentRight  		varchar(100),
	Statusref			int(3),
constraint Item_pk primary key (IDs),
constraint Type_fk foreign key (TypeID)
	references Type(ID),
constraint Status_fk foreign key (Statusref)
	references Status(IDst)
);
create table Useraccount
(
	idus			int(3) NOT NULL AUTO_INCREMENT,
	userID			CHAR(100),
	firstName		CHAR(100),
	lastName		CHAR(100),
	userName		CHAR(100),
	passWord		CHAR(100),


constraint User_pk primary key (idus)
);
create table BorrowTransection 
(
	ID			 int(3) NOT NULL AUTO_INCREMENT,
	itemID		 int(3),
	userID		 int(3),
	Statusref	 int(3),
	statuswork varchar(100),
	etc		CHAR(100),
	Start_Date date,
	End_Date date,
	request_Date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

constraint BorrowTransection_pk primary key (ID),
constraint Useraccount_pk foreign key (userID)
	references Useraccount(idus),
constraint Item3_pk foreign key (itemID)
	references Item(IDs),
constraint Status2_pk foreign key (Statusref)
	references Status(IDst)
);
-- Active: 1733297012845@@127.0.0.1@3306@daycare

CREATE TABLE User (
    UserID INT NOT NULL AUTO_INCREMENT,
    UserName VARCHAR(30) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL,
    Role ENUM('Teacher', 'Maid', 'Receptionist', 'Parent', 'Manager', 'Doctor', 'Guardian') NOT NULL,
    Date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (UserID)
);

CREATE TABLE Parent (
    UserID VARCHAR(30) NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Gender ENUM('M', 'F') NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    PRIMARY KEY(UserID),
    FOREIGN KEY(UserID) REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)

CREATE TABLE Child (
    ChildID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    DOB DATE NOT NULL,
    Nickname VARCHAR(100),
    Relation VARCHAR(30) NOT NULL,
    Langauge VARCHAR(30) NOT NULL,
    Allergies VARCHAR(255),
    Gender ENUM('M', 'F') NOT NULL,
    PackageID INT,
    PRIMARY KEY (ChildID),
    FOREIGN KEY (UserID) REFERENCES Parent(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    FOREIGN KEY (PackageID) REFERENCES package(PackageID)
    ON UPDATE CASCADE
    ON DELETE SET DEFAULT
);

CREATE TABLE Teacher (
    TeacherID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL UNIQUE,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Gender ENUM('M', 'F') NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    AgeGroup INT NOT NULL,
    Subject VARCHAR(30) NOT NULL, 
    ProfileImage BLOB,
    PRIMARY KEY(TeacherID),
    FOREIGN KEY(UserID) REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Maid (
    MaidID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL UNIQUE,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    AgeGroup INT NOT NULL,
    ProfileImage BLOB,
    PRIMARY KEY(MaidID),
    FOREIGN KEY(UserID) REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Receptionist (
    ReceptionistID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL UNIQUE,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Gender ENUM('M', 'F') NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    ProfileImage BLOB,
    PRIMARY KEY(ReceptionistID),
    FOREIGN KEY(UserID) REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE SET NULL
)

CREATE TABLE Doctor (
    DoctorID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL UNIQUE,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Specialization VARCHAR(100) NOT NULL,
    Doctor_Number VARCHAR(20) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    ProfileImage BLOB,
    PRIMARY KEY(DoctorID),
    FOREIGN KEY(UserID) REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Manager (
    ManagerID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL,
    Name VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Phone INT(10) NOT NULL,
    PRIMARY KEY(ManagerID),
    ProfileImage BLOB,
    FOREIGN KEY UserID REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Guardian (
    GuardianID INT NOT NULL AUTO_INCREMENT,
    UserId INT NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    Relation VARCHAR(30) NOT NULL,
    Phone VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Gender VARCHAR(1) NOT NULL,
    Language VARCHAR(30) NOT NULL,
    PRIMARY KEY(GuardianID),
    FOREIGN KEY UserID REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Reservation (
    ReservationID INT NOT NULL AUTO_INCREMENT,
    ChildID INT NOT NULL,
    Date DATE NOT NULL,
    Start_Time TIME NOT NULL,
    End_Time TIME NOT NULL,
    Status ENUM('Pending', 'Approved', 'Cancelled') NOT NULL DEFAULT 'Pending',
    Notes TEXT NOT NULL,
    PRIMARY KEY (ReservationID),
    CHECK (End_Time > Start_Time),
    24Hours BOOLEAN DEFAULT 0,
    FOREIGN KEY (ChildID) REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Package (
    PackageID INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(100) NOT NULL,
    Price DECIMAL(10,2) NOT NULL,
    Service text NOT NULL,
    Monday BOOLEAN,
    Tuesday BOOLEAN,
    Wedenessday BOOLEAN,
    Thursday BOOLEAN,
    Friday BOOLEAN,
    Saturday BOOLEAN,
    Sunday BOOLEAN,
    CHECK (Price > 0)
    PRIMARY KEY (PackageID)
);

CREATE TABLE Attendance (
    AttendanceID INT NOT NULL AUTO_INCREMENT,
    ChildID INT NOT NULL,
    Start_Date DATE NOT NULL,
    Start_Time TIME NOT NULL,
    End_Date DATE,
    End_Time TIME,
    Status VARCHAR(100) NOT NULL,
    PRIMARY KEY (AttendanceID),
    FOREIGN KEY ChildID REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)

CREATE TABLE Pickup (
    PickupID INT NOT NULL AUTO_INCREMENT,
    ChildID INT NOT NULL,
    Time TIME NOT NULL,
    Person VARCHAR(10) NOT NULL,
    OTP INT(6) NOT NULL,
    PRIMARY KEY(PickupID),
    FOREIGN KEY ChildID REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE NO ACTION
);

CREATE TABLE PickupPerson (
    PersonID INT NOT NULL AUTO_INCREMENT,
    PickupID INT NOT NULL,
    Name VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    ChilID INT NOT NULL,
    ImageURL VARCHAR(200) NOT NULL,
    PRIMARY KEY (PersonID),
    FOREIGN KEY ChildID REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE NO ACTION,
    FOREIGN KEY PickupID REFERENCES Pickup(PickupID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Visitor (
    VisitorID INT NOT NULL AUTO_INCREMENT,
    VisitorName VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Date DATE NOT NULL,
    Start_Time TIME NOT NULL,
    End_Time TIME NOT NULL,
    Purpose VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(10) NOT NULL,
    ParentID INT,
    PRIMARY KEY (VisitorID),
    FOREIGN KEY (ParentID) REFERENCES Parent(ParentID)
    ON UPDATE CASCADE
    ON DELETE NO ACTION
);

CREATE TABLE Food (
    Date DATE NOT NULL,
    Time ENUM('Breakfast', 'Lunch', 'Dinner') NOT NULL,
    Food VARCHAR(100) NOT NULL,
    Snack VARCHAR(100) NOT NULL,
    PRIMARY KEY (Date, Time)
);


CREATE TABLE ScheduleVisits (
    ScheduleID INT NOT NULL AUTO_INCREMENT,
    Date DATE NOT NULL,
    Time TIME NOT NULL,
    NID VARCHAR(12) NOT NULL UNIQUE,
    ParentID INT,
    PRIMARY KEY (ScheduleID)
    FOREIGN KEY (ParentID) REFERENCES Parent(ParentID),
    ON UPDATE CASCADE
    ON DELETE SET NULL
)

CREATE TABLE FoodAddOn (
    AddOnID INT NOT NULL AUTO_INCREMENT,
    Date DATE NOT NULL,
    Time VARCHAR(10) NOT NULL,
    ChildID INT NOT NULL,
    PRIMARY KEY (AddOnID),
    FOREIGN KEY (ChildID) REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    UNIQUE (Date, Time, ChildID)
);

CREATE TABLE DoctorSchedule (
    ScheduleID INT NOT NULL AUTO_INCREMENT,
    DoctorID INT NOT NULL,
    Date DATE NOT NULL,
    Time TIME NOT NULL,
    PRIMARY KEY (ScheduleID),
    FOREIGN KEY DoctorID REFERENCES Doctor(DoctorID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE ChildMedical (
    MedicalID INT NOT NULL AUTO_INCREMENT,
    ChildID INT NOT NULL,
    DoctorID INT NOT NULL,
    Diagnosis VARCHAR(100),
    DateTime DATETIME NOT NULL,
    Notes VARCHAR(200),
    PRIMARY KEY MedicalID,
    FOREIGN KEY ChildID REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    FOREIGN KEY DoctorID REFERENCES Doctor(DoctorID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Emergency(
    EmergencyID INT NOT NULL AUTO_INCREMENT,
    ChildID INT NOT NULL,
    Description VARCHAR(200) NOT NULL,
    DateTimE DATETIME DEFAULT CURRENT_TIMESTAMP,
    Informed BOOLEAN NOT NULL,
    AssigneeID INT NOT NULL,
    PRIMARY KEY (EmergencyID),
    FOREIGN KEY ChildID REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
    FOREIGN KEY AssigneeID REFERENCES Maid(MaidID)
    ON UPDATE CASCADE
    On DELETE NO ACTION
)

CREATE TABLE AssignTeachr (
    WorkID INT NOT NULL AUTO_INCREMENT,
    TeacherID INT NOT NULL,
    Date DATE NOT NULL,
    Start_Time TIME NOT NULL,
    AgeGroup INT NOT NULL,
    Subject VARCHAR(20) NOT NULL,
    PRIMARY KEY WorkID,
);

CREATE TABLE Activity (
    WorkID INT NOT NULL,
    ActivityID INT NOT NULL AUTO_INCREMENT,
    Description TEXT NOT NULL,
    PRIMARY KEY (ActivityID),
    FOREIGN KEY (WorkID) REFERENCES AssignTeacher(WorkID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE AssignMaid (
    WorkID INT NOT NULL AUTO_INCREMENT,
    MaidID INT NOT NULL,
    ChildID INT NOT NULL,
    AgeGroup INT NOT NULL,
    Date DATE NOT NULL,
    UNIQUE (MaidID, ChildID, Date),
    PRIMARY KEY WorkID,
    FOREIGN KEY (MaidID) REFERENCES Maid(MaidID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE TeacherLeave (
    LeaveID INT NOT NULL AUTO_INCREMENT,
    TeacherID INT NOT NULL,
    Date DATE NOT NULL,
    LeaveType ENUM('Sick', 'Casual', 'Paid', 'Emergency') NOT NULL,
    Emergency BOOLEAN NOT NULL,
    PRIMARY KEY LeavID,
    UNIQUE (TeacherID, Date),
    FOREIGN KEY TeacherID REFERENCES Teacher(TeacherID)
    ON UPDATE CASCADE
    ON DELETE NO ACTION
);

CREATE TABLE MaidLeave (
    LeaveID INT NOT NULL AUTO_INCREMENT,
    MaidID INT NOT NULL,
    Date DATE NOT NULL
    Emergency BOOLEAN NOT NULL,
    LeaveType ENUM('Sick', 'Casual', 'Paid', 'Emergency') NOT NULL,
    PRIMARY KEY LeavID,
    UNIQUE (MaidID, Date),
    FOREIGN KEY MaidID REFERENCES Maid(MaidID)
    ON UPDATE CASCADE
    ON DELETE NO ACTION
);

CREATE TABLE ReceptionistLeave (
    LeaveID INT NOT NULL AUTO_INCREMENT,
    MaidID INT NOT NULL,
    Date DATE NOT NULL
    Emergency BOOLEAN NOT NULL,
    PRIMARY KEY LeavID,
    UNIQUE (ReceptionistID, Date),
    FOREIGN KEY ReceptionistID REFERENCES Receptionist(ReceptionistID)
    ON UPDATE CASCADE
    ON DELETE NO ACTION
);

CREATE TABLE Item (
    ItemID INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(100) NOT NULL,
    PRIMARY KEY(ItemID)
);

CREATE TABLE Request (
    RequestID INT NOT NULL AUTO_INCREMENT,
    ItemID INT NOT NULL,
    WorkID INT NOT NULL,
    Quanttity INT NOT NULL,
    PRIMARY KEY (RequestID),
    FOREIGN KEY ItemID REFERENCES Item(ItemID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
    FOREIGN KEY WorkID REFERENCES AssignTeachr(WorkID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE CheckList (
    ListID INT NOT NULL AUTO_INCREMENT,
    RequestID INT NOT NULL,
    ChildID INT NOT NULL,
    Provided BOOLEAN DEFAULT 0
    PRIMARY KEY ListID,
    FOREIGN KEY RequestID REFERENCES Request(RequestID)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    FOREIGN KEY ChildID REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Holiday (
    HolidayID INT NOT NULL AUTO_INCREMENT,
    Date DATE NOT NULL,
    Details TEXT,
    PRIMARY KEY HolidayID
);

CREATE TABLE MeetingTimes (
    MeetingID INT NOT NULL AUTO_INCREMENT,
    Date DATE NOT NULL,
    Time TIME NOT NULL,
    Scheduled BOOLEAN DEFAULT 0,
    PRIMARY KEY (MeetingID)
);

CREATE Chat (
    ChatID INT NOT NULL AUTO_INCREMENT,
    SenderID INT NOT NULL,
    RecieverID INT NOT NULL,
    Message VARCHAR(200),
    ImageURL VARCHAR(200),
    PRIMARY KEY ChatID,
    ChildID INT NOT NULL,
    FOREIGN KEY SenderID REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
    FOREIGN KEY RecieverID REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Payment (
    PaymentID INT NOT NULL AUTO_INCREMENT,
    DateTime DATETIME NOT NULL,
    Amount DECIMAL(10,2) NOT NULL,
    PayerID INT NOT NULL,
    Mode ENUM('Cash', 'Bank Transfer', 'Credit Card') NOT NULL DEFAULT 'Cash',
    PRIMARY KEY PaymentID,
    CHECK (Amount > 0)
    FOREIGN KEY PayerID REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE NO ACTION
);

CREATE TABLE Refund (
    RefundID INT NOT NULL AUTO_INCREMENT,
    PaymentID INT NOT NULL,
    Reason VARCHAR(100) NOT NULL,
    Mode ENUM('Cash', 'Bank Transfer', 'Credit Card') NOT NULL DEFAULT 'Cash',
    PRIMARY KEY RefundID,
    FOREIGN KEY PaymentID REFERENCES Payment(PaymentID)
    ON UPDATE CASCADE
    ON DELETE CASCADE 
)

CREATE TABLE SalaryPayment (
    PaymentID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL,
    Salary AS (Salary + Bonus - Deductions) PERSISTENT,
    Date DATE NOT NULL,
    Bonus DECIMAL(10,2) DEFAULT 0,
    Deductions DECIMAL(10,2) DEFAULT 0,
    Mode ENUM('Cash', 'Bank Transfer', 'Credit Card') NOT NULL DEFAULT 'Cash',
    PRIMARY KEY (PaymentID),
    CHECK ((Salary + Bonus - Deductions) >= 0),
\    FOREIGN KEY UserID REFERENCES User(UserID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE Video (
    VideoID INT NOT NULL AUTO_INCREMENT,
    VideoURL VARCHAR(200) NOT NULL,
    VideoImage VARCHAR(200) NOT NULL,
)

CREATE TABLE VideoWhishlist (
    WhishlistID INT NOT NULL AUTO_INCREMENT,
    VideoID INT NOT NULL,
    Date DATE NOT NULL,
    Time TIME NOT NULL,
    Reminder BOOLEAN DEFAULT 0,
    PRIMARY KEY (WhishlistID),
    FOREIGN KEY VideoID REFERENCES Video(VideoID)
    ON CASCADE UPDATE
    ON CASCADE DELETE
);

CREATE TABLE VideoHistory (
    HistoryID INT NOT NULL AUTO_INCREMENT,
    VideoID INT NOT NULL,
    Date DATE NOT NULL,
    Time TIME NOT NULL,
    Progress INT DEFAULT 0,
    PRIMARY KEY HistoryID,
    FOREIGN KEY VideoID REFERENCES Video(VideoID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)

CREATE TABLE Tasks (
    TaskID INT NOT NULL AUTO_INCREMENT,
    VideoID INT NOT NULL,
    TeacherID INT NOT NULL,
    Deadline DATE,
    PRIMARY KEY TaskID,
    FOREIGN KEY VideoID Video(VideoID)
    ON CASCADE UPDATE
    ON CASCADE DELETE
    FOREIGN KEY TeacherID REFERENCES Teacher(TeacherID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
)

INSERT INTO `user` (`Username`, `Password`, `Role`, `Date`) VALUES
    ('Abu', '$2y$10$hMuWrLMdxzIeVq5MDQpUVeTCMhdm6tFuAcM1ssacza4V0oP3QYnrG', 'Unregistered', '2024-11-20 14:02:39'),
    ('Arunalu', '$2y$10$HjEx/uVSr2sPvTEgcUezyuKBsN2HJxJMfImNXb4Cyr4RYMEOxK0wa', 'Receptionist', '2024-11-29 08:14:33'),
    ('Hansaja', '$2y$10$PYtrrkFU5D0TxpUK32seUe9FVXXpnmYdbtZrbcOWqEQtFhAZ.yPgK', 'Doctor', '2024-11-29 07:38:49'),
    ('Registered', '$2y$10$mK/Y3WOzwfejvYXsaaChgONXLr5BLBL9DGtjvyLGKdt.Tu1q9xAMa', 'Registered', '2024-11-08 15:09:21'),
    ('Shimhan', '$2y$10$1rTP5NjsoovPK8ChdopoeuH5lSwcjiBEo5J8/rRjuLKQZHGXYf4yS', 'Manager', '2024-11-18 09:21:16'),
    ('Sineth', '$2y$10$vNpDWl1TZAPfcmzmVMrYM.9IB.AOdTqfYWasjKVC7rk98lAU3pfey', 'Teacher', '2024-11-29 07:27:55')
;


INSERT INTO `parent` (`UserID`, `Last_Name`, `First_Name`, `Phone_Number`, `Address`, `NID`, `Email`, `Gender`, `Language`, `Last_Seen`) VALUES
    ('Abu', 'Abdulla', 'SA', '071-481 0928', '106/37', '200232901776', 'abdullaaurad@gmail.com', 'M', 'English', '2024-11-29 09:49:02'),
    ('Shimhan', 'Abdulla', 'SA', '077-736 2229', '106/37', '196634610024', 'abdullaaurad@gmail.com', 'M', 'English', '2024-11-29 13:29:47'),
    ('Sumaya', 'Abdulla', 'SA', '071-481 0928', '106/37', '200232901776', 'sumaya@gmail.com', 'F', 'English', '2024-11-18 19:50:57'),
    ('Unregistered', 'Abdulla', 'SA', '071-481 0928', '106/37', '200232901776', 'abdullaaurad@gmail.com', 'M', 'English', '2024-11-19 18:31:44'),
    ('lol', 'dfbd', 'begrd', '071-481 0928', '106/37', '200232901776', 'fadhiya@gmail.com', 'M', 'English', '2024-11-28 17:09:50')
;


INSERT INTO `child` (`Child_Id`, `Parent_Name`, `First_Name`, `Last_Name`, `DOB`, `Nickname`, `Relation`, `Religion`, `Language`, `Allergies`, `Gender`) VALUES
    (1, 'Abu', 'Aahil', 'Slamath', '2015-12-14', 'Ammu', 'Sister', 'None', 'English', 'None', 'F'),
    (2, 'Abu', 'Ayyub', 'Mahir', '2021-12-31', 'Ayy', 'Uncle', 'None', 'English', 'None', 'M'),
    (3, 'Abu', 'Farha', 'Fazloon', '2021-04-05', 'pilaka', 'Cousin', 'None', 'English', 'None', 'M'),
    (4, 'Abu', 'Manha', 'Mahir', '2021-05-08', 'Man', 'Uncle', 'Islam', 'English', 'None', 'F'),
    (5, 'Abu', 'Yunus', 'Mahir', '2017-09-03', 'Yunu', 'Uncle', 'Islam', 'English', 'None', 'M'),
    (6, 'Sumaya', 'SA', 'Abdulla', '2021-03-04', '', 'Father', 'None', 'English', 'None', 'M'),
    (7, 'Sumaya', 'lol', 'Abdulla', '2021-02-20', 'ndb', 'ghjkl', 'None', 'English', 'fguyiui', 'M'),
    (8, 'Sumaya', 'New', 'Nose', '2020-02-22', 'ndb', 'ghjkl', 'Buddhism', 'English', 'None', 'M'),
    (9, 'Sumaya', 'Fadhiya', 'Fghj', '2022-04-29', 'Fghj', 'Uncle', 'None', 'English', 'No Allergies', 'M'),
    (10, 'lol', 'SA', 'Abdulla', '2020-12-23', 'Yunus', 'ghjk', 'None', 'English', 'None', 'M'),
    (11, 'lol', 'Abdulla', 'Cgfgh', '2021-12-21', '', 'dsfd', 'None', 'English', 'None', 'M')
;


INSERT INTO `guardian` (`Parent_Name`, `First_Name`, `Last_Name`, `Relation`, `Phone_Number`, `Address`, `NID`, `Email`, `Gender`, `Language`) VALUES
    ('Abu', 'Fadhiya', 'Abdulla', 'Husband', '071-481 0928', '106/37', '200232901776', 'fadhiya@gmail.com', 'M', 'English'),
    ('Shimhan', 'SA', 'Abdulla', 'Father', '071-481 0928', '106/37', '200232901776', 'fadhiya@gmail.com', 'M', 'English'),
    ('Sumaya', 'SA', 'Cgfgh', 'Aunty', '071-481 0928', '106/37', '200232901776', 'fadhiya@gmail.com', 'F', 'English'),
    ('lol', 'Hbjedejds', 'Evttr', 'Father', '071-481 0928', 'Sdfgh', '200232901776', 'abdullaaurad@gmail.com', 'M', 'English'),
    ('Shrama', 'Fadhiya', 'Fazloon', 'Aunty', '071-481 0928', '106/37', '200232901776', 'fadhiya@gmail.com', 'M', 'English')
;


INSERT INTO `reservation` (`Child_Id`, `Date`, `Start_Time`, `End_Time`, `Status`, `Notes`) VALUES
    (1, '2024-01-04', '08:00:00', '10:00:00', 'Approved', NULL),
    (1, '2024-01-02', '09:00:00', '11:00:00', 'Pending', NULL),
    (1, '2024-01-03', '08:30:00', '10:30:00', 'Canceled', NULL),
    (1, '2024-01-04', '09:15:00', '11:15:00', 'Approved', NULL),
    (1, '2024-01-05', '08:45:00', '10:45:00', 'Pending', NULL),
    (1, '2024-01-06', '09:00:00', '11:00:00', 'Canceled', NULL),
    (1, '2024-01-07', '08:00:00', '10:00:00', 'Approved', NULL),
    (1, '2024-01-08', '09:30:00', '11:30:00', 'Pending', NULL)
;

INSERT INTO Teacher (UserID, Last_Name, First_Name, Phone_Number, Address, NID, Email, Gender, Language, Last_Seen, AgeGroup, Subject) VALUES
    ('emma_teacher', 'Wilson', 'Emma', '123-555-0101', '789 Teacher St', 'NID111222', 'emma.teacher@email.com', 'F', 'English', CURRENT_TIMESTAMP, 3, 'Math'),
    ('anna_teacher', 'Brown', 'Anna', '123-555-0102', '790 Teacher St', 'NID111223', 'anna.teacher@email.com', 'F', 'English', CURRENT_TIMESTAMP, 4, 'Science'),
    ('teacher3', 'Davis', 'Robert', '123-555-0103', '791 Teacher St', 'NID111224', 'robert.teacher@email.com', 'M', 'English', CURRENT_TIMESTAMP, 2, 'Art'),
    ('teacher4', 'Martinez', 'Maria', '123-555-0104', '792 Teacher St', 'NID111225', 'maria.teacher@email.com', 'F', 'Spanish', CURRENT_TIMESTAMP, 3, 'Music'),
    ('teacher5', 'Johnson', 'James', '123-555-0105', '793 Teacher St', 'NID111226', 'james.teacher@email.com', 'M', 'English', CURRENT_TIMESTAMP, 4, 'PE'),
    ('teacher6', 'Garcia', 'Sofia', '123-555-0106', '794 Teacher St', 'NID111227', 'sofia.teacher@email.com', 'F', 'Spanish', CURRENT_TIMESTAMP, 2, 'Reading'),
    ('teacher7', 'Miller', 'David', '123-555-0107', '795 Teacher St', 'NID111228', 'david.teacher@email.com', 'M', 'English', CURRENT_TIMESTAMP, 3, 'Writing'),
    ('teacher8', 'Anderson', 'Lisa', '123-555-0108', '796 Teacher St', 'NID111229', 'lisa.teacher@email.com', 'F', 'English', CURRENT_TIMESTAMP, 4, 'Math'),
    ('teacher9', 'Taylor', 'Michael', '123-555-0109', '797 Teacher St', 'NID111230', 'michael.teacher@email.com', 'M', 'English', CURRENT_TIMESTAMP, 2, 'Science'),
    ('teacher10', 'Thomas', 'Jennifer', '123-555-0110', '798 Teacher St', 'NID111231', 'jennifer.teacher@email.com', 'F', 'English', CURRENT_TIMESTAMP, 3, 'Art')
;

INSERT INTO Doctor (UserID, Last_Name, First_Name, Phone_Number, NID, Email, Specialization, Doctor_Number, Last_Seen) VALUES
    ('sarah_nurse', 'Jones', 'Sarah', '123-555-0201', 'NID222111', 'sarah.doctor@email.com', 'Pediatrician', 'DOC001', CURRENT_TIMESTAMP),
    ('david_doctor', 'Smith', 'David', '123-555-0202', 'NID222112', 'david.doctor@email.com', 'General', 'DOC002', CURRENT_TIMESTAMP),
    ('doctor3', 'Williams', 'Emily', '123-555-0203', 'NID222113', 'emily.doctor@email.com', 'Pediatrician', 'DOC003', CURRENT_TIMESTAMP),
    ('doctor4', 'Brown', 'James', '123-555-0204', 'NID222114', 'james.doctor@email.com', 'Emergency', 'DOC004', CURRENT_TIMESTAMP),
    ('doctor5', 'Davis', 'Mary', '123-555-0205', 'NID222115', 'mary.doctor@email.com', 'Pediatrician', 'DOC005', CURRENT_TIMESTAMP),
    ('doctor6', 'Miller', 'John', '123-555-0206', 'NID222116', 'john.doctor@email.com', 'General', 'DOC006', CURRENT_TIMESTAMP),
    ('doctor7', 'Wilson', 'Lisa', '123-555-0207', 'NID222117', 'lisa.doctor@email.com', 'Pediatrician', 'DOC007', CURRENT_TIMESTAMP),
    ('doctor8', 'Moore', 'Robert', '123-555-0208', 'NID222118', 'robert.doctor@email.com', 'Emergency', 'DOC008', CURRENT_TIMESTAMP),
    ('doctor9', 'Taylor', 'Patricia', '123-555-0209', 'NID222119', 'patricia.doctor@email.com', 'General', 'DOC009', CURRENT_TIMESTAMP),
    ('doctor10', 'Anderson', 'Michael', '123-555-0210', 'NID222120', 'michael.doctor@email.com', 'Pediatrician', 'DOC010', CURRENT_TIMESTAMP)
;

-- Maid table inserts
INSERT INTO Maid (UserID, Last_Name, First_Name, Phone_Number, Address, NID, Language, Last_Seen, AgeGroup) VALUES
    ('lisa_maid', 'Parker', 'Lisa', '123-555-0301', '123 Maid St', 'NID333111', 'English', CURRENT_TIMESTAMP, 2),
    ('maid2', 'Harris', 'Maria', '123-555-0302', '124 Maid St', 'NID333112', 'Spanish', CURRENT_TIMESTAMP, 3),
    ('maid3', 'Young', 'Susan', '123-555-0303', '125 Maid St', 'NID333113', 'English', CURRENT_TIMESTAMP, 4),
    ('maid4', 'King', 'Anna', '123-555-0304', '126 Maid St', 'NID333114', 'French', CURRENT_TIMESTAMP, 2),
    ('maid5', 'Wright', 'Emma', '123-555-0305', '127 Maid St', 'NID333115', 'English', CURRENT_TIMESTAMP, 3),
    ('maid6', 'Lopez', 'Carmen', '123-555-0306', '128 Maid St', 'NID333116', 'Spanish', CURRENT_TIMESTAMP, 4),
    ('maid7', 'Hill', 'Patricia', '123-555-0307', '129 Maid St', 'NID333117', 'English', CURRENT_TIMESTAMP, 2),
    ('maid8', 'Scott', 'Linda', '123-555-0308', '130 Maid St', 'NID333118', 'English', CURRENT_TIMESTAMP, 3),
    ('maid9', 'Green', 'Sarah', '123-555-0309', '131 Maid St', 'NID333119', 'English', CURRENT_TIMESTAMP, 4),
    ('maid10', 'Adams', 'Nancy', '123-555-0310', '132 Maid St', 'NID333120', 'English', CURRENT_TIMESTAMP, 2)
;

INSERT INTO Package (Name, Price, Service, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday) VALUES
    ('Basic Care', 150.00, 'Day Care Services', 1, 1, 1, 1, 1, 0, 0),
    ('Full Care', 250.00, 'Day and Night Care Services', 1, 1, 1, 1, 1, 1, 1),
    ('Half Day Care', 100.00, 'Morning Only Care Services', 1, 1, 1, 1, 1, 0, 0),
    ('Weekend Care', 200.00, 'Weekend Care Services', 0, 0, 0, 0, 0, 1, 1),
    ('After School Care', 120.00, 'After School Care Services', 0, 1, 1, 1, 1, 0, 0),
    ('Part-Time Care', 180.00, 'Part-Time Day Care Services', 1, 1, 1, 1, 0, 0, 0),
    ('Night Care', 220.00, 'Night Only Care Services', 0, 0, 0, 0, 1, 1, 0),
    ('Full Week Care', 300.00, 'Full Week Care Services', 1, 1, 1, 1, 1, 0, 0),
    ('Early Care', 110.00, 'Morning Start Services', 1, 1, 1, 1, 0, 0, 0),
    ('Holiday Care', 250.00, 'Holiday Care Services', 1, 1, 1, 1, 1, 1, 1)
;

INSERT INTO Attendance (ChildID, Start_Date, Start_Time, End_Date, End_Time, Status) VALUES
<<<<<<< HEAD
    (1, '2024-12-18', '08:00:00', '2024-12-18', '12:00:00', 'Present'),
    (1, '2024-12-19', '09:00:00', '2024-12-19', '12:00:00', 'Present'),
    (1, '2024-12-20', '08:30:00', '2024-12-20', '11:30:00', 'Present'),
    (1, '2024-12-21', '08:00:00', '2024-12-21', '12:00:00', 'Absent'),
    (1, '2024-12-22', '09:00:00', '2024-12-22', '12:30:00', 'Present'),
    (1, '2024-12-23', '08:15:00', '2024-12-23', '12:15:00', 'Present'),
    (1, '2024-12-24', '09:00:00', '2024-12-24', '11:30:00', 'Absent'),
    (1, '2024-12-25', '08:45:00', '2024-12-25', '12:45:00', 'Present'),
    (1, '2024-12-26', '08:30:00', '2024-12-26', '12:00:00', 'Present'),
    (1, '2024-12-27', '09:00:00', '2024-12-27', '12:30:00', 'Absent')
;

INSERT INTO Pickup (ChildID, Time, Person, OTP) VALUES
    (1, '16:00:00', 'John Doe', 123456),
    (2, '16:15:00', 'Jane Smith', 654321),
    (3, '16:30:00', 'Mark Adams', 234567),
    (4, '16:45:00', 'Lisa Brown', 765432),
    (5, '17:00:00', 'Paul White', 345678),
    (6, '17:15:00', 'Nina Black', 876543),
    (7, '17:30:00', 'Emma Green', 456789),
    (8, '17:45:00', 'Lucas Red', 987654),
    (9, '18:00:00', 'Sara Blue', 567890),
    (10, '18:15:00', 'Victor Pink', 135790)
;

INSERT INTO PickupPerson (PickupID, Name, NID, ChildID, ImageURL) VALUES
    (1, 'Anna Brown', '987654321012', 1, 'https://example.com/images/anna.jpg'),
    (2, 'Sophie White', '123456789012', 2, 'https://example.com/images/sophie.jpg'),
    (3, 'Olivia Green', '234567890123', 3, 'https://example.com/images/olivia.jpg'),
    (4, 'Zara Black', '345678901234', 4, 'https://example.com/images/zara.jpg'),
    (5, 'Max Red', '456789012345', 5, 'https://example.com/images/max.jpg'),
    (6, 'Ella Blue', '567890123456', 6, 'https://example.com/images/ella.jpg'),
    (7, 'Leo Pink', '678901234567', 7, 'https://example.com/images/leo.jpg'),
    (8, 'Jack Doe', '789012345678', 8, 'https://example.com/images/jack.jpg'),
    (9, 'Mia Smith', '890123456789', 9, 'https://example.com/images/mia.jpg'),
    (10, 'Mason Brown', '901234567890', 10, 'https://example.com/images/mason.jpg')
;

INSERT INTO Visitor (VisitorName, NID, Date, Start_Time, End_Time, Purpose, Phone_Number, ParentID) VALUES
    ('Emma White', '123456789012', '2024-12-18', '08:30:00', '09:00:00', 'Pickup', '0771122334', 1),
    ('John Adams', '234567890123', '2024-12-19', '10:00:00', '10:30:00', 'Meeting', '0772233445', 2),
    ('Sara Green', '345678901234', '2024-12-20', '09:15:00', '09:45:00', 'Pickup', '0773344556', 3),
    ('Victor Blue', '456789012345', '2024-12-21', '08:45:00', '09:15:00', 'Meeting', '0774455667', 4),
    ('Nina Smith', '567890123456', '2024-12-22', '14:00:00', '14:30:00', 'Pickup', '0775566778', 5),
    ('Paul Black', '678901234567', '2024-12-23', '12:00:00', '12:30:00', 'Pickup', '0776677889', 6),
    ('Lucas Brown', '789012345678', '2024-12-24', '08:00:00', '08:30:00', 'Meeting', '0777788990', 7),
    ('Max Green', '890123456789', '2024-12-25', '09:30:00', '10:00:00', 'Pickup', '0778899001', 8),
    ('Olivia White', '901234567890', '2024-12-26', '11:00:00', '11:30:00', 'Meeting', '0779900112', 9),
    ('Mia Black', '012345678901', '2024-12-27', '13:00:00', '13:30:00', 'Pickup', '0780011223', 10)
;

INSERT INTO Food (Date, Time, Food, Snack) VALUES
    ('2024-12-18', 'Breakfast', 'Pancakes with syrup', 'Fruit slices'),
    ('2024-12-18', 'Lunch', 'Chicken nuggets with fries', 'Cookies'),
    ('2024-12-18', 'Dinner', 'Spaghetti with tomato sauce', 'Cheese sticks'),
    ('2024-12-19', 'Breakfast', 'Omelette with toast', 'Yogurt'),
    ('2024-12-19', 'Lunch', 'Grilled cheese sandwich', 'Chips'),
    ('2024-12-19', 'Dinner', 'Grilled salmon with vegetables', 'Brownies'),
    ('2024-12-20', 'Breakfast', 'Cereal with milk', 'Granola bars'),
    ('2024-12-20', 'Lunch', 'Veggie burger with salad', 'Fruit salad'),
    ('2024-12-20', 'Dinner', 'Chicken stew with rice', 'Cookies'),
    ('2024-12-21', 'Breakfast', 'French toast with syrup', 'Banana slices')
;


INSERT INTO ScheduleVisits (Date, Time, NID, ParentID) VALUES
    ('2024-12-18', '10:00:00', '987654321012', 1),
    ('2024-12-19', '11:00:00', '123456789012', 2),
    ('2024-12-20', '09:30:00', '234567890123', 3),
    ('2024-12-21', '14:00:00', '345678901234', 4),
    ('2024-12-22', '08:30:00', '456789012345', 5),
    ('2024-12-23', '13:15:00', '567890123456', 6),
    ('2024-12-24', '12:00:00', '678901234567', 7),
    ('2024-12-25', '15:00:00', '789012345678', 8),
    ('2024-12-26', '16:30:00', '890123456789', 9),
    ('2024-12-27', '10:45:00', '901234567890', 10)
;


INSERT INTO FoodAddOn (Date, Time, ChildID) VALUES
    ('2024-12-18', 'Breakfast', 1),
    ('2024-12-19', 'Lunch', 2),
    ('2024-12-20', 'Dinner', 3),
    ('2024-12-21', 'Breakfast', 4),
    ('2024-12-22', 'Lunch', 5),
    ('2024-12-23', 'Dinner', 6),
    ('2024-12-24', 'Breakfast', 7),
    ('2024-12-25', 'Lunch', 8),
    ('2024-12-26', 'Dinner', 9),
    ('2024-12-27', 'Breakfast', 10)
;


INSERT INTO DoctorSchedule (DoctorID, Date, Time) VALUES
    (1, '2024-12-18', '08:30:00'),
    (2, '2024-12-19', '09:00:00'),
    (3, '2024-12-20', '10:00:00'),
    (4, '2024-12-21', '11:15:00'),
    (5, '2024-12-22', '12:00:00'),
    (6, '2024-12-23', '13:30:00'),
    (7, '2024-12-24', '14:00:00'),
    (8, '2024-12-25', '09:45:00'),
    (9, '2024-12-26', '10:30:00'),
    (10, '2024-12-27', '11:00:00')
;


INSERT INTO ChildMedical (ChildID, DoctorID, Diagnosis, DateTime, Notes) VALUES
    (1, 1, 'Cold', '2024-12-18 08:30:00', 'Mild symptoms'),
    (2, 2, 'Fever', '2024-12-19 09:00:00', 'Temperature 101°F'),
    (3, 3, 'Cough', '2024-12-20 10:00:00', 'Persistent dry cough'),
    (4, 4, 'Rash', '2024-12-21 11:15:00', 'Possible allergic reaction'),
    (5, 5, 'Stomach Ache', '2024-12-22 12:00:00', 'Complaints after lunch'),
    (6, 6, 'Headache', '2024-12-23 13:30:00', 'Mild pain'),
    (7, 7, 'Vomiting', '2024-12-24 14:00:00', 'Associated with food'),
    (8, 8, 'Allergies', '2024-12-25 09:45:00', 'Seasonal allergies'),
    (9, 9, 'Bronchitis', '2024-12-26 10:30:00', 'Chronic cough and wheezing'),
    (10, 10, 'Sprained Ankle', '2024-12-27 11:00:00', 'Injury during play')
;


INSERT INTO Emergency (ChildID, Description, DateTime, Informed, AssigneeID) VALUES
    (1, 'Choking incident', '2024-12-18 10:30:00', TRUE, 1),
    (2, 'Fall in playground', '2024-12-19 11:15:00', TRUE, 2),
    (3, 'Severe allergic reaction', '2024-12-20 12:00:00', TRUE, 3),
    (4, 'Asthma attack', '2024-12-21 14:00:00', TRUE, 4),
    (5, 'Injury from sharp object', '2024-12-22 15:00:00', FALSE, 5),
    (6, 'Heat stroke', '2024-12-23 16:00:00', TRUE, 6),
    (7, 'Head injury', '2024-12-24 17:00:00', TRUE, 7),
    (8, 'Broken arm', '2024-12-25 18:00:00', TRUE, 8),
    (9, 'Severe cuts', '2024-12-26 19:00:00', TRUE, 9),
    (10, 'Fainting', '2024-12-27 20:00:00', FALSE, 10)
;


INSERT INTO AssignTeacher (TeacherID, Date, Start_Time, AgeGroup, Subject) VALUES
    (1, '2024-12-18', '08:00:00', 5, 'Math'),
    (2, '2024-12-19', '09:00:00', 6, 'Science'),
    (3, '2024-12-20', '10:00:00', 4, 'History'),
    (4, '2024-12-21', '11:00:00', 3, 'Geography'),
    (5, '2024-12-22', '12:00:00', 5, 'English'),
    (6, '2024-12-23', '13:00:00', 6, 'Art'),
    (7, '2024-12-24', '14:00:00', 4, 'Music'),
    (8, '2024-12-25', '15:00:00', 5, 'Physical Education'),
    (9, '2024-12-26', '16:00:00', 3, 'Biology'),
    (10, '2024-12-27', '17:00:00', 6, 'Literature')
;


INSERT INTO Activity (WorkID, Description) VALUES
    (1, 'Math homework review'),
    (2, 'Science experiment setup'),
    (3, 'History discussion session'),
    (4, 'Geography map activity'),
    (5, 'English reading practice'),
    (6, 'Art class painting activity'),
    (7, 'Music lesson: learning notes'),
    (8, 'Physical exercises and games'),
    (9, 'Biology practicals in lab'),
    (10, 'Literature book review and discussion')
;


INSERT INTO AssignMaid (MaidID, ChildID, AgeGroup, Date) VALUES
    (1, 1, 5, '2024-12-18'),
    (2, 2, 6, '2024-12-19'),
    (3, 3, 4, '2024-12-20'),
    (4, 4, 3, '2024-12-21'),
    (5, 5, 5, '2024-12-22'),
    (6, 6, 6, '2024-12-23'),
    (7, 7, 4, '2024-12-24'),
    (8, 8, 5, '2024-12-25'),
    (9, 9, 3, '2024-12-26'),
    (10, 10, 6, '2024-12-27')
;


INSERT INTO TeacherLeave (TeacherID, Date, LeaveType, Emergency) VALUES
    (1, '2024-12-18', 'Sick', TRUE),
    (2, '2024-12-19', 'Casual', FALSE),
    (3, '2024-12-20', 'Paid', FALSE),
    (4, '2024-12-21', 'Emergency', TRUE),
    (5, '2024-12-22', 'Sick', TRUE),
    (6, '2024-12-23', 'Casual', FALSE),
    (7, '2024-12-24', 'Paid', FALSE),
    (8, '2024-12-25', 'Emergency', TRUE),
    (9, '2024-12-26', 'Sick', TRUE),
    (10, '2024-12-27', 'Casual', FALSE)
;


INSERT INTO MaidLeave (MaidID, Date, Emergency, LeaveType) VALUES
    (1, '2024-12-18', TRUE, 'Sick'),
    (2, '2024-12-19', FALSE, 'Casual'),
    (3, '2024-12-20', TRUE, 'Paid'),
    (4, '2024-12-21', FALSE, 'Emergency'),
    (5, '2024-12-22', TRUE, 'Sick'),
    (6, '2024-12-23', FALSE, 'Casual'),
    (7, '2024-12-24', TRUE, 'Paid'),
    (8, '2024-12-25', FALSE, 'Emergency'),
    (9, '2024-12-26', TRUE, 'Sick'),
    (10, '2024-12-27', FALSE, 'Casual')
;


INSERT INTO ReceptionistLeave (MaidID, Date, Emergency) VALUES
    (1, '2024-12-18', TRUE),
    (2, '2024-12-19', FALSE),
    (3, '2024-12-20', TRUE),
    (4, '2024-12-21', FALSE),
    (5, '2024-12-22', TRUE),
    (6, '2024-12-23', FALSE),
    (7, '2024-12-24', TRUE),
    (8, '2024-12-25', FALSE),
    (9, '2024-12-26', TRUE),
    (10, '2024-12-27', FALSE)
;


INSERT INTO Item (Name) VALUES
    ('Pencil'),
    ('Notebook'),
    ('Eraser'),
    ('Crayon'),
    ('Backpack'),
    ('Lunchbox'),
    ('Water Bottle'),
    ('Marker'),
    ('Glue Stick'),
    ('Scissors')
;

INSERT INTO Request (ItemID, WorkID, Quanttity) VALUES
    (1, 1, 10),
    (2, 2, 5),
    (3, 3, 8),
    (4, 4, 12),
    (5, 5, 6),
    (6, 6, 4),
    (7, 7, 15),
    (8, 8, 3),
    (9, 9, 9),
    (10, 10, 7)
;


INSERT INTO CheckList (RequestID, ChildID, Provided) VALUES
    (1, 1, TRUE),
    (2, 2, FALSE),
    (3, 3, TRUE),
    (4, 4, TRUE),
    (5, 5, FALSE),
    (6, 6, TRUE),
    (7, 7, TRUE),
    (8, 8, FALSE),
    (9, 9, TRUE),
    (10, 10, FALSE)
;


INSERT INTO Holiday (Date, Details) VALUES
    ('2024-12-18', 'Christmas Celebration'),
    ('2024-12-19', 'Winter Break'),
    ('2024-12-20', 'Teacher Conference Day'),
    ('2024-12-21', 'School Closed for Holiday'),
    ('2024-12-22', 'Winter Festival'),
    ('2024-12-23', 'Holiday Assembly'),
    ('2024-12-24', 'Christmas Eve'),
    ('2024-12-25', 'Christmas Day'),
    ('2024-12-26', 'Boxing Day'),
    ('2024-12-27', 'Holiday Recess')
;


INSERT INTO MeetingTimes (Date, Time, Scheduled) VALUES
    ('2024-12-18', '10:00:00', TRUE),
    ('2024-12-19', '11:30:00', FALSE),
    ('2024-12-20', '09:45:00', TRUE),
    ('2024-12-21', '14:00:00', FALSE),
    ('2024-12-22', '15:00:00', TRUE),
    ('2024-12-23', '08:00:00', TRUE),
    ('2024-12-24', '10:30:00', FALSE),
    ('2024-12-25', '13:15:00', TRUE),
    ('2024-12-26', '09:00:00', FALSE),
    ('2024-12-27', '16:00:00', TRUE)
;


INSERT INTO Chat (SenderID, RecieverID, Message, ImageURL, ChildID) VALUES
    (1, 2, 'Hello, how are you?', 'https://example.com/image1.jpg', 1),
    (2, 3, 'I will be late today.', 'https://example.com/image2.jpg', 2),
    (3, 4, 'Can you send the documents?', 'https://example.com/image3.jpg', 3),
    (4, 5, 'Meeting rescheduled for tomorrow.', 'https://example.com/image4.jpg', 4),
    (5, 6, 'Reminder for tomorrow’s exam.', 'https://example.com/image5.jpg', 5),
    (6, 7, 'Received your message, thanks!', 'https://example.com/image6.jpg', 6),
    (7, 8, 'Can we discuss after class?', 'https://example.com/image7.jpg', 7),
    (8, 9, 'I have completed the assignment.', 'https://example.com/image8.jpg', 8),
    (9, 10, 'Let me know if you need help.', 'https://example.com/image9.jpg', 9),
    (10, 1, 'Good job on the project.', 'https://example.com/image10.jpg', 10)
;


INSERT INTO Payment (DateTime, Amount, PayerID, Mode) VALUES
    ('2024-12-18 09:00:00', 100.00, 1, 'Cash'),
    ('2024-12-19 10:30:00', 150.50, 2, 'Bank Transfer'),
    ('2024-12-20 12:00:00', 200.00, 3, 'Credit Card'),
    ('2024-12-21 13:15:00', 180.00, 4, 'Cash'),
    ('2024-12-22 14:00:00', 250.75, 5, 'Bank Transfer'),
    ('2024-12-23 15:30:00', 175.00, 6, 'Cash'),
    ('2024-12-24 16:00:00', 220.00, 7, 'Credit Card'),
    ('2024-12-25 17:00:00', 160.00, 8, 'Bank Transfer'),
    ('2024-12-26 18:00:00', 190.00, 9, 'Cash'),
    ('2024-12-27 19:30:00', 210.25, 10, 'Credit Card')
;


INSERT INTO Refund (PaymentID, Reason, Mode) VALUES
    (1, 'Overpayment', 'Cash'),
    (2, 'Duplicate payment', 'Bank Transfer'),
    (3, 'Wrong amount charged', 'Credit Card'),
    (4, 'Refund request by parent', 'Cash'),
    (5, 'Event cancellation', 'Bank Transfer'),
    (6, 'Refund after course adjustment', 'Cash'),
    (7, 'Billing error', 'Credit Card'),
    (8, 'Extra charges not applicable', 'Bank Transfer'),
    (9, 'Unsuccessful transaction', 'Cash'),
    (10, 'Excess payment adjustment', 'Credit Card')
;


INSERT INTO SalaryPayment (UserID, Date, Bonus, Deductions, Mode) VALUES
    (1, '2024-12-18', 100.00, 20.00, 'Cash'),
    (2, '2024-12-19', 150.00, 10.00, 'Bank Transfer'),
    (3, '2024-12-20', 200.00, 30.00, 'Credit Card'),
    (4, '2024-12-21', 180.00, 15.00, 'Cash'),
    (5, '2024-12-22', 250.00, 25.00, 'Bank Transfer'),
    (6, '2024-12-23', 175.00, 5.00, 'Cash'),
    (7, '2024-12-24', 220.00, 10.00, 'Credit Card'),
    (8, '2024-12-25', 160.00, 20.00, 'Bank Transfer'),
    (9, '2024-12-26', 190.00, 15.00, 'Cash'),
    (10, '2024-12-27', 210.00, 25.00, 'Credit Card')
;


INSERT INTO Video (VideoURL, VideoImage) VALUES
    ('https://example.com/video1.mp4', 'https://example.com/video1.jpg'),
    ('https://example.com/video2.mp4', 'https://example.com/video2.jpg'),
    ('https://example.com/video3.mp4', 'https://example.com/video3.jpg'),
    ('https://example.com/video4.mp4', 'https://example.com/video4.jpg'),
    ('https://example.com/video5.mp4', 'https://example.com/video5.jpg'),
    ('https://example.com/video6.mp4', 'https://example.com/video6.jpg'),
    ('https://example.com/video7.mp4', 'https://example.com/video7.jpg'),
    ('https://example.com/video8.mp4', 'https://example.com/video8.jpg'),
    ('https://example.com/video9.mp4', 'https://example.com/video9.jpg'),
    ('https://example.com/video10.mp4', 'https://example.com/video10.jpg')
;


INSERT INTO VideoWhishlist (VideoID, Date, Time, Reminder) VALUES
    (1, '2024-12-18', '09:00:00', TRUE),
    (2, '2024-12-19', '10:00:00', FALSE),
    (3, '2024-12-20', '11:00:00', TRUE),
    (4, '2024-12-21', '12:00:00', FALSE),
    (5, '2024-12-22', '13:00:00', TRUE),
    (6, '2024-12-23', '14:00:00', TRUE),
    (7, '2024-12-24', '15:00:00', FALSE),
    (8, '2024-12-25', '16:00:00', TRUE),
    (9, '2024-12-26', '17:00:00', FALSE),
    (10, '2024-12-27', '18:00:00', TRUE)
;


INSERT INTO VideoHistory (VideoID, Date, Time, Progress) VALUES
    (1, '2024-12-18', '09:00:00', 50),
    (2, '2024-12-19', '10:00:00', 30),
    (3, '2024-12-20', '11:00:00', 70),
    (4, '2024-12-21', '12:00:00', 90),
    (5, '2024-12-22', '13:00:00', 60),
    (6, '2024-12-23', '14:00:00', 80),
    (7, '2024-12-24', '15:00:00', 40),
    (8, '2024-12-25', '16:00:00', 20),
    (9, '2024-12-26', '17:00:00', 10),
    (10, '2024-12-27', '18:00:00', 100)
;


INSERT INTO Tasks (VideoID, TeacherID, Deadline) VALUES
    (1, 1, '2024-12-19'),
    (2, 2, '2024-12-20'),
    (3, 3, '2024-12-21'),
    (4, 4, '2024-12-22'),
    (5, 5, '2024-12-23'),
    (6, 6, '2024-12-24'),
    (7, 7, '2024-12-25'),
    (8, 8, '2024-12-26'),
    (9, 9, '2024-12-27'),
    (10, 10, '2024-12-28')
;
=======
(1, '2024-12-18', '08:00:00', '2024-12-18', '12:00:00', 'Present'),
(1, '2024-12-19', '09:00:00', '2024-12-19', '12:00:00', 'Present'),
(1, '2024-12-20', '08:30:00', '2024-12-20', '11:30:00', 'Present'),
(1, '2024-12-21', '08:00:00', '2024-12-21', '12:00:00', 'Absent'),
(1, '2024-12-22', '09:00:00', '2024-12-22', '12:30:00', 'Present'),
(1, '2024-12-23', '08:15:00', '2024-12-23', '12:15:00', 'Present'),
(1, '2024-12-24', '09:00:00', '2024-12-24', '11:30:00', 'Absent'),
(1, '2024-12-25', '08:45:00', '2024-12-25', '12:45:00', 'Present'),
(1, '2024-12-26', '08:30:00', '2024-12-26', '12:00:00', 'Present'),
(1, '2024-12-27', '09:00:00', '2024-12-27', '12:30:00', 'Absent');

INSERT INTO Pickup (ChildID, Time, Person, OTP) VALUES
(1, '16:00:00', 'John Doe', 123456),
(2, '16:15:00', 'Jane Smith', 654321),
(3, '16:30:00', 'Mark Adams', 234567),
(4, '16:45:00', 'Lisa Brown', 765432),
(5, '17:00:00', 'Paul White', 345678),
(6, '17:15:00', 'Nina Black', 876543),
(7, '17:30:00', 'Emma Green', 456789),
(8, '17:45:00', 'Lucas Red', 987654),
(9, '18:00:00', 'Sara Blue', 567890),
(10, '18:15:00', 'Victor Pink', 135790);

INSERT INTO PickupPerson (PickupID, Name, NID, ChildID, ImageURL) VALUES
(1, 'Anna Brown', '987654321012', 1, 'https://example.com/images/anna.jpg'),
(2, 'Sophie White', '123456789012', 2, 'https://example.com/images/sophie.jpg'),
(3, 'Olivia Green', '234567890123', 3, 'https://example.com/images/olivia.jpg'),
(4, 'Zara Black', '345678901234', 4, 'https://example.com/images/zara.jpg'),
(5, 'Max Red', '456789012345', 5, 'https://example.com/images/max.jpg'),
(6, 'Ella Blue', '567890123456', 6, 'https://example.com/images/ella.jpg'),
(7, 'Leo Pink', '678901234567', 7, 'https://example.com/images/leo.jpg'),
(8, 'Jack Doe', '789012345678', 8, 'https://example.com/images/jack.jpg'),
(9, 'Mia Smith', '890123456789', 9, 'https://example.com/images/mia.jpg'),
(10, 'Mason Brown', '901234567890', 10, 'https://example.com/images/mason.jpg');

INSERT INTO Visitor (VisitorName, NID, Date, Start_Time, End_Time, Purpose, Phone_Number, ParentID) VALUES
('Emma White', '123456789012', '2024-12-18', '08:30:00', '09:00:00', 'Pickup', '0771122334', 1),
('John Adams', '234567890123', '2024-12-19', '10:00:00', '10:30:00', 'Meeting', '0772233445', 2),
('Sara Green', '345678901234', '2024-12-20', '09:15:00', '09:45:00', 'Pickup', '0773344556', 3),
('Victor Blue', '456789012345', '2024-12-21', '08:45:00', '09:15:00', 'Meeting', '0774455667', 4),
('Nina Smith', '567890123456', '2024-12-22', '14:00:00', '14:30:00', 'Pickup', '0775566778', 5),
('Paul Black', '678901234567', '2024-12-23', '12:00:00', '12:30:00', 'Pickup', '0776677889', 6),
('Lucas Brown', '789012345678', '2024-12-24', '08:00:00', '08:30:00', 'Meeting', '0777788990', 7),
('Max Green', '890123456789', '2024-12-25', '09:30:00', '10:00:00', 'Pickup', '0778899001', 8),
('Olivia White', '901234567890', '2024-12-26', '11:00:00', '11:30:00', 'Meeting', '0779900112', 9),
('Mia Black', '012345678901', '2024-12-27', '13:00:00', '13:30:00', 'Pickup', '0780011223', 10);

INSERT INTO Food (Date, Time, Food, Snack) VALUES
('2024-12-18', 'Breakfast', 'Pancakes with syrup', 'Fruit slices'),
('2024-12-18', 'Lunch', 'Chicken nuggets with fries', 'Cookies'),
('2024-12-18', 'Dinner', 'Spaghetti with tomato sauce', 'Cheese sticks'),
('2024-12-19', 'Breakfast', 'Omelette with toast', 'Yogurt'),
('2024-12-19', 'Lunch', 'Grilled cheese sandwich', 'Chips'),
('2024-12-19', 'Dinner', 'Grilled salmon with vegetables', 'Brownies'),
('2024-12-20', 'Breakfast', 'Cereal with milk', 'Granola bars'),
('2024-12-20', 'Lunch', 'Veggie burger with salad', 'Fruit salad'),
('2024-12-20', 'Dinner', 'Chicken stew with rice', 'Cookies'),
('2024-12-21', 'Breakfast', 'French toast with syrup', 'Banana slices');


INSERT INTO ScheduleVisits (Date, Time, NID, ParentID) VALUES
('2024-12-18', '10:00:00', '987654321012', 1),
('2024-12-19', '11:00:00', '123456789012', 2),
('2024-12-20', '09:30:00', '234567890123', 3),
('2024-12-21', '14:00:00', '345678901234', 4),
('2024-12-22', '08:30:00', '456789012345', 5),
('2024-12-23', '13:15:00', '567890123456', 6),
('2024-12-24', '12:00:00', '678901234567', 7),
('2024-12-25', '15:00:00', '789012345678', 8),
('2024-12-26', '16:30:00', '890123456789', 9),
('2024-12-27', '10:45:00', '901234567890', 10);


INSERT INTO FoodAddOn (Date, Time, ChildID) VALUES
('2024-12-18', 'Breakfast', 1),
('2024-12-19', 'Lunch', 2),
('2024-12-20', 'Dinner', 3),
('2024-12-21', 'Breakfast', 4),
('2024-12-22', 'Lunch', 5),
('2024-12-23', 'Dinner', 6),
('2024-12-24', 'Breakfast', 7),
('2024-12-25', 'Lunch', 8),
('2024-12-26', 'Dinner', 9),
('2024-12-27', 'Breakfast', 10);


INSERT INTO DoctorSchedule (DoctorID, Date, Time) VALUES
(1, '2024-12-18', '08:30:00'),
(2, '2024-12-19', '09:00:00'),
(3, '2024-12-20', '10:00:00'),
(4, '2024-12-21', '11:15:00'),
(5, '2024-12-22', '12:00:00'),
(6, '2024-12-23', '13:30:00'),
(7, '2024-12-24', '14:00:00'),
(8, '2024-12-25', '09:45:00'),
(9, '2024-12-26', '10:30:00'),
(10, '2024-12-27', '11:00:00');


INSERT INTO ChildMedical (ChildID, DoctorID, Diagnosis, DateTime, Notes) VALUES
(1, 1, 'Cold', '2024-12-18 08:30:00', 'Mild symptoms'),
(2, 2, 'Fever', '2024-12-19 09:00:00', 'Temperature 101°F'),
(3, 3, 'Cough', '2024-12-20 10:00:00', 'Persistent dry cough'),
(4, 4, 'Rash', '2024-12-21 11:15:00', 'Possible allergic reaction'),
(5, 5, 'Stomach Ache', '2024-12-22 12:00:00', 'Complaints after lunch'),
(6, 6, 'Headache', '2024-12-23 13:30:00', 'Mild pain'),
(7, 7, 'Vomiting', '2024-12-24 14:00:00', 'Associated with food'),
(8, 8, 'Allergies', '2024-12-25 09:45:00', 'Seasonal allergies'),
(9, 9, 'Bronchitis', '2024-12-26 10:30:00', 'Chronic cough and wheezing'),
(10, 10, 'Sprained Ankle', '2024-12-27 11:00:00', 'Injury during play');


INSERT INTO Emergency (ChildID, Description, DateTime, Informed, AssigneeID) VALUES
(1, 'Choking incident', '2024-12-18 10:30:00', TRUE, 1),
(2, 'Fall in playground', '2024-12-19 11:15:00', TRUE, 2),
(3, 'Severe allergic reaction', '2024-12-20 12:00:00', TRUE, 3),
(4, 'Asthma attack', '2024-12-21 14:00:00', TRUE, 4),
(5, 'Injury from sharp object', '2024-12-22 15:00:00', FALSE, 5),
(6, 'Heat stroke', '2024-12-23 16:00:00', TRUE, 6),
(7, 'Head injury', '2024-12-24 17:00:00', TRUE, 7),
(8, 'Broken arm', '2024-12-25 18:00:00', TRUE, 8),
(9, 'Severe cuts', '2024-12-26 19:00:00', TRUE, 9),
(10, 'Fainting', '2024-12-27 20:00:00', FALSE, 10);


INSERT INTO AssignTeacher (TeacherID, Date, Start_Time, AgeGroup, Subject) VALUES
(1, '2024-12-18', '08:00:00', 5, 'Math'),
(2, '2024-12-19', '09:00:00', 6, 'Science'),
(3, '2024-12-20', '10:00:00', 4, 'History'),
(4, '2024-12-21', '11:00:00', 3, 'Geography'),
(5, '2024-12-22', '12:00:00', 5, 'English'),
(6, '2024-12-23', '13:00:00', 6, 'Art'),
(7, '2024-12-24', '14:00:00', 4, 'Music'),
(8, '2024-12-25', '15:00:00', 5, 'Physical Education'),
(9, '2024-12-26', '16:00:00', 3, 'Biology'),
(10, '2024-12-27', '17:00:00', 6, 'Literature');


INSERT INTO Activity (WorkID, Description) VALUES
(1, 'Math homework review'),
(2, 'Science experiment setup'),
(3, 'History discussion session'),
(4, 'Geography map activity'),
(5, 'English reading practice'),
(6, 'Art class painting activity'),
(7, 'Music lesson: learning notes'),
(8, 'Physical exercises and games'),
(9, 'Biology practicals in lab'),
(10, 'Literature book review and discussion');


INSERT INTO AssignMaid (MaidID, ChildID, AgeGroup, Date) VALUES
(1, 1, 5, '2024-12-18'),
(2, 2, 6, '2024-12-19'),
(3, 3, 4, '2024-12-20'),
(4, 4, 3, '2024-12-21'),
(5, 5, 5, '2024-12-22'),
(6, 6, 6, '2024-12-23'),
(7, 7, 4, '2024-12-24'),
(8, 8, 5, '2024-12-25'),
(9, 9, 3, '2024-12-26'),
(10, 10, 6, '2024-12-27');


INSERT INTO TeacherLeave (TeacherID, Date, LeaveType, Emergency) VALUES
(1, '2024-12-18', 'Sick', TRUE),
(2, '2024-12-19', 'Casual', FALSE),
(3, '2024-12-20', 'Paid', FALSE),
(4, '2024-12-21', 'Emergency', TRUE),
(5, '2024-12-22', 'Sick', TRUE),
(6, '2024-12-23', 'Casual', FALSE),
(7, '2024-12-24', 'Paid', FALSE),
(8, '2024-12-25', 'Emergency', TRUE),
(9, '2024-12-26', 'Sick', TRUE),
(10, '2024-12-27', 'Casual', FALSE);


INSERT INTO MaidLeave (MaidID, Date, Emergency, LeaveType) VALUES
(1, '2024-12-18', TRUE, 'Sick'),
(2, '2024-12-19', FALSE, 'Casual'),
(3, '2024-12-20', TRUE, 'Paid'),
(4, '2024-12-21', FALSE, 'Emergency'),
(5, '2024-12-22', TRUE, 'Sick'),
(6, '2024-12-23', FALSE, 'Casual'),
(7, '2024-12-24', TRUE, 'Paid'),
(8, '2024-12-25', FALSE, 'Emergency'),
(9, '2024-12-26', TRUE, 'Sick'),
(10, '2024-12-27', FALSE, 'Casual');


INSERT INTO ReceptionistLeave (MaidID, Date, Emergency) VALUES
(1, '2024-12-18', TRUE),
(2, '2024-12-19', FALSE),
(3, '2024-12-20', TRUE),
(4, '2024-12-21', FALSE),
(5, '2024-12-22', TRUE),
(6, '2024-12-23', FALSE),
(7, '2024-12-24', TRUE),
(8, '2024-12-25', FALSE),
(9, '2024-12-26', TRUE),
(10, '2024-12-27', FALSE);


INSERT INTO Item (Name) VALUES
('Pencil'),
('Notebook'),
('Eraser'),
('Crayon'),
('Backpack'),
('Lunchbox'),
('Water Bottle'),
('Marker'),
('Glue Stick'),
('Scissors');

INSERT INTO Request (ItemID, WorkID, Quanttity) VALUES
(1, 1, 10),
(2, 2, 5),
(3, 3, 8),
(4, 4, 12),
(5, 5, 6),
(6, 6, 4),
(7, 7, 15),
(8, 8, 3),
(9, 9, 9),
(10, 10, 7);


INSERT INTO CheckList (RequestID, ChildID, Provided) VALUES
(1, 1, TRUE),
(2, 2, FALSE),
(3, 3, TRUE),
(4, 4, TRUE),
(5, 5, FALSE),
(6, 6, TRUE),
(7, 7, TRUE),
(8, 8, FALSE),
(9, 9, TRUE),
(10, 10, FALSE);


INSERT INTO Holiday (Date, Details) VALUES
('2024-12-18', 'Christmas Celebration'),
('2024-12-19', 'Winter Break'),
('2024-12-20', 'Teacher Conference Day'),
('2024-12-21', 'School Closed for Holiday'),
('2024-12-22', 'Winter Festival'),
('2024-12-23', 'Holiday Assembly'),
('2024-12-24', 'Christmas Eve'),
('2024-12-25', 'Christmas Day'),
('2024-12-26', 'Boxing Day'),
('2024-12-27', 'Holiday Recess');


INSERT INTO MeetingTimes (Date, Time, Scheduled) VALUES
('2024-12-18', '10:00:00', TRUE),
('2024-12-19', '11:30:00', FALSE),
('2024-12-20', '09:45:00', TRUE),
('2024-12-21', '14:00:00', FALSE),
('2024-12-22', '15:00:00', TRUE),
('2024-12-23', '08:00:00', TRUE),
('2024-12-24', '10:30:00', FALSE),
('2024-12-25', '13:15:00', TRUE),
('2024-12-26', '09:00:00', FALSE),
('2024-12-27', '16:00:00', TRUE);


INSERT INTO Chat (SenderID, RecieverID, Message, ImageURL, ChildID) VALUES
(1, 2, 'Hello, how are you?', 'https://example.com/image1.jpg', 1),
(2, 3, 'I will be late today.', 'https://example.com/image2.jpg', 2),
(3, 4, 'Can you send the documents?', 'https://example.com/image3.jpg', 3),
(4, 5, 'Meeting rescheduled for tomorrow.', 'https://example.com/image4.jpg', 4),
(5, 6, 'Reminder for tomorrow’s exam.', 'https://example.com/image5.jpg', 5),
(6, 7, 'Received your message, thanks!', 'https://example.com/image6.jpg', 6),
(7, 8, 'Can we discuss after class?', 'https://example.com/image7.jpg', 7),
(8, 9, 'I have completed the assignment.', 'https://example.com/image8.jpg', 8),
(9, 10, 'Let me know if you need help.', 'https://example.com/image9.jpg', 9),
(10, 1, 'Good job on the project.', 'https://example.com/image10.jpg', 10);


INSERT INTO Payment (DateTime, Amount, PayerID, Mode) VALUES
('2024-12-18 09:00:00', 100.00, 1, 'Cash'),
('2024-12-19 10:30:00', 150.50, 2, 'Bank Transfer'),
('2024-12-20 12:00:00', 200.00, 3, 'Credit Card'),
('2024-12-21 13:15:00', 180.00, 4, 'Cash'),
('2024-12-22 14:00:00', 250.75, 5, 'Bank Transfer'),
('2024-12-23 15:30:00', 175.00, 6, 'Cash'),
('2024-12-24 16:00:00', 220.00, 7, 'Credit Card'),
('2024-12-25 17:00:00', 160.00, 8, 'Bank Transfer'),
('2024-12-26 18:00:00', 190.00, 9, 'Cash'),
('2024-12-27 19:30:00', 210.25, 10, 'Credit Card');


INSERT INTO Refund (PaymentID, Reason, Mode) VALUES
(1, 'Overpayment', 'Cash'),
(2, 'Duplicate payment', 'Bank Transfer'),
(3, 'Wrong amount charged', 'Credit Card'),
(4, 'Refund request by parent', 'Cash'),
(5, 'Event cancellation', 'Bank Transfer'),
(6, 'Refund after course adjustment', 'Cash'),
(7, 'Billing error', 'Credit Card'),
(8, 'Extra charges not applicable', 'Bank Transfer'),
(9, 'Unsuccessful transaction', 'Cash'),
(10, 'Excess payment adjustment', 'Credit Card');


INSERT INTO SalaryPayment (UserID, Date, Bonus, Deductions, Mode) VALUES
(1, '2024-12-18', 100.00, 20.00, 'Cash'),
(2, '2024-12-19', 150.00, 10.00, 'Bank Transfer'),
(3, '2024-12-20', 200.00, 30.00, 'Credit Card'),
(4, '2024-12-21', 180.00, 15.00, 'Cash'),
(5, '2024-12-22', 250.00, 25.00, 'Bank Transfer'),
(6, '2024-12-23', 175.00, 5.00, 'Cash'),
(7, '2024-12-24', 220.00, 10.00, 'Credit Card'),
(8, '2024-12-25', 160.00, 20.00, 'Bank Transfer'),
(9, '2024-12-26', 190.00, 15.00, 'Cash'),
(10, '2024-12-27', 210.00, 25.00, 'Credit Card');



INSERT INTO Video (VideoURL, VideoImage) VALUES
('https://example.com/video1.mp4', 'https://example.com/video1.jpg'),
('https://example.com/video2.mp4', 'https://example.com/video2.jpg'),
('https://example.com/video3.mp4', 'https://example.com/video3.jpg'),
('https://example.com/video4.mp4', 'https://example.com/video4.jpg'),
('https://example.com/video5.mp4', 'https://example.com/video5.jpg'),
('https://example.com/video6.mp4', 'https://example.com/video6.jpg'),
('https://example.com/video7.mp4', 'https://example.com/video7.jpg'),
('https://example.com/video8.mp4', 'https://example.com/video8.jpg'),
('https://example.com/video9.mp4', 'https://example.com/video9.jpg'),
('https://example.com/video10.mp4', 'https://example.com/video10.jpg');


INSERT INTO VideoWhishlist (VideoID, Date, Time, Reminder) VALUES
(1, '2024-12-18', '09:00:00', TRUE),
(2, '2024-12-19', '10:00:00', FALSE),
(3, '2024-12-20', '11:00:00', TRUE),
(4, '2024-12-21', '12:00:00', FALSE),
(5, '2024-12-22', '13:00:00', TRUE),
(6, '2024-12-23', '14:00:00', TRUE),
(7, '2024-12-24', '15:00:00', FALSE),
(8, '2024-12-25', '16:00:00', TRUE),
(9, '2024-12-26', '17:00:00', FALSE),
(10, '2024-12-27', '18:00:00', TRUE);


INSERT INTO VideoHistory (VideoID, Date, Time, Progress) VALUES
(1, '2024-12-18', '09:00:00', 50),
(2, '2024-12-19', '10:00:00', 30),
(3, '2024-12-20', '11:00:00', 70),
(4, '2024-12-21', '12:00:00', 90),
(5, '2024-12-22', '13:00:00', 60),
(6, '2024-12-23', '14:00:00', 80),
(7, '2024-12-24', '15:00:00', 40),
(8, '2024-12-25', '16:00:00', 20),
(9, '2024-12-26', '17:00:00', 10),
(10, '2024-12-27', '18:00:00', 100);


INSERT INTO Tasks (VideoID, TeacherID, Deadline) VALUES
(1, 1, '2024-12-19'),
(2, 2, '2024-12-20'),
(3, 3, '2024-12-21'),
(4, 4, '2024-12-22'),
(5, 5, '2024-12-23'),
(6, 6, '2024-12-24'),
(7, 7, '2024-12-25'),
(8, 8, '2024-12-26'),
(9, 9, '2024-12-27'),
(10, 10, '2024-12-28');
>>>>>>> 7ed75b406d6e64a2c131a9d228d6a0e71033a8ca

-- Archive Tables to Store deleted rows in case of a emergency 

CREATE TABLE Parent_Archive (
    ArchiveID INT NOT NULL AUTO_INCREMENT,
    UserID INT NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Gender ENUM('M', 'F') NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    Date_Deleted DATETIME NOT NULL,
    PRIMARY KEY (ArchiveID)
);

CREATE TABLE Child_Archive (
    ArchiveID INT NOT NULL AUTO_INCREMENT,
    ChildID INT NOT NULL,
    ParentID INT NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    DOB DATE NOT NULL,
    Relation VARCHAR(30) NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Allergies VARCHAR(255),
    Gender ENUM('M', 'F') NOT NULL,
    PackageID INT,
    Date_Deleted DATETIME NOT NULL,
    PRIMARY KEY (ArchiveID)
);

CREATE TABLE Payment_Archive (
    ArchiveID INT NOT NULL AUTO_INCREMENT,
    PaymentID INT NOT NULL,
    DateTime DATETIME NOT NULL,
    Amount DECIMAL(10, 2) NOT NULL,
    PayerID INT NOT NULL,
    Mode ENUM('Cash', 'Bank Transfer', 'Credit Card') NOT NULL DEFAULT 'Cash',
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (ArchiveID)
);

CREATE TABLE Refund_Archive (
    ArchiveID INT NOT NULL AUTO_INCREMENT,
    RefundID INT NOT NULL,
    PaymentID INT NOT NULL,
    Reason VARCHAR(100) NOT NULL,
    Mode ENUM('Cash', 'Bank Transfer', 'Credit Card') NOT NULL DEFAULT 'Cash',
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (ArchiveID)
);

CREATE TABLE SalaryPayment_Archive (
    ArchiveID INT NOT NULL AUTO_INCREMENT,
    PaymentID INT NOT NULL,
    UserID INT NOT NULL,
    Salary DECIMAL(10, 2) NOT NULL,
    Date DATE NOT NULL,
    Bonus DECIMAL(10, 2) DEFAULT 0,
    Deductions DECIMAL(10, 2) DEFAULT 0,
    Mode ENUM('Cash', 'Bank Transfer', 'Credit Card') NOT NULL DEFAULT 'Cash',
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (ArchiveID)
);

CREATE TABLE Teacher_Archive (
    ArchiveID INT NOT NULL AUTO_INCREMENT,
    TeacherID INT NOT NULL,
    UserID INT NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Gender ENUM('M', 'F') NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    AgeGroup INT NOT NULL,
    Subject VARCHAR(30) NOT NULL,
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (ArchiveID)
);

CREATE TABLE Maid_Archive (
    ArchiveID INT NOT NULL AUTO_INCREMENT,
    MaidID INT NOT NULL,
    UserID INT NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    AgeGroup INT NOT NULL,
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (ArchiveID)
);

CREATE TABLE Receptionist_Archive (
    ArchiveID INT NOT NULL AUTO_INCREMENT,
    ReceptionistID INT NOT NULL,
    UserID INT NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Phone_Number VARCHAR(12) NOT NULL,
    Address VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Gender ENUM('M', 'F') NOT NULL,
    Language VARCHAR(30) NOT NULL,
    Last_Seen DATETIME NOT NULL,
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (ArchiveID)
);

CREATE TABLE Message_Archive (
    ArchiveID INT AUTO_INCREMENT PRIMARY KEY,
    ChatID INT NOT NULL AUTO_INCREMENT,
    SenderID INT NOT NULL,
    RecieverID INT NOT NULL,
    Message VARCHAR(200),
    ImageURL VARCHAR(200),
    PRIMARY KEY ChatID,
    ChildID INT NOT NULL,
);

CREATE TABLE Pickup_Archive (
    PickupID INT NOT NULL,
    ChildID INT NOT NULL,
    Time TIME NOT NULL,
    Person VARCHAR(10) NOT NULL,
    OTP INT(6) NOT NULL,
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (PickupID),
    FOREIGN KEY (ChildID) REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE PickupPerson_Archive (
    PersonID INT NOT NULL,
    Name VARCHAR(100) NOT NULL,
    NID VARCHAR(12) NOT NULL,
    ChildID INT NOT NULL,
    ImageURL VARCHAR(200) NOT NULL,
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (PersonID)
);

CREATE TABLE Attendance_Archive (
    AttendanceID INT NOT NULL,
    ChildID INT NOT NULL,
    Start_Date DATE NOT NULL,
    Start_Time TIME NOT NULL,
    End_Date DATE,
    End_Time TIME,
    Status VARCHAR(100) NOT NULL,
    Date_Archived DATETIME NOT NULL,
    PRIMARY KEY (AttendanceID),
    FOREIGN KEY (ChildID) REFERENCES Child(ChildID)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

CREATE TABLE ChildMedical_Archive (
    MedicalID INT NOT NULL,
    ChildID INT NOT NULL,
    DoctorID INT NOT NULL,
    Diagnosis VARCHAR(100),
    DateTime DATETIME NOT NULL,
    Notes VARCHAR(200),
    Date_Archived DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (MedicalID),
);

CREATE TABLE Emergency_Archive (
    EmergencyID INT NOT NULL,
    ChildID INT NOT NULL,
    Description VARCHAR(200) NOT NULL,
    DateTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    Informed BOOLEAN NOT NULL,
    AssigneeID INT NOT NULL,
    Date_Archived DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (EmergencyID),
);

-- Trigger functions to managed deleted records

CREATE TRIGGER after_parent_delete
AFTER DELETE ON Parent
FOR EACH ROW
BEGIN
    INSERT INTO Parent_Archive (UserID, Last_Name, First_Name, Phone_Number, Address, NID, Email, Gender, Language, Last_Seen, Date_Deleted)
    VALUES (OLD.UserID, OLD.Last_Name, OLD.First_Name, OLD.Phone_Number, OLD.Address, OLD.NID, OLD.Email, OLD.Gender, OLD.Language, OLD.Last_Seen, NOW());
END;

CREATE TRIGGER after_child_delete
AFTER DELETE ON Child
FOR EACH ROW
BEGIN
    INSERT INTO Child_Archive (ChildID, ParentID, First_Name, Last_Name, DOB, Relation, Language, Allergies, Gender, PackageID, Date_Deleted)
    VALUES (OLD.ChildID, OLD.UserID, OLD.First_Name, OLD.Last_Name, OLD.DOB, OLD.Relation, OLD.Language, OLD.Allergies, OLD.Gender, OLD.PackageID, NOW());
END;

CREATE TRIGGER after_teacher_delete
AFTER DELETE ON Teacher
FOR EACH ROW
BEGIN
    INSERT INTO Teacher_Archive (TeacherID, UserID, Last_Name, First_Name, Phone_Number, Address, NID, Email, Gender, Language, Last_Seen, AgeGroup, Subject, Date_Archived)
    VALUES (OLD.TeacherID, OLD.UserID, OLD.Last_Name, OLD.First_Name, OLD.Phone_Number, OLD.Address, OLD.NID, OLD.Email, OLD.Gender, OLD.Language, OLD.Last_Seen, OLD.AgeGroup, OLD.Subject, NOW());
END;

CREATE TRIGGER after_maid_delete
AFTER DELETE ON Maid
FOR EACH ROW
BEGIN
    INSERT INTO Maid_Archive (MaidID, UserID, Last_Name, First_Name, Phone_Number, Address, NID, Language, Last_Seen, AgeGroup, Date_Archived)
    VALUES (OLD.MaidID, OLD.UserID, OLD.Last_Name, OLD.First_Name, OLD.Phone_Number, OLD.Address, OLD.NID, OLD.Language, OLD.Last_Seen, OLD.AgeGroup, NOW());
END;

CREATE TRIGGER after_receptionist_delete
AFTER DELETE ON Receptionist
FOR EACH ROW
BEGIN
    INSERT INTO Receptionist_Archive (ReceptionistID, UserID, Last_Name, First_Name, Phone_Number, Address, NID, Email, Gender, Language, Last_Seen, Date_Archived)
    VALUES (OLD.ReceptionistID, OLD.UserID, OLD.Last_Name, OLD.First_Name, OLD.Phone_Number, OLD.Address, OLD.NID, OLD.Email, OLD.Gender, OLD.Language, OLD.Last_Seen, NOW());
END;

CREATE TRIGGER after_payment_delete
AFTER DELETE ON Payment
FOR EACH ROW
BEGIN
    INSERT INTO Payment_Archive (PaymentID, DateTime, Amount, PayerID, Mode, Date_Archived)
    VALUES (OLD.PaymentID, OLD.DateTime, OLD.Amount, OLD.PayerID, OLD.Mode, NOW());
END;

CREATE TRIGGER after_refund_delete
AFTER DELETE ON Refund
FOR EACH ROW
BEGIN
    INSERT INTO Refund_Archive (RefundID, PaymentID, Reason, Mode, Date_Archived)
    VALUES (OLD.RefundID, OLD.PaymentID, OLD.Reason, OLD.Mode, NOW());
END;

CREATE TRIGGER after_salarypayment_delete
AFTER DELETE ON SalaryPayment
FOR EACH ROW
BEGIN
    INSERT INTO SalaryPayment_Archive (PaymentID, UserID, Salary, Date, Bonus, Deductions, Mode, Date_Archived)
    VALUES (OLD.PaymentID, OLD.UserID, OLD.Salary, OLD.Date, OLD.Bonus, OLD.Deductions, OLD.Mode, NOW());
END;

CREATE TRIGGER after_message_delete
AFTER DELETE ON Chat
FOR EACH ROW
BEGIN
    INSERT INTO Message_Archive (ChatID, SenderID, ReceiverID,ChildID Message, ImageURL, DeletedAt)
    VALUES (OLD.ChatID, OLD.SenderID, OLD.ReceiverID, OLD.ChildID OLD.Message, OLD.ImageURL, NOW());
END;

CREATE TRIGGER after_attendance_delete
AFTER DELETE ON Attendance
FOR EACH ROW
BEGIN
    -- Insert the deleted record into Attendance_Archive
    INSERT INTO Attendance_Archive (AttendanceID, ChildID, Start_Date, Start_Time, End_Date, End_Time, Status, Date_Archived)
    VALUES (OLD.AttendanceID, OLD.ChildID, OLD.Start_Date, OLD.Start_Time, OLD.End_Date, OLD.End_Time, OLD.Status, NOW());
END;

CREATE TRIGGER after_childmedical_delete
AFTER DELETE ON ChildMedical
FOR EACH ROW
BEGIN
    INSERT INTO ChildMedical_Archive (MedicalID, ChildID, DoctorID, Diagnosis, DateTime, Notes, Date_Archived)
    VALUES (OLD.MedicalID, OLD.ChildID, OLD.DoctorID, OLD.Diagnosis, OLD.DateTime, OLD.Notes, NOW());
END;

CREATE TRIGGER after_emergency_delete
AFTER DELETE ON Emergency
FOR EACH ROW
BEGIN
    INSERT INTO Emergency_Archive (EmergencyID, ChildID, Description, DateTime, Informed, AssigneeID, Date_Archived)
    VALUES (OLD.EmergencyID, OLD.ChildID, OLD.Description, OLD.DateTime, OLD.Informed, OLD.AssigneeID, NOW());
END;

CREATE PROCEDURE ArchivePickupPerson()
BEGIN

    INSERT INTO PickupPerson_Archive (PersonID, Name, NID, ChildID, ImageURL, Date_Archived)
    SELECT PersonID, Name, NID, ChildID, ImageURL, NOW()
    FROM PickupPerson;

    DELETE FROM PickupPerson;
END

CREATE PROCEDURE ArchivePickup()
BEGIN
    INSERT INTO Pickup_Archive (PickupID, ChildID, Time, Person, OTP, Date_Archived)
    SELECT PickupID, ChildID, Time, Person, OTP, NOW()
    FROM Pickup;
    
    DELETE FROM Pickup;
END

CREATE EVENT ResetPickupPersonTable
    ON SCHEDULE EVERY 1 DAY
    STARTS '2024-12-10 00:00:00'
    DO
    CALL ArchivePickupPerson()
;

CREATE EVENT ResetPickup
    ON SCHEDULE EVERY 1 DAY
    STARTS '2024-12-10 00:00:00'
    DO
    CALL ArchivePickupPerson()
;


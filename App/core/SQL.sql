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
    Name NOT NULL,
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
    PRIMARY KEY( ScheduleID),
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
    PRIMARY KEY ScheduleID,
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
    PRIMARY KEY RequsetID,
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
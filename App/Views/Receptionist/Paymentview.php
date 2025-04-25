<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=CSS?>/Receptionist/PaymentDashboard.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Receptionist/maincss.css?v=<?= time() ?>">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="side_bar">
            <div class="userblock">
                <div class="photo">
                    <img alt="User profile picture" height="50" src="<?=ROOT?>/assets/images/profilePic.png" width="50"/>
                </div>
                <div class="username">
                    <h3>
                        Kayla Wood
                       </h3>
                       <p>
                        Receptionist
                       </p>
                </div>
            </div>
            <div class="directions">
                <div class="direction-items">
                <a href="<?=ROOT?>/Receptionist/Home"><div class="dashboard">
                    
                    <i class="fas fa-tachometer-alt">
                    </i>
                    <span>&nbsp;&nbsp; Dashboard</span>
                  
                </div> </a>
                 <a href="<?=ROOT?>/Receptionist/Attendance"><div class="mark_attendance">
                    <i class="fas fa-check-circle">
                    </i>
                   <span>&nbsp;&nbsp; Attendance</span>
                    
                 </div></a>
                 
                 <a href="<?=ROOT?>/Receptionist/Payment"><div class="payment">
                    <i class="fas fa-money-bill-wave">
                    </i>
                    <span>&nbsp;&nbsp; Payment</span>
                </div></a>
                <a href="<?=ROOT?>/Receptionist/Visitor"><div class="visitor">
                    <i class="fas fa-users">
                    </i>
                    <span>&nbsp;&nbsp; visitort</span>
                </div></a>
                <a href="<?=ROOT?>/Receptionist/Leaves"><div class="leaves">
                    <i class="fas fa-calendar-check">
                    </i>
                   <span>&nbsp;&nbsp; Leaves</span>
                 </div></a>
                <hr>
                <div class="help">
                    <i class="fas fa-question-circle">
                    </i>
                    <span>&nbsp;&nbsp; Help</span>
                </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <div class="header-title">
                    <h2>
                        Payment
                       </h2>
                       <p>
                        12/08/2025
                       </p>
                </div>
                <div class="field_input">
                    <i class="fas fa-search">
                    </i>
                  <input placeholder="Search" type="text"/>
                </div>
                <div class="subscription">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="photo2">
                    <img alt="User profile picture" height="50" src="<?=ROOT?>/assets/images/profilePic.png" width="50"/>
                </div>
            </div>
            <div class="detailed_content">
                        <div class="make_background">
                          
                          <div class="payment_table">
                            <div class="table_header">
                                <div class="topic"><span>Payment Details</span></div>
                                
                                <a href="<?=ROOT?>/Receptionist/Payform"><button class="paymentbutton">
                                    Make &nbsp;Payment
                                </button></a>
                            </div>
                            <hr>
                            <div class="table_filters">
                                <div class="search_line">
                                    <div class="field_input2">
                                        <i class="fas fa-search">
                                        </i>
                                      <input placeholder="Search Index......" type="text"/>
                                    </div>
                                 </div>
                                 <div class="date_entry">
                                    <input type="date"/>
                                 </div>
                                 <div class="select_age">
                                    <div class="select-agegroup">
                                        <div class="select">
                                            <span>AGE GROUP</span>
                                            <i class="fas fa-angle-down"></i>
                                        </div>
                                        <div class="option-list">
                                            <div class="option">AGE 2-5</div>
                                            <div class="option">AGE 6-9</div>
                                            <div class="option">AGE 10-13</div>
                                        </div>
                                    </div>
                                 </div>
                            </div>
                            <div class="table_topics">
                                <div class="head reg_id">
                                    <i class="fas fa-id-card" title="Registration ID"></i>
                                    <span>Registration No</span> 
                                </div>
                                <div class="head name">
                                    <i class="fas fa-user" title="Child Name"></i>
                                    <span>Name</span>
                                </div>
                                <div class="head transaction_id">
                                    <i class="fas fa-receipt" title="Transaction ID"></i>
                                    <span>Transaction ID</span>
                                </div>
                                <div class="head amount">
                                    <i class="fas fa-money-bill"></i>
                                    <span>Amount</span>
                                </div>
                                <div class="head date">
                                    <i class="fas fa-calendar-alt" title="Date"></i>
                                    <span>Date</span>
                                </div>
                                <div class="head action">
                                    <i class="fas fa-user" title="Actions"></i>
                                    <span>Action</span>
                                </div>
                            </div>
                            <div class="table_columns">
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="table_column">
                                    <div class="colum reg_id">
                                        <span>#001</span> 
                                    </div>
                                    <div class="colum name">
                                        <img alt="card icon" height="30px" src="./assets/profilePic-1.png">
                                        <span>Thilina Perera</span>
                                    </div>
                                    <div class="colum transaction_id">
                                        <span>DC-TXN-202411</span>
                                    </div>
                                    <div class="colum amount">
                                        <span>$70</span>
                                    </div>
                                    <div class="colum date">
                                        <span>24-11-2024</span>
                                    </div>
                                    <div class="colum action">
                                        <button><i class="fas fa-edit"></i>Edit</button>
                                        <button><i class="fas fa-trash"></i>Delete</button>
                                    </div>
                                </div>
                                <hr>
                            </div>
                    </div>
                </div>
            </div>
        </div>
            
        </div>
    </div>
    <script src="<?=JS?>/Receptionist/receptionist_attendance.js"></script>
    <script src="<?=JS?>/Receptionist/test.js"></script>
</body>
</html>
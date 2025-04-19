<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usage Reports - Inventory System</title>
    <link rel="stylesheet" href="./Base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h3>Inventory System</h3>
            <p>Manager Portal</p>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="./Manager-activity.html"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
                <li><a href="./Manager-inventory.html"><i class="fas fa-boxes"></i> <span>Inventory</span></a></li>
                <li><a href="./Manager-Usagereport.html" class="active"><i class="fas fa-chart-bar"></i> <span>Usage Reports</span></a></li>
                <li><a href="manager-restocking.html"><i class="fas fa-truck-loading"></i> <span>Restocking</span></a></li>
                <li><a href="audit-log.html"><i class="fas fa-history"></i> <span>Audit Log</span></a></li>
                <li><a href="user-profile.html"><i class="fas fa-user-cog"></i> <span>Profile</span></a></li>
                <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header">
            <h1>Inventory Usage Reports</h1>
            <div class="user-info">
                <img src="/api/placeholder/40/40" alt="User Avatar">
                <div class="user-info-text">
                    <h4>John Smith</h4>
                    <p>Inventory Manager</p>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <div class="stat-info">
                    <h3>156</h3>
                    <p>Items Issued This Month</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-undo-alt"></i>
                </div>
                <div class="stat-info">
                    <h3>94</h3>
                    <p>Items Returned This Month</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <div class="stat-info">
                    <h3>28</h3>
                    <p>Active Users</p>
                </div>
            </div>
        </div>

        <!-- Usage Report Filters -->
        <div class="card">
            <div class="card-header">
                <h2>Usage Report Filters</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="dateFrom">From Date</label>
                                <input type="date" id="dateFrom" class="form-control" value="2025-02-01">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="dateTo">To Date</label>
                                <input type="date" id="dateTo" class="form-control" value="2025-03-01">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="userFilter">User</label>
                                <select id="userFilter" class="form-control">
                                    <option value="">All Users</option>
                                    <option>Sarah Johnson</option>
                                    <option>Michael Brown</option>
                                    <option>Robert Davis</option>
                                    <option>Lisa Wong</option>
                                    <option>James Wilson</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="categoryFilter">Category</label>
                                <select id="categoryFilter" class="form-control">
                                    <option value="">All Categories</option>
                                    <option>Office Supplies</option>
                                    <option>Classroom Supplies</option>
                                    <option>Electronics</option>
                                    <option>Furniture</option>
                                    <option>Cleaning Supplies</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div style="display: flex; justify-content: flex-end;">
                        <button type="submit" class="btn btn-primary">Generate Report</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Usage Report Results -->
        <div class="card">
            <div class="card-header">
                <h2>Usage Report</h2>
                <div>
                    <button class="btn btn-secondary"><i class="fas fa-file-excel"></i> Export to Excel</button>
                    <button class="btn btn-secondary"><i class="fas fa-print"></i> Print</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Item</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>User</th>
                                <th>Role</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mar 01, 2025</td>
                                <td>Whiteboard Markers</td>
                                <td>Classroom Supplies</td>
                                <td>10</td>
                                <td>Issued</td>
                                <td>Sarah Johnson</td>
                                <td>Teacher</td>
                                <td>For Math Department</td>
                            </tr>
                            <tr>
                                <td>Feb 28, 2025</td>
                                <td>Science Lab Kit</td>
                                <td>Classroom Supplies</td>
                                <td>5</td>
                                <td>Returned</td>
                                <td>Michael Brown</td>
                                <td>Teacher</td>
                                <td>After Science Fair</td>
                            </tr>
                            <tr>
                                <td>Feb 28, 2025</td>
                                <td>Printing Paper A4</td>
                                <td>Office Supplies</td>
                                <td>50</td>
                                <td>Restocked</td>
                                <td>Lisa Wong</td>
                                <td>Receptionist</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Feb 27, 2025</td>
                                <td>Projector</td>
                                <td>Electronics</td>
                                <td>1</td>
                                <td>Issued</td>
                                <td>Robert Davis</td>
                                <td>Teacher</td>
                                <td>For Staff Meeting</td>
                            </tr>
                            <tr>
                                <td>Feb 26, 2025</td>
                                <td>Blue Pens</td>
                                <td>Office Supplies</td>
                                <td>20</td>
                                <td>Issued</td>
                                <td>James Wilson</td>
                                <td>Teacher</td>
                                <td>For English Department</td>
                            </tr>
                            <tr>
                                <td>Feb 25, 2025</td>
                                <td>HDMI Cables</td>
                                <td>Electronics</td>
                                <td>3</td>
                                <td>Issued</td>
                                <td>Sarah Johnson</td>
                                <td>Teacher</td>
                                <td>For Computer Lab</td>
                            </tr>
                            <tr>
                                <td>Feb 24, 2025</td>
                                <td>Science Lab Kit</td>
                                <td>Classroom Supplies</td>
                                <td>5</td>
                                <td>Issued</td>
                                <td>Michael Brown</td>
                                <td>Teacher</td>
                                <td>For Science Fair</td>
                            </tr>
                            <tr>
                                <td>Feb 22, 2025</td>
                                <td>Scissors</td>
                                <td>Office Supplies</td>
                                <td>15</td>
                                <td>Issued</td>
                                <td>Lisa Wong</td>
                                <td>Receptionist</td>
                                <td>For Art Project</td>
                            </tr>
                            <tr>
                                <td>Feb 20, 2025</td>
                                <td>A4 Paper Reams</td>
                                <td>Office Supplies</td>
                                <td>20</td>
                                <td>Restocked</td>
                                <td>Lisa Wong</td>
                                <td>Receptionist</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Feb 18, 2025</td>
                                <td>Projector</td>
                                <td>Electronics</td>
                                <td>1</td>
                                <td>Returned</td>
                                <td>Robert Davis</td>
                                <td>Teacher</td>
                                <td>After Presentation</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>

        <!-- Usage Summary -->
        <div class="card">
            <div class="card-header">
                <h2>Usage Summary</h2>
            </div>
            <div class="card-body">
                <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                    <!-- Top Users -->
                    <div style="flex: 1; min-width: 300px;">
                        <h3 style="margin-bottom: 15px; color: var(--primary-color);">Top Users</h3>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Items Issued</th>
                                        <th>Items Returned</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Sarah Johnson</td>
                                        <td>45</td>
                                        <td>32</td>
                                    </tr>
                                    <tr>
                                        <td>Michael Brown</td>
                                        <td>38</td>
                                        <td>29</td>
                                    </tr>
                                    <tr>
                                        <td>Robert Davis</td>
                                        <td>27</td>
                                        <td>19</td>
                                    </tr>
                                    <tr>
                                        <td>James Wilson</td>
                                        <td>25</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>Lisa Wong</td>
                                        <td>21</td>
                                        <td>0</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Most Used Items -->
                    <div style="flex: 1; min-width: 300px;">
                        <h3 style="margin-bottom: 15px; color: var(--primary-color);">Most Used Items</h3>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Category</th>
                                        <th>Times Issued</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Whiteboard Markers</td>
                                        <td>Classroom Supplies</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <td>Blue Pens</td>
                                        <td>Office Supplies</td>
                                        <td>35</td>
                                    </tr>
                                    <tr>
                                        <td>A4 Paper Reams</td>
                                        <td>Office Supplies</td>
                                        <td>30</td>
                                    </tr>
                                    <tr>
                                        <td>Science Lab Kit</td>
                                        <td>Classroom Supplies</td>
                                        <td>25</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <tr>
                                                <td>Projector</td>
                                                <td>Electronics</td>
                                                <td>18</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        
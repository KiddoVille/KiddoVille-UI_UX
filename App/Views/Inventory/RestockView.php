<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restocking - Inventory System</title>
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
                <li><a href="./Manager-Usagereport.html"><i class="fas fa-chart-bar"></i> <span>Usage Reports</span></a></li>
                <li><a href="./Manager-restock.html" class="active"><i class="fas fa-truck-loading"></i> <span>Restocking</span></a></li>
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
            <h1>Inventory Restocking</h1>
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
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="stat-info">
                    <h3>12</h3>
                    <p>Items Low in Stock</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-times-circle"></i>
                </div>
                <div class="stat-info">
                    <h3>5</h3>
                    <p>Out of Stock Items</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-truck"></i>
                </div>
                <div class="stat-info">
                    <h3>3</h3>
                    <p>Pending Orders</p>
                </div>
            </div>
        </div>

        <!-- Alert for Critical Items -->
        <div class="alert alert-warning">
            <strong>Attention!</strong> There are 5 items that are out of stock and require immediate attention.
        </div>

        <!-- Low Stock Items Table -->
        <div class="card">
            <div class="card-header">
                <h2>Low Stock Items</h2>
                <div>
                    <button class="btn btn-secondary"><i class="fas fa-file-excel"></i> Export List</button>
                </div>
            </div>
            <div class="card-body">
                <div class="search-bar">
                    <input type="text" placeholder="Search items...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Item Name</th>
                                <th>Category</th>
                                <th>Current Stock</th>
                                <th>Min. Required</th>
                                <th>Status</th>
                                <th>Last Restocked</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ITM001</td>
                                <td>Whiteboard Markers</td>
                                <td>Classroom Supplies</td>
                                <td>0</td>
                                <td>50</td>
                                <td><span class="status status-out">Out of Stock</span></td>
                                <td>Jan 15, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM001', 'Whiteboard Markers')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM008</td>
                                <td>Blue Pens</td>
                                <td>Office Supplies</td>
                                <td>5</td>
                                <td>30</td>
                                <td><span class="status status-low">Low Stock</span></td>
                                <td>Feb 10, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM008', 'Blue Pens')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM012</td>
                                <td>A4 Paper Reams</td>
                                <td>Office Supplies</td>
                                <td>0</td>
                                <td>20</td>
                                <td><span class="status status-out">Out of Stock</span></td>
                                <td>Feb 20, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM012', 'A4 Paper Reams')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM023</td>
                                <td>Science Lab Kit</td>
                                <td>Classroom Supplies</td>
                                <td>0</td>
                                <td>5</td>
                                <td><span class="status status-out">Out of Stock</span></td>
                                <td>Jan 28, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM023', 'Science Lab Kit')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM034</td>
                                <td>HDMI Cables</td>
                                <td>Electronics</td>
                                <td>2</td>
                                <td>10</td>
                                <td><span class="status status-low">Low Stock</span></td>
                                <td>Feb 15, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM034', 'HDMI Cables')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM045</td>
                                <td>Scissors</td>
                                <td>Office Supplies</td>
                                <td>8</td>
                                <td>25</td>
                                <td><span class="status status-low">Low Stock</span></td>
                                <td>Feb 22, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM045', 'Scissors')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM067</td>
                                <td>Cleaning Spray</td>
                                <td>Cleaning Supplies</td>
                                <td>3</td>
                                <td>15</td>
                                <td><span class="status status-low">Low Stock</span></td>
                                <td>Feb 05, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM067', 'Cleaning Spray')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM078</td>
                                <td>Projector Bulbs</td>
                                <td>Electronics</td>
                                <td>0</td>
                                <td>5</td>
                                <td><span class="status status-out">Out of Stock</span></td>
                                <td>Dec 12, 2024</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM078', 'Projector Bulbs')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM089</td>
                                <td>Dry Erase Erasers</td>
                                <td>Classroom Supplies</td>
                                <td>4</td>
                                <td>15</td>
                                <td><span class="status status-low">Low Stock</span></td>
                                <td>Jan 30, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM089', 'Dry Erase Erasers')">Restock</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ITM092</td>
                                <td>Sticky Notes</td>
                                <td>Office Supplies</td>
                                <td>0</td>
                                <td>20</td>
                                <td><span class="status status-out">Out of Stock</span></td>
                                <td>Jan 25, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-primary" onclick="openRestockModal('ITM092', 'Sticky Notes')">Restock</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>

        <!-- Bulk Restock Form -->
        <div class="card">
            <div class="card-header">
                <h2>Bulk Restock Items</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="supplier">Supplier</label>
                                <select id="supplier" class="form-control" required>
                                    <option value="">Select Supplier</option>
                                    <option>Office Depot</option>
                                    <option>School Supplies Inc.</option>
                                    <option>Electronics Wholesale</option>
                                    <option>Janitorial Supplies Co.</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="orderDate">Order Date</label>
                                <input type="date" id="orderDate" class="form-control" value="2025-03-02" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="expectedDelivery">Expected Delivery</label>
                                <input type="date" id="expectedDelivery" class="form-control" value="2025-03-09" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Select Items to Restock</label>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th>Item Name</th>
                                        <th>Category</th>
                                        <th>Current Stock</th>
                                        <th>Min. Required</th>
                                        <th>Status</th>
                                        <th>Restock Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" name="restock_items[]" value="ITM001"></td>
                                        <td>Whiteboard Markers</td>
                                        <td>Classroom Supplies</td>
                                        <td>0</td>
                                        <td>50</td>
                                        <td><span class="status status-out">Out of Stock</span></td>
                                        <td><input type="number" class="form-control" value="100" min="1"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="restock_items[]" value="ITM012"></td>
                                        <td>A4 Paper Reams</td>
                                        <td>Office Supplies</td>
                                        <td>0</td>
                                        <td>20</td>
                                        <td><span class="status status-out">Out of Stock</span></td>
                                        <td><input type="number" class="form-control" value="40" min="1"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="restock_items[]" value="ITM023"></td>
                                        <td>Science Lab Kit</td>
                                        <td>Classroom Supplies</td>
                                        <td>0</td>
                                        <td>5</td>
                                        <td><span class="status status-out">Out of Stock</span></td>
                                        <td><input type="number" class="form-control" value="10" min="1"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="restock_items[]" value="ITM078"></td>
                                        <td>Projector Bulbs</td>
                                        <td>Electronics</td>
                                        <td>0</td>
                                        <td>5</td>
                                        <td><span class="status status-out">Out of Stock</span></td>
                                        <td><input type="number" class="form-control" value="8" min="1"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" name="restock_items[]" value="ITM092"></td>
                                        <td>Sticky Notes</td>
                                        <td>Office Supplies</td>
                                        <td>0</td>
                                        <td>20</td>
                                        <td><span class="status status-out">Out of Stock</span></td>
                                        <td><input type="number" class="form-control" value="40" min="1"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="notes">Order Notes</label>
                        <textarea id="notes" class="form-control" rows="3" placeholder="Add any special instructions or notes for this order..."></textarea>
                    </div>

                    <div style="display: flex; justify-content: flex-end; gap: 10px;">
                        <button type="button" class="btn btn-secondary">Save as Draft</button>
                        <button type="submit" class="btn btn-primary">Submit Order</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Past Orders -->
        <div class="card">
            <div class="card-header">
                <h2>Recent Restock Orders</h2>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date Ordered</th>
                                <th>Supplier</th>
                                <th>Items</th>
                                <th>Total Cost</th>
                                <th>Status</th>
                                <th>Expected Delivery</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>ORD-2025-056</td>
                                <td>Feb 25, 2025</td>
                                <td>Office Depot</td>
                                <td>5</td>
                                <td>$485.50</td>
                                <td><span class="status status-available">In Transit</span></td>
                                <td>Mar 05, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ORD-2025-051</td>
                                <td>Feb 20, 2025</td>
                                <td>School Supplies Inc.</td>
                                <td>8</td>
                                <td>$720.75</td>
                                <td><span class="status status-available">In Transit</span></td>
                                <td>Mar 03, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary">Details</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ORD-2025-048</td>
                                <td>Feb 18, 2025</td>
                                <td>Electronics Wholesale</td>
                                <td>3</td>
                                <td>$1,250.00</td>
                                <td><span class="status status-available">Delivered</span></td>
                                <td>Feb 28, 2025</td>
                                <td>
                                    <button class="btn btn-sm btn-secondary">Details</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Restock Modal -->
    <div class="modal-backdrop" id="restockModal">
        <div class="modal">
            <div class="modal-header">
                <h3>Restock Item: <span id="modalItemName">Item Name</span></h3>
                <button class="modal-close" onclick="closeRestockModal()">&times;</button>
            </div>
            <div class="modal-body">
                <form id="restockForm">
                    <input type="hidden" id="itemId" value="">
                    <div class="form-group">
                        <label for="restockQuantity">Quantity to Order</label>
                        <input type="number" id="restockQuantity" class="form-control" min="1" value="1" required>
                    </div>
                    <div class="form-group">
                        <label for="modalSupplier">Supplier</label>
                        <select id="modalSupplier" class="form-control" required>
                            <option value="">Select Supplier</option>
                            <option>Office Depot</option>
                            <option>School Supplies Inc.</option>
                            <option>Electronics Wholesale</option>
                            <option>Janitorial Supplies Co.</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="modalOrderDate">Order Date</label>
                                <input type="date" id="modalOrderDate" class="form-control" value="2025-03-02" required>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="modalExpectedDelivery">Expected Delivery</label>
                                <input type="date" id="modalExpectedDelivery" class="form-control" value="2025-03-09" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="modalNotes">Notes</label>
                        <textarea id="modalNotes" class="form-control" rows="2"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeRestockModal()">Cancel</button>
                <button class="btn btn-primary" onclick="submitRestockForm()">Submit Order</button>
            </div>
        </div>
    </div>

    <script>
        // Function to open restock modal
        function openRestockModal(itemId, itemName) {
            document.getElementById('modalItemName').textContent = itemName;
            document.getElementById('itemId').value = itemId;
            document.getElementById('restockModal').style.display = 'flex';
        }

        // Function to close restock modal
        function closeRestockModal() {
            document.getElementById('restockModal').style.display = 'none';
        }

        // Function to submit restock form
        function submitRestockForm() {
            // Here you would normally handle the form submission via AJAX
            // For this demo, we'll just show an alert and close the modal
            alert('Restock order submitted successfully!');
            closeRestockModal();
        }

        // Function to handle select all checkbox
        document.getElementById('selectAll').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('input[name="restock_items[]"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    </script>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restocking - Inventory System</title>
    <link rel="stylesheet" href="<?=CSS?>/Parent/deletepopup.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Parent/Alert.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Inventory.css?v=<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Main Content -->
    <div class="main-content">
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
                <div class="form-row" style="display: flex; flex-direction: row; justify-content: center;">
                        <div class="form-col">
                            <div class="form-group">
                            <label for="orderDate">Category</label>
                                <select class="form-control" id="Category" style="max-width: 150px;">
                                    <option value="All" selected>All Categories</option>
                                    <option value="Stationery">Stationery</option>
                                    <option value="Toys">Toys</option>
                                    <option value="Books">Books</option>
                                    <option value="Cleaning">Cleaning</option>
                                    <option value="Health">Health</option>
                                    <option value="Snacks">Snacks</option>
                                    <option value="Crafts">Crafts</option>
                                    <option value="Clothing">Clothing</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="orderDate">Status</label>
                                <select class="form-control" id="Status" style="max-width: 150px; margin-left: 50px;">
                                    <option value="All">All Status</option>
                                    <option value="Available">Available</option>
                                    <option value="Low Stock">Low Stock</option>
                                    <option value="Out of Stock">Out of Stock</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Select Items to Restock</label>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
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
                                        <td>Projector Bulbs</td>
                                        <td>Electronics</td>
                                        <td>0</td>
                                        <td>5</td>
                                        <td><span class="status status-out">Out of Stock</span></td>
                                        <td><input type="number" class="form-control" value="8" min="1"></td>
                                    </tr>
                                    <tr>
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
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
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
                        <label for="modalNotes">Notes</label>
                        <textarea id="modalNotes" class="form-control" rows="2"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="closeRestockModal()">Cancel</button>
                <button class="btn btn-primary" onclick="submitRestockForm()">Restock</button>
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
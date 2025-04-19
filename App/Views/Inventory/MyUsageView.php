<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Usage Summary - Inventory System</title>
    <link rel="stylesheet" href="<?=CSS?>/Parent/deletepopup.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Parent/Alert.css?v=<?= time() ?>">
    <link rel="stylesheet" href="<?=CSS?>/Inventory.css?v=<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="main-content">

        <!-- Stats -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-box-open"></i>
                </div>
                <div class="stat-info">
                    <h3>14</h3>
                    <p>Items Currently In Use</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-info">
                    <h3>3</h3>
                    <p>Items Due for Return</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-hourglass-half"></i>
                </div>
                <div class="stat-info">
                    <h3>2</h3>
                    <p>Pending Requests</p>
                </div>
            </div>
        </div>

        <!-- Alerts -->
        <div class="card">
            <div class="card-header">
                <h2><i class="fas fa-exclamation-circle"></i> Alerts</h2>
            </div>
            <div class="card-body">
                <div class="alert alert-danger">
                    <strong>Out of Stock:</strong> Your requested item "Graphing Calculators (10)" is currently unavailable.+
                </div>
                <div class="alert alert-warning">
                    <strong>Low Stock Alert:</strong> Whiteboard Markers are running low. Only 8 remaining in inventory.
                </div>
            </div>
        </div>

        <!-- Current Items -->
        <div class="card">
            <div class="card-header">
                <h2>Currently Borrowed Items</h2>
                <button class="btn btn-primary" id="returnItemsBtn"><i class="fas fa-undo-alt"></i> Return Items</button>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th><input type="checkbox" id="selectAll"></th>
                                <th>Item</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Borrowed Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" name="returnItem"></td>
                                <td>Whiteboard Markers</td>
                                <td>Classroom Supplies</td>
                                <td>10</td>
                                <td>Mar 01, 2025</td>
                                <td>May 31, 2025</td>
                                <td><span class="status status-available">Current</span></td>
                                <td>For Math Department</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="returnItem"></td>
                                <td>HDMI Cables</td>
                                <td>Electronics</td>
                                <td>3</td>
                                <td>Feb 25, 2025</td>
                                <td>Mar 10, 2025</td>
                                <td><span class="status status-warning">Due Soon</span></td>
                                <td>For Computer Lab</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox" name="returnItem"></td>
                                <td>Science Lab Kit</td>
                                <td>Classroom Supplies</td>
                                <td>1</td>
                                <td>Feb 15, 2025</td>
                                <td>Mar 03, 2025</td>
                                <td><span class="status status-danger">Overdue</span></td>
                                <td>For Science Demonstration</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Usage History -->
        <div class="card">
            <div class="card-header">
                <h2>Usage History</h2>
            </div>
            <div class="card-body">
                <div class="form-row" style="margin-bottom: 20px;">
                    <div class="form-col">
                        <div class="form-group">
                            <label for="historyDateFrom">From Date</label>
                            <input type="date" id="historyDateFrom" class="form-control" value="2025-01-01">
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="historyDateTo">To Date</label>
                            <input type="date" id="historyDateTo" class="form-control" value="2025-03-01">
                        </div>
                    </div>
                    <div class="form-col">
                        <div class="form-group">
                            <label for="historyStatus">Status</label>
                            <select id="historyStatus" class="form-control">
                                <option value="">All Status</option>
                                <option>Borrowed</option>
                                <option>Returned</option>
                                <option>Requested</option>
                                <option>Denied</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Item</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Return Date</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mar 01, 2025</td>
                                <td>Whiteboard Markers</td>
                                <td>Classroom Supplies</td>
                                <td>10</td>
                                <td>Borrowed</td>
                                <td>-</td>
                                <td>For Math Department</td>
                            </tr>
                            <tr>
                                <td>Feb 28, 2025</td>
                                <td>Graphing Calculators</td>
                                <td>Classroom Supplies</td>
                                <td>10</td>
                                <td>Requested</td>
                                <td>-</td>
                                <td>For Calculus Class</td>
                            </tr>
                            <tr>
                                <td>Feb 25, 2025</td>
                                <td>HDMI Cables</td>
                                <td>Electronics</td>
                                <td>3</td>
                                <td>Borrowed</td>
                                <td>-</td>
                                <td>For Computer Lab</td>
                            </tr>
                            <tr>
                                <td>Feb 20, 2025</td>
                                <td>Projector</td>
                                <td>Electronics</td>
                                <td>1</td>
                                <td>Returned</td>
                                <td>Feb 22, 2025</td>
                                <td>For Parent-Teacher Meeting</td>
                            </tr>
                            <tr>
                                <td>Feb 15, 2025</td>
                                <td>Science Lab Kit</td>
                                <td>Classroom Supplies</td>
                                <td>1</td>
                                <td>Borrowed</td>
                                <td>-</td>
                                <td>For Science Demonstration</td>
                            </tr>
                            <tr>
                                <td>Feb 10, 2025</td>
                                <td>Wireless Presenter</td>
                                <td>Electronics</td>
                                <td>1</td>
                                <td>Returned</td>
                                <td>Feb 12, 2025</td>
                                <td>For Staff Meeting</td>
                            </tr>
                            <tr>
                                <td>Feb 01, 2025</td>
                                <td>Whiteboard Markers</td>
                                <td>Classroom Supplies</td>
                                <td>5</td>
                                <td>Returned</td>
                                <td>Feb 28, 2025</td>
                                <td>For Math Class</td>
                            </tr>
                            <tr>
                                <td>Jan 25, 2025</td>
                                <td>USB Drives</td>
                                <td>Electronics</td>
                                <td>10</td>
                                <td>Returned</td>
                                <td>Feb 05, 2025</td>
                                <td>For Student Projects</td>
                            </tr>
                            <tr>
                                <td>Jan 18, 2025</td>
                                <td>Math Manipulatives</td>
                                <td>Classroom Supplies</td>
                                <td>1 set</td>
                                <td>Returned</td>
                                <td>Jan 30, 2025</td>
                                <td>For Geometry Class</td>
                            </tr>
                            <tr>
                                <td>Jan 10, 2025</td>
                                <td>Projector</td>
                                <td>Electronics</td>
                                <td>1</td>
                                <td>Returned</td>
                                <td>Jan 11, 2025</td>
                                <td>For Professional Development</td>
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

        <!-- Pending Requests -->
        <div class="card">
            <div class="card-header">
                <h2>Pending Requests</h2>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Request Date</th>
                                <th>Item</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Expected Date</th>
                                <th>Notes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Feb 28, 2025</td>
                                <td>Graphing Calculators</td>
                                <td>Classroom Supplies</td>
                                <td>10</td>
                                <td><span class="status status-danger">Unavailable</span></td>
                                <td>Mar 10, 2025</td>
                                <td>For Calculus Class</td>
                                <td>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Cancel</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Feb 27, 2025</td>
                                <td>Document Camera</td>
                                <td>Electronics</td>
                                <td>1</td>
                                <td><span class="status status-warning">Pending</span></td>
                                <td>Mar 05, 2025</td>
                                <td>For Geometry Demonstration</td>
                                <td>
                                    <button class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Return Items Modal -->
        <div class="modal-backdrop" id="returnModal">
            <div class="modal">
                <div class="modal-header">
                    <h3>Return Items</h3>
                    <button class="modal-close">&times;</button>
                </div>
                <div class="modal-body">
                    <p>You are about to return the following items:</p>
                    <ul id="returnItemsList" style="margin: 15px 0; padding-left: 20px;">
                        <!-- Items will be populated by JavaScript -->
                    </ul>
                    <div class="form-group">
                        <label for="returnNotes">Notes (Optional)</label>
                        <textarea id="returnNotes" class="form-control" rows="3" placeholder="Add any comments about the condition of the items or other notes"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary modal-close">Cancel</button>
                    <button class="btn btn-primary" id="confirmReturn">Confirm Return</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple JavaScript for the return items functionality
        document.addEventListener('DOMContentLoaded', function() {
            const returnItemsBtn = document.getElementById('returnItemsBtn');
            const returnModal = document.getElementById('returnModal');
            const returnItemsList = document.getElementById('returnItemsList');
            const modalCloseButtons = document.querySelectorAll('.modal-close');
            const confirmReturnBtn = document.getElementById('confirmReturn');
            const selectAllCheckbox = document.getElementById('selectAll');
            const itemCheckboxes = document.querySelectorAll('input[name="returnItem"]');
            
            // Handle return items button click
            returnItemsBtn.addEventListener('click', function() {
                // Get selected items
                const selectedItems = [];
                document.querySelectorAll('input[name="returnItem"]:checked').forEach(checkbox => {
                    const row = checkbox.closest('tr');
                    const itemName = row.cells[1].textContent;
                    const quantity = row.cells[3].textContent;
                    selectedItems.push(`${itemName} (${quantity})`);
                });
                
                // Update modal list
                returnItemsList.innerHTML = '';
                if (selectedItems.length === 0) {
                    returnItemsList.innerHTML = '<li>No items selected</li>';
                } else {
                    selectedItems.forEach(item => {
                        const li = document.createElement('li');
                        li.textContent = item;
                        returnItemsList.appendChild(li);
                    });
                }
                
                // Show modal
                returnModal.style.display = 'flex';
            });
            
            // Handle select all checkbox
            selectAllCheckbox.addEventListener('change', function() {
                itemCheckboxes.forEach(checkbox => {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            });
            
            // Close modal when clicking close buttons
            modalCloseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    returnModal.style.display = 'none';
                });
            });
            
            // Handle confirm return
            confirmReturnBtn.addEventListener('click', function() {
                // Here you would normally send the data to the server
                alert('Items have been marked as returned.');
                returnModal.style.display = 'none';
                
                // Remove checked items from the table (just for demo)
                document.querySelectorAll('input[name="returnItem"]:checked').forEach(checkbox => {
                    checkbox.closest('tr').remove();
                });
                
                // Uncheck select all
                selectAllCheckbox.checked = false;
            });
            
            // Close modal when clicking outside
            returnModal.addEventListener('click', function(event) {
                if (event.target === returnModal) {
                    returnModal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <title>Receptionist Dashboard - Inventory System</title>
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
                    <h3><?=$data['Available'] ?? 0 ?></h3>
                    <p>Available Items</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-hand-holding"></i>
                </div>
                <div class="stat-info">
                    <h3><?=$data['Borrowed'] ?? 0 ?></h3>
                    <p>Items Currently Borrowed</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="stat-info">
                    <h3><?=$data['Overdue'] ?? 0 ?></h3>
                    <p>Overdue Items</p>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="card">
            <div class="card-header">
                <h2>Inventory Management</h2>
            </div>
            <div class="card-body">
                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <button class="btn btn-primary" id="issueItemBtn">
                        <i class="fas fa-arrow-right"></i> Issue Item
                    </button>
                    <button class="btn btn-success" id="returnItemBtn">
                        <i class="fas fa-arrow-left"></i> Return Item
                    </button>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="card">
            <div class="card-header">
                <h2>Recent Activities</h2>
                <div>
                </div>
            </div>
            <div class="card-body">

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>User</th>
                                <th>Item</th>
                                <th>Activity</th>
                                <th>Quantity</th>
                                <th>Return Date</th>
                                <th>Notes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="activitiesTable">
                            <!-- Activities will be loaded here -->
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

        <!-- Current Inventory -->
        <div class="card">
            <div class="card-header">
                <h2>Current Inventory</h2>
                <div class="search-bar" style="margin-bottom: 0;">
                    <input type="text" id="searchInventory" placeholder="Search items...">
                    <button id="searchBtn"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Category</th>
                                <th>Available Quantity</th>
                                <th>Borrowed Quantity</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="inventoryTable">
                            <!-- Inventory will be loaded here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Issue Item Modal -->
        <div class="modal-backdrop" id="issueModal">
            <div class="modal">
                <div class="modal-header">
                    <h3>Issue Item</h3>
                    <button class="modal-close">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="issueForm">
                        <div class="form-group">
                            <label for="issueUser">User</label>
                            <select id="issueUser" class="form-control" required>
                                <option value="">Select User</option>
                                <!-- Users will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="issueItem">Item</label>
                            <select id="issueItem" class="form-control" required>
                                <option value="">Select Item</option>
                                <!-- Items will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="issueQuantity">Quantity</label>
                            <input type="number" id="issueQuantity" min="1" class="form-control" required>
                            <small id="availableQuantity" class="text-muted">Available: 0</small>
                        </div>
                        <div class="form-group">
                            <label for="issueReturnDate">Expected Return Date</label>
                            <input type="date" id="issueReturnDate" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="issueNotes">Notes (Optional)</label>
                            <textarea id="issueNotes" class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary modal-close">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="confirmIssue">Issue Item</button>
                </div>
            </div>
        </div>

        <!-- Return Item Modal -->
        <div class="modal-backdrop" id="returnModal">
            <div class="modal">
                <div class="modal-header">
                    <h3>Return Item</h3>
                    <button class="modal-close">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="returnForm">
                        <div class="form-group">
                            <label for="returnUser">User</label>
                            <select id="returnUser" class="form-control" required>
                                <option value="">Select User</option>
                                <!-- Users will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="returnBorrowedItems">Borrowed Items</label>
                            <select id="returnBorrowedItems" class="form-control" required>
                                <option value="">Select Item</option>
                                <!-- Borrowed items will be loaded here -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="returnQuantity">Return Quantity</label>
                            <input type="number" id="returnQuantity" min="1" class="form-control" required>
                            <small id="borrowedQuantity" class="text-muted">Borrowed: 0</small>
                        </div>
                        <div class="form-group">
                            <label for="returnCondition">Condition</label>
                            <select id="returnCondition" class="form-control" required>
                                <option value="good">Good</option>
                                <option value="damaged">Damaged</option>
                                <option value="lost">Lost</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="returnNotes">Notes (Optional)</label>
                            <textarea id="returnNotes" class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary modal-close">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="confirmReturn">Confirm Return</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Modal open/close functionality
            const issueBtn = document.getElementById('issueItemBtn');
            const returnBtn = document.getElementById('returnItemBtn');
            const stockBtn = document.getElementById('manageStockBtn');
            
            const issueModal = document.getElementById('issueModal');
            const returnModal = document.getElementById('returnModal');
            const stockModal = document.getElementById('stockModal');
            
            const closeButtons = document.querySelectorAll('.modal-close');
            
            // Open modals
            issueBtn.addEventListener('click', () => issueModal.style.display = 'flex');
            returnBtn.addEventListener('click', () => returnModal.style.display = 'flex');
            stockBtn.addEventListener('click', () => stockModal.style.display = 'flex');
            
            // Close modals
            closeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    issueModal.style.display = 'none';
                    returnModal.style.display = 'none';
                    stockModal.style.display = 'none';
                });
            });
            
            // Close modal when clicking outside
            window.addEventListener('click', function(event) {
                if (event.target === issueModal) issueModal.style.display = 'none';
                if (event.target === returnModal) returnModal.style.display = 'none';
                if (event.target === stockModal) stockModal.style.display = 'none';
            });
            
            // Load mock data (replace with actual API calls)
            loadMockData();
            
            // Form submissions
            document.getElementById('confirmIssue').addEventListener('click', handleIssueItem);
            document.getElementById('confirmReturn').addEventListener('click', handleReturnItem);
            document.getElementById('confirmStock').addEventListener('click', handleStockChange);
            document.getElementById('filterBtn').addEventListener('click', filterActivities);
            document.getElementById('refreshActivitiesBtn').addEventListener('click', refreshActivities);
            document.getElementById('searchBtn').addEventListener('click', searchInventory);
            
            // Dynamic item quantity updates
            document.getElementById('issueItem').addEventListener('change', updateAvailableQuantity);
            document.getElementById('returnUser').addEventListener('change', loadUserBorrowedItems);
            document.getElementById('returnBorrowedItems').addEventListener('change', updateBorrowedQuantity);
            document.getElementById('stockItem').addEventListener('change', updateCurrentStock);
        });
        
        // Mock data loading (replace with actual API calls in production)
        function loadMockData() {
            // Load users
            const users = [
                { id: 1, name: "John Smith" },
                { id: 2, name: "Jane Doe" },
                { id: 3, name: "Alex Johnson" }
            ];
            
            const userSelects = document.querySelectorAll('#issueUser, #returnUser');
            userSelects.forEach(select => {
                users.forEach(user => {
                    const option = document.createElement('option');
                    option.value = user.id;
                    option.textContent = user.name;
                    select.appendChild(option);
                });
            });
            
            // Load inventory items
            const items = [
                { id: 1, name: "Whiteboard Markers", category: "Stationery", available: 25, borrowed: 10, status: "available" },
                { id: 2, name: "Laptops", category: "Electronics", available: 5, borrowed: 15, status: "low" },
                { id: 3, name: "Projectors", category: "Electronics", available: 0, borrowed: 8, status: "out" },
                { id: 4, name: "Textbooks", category: "Books", available: 42, borrowed: 18, status: "available" }
            ];
            
            const itemSelects = document.querySelectorAll('#issueItem, #stockItem');
            itemSelects.forEach(select => {
                items.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.id;
                    option.textContent = item.name;
                    option.dataset.available = item.available;
                    select.appendChild(option);
                });
            });
            
            // Load inventory table
            const inventoryTable = document.getElementById('inventoryTable');
            items.forEach(item => {
                const tr = document.createElement('tr');
                let statusClass = '';
                if (item.status === 'available') statusClass = 'status-available';
                else if (item.status === 'low') statusClass = 'status-low';
                else if (item.status === 'out') statusClass = 'status-out';
                
                tr.innerHTML = `
                    <td>${item.name}</td>
                    <td>${item.category}</td>
                    <td>${item.available}</td>
                    <td>${item.borrowed}</td>
                    <td><span class="status ${statusClass}">${item.status}</span></td>
                    <td>
                        <button class="btn btn-primary btn-sm issue-btn" data-id="${item.id}">
                            <i class="fas fa-arrow-right"></i> Issue
                        </button>
                        <button class="btn btn-success btn-sm return-btn" data-id="${item.id}">
                            <i class="fas fa-arrow-left"></i> Return
                        </button>
                    </td>
                `;
                inventoryTable.appendChild(tr);
            });
            
            // Load activities
            const activities = [
                { id: 1, date: "Apr 18, 2025", user: "John Smith", item: "Whiteboard Markers", activity: "issued", quantity: 5, returnDate: "Apr 25, 2025", notes: "For Math Department" },
                { id: 2, date: "Apr 17, 2025", user: "Jane Doe", item: "Laptops", activity: "returned", quantity: 3, returnDate: "", notes: "All in good condition" },
                { id: 3, date: "Apr 16, 2025", user: "Admin", item: "Textbooks", activity: "added", quantity: 20, returnDate: "", notes: "New purchase" },
                { id: 4, date: "Apr 15, 2025", user: "Alex Johnson", item: "Projectors", activity: "issued", quantity: 2, returnDate: "Apr 22, 2025", notes: "For conference room" }
            ];
            
            const activitiesTable = document.getElementById('activitiesTable');
            activitiesTable.innerHTML = '';
            
            activities.forEach(act => {
                const tr = document.createElement('tr');
                let activityClass = '';
                if (act.activity === 'issued') activityClass = 'activity-issued';
                else if (act.activity === 'returned') activityClass = 'activity-returned';
                else if (act.activity === 'added') activityClass = 'activity-added';
                else if (act.activity === 'removed') activityClass = 'activity-removed';
                
                tr.innerHTML = `
                    <td>${act.date}</td>
                    <td>${act.user}</td>
                    <td>${act.item}</td>
                    <td><span class="activity-badge ${activityClass}">${act.activity}</span></td>
                    <td>${act.quantity}</td>
                    <td>${act.returnDate || '-'}</td>
                    <td>${act.notes || '-'}</td>
                    <td>
                        <button class="btn btn-primary btn-sm view-btn" data-id="${act.id}">
                            <i class="fas fa-eye"></i>
                        </button>
                    </td>
                `;
                activitiesTable.appendChild(tr);
            });
            
            // Add quick actions to inventory buttons
            document.querySelectorAll('.issue-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-id');
                    document.getElementById('issueItem').value = itemId;
                    updateAvailableQuantity();
                    document.getElementById('issueModal').style.display = 'flex';
                });
            });
            
            document.querySelectorAll('.return-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const itemId = this.getAttribute('data-id');
                    document.getElementById('returnModal').style.display = 'flex';
                });
            });
        }
        
        // Update available quantity when item is selected
        function updateAvailableQuantity() {
            const itemSelect = document.getElementById('issueItem');
            const availableSpan = document.getElementById('availableQuantity');
            
            if (itemSelect.selectedIndex > 0) {
                const option = itemSelect.options[itemSelect.selectedIndex];
                availableSpan.textContent = `Available: ${option.dataset.available}`;
            } else {
                availableSpan.textContent = 'Available: 0';
            }
        }
        
        // Load borrowed items for selected user
        function loadUserBorrowedItems() {
            const userId = document.getElementById('returnUser').value;
            const borrowedSelect = document.getElementById('returnBorrowedItems');
            
            // Clear previous options
            borrowedSelect.innerHTML = '<option value="">Select Item</option>';
            
            if (!userId) return;
            
            // Mock borrowed items (replace with API call)
            const borrowedItems = [
                { id: 1, name: "Whiteboard Markers", quantity: 5 },
                { id: 2, name: "Laptops", quantity: 2 }
            ];
            
            borrowedItems.forEach(item => {
                const option = document.createElement('option');
                option.value = item.id;
                option.textContent = `${item.name} (Qty: ${item.quantity})`;
                option.dataset.borrowed = item.quantity;
                borrowedSelect.appendChild(option);
            });
        }
        
        // Update borrowed quantity when item is selected
        function updateBorrowedQuantity() {
            const itemSelect = document.getElementById('returnBorrowedItems');
            const borrowedSpan = document.getElementById('borrowedQuantity');
            const quantityInput = document.getElementById('returnQuantity');
            
            if (itemSelect.selectedIndex > 0) {
                const option = itemSelect.options[itemSelect.selectedIndex];
                const borrowed = option.dataset.borrowed;
                borrowedSpan.textContent = `Borrowed: ${borrowed}`;
                quantityInput.max = borrowed;
                quantityInput.value = borrowed;
            } else {
                borrowedSpan.textContent = 'Borrowed: 0';
                quantityInput.value = '';
                quantityInput.max = '';
            }
        }
        
        // Update current stock when item is selected
        function updateCurrentStock() {
            const itemSelect = document.getElementById('stockItem');
            const stockSpan = document.getElementById('currentStock');
            
            if (itemSelect.selectedIndex > 0) {
                const option = itemSelect.options[itemSelect.selectedIndex];
                stockSpan.textContent = `Current Stock: ${option.dataset.available}`;
            } else {
                stockSpan.textContent = 'Current Stock: 0';
            }
        }
        
        // Handle issue item form submission
        function handleIssueItem(e) {
            e.preventDefault();
            const user = document.getElementById('issueUser').value;
            const item = document.getElementById('issueItem').value;
            const quantity = document.getElementById('issueQuantity').value;
            const returnDate = document.getElementById('issueReturnDate').value;
            const notes = document.getElementById('issueNotes').value;
            
            if (!user || !item || !quantity || !returnDate) {
                alert('Please fill all required fields');
                return;
            }
            
            // Mock API call (replace with actual API call)
            console.log('Issuing item:', { user, item, quantity, returnDate, notes });
            
            // Show success message and close modal
            alert('Item issued successfully!');
            document.getElementById('issueModal').style.display = 'none';
            
            // Reset form
            document.getElementById('issueForm').reset();
            
            // Refresh data
            refreshActivities();
        }
        
        // Handle return item form submission
        function handleReturnItem(e) {
            e.preventDefault();
            const user = document.getElementById('returnUser').value;
            const item = document.getElementById('returnBorrowedItems').value;
            const quantity = document.getElementById('returnQuantity').value;
            const condition = document.getElementById('returnCondition').value;
            const notes = document.getElementById('returnNotes').value;
            
            if (!user || !item || !quantity || !condition) {
                alert('Please fill all required fields');
                return;
            }
            
            // Mock API call (replace with actual API call)
            console.log('Returning item:', { user, item, quantity, condition, notes });
            
            // Show success message and close modal
            alert('Item returned successfully!');
            document.getElementById('returnModal').style.display = 'none';
            
            // Reset form
            document.getElementById('returnForm').reset();
            
            // Refresh data
            refreshActivities();
        }
        
        // Handle stock change form submission
        function handleStockChange(e) {
            e.preventDefault();
            const action = document.getElementById('stockAction').value;
            const item = document.getElementById('stockItem').value;
            const quantity = document.getElementById('stockQuantity').value;
            const reason = document.getElementById('stockReason').value;
            const notes = document.getElementById('stockNotes').value;
            
            if (!item || !quantity || !reason) {
                alert('Please fill all required fields');
                return;
            }
            
            // Mock API call (replace with actual API call)
            console.log('Stock change:', { action, item, quantity, reason, notes });
            
            // Show success message and close modal
            alert(`Stock ${action === 'add' ? 'added' : 'removed'} successfully!`);
            document.getElementById('stockModal').style.display = 'none';
            
            // Reset form
            document.getElementById('stockForm').reset();
            
            // Refresh data
            refreshActivities();
        }
        
        // Filter activities
        function filterActivities() {
            const type = document.getElementById('activityType').value;
            const dateFrom = document.getElementById('dateFrom').value;
            const dateTo = document.getElementById('dateTo').value;
            
            // Mock API call (replace with actual API call)
            console.log('Filtering activities:', { type, dateFrom, dateTo });
            
            // In a real application, you would fetch filtered data from the server
            // and update the table accordingly
            alert('Activities filtered!');
        }
        
        // Refresh activities
        function refreshActivities() {
            // In a real application, you would fetch the latest data from the server
            // For now, we'll just show a message
            alert('Activities refreshed!');
        }
        
        // Search inventory
        function searchInventory() {
            const searchTerm = document.getElementById('searchInventory').value;
            
            // Mock API call (replace with actual API call)
            console.log('Searching inventory:', searchTerm);
            
            // In a real application, you would fetch filtered data from the server
            // and update the table accordingly
            alert(`Searching for: ${searchTerm}`);
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?= IMAGE ?>/logo_light-remove.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management - Inventory System</title>
    <link rel="stylesheet" href="<?= CSS ?>/Inventory.css?v=<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="overflow: hidden;">
    <!-- Main Content -->
    <div class="main-content">

        <!-- Stats -->
        <div class="stats-container" style="margin-top: 60px;">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-box"></i>
                </div>
                <div class="stat-info">
                    <h3><?= $data['RestockDate'] ?></h3>
                    <p>Last Restock Date</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-tags"></i>
                </div>
                <div class="stat-info">
                    <h3><?= $data['Categories'] ?></h3>
                    <p>Categories</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-dolly"></i>
                </div>
                <div class="stat-info">
                    <h3><?= $data['Restocks'] ?></h3>
                    <p>Restocks This Month</p>
                </div>
            </div>
        </div>

        <!-- Inventory Management -->
        <div class="card">
            <div class="card-header">
                <h2>Inventory Items</h2>
                <button class="btn btn-primary" onclick="document.getElementById('addItemModal').style.display='flex'">
                    <i class="fas fa-plus"></i> Add New Item
                </button>
            </div>
            <div class="card-body">
                <!-- Search and Filter -->
                <div>
                    <div>
                        <select class="form-control" id="Category" style="max-width: 150px;">
                            <option value="All">All Categories</option>
                            <option value="Stationery">Stationery</option>
                            <option value="Toys">Toys</option>
                            <option value="Books">Books</option>
                            <option value="Cleaning">Cleaning</option>
                            <option value="Health">Health</option>
                            <option value="Snacks">Snacks</option>
                            <option value="Crafts">Crafts</option>
                            <option value="Clothing">Clothing</option>
                        </select>
                        <select class="form-control" id="Status" style="max-width: 150px; margin-left: 50px;">
                            <option value="All">All Status</option>
                            <option value="Available">Available</option>
                            <option value="Low Stock">Low Stock</option>
                            <option value="Out of Stock">Out of Stock</option>
                        </select>
                    </div>
                </div>

                <!-- Inventory Table -->
                <div class="table-container" style="margin-top:1.5%">
                    <table>
                        <thead>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="pagination" id="pagination" style="margin-top: 10px; margin-bottom: -10px;">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Item Modal -->
    <div id="addItemModal" class="modal-backdrop">
        <div class="modal">
            <div class="modal-header">
                <h3>Add New Item</h3>
                <button class="modal-close" onclick="document.getElementById('addItemModal').style.display='none'">&times;</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="itemName">Item Name</label>
                                <input type="text" id="itemName" class="form-control" placeholder="Enter item name">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="itemCategory">Category</label>
                                <select id="itemCategory" class="form-control">
                                    <option>Office Supplies</option>
                                    <option>Classroom Supplies</option>
                                    <option>Electronics</option>
                                    <option>Furniture</option>
                                    <option>Cleaning Supplies</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="itemQuantity">Quantity</label>
                                <input type="number" id="itemQuantity" class="form-control" min="0" value="0">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="itemMinStock">Minimum Stock Level</label>
                                <input type="number" id="itemMinStock" class="form-control" min="0" value="10">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="itemDescription">Description</label>
                        <textarea id="itemDescription" class="form-control" rows="3" placeholder="Enter item description"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-col">
                            <div class="form-group">
                                <label for="itemPrice">Unit Price</label>
                                <input type="number" id="itemPrice" class="form-control" min="0" step="0.01" value="0.00">
                            </div>
                        </div>
                        <div class="form-col">
                            <div class="form-group">
                                <label for="itemImage">Item Image</label>
                                <input type="file" id="itemImage" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" onclick="document.getElementById('addItemModal').style.display='none'">Cancel</button>
                <button class="btn btn-primary">Add Item</button>
            </div>
        </div>
    </div>

    <script>
        // Simple JavaScript for modal functionality
        window.onclick = function(event) {
            const modal = document.getElementById('addItemModal');
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        function fetchInventory(Category, Status, Pagination){
            fetch('<?= ROOT ?>/Inventory/InventoryManage/StoreInventory', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    Category : Category,
                    Status: Status,
                    Pagination: Pagination
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("Stock table:", data.data);
                    renderTable(data.data.Stock);
                    renderPagination(data.data.TotalPages, data.data.CurrentPage, Category, Status);
                } else {
                    console.error("Failed to fetch Stock:", data.message);
                    alert(data.message);
                }
            })
            .catch(error => console.error("Error:", error));
        }

        function renderTable(stockData) {
            const table = document.querySelector("table");
            let html = `
                <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Category</th>
                        <th>In Stock</th>
                        <th>Issued</th>
                        <th>Min Stock</th>
                        <th>Last Restocked</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
            `;

            stockData.forEach(item => {
                html += `
                    <tr>
                        <td>${item.ItemID}</td>
                        <td>${item.Item}</td>
                        <td>${item.Category}</td>
                        <td>${item.Quantity}</td>
                        <td>${item.Issued}</td>
                        <td>${item.MinQuantity}</td>
                        <td><span class="status ${getStatusClass(item.Status)}">${item.Status}</span></td>
                        <td>${item.Date ?? '—'}</td>
                        <td>
                            <button class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button>
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                `;
            });

            html += `</tbody>`;
            table.innerHTML = html;
        }

        function getStatusClass(status) {
            switch (status) {
                case "Available":
                    return "status-available";
                case "Low Stock":
                    return "status-low";
                case "Out of Stock":
                    return "status-out";
                default:
                    return "";
            }
        }

        function renderPagination(totalPages, currentPage, Category, Status) {
            const paginationContainer = document.getElementById("pagination");
            paginationContainer.innerHTML = '';

            // Previous
            const prevPage = currentPage > 1 ? currentPage - 1 : 1;
            paginationContainer.innerHTML += `<a href="#" data-page="${prevPage}">&laquo;</a>`;

            for (let i = 1; i <= totalPages; i++) {
                paginationContainer.innerHTML += `
                    <a href="#" data-page="${i}" class="${i === currentPage ? 'active' : ''}">${i}</a>
                `;
            }

            // Next
            const nextPage = currentPage < totalPages ? currentPage + 1 : totalPages;
            paginationContainer.innerHTML += `<a href="#" data-page="${nextPage}">&raquo;</a>`;

            // Add click listeners
            paginationContainer.querySelectorAll("a").forEach(a => {
                a.addEventListener("click", function(e) {
                    e.preventDefault();
                    const page = parseInt(this.getAttribute("data-page"));
                    fetchInventory(Category, Status, page);
                });
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const CategoryPicker = document.getElementById('Category');
            const StatusPicker = document.getElementById('Status');

            function getCurrentCategory() {
                return CategoryPicker?.value || 'All';
            }

            function getCurrentStatus() {
                return StatusPicker?.value || 'All';
            }

            fetchInventory(getCurrentCategory(), getCurrentStatus(), 1);

            [CategoryPicker, StatusPicker].forEach(picker => {
                if (picker) {
                    picker.addEventListener('change', () => {
                        fetchInventory(getCurrentCategory(), getCurrentStatus(), 1);
                    });
                }
            });
        });

    </script>
</body>
</html>
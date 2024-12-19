<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff - Allocation</title>
    <link rel="icon" href="../Assets/KIDDOVILLE_LOGO.jpg">
    <link rel="stylesheet" href="<?=CSS?>/Manager/Allocation.css">
</head>
<body>
    
    <div class="allocation">
        <form id="staffAllocationForm">
            <h1>Staff Allocation</h1>
    
            <div class="form-group">
                <label for="staff">Staff</label>
                <select id="staff" class="styled-select" required>
                    <option value="" disabled selected>Select Staff</option>
                    <option value="Rahul">Ms. Rahul</option>
                    <option value="Thilina">Ms. Thilina</option>
                    <option value="Hanshika">Ms. Hanshika</option>
                    <option value="Kivitha">Ms. Kivitha</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="age-group">Age Group</label>
                <select id="age-group" class="styled-select" required>
                    <option value="" disabled selected>Select Age Group</option>
                    <option value="2">Age: 2</option>
                    <option value="3">Age: 3</option>
                    <option value="4-5">Age: 4 - 5</option>
                    <option value="6-8">Age: 6 - 8</option>
                    <option value="9-11">Age: 9 - 11</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="activity">Activity</label>
                <select id="activity" class="styled-select" required>
                    <option value="" disabled selected>Select Activity</option>
                    <option value="breakfast">Breakfast</option>
                    <option value="tea-time">Tea Time</option>
                    <option value="lunch">Lunch</option>
                    <option value="creative-activity">Creative Activity</option>
                    <option value="story-time">Story Time</option>
                    <option value="outdoor-time">Outdoor Time</option>
                    <option value="basic-learning">Basic Learning Time</option>
                    <option value="tea-time-evening">Tea Time Evening</option>
                    <option value="end-time">End Time</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="start-time">Start Time</label>
                <select id="start-time" class="styled-select" required>
                    <option value="" disabled selected>Select Start Time</option>
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="end-time">End Time</label>
                <select id="end-time" class="styled-select" required>
                    <option value="" disabled selected>Select End Time</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="location">Location</label>
                <select id="location" class="styled-select" required>
                    <option value="" disabled selected>Select Location</option>
                    <option value="room-1">Room 1</option>
                    <option value="room-2">Room 2</option>
                    <option value="room-3">Room 3</option>
                    <option value="room-4">Room 4</option>
                    <option value="room-5">Room 5</option>
                </select>
            </div>
            
            <div class="buttons">
                <button type="button" onclick="saveForm()">Save</button>
                <button type="reset">Reset</button>
            </div>
        </form>
        <a href="<?=ROOT?>/Manager/Home"><button>Back</button></a>
    </div>

    <script>
        function saveForm() {
            const staff = document.getElementById("staff");
            const ageGroup = document.getElementById("age-group");
            const activity = document.getElementById("activity");
            const startTime = document.getElementById("start-time");
            const endTime = document.getElementById("end-time");
            const location = document.getElementById("location");
        
            if (staff.value && ageGroup.value && activity.value && startTime.value && endTime.value && location.value) {
                showToast("Form saved successfully!");
            } else {
                showToast("Please fill in all required fields.");
            }
        }
        
        function showToast(message) {
            const toast = document.getElementById("toast");
            toast.innerText = message;
            toast.className = "toast show";
            setTimeout(() => {
                toast.className = toast.className.replace("show", "");
            }, 3000); // Toast disappears after 3 seconds
        }
        
    </script>
    <div id="toast" class="toast"></div>
</body>
</html>

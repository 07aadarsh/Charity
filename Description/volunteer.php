<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Volunteer</title>
    <link rel="stylesheet" href="volunteer.css">
</head>
<body>
    <div class="container">
        <h2>Become a Volunteer</h2>
        <form action="process_volunteer.php" method="post">
            <div class="form-group">
                <label for="volunteer_name">Volunteer Name:</label>
                <input type="text" id="volunteer_name" name="volunteer_name" required>
            </div>
            <div class="form-group">
                <label for="volunteer_email">Volunteer Email:</label>
                <input type="email" id="volunteer_email" name="volunteer_email" required>
            </div>
            <div class="form-group">
                <label for="volunteer_phone">Volunteer Phone Number:</label>
                <input type="tel" id="volunteer_phone" name="volunteer_phone" required>
            </div>
            <div class="form-group">
                <label for="volunteer_address">Volunteer Address:</label>
                <textarea id="volunteer_address" name="volunteer_address" required></textarea>
            </div>
            <div class="form-group">
                <label for="volunteer_type">Volunteer Type:</label>
                <select id="volunteer_type" name="volunteer_type" required>
                    <option value="">Select</option>
                    <option value="event_volunteer">Event Volunteer</option>
                    <option value="office_volunteer">Office Volunteer</option>
                    <option value="virtual_volunteer">Virtual Volunteer</option>
                </select>
            </div>
            <div class="form-group">
                <label for="availability_date">Availability Date:</label>
                <input type="date" id="availability_date" name="availability_date" required>
            </div>
            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea id="skills" name="skills" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
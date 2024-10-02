<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adopt a Child</title>
    <link rel="stylesheet" href="Adopt.css">
</head>
<body>
    <div class="container">
        <h2>Adopt a Child</h2>
        <form action="process_adoption.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="child_name">Child's Name:</label>
                <input type="text" id="child_name" name="child_name" required>
            </div>
            <div class="form-group">
                <label for="child_age">Child's Age:</label>
                <input type="number" id="child_age" name="child_age" required>
            </div>
            <div class="form-group">
                <label for="adoption_reason">Reason for Adoption:</label>
                <textarea id="adoption_reason" name="adoption_reason" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
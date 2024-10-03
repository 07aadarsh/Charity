<!-- join-us.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <link rel="stylesheet" href="contact.css"> <!-- link to your stylesheet -->
</head>
<body>
    <section class="join-us-container">
        <h1>Join Our Community</h1>
        <form action="contact.php" method="post">
            <div class="content">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            </div>
            <button type="submit" class="btn-join">Join Us</button>
        </form>
    </section>
</body>
</html>
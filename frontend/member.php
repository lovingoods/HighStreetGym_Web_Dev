<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Member Area</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Welcome, Member!</h1>

    <section id="blog">
        <h2>Blog</h2>
        <div id="blog-posts">
        </div>
        <form id="blog-form">
            <input type="text" id="post-title" placeholder="Title" required>
            <textarea id="post-content" placeholder="Write your message..." required></textarea>
            <button type="submit">Post</button>
        </form>
    </section>

    <section id="booking">
        <h2>Book a Class</h2>
        <div id="class-list">
        </div>
        <form id="booking-form">
            <label for="class-select">Select Class:</label>
            <select id="class-select" required>
            </select>
            <label for="trainer-select">Select Trainer:</label>
            <select id="trainer-select" required>
            </select>
            <button type="submit">Book Now</button>
        </form>
    </section>

    <script src="js/member.js"></script>
</body>
</html>
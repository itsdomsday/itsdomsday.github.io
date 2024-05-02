<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2, h3 {
            color: #333;
        }
        .project {
            margin-bottom: 20px;
        }
        .personal-info {
            text-align: center;
            margin-bottom: 40px;
        }
        .personal-info img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="personal-info">
        <img src="your_photo.jpg" alt="Your Name">
        <h1>Your Name</h1>
        <p>Email: your@email.com</p>
        <p>Phone: +1234567890</p>
        <p>Location: Your City, Country</p>
    </div>

    <h2>Projects</h2>

    <?php
    // Array of projects
    $projects = [
        [
            "title" => "Project 1",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo odio eu odio laoreet placerat.",
            "image" => "project1.jpg",
        ],
        [
            "title" => "Project 2",
            "description" => "Vestibulum sit amet est nec ligula interdum convallis sed eget odio.",
            "image" => "project2.jpg",
        ],
        // Add more projects as needed
    ];

    // Loop through projects and display them
    foreach ($projects as $project) {
        echo "<div class='project'>";
        echo "<h3>{$project['title']}</h3>";
        echo "<p>{$project['description']}</p>";
        echo "<img src='{$project['image']}' alt='{$project['title']}'>";
        echo "</div>";
    }
    ?>

</div>

</body>
</html>
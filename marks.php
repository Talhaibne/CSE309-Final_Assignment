<?php
// marks.php

// Data for the table
$marksData = [
   [
        "mark" => 15,
        "justification" => "Frontend Development using HTML,CSS,Bootstrap.",
        "internal_route" => "index.php, style.css, product cards, header and footer components"
    ],
    [
        "mark" => 15,
        "justification" => "Backend Logic. Implement server side logic for product listing, cart management, and order processing.",
        "internal_route" => "add_to_cart.php, cart.php, checkout.php, part of index.php"
    ],
    [
        "mark" => 15,
        "justification" => "Database Design and Integration using MySQL.",
        "internal_route" => "db_config.php, SQL scripts, Product data population."
    ],
    [
        "mark" => 15,
        "justification" => "Admin Panel & Testing.",
        "internal_route" => "admin_dash board.php, Test cases and error logs."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation Criteria - Marks</title>
    <link rel="icon" href="favicon.png" type="image/x-icon">
    <script src="https://d3js.org/d3.v6.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9fafb;
        }
    </style>
</head>
<body>

    <header class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
        <div class="text-2xl font-bold text-indigo-600">
            <a href="admin_dashboard.php">Swift Buy 🛒 - Admin</a>
        </div>
        <div>
            <a href="logout.php" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700">Logout</a>
        </div>
    </header>

    <div class="container mx-auto p-6 mt-10 bg-white shadow-md rounded-lg max-w-4xl">
        <h1 class="text-3xl font-semibold text-center mb-6">Evaluation Criteria - Marks</h1>
        
        <!-- Table where D3.js will populate the rows -->
        <table id="marksTable" class="min-w-full table-auto border-collapse">
            <thead>
                <tr>
                    <th class="px-6 py-2 text-left border-b">Mark</th>
                    <th class="px-6 py-2 text-left border-b">Justification for this Marking</th>
                    <th class="px-6 py-2 text-left border-b">Internal Route</th>
                </tr>
            </thead>
            <tbody>
                <!-- D3.js will populate the rows here -->
            </tbody>
        </table>
    </div>

    <script>
        // D3.js code to populate the table
        const marksData = <?php echo json_encode($marksData); ?>;

        // Select the table body
        const tbody = d3.select("#marksTable").select("tbody");

        // Create table rows and cells dynamically based on marksData
        marksData.forEach(function(row) {
            const tr = tbody.append("tr");

            tr.append("td").text(row.mark);
            tr.append("td").text(row.justification);
            tr.append("td").text(row.internal_route);
        });
    </script>

</body>
</html>

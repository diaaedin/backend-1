<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employees</title>
    <style>
        body {
            
            width:100vw;
            height:100vh;
            background-color: skyblue;
            padding: 20px;

        }

        .employee-card {
            width:250px;
            background-color: #00f;
            border: 2px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            transition:0.75s;
        }
        .employee-card:hover{
        border:solid;
        background:greenyellow;
        }

        .employee-card p {
            margin: 5px 0;
        }

        .employee-card strong {
            color: #333;
        }
    </style>
</head>
<body>

<?php

$employees = [
    ["name" => "Ahmed", "salary" => 5000, "age" => 30, "insurance" => "Yes"],
    ["name" => "Sara", "salary" => 6000, "age" => 28, "insurance" => "No"],
    ["name" => "Ali", "salary" => 4500, "age" => 35, "insurance" => "Yes"]
];

foreach ($employees as $employee) {
    echo "<div class='employee-card'>";
    echo "<p><strong>Name:</strong> " . $employee['name'] . "</p>";
    echo "<p><strong>Salary:</strong> $" . $employee['salary'] . "</p>";
    echo "<p><strong>Age:</strong> " . $employee['age'] . "</p>";
    echo "<p><strong>Insurance:</strong> " . $employee['insurance'] . "</p>";
    echo "</div>";
}

?>

</body>
</html>



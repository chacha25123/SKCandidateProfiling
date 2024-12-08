<?php
// Connect to SQLite database
try {
    $db = new PDO('sqlite:sk_profiling.db');


    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create table if it doesn't exist
    $db->exec("CREATE TABLE IF NOT EXISTS sk_info (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        barangay TEXT,
        province TEXT,
        city TEXT,
        gender TEXT,
        civil_status TEXT,
        age INTEGER,
        birthdate TEXT,
        first_name TEXT,
        middle_name TEXT,
        last_name TEXT,
        mobile TEXT,
        email TEXT
    )");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $barangay = $_POST['barangay'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $civil_status = $_POST['civil_status'];
        $age = isset($_POST['age']) ? $_POST['age'] : 'Unknown';
        $birthdate = $_POST['birthdate'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];

        // Insert data into SQLite database
        $stmt = $db->prepare("INSERT INTO sk_info (barangay, province, city, gender, civil_status, age, birthdate, first_name, middle_name, last_name, mobile, email) 
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$barangay, $province, $city, $gender, $civil_status, $age, $birthdate, $first_name, $middle_name, $last_name, $mobile, $email]);

        echo "Info saved!";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

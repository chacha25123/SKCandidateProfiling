<?php
try {
    $db = new PDO('sqlite:sk_profiling.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->query("SELECT * FROM sk_info WHERE id = 1"); // Modify as needed to pull the correct user
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        echo "First Name: " . $row['first_name'] . "<br>";
        echo "Last Name: " . $row['last_name'] . "<br>";
        echo "Gender: " . $row['gender'] . "<br>";
        echo "Civil Status: " . $row['civil_status'] . "<br>";
        echo "Age: " . $row['age'] . "<br>";
        echo "Birthdate: " . $row['birthdate'] . "<br>";
        echo "Mobile: " . $row['mobile'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
    } else {
        echo "No personal information found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<?php
// simpandata.php
include('koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $message = $_POST['pesan'];

    // Query untuk memasukkan data ke dalam tabel contacts
    $sql = "INSERT INTO pemesan_project (name, email, message) VALUES (?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        // Redirect ke halaman kontak dengan parameter success
        header('Location: contact.html?success=true');
        exit();
    } else {
        // Redirect ke halaman kontak dengan parameter error
        header('Location: contact.html?error=true');
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>


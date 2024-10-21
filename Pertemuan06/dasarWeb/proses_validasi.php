<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // validasi nama
    if (empty($nama)) {
        $errors['nama'] = "Nama harus diisi!";
    }

    // validasi email
    if (empty($email)) {
        $errors['email'] = "Email harus diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email tidak valid!";
    }

    // validasi password
    if (empty($password)) {
        $errors['password'] = "Password harus diisi!";
    } elseif (strlen($password) < 8) {
        $errors['password'] = "Password minimal 8 karakter!";
    }

    // jika ada kesalahan validasi
    if (!empty($errors)) {
        echo json_encode(['errors' => $errors]);
    } else {
        echo json_encode(['success' => "Data berhasil disimpan!"]);
    }
} 
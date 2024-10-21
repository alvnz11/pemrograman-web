<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $subjek = $_POST["subjek"];
    $pesan = $_POST["pesan"];
    $errors = array();

    // validasi nama
    if (empty($nama)) {
        $errors['nama'] = "Nama harus diisi!";
    } elseif (strlen($nama) < 3) {
        $errors['nama'] = "Nama Lengkap minimal 3 karakter!";
    }

    // validasi email
    if (empty($email)) {
        $errors['email'] = "Email harus diisi!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email tidak valid!";
    }

    // validasi subjek
    if (empty($subjek)) {
        $errors['subjek'] = "Subjek harus diisi!";
    }

    // validasi pesan
    if (empty($pesan)) {
        $errors['pesan'] = "Pesan harus diisi!";
    }

    // jika ada kesalahan validasi
    if (!empty($errors)) {
        echo json_encode(['errors' => $errors]);
    } else {
        $to = $email;
        $subject = '=?UTF-8?B?' . base64_encode($subjek) . '?=';
        $message = "From: $nama\r\n\r\n$pesan";
        
        // Header email
        $headers = "From: alvanzasaputra123734@gmail.com\r\n";
        $headers .= "Reply-To: alvanzasaputra123734@gmail.com\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        $mailSent = mail($to, $subject, $message, $headers);

        if ($mailSent) {
            echo json_encode(['success' => "Email berhasil dikirim!"]);
        } else {
            $lastError = error_get_last();
            $errorMessage = $lastError ? $lastError['message'] : "Tidak ada informasi error tambahan.";
            echo json_encode(['errors' => ['email' => "Gagal mengirim email. Error: $errorMessage"]]);
        }
    }
}
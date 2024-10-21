<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengiriman Email</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="cssMail.css">
</head>
<body>
    <div class="container">
        <h1>Form Pengiriman Email</h1>
        <form id="emailForm">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama">
                <span id="nama-error" class="error"></span>
            </div>

            <div class="form-group">
                <label for="email">Email Tujuan:</label>
                <input type="email" id="email" name="email">
                <span id="email-error" class="error"></span>
            </div>

            <div class="form-group">
                <label for="subjek">Subjek:</label>
                <input type="text" id="subjek" name="subjek">
                <span id="subjek-error" class="error"></span>
            </div>

            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan"></textarea>
                <span id="pesan-error" class="error"></span>
            </div>

            <input type="submit" value="Kirim" class="submit-btn">
        </form>

        <div id="hasil" class="hasil"></div>
    </div>

    <script>
        $(document).ready(function() {
            $('#emailForm').submit(function(event) {       
                event.preventDefault();

                var formData = $("#emailForm").serialize();    

                $.ajax({
                    url: 'proses_mail.php',
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        $('.error').text('');
                        $('#hasil').html('');
                        
                        if (response.errors) {
                            if (response.errors.nama) {
                                $('#nama-error').text(response.errors.nama);
                            }
                            if (response.errors.email) {
                                $('#email-error').text(response.errors.email);
                            }
                            if (response.errors.subjek) {
                                $('#subjek-error').text(response.errors.subjek);
                            }                           
                            if (response.errors.pesan) {
                                $('#pesan-error').text(response.errors.pesan);
                            }                           
                        } else if (response.success) {
                            $("#hasil").html(response.success);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
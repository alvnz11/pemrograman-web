<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error" style="color: red"></span><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error" style="color: red"></span><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" class="error" style="color: red"></span><br><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
        $(document).ready(function() {
            $('#myForm').submit(function(event) {       
                event.preventDefault();

                var formData = $("#myForm").serialize();    

                $.ajax({
                    url: 'proses_validasi.php',
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
                            if (response.errors.password) {
                                $('#password-error').text(response.errors.password);
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
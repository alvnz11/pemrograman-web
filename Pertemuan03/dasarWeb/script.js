document.addEventListener('DOMContentLoaded', function() {
    var username = prompt("Masukkan Nama Anda:");
    
    if (username) {
        document.getElementById('welcome-header').innerHTML = `<h1>Selamat Datang, ${username}!</h1>`;
    }

    var sidebarLinks = document.querySelectorAll('.sidebar-satu a');
    
    for (var i = 0; i < sidebarLinks.length; i++) {
        sidebarLinks[i].addEventListener('click', function(event) {
            event.preventDefault(); 
            var leavePage = confirm("Apakah Anda yakin ingin meninggalkan halaman?");
            
            if (leavePage) {
                window.location.href = this.href; 
            }
        });
    }
});
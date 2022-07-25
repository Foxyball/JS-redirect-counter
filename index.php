<div class="alert alert-success" role="alert">
        <div class="sb-msg">
            <center></i><strong>Благодарим Ви , <?php echo $_POST["name"]; ?>!</strong> Вие успешно се регистрирахте! <strong>Очаквайте имейл.</strong></center>
            <center>
                <p>Ще бъдете пренасочени обратно след <strong><span id="counter">10</span></strong> секунда(и).</p>
            </center>
        </div>
    </div>



    <!-- js script redirect -->
    <script type="text/javascript">
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML) <= 0) {
                location.href = 'index.php';
            }
            if (parseInt(i.innerHTML) != 0) {
                i.innerHTML = parseInt(i.innerHTML) - 1;
            }
        }
        setInterval(function() {
            countdown();
        }, 1000);
    </script>

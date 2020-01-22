<script>
    function setUrlSearch(){

        var searchInput = document.getElementById("myInput");

        window.location.href = "?search=" + searchInput.value;
    }

    function setUrlRemove(){
        var emailSearch = document.getElementById("myEmail");
        window.location.href = "?search=" + emailSearch.value;
    }

    function setUrlRemove2(){
        var emailSearch2 = document.getElementById("myEmail2");
        window.location.href = "?search=" + emailSearch2.value;
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> --> <!-- Bootstrap4 for CDN (Content Delivery Network) -->
<script src="bootstrap-4.3.1/js/bootstrap.min.js"></script> <!-- Bootstrap4 for offline -->


<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <center>
        <hr class="footHr">
        &copy;2019
    </center>
    <br>

</body>

</html>
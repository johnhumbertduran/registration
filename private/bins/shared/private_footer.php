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
<!-- <script src="../../bootstrap-4.3.1/js/bootstrap.min.js"></script> --> <!-- Bootstrap4 for offline -->
<script src="jquery3.4.1/jquery3.4.1.js"></script> <!-- jQuery for offline -->
<script src="../../jquery3.4.1/jquery3.4.1.js"></script> <!-- jQuery for offline -->
<script src="bootstrap-4.4.1/js/bootstrap.min.js"></script> <!-- Bootstrap4 for offline -->
<script src="../../bootstrap-4.4.1/js/bootstrap.min.js"></script> <!-- Bootstrap4 for offline -->


    <center>
        <hr class="footHr">
        &copy;2019
    </center>
    <br>

</body>

</html>
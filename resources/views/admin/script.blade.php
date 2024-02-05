<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
<script type="text/javascript">
    const imgPre = document.querySelector(".img-pre");

    function getImg(event) {
        const src = URL.createObjectURL(event.target.files[0]);
        imgPre.src = src;
    }
</script>

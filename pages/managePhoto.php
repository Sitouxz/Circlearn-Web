<link rel="stylesheet" href="../assets/css/managePhoto.css" />
<div class="popup-container" id="popup">
    <div class="close-btn">
        <a href="javascript:void(0);" class="icon" onclick="closeProfile()">
            <i class="fa fa-close"></i>
        </a>
    </div>
    <div class="photo-btn">
        <button class="Upload">Upload photo</button>
        <button class="Delete">Delete photo</button>
    </div>
</div>


<script>
function openProfile() {
    var x = document.getElementById("popup");
    x.style.display = "block";
}

function closeProfile() {
    var x = document.getElementById("popup");
    x.style.display = "none";
}
</script>
</body>
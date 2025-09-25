<body>
<?php
include('database.php');
?>
<div class=header>
    <div class="logo">
        <a id="linkindex" href="../../Gachalytics/homepage/index.php" target="_self"><img id="logo" src="../../../Gachalytics/imagens/Logo.jpg"></a>
    </div>
    <div class = "left-links">
    <div style = "background-color: #8671a1;" class = "link">
            <a style = "text-decoration: none;" href="../../Gachalytics/editor/login.php" target="_blank">
                <div class = "linkbtn">
                    <div class = "text.social">
                        <p class = "link.text">Editor Login</p>
                    </div>
                </div>
            </a>
        </div>       
        <div style = "background-color: #8671a1;" class = "link">
            <a style = "text-decoration: none;" href="" target="_blank">
                <div class = "linkbtn">
                    <div class = "text.social">
                        <p class = "link.text">Our Discord</p>
                    </div>
                </div>
            </a>
        </div>   
    </div>
</div>
<div class="background" id="background"></div>
<div class="gradient-overlay"></div>
<script>
window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    const gradientOverlay = document.querySelector('.gradient-overlay');
    const maxScroll = window.innerHeight;
    const opacity = Math.min(scrollPosition / maxScroll, 1); 

    gradientOverlay.style.opacity = opacity; 
});
</script>
<div id="corpo">
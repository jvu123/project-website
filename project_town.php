<!DOCTYPE html>
<html lang="en">
    
<?php include('templates/navbar.php'); ?>

    <div class="intro">
        <h1>Town</h1>
        <p>Welcome to the Town!</p>
    </div>

    </section>

    <!---Shops-->

    <section class="shop">
        <h1>Explore Shops</h1>

        <div class="row">
            <div class="shop-col">
                <img src="images/weapon.webp">
                <div class="layer">
                    <h3>Better Weapons</h3>
                    <a href=""></a>
                </div>
            </div>
            <div class="shop-col">
                <img src="images/armor.png">
                <div class="layer">
                    <h3>Better Armor</h3>
                    <a href=""></a>
                </div>
            </div>
            <div class="shop-col">
                <img src="images/accessory.webp">
                <div class="layer">
                    <h3>Better Accessories</h3>
                    <a href=""></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Location section -->

    <section class="location">
        <h1>Explore Locations</h1>

        <div class="ex-row">
            <div class="ex-location-col">
                <img src="images/village.jpg">
                <div class="layer">
                    <h3>Prev: Village</h3>
                    <a href="project_village.php"></a>
                </div>
            </div>
            <div class="ex-location-col">
                <img src="images/city.jpg">
                <div class="layer">
                    <h3>Next: City</h3>
                    <a href="project_city.php"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <?php include('templates/footer.php'); ?>

<!-------JavaScript for Toggle Menu ----->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>

<!---JavaScript for Sticky Nav Bar-->
<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}
</script>

</body>
</html>
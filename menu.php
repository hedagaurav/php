
        <?php require "header.html"; ?>

        <!-- Main Content Start -->
        <div class="main_content">
            <p>menu navigation</p>
            <div>
                <ul>
                    <li>veg</li>
                    <li>nonveg</li>
                    <li>sides</li>
                    <li>beverages</li>
                    <li>Dessert</li>
                </ul>
            </div>
            <?php include "connection.php";?>
            <h3>Menu</h3>

            <!-- Veg Items -->

            <?php 
				$result = $conn->query("select * from accounts");
                echo "no of rows in result table = ".$result->num_rows;
                ?>
            <div class="food-menu">
                <?php
				    for ($i=0; $i < 4; $i++) { 
			    ?>
                <div class="card">
                    <div class="card-image">
                        <img src="./media/images/journey.jpg" alt="pizza image">
                    </div>
                    <div class="card-content">
                        <p class="card-title">pizza name</p>
                        <a href="#">View Details</a>
                    </div>
                </div>
                <?php }?>
            </div>
            <!-- Non Veg Items -->
            <!-- Main Content End -->
        </div>
        <!-- Footer -->
        <?php include "footer.php"; ?>
    </div>
</body>

</html>
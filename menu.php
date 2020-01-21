<?php 
$title = "Menu";
require "header.php";
if(!isset($_SESSION['user_id'])){
    header('location: http://'. $_SERVER['HTTP_HOST'] .'/php/login.php');
    die();
}
?>
<!-- Main Content Start -->
<div class="main_content">

    <div class="food_nav">
        <ul class="nav_list">
            <li class="nav_item"><a href="#veg">Veg</a></li>
            <li class="nav_item"><a href="#non_veg">Non Veg</a></li>
            <li class="nav_item"><a href="#veg">Sides</a></li>
            <li class="nav_item"><a href="#veg">Beverages</a></li>
            <li class="nav_item"><a href="#veg">Dessert</a></li>
        </ul>
    </div>


    <h3>Menu</h3>
    <!-- Display Menu -->
    <?php include "connection.php";

    $sql = "select * from items";
    $v = array();
    $nv = array();

    if($result = $conn->query($sql)){
        echo "no of rows in result variable = ".$result->num_rows;
        if($result->num_rows > 0) :

            while($row= $result->fetch_object()) :
                $c = $row->category;
                if ($c == "veg"){           
                    array_push($v, $row);
                }elseif($c == "Non-veg"){
                    array_push($nv, $row);
                }

            endwhile;
            ?>
            <!-- Veg Items -->
            <div id="veg">
                <h3>Veg</h3>
                <div class="food-items">
                    <?php for ($i=0; $i < count($v); $i++) : ?>

                        <div class="card">
                            <div class="card-image">
                                <img src="./media/images/<?php echo $v[$i]->image_name.'.'.$v[$i]->extension; ?>" alt="pizza image">
                            </div>
                            <hr>
                            <div class="card-content">
                                <div>
                                    <h3 class="card-title"><?= $v[$i]->name; ?></h3>
                                    <p class="card-desc"><?= $v[$i]->description; ?></p>
                                </div>
                                <div class="size">
                                    <select name="size" class="ss" onchange="sizechange(this.value)">
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                    </select>
                                </div>
                                <div class="price">
                                    <h4>&#8377;<span id="price"><?= $nv[$i]->price; ?></span></h4>
                                    <!-- <input type="text" value="&#8377;<?= $nv[$i]->price; ?>" readonly> -->
                                </div>
                                <div class="quantity">
                                    <button type="button">&minus;</button>
                                    <input type="text" name="quantity" id="quantity" value="0">
                                    <button type="button">&plus;</button>
                                </div>
                                <a class="btn btn-outline-danger card-btn" href="#">Add to Cart</a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>

            <!-- Non Veg Items -->
            <div id="non_veg">
                <h3>Non Veg</h3>
                <div class="food-items">
                    <?php for ($i=0; $i < count($nv); $i++) : ?>

                        <div class="card">
                            <div class="card-image">
                                <img src="./media/images/<?php echo $nv[$i]->image_name.'.'.$nv[$i]->extension; ?>" alt="pizza image">
                            </div>
                            <hr>
                            <div class="card-content">
                                <div>
                                    <h3 class="card-title"><?= $nv[$i]->name; ?></h3>
                                    <p class="card-desc"><?= $nv[$i]->description; ?></p>
                                </div>
                                <div class="size">
                                    <select name="size" class="ss" onchange="sizechange(this.value)">
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                    </select>
                                </div>
                                <div class="price">
                                    <h4>&#8377;<span id="price"><?= $nv[$i]->price; ?></span></h4>
                                    <!-- <input type="text" value="&#8377;<?= $nv[$i]->price; ?>" readonly> -->
                                </div>
                                <div class="quantity">
                                    <button type="button">&minus;</button>
                                    <input type="text" name="quantity" id="quantity" value="0">
                                    <button type="button">&plus;</button>
                                </div>
                                <a class="btn btn-outline-danger card-btn" href="#">Add to Cart</a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>


            <?php
            
            //  result->num_rows
        else :
            echo "No Rows Found.";
        endif;
    }else{
        echo "errors = ".$conn->error;
    }


    ?>

    
    <!-- Main Content End -->
</div>
<!-- Footer -->
<?php include "footer.php"; ?>
</div>
</body>

</html>
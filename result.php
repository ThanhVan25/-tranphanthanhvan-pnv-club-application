<?php 
    echo "<img src='https://png.pngtree.com/png-vector/20191212/ourlarge/pngtree-first-place-golden-medal-for-sport-podium-winner-png-image_2050416.jpg' style = 'width:200px'/> ";
    if(isset($_POST['name'])){
        echo "<h1> Thx you "  . $_POST['name'] . '!!!' .  "</h1>". "</br>";
    }

    if (isset($_POST['club'])){
        echo "We received your application for the " . $_POST['club']."</br>";
    }
    
    $checkbox_value = array();

    if(isset($_POST['array'])){
        $checkbox_arr = $_POST['array'];
        foreach($checkbox_arr as $value){
            array_push($checkbox_value,$value);
        }
    }
    $string_value = implode(" and " , $checkbox_value);
    echo "You are " . $string_value."</br>";

    if (isset($_POST['time'])){
        echo "You will you available on " . $_POST['time'];
    }
?>
<?php echo "</div>" ?>


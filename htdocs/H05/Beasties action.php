<?php

foreach ($_POST['animals'] as $animal){
    echo "<img  src='animal-images/".$animal.".jpg'>";

}
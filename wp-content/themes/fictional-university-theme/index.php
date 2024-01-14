<h1><?php bloginfo('nmae');                ?>
<!-- website name -->
</h1>

<!-- description -->
<p><?php bloginfo('description');                ?>
</p>

<p><?php bloginfo('url');                ?>
</p>

<!-- looping and arrays -->
<?php 
$names = array('Mero','nody','zezo','soso','mohamed');

$count = 0;
while ($count < count($names)) {
    echo "<li>$names[$count]</li>" ;
   $count++;
}


// function greet() {

// }




?>
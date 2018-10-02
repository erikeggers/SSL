
<header>
    <nav>
        <ul>

            <? 

            foreach($data as $key => $value) {
                echo "<li><a href='$key' class='nav-links'>$value</a></li>";
            }

            ?>


        </ul>
    </nav>
</header>
<body>
    <div class="container">
        <!--?php
        foreach($albums as $album)
        {
            echo('<div class="card">');
            echo('<img src=' . $album["poster"] . ' >');
            echo($album["title"]);
            echo($album["author"]);
            echo($album["year"]);
            echo($album["genre"]);
            echo('</div>');
        }
        ?-->
        <?php
            include (__DIR__ . '/card.php'); 
        ?>
    </div>
</body>
</html>
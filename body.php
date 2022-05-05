<body>
    <div class="container">
        <?php
        foreach($albums as $album)
        {
            echo('<div class="card">');
            echo($album["author"]);
            echo($album["genre"]);
            echo('<img src=' . $album["poster"] . ' >');
            echo($album["title"]);
            echo($album["year"]);
            echo('</div>');
        }
        ?>
    </div>
</body>
</html>
   <?php
        foreach($albums as $album)
        {
            echo('<div class="card">');
            echo('<img src=' . $album["poster"] . ' >');
            echo('<span>' . $album["title"] . '</span>');
            echo('<span>' . $album["author"] . '</span>');
            echo('<span>' . $album["year"] . '</span>');
            echo('<span>' . $album["genre"] . '</span>');
            echo('</div>');
        }
    ?>

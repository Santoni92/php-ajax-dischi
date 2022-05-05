<body>
    <?php
        include (__DIR__ . '/header.php');
    ?>
    <!-- div class="container">
        < ?php
            include (__DIR__ . '/card.php'); 
        ? >

    </div -->

     <!--Seconda Milestone: Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.--> 
    <div id="app">
        <div class="container">
            <div v-for="album">

            </div>
        </div>
    </div>


    <!--collego il mio script js -->
    <script src="script.js"></script>
</body>
</html>
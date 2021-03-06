<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 2: Tehtävä 4</title>
</head>
<body>
    <?php
        
        session_start();
        $nappi = "";

        // $_SESSION['lkm'] alustetaan ensimmäisellä kerralla
        if (!isset($_SESSION['lkm'])) {
            $_SESSION['lkm'] = 0;
        }

        // if button is pressed, increment counter
        if(isset($_GET['painike'])) {
            $_SESSION['lkm']++;
            
            switch ($_SESSION['lkm']) {
                case "1":
                    $nappi = "Yksi kerta riittää";
                    break;
                case "2":
                    $nappi = "Kaksi kertaa riittää";
                    break;
                case "3":
                    $nappi = "Kolme kertaa riittää";
                    break;
                default:
                    $_SESSION['lkm'] = 0;
                    $nappi = "";
            }
        }
        
        $hullunappi = <<< EONappi
        <form action="{$_SERVER['PHP_SELF']}" method="get">
            <input type="submit" name="painike" value="Paina minua">
            <input type="text" name="msg" value="$nappi">
        </form>
        EONappi;

        echo $hullunappi;
    ?>

</body>
</html>
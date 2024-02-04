<?php

    if (!empty($_POST['P1Hit']['Hit']))
    {
        echo "HIT";
    }
    elseif(!empty($_POST['P1Stand']['Stand']))
    {
        echo 'STAND';
    }

    if (!empty($_POST['P2Hit']['Hit']))
    {
        echo 'HIT';
        
    }
    elseif(!empty($_POST['P2Stand']['Stand']))
    {
        echo 'STAND';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_POST['reset']))
        {
            $reset = $_POST['reset'];
            if (empty($reset))
            {
                echo "";
            }
            else
            {
                echo "";
            }
        }
    }


?>
    
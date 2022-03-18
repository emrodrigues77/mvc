<?php


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Players</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <div id="main">
        <h1>Players</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Jersey</th>
                    <th>Position</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>



                <?php

                foreach ($_POST['data'] as $player) {
                    echo "<tr>";
                    echo "<td>" . $player->id . "</td>";
                    echo "<td>" . sprintf("%s %s", $player->firstName, $player->lastName) . "</td>";
                    echo "<td>" . $player->jersey . "</td>";
                    echo "<td>" . $player->position . "</td>";
                    echo "</tr>";
                }
                ?>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">
                        <hr />
                    </td>
                </tr>
            </tfoot>
        </table>

    </div>

    <script src="" async defer></script>
</body>

</html>
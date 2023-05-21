
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $daypermonth = date('t');
    ?>

    <div class="container">
        <div class="calendar">
            <header>
              <h2><?= date('M')?></h2>
              <h2><?=date('Y')?></h2>
                <a class="btn-prev fontawesome-angle-left" href="#"></a>
                <a class="btn-next fontawesome-angle-right" href="#"></a>
            </header>
            <table>
                <thead>
                    <tr>
                        <td>Mo</td>
                        <td>Tu</td>
                        <td>We</td>
                        <td>Th</td>
                        <td>Fr</td>
                        <td>Sa</td>
                        <td>Su</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="prev-month">29</td>
                        <td class="prev-month">30</td>
                        <td class="prev-month">31</td>
                        <?php 
               for ($day=1; $day <= $daypermonth ; $day++) { ?>
                        <td class="<?= $day == date('d') ? 'current-day' : '' ?>"><?= $day ?></td>
                        <?php
               }
               ?>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div> 
</body>
</html>

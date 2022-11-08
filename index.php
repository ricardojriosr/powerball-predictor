<?php
$winningNumbers = [];
$j = 0;
if ($file = fopen("numbers.txt", "r")) {
    while(!feof($file)) {
        $textperline = fgets($file);
        $textSplitted = explode("|", $textperline);
        $numbersSplitted = explode(",",$textSplitted[0]);
        // 02, 11, 22, 35, 60, 23
        for ($i = 0; $i < 6; $i++) {
            $winningNumbers[$j][$i] = trim($numbersSplitted[$i]);
        }
        $j++;
    }
    fclose($file);
}

$winningNumbers1 = [];
$winningNumbers2 = [];
$winningNumbers3 = [];
$winningNumbers4 = [];
$winningNumbers5 = [];
$winningNumbers6 = [];

foreach($winningNumbers as $index => $value) {
    $winningNumbers1[] = $value[0];
    $winningNumbers2[] = $value[1];
    $winningNumbers3[] = $value[2];
    $winningNumbers4[] = $value[3];
    $winningNumbers5[] = $value[4];
    $winningNumbers6[] = $value[5];
}
$counts1 = array_count_values($winningNumbers1);
$counts2 = array_count_values($winningNumbers2);
$counts3 = array_count_values($winningNumbers3);
$counts4 = array_count_values($winningNumbers4);
$counts5 = array_count_values($winningNumbers5);
$counts6 = array_count_values($winningNumbers6);

arsort($counts1);
arsort($counts2);
arsort($counts3);
arsort($counts4);
arsort($counts5);
arsort($counts6);

if ((isset($_GET['debug'])) && ($_GET['debug'] == '1')) {
    echo '<pre>',print_r($counts1),'</pre>';
    echo '<pre>',print_r($counts2),'</pre>';
    echo '<pre>',print_r($counts3),'</pre>';
    echo '<pre>',print_r($counts4),'</pre>';
    echo '<pre>',print_r($counts5),'</pre>';
    echo '<pre>',print_r($counts6),'</pre>';
}

$result1 = $counts1;
$result2 = $counts2;
$result3 = $counts3;
$result4 = $counts4;
$result5 = $counts5;
$result6 = $counts6;
$textWinningNumber1 = '';
$textWinningNumber2 = '';
$textWinningNumber3 = '';
$textWinningNumber4 = '';
$textWinningNumber5 = '';
$textWinningNumber6 = '';
$textWinningNumber1_2 = '28';
$textWinningNumber2_2 = '';
$textWinningNumber3_2 = '';
$textWinningNumber4_2 = '';
$textWinningNumber5_2 = '';
$textWinningNumber6_2 = '';
$simposns1 = '06';
$simposns2 = '27';
$simposns3 = '32';
$simposns4 = '14';
$simposns5 = '47';
$simposns6 = '55';
$simposns7 = '62';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotery Numbers Predictor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-2 mb-2">Lotery Numbers Predictor</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Second</th>
                    <th scope="col">Third</th>
                    <th scope="col">Fourth</th>
                    <th scope="col">Fifth</th>
                    <th scope="col">Power Ball</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i <= 10; $i++) { ?>
                <tr>
                    <td><?php echo key($result1); ?></td>
                    <td><?php echo key($result2); ?></td>
                    <td><?php echo key($result3); ?></td>
                    <td><?php echo key($result4); ?></td>
                    <td><?php echo key($result5); ?></td>
                    <td><?php echo key($result6); ?></td>
                    <?php
                    if ($i == 0) {
                        $textWinningNumber5_2 = key($result5);
                    }
                    if ($i == 1) {
                        $textWinningNumber3 = key($result3);
                    }
                    if ($i == 2) {
                        $textWinningNumber6_2 = key($result6);
                    }
                    if ($i == 4) {
                        $textWinningNumber2 = key($result2);
                        $textWinningNumber4 = key($result4);
                    }
                    if ($i == 5) {
                        $textWinningNumber1 = key($result1);
                        $textWinningNumber2_2 = key($result2);
                        $textWinningNumber3_2 = key($result3);
                        $textWinningNumber4_2 = key($result4);
                    }
                    if ($i == 6) {
                        $textWinningNumber6 = key($result6);
                    }
                    if ($i == 10) {
                        $textWinningNumber5 = key($result5);
                    }
                    ?>
                </tr>
                    <?php
                    unset($result1[key($result1)]);
                    unset($result2[key($result2)]);
                    unset($result3[key($result3)]);
                    unset($result4[key($result4)]);
                    unset($result5[key($result5)]);
                    unset($result6[key($result6)]);
                    ?>
                <?php } ?>
                <tr>
                    <td><?php echo $textWinningNumber1; ?></td>
                    <td><?php echo $textWinningNumber2; ?></td>
                    <td><?php echo $textWinningNumber3; ?></td>
                    <td><?php echo $textWinningNumber4; ?></td>
                    <td><?php echo $textWinningNumber5; ?></td>
                    <td><?php echo $textWinningNumber6; ?></td>
                </tr>
                <tr>
                    <td><?php echo $textWinningNumber1_2; ?></td>
                    <td><?php echo $textWinningNumber2_2; ?></td>
                    <td><?php echo $textWinningNumber3_2; ?></td>
                    <td><?php echo $textWinningNumber4_2; ?></td>
                    <td><?php echo $textWinningNumber5_2; ?></td>
                    <td><?php echo $textWinningNumber6_2; ?></td>
                </tr>
                <tr>
                    <td><?php echo $simposns1; ?></td>
                    <td><?php echo $simposns2; ?></td>
                    <td><?php echo $simposns3; ?></td>
                    <td><?php echo $simposns4; ?></td>
                    <td><?php echo $simposns5; ?></td>
                    <td><?php echo $textWinningNumber6_2; ?></td>
                </tr>
                <tr>
                    <td><?php echo $simposns1; ?></td>
                    <td><?php echo $simposns2; ?></td>
                    <td><?php echo $simposns3; ?></td>
                    <td><?php echo $simposns6; ?></td>
                    <td><?php echo $simposns7; ?></td>
                    <td><?php echo $textWinningNumber6_2; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


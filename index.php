<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Triangle Edge Finder</title>
</head>
<body>
            <?php
                if (isset($_POST["left"], $_POST["right"], $_POST["bottom"])) {
                    $left = $_POST["left"];
                    $right = $_POST["right"];
                    $bottom = $_POST["bottom"];
                    $text = 'Try Again';
                    $href = 'href="http://localhost/triangle-edge-finder/"';
                    if ($left == null) {
                        $left = ($right * $right) - ($bottom * $bottom);
                        $left = number_format(sqrt($left), 2);
                        $resultstyle1 = 'background-color:#288c44;color:#fff;text-shadow:0 0 3px #000;border:1px solid #fff;';
                    }
                    if ($right == null) {
                        $right = ($left * $left) + ($bottom * $bottom);
                        $right = number_format(sqrt($right), 2);
                        $resultstyle2 = 'background-color:#288c44;color:#fff;text-shadow:0 0 3px #000;border:1px solid #fff;';
                    }
                    if ($bottom == null) {
                        $bottom = ($right * $right) - ($left * $left);
                        $bottom = number_format(sqrt($bottom), 2);
                        $resultstyle3 = 'background-color:#288c44;color:#fff;text-shadow:0 0 3px #000;border:1px solid #fff;';
                    }
                } else {
                    $left = null;
                    $right = null;
                    $bottom = null;
                    $text = 'Reset';
                    $href = 'type="reset"';
                }
            ?>
    <div class="container">
        <form action="" method="post">
            <div class="top">
                <div class="left">
                    <input type="number" name="left" id="left" style="<?php echo $resultstyle1; ?>" value="<?php echo $left;?>">
                    <span>=</span>
                </div>
                <div class="right">
                    <span>=</span>
                    <input type="number" name="right" id="right" style="<?php echo $resultstyle2; ?>" value="<?php echo $right;?>">
                </div>
            </div>
            <div class="bottom">
                <input type="number" name="bottom" id="bottom" style="<?php echo $resultstyle3; ?>" value="<?php echo $bottom;?>">
                <span style="font-weight: bold;">||</span>
            </div>
    </div>
    <div class="buttons" style="margin:3vh;">
        <button type="submit">Calculate</button>
        <button <?php echo $href; ?> ><?php echo $text; ?></button>
    </div>
        </form>
</body>
</html>
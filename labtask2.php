<?php
error_reporting(0);
$category = array("Neatness", "Crayon Control", "Creativity", "Background");

if (isset($_POST['btncalculate'])) {
    $name = $_POST['fullname'];
    $class = $_POST['class'];
    $date = $_POST['date'];
    $juryname = $_POST['juryname'];
    $mark = $_POST['marks'];

    // print_r($category);
    $total = 0;
    // $index = 0;

    foreach ($mark as $jumlah) {
        $total += $jumlah;
    }


    if ($total <= 100 && $total >= 80) {
        $result = "Gold";
    } elseif ($total <= 79 && $total >= 60) {
        $result = "Silver ";
    } elseif ($total <= 64 && $total >= 50) {
        $result = "Bronze ";
    } elseif ($total <= 50 && $total >= 0) {
        $result = "Sorry, You get Nothing ";
    } else {
        $result = "Please Enter the marks correctly";
        $total = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="labtask2.css">
    <title>Laboratory Task 2</title>
</head>

<body>
    <div class="logo">
        <img src="./Sekolah_Kebangsaan_Batu_7.jpg" alt="">
    </div>
    <div class="kep">
        <h3>Sekolah Kebangsaan Batu 7 Colouring Contest</h3>
    </div>
    <center>

        <div class="table">
            <table class="tgh">

                <form action="" method="post">
                    <tr>
                        <td>Date</td>
                        <td><input type="date" name="date" required></td>
                    </tr>
                    <tr>
                        <td>Full Name</td>
                        <td><input type="text" size="50" name="fullname" required></td>
                    </tr>
                    <tr>
                        <td>Class</td>
                        <td><input type="text" size="50" name="class" required></td>
                    </tr>

                    <tr>
                        <td>Jury Name</td>
                        <td><input type="text" size="50" name="juryname" required></td>
                    </tr>
                    <?php
                    for ($i = 0; $i < count($category); $i++) {
                    ?>
                        <tr>
                            <td> <?php echo $category[$i]; ?></td>
                            <td><input type="text" size="50" name="marks[<?php echo $i ?>]"></td>
                            <?php echo '<br>' ?>
                        </tr>
                    <?php
                    }
                    ?>

                    <tr>

                        <td colspan="2" align="center"><input type="submit" name="btncalculate" value="Calculate"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">Total Mark: <?php echo $total; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">Result: <?php echo $result; ?></td>
                    </tr>
                </form>
            </table>
        </div>
    </center>



</body>

</html>
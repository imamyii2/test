<?php
@$nilai1 = $_POST['nilai1'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Grade</title>
    </head>
    <body>
        <form method="POST">
            Masukan nilai = 
            <input type="text" name="nilai1" value="<?php echo $nilai1; ?>"/><br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
            if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 <= 50) {
                echo 'Nilai : ' . $nilai1 . '; Grade = E.';
            } else if ($nilai1 >= 51 && $nilai1 <= 60) {
                echo 'Nilai : ' . $nilai1 . '; Grade = D';
            } else if ($nilai1 >= 61 && $nilai1 <= 65) {
                echo 'Nilai : ' . $nilai1 . '; Grade = C';
            } else if ($nilai1 >= 66 && $nilai1 <= 75) {
                echo 'Nilai : ' . $nilai1 . '; Grade = C+';
            } else if ($nilai1 >= 76 && $nilai1 <= 80) {
                echo 'Nilai : ' . $nilai1 . '; Grade = B';
            } else if ($nilai1 >= 81 && $nilai1 <= 90) {
                echo 'Nilai : ' . $nilai1 . '; Grade = B+';
            } else if ($nilai1 >= 91 && $nilai1 <= 100) {
                echo 'Nilai : ' . $nilai1 . '; Grade = A';
            } else {
                echo 'Nilai : ' . $nilai1 . '; tidak berada dalam GRADE bilangan.';
            }
            ?>
        </form>
    </body>
</html>
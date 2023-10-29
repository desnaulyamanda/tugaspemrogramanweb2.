<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <style>
            .heiglight{
                color: #1A0547;
                font-weight: bolder;
                font-style: italic;
                text:28px;
                border: 1px solid;
            }
        </style>
    </head>
<body>
    <?php
    function ganti_style ($tulisan,$kelas) {
        return '<span class="' .$kelas . '">' . $tulisan . '</span>';
    }

    $tulisan = "hello world! HERE I come!";
    $kelas = "ganti-style";

    $styledText = ganti_style($tulisan,$kelas);
    echo $styledText;
?>
</body>
</html>
<?php
function styleText($jawabanIsset, $jawabanEmpty) {
    $style = "font-size:28px; font-family: Aril; border: solid; padding:10px;";
    $styledText = "<p style='$style'>$jawabanIsset $jawabanEmpty</p>";

    return $styledText
}

$jawabanIsset = "Isset adalah= variabel yang telah didefinisikan dan memiliki nilai <br><br>"; 

$jawabanEmpty = "Empty adalah= Varibel yang telah didefinisikan, tetapi nilainya kosong."; 

echo $styledText;
?>
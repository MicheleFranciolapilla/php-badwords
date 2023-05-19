<?php
    $the_paragraph = $_GET['my_paragraph'];
    $the_bad_word = $_GET['my_bad_word'];
    $final_paragraph = str_replace($the_bad_word, "***",$the_paragraph);
    echo "Il paragrafo che hai digitato è: <<< " . $the_paragraph. " >>><br>";
    echo "La lunghezza del paragrafo è di ".strlen($the_paragraph)." caratteri.<br>";
    echo "--------------------------------------<br>";
    echo "Segue il tuo paragrafo modificato (dopo la censura della parola <<< ".$the_bad_word." >>> : <br>";
    echo $final_paragraph."<br>";
    echo "La lunghezza del paragrafo modificato è di ".strlen($final_paragraph)." caratteri<br>";
    echo "--------------------------------------<br>";
    echo "--------------------------------------<br>";
    echo "--------------------------------------<br>";
    echo "Utilizziamo un pò il var_dump<br><br>";
    var_dump($the_paragraph);
    var_dump($the_bad_word);
    var_dump($final_paragraph);
    echo "Segue il tuo paragrafo 'esploso' intorno ai simboli di censura '***':<br>";
    var_dump(explode("***",$final_paragraph));


?>
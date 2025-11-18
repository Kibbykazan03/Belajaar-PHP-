<?php

$txt = "Abeey.com";
echo "Aku belajar pemrograman PHP di " . $txt . "<br>";
// biasanya kita menggunakan fungsi echo seperti ini

$txt = "Abeey.com";
printf("Aku belajar pemrograman PHP di %s<br>", $txt);
// namun kita juga bisa menggunakan fungsi printf seperti ini
// terdapat simbo %s yang di sebut sebagai placeholder untuk teks(sting)

/* selain %s,juga terdapat placeholder lain seperti;
    -> %d untuk bilngan desimal (integer)
    -> %f untuk bilangan float
    -> %b untuk boolean
*/

?>
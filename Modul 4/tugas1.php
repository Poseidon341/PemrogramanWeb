<?php
function generator($n)
{
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "HelloWorld\n";
        } elseif ($i % 3 === 0) {
            echo "Hello\n";
        } elseif ($i % 5 === 0) {
            echo "World\n";
        } else {
            echo "$i\n";
        }
    }
}

generator(15);
?>

//Kode PHP yang Anda berikan adalah sebuah fungsi yang disebut generator yang menghasilkan output berdasarkan aturan tertentu untuk serangkaian angka dari 1 hingga n. Di sini, n diberikan sebagai argumen saat memanggil fungsi generator(15). Mari kita jelaskan kode tersebut baris per baris:

function generator($n): Ini adalah deklarasi fungsi bernama generator yang menerima satu parameter, yaitu $n.

for ($i = 1; $i <= $n; $i++): Inisialisasi variabel $i dengan 1, dan lakukan perulangan sebanyak $n kali. Pada setiap iterasi, nilai $i akan bertambah satu.

Dalam perulangan, terdapat serangkaian kondisional (if, elseif, dan else) untuk menentukan output yang akan dicetak berdasarkan nilai $i.

if ($i % 3 === 0 && $i % 5 === 0): Jika nilai $i habis dibagi 3 dan 5, maka cetak "HelloWorld".
elseif ($i % 3 === 0): Jika nilai $i habis dibagi 3, maka cetak "Hello".
elseif ($i % 5 === 0): Jika nilai $i habis dibagi 5, maka cetak "World".
else: Jika tidak memenuhi kedua kondisi sebelumnya, cetak nilai $i itu sendiri.
generator(15): Memanggil fungsi generator dengan argumen 15, yang akan mengeksekusi perulangan dari 1 hingga 15 dan mencetak output sesuai aturan yang ditetapkan.

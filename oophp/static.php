<?php
// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         // pada $this
//         // $this->angka; hanya dapat dilakukan jika sudah melakukan instansiasi
//         return "Halo." . self::$angka++ . "Kali.";
//     }
// }

// // static dapat di akses tanpa instansiasi
// // $obj = new ContohStatic();

// // cara mengakses keyword static pada class ContohStatic
// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "Halo." . self::$angka++ . "Kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";
$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

// static keyword
// member yang terikat dengan class, bukan dengan object
// nilai static akan selalu tetap meskipun object di instansiasi berulang-kali
// membuat kode menjadi 'procedural'
// biasanya digunakan untuk membuat fungsi bantuan / helper
// atau digunakan di class-class utility pada Framework

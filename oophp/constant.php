<?php
// constant atau constanta adalah sebuah
// identifier untuk menyimpan nilai
// nilainya tidak berubah ketika kita sudah set
// di program kita berbeda dengan variabel
// ada 2 cara menggunakan constant yaitu
// define() dan const

// define tidak bisa simpan ke dalam sebuah class, 
// harus disimpan di luar class, sebagai sebuah constanta global
// define('NAMA', 'Ilham Ahmad');
// echo NAMA;

// echo "<br>";
// dapat di simpan ke dalam sebuah class, bisa digunakan untuk
// OOP
// const UMUR = 21;
// echo UMUR;

// class Coba
// {
//     const NAMA = "Ilham Ahmad";
// }
// echo Coba::NAMA;

// magic constant
// __LINE__ akan menampilkan baris program
echo __LINE__;
echo "<br>";

// akan menampilkan alamat dari file yg bersangkutan
echo __FILE__;

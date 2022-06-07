import 'package:flutter/material.dart';

class Motor {
  final String nama, merk, thnProduksi, description, image, tipe;
  final int id;
  
  Motor({
    required this.id,
    required this.nama,
    required this.merk,
    required this.tipe,
    required this.thnProduksi,
    required this.description,
    required this.image,
  });

}

var motorList = [
    Motor(
      id: 1,
      nama: "Honda Vario 125 CBS (2018)",
      merk: "Honda",
      tipe: "Skkuter",
      thnProduksi: "2006–2014",
      description: "Diperkenalkan pada tanggal 4 Agustus 2006, dan merupakan skuter otomatis pertama Honda yang beredar dalam pasar sepeda motor Indonesia yang memiliki mesin",
      image: "images/honda.jpg",
    ),
    Motor(
      id: 1,
      nama: "Honda BeAT eSP CBS 110",
      merk: "Honda",
      tipe: "Skkuter",
      thnProduksi: "2006–2014",
      description: "Motor Honda ini menggunakan mesin eSP tercanggih yang membuat mesin hemat BBM namun dengan tarikan yang kuat. Dengan begitu memungkinkan anda berkendara dengan kecepatan maksimal namun tidak membutuhkan banyak bahan bakar meski menempuh jarak yang cukup jauh",
      image: "images/beat.jpg",
    ),
    Motor(
      id: 1,
      nama: "Vario FI/eSP 110",
      merk: "Honda",
      tipe: "Skkuter",
      thnProduksi: "2014–2015 ",
      description: "Diperkenalkan pada tanggal 27 Maret 2014, dan berbasis dari skuter matik Honda Beat FI dan Honda Scoopy FI bersama Honda Blade 125 FI. Model ini adalah model pertama Vario yang tidak menggunakan radiator dalam sistem pendinginan mesinnya, karena telah menggunakan basis mesin dari BeAT FI yang berpendingin udara dan juga dilengkapi dengan sistem pengabutan bahan bakar injeksi, meninggalkan pengabutan karburator dari model Vario 110 yang sebelumnya. Honda mengklaim, dengan beberapa penyesuaian, karakter mesin yang dimiliki Vario FI berbeda dengan BeAT FI.[4] Banyak komponen teknis dari Vario FI yang berbagi dengan BeAT FI, salah satunya seperti suspensi belakang yang tidak menggunakan lengan ayun seperti model Vario 110 sebelumnya. Model ini dilengkapi dengan varian CBS seperti Vario Techno 110, dan dilengkapi fitur tambahan seperti Remote Answer Back System dan lampu penerangan utama LED.[5]",
      image: "images/vi110.jpg",
    ),
    Motor(
      id: 1,
      nama: "Vario Techno 150",
      merk: "Honda",
      tipe: "Skkuter",
      thnProduksi: "2015–2022",
      description: "Diperkenalkan pada tanggal 14 Januari 2015, Vario 150 menggunakan mesin 149,3 cc (9,1 cu in) berpendingin cairan yang berbasis dari PCX 150, dilengkapi dengan ACG Starter dan Idling Stop System.Pada tanggal 16 April 2018, Vario 150 mengalami pembaruan desain bersamaan dengan Vario 125.",
      image: "images/v150.jpg",
    ),
    Motor(
      id: 1,
      nama: "Yamaha NM-X MBK Ocito ",
      merk: "Yamaha",
      tipe: "Skkuter",
      thnProduksi: "2015–sekarang",
      description: "Yamaha NMAX adalah sebuah skuter yang bertransmisi otomatis yang diproduksi oleh Yamaha di Indonesia sejak tahun 2015. Skuter ini pertama kali diluncurkan secara resmi pada tanggal 7 Februari 2015 di Sirkuit Sentul, Bogor, Jawa Barat.[1] Basis produksi skuter ini berada di Indonesia dan sudah diekspor ke berbagai negara sebagai model skuter global Yamaha.",
      image: "images/nmax.jpg",
    ),
    Motor(
      id: 1,
      nama: "Yamaha YZR-M1 ",
      merk: "Yamaha",
      tipe: "MotoGP",
      thnProduksi: "-",
      description: "MotoGP series.[1] Motor ini merupakan penerus dari YZR500 500 cc. Sejak itu, YZR-M1 terus dikembangkan. Motor ini pertama kali dipakai tahun 2002, di mana saat itu sudah bernama MotoGP dan melombakan motor 990cc. Pada awalnya, karena stoknya terbatas, maka baru tim pabrikanlah yang mendapatkan motor pabrikan. Yamaha YZR-M1 saat itu digunakan untuk tim pabrikan Yamaha, Marlboro Yamaha untuk Max Biaggi dan Carlos Checa. Beberapa seri berikutnya, Tech 3 lewat Shinya Nakano dan Olivier Jacque dan Norick Abe untuk Yamaha D'Antin.",
      image: "images/yzr.jpg",
    ),
]; 
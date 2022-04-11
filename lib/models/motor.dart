import 'package:flutter/material.dart';

class Motor {
  final String nama, merk, thnProduksi, description, image;
  final int id;
  
  Motor({
    required this.id,
    required this.nama,
    required this.merk,
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
      thnProduksi: "2006–2014",
      description: "Diperkenalkan pada tanggal 4 Agustus 2006, dan merupakan skuter otomatis pertama Honda yang beredar dalam pasar sepeda motor Indonesia yang memiliki mesin",
      image: "images/honda.jpg",
    ),
    Motor(
      id: 1,
      nama: "Honda Vario 125 CBS (2018)",
      merk: "Honda",
      thnProduksi: "2006–2014",
      description: "Diperkenalkan pada tanggal 4 Agustus 2006, dan merupakan skuter otomatis pertama Honda yang beredar dalam pasar sepeda motor Indonesia yang memiliki mesin",
      image: "images/honda.jpg",
    )
]; 
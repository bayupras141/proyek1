import 'package:flutter/material.dart';
import 'package:katalog_motor/pages/home.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Katalog Motor',
      theme: ThemeData(),
      home: HomeScreen(),
    );
  }
}
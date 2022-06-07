import 'dart:async';

import 'package:katalog_motor/models/motor.dart';
import 'package:sqflite/sqflite.dart';

class DatabaseHelper {
  static DatabaseHelper? _databaseHelper;
  DatabaseHelper._instance() {
    _databaseHelper = this;
  }

  factory DatabaseHelper() => _databaseHelper ?? DatabaseHelper._instance();

  static Database? _database;

  Future<Database?> get database async {
    if (_database == null) {
      _database = await _initDb();
    }
    return _database;
  }

  static const String _tbl = 'motor';

  Future<Database> _initDb() async {
    final path = await getDatabasesPath();
    final databasePath = '$path/motor.db';

    var db = await openDatabase(databasePath, version: 1, onCreate: _onCreate);
    return db;
  }

  void _onCreate(Database db, int version) async {
    await db.execute('''
      CREATE TABLE  '$_tbl' (
        id INTEGER PRIMARY KEY,
        nama TEXT,
        merk TEXT,
        tipe TEXT,
        thnProduksi TEXT,
        descreption TEXT,
        image TEXT,
      );
    ''');
  }

  _onOpen(Database db) async {
  // Database is open, print its version
  print('db version ${await db.getVersion()}');
}
}
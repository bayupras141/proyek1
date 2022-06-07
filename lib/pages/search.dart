import 'package:flutter/material.dart';
import 'package:katalog_motor/pages/detail.dart';
import 'package:katalog_motor/models/motor.dart';

class SearchPage extends StatefulWidget {
  @override
  _SearchPageState createState() => _SearchPageState();
}

class _SearchPageState extends State<SearchPage> {
  List<Motor> _motor = [];
  @override
  initState() {
    // at the beginning, all users are shown
    _motor = motorList;
    super.initState();
  }

  void _runFilter(String enteredKeyword) {
    List<Motor> results = [];
    if (enteredKeyword.isEmpty) {
      results = motorList;
    } else {
      results = motorList
          .where((motor) =>
              motor.nama.toLowerCase().contains(enteredKeyword.toLowerCase()))
          .toList();
    }

    // refresh the UI
    setState(() {
      _motor = results;
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        body: SafeArea(
      child: Container(
        decoration: BoxDecoration(
            gradient: LinearGradient(
                begin: Alignment.topRight,
                end: Alignment.bottomLeft,
                colors: [
              Color.fromARGB(255, 0, 117, 252),
              Color.fromARGB(255, 1, 52, 192)
            ])),
        child: SingleChildScrollView(
          child: Column(
            children: <Widget>[
              Container(
                padding: const EdgeInsets.all(16),
                child: Row(
                  children: <Widget>[
                    GestureDetector(
                        onTap: () {
                          Navigator.pop(context);
                        },
                        child: Icon(
                          Icons.arrow_back_ios,
                          color: Colors.white,
                        )),
                    Expanded(
                      child: Container(
                        height: 50,
                        child: TextField(
                          onChanged: (value) {
                            _runFilter(value);
                          },
                          decoration: InputDecoration(
                              prefixIcon: Icon(Icons.search_rounded),
                              border: OutlineInputBorder(
                                borderRadius: BorderRadius.circular(40.0),
                              ),
                              hintText: 'Search motor by name',
                              fillColor: Colors.white,
                              filled: true),
                          style: TextStyle(
                            fontSize: 18,
                          ),
                        ),
                      ),
                    ),
                  ],
                ),
              ),
              Container(
                padding: EdgeInsets.all(16),
                height: MediaQuery.of(context).size.height,
                child: _motor.length > 0
                    ? ListView.builder(
                        itemBuilder: (context, index) {
                          // final Film film  = filmList[index];
                          return InkWell(
                            onTap: () {
                              Navigator.push(context,
                                  MaterialPageRoute(builder: (context) {
                                return DetailScreen(motor: _motor[index]);
                              }));
                            },
                            child: Container(
                              margin: EdgeInsets.only(bottom: 8),
                              decoration: BoxDecoration(
                                borderRadius: BorderRadius.circular(15),
                              ),
                              child: Row(
                                crossAxisAlignment: CrossAxisAlignment.start,
                                children: <Widget>[
                                  Expanded(
                                    flex: 1,
                                    child: ClipRRect(
                                        borderRadius: BorderRadius.circular(15),
                                        child: Image.asset(
                                          _motor[index].image,
                                        )),
                                  ),
                                  Expanded(
                                    flex: 2,
                                    child: Padding(
                                      padding: const EdgeInsets.all(8.0),
                                      child: Column(
                                        crossAxisAlignment:
                                            CrossAxisAlignment.start,
                                        children: <Widget>[
                                          Text(
                                            _motor[index].nama,
                                            maxLines: 1,
                                            overflow: TextOverflow.ellipsis,
                                            style: TextStyle(
                                                fontSize: 16.0,
                                                color: Colors.white,
                                                fontFamily: 'Poppins',
                                                fontWeight: FontWeight.w500),
                                          ),
                                          SizedBox(
                                            height: 10,
                                          ),
                                          Text(
                                            _motor[index].merk,
                                            style: TextStyle(
                                              fontSize: 14.0,
                                              color: Colors.white,
                                              fontFamily: 'Poppins',
                                            ),
                                          ),
                                        ],
                                      ),
                                    ),
                                  )
                                ],
                              ),
                            ),
                          );
                        },
                        itemCount: _motor.length,
                      )
                    : Text(
                        "No result found",
                        style: TextStyle(
                            fontFamily: 'Poppins',
                            fontWeight: FontWeight.w500,
                            fontSize: 24,
                            color: Colors.white),
                      ),
              )
            ],
          ),
        ),
      ),
    ));
  }
}

import 'package:flutter/material.dart';
import 'package:katalog_motor/models/motor.dart';
import 'package:katalog_motor/pages/detail.dart';
import 'package:katalog_motor/pages/search.dart';

class HomeScreen extends StatelessWidget{
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: LayoutBuilder(
        builder: (BuildContext context, BoxConstraints constraints){
          if(constraints.maxWidth <= 600) {
            return Grid(gridCount: 2);
          }else if(constraints.maxWidth <= 1200){
            return GridWeb(gridCount: 4,);
          }else{
            return GridWeb(gridCount: 6,);
          }
        },
      )
    );
  }
}

class GridWeb extends StatefulWidget{
  final int gridCount;
  GridWeb({required this.gridCount});

  @override
  _GridWebState createState() => _GridWebState();
}

class _GridWebState extends State<GridWeb> {
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
    var size = MediaQuery.of(context).size;

    var _crossAxisSpacing = 8;
    var _screenWidth = size.width;
    var _crossAxisCount = 2;
    var _width = ( _screenWidth - ((_crossAxisCount - 1) * _crossAxisSpacing)) / _crossAxisCount;
    var cellHeight = _screenWidth <= 1200 ? 900 : 1200;

    return Container(
      height: size.height,
      decoration: BoxDecoration(
          gradient: LinearGradient(
              begin: Alignment.topRight,
              end: Alignment.bottomLeft,
              colors: [
                Color(0xFF227093),
                Color.fromARGB(255, 224, 169, 52)
              ]
          )
      ),
      child: SingleChildScrollView(
        child: Column(
          children: <Widget>[
            Container(
              margin: EdgeInsets.only(top: 16),
              padding: const EdgeInsets.all(16.0),
              child: Row(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                children: <Widget>[
                  Text(
                    "Katalog Motor",
                    style: TextStyle(
                        fontFamily: 'Poppins',
                        fontWeight: FontWeight.w500,
                        color: Colors.white,
                        fontSize: 18
                    ),
                  ),
                ],
              ),
            ),
            Padding(
              padding: const EdgeInsets.all(16.0),
              child: TextField(
                onChanged: (value){
                  _runFilter(value);
                },
                decoration: InputDecoration(
                    prefixIcon: Icon(Icons.search_rounded),
                    border: OutlineInputBorder(
                        borderRadius:BorderRadius.circular(40.0),
                    ),
                    hintText: 'Search...',
                    fillColor: Colors.white,
                    filled: true
                ),
              ),
            ),
            Container(
              padding: const EdgeInsets.symmetric(horizontal: 24.0),
              child: _motor.length > 0
                  ? GridView.count(
                // childAspectRatio: itemWidth / (size.height - 250),
                childAspectRatio: _width /cellHeight,
                crossAxisSpacing: 16,
                mainAxisSpacing: 16,
                controller: ScrollController(keepScrollOffset: false),
                shrinkWrap: true,
                scrollDirection: Axis.vertical,
                children: _motor.map((motor) {
                  return InkWell(
                    onTap: () {
                      Navigator.push(context, MaterialPageRoute(builder: (context) {
                        return DetailScreen(motor: motor);
                      }));
                    },
                    child: Container(
                      decoration: BoxDecoration(
                        borderRadius: BorderRadius.circular(15),
                        color: Colors.white,
                      ),
                      child: Column(
                        children: <Widget>[
                          Stack(
                            children: <Widget>[
                              ClipRRect(
                                borderRadius: BorderRadius.circular(15),
                                child: Image.asset(
                                  motor.image,
                                ),
                              ),
                            ],
                          ),
                          Padding(
                            padding: EdgeInsets.all(16),
                            child: Text(
                              motor.nama,
                              maxLines: 1,
                              overflow: TextOverflow.ellipsis,
                              style: TextStyle(
                                fontFamily: 'Poppins',
                                fontWeight: FontWeight.w500
                              ),
                            ),
                          )
                        ],
                      ),
                    ),
                  );
                }).toList(),
                crossAxisCount: widget.gridCount,
              )
                  : Text(
                    "No result found",
                    style: TextStyle(
                      fontFamily: 'Poppins',
                      fontWeight: FontWeight.w500,
                      fontSize: 24,
                      color: Colors.white
                    ),
                  ),
            ),
            SizedBox(height: 24)
          ],
        ),
      ),
    );
  }
}

class Grid extends StatelessWidget{
  final int gridCount;

  Grid({required this.gridCount});

  @override
  Widget build(BuildContext context) {
    var size = MediaQuery.of(context).size;
    final double itemHeight = (size.height - kToolbarHeight - 24) / 2;
    final double itemWidth = size.width / 2;
    return Container(
      decoration: BoxDecoration(
        gradient: LinearGradient(
          begin: Alignment.topRight,
          end: Alignment.bottomLeft,
          colors: [
            Color.fromARGB(255, 0, 117, 252),
            Color.fromARGB(255, 1, 52, 192)
          ]
        )
      ),
      child: SingleChildScrollView(
        child: Column(
          children: <Widget>[
            SafeArea(
              child: Container(
                margin: EdgeInsets.only(top: 16),
                padding: const EdgeInsets.all(16.0),
                child: Row(
                  mainAxisAlignment: MainAxisAlignment.spaceBetween,
                  children: <Widget>[
                    Text(
                      "Katalog Motor",
                      style: TextStyle(
                        fontFamily: 'Poppins',
                        fontWeight: FontWeight.w500,
                        color: Colors.white,
                        fontSize: 18
                      ),
                    ),
                    
                  ],
                ),
              ),
            ),
            Padding(
              padding: const EdgeInsets.all(16.0),
              child: GestureDetector(
                onTap: (){
                  Navigator.push(context, MaterialPageRoute(builder: (context) {
                    return SearchPage();
                  }));
                },
                child: TextField(
                  decoration: InputDecoration(
                    prefixIcon: Icon(Icons.search_rounded),
                    border: OutlineInputBorder(
                      borderRadius:BorderRadius.circular(40.0),
                        borderSide: BorderSide(
                          color:Colors.white70,
                          width: 2,
                        )
                    ),
                    enabled: false,
                    hintText: 'Search...',
                    fillColor: Colors.white,
                    filled: true
                  ),
                ),
              ),
            ),
            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 24.0),
              child: GridView.count(
                crossAxisCount: gridCount,
                crossAxisSpacing: 16,
                mainAxisSpacing: 16,
                childAspectRatio: (itemWidth / itemHeight),
                controller: new ScrollController(keepScrollOffset: false),
                shrinkWrap: true,
                scrollDirection: Axis.vertical,
                children: motorList.map((motor) {
                  return InkWell(
                    onTap: () {
                      Navigator.push(context, MaterialPageRoute(builder: (context) {
                        return DetailScreen(motor: motor);
                      }));
                    },
                    child: Container(
                      decoration: BoxDecoration(
                        borderRadius: BorderRadius.circular(15),
                        color: Colors.white,
                      ),
                      child: Column(
                        children: <Widget>[
                          Expanded(
                            child: Stack(
                              children: <Widget>[
                                ClipRRect(
                                  borderRadius: BorderRadius.circular(15),
                                  child: Image.asset(
                                    motor.image,
                                    fit: BoxFit.cover,
                                    height: 500,
                                  ),
                                ),
                                
                              ],
                            ),
                          ),
                          Padding(
                              padding: EdgeInsets.all(8),
                              child: Text(
                                motor.nama,
                                maxLines: 2,
                                overflow: TextOverflow.ellipsis,
                              ),
                          )
                        ],
                      ),
                    ),
                  );
                }).toList(),
              ),
            ),
            SizedBox(height: 24)
          ],
        ),
      ),
    );
  }

}
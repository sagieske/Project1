<!--

index.html

David J. Malan
malan@harvard.edu

Demonstrates jQuery Mobile.

-->

<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css">
    <meta name="viewport" content="width=device-width">
    <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
    <title>All Programs</title> 
  </head> 
  <body> 

    <div data-role="page" id="menu">

      <div data-role="header" data-theme="b">
        <h1>Home</h1>
      </div>

      <div data-role="content">   
        <ul data-role="listview" data-theme="c">
          <li><a href="#allprograms">Browse all programs</a> </li>       
        </ul>
      </div>

    </div>

    <div data-role="page" id="allprograms">

      <div data-role="header" data-theme="b">
        <h1>All programs</h1>
      </div>

      <div data-role="content">   
        <ul data-role="listview" data-theme="c">
          <li><a href="#Course0">Course 0</a></li>
          <li><a href="#Course1">Course 1</a></li>
        </ul>
      </div>

    </div>

    <div data-role="page" id="course0">

      <div data-role="header" data-theme="b">
        <h1>Course 0</h1>
      </div>

      <div data-role="content">   
        <h1>TEST</h1>
      </div>

    </div>

    <div data-role="page" id="course1">

      <div data-role="header" data-theme="b">
        <h1>Course 1</h1>
      </div>

      <div data-role="content">   
        <h1>TEST</h1>
      </div>

    </div>
    
  </body>
</html>

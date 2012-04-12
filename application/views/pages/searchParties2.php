<!-- 
TODO Make the search page a little more dynamic. 
For example. 
- If clicks radio button genre, show a new radiobutton list with genres to choose from.
- Date: options 'today', 'tomorrow' or 'enter own date'
- Location: popular options like 'Melkweg', 'Paradiso', or 'enter own location'

Cannot search for 'partyInformation'.
-->
<div id=body>
<!--
  TODO: enable manual search bars (contain an error: searchfield is empty so
        empty searchresult is returned).
  TODO: multiple searchoptins combined (party today AND techno genre)
  TODO: create popular parties page
-->
<script type="text/javascript">
  function hideDivs (x) {
    if (x == 1) {
      document.getElementById('partyNameDiv').style.display = 'block';
      document.getElementById('partyLocationDiv').style.display = 'none';
      document.getElementById('partyDateDiv').style.display = 'none';
      document.getElementById('partyGenreDiv').style.display = 'none';
    }
    else if (x == 2) {
      document.getElementById('partyNameDiv').style.display = 'none';
      document.getElementById('partyLocationDiv').style.display = 'block';
      document.getElementById('partyDateDiv').style.display = 'none';
      document.getElementById('partyGenreDiv').style.display = 'none';

    }
    else if (x == 3) {
      document.getElementById('partyNameDiv').style.display = 'none';
      document.getElementById('partyLocationDiv').style.display = 'none';
      document.getElementById('partyDateDiv').style.display = 'block';
      document.getElementById('partyGenreDiv').style.display = 'none';

    }
    else {
      document.getElementById('partyNameDiv').style.display = 'none';
      document.getElementById('partyLocationDiv').style.display = 'none';
      document.getElementById('partyDateDiv').style.display = 'none';
      document.getElementById('partyGenreDiv').style.display = 'block';

    }
  }
</script>
Search for specific programs here </br></br>
<form action="show_searched_parties" method="get">
<fieldset data-role="controlgroup">
	<legend>Search for:</legend>
     	<input type="radio" name="type" id="partyName" value="partyName" checked="checked" onclick='hideDivs(1)' />
        <label for="partyName">Party name</label>
        <br>
        <div id="partyNameDiv" style="display:none">
        &nbsp;&nbsp;&nbsp;&nbsp;<label for="else">Name: </label> <br>
        &nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="partyName" id="else"><br>
        &nbsp;&nbsp;&nbsp;&nbsp;Most popular parties? Visit <a href="">Popular parties</a><br>
        </div>
      <input type="radio" name="type" id="partyLocation" value="partyLocation" onclick='hideDivs(2)' />
        <label for="partyLocation">Location</label>
        <br>
        <div id="partyLocationDiv" style="display:none">
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="melkweg" value="melkweg" checked="checked">
          &nbsp;&nbsp;&nbsp;<label for="melkweg">Melkweg</label>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="paradiso" value="paradiso">
          &nbsp;&nbsp;&nbsp;<label for="paradiso">Paradiso</label>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="studio80" value="studio80">
          &nbsp;&nbsp;&nbsp;<label for="studio80">Studio 80</label>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="clubUp" value="clubUp">
          &nbsp;&nbsp;&nbsp;<label for="clubUp">Club Up</label>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="Trouw" value="Trouw">
          &nbsp;&nbsp;&nbsp;<label for="Trouw">Trouw</label>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="else" value="else">
          &nbsp;&nbsp;&nbsp;<label for="else">Else: </label>
          &nbsp;&nbsp;&nbsp;<input type="text" name="partyLocationManual" id="else"><br>
        </div>

     	<input type="radio" name="type" id="partyDate" value="partyDate" onclick='hideDivs(3)' />
        <label for="partyDate">Date</label>
        <br>
        <div id="partyDateDiv" style="display:none">
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyDate" id="today" value="today" checked="checked">
          &nbsp;&nbsp;&nbsp;<label for="today">Today</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyDate" id="tomorrow" value="tomorrow">
          &nbsp;&nbsp;&nbsp;<label for="tomorrow">Tomorrow</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyDate" id="else" value="else">
          &nbsp;&nbsp;&nbsp;<label for="else">Else (yyyy/mm/dd): <input type="text" name="partyDate" id="else"></label><br>
          <!--&nbsp;&nbsp;&nbsp;<input type="text" name="partyDate" id="else"><br>
          else textfield: yyyy/mm/dd  -->
        </div>

     	<input type="radio" name="type" id="partyGenre" value="partyGenre"` onclick='hideDivs(4)' />
        <label for="partyGenre">Genre</label>
        <br>
        <div id="partyGenreDiv" style="display:none">
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyGenre" id="House" value="House" checked="checked">
          &nbsp;&nbsp;&nbsp;<label for="House">House</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyGenre" id="Dubstep" value="Dubstep">
          &nbsp;&nbsp;&nbsp;<label for="Dubstep">Dubstep</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyGenre" id="Techno" value="Techno">
          &nbsp;&nbsp;&nbsp;<label for="Techno">Techno</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyGenre" id="Pop" value="Pop">
          &nbsp;&nbsp;&nbsp;<label for="Pop">Pop</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyGenre" id="90s" value="90s">
          &nbsp;&nbsp;&nbsp;<label for="90s">90s</label><br>
          <!--
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyGenre" id="else" value="else">
          &nbsp;&nbsp;&nbsp;<label for="else">Else (yyyy/mm/dd): <input type="text" name="partyDate" id="else"></label><br>-->
        </div>
</fieldset>
<input type="submit" value="Search!">
</div>

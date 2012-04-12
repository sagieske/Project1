<!-- 
TODO Make the search page a little more dynamic. 
For example. 
- If clicks radio button genre, show a new radiobutton list with genres to choose from.
- Date: options 'today', 'tomorrow' or 'enter own date'
- Location: popular options like 'Melkweg', 'Paradiso', or 'enter own location'

Cannot search for 'partyInformation'.
-->
<div id=body>

<!-- Javascript script for showing div's if certain radioboxes are checked-->
<!--
<script type="text/javascript" defer=defer>
if(document.getElementById("partyName").checked) {
  //Show special 'popular parties' link span
  showSpan('partyNameSpan');

}
else if(document.getElementById('partyLocation').checked == true) {
  //Show special 'popular parties' link span
  //Melkweg/Paradiso/Else textbar
  showSpan('partyLocationSpan');
}
else if(document.getElementById('partyDate').checked == true) {
  //Show special 'popular parties' link span
  //Today/tomorrow/else
}
-->
</script>
Search for specific programs here </br></br>
<form action="show_searched_parties" method="get">
<fieldset data-role="controlgroup">
	<legend>Search for:</legend>
     	<input type="radio" name="type" id="partyName" value="partyName" checked="checked" onclick="document.getElementById('partyNameSpan').style.display = checked ? 'block' : 'none'" />
        <label for="partyName">Party name</label>
        <br>
        <div id="partyNameSpan" style="display:none">
        &nbsp;&nbsp;&nbsp;&nbsp;Most popular parties? Visit <a href="">Popular parties</a><br>
        </div>

      <input type="radio" name="type" id="partyLocation" value="partyLocation" onclick="document.getElementById('partyLocationSpan').style.display = checked ? 'block' : 'none'" />
        <label for="partyLocation">Location</label>
        <br>
        <div id="partyLocationSpan" style="display:none">
          <!-- melkweg/paradiso/other: textfield dd/mm/yyyy -->
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="melkweg" value="melkweg" checked="checked">
          &nbsp;&nbsp;&nbsp;<label for="melkweg">Melkweg</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="paradiso" value="paradiso">
          &nbsp;&nbsp;&nbsp;<label for="paradiso">Paradiso</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="studio80" value="studio80">
          &nbsp;&nbsp;&nbsp;<label for="studio80">Studio 80</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="clubUp" value="clubUp">
          &nbsp;&nbsp;&nbsp;<label for="clubUp">Club Up</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="Trouw" value="Trouw">
          &nbsp;&nbsp;&nbsp;<label for="Trouw">Trouw</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyLocation" id="else" value="else">
          &nbsp;&nbsp;&nbsp;<label for="else">Else: </label>
          &nbsp;&nbsp;&nbsp;<input type="text" name="partyLocation" id="else"><br>
        </div>

     	<input type="radio" name="type" id="partyDate" value="partyDate" onclick="document.getElementById('partyDateSpan').style.display = checked ? 'block' : 'none'" />
        <label for="partyDate">Date</label>
        <br>
        <div id="partyDateSpan" style="display:none">
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyDate" id="today" value="today" checked="checked">
          &nbsp;&nbsp;&nbsp;<label for="today">Today</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyDate" id="tomorrow" value="tomorrow">
          &nbsp;&nbsp;&nbsp;<label for="tomorrow">Tomorrow</label><br>
          &nbsp;&nbsp;&nbsp;<input type="radio" name="partyDate" id="else" value="else">
          &nbsp;&nbsp;&nbsp;<label for="else">Else (yyyy/mm/dd): <input type="text" name="partyDate" id="else"></label><br>
          <!--&nbsp;&nbsp;&nbsp;<input type="text" name="partyDate" id="else"><br>
          <!-- else textfield: yyyy/mm/dd -->
        </div>

     	<input type="radio" name="type" id="partyGenre" value="partyGenre"` onclick="document.getElementById('partyGenreSpan').style.display = checked ? 'block' : 'none'" />
        <label for="partyGenre">Genre</label>
        <br>
        <div id="partyGenreSpan" style="display:none">
          Test!<br> <!-- 4 more radioboxes with genres -->
        </div>
</fieldset>
<input type="submit" value="Search!">
</div>

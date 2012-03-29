<!-- 
TODO Make the search page a little more dynamic. 
For example. 
- If clicks radio button genre, show a new radiobutton list with genres to choose from.
- Date: options 'today', 'tomorrow' or 'enter own date'
- Location: popular options like 'Melkweg', 'Paradiso', or 'enter own location'

Cannot search for 'partyInformation'.
-->
<div id=body>
Search for specific programs here </br></br>
<form action="show_searched_parties" method="get">
<fieldset data-role="controlgroup">
	<legend>Search for:</legend>
     	<input type="radio" name="type" id="radio-choice-1" value="partyName" checked="checked" />
     	<label for="radio-choice-1">Party name</label>

     	<input type="radio" name="type" id="radio-choice-2" value="partyLocation"  />
     	<label for="radio-choice-2">Location</label>

     	<input type="radio" name="type" id="radio-choice-3" value="partyDate"  />
     	<label for="radio-choice-3">Date</label>

     	<input type="radio" name="type" id="radio-choice-4" value="partyGenre"  />
     	<label for="radio-choice-4">Genre</label>
</fieldset>
<label for="searchQuery">Keywords:</label>
<input type="text" name="searchQuery" id="searchQuery" value=""" />
<input type="submit" value="Search!">
</div>

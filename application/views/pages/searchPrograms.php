<div id=body>
Search for specific programs here </br></br>
<form action="show_searched_programs" method="get">
<fieldset data-role="controlgroup">
	<legend>Search for:</legend>
     	<input type="radio" name="type" id="radio-choice-1" value="programName" checked="checked" />
     	<label for="radio-choice-1">Program name</label>

     	<input type="radio" name="type" id="radio-choice-2" value="programSummary"  />
     	<label for="radio-choice-2">Program summary</label>

     	<input type="radio" name="type" id="radio-choice-3" value="programUrl"  />
     	<label for="radio-choice-3">Program URL</label>

     	<input type="radio" name="type" id="radio-choice-4" value="programFaculty"  />
     	<label for="radio-choice-4">Program faculty</label>
</fieldset>
<label for="searchQuery">Keywords:</label>
<input type="text" name="searchQuery" id="searchQuery" value=""" />
<input type="submit" value="Search!">
</div>

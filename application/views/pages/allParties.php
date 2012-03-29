<!--
TODO: sort parties on date or time, using jQuery mobile list dividers
-->

<div id=body>
<ul data-role="listview" data-filter="true">
<?php foreach ($allParties as $programItem): ?>
  <li>
  <?php $this->load->helper('url');?>  <a href=<?php $temp = site_url("/pages/show_course"); echo $temp."/".$programItem['partyID']."/"; ?>>
  <span id="studyName"><?php echo $programItem['partyName'] ?></span><br><br>
  <span id="studySummary"><?php echo $programItem['partyLocation'] ?></span>
  </a>
  </li>
  <br>
<?php endforeach ?>
</ul>
</div>
<a href="../../pages">Previous</a>

<!--
TODO: sort parties on date or time, using jQuery mobile list dividers
-->

<div id=body>
<ul data-role="listview" data-filter="true">
<?php foreach ($allParties as $partyItem): ?>
  <li>
  <?php $this->load->helper('url');?>  <a href=<?php $temp = site_url("/pages/party_content"); echo $temp."/".$partyItem['partyID']."/"; ?>>
  <span id="studyName"><?php echo $partyItem['partyName'] ?></span><br><br>
  <span id="studySummary"><?php echo $partyItem['partyDate'] ?></span>
  </a>
  </li>
  <br>
<?php endforeach ?>
</ul>
</div>
<a href="../../pages">Previous</a>

<?php
$rand=rand(0, 1);
if ($rand==0) $rand="checked";
else $rand='';
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="/baza/js/jquery.js"></script>
<link href="toggle.css" rel="stylesheet">
</head>
<body>
<h2>autoscale Toggle Switch which remembers last action</h2>

<label class="switch" style="font-size: 4vw">
  <input id='toggle' <?=$rand;?> type="checkbox">
  <span class="slider round"></span>
</label>

<script>
$('#toggle').click(function() {

if($("#toggle").is(':checked'))
    alert('toggle on');
else
    alert('toggle off');

});
</script>
</body>
</html>

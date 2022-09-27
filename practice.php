<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>javascript practice</title>
</head>
<body>


<!-- <div id="name">my name is nishant</div>

 -->
<!-- <div class="example">
  <p>This is a paragraph.</p>
</div>
<br>
<div class="example color">
  <p>This is a paragraph.</p>
</div>
<br>
<div class="example color">
  <p>This is a paragraph.</p>
</div> -->

<div class="example">Element1</div>
<div class="example">Element2</div>

<script type="text/javascript">
	
/*var students=['karan','rahul','arjun','vivek'];

students.forEach(function(value,key){

	document.write(key+' '+value+'<br>');
});

*/

/*var element=document.getElementById('name');
element.style.color="red";*/

var collection=document.getElementsByClassName('example');

collection[0].innerHTML="green";


</script>	
</body>
</html>
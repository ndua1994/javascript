<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Javascript multi dimensional array</title>
</head>
<body>



<script type="text/javascript">

var students=[


['Nishant','Male','28'],
['Karan','Male','16'],
['Prakash','Male','29'],
['Raghav','Male','13'],
['Ritu','Female','22']

];

/*
document.write(students[4][0]);
*/

document.write('<table border="1" align="center" width="500"><tr><td colspan="3" align="center"><h1>Student Details</h1></td></tr><tr><th>Name</th><th>Gender</th><th>Age</th></tr>');

for(var i=0;i<5;i++)
{
	document.write('<tr>');
	for(var j=0;j<3;j++)
	{
		document.write('<td>'+students[i][j]+'</td>');
	}
	document.write('</tr>');

}

document.write('</table>');
	
</script>
</body>
</html>
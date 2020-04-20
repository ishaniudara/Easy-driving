<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading" style="background:blue; color:white;">
ADD Events
</div>
<div class="panel-body">
<h1>ADD Data</h1>
<form method="POST" action="/storeevent">
{{csrf_field()}}
<label for="">Enter name of the event</label>
<input type="text" class="form-control" name="title" placeholder="enter the title"/><br><br>

<label for="">Enter color</label>
<input type="color" class="form-control" name="color" placeholder="enter the color"/><br><br>
<label for="">Enter start Date</label>
<input type="datetime-local" class="form-control" name="start_date" class="date" placeholder="enter the date"/><br><br>
<label for="">Enter end Date</label>
<input type="datetime-local" class="form-control" name="end_date"class="date" placeholder="enter the date"/><br><br>
<label for="">Enternumber of users</label>

<input type="text" class="form-control" name="No_Of_user" placeholder="enter the number of users"/><br><br>
<input type="submit" class="btn btn-primary" name="submit">
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
</head>
<body>
<table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th> Title</th>
                  <th>Date</th>
                  <th>NO_Of_Users</th>
                 
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                <tr>
                  <td>{{$event->id}}</td>
                  <td>{{$event->title}}
                  </td>
                  <td>{{$event->start_date}}</td>
                 
                  <td> {{$event->NO_Of_users}}</td>
                  <td><a href="/delevent/{{$event->id}}" class="btn btn-danger">DELETE</a></td>
                 
                </tr>
               @endforeach
         </tbody>
         </table>
</body>
</html>
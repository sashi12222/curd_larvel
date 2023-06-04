<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
  <div class="container my-4">
    <div class="card shadow">
        <div class="card-header">
          <a href="/student/create" class="btn btn-primary">Add Student</a>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                 <th>Sn</th>
                 <th>Student Name</th>
                 <th>Address</th>
                 <th>Mobile</th>
                 <th>School</th>
                 <th>Refer</th>
                 <th>Action</th>
               
                </tr>
                @foreach ($students as $i => $student)
                <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student->address }}</td>
                  <td>{{ $student->mobile }}</td>
                  <td>{{ $student->school }}</td>
                  <td>{{ $student->refer }}</td>
                   <td>
                    <form action="/student/{{ $student->id }}" method="post">
                      @method('delete')
                      @csrf
                      <a href="/student/{{ $student->id }}/edit"class="badge bg-info">Edit</a>
                      <a href="/student/{{ $student->id }}"class="badge bg-success">Show</a>
                      <button type="submit" class="btn badge bg-danger">delete</button>
                    </form>
                   
                  
                  </td>     
                  
                </tr>
                    
                @endforeach

            </table>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
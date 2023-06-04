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
          <a href="/" class="btn btn-primary">Back</a>
        </div>
        <div class="card-body">
         <form action="/student/{{ $student->id }}" method="post">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="name">Student Name</label>
                <input id="name" class="form-control" type="text" name="name" value="{{ $student->name }}">
            </div>

            .<div class="form-group">
                <label for="address">Address</label>
                <input id="address" class="form-control" type="text" name="address" value="{{ $student->address }}">
            </div>
              
            <div class="form-group"> value="{{ $student->name }}"
                <label for="mobile">Mobile</label>
                <input id="mobile" class="form-control" type="tel" name="mobile" value="{{ $student->mobile}}">
            </div>

            <div class="form-group">
                <label for="school">School</label>
                <input id="school" class="form-control" type="text" name="school" value="{{ $student->school }}">
            </div>

            <div class="form-group">
                <label for="Refer">Refer</label>
                <input id="refer" class="form-control" type="text" name="refer" value="{{ $student->refer }}">
            </div>


            <button type="submit" class="btn btn-primary my-2">Update</button>
            
         </form>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
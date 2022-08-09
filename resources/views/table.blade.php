<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container pt-3">
    @if(session()->has('message'))
    <div class="action action-success">
        {{session()->get('message')}}
    </div>
    @endif
  <h2>Basic Table</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
      @foreach ($data as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->email}}</td>
        <td><a href ={{route('edit',$d->id)}} class="btn btn-dark">Edit</a></td>
        <td><a href ={{route('delete',$d->id)}} class="btn btn-dark">Delete</a></td>

      @endforeach
    </tr>
    </thead>
    <tbody>

    </tbody>
  </table>
  {{$data->links()}}
</div>

</body>
</html>

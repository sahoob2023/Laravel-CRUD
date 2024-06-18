<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Employee Table</h2>
  <form action="" class="col-14">
  <div class="form-group">
  Search :<input type="search" class="form-control" name="search" value="{{$search}}" placeholder="Enter serach name">
<button type="submit" class="btn btn-primary">Search</button>
<a href="{{url('/customer/view')}}">
<button type="button" class="btn btn-warning">Refresh</button><br>
</a>
  </div>
  </form>
   <table class="table table-dark table-striped">
    {{-- <pre>
    {{print_r($newcustomer)}}
    </pre> --}}
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Address</th>
        <th>State</th>
        <th>Country</th>
        <th>DOB</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($newcustomer as $value )
        
      <tr>
        <td>{{$value['name']}}</td>
        <td>{{$value['email']}}</td>
        <td>{{$value['gender']}}</td>
        <td>{{$value['address']}}</td>
        <td>{{$value['state']}}</td>
        <td>{{$value['country']}}</td>
        <td>{{$value['dob']}}</td>
        <td>{{$value['password']}}</td>
        <td>

        <a href="{{route('delete',$value['id'])}}"><button class="btn btn-danger">Delete</button></a>
        <a href="{{route('edit',$value['id'])}}"><button class="btn btn-success">Edit</button></a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="container">
  {{$newcustomer->links()}}
  </div>
</div>

</body>
</html>

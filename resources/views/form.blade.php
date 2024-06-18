<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
</head>
<body>

  <form action="{{route('customer')}} " method="post">
  @csrf
<div class="container">
  <h2>Vertical (basic) form</h2>
     <div class="form-group">
      <label for="">Name:</label>
      <input type="text" class="form-control"   placeholder="Enter name" name="name"  >
      <span class="text-danger">
      @error('name')
        {{$message}}
      @enderror
      </span>
    </div>
    <div class="form-group">
      <label for="">Email:</label>
      <input type="text" class="form-control"   placeholder="Enter email" name="email">
      <span class="text-danger">
      @error('email')
        {{$message}}
      @enderror
      </span>
    </div>

     <div class="form-group">
      <label for="">Gender:</label>
        <input type="radio" name="gender" value="male"> male
        <input type="radio" name="gender" value="female"> female
        <input type="radio" name="gender" value="other"> other
      <span class="text-danger">
      @error('gender')
        {{$message}}
      @enderror
      </span>
    </div>

       <div class="form-group">
      <label for="">address:</label>
      <input type="text" class="form-control"  placeholder="Enter address" name="address">
         <span class="text-danger">
      @error('address')
        {{$message}}
      @enderror
      </span>
    </div>
    
    <div class="form-group">
      <label for="">Password:</label>
      <input type="password" class="form-control"   placeholder="Enter password" name="password">
         <span class="text-danger">
      @error('password')
        {{$message}}
      @enderror
      </span>
    </div>

     {{-- <div class="form-group">
      <label for="">ConPassword:</label>
      <input type="password" class="form-control"   placeholder="Enter conpassword" name="confirm_password">
         <span class="text-danger">
      @error('confirm_password')
        {{$message}}
      @enderror
      </span>
    </div> --}}
        <div class="form-group">
      <label for="">Country:</label>
      <input type="text" class="form-control"   placeholder="Enter country" name="country">
         <span class="text-danger">
      @error('country')
        {{$message}}
      @enderror
      </span>
    </div>
        <div class="form-group">
      <label for="">State:</label>
      <input type="text" class="form-control"   placeholder="Enter state" name="state">
         <span class="text-danger">
      @error('state')
        {{$message}}
      @enderror
      </span>
    </div>
        <div class="form-group">
      <label for="">DOB:</label>
      <input type="date" class="form-control"   placeholder="Enter date" name="dob">
         <span class="text-danger">
      @error('dob')
        {{$message}}
      @enderror
      </span>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>

</body>
</html>
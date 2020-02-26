
<html>
@extends ('Layout.head') 
<link rel="stylesheet" href="{{('/assets/style-get-start.css')}}">
<head>
  <style>
    #fnames {
      color: red;
      padding-left: 20px;
    }
    #lnames {
      color: red;
      padding-left: 20px;
    }
    #dates {
      color: red;
      padding-left: 20px
    }
    #phones {
      color: red;
      padding-left: 20px;
    }
    #emails {
      color: red;
      padding-left: 20px;
    }
    #passwords {
      color: red;
      padding-left: 20px;
    }
    #re_passwords {
      color: red;
      padding-left: 20px;
    }
  </style>
  <script src="/js/home.js" type="text/javascript"></script>
</head>
@include('navbar')
<div class="container" >
  <form action="start" method="post">
  <h1 id="h1">Register</h1>
  <br>
    <div class="row">
      <div class="col-lg-6">
      @csrf
        <label for="fname" class="label1">First Name:</label>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
        @error('fname')
          <div id="fnames">
            {{$message}}
          </div>
        @enderror
        <div class="valid-feedback"></div>
      </div>
      <div class="col-lg-6">
        <label for="lname" class="label2">Last Name:</label>
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
        @error('lname')
          <div id="lnames">
            {{$message}}
          </div>
        @enderror
        <div class="valid-feedback"></div>
      </div>
      <div class="col-lg-6">

        <label for="date" class="label1">Date of birth:</label>
        <input type="date" class="form-control" id="date" name="date" placeholder="Date of birth" required>
        @error('date')
          <div id="dates">
            {{$message}}
          </div>
        @enderror
        <div class="valid-feedback"></div>
      </div>
      <div class="col-lg-6">
        <label for="gender" class="label1">Gender:</label>
        <select class="form-control" id="sel1" name="gender" type="text">
          <option>Female</option>
          <option>Male</option>
        </select>
      </div>
      <div class="col-lg-6">
        <label for="email" class="label1">Email Address:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
        @error('email')
          <div id="emails">
            {{$message}}
          </div>
        @enderror
        <div class="valid-feedback"></div>
      </div>
      <div class="col-lg-6">
        <label for="phone" class="label2">Phone Number:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
        @error('phone')
          <div id="phones">
            {{$message}}
          </div>
        @enderror
        <div class="valid-feedback"></div>
      </div>
      <div class="col-lg-6">
        <label for="password" class="label2">Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Password" id="password"  required>
        @error('password')
          <div id="passwords">
            {{$message}}
          </div>
        @enderror
        <div class="valid-feedback"></div>
      </div>
      <div class="col-lg-6">
        <label for="password" class="label2">Comfirm Password:</label>
        <input type="password" class="form-control" name="re_password" placeholder="Comfirm Password" id="compassword" required>
        @error('re_password')
          <div id="re_passwords">
            {{$message}}
          </div>
        @enderror
        <div class="valid-feedback"></div>
      </div>
    </div>
    <br><br>
    <button type="submit" id="submit" name="submit" style="width:120px">Register</button>
  </form>
</div>
</body>
</html>
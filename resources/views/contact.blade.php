<!DOCTYPE html>
<html lang="en">
<head>
    <title>contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @extends ('Layout.head') 
</head>
<style>
    body {
        font-family: 'Sniglet', cursive;
        color: rgb(15, 55, 56);
    }
    * {box-sizing: border-box;}
    label{
        margin-left: 0;
    }
    input[type=text], select, textarea,input[type=number],input[type=email] {
        width: 92%;
        margin-left: 20px;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }
    .container {
        margin-top: 100px;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    .footer .btn-success{
        margin-left: 5px;
        width: 90px;
    }
    #firstname {
      color: red;
      padding-left: 20px;
    }
    #lastname {
      color: red;
      padding-left: 20px;
    }
    #phone {
      color: red;
      padding-left: 20px;
    }
    #mail {
      color: red;
      padding-left: 20px;
    }
    #message {
      color: red;
      padding-left: 20px;
    }
</style>
<body>
@include('navbar')
<div class="container">
    <!-- The Modal -->
    <form action="/create" method="post">
      <!-- Modal Header -->
      <div class="modal-header">
      <h1 class="modal-title">Contact Us</h1>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        @csrf
          <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
            @error('firstname')
            <div id="firstname">
              {{$message}}
            </div>
            @enderror

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
            @error('lastname')
            <div id="lastname">
              {{$message}}
            </div>
            @enderror

            <label for="number">Phone number</label>
            <input type="text" id="number" name="phone" placeholder="Your Phone number.." required ><br>
            @error('phone')
            <div id="phone">
              {{$message}}
            </div>
            @enderror

            <label for="email">Email</label><br>
            <input type="email" id="mail" name="email" placeholder="Your Email.." required><br>
            @error('email')
            <div id="mail">
              {{$message}}
            </div>
            @enderror

            <label for="message">Massage</label><br>
            <textarea id="subject" name="message" placeholder="Write something.." style="height:150px" required></textarea>
            @error('message')
            <div id="message">
              {{$message}}
            </div>
            @enderror
            <!-- Modal footer -->
            <div class="modal-footer">
              <div class="footer">
                <button type="submit" name="submit" class="btn btn-success" data-content="modal" >Submit</button></div>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </form>
</div>
</body>
</html>
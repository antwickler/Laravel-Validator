@extends('welcome')

@section('title','Home | Antwickler')

@section('content')
    <h1 align="center"><b>
        Please Sign Up ...<br /><br />  
    </b></h1>

    @if (count($errors) > 0)
    <div class="alert alert-warning">
        <ul><b>
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </b></ul>
    </div><br>
  	@endif

    <center>
      <table width="380" border="0" align="center">
        <tbody>
          <tr>
            <td>
            
              <form method="post" action="signup">
                    <p align="left"><b>
                      <label>First Name &nbsp;</label>
        					  	<input type="text" name="firstName" value="Enter First Name..."><br><br>
        					  	<label>Last Name &nbsp;</label>
        					  	<input type="text" name="lastName" value="Enter Last Name..."><br><br>
        					  	<label>Screen Name &nbsp;</label>
        					  	<input type="text" name="screenName" value="Enter Screen Name..."><br><br>
                      <label>Password &nbsp;</label>
                      <input type="password" name="password" value="MyPassword"><br><br>
                      <label>Confirm Password &nbsp;</label>
                      <input type="password" name="password_confirmation" value="MyPassword"><br><br>
                      <label>E-mail &nbsp;</label>
                      <input type="email" name="email" value="YourMail@email.com"><br><br>
        					  	<label>Date of Birth &nbsp;</label>
        					  	<input type="date" name="birthday"><br><br>
        					  	<label>Gender &nbsp;</label>
        					  	<input type="text" name="gender" value="Male or Female"><br><br>
                      <label>Phone &nbsp;</label>
                      <input type="number" name="phone" value="0801234567"><br><br>
        					  	{{ csrf_field() }}
                    </b></p>  
                    <p align="center">
                    	<button type="submit"><b>Sign Up</b></button>
                    </p>
              </form>

            </td>
          </tr>
        </tbody>
      </table>
    </center>

@endsection
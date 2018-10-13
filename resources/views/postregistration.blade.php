@extends('layouts.app')
@section('content')

<div class="card card_margin">
  <div class="card-body">
    <h5 class="card-title">Tell us about yourself!</h5>
    <p class="card-text">
      <form id="UserInfo" action="#" method="post">
        Sex:<br>
        <input type="radio" name="gender" id="male"> Male<br>
        <input type="radio" name="gender" id="female"> Female<br>
        <input type="radio" name="gender" id="other"> Other <br>
            Birthday: <br>
          <input type="date" id="bday"> <br>
Country of Birth:<br>
<input type="text" id="CoB" placeholder="Country of Birth"><br>
Primary Language:<br>
<input type="text" id="PriLang" placeholder="Primary Language"><br>
Secondary Language:<br>
<input type="text" id="SecLang" placeholder="Secondary Language"><br>
<br>
  <input class="btn-primary" type="submit" value="Submit">
</form>
    </p>
  </div>
</div>
@endsection

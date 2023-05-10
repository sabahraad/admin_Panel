<head>
<link rel="stylesheet" href="{{asset('css/raad_form.css')}}">

</head>
<body style="background: white;">
@include('navbar')
@include('header')

<div class="formbold-main-wrapper" >
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="{{route('WithdrawStore')}}" method="POST" style="padding: 32px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0,0,0,.3);">
    @csrf
        <div class="formbold-steps">
            <ul>
                <h1>Withdraw Money</h1>
            </ul>
        </div>

        <div class="formbold-form-step-1 active">
          
  
             
  
          <div>
            <label for="address" class="formbold-form-label"> Withdraw Amount </label>
              <input
              type="number"
              name="withdrawAmount"
              class="formbold-form-input"
              min="1" max="{{$amount}}"
              />
              <input type="text" name="withdrawDateTime" class="formbold-form-input" value="{{ date('Y-m-d H:i:s') }}" hidden/>
              <input type="text" name="withdrawBy" class="formbold-form-input" value="{{ auth()->user()->name }}" hidden/>
              
          </div>
        </div>
        
        <button type ="submit" class="btn btn-primary" style="margin-top: 30px;margin-left: 222px;">Withdraw</button>
       
    </form>
  </div>
</div>
</body>

<script src="{{asset('js/vendor-all.min.js')}}" ></script>
    <script src="{{asset('js/plugins/bootstrap.min.js')}}" ></script>
    <script src="{{asset('js/pcoded.min.js')}}" ></script>



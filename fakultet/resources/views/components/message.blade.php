@if (session()->has('message'))

<p style="width: 100%;
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 100;
    color:red;
  ">{{session('message')}}</p>
    
@endif
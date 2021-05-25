<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="resources\views\front.blade.php">Pro-Nails</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="/services">Services</a>
        <a class="nav-link" href="#">Contact</a>
        <a class="nav-link" href="#">About us</a>
        <a class="nav-link" href="#"></a>
        <i class="bi bi-bell-fill"></i>
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg>
        
      </div>
    </div>
  </div>
</nav>

</div>
                            <div class="container">
        <div class="row">
            <div class="col">
            <form action="/payreport" method="post">
            {{csrf_field()}}
                <table class="table table-borderless">
               
                <div class="form-group">
                    <input type="date" class="form-control" name="serdate" placeholder="date" required="required"><button type="submit" class="btn btn-success btn-lg btn-block">Search</button>
                </div>
                    <tr  style="color: #fff;">
                        <th>Booking date</th>
                        <th>Service name</th>
                        <th>Amount</th>
                        
                    </tr>
                    @php
                    $amount=0;
                    $count=0;
                    @endphp
                    @foreach ($booking as $booking)
                    <tr  style="color: #fff; text-align:left;">
                        
                        <td>{{$booking->sdate}}</td>
                        <td>{{$booking->sname}}</td>
                        <td>{{$booking->amount}}</td>
                    </tr>
                    @php
                    $amount=$amount+$booking->amount;
                    $count=$count+1;
                    @endphp
                    @endforeach
                    <tr style="color: #fff;">
                        <th>Total Bookings</th> <td>{{$count}}</td>
                        <th>&nbsp</th>
                        <th>&nbsp</th>
                    </tr>
                    <tr style="color: #fff;">
                        <th>Total Amount</th> <td> {{$amount}}</td>
                        <th>&nbsp</th>
                        <th>&nbsp</th>
                    </tr>
                </table>
                
                    
                <a href=""><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQsAAAC8CAMAAABYM3sZAAAAdVBMVEX39/cAAAD////8/PyMjIxqamq0tLSoqKjFxcU4ODjo6OhKSkoeHh76+vrx8fEvLy/U1NR4eHiXl5dRUVGEhIR+fn4tLS1ycnKfn5/BwcHa2trKysq6urpubm4kJCSurq4/Pz8NDQ1cXFzg4OCPj4+ZmZkWFhagD/VOAAAE1klEQVR4nO2df3+qIBSHGWgrG1nZ72yt1b3v/yXedaeerUwtDwKfvs+/NeE8QxCBkxAAAAAAAAAAT9HKBtp22GXoaNu3wNhFGXL+YoNPaTvwEmRoxUUIF3ABF966eB92xbvzLvayK3rOu3hVHZWn9nCRAxcEXBBwQcAFARcEXBBwQcAFARcEXBBwQcAFARcEXBBwQcAFARcEXBBwQcAFARcEXBBwQcAFARcEXBBwQcAFARcEXBBwQcAFARcEXBBwQcAFARcEXBBwQcAFAReECy6UlKUHv3IX5Z/yI3MX5Z9K4/8TLcU6yHbo3+D9rSMqKzEM1kKaPIqm5WZyqKqCUxwmG3M21MjO8brHmY8M3SmyX9ksneStb6Rrzfoq39gbkCFfbUf1IK/sMjxtFWe4W4Ya246oBWPmDjS2HVALYlYTytfO4hveecHCdjitWDCaUD3b0bSkx9cw5NB2MC0Zsg0lOrIdS2siromJ2toOpTVbrptErWyH0poVlws5sx1Ka2ZcHYac2A6lNRNmF0na8480MOJi2dWbTE7kOqs7r4udi2/f61ApXOQYcrHsLPsLJ2bukY9T4B+n0IgLn4ELAi4IuCDggoALgtvFcBf6x25oxEV3mfY42Rtx0dmOG06y1YyndaGzJnF+x/nkLtRmvjwz2ahnd6GPxeix0U/uQp0KF4F8chcyKFzM4QIuctS0cHFST+7ix4rn8dn7TqGOwfxMcHz6MfX84x941ioDLgi4IOCCsOVC28BNF6PICi66+DEn6pKP6igtuZhWVdkYNVv04AIu4AIuvHCx6mzlY+u8i2ln55b7cFGUBxdUHlxQeXBB5fnlwui01C8X8jjm5kgx+eXi8+YD0uMkVJ5HLgydOpnnUfnkQpk53hsX1/fIhfww4uLDy3aRGnGR+tguhEyTRczLIkmLoO5ywXeu6Ds1TM1ZvutxRBmYnP64ejMX32co52wuTk3cuvncmbXpE5eL7M6PvXQR/+5l2pLvBjtWLsw46aJZ1e8q9jvlQ/WBVyddZA98C8Y8B9mrzMoT8i66yPfoTPmODeaXrCzXRRd5sgq2NAeiGFUrH1muXWj+QVVRUA1cyOUL74j6P6p8P9hS3/y3X7lQ0XTGzfRIl69zoXSmgrVZfBnO0z4MxreSQV660JsXE2zyuGpcKDkeZH+yYj5knDe38xH/UXnb//PbhUyMuEgu5mZJ+b00Sovi2eYiREj1GQyTEuLfLpSZ3EuLi7nZ37KqDAf0ByG7CaFH4Y3a/YbaRbPv30t40S5qvz8ykMNT60bZO6m/iA5tYr5FdNFf1DCv3cX0GDJtkMCTxhEteq/c9EQRWhMXbyl/X5EXL4JDcxdf3+fnx8VrXRwCYfLBT4r1rjLzcefPnbd4362F6YQdSqpo3C9hG1pxMdiWVWYcKfNJsc9oXZqZZmbFRVKaxcdQj9kUSy74Uu0xAhcEXBDXLlx4D26HKxfSRErD1Z3rI3a4dGEou+PqYm7mhQs5qArpYQY+ulBmXNy5zm6HKxdm9gGfLubsXrgQysRmlFnz950WuR5TpY5GvET63v1adsCzFgEXBFwQcEHABZG76KpuPrgQzOPoLcTaeRddAxdwARdw4bULdYoH3RM7+bu6onQFyTh2F4UAAAAAAAAALfgHEXu6d1adoa0AAAAASUVORK5CYII=" alt="HTML tutorial" style="width:32px;height:32px;"></a>
                </form>
            </div>
        </div>
    </div>
   
						

					
		
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         <div class="row">
            
                     <div class="img-box">
                        <img src="prodact/{{$prodact->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$prodact->title}}
                        </h5>
                        @if ($prodact->discount!=null )
                        <h6 style="color: red;">
                        {{$prodact->discount}}
                        </h6>
                        <h6 style="text-decoration:line-through;color:blue">
                        {{$prodact->price}}
                        </h6>
                        @else
                        <h6 style="color: blue;">
                        {{$prodact->price}}
                        </h6>
                        @endif
                        <h6>prodact cotagary: {{$prodact->category}}</h6>
                        <h6>prodact cotagary: {{$prodact->descriptiom}}</h6>
                        <h6>prodact cotagary: {{$prodact->quantity}}</h6>
                        <a href="" class="btn btn-primary">Add to card</a>

                     </div>
         </div> 

</body>
</html>
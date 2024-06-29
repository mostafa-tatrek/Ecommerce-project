<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
       .center
       {
        margin: auto;
        width: 50px;
        border: 2px solid white;
        text-align:center ;
        margin: top 40%; ;

        }



    </style>
</head>
<body>
<div class="control-panel">
       <div class="contet-wrabpper">
        <div class="div_center">
            <h2 class="font_size">showproduct</h2>
            <table class="center">
                <tr>
            <td>title</td>
            <td>descriptiom</td>
            <td>category</td>
            <td>quantity</td>
            <td>price</td>
            <td>discount</td>
            <td>image</td>
            <td>Update</td>
            <td>delete</td>
           </tr>
           @foreach($prodact as $prodact )
           <tr>
            <td>{{$prodact->title}}</td>
            <td>{{$prodact->descriptiom}}</td>
            <td>{{$prodact->category}}</td>
            <td>{{$prodact->quantity}}</td>
            <td>{{$prodact->price}}</td>
            <td>{{$prodact->discount}}</td>
            <td> <img src="/prodact/{{$prodact->image}}" >
           </td>
           <td><a class="btn btn-danger" href="{{url('/update_prodact',$prodact->id)}}">Update</a></td>
           <td><a class="btn btn-danger" href="{{url('/delete_prodact',$prodact->id)}}">delete</a> </td>
           </tr>
           @endforeach
            </table>
        </div>
       </div>
</body>
</html>
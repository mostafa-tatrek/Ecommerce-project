<!DOCTYPE html>>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cotegory</title>
    <style type="text/css">
        .div_center
     {
       
       text-align:center;
       padding: top 40px; ;
     }
     .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid green;


     }
        </style>
        @if (session()->has('message'))
        {{session()->get('message')}}
        @endif

</head>
<body>
    <div class="control-panel">
       <div class="contet-wrabpper">
        <div class="div_center">
            <h2>category</h2>
        </div>
        <form action="{{url(/add_catagory)}}" method="post">
         @csrf   
         <input type="text" name="name" placeholder ="write catgory name">
            <input type="submit" name="submit" class="btn btn-primary" value="add catgory">
        </form>
       </div>
    </div>
    <table class="center">
        <tr>
        <td>catagoryname</td>
        <td>action</td>
        </tr>
        @foreach($date as $date)
        <tr>
            <td>{{$date->catagory_name}}</td>
            <td >
              <a  onclick="return confrim('are you sure')" class="btn btn-danger" href="{{url(catagory_delete),$date->id}}">  delte</a>
                </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
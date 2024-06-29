<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="control-panel">
       <div class="contet-wrabpper">
        <div class="div_center">
            <h2 class="font_size">addproduct</h2>
            <form action="{{url('/add_prodact')}}" method="post"></form>
            <div>
            <label >prodact title</label>
            <input class="text_color" type="text" name="title" placeholder="writeprodact">
            </div>
            <div>
            <label >prodact descriptiom</label>
            <input class="text_color" type="text" name="descriptiom" placeholder="writeprodactdescriptiom">
            </div>
            <div>
            <label >prodact quantity</label>
            <input class="text_color" type="number" name="quantity" placeholder="writeprodactquantity">
            </div>
            <div>
            <label >prodact price</label>
            <input class="text_color" type="number" name="price" placeholder="writeprodactprice">
            </div>
            <div>
            <label >prodact discount</label>
            <input class="text_color" type="number" name="discount" placeholder="writeprodactdiscount">
            </div>
            <div>
            <label >prodact category</label>
            <select class="text_color"  name="category">
                <option value="" selected="">addcatagory</option>
                @foreach($catgory as catagory)
                <option value="{{catagory->catagory_name}}"><{{catagory->catagory_name}}</option>
                @endforeach
            </select>
            </div>
            <div>
            <label >prodact image</label>
            <input class="text_color" type="file" name="image" >
            </div>
            <div>
            <input type="submit"  value="addprodact" class="btn btn-primary">
            </div> 

        </div> 
       </div>
</div>
</body>
</html>
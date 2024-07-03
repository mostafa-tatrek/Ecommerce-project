<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2>
            </div>
             <div class="row">
             @foreach($prodact as prodact)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('prodact_details,$prodact->id')}}" class="option1">
                          prodact_details
                           </a>
                          <form method="post" action="{{url('add_card',$prodact->id')}}"> 
                           @csrf
                           <div class="row">
                              <div class="col-md-4">
                              <input type="number" name="quantity" value="1" min="1" style="width: 100px;">
                              </div>
                          <div class="col-md-4">
                           <input type="submit" value="Add to card">
                          </div>
                           </div>



                          </form>
                        </div>
                     </div>
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
                     </div>
                  </div>
               </div> 
               @endforeach         
         </div>
      </section>
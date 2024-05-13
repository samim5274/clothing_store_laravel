<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-detail</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/grid.css">
    <link rel="stylesheet" href="/css/userDetail.css">
</head>
<body>
@include('menu')
<section id="product-detail">
    <div class="row">
        <div class="col span_1_of_2">
            <div class="picture w3-display-container">
            @if(isset($images[0]))
            <img class="img-main" src="{{asset($images[0])}}" alt="Nature">
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">{{$product->name}}</div>
        </div>
        <!-- main photo section big picture -->
        <div id="Nature" class="picture w3-display-container" style="display:none">
            @if(isset($images[0]))
            <img class="img-main" src="{{asset($images[0])}}" alt="Nature">
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">{{$product->name}}</div>
        </div>

        <div id="Snow" class="picture w3-display-container" style="display:none">
            @if(isset($images[1]))
            <img class="img-main" src="{{asset($images[1])}}" alt="Snow" >
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Qty: {{$product->qty}} pcs</div>
        </div>

        <div id="Mountains" class="picture w3-display-container" style="display:none">
            @if(isset($images[2]))
            <img class="img-main" src="{{asset($images[2])}}" alt="Mountains">
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Price: ${{$product->price}}/- Tk</div>
        </div>

        <div id="Lights" class="picture w3-display-container" style="display:none">
            @if(isset($images[3]))
            <img class="img-main" src="{{asset($images[3])}}" alt="Lights">
            @endif
            <!-- <span onclick="this.parentElement.style.display='none'" 
            class="w3-display-topright w3-button w3-transparent w3-text-white">&times;</span> -->
            <div class="w3-display-bottomleft w3-container w3-padding w3-text-white">Thanks for view my products.</div>
        </div>

            <div class="col span_1_of_4">
                <div class="w3-col s3 w3-container">
                    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Nature');">
                    @if(isset($images[0]))
                        <img class="img-sm" src="{{asset($images[0])}}" alt="Nature">
                        @endif
                    </a>
                </div>
            </div>
            <div class="col span_1_of_4">
                <div class="w3-col s3 w3-container">
                    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Snow');">
                    @if(isset($images[1]))
                    <img class="img-sm" src="{{asset($images[1])}}" alt="Snow" >
                    @endif
                    </a>
                </div>
            </div>
            <div class="col span_1_of_4">
                <div class="w3-col s3 w3-container">
                    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Mountains');">
                    @if(isset($images[2]))
                    <img class="img-sm" src="{{asset($images[2])}}" alt="Mountains" >
                    @endif
                    </a>
                </div>
            </div>
            <div class="col span_1_of_4">
                <div class="w3-col s3 w3-container">
                    <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Lights');">
                    @if(isset($images[3]))
                    <img class="img-sm" src="{{asset($images[3])}}" alt="Lights" >
                    @endif
                    </a>
                </div>
            </div>

        </div>

        <div class="col span_1_of_2">
            <div class="col span_2_of_3">
    
                <div class="w3-container">
                    <h2> {{$product->name}}</h2><hr>
                    <h3>Price: ${{$product->price}}/-</h3>
                    <p><del>$65.00/-</del>  45%</p>
                    <p>Qty: {{$product->qty}} pcs</p>
                </div><hr>
                <div class="col span_1_of_2" style="width:200px;">
                    <label for="size">Select Size:</label>
                    <select name="size" id="size">
                        <option value="XXL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="S">S</option>
                    </select>   
                </div>
                <div class="w3-container">
                    <div class="col span_1_of_2">
                        <button class="btnBuy">Buy Now</button>
                    </div>
                    <div class="col span_1_of_2">
                        <button type="submit" class="btnCart">Add cart</button>
                    </div>
                    <div class="col span_1_of_2">
                        <a href="#"><button class="">Go Cart</button></a>
                    </div>
                </div>
            </div>
            <div class="col span_1_of_3 box">
                <h4>{{$product->qty}} Dhaka, Dhaka North, Banani Road No. 12 - 19</h4>
                <p>Free Delivery 6 May - 14 May</p>
                    <h6>Contact: {{$product->price}}</h6>
                <p>Saller ID: 9534</p>
                <hr>
                <p>Cash on Delivery Available</p>
            </div>            
        </div>

    </div>
</section>

<br><hr><br>

<section id="related-product">
    <div class="w3-container">
        <h4>Related Products</h4>
        <div class="row">
            @foreach($related_products as $relProducts)
            <div class="col span_1_of_3 text-truncate">
                <div class="card my-4">
                    <div class="product__item__pic set-bg">
                        <a href="{{url('/products/'.$relProducts->id)}}"><img src="{{asset(explode('|', $relProducts->image)[0])}}" alt="" height="250px" width="250px"></a>
                    </div>
                    <div class="product__item__text p-2 text-truncate">
                        <h5><a href="{{url('/products/'.$relProducts->id)}}">{{$relProducts['name']}}</a></h5>
                        <h5>Price: ${{$relProducts['price']}}</h5>
                        <h5>Qty: {{$relProducts['qty']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>       
    </div>
</section>


<script>
function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}
</script>

</body>
</html>
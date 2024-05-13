<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="/css/product_css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/css/product_css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="/css/product_css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="/css/product_css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="/css/product_css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="/css/product_css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="/css/product_css/style.css" type="text/css">
    
</head>
<body>
@include('menu')
<section id="account-section">
    <div class="row">
        <div class="col text-center">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @elseif(session()->has('error'))
            <div class="alert alert-warning">
                {{ session()->get('error') }}
            </div>
            @endif
        </div>
    </div>
</section>

<section id="login-section">
  <div class="container">
    <div class="row">
      <div class="col mt-4">
        <form action="/products" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <label for="Product">Product name</label>
                <input type="text" name="name" class="form-control" id="Product"  placeholder="Enter product name">
            </div>
            <div class="form-group">
                <label for="Product">Chose product category</label>
                <select name="cbxCategory" class="form-control" id="category">
                    <option selected disabled>Chose product category</option>
                    <option value="1">Boy</option>
                    <option value="2">Girl</option>
                    <option value="3">Infant</option>
                    <option value="4">Men</option>
                    <option value="5">Women</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Price">Price</label>
                <input type="number" name="price" class="form-control" id="Price"  placeholder="Enter product Price">
            </div>
            <div class="form-group">
                <label for="qty">Qty</label>
                <input type="number" name="qty" class="form-control" id="qty"  placeholder="Enter product qty">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="images[]" multiple>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>


<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            @foreach($ShowProduct as $product)
            <div class="col-lg-2 col-md-4 col-sm-6 ">
                <div class="card my-4">
                    <div class="product__item__pic set-bg">
                        <img src="{{asset($product['image'])}}" alt="" height="250px" width="100%">
                    </div>
                    <div class="product__item__text p-2 d-inline-block text-truncate">
                        <h5><a href="#">{{$product['name']}}</a></h5>
                        <h5>Price: ${{$product['price']}}</h5>
                        <h5>Qty: {{$product['qty']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Product Section End -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
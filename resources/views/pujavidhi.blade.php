<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Category Design</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
        <div class="row">
</div>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-4">Explore Pujas by category</h4>
                </div>
                <div class="col-md-6">
                    <!-- <form action="{{route('pujavidhi.index')}}" method="get"><input name="query" type="text" placeholder="Search For Pujas..." class="search-input" value="@if(isset($_GET['query'])) {{$_GET['query']}} @endif"><button type="submit" >search</button><a  class="btn" href="{{route('pujavidhi.index')}}">reset</button></form> -->
                    <input type="search" id="search" name="search" class="form-control rounded" placeholder="Search" />
                <button type="button" class="btn btn-outline-primary">search</button>

                </div>
                @foreach($categories as $key=>$category)
                <div class="col-6 col-md-3">
                    <div class="category-card" onclick="getpujavidhi({{$category->id}})">
                        <span href="#"  class="category" >
                            <!-- <div class="category-card-img">
                                <img src="laptop.jpg" class="w-100" alt="Laptop">
                            </div> -->
                            <div class="category-card-body">
                                <h5>{{$category->category_name}}</h5>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
    
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row portfolio-block mycard" id="cat-1" >
                <div class="col-md-12">
                    <h4 class="mb-4">Our PujaVidhi</h4>
                </div>
                
                @foreach($data as $key=>$item)
                <div class="col-md-3">
                    <div class="product-card">
                        <div class="product-card-img">
                            
                            <img src=" uploads/{{$item->image}}" alt="Laptop">
                        </div>
                        <div class="product-card-body">
                           
                            <h5 class="product-name">
                               <a href="">
                                   {{$item->title}}
                               </a>
                            </h5>
                            <div>
                                <span class="selling-price"> {{$item->price}}</span>
                                
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1"> {{$item->categories->category_name}}</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>
            {{ $data->links() }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript">
    $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
<script>
 $(document).ready(function () {
        $('#search').on('keyup', function(){
            var value = $(this).val();
            $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function (data) {
                    $('.mycard').html(data);
                }
            });

        });
    });
    function getpujavidhi(value){
             $.ajax({
                type: "get",
                url: "/search",
                data: {'search':value},
                success: function (data) {
                    $('.mycard').html(data);
                }
            });

           
        }
</script>
</body>
</html>

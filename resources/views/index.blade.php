<html>
    <head>      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>    </head>
<body>
<div class="container center_div">
    <div class="row">
    <div class="p-5">
<form action="{{ route('products.search') }}" method="GET" class="form-inline">
    <input type="text" name="search" class="p-2" placeholder="Search Products......" style="border-radius:5px">
    <button type="submit" class="btn btn-success">Search</button>
</form>
@if(isset($_GET['search']))
@if (count($results) > 0)
    <p> {{count($results)}} products found. </p>
    <ul>
        @foreach ($results as $result)
            <li>{{ $result->name }}:{{$result->brand}}</li>
            <!-- <li>{{$result->brand}}({{$result->count()}})</li> -->
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif
@endif
    </div>
  </div>
</div>
</body>
</html>
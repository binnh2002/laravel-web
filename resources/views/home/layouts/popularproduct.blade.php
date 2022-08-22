<h2>Popular Products</h2>
<br>
<div class="row">

    @foreach ($data as $row)
        <div class="col-md-3">
            <a href="inner-productpage.html" class="text-dark">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ asset('img/' . $row->product_image) }}"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"> {{ $row->product_title }}</p>
                        <p class="card-cost">{{ $row->product_price }} $</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

</div>

<h2>New Arrived</h2>
<br>
<div class="row">
    @foreach ($data as $row)
        <div class="col-md-3">
            <a href="{{url('view/product/'. $row->product_id)}}"class="text-dark">
                <div class="card">
                    <img class="card-img-top img-fluid"
                        src="https://lh3.googleusercontent.com/wQP8wlXt_Sd0UJzgGDj01q7-aqtTFIFph65HwEMDNq2FUmic1Q3dvA12KXL4Jn2HC88VJByKpZMw-Y_tG-IWTkm-30Rqg_Co=w500-rw"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">{{ $row->product_title }}</p>
                        <p class="card-cost">{{ $row->product_price }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach

</div>

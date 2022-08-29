        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit profile</h1>

                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ url('/user/profile/update') }}" method="post">
                        @csrf
                        <div class="md-3">
                            <label for='id' class='form-label'>ID</label>
                            <input type="text" name="id" class="form-control" value="{{ Auth::user()->id }}"
                                readonly>
                        </div>
                        <div class="md-3"> <label for='name' class='form-label'>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="md-3"> <label for='email' class='form-label'>Email</label>
                            <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}"
                                readonly>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('/') }}" class="btn btn-success">Back</a>
                    </form>
                </div>
            </div>
        </div>

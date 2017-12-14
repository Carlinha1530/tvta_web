<div class="row">
    @if (count($errors) > 0)
        <div class="col s12 m12">
            <div class="card red darken-1">
                <div class="card-content white-text">
                    <p>ATENÇÂO!!</p><br>
                    @foreach($errors->all() as $errors)
                    <li>{{ $errors }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
</div>

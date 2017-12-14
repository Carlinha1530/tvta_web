<style>
	.card {
	    position: relative;
	    margin: 0.5rem 0 1rem 0;
	    background-color: #fff;
	    transition: box-shadow .25s;
	    /*border-radius: 2px;*/
        left: 15px;
	    margin-right: 30px;
	    /*padding: 15px;*/
	    margin-bottom: 0px;
	}
	.green {
	    background-color: #4CAF50 !important;
	}
	.red {
	    background-color: #F44336 !important
	}
	.amber {
	    background-color: #F44336 !important
	}
	.blue {
	    background-color: #039be5 !important
	}

	.white-text {
	    color: #FFFFFF !important;
        font-size: 15px;
        font: 600 18px/0px 'Open Sans', sans-serif;
	}
	.card .card-content {
	    padding: 24px;
	    border-radius: 0 0 2px 2px;
	}
	.center, .center-align {
	    text-align: center;
	}
</style>


@if ($message = Session::get('success'))
{{-- <div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div> --}}
<div class="row">
    <div class="col s12">
        <div class="card green white-text ">
            <div align="center" class="card-content">
                <span class="center">{{ $message }}</span>
            </div>
        </div>
    </div>
</div>
@endif

@if ($message = Session::get('error'))
{{-- <div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div> --}}
<div class="row">
    <div class="col s12">
        <div class="card red white-text ">
            <div align="center" class="card-content">
                <span class="center">{{ $message }}</span>
            </div>
        </div>
    </div>
</div>
@endif

@if ($message = Session::get('warning'))
{{-- <div class="alert alert-warning alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div> --}}
<div class="row">
    <div class="col s12">
        <div class="card amber white-text ">
            <div align="center" class="card-content">
                <span class="center">{{ $message }}</span>
            </div>
        </div>
    </div>
</div>
@endif

@if ($message = Session::get('info'))
{{-- <div class="alert alert-info alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div> --}}
<div class="row">
    <div class="col s12">
        <div class="card blue white-text ">
            <div align="center" class="card-content">
                <span class="center">{{ $message }}</span>
            </div>
        </div>
    </div>
</div>
@endif

@if ($errors->any())
{{-- <div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div> --}}
<div class="row">
    <div class="col s12">
        <div class="card red white-text ">
            <div align="center" class="card-content">
                Please check the form below for errors
            </div>
        </div>
    </div>
</div>
@endif

@extends('layout.master') 
@section('content')
<div class="parallax-container center valign-wrapper borderdown">
    <div class="parallax"><img src="/image/background.jpg">
    </div>
    <div class="container white-text">
        <div class="row">
            <div class="col s12">
                <h2>Galerie</h2>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="row">
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="image/event.jpg">
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="image/event.jpg">
                </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card">
                <div class="card-image">
                    <img src="image/event.jpg">
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
 
@section('scripts')
<script>

</script>
@endsection
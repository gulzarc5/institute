	  	@extends('web.templete.master')

	    {{-- META --}}
	    @section('meta')
	     <title>Parakiaki Academy</title>
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
	     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	     <style>
	     	@media (min-width:1200px) {.container{max-width:1200px!important}}  dl, ol, ul {margin-bottom:0rem;}
	     </style>
	    @endsection

	    @section('content')
	        <div class="breadcrumb-area">
			    <div class="breadcrumb-top default-overlay bg-img pt-30 pb-10">
			        <div class="container">
			            <h2>Gallery</h2>
			        </div>
			    </div>
			    <div class="breadcrumb-bottom">
			        <div class="container">
			            <ul>
			                <li><a href="{{route('web.index')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Gallery</span></li>
			            </ul>
			        </div>
			    </div>
			</div>		    
			<div class="about-us pt-50 pb-50">
			<div class="container">
			    <div class="row gallery">
			        <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 col-xs-6 mb-30">
			            <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded">
			        </a>
			        <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 col-xs-6 mb-30">
			            <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded">
			        </a>
			        <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 col-xs-6 mb-30">
			            <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded">
			        </a>
			        <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 col-xs-6 mb-30">
			            <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid rounded">
			        </a>
			        <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 col-xs-6 mb-30">
			            <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid rounded">
			        </a>
			        <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-3 col-xs-6 mb-30">
			            <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded">
			        </a>
			    </div>
			</div>
			</div>
    	@endsection  

    	@section('script') 
	    	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    		<script>
    			$(document).on("click", '[data-toggle="lightbox"]', function(event) {
				  event.preventDefault();
				  $(this).ekkoLightbox();
				});
    		</script>
    	@endsection 

      
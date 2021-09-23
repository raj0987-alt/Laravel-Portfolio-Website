@extends('Layout.app')

@section('content')
<div class="container"> <!-- load services using javascript start -->
<div class="row">
<div class="col-md-12 p-5">
<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Image</th>
	  <th class="th-sm">Name</th>
	  <th class="th-sm">Description</th>
	  <th class="th-sm">Edit</th>
	  <th class="th-sm">Delete</th>
    </tr>
  </thead>
  <tbody id="service_table">
  
	
	
	
	
  </tbody>
</table>

</div>
</div>
</div> <!-- load services using javascript end -->

<div class="container">
<div class="row">
<div class="col-md-12 text-center p-5">
	<img class="w-25" src="{{asset('images/loader.svg')}}">


</div>
</div>
</div>



@endsection

@section('script')
<script type="text/javascript">
	getServicesData();
</script>

@endsection
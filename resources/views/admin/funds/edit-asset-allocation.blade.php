@extends('layouts.admin-app')

@section('content')
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">

<div class="forms">
<div class=" form-grids row form-grids-right">
<div class="widget-shadow " data-example-id="basic-forms"> 
<div class="form-title">
<h4>Edit Data For Features and Benefits:</h4>
</div>
<div class="form-body">

<form method="POST" action="{{url('edit_asset_allocation')}}" class="form-horizontal">
{{csrf_field()}}								
<div class="form-group">


<div class="col-md-12">
<?php foreach($asset_allocation as $aa){ ?>
<input id="id" type="hidden" name="id" value="<?php echo $aa->id;?>"   autofocus="autofocus" class="form-control">
<div class="col-sm-6">
<input type="text" name="aa_keys" value="<?php echo $aa->aa_keys;?>"   autofocus="autofocus" class="form-control">
</div>
<div class="col-sm-6">
<input type="text" name="aa_values" value="<?php echo $aa->aa_values;?>"   autofocus="autofocus" class="form-control">
</div>
<br>
<br>

<div class="col-md-12">
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('add_fund_data')}}/<?php echo $aa->fund_id?>" id="gtf" class="btn btn-primary">Go Back</a>
</div>

<?php } ?> 


</div>    

</div> 	

</form>

</div>
</div>
</div>
</div>
<div class="clearfix"> </div>


				
				
				
			</div>
		</div>

@endsection

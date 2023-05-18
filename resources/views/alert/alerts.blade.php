

{{-- Message --}}
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible" tole="alert">
    <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
        <strong>Success!</strong>{{session('success')}}
</div>

@endif

@if (Session::has('error'))

<div class="alert alert-danger alert-dismissible" tole="alert">
<button type="button" class="close" data-dismiss="alert">
    <i class="fa fa-times"></i>
    <strong>error!</strong>{{session('error')}}
    </div>

@endif

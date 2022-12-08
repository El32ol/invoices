@if(session()->has('Add'))
<div class="alert alert-success" role="alert">
  <strong>{{session()->get('Add')}}</strong>
</div>
@endif
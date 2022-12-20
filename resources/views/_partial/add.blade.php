@if(session()->has('add'))
<div class="alert alert-success" role="alert">
  <strong>{{session()->get('add')}}</strong>
</div>
@endif
@if(session()->has('edit'))
<div class="alert alert-success" role="alert">
  <strong>{{session()->get('edit')}}</strong>
</div>
@endif
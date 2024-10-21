@if (session()->has('success'))
<div x-show="show" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('success') }}</strong>  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
@endif

@if (session()->has('danger'))
<div x-show="show" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('success') }}</strong>  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
@endif
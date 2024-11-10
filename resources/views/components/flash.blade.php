@if (session()->has('success'))
    <div x-show="show" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
        <strong>{{ session()->get('success') }}</strong>
        {{-- <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button> --}}
    </div>
@endif

@if (session()->has('error'))
    <div x-show="show" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
        <strong>{{ session()->get('error') }}</strong>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if (session()->has('status'))
    <div x-show="show" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
        <strong>{{ session()->get('status') }}</strong>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
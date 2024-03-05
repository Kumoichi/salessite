@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Select Date</h2>
    <form action="{{ route('save.date') }}" method="post">
        @csrf
        <input type="text" id="selected_date" name="selected_date" placeholder="Select date">
        <button type="submit">Submit</button>
    </form>
</div>
@endsection

@push('scripts')
<script>
    flatpickr("#selected_date", {
        enableTime: false,
        dateFormat: "Y-m-d",
    });
</script>
@endpush

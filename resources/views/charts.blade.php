@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-md border my-8 px-6 py-6">
        <div class="bg-white rounded-md border my-8 px-6 py-6 mx-40">
            <div>
                <h2 class="text-2xl font-semibold">Charts</h2>
                <livewire:chart-orders/>
            </div>
        </div>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.js"
                integrity="sha512-d6nObkPJgV791iTGuBoVC9Aa2iecqzJRE0Jiqvk85BhLHAPhWqkuBiQb1xz2jvuHNqHLYoN3ymPfpiB1o+Zgpw=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endpush
@endsection

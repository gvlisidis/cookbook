<div
    wire:ignore
    class="mt-4"
     x-data="{
     selectedYear: @entangle('selectedYear'),
     thisYearOrders:  @entangle('thisYearOrders'),
     lastYearOrders:  @entangle('lastYearOrders'),
     init() {

        const labels = [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' ];

        const data = {
        labels: labels,
        datasets: [
        {
            label: '2021',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: {{ Js::from($lastYearOrders) }},
        },
        {
            label: '2022',
            backgroundColor: 'rgb(21,81,160)',
            borderColor: 'rgb(21,81,160)',
            data: {{ Js::from($thisYearOrders) }},
        }
        ]
        };

        const config = {
        type: 'bar',
        data: data,
        options: {}
        };

        const myChart = new Chart(
        this.$refs.canvas,
        config
        );
     }
     }"
>
    <span>Year</span>
    <select name="selectedYear" id="selectedYear" class="border" wire:model="selectedYear">
        @foreach($availableYears as $year)
            <option value="{{ $year }}">{{ $year }}</option>
        @endforeach
    </select>
    <div>
        Selected: <span x-text="selectedYear"></span>
    </div>
    <div class="my-6">
        <div>Last Year: {{ array_sum($lastYearOrders) }}</div>
        <div>This Year: {{ array_sum($thisYearOrders) }}</div>
    </div>
    <canvas id="myChart" x-ref="canvas"></canvas>
</div>

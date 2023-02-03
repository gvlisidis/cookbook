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
            label: `${this.selectedYear - 1} Orders`,
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: this.lastYearOrders,
        },
        {
            label: `${this.selectedYear} Orders`,
            backgroundColor: 'rgb(21,81,160)',
            borderColor: 'rgb(21,81,160)',
            data: this.thisYearOrders,
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

        Livewire.on('updateTheChart', ()=>{
            myChart.data.datasets[0].label = `${this.selectedYear - 1} Orders` ;
            myChart.data.datasets[1].label = `${this.selectedYear} Orders` ;
            myChart.data.datasets[0].data = this.lastYearOrders;
            myChart.data.datasets[1].data = this.thisYearOrders;

            myChart.update();
        });
     }
     }"
>
    <span>Year</span>
    <select name="selectedYear" id="selectedYear" class="border" wire:model="selectedYear" wire:change="updateOrdersCount">
        @foreach($availableYears as $year)
            <option value="{{ $year }}">{{ $year }}</option>
        @endforeach
    </select>
    <div>
        Selected: <span x-text="selectedYear"></span>
    </div>
    <div class="my-6">
        <div>
            <span x-text="selectedYear - 1"></span> Orders:
            <span x-text="lastYearOrders.reduce((a,b) => a + b)"></span>

        </div>
        <div>
            <span x-text="selectedYear"></span> Orders:
            <span x-text="thisYearOrders.reduce((a,b) => a + b)"></span>
        </div>
    </div>
    <canvas id="myChart" x-ref="canvas"></canvas>
</div>

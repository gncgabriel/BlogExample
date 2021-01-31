<div class="card_list">
    <div class="text">
        @if (isset($autor))
            <div class="autor">
                <span> {{ $data ?? '01/01/2021' }} - {{ $hora ?? '15:00' }} Por {{ $autor ?? 'NC Dev' }}</span>
            </div>
        @endif
        <div class="title font-sen-bold" style="font-size: 17px">{{ $titulo ?? '###' }}</div>
    </div>
</div>

<div class="nc_card">
    <a href="#">
        <div class="img ">
            <div class="background transition"
                style="background-color:black;background-image: url({{ $imagem ?? asset('images/DataScience.png') }})"></div>
        </div>
        <div class="text p-4 transition">
            <div class="autor">
                <span> {{$data ?? '01/01/2021'}} - {{$hora ?? '15:00'}} Por {{$autor ?? 'NC Dev'}}</span>
            </div>
            <div class="title font-monserrat-bold" style="font-size: 20px">{{ $titulo ?? '###' }}</div>
            <div class="spoiler">{{ $spoiler ?? 'Leia esse artigo' }}</div>
        </div>
    </a>
</div>

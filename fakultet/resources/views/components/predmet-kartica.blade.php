<div class="col-lg-4 mb-5">
    <div class="card border-0 bg-light shadow-sm pb-2">
        <img class="card-img-top mb-2" src="img/class-{{rand(1,3)}}.jpg" alt="">
        <div class="card-body text-center">
            <h4 class="card-title">{{$prom['naziv']}}</h4>
            <p class="card-text">{{$prom['opis']}}</p>
        </div>
        <div class="card-footer bg-transparent py-4 px-5">
            <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right"><strong>ECTS</strong></div>
                <div class="col-6 py-1">{{$prom['ects']}}</div>
            </div>
            <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right"><strong>Status</strong></div>
                <div class="col-6 py-1">
                    @if ($prom['status']=='o')
                    {{ 'Obavezan' }}
                    @else
                    {{ 'Izborni' }}   
                    @endif
                </div>
            </div>
        </div>
        <a href="/predmeti/{{$prom->id}}" class="btn btn-primary px-4 mx-auto mb-4">Upiši</a>

        <form action="/predmeti/{{$prom->id}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-destroy px-4 mb-4">Obrisite</button>
        </form>
    </div>
</div>
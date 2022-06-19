<div class="row align-items-center">
    <div class="col-lg-8">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Score</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 10; $i++)
                <tr>
                    <th scope="row">{{$i+1}}</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
    <div class="col-lg-4 px-10">
        <img src="{{ asset('img/designs/trophee.webp') }}" class="img-fluid" alt="">
    </div>
</div>

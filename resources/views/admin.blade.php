@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- encabezado -->
        <br>
        <div class="row mb-4">
            <!-- imagen -->
            <div class="col-12 col-md-2 mt-4" style="text-align: center">
                <img src="https://media.licdn.com/dms/image/C5603AQH7W-vEuV_ZPA/profile-displayphoto-shrink_800_800/0/1581976702186?e=1686787200&v=beta&t=Akl5AQSal-D-wKFP4AQfDXru28Hp7xjOaCUxx3GTsDQ"
                    alt="no encontrada" style="max-width: 145px; border-radius: 50%;">
            </div>
            <!-- datos personales -->
            <div class="col-12 col-md-3 mt-4">
                <!-- nombre -->
                <div class="form-group row" style="text-align: center">
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" id="name"
                            value="David Melchor Fernández" style="font-size: 14pt">
                    </div>
                </div>
                <!-- edad,peso y altura -->
                <div class="form-group row">
                    <div class="col-4">
                        <input type="text" readonly class="form-control-plaintext" id="name" value="28 años">
                    </div>
                    <div class="col-4">
                        <input type="text" readonly class="form-control-plaintext" id="name" value="75 kg">
                    </div>
                    <div class="col-4">
                        <input type="text" readonly class="form-control-plaintext" id="name" value="1.77 cm">
                    </div>
                </div>

                <div class="form-group row mt-3">
                    <button type="button" class="btn text-white" style="background-color: #159e67">
                        Pérdida de peso <span class="badge badge-light"></span>
                    </button>
                </div>

            </div>

            <div class="col-0 col-md-1 mt-4"></div>
            <!-- historial clinico -->
            <div class="col-12 col-md-5 mt-4">
                <label for="">Cantidad de agua en el cuerpo</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0"
                        aria-valuemax="100">45.4%</div>
                </div>

                <label for="">Para producir los musculos</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 12.3%" aria-valuenow="12"
                        aria-valuemin="0" aria-valuemax="100">12.3%</div>
                </div>

                <label for="">Para producir los huesos</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 4.3%" aria-valuenow="4" aria-valuemin="0"
                        aria-valuemax="100">4.3%</div>
                </div>

                <label for="">Para almacenar el exceso de energia</label>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 13.5%" aria-valuenow="13"
                        aria-valuemin="0" aria-valuemax="100">13.5%</div>
                </div>
            </div>
        </div>

        <br><br>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Mis recetas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Mis logros</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- inicio -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row mt-4">
                    <div class="col-12 col-md-4 text-center">
                        <h3>Reto de la semana</h3>
                        <canvas id="myChart" style="max-width: 100%"></canvas>
                    </div>
                    <div class="col-md-8">
                        <img src="meta.png" alt="imagen no encontrada">
                        <h4>Caminar 3 km</h4> 
                    </div>
                </div>
            </div>
            <!-- Mis recentas -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            </div>
            <!-- Mis logros -->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

            </div>
        </div>
    </div>
</div>
<script>
    const ctx = document.getElementById('myChart');
  
    new Chart(ctx, {
      type: 'pie',
      data: {
        datasets: [{
          data: [50],
          borderWidth: 1
        }]
      }
    });
</script>
@endsection
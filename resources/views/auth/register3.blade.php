@extends('layouts.app')

@section('content')
<div class="container">

    <form class="text-center">
        <!-- Datos personales -->
        <div id="datosPersonales">
            <h2 class="mt-2 mb-4" style="color:	#fecd57">
                <strong>Datos Personales</strong>
            </h2>
            <div class="row mb-2">
                <div class="mb-3 col-12 col-md-4">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="ap1" class="form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="ap1">
                </div>
                <div class="mb-3 col-12 col-md-4">
                    <label for="ap1" class="form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="ap1">
                </div>
            </div>

            <div class="row  mb-2">
                <div class="mb-6 col-12 col-md-4">
                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="edad">
                </div>
                <div class="mb-6 col-12 col-md-4">
                    <label for="sexo" class="form-label">Sexo</label>
                    <select name="sexo" id="sexo" class="form-control">
                        <option value="0">Hombre</option>
                        <option value="1">Mujer</option>
                    </select>
                </div>
                <div class="mb-6 col-12 col-md-4">
                    <label for="tel" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="tel">
                </div>
            </div>

            <div class="row  mb-2">
                <div class="mb-6 col-12 col-md-4">
                    <label for="edad" class="form-label">Peso</label>
                    <input type="number" class="form-control" id="edad">
                </div>
                <div class="mb-6 col-12 col-md-4">
                    <label for="edad" class="form-label">Altura</label>
                    <input type="number" class="form-control" id="edad">
                </div>
            </div>
            <br>
            <!-- Objectivo -->
            <div id="objecti">
                <h2 class="mt-2 mb-4" style="color:	#fecd57">
                    <strong>¿Cual es tu Objectivo?</strong>
                </h2>
                <select name="objectivo" id="objectivo" class="form-control">
                    <option value="0">Pérdida de peso.</option>
                    <option value="1">Ganancia de masa muscular.</option>
                    <option value="2">Mejora de salud cardiovascular.</option>
                    <option value="3">Estilo de vida saludable.</option>
                </select>
            </div>
            <br>
            <button type="button" class="btn btn-lg text-white" style="background-color: #159e67" onclick="enviar()">
                Siguiente
            </button>
        </div>



        <!-- Evaluacion -->
        <div style="display: none" id="evaluacion">
            <h2 class="mt-2 mb-4" style="color:	#fecd57">
                <strong>Evalucación</strong>
            </h2>
            <!-- pregunta01 -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="row mb-2">
                        <label for="quiz1" class="form-label">¿Cuál es tu trabajo diario?</label>
                        <select name="quiz1" id="quiz1" class="form-control">
                            <!-- sedentario 0 -->
                            <option value="0">Sí, trabajo en una oficina todo el día y apenas me muevo</option>
                            <!--  ligeramente activo 1 -->
                            <option value="1">Sí, mi trabajo requiere que me levante y camine algunas veces durante el
                                día</option>
                            <!-- moderadamente activo 2 --->
                            <option value="2">Mi trabajo me hace caminar o estar de pie durante la mayor parte del día
                            </option>
                            <!-- significativamente activo 3  -->
                            <option value="3">Mi trabajo requiere que haga esfuerzo físico intenso durante varias horas
                                al día</option>
                            <!-- extremadamente activo 4 -->
                            <option value="4">Soy atleta profesional o tengo un trabajo muy activo</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- pregunta02 -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="row mb-2">
                        <label for="quiz1" class="form-label">¿Cuántas veces a la semana realizas actividad física
                            estructurada, como ir al gimnasio, correr o practicar deportes?</label>
                        <select name="quiz1" id="quiz1" class="form-control">
                            <!-- sedentario 0 -->
                            <option value="0">No hago actividad física.</option>
                            <!--  ligeramente activo 1 -->
                            <option value="1">Hago actividad física 1 vez a la semana.</option>
                            <!-- moderadamente activo 2 --->
                            <option value="2">Hago actividad física de 2 a 3 veces por semana.</option>
                            <!-- significativamente activo 3  -->
                            <option value="3">Hago actividad física de 4 a 5 veces por semana.</option>
                            <!-- extremadamente activo 4 -->
                            <option value="4">Hago actividad física más de 5 veces por semana.</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- pregunta03 -->
            <div class="row mb-2">
                <div class="col-12">
                    <div class="row mb-2">
                        <label for="quiz1" class="form-label">¿Tienes algún tipo de actividad física que te guste hacer
                            como parte de tu tiempo libre, como bailar o practicar yoga?</label>
                        <select name="quiz1" id="quiz1" class="form-control">
                            <!-- sedentario 0 -->
                            <option value="0">No tengo ninguna actividad física que me guste hacer.</option>
                            <!--  ligeramente activo 1 -->
                            <option value="1">Me gusta caminar o nadar en mi tiempo libre.</option>
                            <!-- moderadamente activo 2 --->
                            <option value="2">Me gusta hacer ejercicio aeróbico o levantar pesas en mi tiempo libre.
                            </option>
                            <!-- significativamente activo 3  -->
                            <option value="3">Me gusta correr o practicar deportes como el fútbol o el baloncesto en mi
                                tiempo libre</option>
                            <!-- extremadamente activo 4 -->
                            <option value="4">Me gusta participar en carreras o maratones en mi tiempo libre.</option>
                        </select>
                    </div>
                </div>
            </div>

            <br>

            <button type="submit" class="btn btn-success btn-lg" style="background-color: #159e67">Enviar</button>
        </div>

    </form>
</div>
<script>
    function enviar(){
        document.getElementById("datosPersonales").style.display="none";
        document.getElementById("evaluacion").style.display="block";
    }
</script>
@endsection
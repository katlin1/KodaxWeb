<!DOCTYPE html>
<html>
<<<<<<< HEAD:index.php
<title>Principal |KODAX.Clinical|</title>
<body background="imagenkodaxweb/fondo2.jpg"></body>
<?php
    require ("conexion.php");
    $resultado ="SELECT * FROM categorias";
    $stmt=$conexion->query($resultado);
    $rows = $stmt->fetchAll();
?>

=======
<title>W3.CSS Template</title>
<body background="imagenkodaxweb/fondo2.jpg"></body>
>>>>>>> origin/master:index.html
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>

</style>
<body>



<!-- Top menu -->
<div class="w3-top">
    <div class="w3-black w3-xlarge" style="max-width:1300px;margin:auto">
        <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">KodaxClinical</div>
        <div class="w3-right w3-padding-16">Iniciar Sesión</div>
        <div class="w3-center w3-padding-16">Registro</div>
    </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <?php
        $n=1;
        foreach ($rows as $s):
    ?>
        <div class="w3-quarter">
<<<<<<< HEAD:index.php
            <img src="imagenes/<?php echo $s['imagen']; ?>" alt="general" style="width:100%">
            <h3><?php echo $s['titulo']; ?></h3>
            <p><?php echo $s['descripcion']; ?></p>
        </div>
     <?php
        if($n==4||$n==8){
     ?>
            </div>
     <?php
        }
        if($n==4){
        ?>
            <div class="w3-row-padding w3-padding-16 w3-center" id="food">
        <?php
        }
        $n++;
        endforeach;
    ?>

=======
            <a href = "lista.html">
                <img src="imagenkodaxweb/general.jpg" alt="general" style="width:100%"></a>
            <h3>Busca tu médico</h3>
            <p>La medicina general constituye el primer nivel de atención médica. El médico general es un profesional
                capacitado para diagnosticar y manejar diferentes patologías comunes y derivar al especialista indicado cuando corresponda.</p>
        </div>
        <div class="w3-quarter">
            <a href = "listagine.html">
                <img src="imagenkodaxweb/ginec.jpg" alt="ginecologia" style="width:100%"></a>
            <h3>¿Necesitas un Ginecologo(a)?</h3>
            <p>Parte de la medicina que se ocupa del aparato genital femenino y sus enfermedades, incluidas las glándulas mamarias.</p>
        </div>
        <div class="w3-quarter">
            <a href = "listaodo.html">
                <img src="imagenkodaxweb/odon.png" alt="odontologia" style="width:100%"></a>
            <h3>¿Necesitas un Odontologo(a)?</h3>
            <p>La odontología es una de las ciencias de la salud que se encarga del diagnóstico, tratamiento y prevención de las
                enfermedades  de los dientes, las encías, el tejido periodontal,
                el maxilar superior, el maxilar inferior y la articulación temporomandibular.</p>
        </div>
        <div class="w3-quarter">
            <a href = "listaoftal.html">
                <img src="imagenkodaxweb/oftal.png" alt="oftalmologia" style="width:100%"></a>
            <h3>¿Necesitas un Oftalmologo(a)?</h3>
            <p>Un oftalmólogo realiza un examen ocular con ayuda de una lámpara de hendidura.
                La oftalmología​ es la especialidad médica que
                estudia las enfermedades de ojo y su tratamiento, incluyendo el globo ocular, su musculatura, el sistema lagrimal
                y los párpados.</p>
        </div>
    </div>
>>>>>>> origin/master:index.html

    <!-- Second Photo Grid-->
    <!--<div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-quarter">
            <a href = "listacardi.html">
                <img src="imagenkodaxweb/iconocardi.png" alt="cardiología" style="width:100%"></a>
            <h3>¿Necesitas un cardiologo(a)?</h3>
            <p>La cardiología es la rama
                de la medicina encargada del estudio, diagnóstico y tratamiento de las enfermedades del corazón
                y del aparato circulatorio.</p>
        </div>
        <div class="w3-quarter">
            <a href = "listaderma.html">
                <img src="imagenkodaxweb/iconoderma.png" alt="dermatología" style="width:100%"></a>
            <h3>¿Necesitas un dermatologo(a)?</h3>
            <p>La dermatología es la especialidad médica encargada del estudio de la estructura y función
                de la piel, así como de las enfermedades que la afectan, su diagnóstico, prevención y tratamiento.</p>
        </div>
        <div class="w3-quarter">
            <a href = "listaoto.html">
                <img src="imagenkodaxweb/iconooto.png" alt="otorrinolaringología" style="width:100%"></a>
            <h3>¿Necesitas un otorrinolaringologo(a)?</h3>
            <p>La otorrinolaringología (ORL) es la especialidad médica que se encarga del estudio de las enfermedades del oído,
                de las vías respiratorias superiores y parte de las inferiores (nariz, senos paranasales, faringe y laringe).</p>
        </div>
        <div class="w3-quarter">
            <img src="imagenkodaxweb/iconopedia.png" alt="Croissant" style="width:100%">
            <h3>¿Necesitas un pediatra?</h3>
            <p>Parte de la medicina que se ocupa del estudio del crecimiento y el desarrollo de los
                niños hasta la adolescencia, así como del tratamiento de sus enfermedades.</p>
        </div>
    </div>-->



    <!-- End page content -->
</div>



</body>
</html>
